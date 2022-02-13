@extends('layouts.main')

@section('main-section')
<style>
  .header {
    background: rgb(39 33 88 / 80%);
  }
</style>

<section class="breadcrumbs">

  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Explore</li>
      </ol>
    </div>
  </div>
</section>
<!-- End Breadcrumbs -->
<?php
      $randomString = Str::random(30)
      ?>

<section class="inner-page">
  <div class="container">
    <a href="{{route('web.explore',['randomString'=>$randomString,'id'=>24,'no'=>'0'])}}"
      style="--clr:#ff22bb;--i:0;"><Span>OPPORTUNITIES</Span></a>
    <a href="{{route('web.explore',['randomString'=>$randomString,'id'=>25,'no'=>1])}}"
      style="--clr:#00ccff;--i:0;"><Span>RESOURCES</Span></a>
    <a href="{{route('web.explore',['randomString'=>$randomString,'id'=>26,'no'=>1])}}"
      style="--clr:#ff22bb;--i:0;"><Span>PROJECTS</Span></a>
    <a href="{{route('web.explore',['randomString'=>$randomString,'id'=>27,'no'=>1])}}"
      style="--clr:#00ccff;--i:0;"><Span>FINANCIAL AID</Span></a>
    <a href="{{route('web.explore',['randomString'=>$randomString,'id'=>28,'no'=>1])}}"
      style="--clr:#ff22bb;--i:0;"><Span>FUN
        AND LEARN</Span></a>
  </div>
</section>
</main>
<!-- End #main -->
@endsection