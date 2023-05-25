@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$data['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go To Back</a><br>
            <h2>Name : {{$data['name']}}</h2><br>
            <h3>price : {{$data['price']}}</h3><br>
            <h4>category : {{$data['category']}}</h4><br>
            <h5>description : {{$data['description']}}</h5><br>
            <button class="btn btn-success">Add To Cart</button>
            <button class="btn btn-primary">Buy Now</button>
        </div>
    </div>
</div>

@endsection