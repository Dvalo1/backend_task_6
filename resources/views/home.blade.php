@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <a href="/products/create"><button class="btn btn-primary">Create Product</button></a>
                    <div class="products-list">
                        <table class="table">
                            <tr>
                                <td>#</td>
                                <td>Product title</td>
                                <td>Product Description</td>
                                <td>Created By</td>
                                <td>Actions</td>
                            </tr>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->user_id }}</td>
                            <td>
                                @if(auth()->user()->id == $product->user_id)
                                 <a href="{{ route('adminedit',["id"=>$product->id ]) }}" class="btn btn-warning">
                                    Update
                                </a>
                                @else
                                 <a href="#" class="btn btn-danger">
                                    No Permission to update
                                </a>
                                @endif
                                
                            </td>
                        </tr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
