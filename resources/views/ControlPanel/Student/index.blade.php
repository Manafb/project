@extends("layouts.app")
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

                <tr>
                    <td>1</td>
                    <td>Hashim</td>
                    <td>h@h.com</td>
                    <td>758969</td>
                    <td>College Of Science</td>
                    <td>Computer Science</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Hashim</td>
                    <td>h@h.com</td>
                    <td>758969</td>
                    <td>College Of Science</td>
                    <td>Computer Science</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Hashim</td>
                    <td>h@h.com</td>
                    <td>758969</td>
                    <td>College Of Science</td>
                    <td>Computer Science</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Hashim</td>
                    <td>h@h.com</td>
                    <td>758969</td>
                    <td>College Of Science</td>
                    <td>Computer Science</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Hashim</td>
                    <td>h@h.com</td>
                    <td>758969</td>
                    <td>College Of Science</td>
                    <td>Computer Science</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Hashim</td>
                    <td>h@h.com</td>
                    <td>758969</td>
                    <td>College Of Science</td>
                    <td>Computer Science</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Hashim</td>
                    <td>h@h.com</td>
                    <td>758969</td>
                    <td>College Of Science</td>
                    <td>Computer Science</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Hashim</td>
                    <td>h@h.com</td>
                    <td>758969</td>
                    <td>College Of Science</td>
                    <td>Computer Science</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Hashim</td>
                    <td>h@h.com</td>
                    <td>758969</td>
                    <td>College Of Science</td>
                    <td>Computer Science</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
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
    <li class="breadcrumb-item"><a>User</a></li>
@endsection
@section("header")
    <h1 class="float-left">User</h1>
@endsection
@section("title")
    Users List
@endsection
