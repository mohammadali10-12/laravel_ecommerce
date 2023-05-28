@extends('master')
@section('content')
<h1>Orders List</h1>
<div class="container">
    <!-- <a class="btn btn-primary" href="/order">order</a><br> -->
    <div class="row">

        @foreach($data as $key => $items)
        <div class="col-sm-4">
            <a href="detail/{{$items->id}}">
                <img src="{{$items->gallery}}" alt="img">
            </a>
        </div>
        <div class="col-sm-4">
            <h2>Name : {{$items->name}}</h2><br>
            <h5>Delivery Status : {{$items->status}}</h5>
            <h5>Payment Status : {{$items->payment_status}}</h5>
            <h5>Payment Method : {{$items->payment_method}}</h5><br>
            <h5>Address : {{$items->address}}</h5>
            <h5>Price : {{$items->price}}</h5>

        </div>
        <div class="col-sm-4">
        </div>
        @endforeach
    </div>
    <!-- <a class="btn btn-primary" href="/order">order</a><br> -->
</div>


@endsection