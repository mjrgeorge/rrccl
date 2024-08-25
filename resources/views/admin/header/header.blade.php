<header class="main-header">
    <a href="#" class="logo">
        <!-- Logo -->
        <span class="logo-mini">
            <!--<b>A</b>H-admin-->
            <img src="admin/assets/dist/img/mini-logo.png" alt="">
        </span>
        <span class="logo-lg">
            <!--<b>Admin</b>H-admin-->
            <img src="admin/assets/dist/img/logo.png" alt="">
        </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top ">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <!-- Sidebar toggle button-->
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-tasks"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- user -->
                <li class="dropdown dropdown-user admin-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="user-image">
                            <img src="admin/assets/dist/img/avatar4.png" class="img-circle" height="40" width="40"
                                alt="User Image">
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                       
                        <li><a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">><i
                                    class="fa fa-sign-out"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>