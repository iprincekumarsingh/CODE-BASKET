@extends('layouts.main')
@section('main-section')
<style>
    /* .uu {
        padding: 10px;
        margin: 5px;
    } */
    .uf {
        display: flex;
        flex-wrap: wrap
    }

    .u {
        padding: 10px;
    }

    .ub {
        align-items: flex-end width: 200px
    }
</style>
<!-- End Breadcrumbs -->
<?php
      $randomString = Str::random(30)
      ?>
<section class="inner-page ">
    @if ($no==1)
    <div class="container">
        <a href="{{route('fortify.register')}}" style="--clr:#ff22bb;--i:0;"><Span>Contribute here !</Span></a>
        <a href="{{route('women.explore',['randomString'=>$randomString,'id'=>1,'no'=>'0'])}}"
            style="--clr:#ff22bb;--i:0;"><Span>OPPORTUNITIES FOR WOMEN</Span></a>

    </div>
    @endif

    <div class="row u ">
        @foreach ($search as $result)
        <div class="col-md-4 col-sm-4 col-xs-12 u">
            <div class="row section-success ourTeam-box text-center">
                <div class="col-md-12 section1">
                    <img src="{{url('upload/oppurtunity/'.$result->post_photo1)}}">
                </div>
                <div class="col-md-12 section2 pb-3">
                    <p>{{$result->name}}</p>
                    <span>{!! Str::limit($result->description, 30, ' ...') !!}</span>
                </div>
                <a href="{{route('read.more',['id'=>$result->opid])}}" class=" ub btn btn-primary">Read More</a>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection