@extends("layouts.app")
@section("college","active")
@section("content")
        <div class="row">
            <div class="col-md-6">

                <form action="{{ route("college.store") }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="headOfCollege_id">Head Of College: </label>
                        <select class="form-control select2" name="headOfCollege_id">
                            <option value="">Select Head Of College</option>
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
    <li class="breadcrumb-item"><a>Create College</a></li>
@endsection
@section("header")
    <h1 class="float-left">Create College</h1>
@endsection
