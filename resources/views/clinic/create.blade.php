@extends('layouts.form')

@section('form')

@section('formname', 'Add Clinic Location')

@section('action', '/clinic')

@section('encrypt', 'multipart/form-data')
<div class="card-body">
    <div class="row">
        <div class="col-sm-8 {{ $errors->has('location') ? ' has-error' : '' }}">
            <div class="form-group is-invalid">
                <label for="location">Clinic Location <span class="required">*</span> </label>
                <input type="text" class="form-control" name="location" id="location" placeholder="Enter clinic location" value="@yield('location',old('location'))">
                @if ($errors->has('location'))
                <span class="help-block">
                    <strong>{{ $errors->first('location') }}</strong>
                </span>
                @endif
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">

  $('.colorpicker').colorpicker();

</script>

@endsection


