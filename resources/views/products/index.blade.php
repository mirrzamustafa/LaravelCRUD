@extends('products.layout')



@section('content')
<div class="row">
    <div class="col-lg-12">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="float-left pb-3">
            <h2>Laravel CRUD Application</h2>
        </div>
        <div class="float-right">
            <a href = "{{route('products.create')}}" class = "btn btn-success">Create New Products</a>
        </div>
    </div>
</div>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Details</th>
        <th width = "280px">Action</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->detail}}</td>

        <form method = "POST" action="{{route('products.destroy',$product->id)}}">
            <td>
                <a href="{{route('products.show',$product->id)}}" class="btn btn-info">Show</a>
                <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                
                {{ csrf_field() }}
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Delete</button>
            </td>
        </form>
    </tr>
    @endforeach

</table>
{{ $products->links() }}


@endsection