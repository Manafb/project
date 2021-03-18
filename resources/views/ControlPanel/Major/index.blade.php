@extends("layouts.app")
@section("major","active")
@section("content")
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-md">
                <tr>
                    <th width="3%">#</th>
                    <th width="38%">Name</th>
                    <th width="38%">Head Of Department</th>
                    <th width="15%">Action</th>
                </tr>
                @foreach($majors as $major)
                <tr>
                    <td>{{$major->id}}</td>
                    <td>{{$major->name}}</td>
                    <td>{{$major->Head->name}}</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("major.edit",["id"=>$major->id])}}">Edit</a>
                        <button class="btn btn-danger deleteBtn" data-confirm="Realy?|Do you want to continue?" data-confirm-yes="deleteFun({{$major->id}})">Delete</button>
                        <a class="btn btn-primary" href="{{route("module.index")}}">Module</a>
                    </td>
                </tr>
                @endforeach
            </table>
            <form action="{{route("major.destroy")}}" method="POST" id="deleteForm">
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
    </div>
@endsection
@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-grip-horizontal"></i>Dashboard</a>
    </li>
    <li class="breadcrumb-item"><a>Majors</a></li>
@endsection
@section("header")
    <div style="display: flex;justify-content: space-between;width: 100%;">
        <h1 class="float-left">Major</h1>
        <a class="btn btn-primary" href="{{route("major.create")}}">Create</a>
    </div>@endsection
@section("title")
    Majors List
@endsection
