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
            <form action="{{route("website.xVoice.sendVoice")}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label>Express your voice openly</label>
                    <textarea class="form-control" name="content" placeholder="Your Voice"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Send">
                </div>
            </form>
        </div>
    </div>


@endsection
