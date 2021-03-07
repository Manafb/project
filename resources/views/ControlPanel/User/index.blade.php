@extends("layouts.app")
@section("user","active")
@section("content")
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-md">
                <tr>
                    <th width="3%">#</th>
                    <th width="38%">Name</th>
                    <th width="38%">Email</th>
                    <th width="15%">Action</th>
                </tr>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.edit",["id"=>$user->id])}}">Edit</a>
                        <button class="btn btn-danger deleteBtn" data-confirm="Realy?|Do you want to continue?" data-confirm-yes="deleteFun({{$user->id}})">Delete</button>
                    </td>
                </tr>
                @endforeach



            </table>
            <form action="{{route("user.destroy")}}" method="POST" id="deleteForm">
                @csrf
                <input type="hidden" id="id" name="id" >
            </form>
            <script>
                function deleteFun(ele)
                {
                    $("#id").val(ele);
                    $("#deleteForm").submit();
                }
            </script>
        </div>
        <script>
            $(".select2").select2();
        </script>
    </div>
@endsection
@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-grip-horizontal"></i>Dashboard</a>
    </li>
    <li class="breadcrumb-item"><a>Admins</a></li>
@endsection
@section("header")
    <h1 class="float-left">Admins</h1>
@endsection
@section("title")
    Admins
@endsection
