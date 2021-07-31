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
                <a property="item" typeof="WebPage" href="{{config('app.url')}}/disclaimer">
                    <span property="name">Disclaimer</span></a>
                <meta property="position" content="2">
            </li>
        </ol>
    </nav>


    <div class="card-body col-lg-12 col-md-12" style="font-size: 20px;">
        <h1 class="card-title">Disclaimer</h1>
        <hr>
        </hr>
        <ul>
            <li>
                By using this website and or blog, or making a purchase, user agrees as follows:
            </li>
            <br>
        </ul>
    </div>
</div>

@stop