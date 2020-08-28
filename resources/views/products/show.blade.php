@extends('products.layout')


@section('content') 
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">
        <div class="float-left">
            <h2>Show Products</h2>
        </div>
        <div class="float-right">
            <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <strong>Name: </strong> {{$product->name}}
        </div>
        <div class="form-group">
             <strong>Detail: </strong> {{$product->detail}}

        </div>
    </div>
</div>
@endsection