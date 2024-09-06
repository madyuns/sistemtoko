@extends('layouts.app')
@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2>{{ $product->name }}</h2>
                <p><strong>Description:</strong> {{ $product->description }}</p>
                <p><strong>Price:</strong> ${{ $product->price }}</p>
                <p><strong>Stock:</strong> {{ $product->stock }}</p>
                <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
            </div>
        </div>
    </div>
@endsection