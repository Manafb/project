@extends("layouts.app")
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
                <tr>
                    <td>1</td>
                    <td>CS</td>
                    <td>Manaf</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("major.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="#">Module</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>CS</td>
                    <td>Manaf</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("college.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="#">Module</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>CS</td>
                    <td>Manaf</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("college.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="#">Module</a>
                    </td>
                </tr><tr>
                    <td>1</td>
                    <td>CS</td>
                    <td>Manaf</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("college.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="#">Module</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>CS</td>
                    <td>Manaf</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("college.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="#">Module</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>CS</td>
                    <td>Manaf</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("college.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="#">Module</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>CS</td>
                    <td>Manaf</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("college.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="#">Module</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>CS</td>
                    <td>Manaf</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("college.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="#">Module</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>CS</td>
                    <td>Manaf</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("college.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="#">Module</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>CS</td>
                    <td>Manaf</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("college.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                        <a class="btn btn-primary" href="#">Module</a>
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
    <li class="breadcrumb-item"><a>Majors</a></li>
@endsection
@section("header")
    <h1 class="float-left">Majors</h1>
@endsection
