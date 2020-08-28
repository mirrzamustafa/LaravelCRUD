@extends('products.layout')



@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="float-left">
           <h2>Edit Product</h2>
        </div>
        <div class="float-right">
            <a class = "btn btn-primary" href="{{route('products.index')}}">Back</a>
        </div>
    </div>
    
    @if($errors->any())
     
        <div class="alert alert-danger col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <strong>WHOOPS!</strong> There were some problems with your input.<br/><br/>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
        </div>
    @endif

    <form action="{{route('products.update',$product->id)}}" method = "POST" class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
    {{csrf_field()}}
    @method('put')
        <div class="form-group">
            <strong>Name:</strong>
            <input class = "form-control"  type="text" name="name" id="" value = "{{$product->name}} " >
        </div>
        <div class="form-group">
            <strong>Detail:</strong>
            <textarea  class = "form-control"  name="detail" id=""  style = "height:150px;">{{$product->detail}}</textarea>
        </div>
        <div class="text-center form-group">
            <button class = "btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>

@endsection