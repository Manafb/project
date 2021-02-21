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
                    <label for="major_id">Majors:</label>
                    <select class="form-control select2" id="major_id" name="major_id">
                        <option value="1">Computer Science</option>
                        <option value="2">Law</option>
                        <option value="2">Finance</option>

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
    <li class="breadcrumb-item"><a>Modules</a></li>
@endsection
@section("header")
    <h1 class="float-left">Modules</h1>
@endsection
