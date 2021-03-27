@extends("Website.layouts.app")
@section("content")
<style>
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

                    <div class="row">

                        <!-- Post Content Column -->
                        <div class="col-lg-8 post">
                            <!-- Author -->
                            <div class="post-head">
                                    <img src="http://project.test/ControlPanel\assets\img\example-image.jpg" style="width: 75px;height: 75px;border-radius: 50%;">
                                    <div class="post-user-name">
                                        <a href="#" >Manaf</a>
                                        <p>Posted on March 21, 2021 at 8:00 PM</p>
                                    </div>
                            </div>

                            <!-- Date/Time -->


                            <hr>
                            <!-- Post Content -->
                            <p class="post-content">I will divide this work into 4 sections:</p>

                            <!-- Preview Image -->
                            <div class="post-images">
                                <img class="img-fluid rounded img-post" src="http://project.test/ControlPanel\assets\img\example-image.jpg" alt="">
                            </div>



                            <hr>
                            <div class="media mb-4 comment">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="#">Nour</a></h5>
                                    <div class="comment-content">
                                        Comment here
                                    </div>
                                </div>
                            </div>

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
                        <div class="col-lg-8 post">
                            <!-- Author -->
                            <div class="post-head">
                                <img src="http://project.test/ControlPanel\assets\img\example-image.jpg" style="width: 75px;height: 75px;border-radius: 50%;">
                                <div class="post-user-name">
                                    <a href="#" >Manaf</a>
                                    <p>Posted on March 21, 2021 at 8:00 PM</p>
                                </div>
                            </div>

                            <!-- Date/Time -->


                            <hr>
                            <!-- Post Content -->
                            <p class="post-content">I will divide this work into 4 sections:</p>

                            <!-- Preview Image -->
                            <div class="post-images">
                                <img class="img-fluid rounded img-post" src="http://project.test/ControlPanel\assets\img\example-image.jpg" alt="">
                            </div>



                            <hr>
                            <div class="media mb-4 comment">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="#">Nour</a></h5>
                                    <div class="comment-content">
                                        Comment here
                                    </div>
                                </div>
                            </div>
                            <div class="media mb-4 comment">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="#">Nour</a></h5>
                                    <div class="comment-content">
                                        Comment here
                                    </div>
                                </div>
                            </div>
                            <div class="media mb-4 comment">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="#">Nour</a></h5>
                                    <div class="comment-content">
                                        Comment here
                                    </div>
                                </div>
                            </div>  <div class="media mb-4 comment">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="#">Nour</a></h5>
                                    <div class="comment-content">
                                        Comment here
                                    </div>
                                </div>
                            </div>  <div class="media mb-4 comment">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="#">Nour</a></h5>
                                    <div class="comment-content">
                                        Comment here
                                    </div>
                                </div>
                            </div>




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
                    </div>
                </div>

@endsection
