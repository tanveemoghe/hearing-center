@extends('layouts.app')

@section('content')
<div class="row" role="main">
    <h3></h3>
    <div class="col-lg-12">
        <div class="card">

            <div class="card-header">
                <i class="fa fa-align-justify"></i>
                View Invoices <small>List</small>
            </div>
            @if($flash = session('msg')) 
            <div class="alert alert-success text-center alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ $flash }}
            </div>
            @endif

            <div class="card-body">
                <table id="view_cat_main" class="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th>INVOICE ID</th>
                            <th>Customer Name</th>
                            <th>Invoice Date</th>
                            <th>Due Date</th>
                            <th class="all">Edit</th>
                            <th class="all">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoices as $invoice)
                        <tr invoice-id="{{$invoice->id }}">
                            <td>{{ $invoice->invoice_number }}</td>
                            <td>{{ $invoice->customer_name }}</td>
                            <td>{{ date('Y-m-d', strtotime($invoice->invoice_date))}} </td>
                            <td>{{ date('Y-m-d', strtotime($invoice->due_date)) }}</td>
                            <td class="all">
                                <a href="{{ '/invoice/'.$invoice->id.'/edit' }}" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> View
                            </td>
                            <td>
                                <a href="{{ '/invoice/delete/'.$invoice->id }}" class="btn btn-info"><i class="fa fa-trash" aria-hidden="true"></i> Delete
                                </a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>    
    </div>
</div>
@endsection