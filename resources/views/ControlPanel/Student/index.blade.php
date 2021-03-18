@extends("layouts.app")
@section("student","active")
@section("content")
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-md">
                <tr>
                    <th width="3%">#</th>
                    <th width="15%">Name</th>
                    <th width="15%">Email</th>
                    <th width="13%">Student Id</th>
                    <th width="15%">College</th>
                    <th width="15%">Major</th>
                    <th width="15%">Action</th>
                </tr>
                @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->user->name}}</td>
                    <td>{{$student->user->email}}</td>
                    <td>{{$student->uid}}</td>
                    <td>{{$student->college->name}}</td>
                    <td>{{$student->major->name}}</td>
                    <td>

                        <a class="btn btn-warning" href="{{route("student.edit", ["id"=>$student->id])}}">Edit</a>
                        <button class="btn btn-danger deleteBtn" data-confirm="Realy?|Do you want to continue?" data-confirm-yes="deleteFun({{$student->id}})">Delete</button>
                    </td>
                    </td>
                </tr>
                @endforeach

            </table>
            <form action="{{route("student.destroy")}}" method="POST" id="deleteForm">
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
    <li class="breadcrumb-item"><a>Students</a></li>
@endsection
@section("header")
    <div style="display: flex;justify-content: space-between;width: 100%;">
        <h1 class="float-left">Students</h1>
        <a class="btn btn-primary" href="{{route("student.create")}}">Create</a>
    </div>@endsection
@section("title")
    Users List
@endsection
