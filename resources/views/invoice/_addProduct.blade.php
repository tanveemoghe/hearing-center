<div class="row product-row-{{$productRow}}">        
        <div class="col-sm-3 {{ $errors->has('product_id') ? ' has-error' : '' }}">
            <div class="form-group">
                <label for="name">Select Product <span class="required">*</span> </label>
                <select id="product_id" name="product_id[]" class="form-control product-id" product-row="{{$productRow}}">
                    <option value="">Select Product</option>
                    @foreach ($products as $product)
                    <option value="{{$product->id}}" >
                        {{$product->name}}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-2 {{ $errors->has('quantity') ? ' has-error' : '' }}">
            <div class="form-group">
                <label for="quantity">Quantity <span class="required">*</span> </label>
                <input type="text" value="1" class="form-control quantity" name="quantity[]" id="quantity" value="@yield('quantity',old('quantity'))" product-row="{{$productRow}}">
            </div>
        </div>
        
        <div class="col-sm-2 {{ $errors->has('price') ? ' has-error' : '' }}">
            <div class="form-group">
                <label for="price">Price <span class="required">*</span> </label>
                <input type="text" value="1" class="form-control" name="price[]" id="price" value="@yield('price',old('price'))" disabled="true">
            </div>
        </div>
        
        <div class="col-sm-2 {{ $errors->has('tax') ? ' has-error' : '' }}">
            <div class="form-group">
                <label for="tax">Tax<span class="required">*</span> </label>
                <input type="text" value="1" class="form-control" name="tax[]" id="tax" value="@yield('tax',old('tax'))" disabled="true">
            </div>
        </div>
        
        <div class="col-sm-2 {{ $errors->has('tax') ? ' has-error' : '' }}">
            <div class="form-group">
                <label for="tax">Amount<span class="required"></span> </label>
                <input type="text" value="1" class="form-control amount" name="amount[]" id="amount" value="" disabled="true">
            </div>
        </div>
    </div>