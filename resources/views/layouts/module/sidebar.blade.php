<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('home') }}" class="nav-link {{ linkActive(request()->path(), ['home']) }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('product.index') }}" class="nav-link {{ linkActive(request()->path(), ['product']) }}">
                        <i class="nav-icon fab fa-buffer"></i>
                        <p>
                            Product
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview {{ linkMenuActive(request()->path(), ['colour', 'type', 'size', 'storage']) }}">
                    <a href="#" class="nav-link {{ linkActive(request()->path(), ['colour', 'type', 'size', 'storage']) }}">
                        <i class="fas fa-cog"></i>
                        <p>
                            Master
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview {{ linkMenuActive(request()->path(), ['colour', 'type', 'size']) }}">
                            <a href="#" class="nav-link {{ linkActive(request()->path(), ['colour', 'type', 'size']) }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Product
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('colour.index') }}" class="nav-link {{ linkActive(request()->path(), ['colour']) }}">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Warna</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('type.index') }}" class="nav-link {{ linkActive(request()->path(), ['type']) }}">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Jenis</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('size.index') }}" class="nav-link {{ linkActive(request()->path(), ['size']) }}">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Size</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('storage.index') }} " class="nav-link {{ linkActive(request()->path(), ['storage']) }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Penyimpanan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" onclick="event.preventDefault();getElementById('logout').submit();" class="nav-link {{ linkActive(request()->path(), ['logout']) }}">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                    <form action="{{ route('logout') }}" method="post" id="logout">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>