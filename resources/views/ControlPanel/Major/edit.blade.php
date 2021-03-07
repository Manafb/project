@extends("layouts.app")
@section("major","active")
@section("content")
    <div class="row">
        <div class="col-md-6">

            <form action="{{ route("major.update",["id"=>$model->id]) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" class="form-control" value="{{$model->name}}" required>
                </div>

                <div class="form-group">
                    <label for="head_id">Head Of Department: </label>
                    <select class="form-control select2" name="head_id">
                        <option value="">Select Head Of Department</option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}" {{$user->id==$model->head_id?"selected":""}}>{{$user->name}}</option>
                        @endforeach
                    </select>
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
    <li class="breadcrumb-item"><a>Edit Major</a></li>
@endsection
@section("header")
    <h1 class="float-left">Edit Major</h1>
@endsection
