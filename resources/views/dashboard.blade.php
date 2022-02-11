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

        <div class="box">
            <h1>Categoty</h1>
            <br>
            <span>{{$num}}</span>
        </div>

        <div class="box">
            <h1>Oppurtunities</h1>
            <br>
            <div class="mm">
        <span > {{$num2}}</span>
            </div>



        </div>
        <div class="box">
            <h1>Total User Registered</h1>
            <br>
            <div class="mm">
                <span class="">{{$userid}}</span>
            </div>
        </div>
        <div class="box">
            <h1>Total Games</h1>
            <br>
            <div class="mm">
                <span class="" class="mm">{{$game}}</span>
            </div>

        </div>
        <div class="box">
            <h1>Women Oppurtunities</h1>
            <br>
            <div class="mm">
                <span class="">{{$userid}}</span>
            </div>

        </div>
        <div class="box">
            <h1>Student`s Aid</h1>
            <br>
            <div class="mm">
                <span class="">{{$studentAid}}</span>
            </div>

        </div>
        <div class="box">
            <h1>Total Project`s</h1>
            <br>
            <div class="mm">
                <span class="">{{$projectCount}}</span>
            </div>

        </div>

        <div class="box">
            <h1>Approval Pending</h1>
            <br>
            <div class="mm">
                <span class="">{{$approved}}</span>
            </div>

        </div>
    </div>
@endif
</x-app-layout>