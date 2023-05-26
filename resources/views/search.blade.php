@extends('master')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <a href="">filter</a>
        </div>
        <div class="col-sm-4">
            <div class="search-wraper">
                @foreach($data as $key => $items)
                <div class="product-search">
                    <a href="detail/{{$items['id']}}">
                        <img src="{{$items['gallery']}}" alt="img">
                    </a>
                    <div>
                        <h2>Name : {{$items['name']}}</h2><br>
                        <h5>description : {{$items['description']}}</h5><br>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection