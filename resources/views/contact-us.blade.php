@extends('layout.main')
@section('content')
<!--Section: Contact v.2-->
<div class="container mt-2">
<nav aria-label="breadcrumb">
        <ol vocab="https://schema.org/" typeof="BreadcrumbList" class="breadcrumb">
            <li property="itemListElement" typeof="ListItem" class="breadcrumb-item">
                <a property="item" typeof="WebPage" href="{{config('app.url')}}">
                    <span property="name">Home</span></a>
                <meta property="position" content="1">
            </li>

            <li property="itemListElement" typeof="ListItem" class="breadcrumb-item">
                <a property="item" typeof="WebPage" href="{{config('app.url')}}/contact-us">
                    <span property="name">Contact Us</span></a>
                <meta property="position" content="2">
            </li>
        </ol>
    </nav>
    <!--Section heading-->
    <h1 class="h1-responsive text-center my-4">Contact us</h1>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5"></p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-12 mb-md-0 mb-5">
            <form action="/contact-details-submit" method="POST">
                {{csrf_field()}}
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control" required>

                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control" required>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="contact" class="">Contact No.</label>
                            <input type="number" id="contact" name="contact" class="form-control" required>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div class="d-flex justify-content-center text-md-left mt-2">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>

        </div>
        <!--Grid column-->


    </div>

</div>
@stop