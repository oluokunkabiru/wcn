
<div class="navbar-bg"></div>

<!-- Start app top navbar -->
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
        {{--  <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
                <div class="search-header">Histories</div>
                <div class="search-item">
                    <a href="#">How to Used HTML in Laravel</a>
                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
            </div>
        </div>  --}}
    </form>

    <ul class="navbar-nav navbar-right">
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i><span class="text-danger font-weight-bold">
            {{ Auth::user()->unreadNotifications->count(); }}
        </span></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
            <div class="dropdown-header">Notifications
                <div class="float-right">
                    <a href="{{ route('mark-all-as-read') }}">Mark All As Read</a>
                </div>
            </div>
            <div class="dropdown-list-content dropdown-list-icons">
                @forelse (Auth::user()->unreadNotifications as $notification)
                <a href="{{ route('mark-as-read', $notification->id) }}" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-icon bg-primary text-white">

                        <img src="{{ $notification->data['avatar'] }}"
                        class="avatar avatar-sm me-3">
                    </div>
                    <span class="font-weight-bold">{{ $notification->data['name'] }}</span>

                    <div class="dropdown-item-desc"> {{ $notification->data['status'] }}
                        <div class="time text-primary">{{ Auth::user()->timeago($notification->created_at) }}</div>
                    </div>
                </a>
                @empty
                <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-icon bg-primary text-white">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="dropdown-item-desc text-danger"> No notification
                        {{-- <div class="time text-primary">2 Min Ago</div> --}}
                    </div>
                </a>
                @endforelse
 </div>
            <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
            </div>
            </div>
        </li>
        @php
        $configuration = App\Models\Configuration::where('id', 1)->first();
    @endphp
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ Auth::user()->getMedia('avatar')->first()->getFullUrl() }}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block"> {{ ucwords(Auth::user()->name) }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="" class="dropdown-item has-icon"><i class="fas fa-user"></i>New User</a>
                <a href="" class="dropdown-item has-icon"><i class="fas fa-barcode"></i>New GIFMIS</a>
                 <div class="dropdown-divider"></div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="dropdown-item has-icon text-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
        </li>
    </ul>
</nav>

<!-- Start main left sidebar menu -->
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('index') }}"><img src="{{ $configuration->getMedia('logo')->first()->getFullUrl() }}" class="rounded-circle" style="width: 15%" alt="{{ $configuration->name }}"></a>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>


            <li class="menu-header">Users</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-users"></i> <span>Users</span></a>
                <ul class="dropdown-menu">
                     {{-- <li><a href="{{ route('register-new-user') }}">Add users</a></li> --}}

                     <li><a href="{{ route('users.index') }}">Manage users</a></li>


                </ul>
            </li>

            <li class="menu-header">Gallery</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-car"></i> <span>Gallery</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('gallery.index') }}">Manage Gallery</a></li>

                </ul>
            </li>
            <li class="menu-header">Services</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-car"></i> <span>Services</span></a>
                <ul class="dropdown-menu">
                     <li><a href="{{ route('blogs.index') }}">Blogs</a></li>
                     <li><a href="{{ route('events.index') }}">Events</a></li>
                     <li><a href="{{ route('nugget.index') }}">Nuggets</a></li>
                     <li><a href="{{ route('books.index') }}">Books</a></li>

                </ul>
            </li>
            <li class="menu-header">Testimony</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-barcode"></i> <span>Testimony</span></a>
                <ul class="dropdown-menu">
                     {{--  <li><a href="">Add motorcycle</a></li>  --}}
                    <li><a href="{{ route('userstestimony') }}">Manage Testimony</a></li>

                </ul>
            </li>


            <li class="menu-header">Profile</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-road"></i> <span>Profile</span></a>
                <ul class="dropdown-menu">
                     {{--  <li><a href="">Add motorcycle</a></li>  --}}
                    <li><a href="{{ route('admin.edit', Auth::user()->id) }}">Profiles setting</a></li>

                </ul>
            </li>




            <li class="menu-header">Settings</li>
            <li class="dropdown">
                <a href="{{ route('configurations.edit', 1) }}" class="nav-link has-dropdow"><i class="fas fa-cog"></i> <span>Settings</span></a>

            </li>
             </ul>

    </aside>
</div>
