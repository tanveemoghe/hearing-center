@extends('clinic.create')

@section('method')
    {{ method_field('PUT') }}
@endsection

@section('location', $clinic->location)
@section('action', '/clinic/'.$clinic->id)
