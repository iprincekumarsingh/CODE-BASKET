<x-app-layout>

    <title>Add Category</title>
    <link rel="stylesheet" href="{{url('css/file/nicepage.css')}}" media="screen">
    <link rel="stylesheet" href="{{url('css/file/Home.css')}}" media="screen">

    <meta name="generator" content="Nicepage 4.4.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    </head>

    <body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-xl-mode">
        <section class="u-align-center u-clearfix u-section-1" id="sec-a00e">
            <div class="u-align-left u-clearfix u-sheet u-sheet-1">
                <div class="u-form u-form-1">
                    <form action="{{route('project_store')}}" method="POST" enctype="multipart/form-data"
                        class="u-clearfix u-form-spacing-16 u-form-vertical u-inner-form" source="custom" name="form"
                        style="padding: 4px;">
                        @csrf
                        @if($errors->any())
                        {{ implode('', $errors->all('<div>:message</div>')) }}
                        @endif
                        <div class="u-form-group u-form-name u-label-top">
                            <label for="name-5a1e" class="u-label">Project Name</label>
                            <input type="text" placeholder="Enter Cateogry Name" id="name-5a1e" name="op_name"
                                class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-12 u-white u-input-1">
                        </div>
                        <div class="u-form-group u-form-name u-label-top">
                            <label for="name-5a1e" class="u-label">Project Description</label>
                            <textarea type="text" placeholder="Enter Url of link" id="name-5a1e" name="desc"
                                class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-12 u-white ">
                            </textarea>
                        </div>
                        <div class="u-form-group u-form-name u-label-top">
                            <label for="name-5a1e" class="u-label">Project Link</label>
                            <input type="text" placeholder="Enter Url of link" id="name-5a1e" name="url_link"
                                class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-12 u-white u-input-1">
                        </div>
                        <div class="u-form-group u-form-name u-label-top">
                            <label for="name-5a1e" class="u-label">Project Alternative</label>
                            <input type="text" placeholder="Enter Url of link" id="name-5a1e" name="url_link2"
                                class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-12 u-white u-input-1">
                        </div>


                        <div class="u-form-group u-label-top u-form-group-2">
                            <label for="text-37e4" class="u-label">Choose Categories</label>

                            <select name="op_id"
                                class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-12 u-white u-input-2"
                                id="cars">
                                @foreach ($data as $category)
                                <option value="{{$category['pcid']}}">{{$category['name']}}</option>

                                @endforeach

                            </select>
                        </div>
                        <div class="u-align-right u-form-group u-form-submit u-label-top">
                            <input type="submit" value="submit"
                                class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-none u-text-black u-text-hover-white u-btn-1">

                        </div>

                    </form>
                </div>
            </div>
        </section>
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

                {{-- @foreach ($cat as $data)
                <tr>
                    <td>{{$data['name']}}</td>
                    <td><a href="{{$data['link']}}">Link</a></td>
                    <td><img src="{{url('upload/oppurtunity/'.$data['post_photo1'])}}" width="100px" height="50px"
                            alt=""></td>
                    <td>@if ($data['post_photo2']==null)
                        No Photo
                        @else
                        <img src="{{url('upload/oppurtunity/'.$data['post_photo2'])}}" width="100px" height="50px"
                            alt="">


                        @endif
                    </td>

                    <td>{{$data['name']}}</td>
                    <td>
                        <form action="{{route('route.disapprove',['id'=>$data['opid']])}}" method="post">
                            @csrf
                            <input class="btn btn-primary" type="submit" value="Disapprove">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('oppur.destroy',['id'=>$data['opid']])}}" method="post">
                            @csrf
                            <input class="btn btn-danger" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>

                @endforeach --}}


            </tbody>
        </table>

</x-app-layout>