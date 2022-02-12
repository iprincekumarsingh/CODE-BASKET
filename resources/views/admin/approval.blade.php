<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Uploaded By</th>
                <th scope="col">Description</th>
                <th scope="col">Url Source</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($approve as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->description}}</td>
                <td><a href="">{{$data->link}}</a></td>
                <td>@if ($data['post_photo1']==null)
                    No Photo
                    @else
                    <img src="{{url('upload/oppurtunity/'.$data['post_photo1'])}}" width="100px" height="50px" alt="">
                    @endif
                </td>
                <td>
                    <form action="{{route('route.approve',['id'=>$data['opid']])}}" method="post">
                        @csrf
                        <input class="btn btn-success" type="submit" value="Approve">
                    </form>
                </td>
            </tr>

            @endforeach


        </tbody>
    </table>
</x-app-layout>