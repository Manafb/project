@extends("layouts.app")
@section("user","active")
@section("content")

    <form action="{{route("user.update",["id"=>$model->id]) }}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" id="name" name="name" class="form-control" value="{{$model->name}}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" class="form-control" value="{{$model->email}}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" id="password" name="password" class="form-control">
                </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Profile Image: </label>
                    <label for="upload" class="btn btn-primary mt-3" style="color: white">Choose file</label>
                    <input type="file" id="upload" name="image" hidden/>
                </div>
            </div>
            <script>
                $(".select2").select2();
            </script>
        </div>
        <input type="submit" class="btn btn-primary" value="Save">
    </form>
@endsection
@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-grip-horizontal"></i>Dashboard</a>
    </li>
    <li class="breadcrumb-item"><a>Edit Admin</a></li>
@endsection
@section("header")
    <h1 class="float-left">Edit Admin</h1>
@endsection
