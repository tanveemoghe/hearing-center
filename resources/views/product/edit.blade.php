@extends('product.create')

@section('method')
    {{ method_field('PUT') }}
@endsection

@section('name', $product->name)
@section('action', '/product/'.$product->id)
@section('price', $product->price)
@section('tax', $product->tax)

