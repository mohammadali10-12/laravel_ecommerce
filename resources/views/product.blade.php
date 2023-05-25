@extends('master')
@section('content')

<div class="container custom-product">
    <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($product as $key => $items)
                <div class="carousel-item {{$key==0?'active':''}}">
                    <a href="detail/{{$items['id']}}">
                        <img src="{{$items['gallery']}}" alt="img">
                    </a>
                    <div>
                        <h3> {{$items['name']}}</h3>
                        <p>{{$items['description']}}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h1>Trending</h1>
        <div class="trending-wraper">

            @foreach($product as $key => $items)
            <div class="trend_img {{$key==0?'active':''}}">
                <a href="detail/{{$items['id']}}">
                    <img src="{{$items['gallery']}}" alt="img">
                </a>
                <div>
                    <h3> {{$items['name']}}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection