@extends('layouts.main')
@section('main-section')
<style>
    .read {
        padding: 10px;
    }

    .read h1 {
        padding: 5px;
    }
</style>

<section class="inner-page ">
    <div class="read">
        <br>

        @foreach ($read as $reads )
        @if ($reads->post_photo1==null)

        @else
        <img style="align-content: center" width="100%" height="493px"
            src="{{url('upload/oppurtunity/'.$reads->post_photo1)}}">
        @endif

        <h1>{{$reads->name}}</h1>
        <span>Posted on -<b>{{date('d M Y', strtotime($reads->created_at))}}</b></span>
        <hr>
     
           <div style="font-size: 18px">

               {!! html_entity_decode($reads->description, ENT_QUOTES, 'UTF-8') !!}
               </div> 
    
        @if ($reads->link=="")
        @else
        <strong> <span  style="color: blue;font-size:2rem"><a style="color: rgb(96, 96, 194)"
                    href="{{$reads->link}}">Visit</a></span></strong>
        @endif
        @endforeach
    </div>
</section>
@endsection