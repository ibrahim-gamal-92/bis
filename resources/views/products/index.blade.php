@extends('layouts.app')

@section('title')
    Products
@endsection

@section('content')


<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Products
                        @can('is_admin')
                            <a title="Add" class="btn btn-xs btn-success " href="/products/create">Add</a>
                        @endif
                    </h2>
                </div>

            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-3">
                <div class="card" >
                    <div class="card-header">
                        <h3 class="box-title">{{ $product->name }}
                            <div class="btn-group pull-right">
                                <a title="View" class="btn btn-xs btn-success " href="/products/{{$product->id}}">View</a>
                                @can('is_admin')
                                    <a title="Edit" class="btn btn-xs btn-info " href="/products/{{$product->id}}/edit">Edit</a>
                                    <form method="POST" action="/products/{{$product->id}}">
                                        @csrf
                                        @method('DELETE')
                                        <button title="Delete" class="btn btn-xs btn-danger " type="submit">Delete</button>
                                    </form>
                                @endif


                            </div>
                        </h3>

                    </div>
                    <div class="card-body">
                        <h5>Price : {{ $product->price }}</h5>
                        <h6>{{ $product->description }}</h6>
                    </div>

                </div>
            </div>
            @endforeach
        </div>


    </div>
</section>

@endsection