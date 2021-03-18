@extends("layouts.app")
@section("module","active")
@section("content")
    <div class="row">
        <div class="col-md-6">

            <form action="{{route("module.update",["id"=>$model->id])}}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" class="form-control" value="{{$model->name}}" required>
                </div>

                <div class="form-group">
                    <label for="major_id">Majors:</label>
                    <select class="form-control select2" id="major_id" name="major_id">
                        <option value="">Select Major</option>
                        @foreach($majors as $major)
                            <option value="{{$major->id}}" {{$major->id==$model->major_id?"selected":""}}>{{$major->name}}</option>
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
    <li class="breadcrumb-item"><a>Edit Modules</a></li>
@endsection
@section("header")
    <h1 class="float-left">Edit Modules</h1>
@endsection
