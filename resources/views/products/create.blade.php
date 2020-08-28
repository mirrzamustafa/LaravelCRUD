@extends('products.layout')


@section('content')
<div class="row">
    <div class="col-lg-12 "> 
        <div class="float-left pb-2">
             <h2>Add New Product</h2>  
        </div>
        <div class="float-right">
            <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>

    @if($errors->any())
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <div class="alert alert-danger">
                <strong>WHOOPS!</strong> There were some problems with your input.<br/><br/>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    </div>
    @endif

    <form action="{{ route('products.store') }}" method = "POST" class = "col-lg-12 col-md-12 col-sm-12 col-xs-12" >
        {{ csrf_field() }}
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class = "form-control" placeholder = "Name">
                </div>
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class = "form-control" name="detail" style = "height:150px" placeholder = "Detail"></textarea>
                </div>
                <div class="form-group text-center">
                    <button class = "btn btn-primary" type="submit">Submit</button>
                </div>
    </form>
</div>
@endsection