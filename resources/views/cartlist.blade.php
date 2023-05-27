@extends('master')
@section('content')
<h1>Cart List</h1>
<div class="container">
    <a class="btn btn-primary" href="/order">order</a><br>
    <div class="row">

        @foreach($data as $key => $items)
        <div class="col-sm-4">
            <a href="detail/{{$items->id}}">
                <img src="{{$items->gallery}}" alt="img">
            </a>
        </div>
        <div class="col-sm-4">
            <h2>Name : {{$items->name}}</h2><br>
            <h5>description : {{$items->description}}</h5><br>
        </div>
        <div class="col-sm-4">
            <a class="btn btn-primary" href="/removeCart/{{$items->cart_id}}">Remove From Cart</a>
        </div>
        @endforeach
    </div>
    <a class="btn btn-primary" href="/order">order</a><br>
</div>


@endsection