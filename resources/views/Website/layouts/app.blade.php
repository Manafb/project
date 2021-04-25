<html>
<head>
    <script src="{{asset("ControlPanelAssets/assets/modules/jquery.min.js")}}"></script>
    <link rel="stylesheet" href="{{asset("Website/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("ControlPanelAssets/assets/modules/bootstrap/css/bootstrap.min.css")}}">
    <script src="{{asset("ControlPanelAssets/assets/modules/popper.js")}}"></script>
    @yield("css")
    <title>@yield("title")</title>
    @yield("head")

</head>
<body>

<nav class="navbar navbar-expand-sm bg-light" style="display: flex;justify-content: space-between">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
               Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
        @foreach($RGroup as $group)
            <li class="nav-item">
                <a class="nav-link" href="{{route("website.group.index",["id"=>$group->id])}}">{{$group->Groupable->name}}</a>
            </li>
        @endforeach
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link btn btn-info" href="{{route("website.xVoice.newXVoice")}}">XVoice</a>--}}
{{--        </li>--}}
    </ul>
    <div>
        <a class="nav-link btn btn-info" href="{{route("website.xVoice.newXVoice")}}">XVoice</a>
{{--        @if(!is_null(Auth::user()->Image))--}}
{{--            <img src="{{asset("images/".Auth::user()->Image->url)}}"--}}
{{--                 class="profile-image">--}}
{{--        @else--}}
{{--            <img src="http://project.test/ControlPanelAssets\\assets\\img\\example-image.jpg"--}}
{{--                 class="profile-image">--}}
{{--        @endif--}}
    </div>

</nav>


@yield("content")


@yield("footer")
<script src="{{asset("ControlPanelAssets/assets/modules/bootstrap/js/bootstrap.min.js")}}"></script>
@yield("js")
</body>

</html>
