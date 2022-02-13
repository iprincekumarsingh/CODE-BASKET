<x-app-layout>
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .f {
            box-sizing: border-box;
            display: flex;
            border-radius: 10px;
            flex-shrink: inherit;
            flex-wrap: wrap;
            justify-content: center;
        }

        .box {
            /* display: flex; */
            border-radius: 10px;
            margin: 10px;
            padding: 20px;
            justify-content: center;
            width: 300px;
            /* height: 200px; */
            border: 2px solid black;
        }

        .box:hover {
            background: steelblue;
        }

        .mm {
            border-radius: 10px;
            padding: 30px;
            /* background: blue; */
            width: 200px;
            top: 100px;
            position: relative;
            /* margin-top: 50px; */
            bottom: 100px;
            top: -18px;
            width: 100%;
        }

        span {
            font-size: 34px;
            /* color: white;  */
        }
    </style>



    @if (Auth::user()->user_role_type=="admin")


    <?php
  $randomString = Str::random(400)
  ?>

    <div class="f">
        <a href="#">
            <div class="box">
                <h1>Categoty</h1>
                <br>
                <span>{{$num}}</span>
            </div>

        </a>
        <a href="{{route('web.explore',['randomString'=>$randomString,'id'=>1,'no'=>'1'])}}">
            <div class="box">
                <h1>Oppurtunities</h1>
                <br>
                <span> {{$num2}}</span>
            </div>
        </a>
        <a href="{{route('web.explore',['randomString'=>$randomString,'id'=>2,'no'=>2])}}">
            <div class="box">
                <h1>RESOURCES</h1>
                <br>
                <span> {{$num2}}</span>
            </div>
        </a>


        <a href="{{route('web.explore',['randomString'=>$randomString,'id'=>3,'no'=>3])}}">
            <div class="box">
                <h1>PROJECTS</h1>
                <br>
                <span> {{$num2}}</span>
            </div>
        </a>
        <a href="{{route('web.explore',['randomString'=>$randomString,'id'=>4,'no'=>4])}}">
            <div class="box">
                <h1>FINANCIAL AID</h1>
                <br>
                <span> {{$num2}}</span>
            </div>
        </a>
        <a href="{{route('web.explore',['randomString'=>$randomString,'id'=>5,'no'=>5])}}">
            <div class="box">
                <h1>FUN AND LEARN</h1>
                <br>
                <span> {{$num2}}</span>
            </div>
        </a>
        <a href="">
            <div class="box">
                <h1>APPROVED</h1>
                <br>
                <span> {{$num2}}</span>
            </div>
        </a>
        <a href="">
            <div class="box">
                <h1>TOTAL USERS</h1>
                <br>
                <span> {{$num2}}</span>
            </div>
        </a>

    </div>
    @endif


    {{-- User Dashboard --}}
    @if (Auth::user()->user_role_type=="user")
    <h1> Your Post</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Cateogry Name</th>
                <td>Link</td>
                <th scope="col">Image</th>
                <th scope="col">Image 2</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($cat as $data)
            <tr>
                <td>{{$data['name']}}</td>
                <td><a href="{{$data['link']}}">Link</a></td>
                <td><img src="{{url('upload/oppurtunity/'.$data['post_photo1'])}}" width="100px" height="50px" alt="">
                </td>
                <td>@if ($data['post_photo2']==null)
                    No Photo
                    @else
                    <img src="{{url('upload/oppurtunity/'.$data['post_photo2'])}}" width="100px" height="50px" alt="">


                    @endif
                </td>

                <td>{{$data['name']}}</td>
                <td>
                    @if ($data->approved==1)
                    <button disabled class="btn btn-primary">Approved</button>
                    @else
                    <button disabled class="btn btn-primary">Pending</button>

                    @endif
                </td>

            </tr>

            @endforeach


        </tbody>
    </table>
    @endif

</x-app-layout>