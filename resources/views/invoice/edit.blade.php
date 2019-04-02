@extends('invoice.create')



@section('method')
    {{ method_field('PUT') }}
@endsection

@section('formname', 'Edit Invoice')

@section('action', '/invoice/'.$invoice->id)


@section('id', '/invoice/'.$invoice->id)
@section('customer_name', $invoice->customer_name)
@section('customer_address', $invoice->customer_address)
@section('invoice_number', $invoice->invoice_number)
@section('invoice_date', $invoice->invoice_date)
@section('due_date', $invoice->due_date)
@section('total_amount', $invoice->total_amount)
@section('payment_type', $invoice->payment_type)
@section('note', $invoice->note)




