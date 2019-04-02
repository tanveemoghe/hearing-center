<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = \App\Invoice::all();
        $clinics = \App\Clinic::all();
        
        return view('invoice.index')->with(['invoices'=>$invoices, 'clinics'=>$clinics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $clinics = \App\Clinic::all();
        return view('invoice.create')->with(['products'=>$products, 'clinics'=>$clinics]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'customer_name' => 'required|max:100',
            'clinic_id'=>'required',
            'customer_address' => 'required',
            'invoice_number' => 'required|max:100',
            'invoice_date' => 'required|date',
            'due_date' => 'required|date',
            'product_id' => 'required',
            'payment_type' => 'required'
        ]);
        
        $invoice = new \App\Invoice();
        $invoice->clinic_id = $request->clinic_id;
        $invoice->customer_name = $request->customer_name;
        $invoice->customer_address = $request->customer_address;
        $invoice->invoice_number = $request->invoice_number;
        $invoice->invoice_date = $request->invoice_date;
        $invoice->due_date = $request->due_date;
        $invoice->payment_type = $request->payment_type;
        $invoice->total_amount = $request->total_amount;
        $invoice->note = $request->note;
        $invoice->save();
        
        foreach($request->product_id as $key=>$productId) {
            $invoiceProductMap = new \App\InvoiceProductsMap();
            $invoiceProductMap->invoice_id = $invoice->id;
            $invoiceProductMap->product_id = $productId;
            $invoiceProductMap->quantity = $request->quantity[$key];
            $invoiceProductMap->save();
        }
        
        return redirect('/invoice');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = \App\Invoice::find($id);
        $products = Product::all();
        $clinics = \App\Clinic::all();
        
        $invoice->invoice_date = date('Y-m-d', strtotime($invoice->invoice_date));
        $invoice->due_date = date('Y-m-d', strtotime($invoice->due_date));
        
        $invoiceProductsMap = \App\InvoiceProductsMap::where(['invoice_id'=>$id])->get();
        return view('invoice.edit')->with(['products'=>$products, 'invoice'=>$invoice, 'invoiceProductsMap'=>$invoiceProductsMap, 'clinics'=>$clinics]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'customer_name' => 'required|max:100',
            'clinic_id'=>'required',
            'customer_address' => 'required',
            'invoice_number' => 'required|max:100',
            'invoice_date' => 'required|date',
            'due_date' => 'required|date',
            'product_id' => 'required',
            'payment_type' => 'required'
        ]);
        
        $invoice = \App\Invoice::find($id);
        $invoice->clinic_id = $request->clinic_id;
        $invoice->customer_name = $request->customer_name;
        $invoice->customer_address = $request->customer_address;
        $invoice->invoice_number = $request->invoice_number;
        $invoice->invoice_date = $request->invoice_date;
        $invoice->due_date = $request->due_date;
        $invoice->payment_type = $request->payment_type;
        $invoice->total_amount = $request->total_amount;
        $invoice->note = $request->note;
        $invoice->save();
        
        \App\InvoiceProductsMap::where(['invoice_id'=>$id])->delete();
        
        foreach($request->product_id as $key=>$productId) {
            $invoiceProductMap = new \App\InvoiceProductsMap();
            $invoiceProductMap->invoice_id = $invoice->id;
            $invoiceProductMap->product_id = $productId;
            $invoiceProductMap->quantity = $request->quantity[$key];
            $invoiceProductMap->save();
        }
        
        return redirect('/invoice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\InvoiceProductsMap::where(['invoice_id'=>$id])->delete();
        \App\Invoice::find($id)->delete();
        
        return redirect('/invoice');
    }
    
    /*
     * Adding new product ui to invoice form
     */
    public function addProduct($productRow)
    {
        $products = Product::all();
        return view('invoice._addProduct')->with(['products'=>$products, 'productRow'=>$productRow]);
    }
}
