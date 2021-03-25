@extends("Website.layouts.app")
@section("content")
    <div style="display: flex;flex-direction: column;justify-content: space-around">
        <div style="width: 100%;">
            <div style="width:500px;height: 500px;margin-left: 20px;margin-top: 10px;">

                <!-- Page Content -->
                <div class="container">

                    <div class="row">

                        <!-- Post Content Column -->
                        <div class="col-lg-8">

                            <!-- Title -->
                            <h1 class="mt-4">Poster name</h1>

                            <!-- Author -->
                            <p class="lead">
                                by
                                <a href="#">Manaf</a>
                            </p>

                            <hr>

                            <!-- Date/Time -->
                            <p>Posted on March 21, 2021 at 8:00 PM</p>

                            <hr>

                            <!-- Preview Image -->
                            <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

                            <hr>

                            <!-- Post Content -->
                            <p>I will divide this work into 4 sections:
                            <ul>
                                <li>First....</li>
                                <li>Second....</li>
                                <li>Third....</li>
                                <li>Forth....</li>
                            </ul>

                            </p>

                            <hr>

                            <!-- Comments Form -->
                            <div class="card my-4">
                                <h5 class="card-header">Leave a Comment:</h5>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>

                            <!-- Single Comment -->
                            <div class="media mb-4">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0">Commenter Name</h5>
                                    Type your comment here
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
