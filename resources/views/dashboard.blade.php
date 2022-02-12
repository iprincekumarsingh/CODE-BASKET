<x-app-layout>


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



    <div class="f">
        <a href="">
            <div class="box">
                <h1>Categoty</h1>
                <br>
                <span>{{$num}}</span>
            </div>

        </a>
        <a href="">
            <div class="box">
                <h1>Oppurtunities</h1>
                <br>
                <span> {{$num2}}</span>

            </div>
        </a>
        <a href="">

            <div class="box">
                <h1>Total User Registered</h1>
                <br>
                <span>{{$userid}}</span>

            </div>
        </a>
        <a href="">

            <div class="box">
                <h1>Total Games</h1>
                <br>
                <span>{{$game}}</span>
            </div>
        </a>
        <a href="">

            <div class="box">
                <h1>Women Oppurtunities</h1>
                <br>
                <span >{{$userid}}</span>
            </div>
        </a>
        <a href="">
            <div class="box">
                <h1>Student`s Aid</h1>
                <br>
                
                <span class="">{{$studentAid}}</span>
                
            </div>
        </a>
        <a href="">

            <div class="box">
                <h1>Total Project`s</h1>
                <br>
                <span class="">{{$projectCount}}</span>    
            </div>
        </a>
<a href="">

    <div class="box">
        <h1>Approval Pending</h1>
        <br>
        
    </a>
            <span class="">{{$approved}}</span>


        </div>
    </div>
    @endif
</x-app-layout>