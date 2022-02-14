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
    <div class="container">
        <a href="{{route('fortify.register')}}" style="--clr:#ff22bb;--i:0;"><Span>Contribute here !</Span></a>


        @if ($pageno==0)
        <a href="{{route('women.explore',['randomString'=>$randomString,'id'=>1,'no'=>'0'])}}"
            style="--clr:#ff22bb;--i:0;"><Span>OPPORTUNITIES FOR WOMEN</Span></a>
        @endif
    </div>

    <div class="row u ">
        @foreach ($search as $result)

        <div class="col-md-4 col-sm-4 col-xs-12 u">
            <div style="margin: 5px; border:1px solid rgba(212, 212, 212, 0.712); padding:10px;border-radius:10px"
                class="row section-success  text-center">
                <div class="col-md-12 section1">
                    @if ($result->post_photo1==null)
                    <img style="border-radius: 0px; width:455px;height:270px"
                        src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20191105192037/What-Are-The-Best-Resources-For-Competitive-Programming.png">
                    @else

                    <img style="border-radius: 0px; width:455px;height:270px"
                        src="public/upload/{{$result->post_photo1}}">
                    @endif


                </div>
                <div class="col-md-12 section2 pb-3">
                    <p>{{$result->name}}</p>
                    {{-- {{$result- >description}} --}}

                </div>

                <a href="{{route('read.more',['id'=>$result->opid])}}" class=" ub btn btn-primary">Read More</a>
            </div>
        </div>
        @endforeach


    </div>
</section>
@endsection