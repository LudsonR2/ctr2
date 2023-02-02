<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index3.html" class="brand-link">
        <img src="https://assets.r2.com.vc/uploads/2022/05/logotipo-2.svg" alt="" class="brand-image"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Clever AC</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!--<div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>-->
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!--<div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>-->

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link {{ request()->is('home') ? 'active' : '' || request()->is('uplista') ? 'active' : '' || request()->is('upevento') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Clevertap AC
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('uplista')}}" class="nav-link {{ request()->is('uplista') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Subir Audiência</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('upevento') }}" class="nav-link {{ request()->is('upevento') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Atribuir Evento</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Exclusão de Listas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                           
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('uplista')}}" class="nav-link {{ request()->is('uplista') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>PROCV (VLOOKUP)</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('config') }}" class="nav-link {{ request()->is('config') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Configurações
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

</aside>
