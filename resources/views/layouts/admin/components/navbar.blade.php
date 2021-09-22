<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">

            </div>

            <!--Boton Vertfical-->
            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="d-flex">
            <!--User-admin-->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <!--Espacio para imagen-->
                    <span class="d-none d-xl-inline-block ml-1" key="t-henry">{{Auth::user()->name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href={{route('usuarios.mostrar')}}>
                        <i class="bx bx-user font-size-16 align-middle mr-1"></i>
                        <span key="t-profile"> Perfil </span>
                    </a>

                    <form id="logout" action="/login" method="post">
                        @method('PUT')
                        @csrf
                        <a class="dropdown-item text-danger" href="#" onclick="this.closest('form').submit()">
                            <i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i>
                            <span key="t-logout">Cerrar Sesión</span>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
