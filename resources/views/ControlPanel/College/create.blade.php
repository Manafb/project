@extends("layouts.app")
@section("content")
    <div class="row">
        <div class="col-md-6">

            <form action="#">
                <div class="pull-right">
                    <a href={{route('college.index')}}></a>

                </div>

                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="headOfCollege_id">Head Of College: </label>
                    <select class="form-control select2" id="headOfCollege_id" name="headOfCollege_id">
                        <option value="1">Nour</option>
                        <option value="2">Manaf</option>
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
