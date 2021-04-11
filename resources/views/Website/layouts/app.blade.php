<html>
<head>
    <script src="{{asset("ControlPanel/assets/modules/jquery.min.js")}}"></script>
    <link rel="stylesheet" href="{{asset("Website/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("ControlPanel/assets/modules/bootstrap/css/bootstrap.min.css")}}">
    <script src="{{asset("ControlPanel/assets/modules/popper.js")}}"></script>
    @yield("css")
    <title>@yield("title")</title>
    @yield("head")

</head>
<body>

<nav class="navbar navbar-expand-sm bg-light" style="display: flex;justify-content: space-between">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Test 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Test 2</a>
        </li>
    </ul>
    <div>
        <img src="{{asset("ControlPanel\assets\img\\example-image.jpg")}}" class="profile-image" />
    </div>

</nav>


@yield("content")


@yield("footer")
<script src="{{asset("ControlPanel/assets/modules/bootstrap/js/bootstrap.min.js")}}"></script>
@yield("js")
</body>

</html>
