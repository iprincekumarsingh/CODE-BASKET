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
    <a href="{{route('web.explore',['randomString'=>$randomString,'id'=>1,'no'=>'1'])}}"
      style="--clr:#ff22bb;--i:0;"><Span>OPPORTUNITIES</Span></a>
    <a href="{{route('web.explore',['randomString'=>$randomString,'id'=>2,'no'=>2])}}"
      style="--clr:#00ccff;--i:0;"><Span>RESOURCES</Span></a>
    <a href="{{route('web.explore',['randomString'=>$randomString,'id'=>3,'no'=>3])}}"
      style="--clr:#ff22bb;--i:0;"><Span>PROJECTS</Span></a>
    <a href="{{route('web.explore',['randomString'=>$randomString,'id'=>4,'no'=>4])}}"
      style="--clr:#00ccff;--i:0;"><Span>FINANCIAL AID</Span></a>
    <a href="{{route('web.explore',['randomString'=>$randomString,'id'=>5,'no'=>5])}}"
      style="--clr:#ff22bb;--i:0;"><Span>FUN
        AND LEARN</Span></a>
  </div>
</section>
</main>
<!-- End #main -->
@endsection