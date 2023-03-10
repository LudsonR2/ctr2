<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="#" class="brand-link">
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
                <p style="color:#ffff">Bem-vindo <a href="#" class="d-block">{{ Auth::user()->name }}</a> </p>
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
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            CT
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('uplista') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('uplista')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Subir Audi??ncia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('upevento') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Atribuir Evento</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>

    </div>

</aside>
