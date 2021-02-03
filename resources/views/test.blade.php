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
                    <label for="dean">dean: </label>
                    <input type="text" id="dean" name="dean" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="Save">
            </form>
        </div>
    </div>
@endsection
