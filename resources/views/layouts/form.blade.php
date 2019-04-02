@extends('layouts.app')

@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-sm-12">
            <form action="@yield('action')" method = "POST" enctype="@yield('encrypt')">
                {{ csrf_field() }}
                @section('method')
                
                @show
                <div class="card">
                    <div class="card-header">
                        <strong>@yield('formname')</strong>
                        <small>Form</small>
                    </div>
                    @yield('form')
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary">
                        <i class="fa fa-dot-circle-o"></i> Submit</button>
                    <button type="reset" class="btn btn-sm btn-danger">
                        <i class="fa fa-ban"></i> Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>  

@endsection