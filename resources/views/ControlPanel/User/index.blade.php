@extends("layouts.app")
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

                <tr>
                    <td>1</td>
                    <td>Noor</td>
                    <td>a@a.com</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Noor</td>
                    <td>a@a.com</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Noor</td>
                    <td>a@a.com</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Noor</td>
                    <td>a@a.com</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Noor</td>
                    <td>a@a.com</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Noor</td>
                    <td>a@a.com</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Noor</td>
                    <td>a@a.com</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Noor</td>
                    <td>a@a.com</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Noor</td>
                    <td>a@a.com</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Noor</td>
                    <td>a@a.com</td>
                    <td>
                        <a class="btn btn-warning" href="{{route("user.create")}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Noor</td>
                    <td>a@a.com</td>
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
    <li class="breadcrumb-item"><a>Admins</a></li>
@endsection
@section("header")
    <h1 class="float-left">Admins</h1>
@endsection
@section("title")
    Admins
@endsection
