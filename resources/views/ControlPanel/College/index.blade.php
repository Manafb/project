@extends("layouts.app")
@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <a href="{{route('college.create')}}" class="btn btn-lg btn-success">Register a new admin</a>
            </div>
            <table class="table table-bordered table-md">
                <tr>
                    <th width="3%">#</th>
                    <th width="38%">Name</th>
                    <th width="38%">Head Of College</th>
                    <th width="15%">Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>It</td>
                    <td>Nour</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("college.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="{{route("major.index")}}">Majors</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>It</td>
                    <td>Nout</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("college.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="{{route("major.index")}}">Majors</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>It</td>
                    <td>Nout</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("college.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="{{route("major.index")}}">Majors</a>
                    </td>
                </tr><tr>
                    <td>1</td>
                    <td>It</td>
                    <td>Nout</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("college.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="{{route("major.index")}}">Majors</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>It</td>
                    <td>Nout</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("college.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="{{route("major.index")}}">Majors</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>It</td>
                    <td>Nout</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("college.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="{{route("major.index")}}">Majors</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>It</td>
                    <td>Nout</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("college.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="{{route("major.index")}}">Majors</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>It</td>
                    <td>Nout</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("college.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="{{route("major.index")}}">Majors</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>It</td>
                    <td>Nout</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("college.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="{{route("major.index")}}">Majors</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>It</td>
                    <td>Nout</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("college.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="{{route("major.index")}}">Majors</a>
                    </td>
                </tr>


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
    <li class="breadcrumb-item"><a>College</a></li>
@endsection
@section("header")
    <h1 class="float-left">College</h1>
@endsection
@section("title")
    Colleges List
@endsection
