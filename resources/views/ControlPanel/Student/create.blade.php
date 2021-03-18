@extends("layouts.app")
@section("student","active")
@section("content")
    <div class="row">
        <div class="col-md-6">
            <form action="{{route("student.store")}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" class="form-control" >

                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" id="password" name="password" class="form-control">
                </div>


                <div class="form-group">
                    <label for="uid">Student ID:</label>
                    <input type="text" id="uid" name="uid" class="form-control">
                </div>



                <div class="form-group">
                    <label for="college_id">College:</label>
                    <select  class="form-control select2" id="college_id" name="college_id">
                        <option>Please Select College</option>
                        @foreach($colleges as $college)
                            <option value="{{$college->id}}">{{$college->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group select-major">


                </div>
                <input type="submit" class="btn btn-primary" value="Save">
            </form>
        </div>
        <script>
            $("#college_id").on("change",function (){
                var self=$(this);

                $.post("{{route("ajax.getMajorByCollege")}}",
                    {
                        _token:"{{csrf_token()}}",
                        id:self.val()
                    }
                    ,function(data, status){
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
    <li class="breadcrumb-item"><a>Create Student</a></li>
@endsection
@section("header")
    <h1 class="float-left">Create Student</h1>
@endsection
