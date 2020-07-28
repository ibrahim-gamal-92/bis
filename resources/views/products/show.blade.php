@extends('layouts.app')

@section('title')
    Product
@endsection

@section('content')

        <div class="container">
            <div class="card" >
                <div class="card-header">
                    <h3 class="box-title">{{ $product->name }}
                    </h3>

                </div>
                <div class="card-body">
                    <h5>Price : {{ $product->price }}</h5>
                    <h6>{{ $product->description }}</h6>
                </div>

            </div>
        </div>

@endsection