@extends("layouts.app")
@section("student","active")
@section("content")
    <form action="{{route("student.update", ["id"=>$model->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" class="form-control" value="{{$model->User->name}}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" class="form-control" value="{{$model->User->email}}"
                           required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Password:</label>
                    <span style="color: darkred">*keep it null if you don't want change</span>
                    <input type="text" id="password" name="password" class="form-control" value="{{$model->password}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="uid">Student ID:</label>
                    <input type="text" id="uid" name="uid" class="form-control" value="{{$model->uid}}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="college_id">College:</label>
                    <select class="form-control select2" id="college_id" name="college_id">
                        @foreach($colleges as $college)
                            <option
                                value="{{$college->id}}" {{$college->id==$model->college_id?"selected":""}}>{{$college->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group select-major">

                    <label for="major_id">Major:</label>
                    <select class="form-control select2" id="major_id" name="major_id">
                        @foreach($majors as $major)
                            <option
                                value="{{$major->id}}" {{$major->id==$model->major_id?"selected":""}}>{{$major->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="image">Profile Image: </label>
                    <label for="upload" class="btn btn-primary mt-3" style="color: white">Choose file</label>
                    <input type="file" id="upload" name="image" hidden/>
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Save">
    </form>
    <script>
        $("#college_id").on("change", function () {
            var self = $(this);

            $.post("{{route("ajax.getMajorByCollege")}}",
                {
                    _token: "{{csrf_token()}}",
                    id: self.val()
                }
                , function (data, status) {
                    $(".select-major").html(data);
                });
        });
    </script>
    <script>
        $(".select2").select2();
    </script>
    </div>
@endsection
@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-grip-horizontal"></i>Dashboard</a>
    </li>
    <li class="breadcrumb-item"><a>Edit Student</a></li>
@endsection
@section("header")
    <h1 class="float-left">Edit Student</h1>
@endsection
