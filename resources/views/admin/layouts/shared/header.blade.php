<header>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
                <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                    </a></div>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <li class="nav-item">
                        <a href="{{ route('logout') }}"  class="nav-link logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Выход<i class="fa fa-sign-out"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>