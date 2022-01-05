@extends('products.layout')

@section('title')
    Single Product
@endsection

@section('body')
    <p>{{ $product->title }}</p>
@endsection