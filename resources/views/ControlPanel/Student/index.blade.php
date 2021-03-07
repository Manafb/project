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
                        <a class="btn btn-warning" href="{{route("student.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                @endforeach

            </table>
        </div>
        <script>
            $(".select2").select2();
        </script>
    </div>
@endsection
@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-grip-horizontal"></i>Dashboard</a>
    </li>
    <li class="breadcrumb-item"><a>User</a></li>
@endsection
@section("header")
    <h1 class="float-left">User</h1>
@endsection
@section("title")
    Users List
@endsection
