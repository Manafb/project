@extends("layouts.app")
@section("module","active")
@section("content")
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-md">
                <tr>
                    <th width="3%">#</th>
                    <th width="38%">Name</th>
                    <th width="38%">Major ID</th>
                    <th width="15%">Action</th>
                </tr>
                @foreach($modules as $module)
                    <tr>
                        <td>{{$module->id}}</td>
                        <td>{{$module->name}}</td>
                        <td>{{$module->major_id}}</td>
                        <td>
                        <a class="btn btn-warning" href="{{route("module.edit",["id"=>$module->id])}}">Edit</a>
                            <button class="btn btn-danger deleteBtn" data-confirm="Realy?|Do you want to continue?" data-confirm-yes="deleteFun({{$module->id}})">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </table>
            <form action="{{route("module.destroy")}}" method="POST" id="deleteForm">
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
    <li class="breadcrumb-item"><a>Module</a></li>
@endsection
@section("header")
    <h1 class="float-left">Module</h1>
@endsection
@section("title")
    Modules List
@endsection
