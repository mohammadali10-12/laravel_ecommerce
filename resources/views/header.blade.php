<?php

use App\Http\Controllers\productController;

$total = 0;

if (Session()->has('user')) {
    $total = productController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid m-2">
        <a class="navbar-brand" href="/">E-com</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav  pe-4">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="myorder">Order</a>
                </li>
            </ul>
        </div>
        <div class="container-fluid">
            <form action="/search" class="d-flex" role="search">
                <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="cartlist">Cart({{$total}})</a>
            </li>
        </ul>
        @if(Session()->has('user'))
        <div class="dropdown">
            <a class="btn  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{Session::get('user')['name']}}
            </a>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/logout">log out</a></li>
                @else
                <li><a class="dropdown-item" href="/login">Login</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>