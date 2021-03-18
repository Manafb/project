<html>
<head>
    <link rel="stylesheet" href="{{asset("Website/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("ControlPanel/assets/modules/bootstrap/css/bootstrap.min.css")}}">
    @yield("css")
    <title>@yield("title")</title>
    @yield("head")

</head>
<body>
<div class="nav navbar top-nav">
<ul>
    <li>
        Test1
    </li>
    <li>
        Test2
    </li>
</ul>
    <div>
        <img src="{{asset("ControlPanel\assets\img\\example-image.jpg")}}" class="profile-image" />
    </div>
</div>
@yield("content")


@yield("footer")
<script src="{{asset("ControlPanel/assets/modules/bootstrap/js/bootstrap.min.js")}}"></script>
@yield("js")
</body>

</html>
