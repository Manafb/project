@extends("Website.layouts.app")
@section("content")
<style>
    .box-container {
        margin: 30px;
        padding: 20px;
        background-color: #c1c1c12e;
        border-radius: 10px;
    }
</style>
    <!-- Page Content -->
    <div class="container">
        <div class="box-container">
            <form action="{{route("website.group.joinGroup")}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Please select Module to Join</label>
                    <select class="form-control" name="module_id">
                        @foreach($modules as $module)
                            <option value="{{$module->id}}">{{$module->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Join">
            </div>
            </form>
        </div>
    </div>


@endsection
