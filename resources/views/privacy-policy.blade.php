@extends('layout.main')
@section('content')
<div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol vocab="https://schema.org/" typeof="BreadcrumbList" class="breadcrumb">
            <li property="itemListElement" typeof="ListItem" class="breadcrumb-item">
                <a property="item" typeof="WebPage" href="https://{{config('app.url')}}">
                    <span property="name">Home</span></a>
                <meta property="position" content="1">
            </li>

            <li property="itemListElement" typeof="ListItem" class="breadcrumb-item">
                <a property="item" typeof="WebPage" href="https://{{config('app.url')}}/privacy-policy">
                    <span property="name">Privacy Policy</span></a>
                <meta property="position" content="2">
            </li>
        </ol>
    </nav>


    <div class="card-body col-lg-12 col-md-12" style="font-size: 20px;">
        <h1 class="card-title">Privacy Policy</h1>
        <hr>
        </hr>
        <p class="card-text"> Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and make use of personal information. The following outlines our privacy policy. </p>
        <ul >
            <li>
                We only ask for personal information when we truly need it to provide a service to you. We collect it by fair and lawful means, with your knowledge and consent. We also let you know why we’re collecting it and how it will be used.
            </li>
        </ul>
    </div>
</div>
@stop