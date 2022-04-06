<nav class="navbar navbar-expand-lg main-navbar" >
    <form class="form-inline mr-auto">
     <ul class="navbar-nav mr-3">
    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars" style="color: black"></i></a></li>
     </ul>
    <form action="search" method="GET" role="search" class="form-inline mr-auto" style="margin-top: 20px">
    <ul class="navbar-nav mr-3"  >
    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
    </ul>
    {{-- search --}}


    <div class="search-element">
    <input type="text" class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250" method="GET" name="term" id="term">
    <button class="btn" type="submit"><i class="fas fa-search"></i></button>

    </div>
    </form>
    </form>

    {{-- Messages --}}
    <ul class="navbar-nav navbar-right">
    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
    <div class="dropdown-menu dropdown-list dropdown-menu-right">
        <div class="dropdown-header">Messages
        <div class="float-right">
            <a href="#">Mark All As Read</a>
        </div>
        </div>
        <div class="dropdown-list-content dropdown-list-message">
        <a href="#" class="dropdown-item dropdown-item-unread">
            <div class="dropdown-item-avatar">
            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle">
            <div class="is-online"></div>
            </div>
            <div class="dropdown-item-desc">
            <b>Kusnaedi</b>
            <p>Hello, Bro!</p>
            <div class="time">10 Hours Ago</div>
            </div>
        </a>
        <a href="#" class="dropdown-item dropdown-item-unread">
            <div class="dropdown-item-avatar">
            <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle">
            </div>
            <div class="dropdown-item-desc">
            <b>Dedik Sugiharto</b>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="time">12 Hours Ago</div>
            </div>
        </a>
        <a href="#" class="dropdown-item dropdown-item-unread">
            <div class="dropdown-item-avatar">
            <img alt="image" src="../assets/img/avatar/avatar-3.png" class="rounded-circle">
            <div class="is-online"></div>
            </div>
            <div class="dropdown-item-desc">
            <b>Agung Ardiansyah</b>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="time">12 Hours Ago</div>
            </div>
        </a>
        <a href="#" class="dropdown-item">
            <div class="dropdown-item-avatar">
            <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle">
            </div>
            <div class="dropdown-item-desc">
            <b>Ardian Rahardiansyah</b>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
            <div class="time">16 Hours Ago</div>
            </div>
        </a>
        <a href="#" class="dropdown-item">
            <div class="dropdown-item-avatar">
            <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle">
            </div>
            <div class="dropdown-item-desc">
            <b>Alfa Zulkarnain</b>
            <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
            <div class="time">Yesterday</div>
            </div>
        </a>
        </div>
        <div class="dropdown-footer text-center">
        <a href="#">View All <i class="fas fa-chevron-right"></i></a>
        </div>
    </div>
    </li>
            {{-- Notification --}}
    <li class="dropdown dropdown-list-toggle" ><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
    <div class="dropdown-menu dropdown-list dropdown-menu-right">
        <div class="dropdown-header">Notifications
        <div class="float-right">
            <a href="#">Mark All As Read</a>
        </div>
        </div>
        <div class="dropdown-list-content dropdown-list-icons">
        <a href="#" class="dropdown-item dropdown-item-unread">
            <div class="dropdown-item-icon bg-primary text-white">
            <i class="fas fa-code"></i>
            </div>
            <div class="dropdown-item-desc">
            Template update is available now!
            <div class="time text-primary">2 Min Ago</div>
            </div>
        </a>
        <a href="#" class="dropdown-item">
            <div class="dropdown-item-icon bg-info text-white">
            <i class="far fa-user"></i>
            </div>
            <div class="dropdown-item-desc">
            <b>You</b> and <b>Dedik Sugiharto</b> are now friends
            <div class="time">10 Hours Ago</div>
            </div>
        </a>
        <a href="#" class="dropdown-item">
            <div class="dropdown-item-icon bg-success text-white">
            <i class="fas fa-check"></i>
            </div>
            <div class="dropdown-item-desc">
            <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
            <div class="time">12 Hours Ago</div>
            </div>
        </a>
        <a href="#" class="dropdown-item">
            <div class="dropdown-item-icon bg-danger text-white">
            <i class="fas fa-exclamation-triangle"></i>
            </div>
            <div class="dropdown-item-desc">
            Low disk space. Let's clean it!
            <div class="time">17 Hours Ago</div>
            </div>
        </a>
        <a href="#" class="dropdown-item">
            <div class="dropdown-item-icon bg-info text-white">
            <i class="fas fa-bell"></i>
            </div>
            <div class="dropdown-item-desc">
            Welcome to Stisla template!
            <div class="time">Yesterday</div>
            </div>
        </a>
        </div>
        <div class="dropdown-footer text-center">
        <a href="#">View All <i class="fas fa-chevron-right"></i></a>
        </div>
    </div>
    </li>
            <li class="nav-item dropdown">
                {{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> --}}
                <a style="color: #B9AAAE" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
    </ul>
    </div>
    </ul>
    </nav>
