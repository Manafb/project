@extends("layouts.app")
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

                <tr>
                    <td><i class="fas fa-envelope"></i></td>
                    <td>Network issue</td>
                    <td>19/2/2021 at 14:30pm</td>
                    <td>
                        <a class="btn btn-primary" href="#">Read</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td><i class="fas fa-envelope-open-text"></i></td>
                    <td>Network issue</td>
                    <td>19/2/2021 at 14:30pm</td>
                    <td>
                        <a class="btn btn-primary" href="#">Read</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td><i class="fas fa-envelope"></i></td>
                    <td>Network issue</td>
                    <td>19/2/2021 at 14:30pm</td>
                    <td>
                        <a class="btn btn-primary" href="#">Read</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td><i class="fas fa-envelope-open-text"></i></td>
                    <td>Network issue</td>
                    <td>19/2/2021 at 14:30pm</td>
                    <td>
                        <a class="btn btn-primary" href="#">Read</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td><i class="fas fa-envelope-open-text"></i></td>
                    <td>Network issue</td>
                    <td>19/2/2021 at 14:30pm</td>
                    <td>
                        <a class="btn btn-primary" href="#">Read</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td><i class="fas fa-envelope"></i></td>
                    <td>Network issue</td>
                    <td>19/2/2021 at 14:30pm</td>
                    <td>
                        <a class="btn btn-primary" href="#">Read</a>
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
    <li class="breadcrumb-item"><a>Index</a></li>
@endsection
@section("header")
    <h1 class="float-left">Index</h1>
@endsection
@section("title")
    Index
@endsection
