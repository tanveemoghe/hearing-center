@extends('layouts.app')

@section('content')
<div class="row" role="main">
    <h3></h3>
    <div class="col-lg-12">
        <div class="card">

            <div class="card-header">
                <i class="fa fa-align-justify"></i>
                View All Products <small>List</small>
            </div>
            @if($flash = session('msg')) 
            <div class="alert alert-success text-center alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ $flash }}
            </div>
            @endif

            <div class="card-body">
                <table id="view_prod_main" class="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Product ID</th>
                            <th>Product Title</th>
                            <th>Price (C$.)</th>
                            <th>Tax(%)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr product-id="{{ $product->id }}">
                                <td></td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ ($product->price) == ''?0: $product->price }}</td>
                                <td>{{ ($product->tax) == ''?0: $product->tax }}</td>
                                <td><a href="{{ '/product/'.$product->id.'/edit' }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a> 
                                    <button product-id="{{ $product->id }}" class="btn btn-danger delete-product"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button> 
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


@section('javascript')
@if (count($products) > 0)
<script type="text/javascript">
$(document).ready(function(){
   $(document).on('click','.delete-product',function(){
      var productId = $(this).attr('product-id');
      
      var r = confirm('Are you sure, you want to delete '+$('tr[product-id="'+productId+'"] td:nth-child(2)').html()+' ? It will delete its all products and its invoices as well.');
       if(r !== true) {
           return false;
       }
      
      $.ajax({
          url: '/product/'+productId,
          data: { "_token": "{{ csrf_token() }}", '_method': 'DELETE' },
          type: 'POST',
          success: function(data) {
              if(data.success == 1) {
                  $('tr[product-id="'+productId+'"]').remove();
              }
          }
      }) 
   });
});
</script>
@endif
@endsection