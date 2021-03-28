@extends("Website.layouts.app")
@section("content")
<style>
    .file-upload{
        display: inline-block;
        background-color: #007bff;
        color: white;
        padding: .375rem .75rem;
        font-family: sans-serif;
        border-radius: 0.3rem;
        cursor: pointer;
    }
    .container{
        margin: 30px;
    }
    .post{
        margin:30px;
        padding: 20px;
        background-color: #c1c1c12e;
        border-radius:10px;
    }
    .post-user-name{
        display: flex;
        margin-left: 10px;
        flex-direction: column;
    }
    .post-head{
        margin-left: 10px;
        display: flex;
        justify-content: start;
    }
    .post-content{
        margin-top: 20px;
        margin-bottom:20px; ;
    }
    .comment-content{
        word-wrap: break-word;
        width: 70%;
    }
    .new-comment{
        background-color: #b7b7b773;
    }
    .img-post{
        width: 200px;
        height: 200px;
    }
</style>
                <!-- Page Content -->
                <div class="container">
                    <form action="{{route("website.group.createPost",["id"=>$model->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-8" style="background-color: #c1c1c12e;padding: 10px;border-radius: 5px;margin: 30px;">
                                <textarea name="content" class="form-control" placeholder="Please Leave Your Post hear"></textarea>
                                <input class="btn btn-primary" type="submit" value="Post"/>
                                <label for="upload" class="file-upload mt-3">Choose file</label>
                                <input type="file" id="upload" name="post_file" hidden/>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <!-- Post Content Column -->
                        @foreach($posts as $key=>$post)
                            <div class="col-lg-8 post">
                            <!-- Author -->
                            <div class="post-head">
                                    <img src="http://project.test/ControlPanel\assets\img\example-image.jpg" style="width: 75px;height: 75px;border-radius: 50%;">
                                    <div class="post-user-name">
                                        <a href="#" >{{$post->User->name}}</a>
                                        <p>{{$post->created_at->diffForHumans()}}</p>
                                    </div>
                            </div>

                            <!-- Date/Time -->


                            <hr>
                            <!-- Post Content -->
                            <p class="post-content">
                                {{$post->content}}
                            </p>

                            <!-- Preview Image -->
                            <div class="post-images">
                                <img class="img-fluid rounded img-post" src="http://project.test/ControlPanel\assets\img\example-image.jpg" alt="">
                            </div>



                            <hr>
                            @foreach($post->Comments as $key=>$comment)
                                <div class="media mb-4 comment">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="#">{{$comment->User->name}}</a></h5>
                                    <div class="comment-content">
                                        {{$comment->content}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- Comments Form -->
                            <div class="card my-4">
                                <div class="card-body new-comment">
                                    <form>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">send</button>
                                    </form>
                                </div>
                            </div>
                            <!-- Single Comment -->

                        </div>
                        @endforeach

                    </div>
                </div>

@endsection
