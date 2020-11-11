@extends('base')

@section('content')

<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <img class="masthead-avatar mb-4" src="{{ url('img/backgrounds.png') }}" alt="" />
        <h1 class="masthead-heading text-uppercase mb-0">Mater Dei College</h1>
        <p class="masthead-subheading font-weight-light mb-4" style="margin-bottom: 40px">Cabulijan, Tubigon, Bohol</p>
    </div>
</header>
<br><br>
<section class="page-section bg-white text-black mb-0" id="about">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-black">About</h2>
        <div class="row">
            <div class="col-lg-4 ml-auto"><p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, ipsa rem nemo rerum quibusdam sint voluptate qui totam, quis placeat expedita ea, labore laborum veritatis aperiam! A quisquam esse nobis?</p></div>
            <div class="col-lg-4 mr-auto"><p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit autem molestias earum voluptas, placeat possimus sint quas ratione nobis laboriosam sapiente neque, esse at tempora magnam quidem eius iusto? Autem!</p></div>
        </div>
    </div>
</section>

@stop
