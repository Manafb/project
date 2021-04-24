@extends("layouts.app")
@section("xvoice","active")
@section("content")
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-md">
                <tr>
                    <th width="3%">#</th>
                    <th width="30%">Title</th>
                    <th width="30%">Received at</th>
                    <th width="15%">Action</th>
                </tr>

                @foreach($voices as $voice)
                    <tr>
                        <td><i class="fas {{is_null($voice->read_at)?"fa-envelope":"fa-envelope-open-text"}}"></i></td>
                        <td>{{$voice->title}}</td>
                        <td>{{$voice->created_at->diffForHumans()}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route("xVoice.read",["id"=>$voice->id])}}">Read</a>
                            <button class="btn btn-danger delete-btn" data-confirm="Realy?|Do you want to continue?" data-confirm-yes="deleteFun({{$voice->id}})">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <form id="delete_form" action="{{route("xVoice.delete")}}" method="POST">
            @csrf
            <input type="hidden" name="id" id="deleted_id">
        </form>
        <script>
            $(".select2").select2();
        </script>
        <script>
            function deleteFun(id){
                $("#deleted_id").val(id);
                $("#delete_form").submit();
            }
        </script>
    </div>
@endsection
@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-grip-horizontal"></i>Dashboard</a>
    </li>
    <li class="breadcrumb-item"><a>Index</a></li>
@endsection
@section("header")
    <h1 class="float-left">Index</h1>
@endsection
@section("title")
    Index
@endsection
