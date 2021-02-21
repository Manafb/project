@extends("layouts.app")
@section("content")
    <div class="row">
        <div class="col-md-6">
            <form action="#">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" id="name" name="name" class="form-control">
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
                    <select class="form-control select2" id="college_id" name="college_id">
                        <option value="1">College of Science</option>
                        <option value="2">College of Engineering</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="major_id">Major:</label>
                    <select class="form-control select2" id="major_id" name="major_id">
                        <option value="1">Computer Science</option>
                        <option value="2">Law</option>
                        <option value="3">Finance</option>
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
    <li class="breadcrumb-item"><a>Create Student</a></li>
@endsection
@section("header")
    <h1 class="float-left">Create Student</h1>
@endsection
