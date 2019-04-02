@extends('layouts.form')

@section('form')

@section('formname', 'Add Products')

@section('action', '/product')

@section('encrypt', 'multipart/form-data')
<div class="card-body">
    <div class="row">
        <div class="col-sm-8 {{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="form-group is-invalid">
                <label for="name">Name <span class="required">*</span> </label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" value="@yield('name',old('name'))">
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>

    </div>
    
    <div class="row">
        <div class="col-sm-3 {{ $errors->has('price') ? ' has-error' : '' }}">
            <div class="form-group is-invalid">
                <label for="price" for="appendedPrependedInput">Price <span class="required">*</span> </label>
                <div class="controls">
                    <div class="input-prepend input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">C$.</span>
                        </div>
                        <input type="text" id="appendedPrependedInput" class="form-control cal-price price" size="8" name="price" id="price" value="@yield('price',old('price'))">
                    </div>
                </div>
                @if ($errors->has('price'))
                <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="col-sm-3 {{ $errors->has('tax') ? ' has-error' : '' }}">
            <div class="form-group is-invalid">
                <label for="tax" for="appendedPrependedInput">Tax <span class="required">*</span> </label>
                <div class="controls">
                    <div class="input-prepend input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">C$.</span>
                        </div>
                        <input type="text" id="appendedPrependedInput" class="form-control cal-price tax" size="8" name="tax" id="tax" value="@yield('tax',old('tax'))">
                        <div class="input-group-append">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>
                @if ($errors->has('price'))
                <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
                @endif
            </div>
        </div>
</div>

<script type="text/javascript">

  $('.colorpicker').colorpicker();

</script>

@endsection


