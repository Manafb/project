@extends("layouts.app")
@section("content")

    <div class="row">
        <div class="col-md-6 -pull-left float-left">
           <label>{{$voice->title}}</label>
        </div>
        <div class="col-md-6 float-right">
            <label>{{$voice->created_at->diffForHumans()}}</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>{{$voice->content}}</p>
        </div>
    </div>

@endsection
