<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        {{-- <img src="{{asset('dashboard/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                {{-- <img src="{{asset('dashboard/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image"> --}}
            </div>
            <div class="info">
                <a href="#" class="d-block">Hello</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link {{ (request()->is('dashboard/home*')) ? 'active':'' }}">
                        <i class="nav-icon fa fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.trips') }}" class="nav-link {{ (request()->is('admin/trips*')) ? 'active':'' }}">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Trips
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.groups') }}" class="nav-link {{ (request()->is('admin/groups*')) ? 'active':'' }}">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Groups
                        </p>
                    </a>
                </li>




            </ul>
        </nav>
    </div>
</aside>
