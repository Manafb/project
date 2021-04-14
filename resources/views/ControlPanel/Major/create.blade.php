@extends("layouts.app")
@section("major","active")
@section("content")
    <div class="row">
        <div class="col-md-6">
            <form action="{{route("major.store")}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="head_id">Colleges: </label>
                    <select class="form-control select2" name="college_id">
                        <option value="">Select College</option>
                        @foreach($colleges as $college)
                            <option value="{{$college->id}}">{{$college->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="head_id">Head Of Department: </label>
                    <select class="form-control select2" name="head_id">
                        <option value="">Select Head Of Department</option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
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
    <li class="breadcrumb-item"><a>Create Major</a></li>
@endsection
@section("header")
    <h1 class="float-left">Create Major</h1>
@endsection

