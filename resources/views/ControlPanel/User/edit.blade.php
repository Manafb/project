@extends("layouts.app")
@section("user","active")
@section("content")
    <div class="row">
        <div class="col-md-6">
            <form action="{{route("user.update",["id"=>$model->id]) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" id="name" name="name" class="form-control" value="{{$model->name}}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" class="form-control"  value="{{$model->email}}" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" id="password" name="password" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="Save">
            </form>
        </div>
        <script>
            $(".select2").select2();
        </script>
    </div>
@endsection
@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-grip-horizontal"></i>Dashboard</a>
    </li>
    <li class="breadcrumb-item"><a>Create Admin</a></li>
@endsection
@section("header")
    <h1 class="float-left">Create Admin</h1>
@endsection
