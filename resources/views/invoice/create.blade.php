@extends('layouts.form')

@section('form')

@section('formname', 'Add Invoice')

@section('action', '/invoice')
<div class="card-body">
    <div class="row" style="margin-top:20px;">
        <div class="col-sm-4 {{ $errors->has('clinic') ? ' has-error' : '' }}">
            <div class="form-group">
                <label for="clinic">Select Clinic <span class="required">*</span> </label>
                <select id="clinic" name="clinic_id" class="form-control">
                    <option value="">Select Clinic</option>
                    @foreach ($clinics as $clinic)
                    <option value="{{$clinic->id}}" {{(isset($invoice))?(($invoice->clinic_id == $clinic->id)?'selected':''):''}} >
                        {{$clinic->location}}
                    </option>
                    @endforeach
                </select>
                @if ($errors->has('clinic_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('clinic_id') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 {{ $errors->has('customer_name') ? ' has-error' : '' }}">
            <div class="form-group is-invalid">
                <label for="name">Customer Name <span class="required">*</span> </label>
                <input type="text" class="form-control" name="customer_name" id="name" placeholder="Enter customer name" value="@yield('customer_name',old('customer_name'))">
                @if ($errors->has('customer_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('customer_name') }}</strong>
                </span>
                @endif
            </div>
        </div>

    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-sm-8 {{ $errors->has('customer_address') ? ' has-error' : '' }}">
            <div class="form-group is-invalid">
                <label for="customer_address">Customer Address <span class="required">*</span> </label>
                <textarea type="textarea-input" class="form-control" name="customer_address" rows="4" id="customer_address" placeholder="Enter Customer Address">@yield('customer_address',old('customer_address'))</textarea>
                @if ($errors->has('customer_address'))
                <span class="help-block">
                    <strong>{{ $errors->first('customer_address') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-3 {{ $errors->has('invoice_number') ? ' has-error' : '' }}">
            <div class="form-group">
                <label for="invoice_number">Invoice Number <span class="required">*</span> </label>
                <input type="text" class="form-control" name="invoice_number" id="invoice_number" value="@yield('invoice_number',old('invoice_number'))">
                @if ($errors->has('invoice_number'))
                <span class="help-block">
                    <strong>{{ $errors->first('invoice_number') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-sm-4  {{ $errors->has('invoice_date') ? ' has-error' : '' }}">
            <div class="form-group">
                <label for="dob">Invoice Date</label>
                <input type="date" class="form-control" name="invoice_date" id="invoice_date" placeholder="Select Invoice Date" value="@yield('invoice_date',old('invoice_date'))">
                @if ($errors->has('invoice_date'))
                <span class="help-block">
                    <strong>{{ $errors->first('invoice_date') }}</strong>
                </span>
                @endif
            </div>
        </div>
  
        <div class="col-sm-4  {{ $errors->has('due_date') ? ' has-error' : '' }}">
            <div class="form-group">
                <label for="due_date">Due Date</label>
                <input type="date" class="form-control" name="due_date" id="due_date" placeholder="Select Due Date" value="@yield('due_date',old('due_date'))">
                @if ($errors->has('due_date'))
                <span class="help-block">
                    <strong>{{ $errors->first('due_date') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>
    <div class="products">
    <?php if(isset($invoiceProductsMap)) { ?>
        <?php foreach($invoiceProductsMap as $key=>$invoiceProduct) { ?>
            <div class="row product-row-{{$key+1}}">        
                <div class="col-sm-3 {{ $errors->has('product_id') ? ' has-error' : '' }}">
                    <div class="form-group">
                        <label for="name">Select Product <span class="required">*</span> </label>
                        <select id="product_id" name="product_id[]" class="form-control product-id" product-row="{{$key+1}}">
                            <option value="">Select Product</option>
                            @foreach ($products as $product)
                            <option value="{{$product->id}}" {{ ($invoiceProduct->product_id == $product->id)?'selected':'' }} >
                                {{$product->name}}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('product_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('product_id') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="quantity">Quantity <span class="required">*</span> </label>
                        <input type="text" class="form-control quantity" name="quantity[]" id="quantity" value="{{$invoiceProduct->quantity}}" product-row="{{$key+1}}">
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="price">Price <span class="required">*</span> </label>
                        <input type="text" class="form-control" name="price[]" id="price" value="{{$invoiceProduct->products->price}}" readonly="true">
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="tax">Tax<span class="required">*</span> </label>
                        <input type="text" class="form-control" name="tax[]" id="tax" value="{{$invoiceProduct->products->tax}}" readonly="true">
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="tax">Amount<span class="required"></span> </label>
                        <input type="text" class="form-control amount" name="amount[]" value="{{$invoiceProduct->quantity*($invoiceProduct->products->price+($invoiceProduct->products->price*$invoiceProduct->products->tax/100))}}" readonly='true'>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>    
    <div class="row product-row-1">        
        <div class="col-sm-3 {{ $errors->has('product_id') ? ' has-error' : '' }}">
            <div class="form-group">
                <label for="name">Select Product <span class="required">*</span> </label>
             
                <select id="product_id" name="product_id[]" class="form-control product-id" product-row="1">
                    <option value="">Select Product</option>
                    @foreach ($products as $product)
                    <option value="{{$product->id}}" >
                        {{$product->name}}
                    </option>
                    @endforeach
                </select>
                @if ($errors->has('product_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('product_id') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label for="quantity">Quantity <span class="required">*</span> </label>
                <input type="text" value="1" class="form-control quantity" name="quantity[]" id="quantity" value="" product-row="1">
            </div>
        </div>
        
        <div class="col-sm-2">
            <div class="form-group">
                <label for="price">Price <span class="required">*</span> </label>
                <input type="text" value="1" class="form-control" name="price[]" id="price" value="">
            </div>
        </div>
        
        <div class="col-sm-2">
            <div class="form-group">
                <label for="tax">Tax<span class="required">*</span> </label>
                <input type="text" value="1" class="form-control" name="tax[]" id="tax" value="">
            </div>
        </div>
        
        <div class="col-sm-2">
            <div class="form-group">
                <label for="tax">Amount<span class="required"></span> </label>
                <input type="text" value="1" class="form-control amount" name="amount[]" value="">
            </div>
        </div>
    </div>
    <?php } ?>    
    </div>    
    
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-sm-3">
            <button class="btn btn-sm btn-primary add-product">
                <i class="fa fa-dot-circle-o"></i> Add More Products
            </button>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label for="totoal_amount">Total Amount<span class="required">*</span> </label>
                <input type="text" class="form-control" name="total_amount" id="total_amount" value="@yield('total_amount',old('total_amount'))" readonly="true">
            </div>
        </div>
    </div>
    
    <div class="row" style="margin-top:20px;">
        <div class="col-sm-4 {{ $errors->has('payment_type') ? ' has-error' : '' }}">
            <div class="form-group">
                <label for="payment_type">Select Payment Type <span class="required">*</span> </label>
                <select id="product_type" name="payment_type" class="form-control">
                    <option value="">Select Payment Type</option>
                    <option value="cash" {{ (isset($invoice)?(($invoice->payment_type == 'cash')?'selected':''):'') }}>Cash</option>
                    <option value="cheque" {{ (isset($invoice)?(($invoice->payment_type == 'cheque')?'selected':''):'') }}>Cheque</option>
                    <option value="card" {{ (isset($invoice)?(($invoice->payment_type == 'card')?'selected':''):'') }}>Card</option>
                </select>
                @if ($errors->has('payment_type'))
                <span class="help-block">
                    <strong>{{ $errors->first('payment_type') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>

    
    <div class="row" style="margin-top:20px;">
        <div class="col-sm-4 {{ $errors->has('note') ? ' has-error' : '' }}">
            <div class="form-group is-invalid">
                <label for="note">Brief Note <span class="required">*</span> </label>
                <textarea type="textarea-input" class="form-control" name="note" rows="4" id="note" placeholder="Enter Brief note about order">@yield('note',old('note'))</textarea>
                @if ($errors->has('note'))
                <span class="help-block">
                    <strong>{{ $errors->first('note') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>

    

    
    <!--/.row-->
</div>
@endsection

@section('javascript')
<script type="text/javascript">
    $(document).ready(function () {
        $('.add-product').click(function(){
            var productRow = $('.products .row').length + parseInt(1);
            $.ajax({
                url: '/addproduct/'+productRow,
                type: 'GET',
                success: function(data) {
                    $('.products').append(data);
                }
            });
            
           return false; 
        });
        
        
        $(document).on('change','.product-id', function(){
            if($(this).val() == '') {
                return false;
            }
            var productRow = $(this).attr('product-row');
            $.ajax({
                url: '/productdetail/'+$(this).val(),
                type: 'GET',
                success: function(data) {
                    console.log(($('.product-row-'+productRow).find('input[name="price[]"]')));
                    $('.product-row-'+productRow).find('input[name="price[]"]').val(data.product['price']);
                    console.log(($('.product-row-'+productRow).find('input[name="price[]"]').val()));
                    $('.product-row-'+productRow).find('input[name="tax[]"]').val(data.product['tax']);
                    
                    var totalAmount = (data.product['price']*data.product['tax']/100)+parseFloat(data.product['price']);
                    
                    var total = $('.product-row-'+productRow).find('input[name="quantity[]"]').val()*totalAmount;
                    $('.product-row-'+productRow).find('input[name="amount[]"]').val(total);
                    
                    var totalAmount = 0;
                    $('.amount').each(function(){
                        totalAmount = totalAmount+parseFloat($(this).val());
                    });

                    $('#total_amount').val(totalAmount);
                }
            });
        });
        
        $(document).on('change','.quantity', function(){
            if($.isNumeric($(this).val()) == false) {
               alert('Only numbers are allowed');
            }
            
            var productRow = $(this).attr('product-row');
            
            var totalAmount = ($('.product-row-'+productRow).find('input[name="price[]"]').val()*$('.product-row-'+productRow).find('input[name="tax[]"]').val()/100)+parseFloat($('.product-row-'+productRow).find('input[name="price[]"]').val());
            console.log($('.product-row-'+productRow).find('input[name="quantity[]"]').val());
            var total = $('.product-row-'+productRow).find('input[name="quantity[]"]').val()*totalAmount;
            
            $('.product-row-'+productRow).find('input[name="amount[]"]').val(total);
            
            var totalAmount = 0;
            $('.amount').each(function(){
                totalAmount = totalAmount+parseFloat($(this).val());
            });
           
            $('#total_amount').val(totalAmount);
        });

    })

</script>
@endsection
