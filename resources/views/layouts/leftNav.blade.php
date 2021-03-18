<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="@hassection("college")  active @endif"><a class="nav-link" href="{{route("college.index")}}"><i class="fas fa-university"></i> <span>College</span></a>
            <li class="@hassection("major")  active @endif"><a class="nav-link" href="{{route("major.index")}}"><i class="fas fa-book-reader"></i> <span>Major</span></a>
            <li class="@hassection("module")  active @endif"><a class="nav-link" href="{{route("module.index")}}"><i class="fas fa-book"></i> <span>Module</span></a>
            <li class="@hassection("user")  active @endif"><a class="nav-link" href="{{route("user.index")}}"><i class="fas fa-users"></i> <span>User</span></a>
            <li class="@hassection("student")  active @endif"><a class="nav-link" href="{{route("student.index")}}"><i class="fas fa-graduation-cap"></i> <span>Student</span></a>
            </li>
        </ul>

    </aside>
</div>
