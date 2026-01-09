@extends('layout.layout')

@section('content')

    @foreach ($products as $product)
        <a href="{{ route('products.show'), $product->id }}"> {{ $product->name }}</a>
        <a href="{{ route('products.edit'), $product->id }}"></a>
        <a href="{{ route('products.destroy'), $product->id }}"></a>
        {{ $product->price }}
    @endforeach
@endsection

