<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <a href="" class="navbar-brand sidebar-gone-hide"><img src="{{asset('assets/img/Saraswanti-Logo.png')}}" alt="logo"
            width="100" height="40px"></a>
    <div class="nav-collapse">
        <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>

    </div>

    <form class="form-inline ml-auto">
        <ul class="navbar-nav">
            {{-- <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a>
            </li> --}}
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">


        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifications
                    <div class="float-right">
                        <a href="#">Mark All As Read</a>
                    </div>
                </div>

                <div class="dropdown-list-content dropdown-list-icons">
                    <a href="" class="dropdown-item dropdown-item-unread">
                        <div class="dropdown-item-icon bg-primary text-white">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="dropdown-item-desc">
                            Nandang Prayogi S.Kom
                            <div class="time text-primary">2 Min Ago</div>
                        </div>
                    </a>


                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>


    </ul>
</nav>

<nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item"><a href="" class="nav-link">General Dashboard</a></li>
                </ul>
            </li>
            <li class="nav-item active">
                <a href="#" class="nav-link"><i class="far fa-heart"></i><span>Test Programmer</span></a>
            </li>


        </ul>
    </div>
</nav>
