@extends('layout.main')
@section('content')
<div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol vocab="https://schema.org/" typeof="BreadcrumbList" class="breadcrumb">
            <li property="itemListElement" typeof="ListItem" class="breadcrumb-item">
                <a property="item" typeof="WebPage" href="{{config('app.url')}}">
                    <span property="name">Home</span></a>
                <meta property="position" content="1">
            </li>

            <li property="itemListElement" typeof="ListItem" class="breadcrumb-item">
                <a property="item" typeof="WebPage" href="{{config('app.url')}}/about-us">
                    <span property="name">About Us</span></a>
                <meta property="position" content="2">
            </li>
        </ol>
    </nav>


    <div class="card-body">
        <h1 class="card-title">About Us</h1>
        <hr>
        </hr>
        <p class="card-text" style="font-size: 20px;"> # </p>
        <ul style="font-size: 20px;">
            <li>
                In case any information want to users or update or any suggestion Users can contact by contact us Page and we will cover the information to the users.
            </li>
        </ul>
    </div>
</div>



@stop