@extends('layouts.landing')
@section('title','Anggrek Moy')
@section('content')


 <!--==================== HOME ====================-->
<section class="home" id="home">
    @include('layouts.components.homes')
</section>

<!--==================== ABOUT ====================-->
<section class="about section container" id="about">
    @include('layouts.components.about')
</section>

<!--==================== PRODUCTS ====================-->
<section class="product section container" id="products">
    @include('layouts.components.product')
</section>
<!--==================== STEPS ====================-->
<section class="steps section container">
    @include('layouts.components.steps')
</section>


<!--==================== QUESTIONS ====================-->
<section class="questions section" id="faqs">
    @include('layouts.components.questions')
</section>

<!--==================== CONTACT ====================-->
<section class="contact section container" id="contact">
    @include('layouts.components.forms')
</section>

@stop
