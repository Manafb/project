@extends("Website.layouts.app")
@section("content")
    <style>
        .file-upload {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: .375rem .75rem;
            font-family: sans-serif;
            border-radius: 0.3rem;
            cursor: pointer;
        }

        .container {
            margin: 30px;
        }

        .post {
            margin: 30px;
            padding: 20px;
            background-color: #c1c1c12e;
            border-radius: 10px;
        }

        .post-user-name {
            display: flex;
            margin-left: 10px;
            flex-direction: column;
        }

        .post-head {
            margin-left: 10px;
            display: flex;
            justify-content: start;
        }

        .post-content {
            margin-top: 20px;
            margin-bottom: 20px;;
        }

        .comment-content {
            word-wrap: break-word;
            width: 70%;
        }

        .new-comment {
            background-color: #b7b7b773;
        }

        .img-post {
            width: 500px;
            height: 500px;
        }

        .post-setting {
            z-index: 9999;
            margin-top: 5px;
            position: absolute;
            top: 0;
            right: 15px;
            list-style: none;
            opacity: 0;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }

        .post-setting a {
            color: #2c2c2c;
        }

        .single-post-parent:hover .post-setting {
            opacity: 1;
        }

        .post-setting {
            opacity: 1 !important;
        }

        .post-setting .dropdown-menu {
            left: -140px;
            margin-top: 5px;
        }

        .comment-setting {
            margin-top: 5px;
            position: relative;
            float: right;
            right: 5px;
            list-style: none;
            opacity: 0;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }

        .comment-setting a {
            color: #2c2c2c;
        }

        .single-comment:hover .comment-setting {
            opacity: 1;
        }

        .comment-setting {
            opacity: 1 !important;
        }

        .comment-setting .dropdown-menu {
            left: -140px;
            margin-top: 5px;
        }

    </style>
    <!-- Page Content -->
    <div class="container">
        <form action="{{route("website.group.createPost",["id"=>$model->id])}}" method="POST"
              enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-8"
                     style="background-color: #c1c1c12e;padding: 10px;border-radius: 5px;margin: 30px;">
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
                        <img src="http://project.test/ControlPanelAssets\assets\img\example-image.jpg"
                             style="width: 75px;height: 75px;border-radius: 50%;">
                        <div class="post-user-name">
                            <a href="#">{{$post->User->name}}</a>
                            <p>{{$post->created_at->diffForHumans()}}</p>
                        </div>
                    </div>

                    <!-- Date/Time -->


                    <hr>
                    <!-- Post Content -->
                    <p class="post-content" data-edit="{{route("website.group.editPost",["id"=>$post->id])}}">
                        {{$post->content}}
                    </p>

                @if(!is_null($post->image))
                    <!-- Preview Image -->
                        <div class="post-images">
                            <img class="img-fluid rounded img-post"
                                 src="{{asset("images/".$post->image->url)}}" alt="">
                        </div>
                    @endif


                    <hr>
                    @if(Auth::user()->canModifyPost($post->id))
                        <li class="dropdown post-setting open">
                            <a href="#" class="dropdown-toggle docs-creator" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu publisher30">
                                <li>
                                    <ai href="#" class="delete-post" data-id="{{$post->id}}" >Delete</ai>
                                </li>
                                @if(Auth::user()->isPostForUser($post->id))
                                    <li>
                                        <ai href="#" class="block-post blothis edit-post" >Edit</ai>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endif
                    @foreach($post->Comments as $key=>$comment)
                        <div class="media mb-4 comment">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                            <div class="media-body">
                                <h5 class="mt-0"><a href="#">{{$comment->User->name}}</a></h5>

                                <div class="single-comment">
                                    @if(Auth::user()->canModifyComment($comment->id))
                                    <li class="dropdown comment-setting open">
                                        <a class="dropdown-toggle docs-creator" data-toggle="dropdown" href="#"
                                           aria-expanded="true">
                                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        </a>

                                            <ul class="dropdown-menu">
                                                @if(Auth::user()->isCommentForUser($comment->id))
                                                    <li>
                                                        <a href="#" class="edit-comment"
                                                           style="text-align: center">Edit</a>
                                                    </li>
                                                @endif
                                                <li>
                                                    <a href="#" class="delete-comment" style="text-align: center"
                                                       data-id="{{$comment->id}}">Delete</a>
                                                </li>

                                            </ul>
                                    </li>
                                    @endif
                                    <div class="comment-content" data-id="{{$comment->id}}"
                                         data-edit="{{route("website.group.editComment",["id"=>$comment->id])}}">
                                        {{$comment->content}}
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
                <!-- Comments Form -->
                    <div class="card my-4">
                        <div class="card-body new-comment">
                            <form
                                action="{{route("website.group.createComment",["post_id"=>$post->id,"group_id"=>$model->id])}}"
                                method="POST">
                                @csrf
                                <div class="form-group">
                                    <textarea class="form-control" name="newComment" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">send</button>
                            </form>
                        </div>
                    </div>
                    <!-- Single Comment -->

                </div>
            @endforeach
        </div>
        <form id="delete_form" action="{{route("website.group.deleteComment")}}" method="POST">
            @csrf
            <input type="hidden" name="comment_id" id="comment_id">
        </form>
        <form id="delete_post_form" action="{{route("website.group.deletePost")}}" method="POST">
            @csrf
            <input type="hidden" name="post_id" id="post_id">
        </form>
        <script>
            $(".edit-comment").on("click", function () {
                var comment_div = $(this).parents(".single-comment").find(".comment-content");
                var content = comment_div.html()
                var comment_edit_url = comment_div.data("edit");
                var csrf = "{{csrf_token()}}";
                var str = '<form class="edit-form" action="' + comment_edit_url + '" method="POST">' +
                    '<input type="hidden" value="' + csrf + '" name="_token">' +
                    '<textarea name="edit_comment" class="form-control textarea_edit_comment"  >' + content.trim() + '</textarea>' +
                    '</form>';
                comment_div.html(str)
            });
            $(document).on("keypress", ".textarea_edit_comment", function (e) {
                if (e.which === 13) {
                    e.preventDefault();
                    $(this).parents(".edit-form").submit();
                }
            });



            $(".edit-post").on("click", function () {
                var post_div = $(this).parents(".post").find(".post-content");
                var content = post_div.html()
                var post_edit_url = post_div.data("edit");
                var csrf = "{{csrf_token()}}";
                var str = '<form class="edit-form" action="' + post_edit_url + '" method="POST">' +
                    '<input type="hidden" value="' + csrf + '" name="_token">' +
                    '<textarea name="edit_post" class="form-control textarea_edit_post"  >' + content.trim() + '</textarea>' +
                    '</form>';
                post_div.html(str)
            });
            $(document).on("keypress", ".textarea_edit_post", function (e) {
                if (e.which === 13) {
                    e.preventDefault();
                    $(this).parents(".edit-form").submit();
                }
            });
        </script>
        <script>
            $(".delete-comment").on("click", function () {
                var comment_id = $(this).data("id");
                $("#comment_id").val(comment_id);
                $("#delete_form").submit();
            });
            $(".delete-post").on("click", function () {
                var post_id = $(this).data("id");
                $("#post_id").val(post_id);
                $("#delete_post_form").submit();
            });
        </script>
    </div>


@endsection
