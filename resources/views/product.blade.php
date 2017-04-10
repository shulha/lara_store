@extends('layouts.main')

@section('content')
    <p>
        <p>{{ $product->name }}</p>
        <p>{{ $product->description }}</p>
        <p>{{ $product->price }}</p>
    </p>
    <form action="/order/{{$product->id}}">
        <input type="submit" value="Order">
    </form>
@endsection