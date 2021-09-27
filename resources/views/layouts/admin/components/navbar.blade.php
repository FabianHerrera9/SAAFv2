<header id="page-topbar" style="background:#eeeeec">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box" style="background:#eeeeec">

                <a class="logo logo-dark"  href={{route('usuarios.crear')}} >
                    <span class="logo-sm">
                        <img src="{{url('/images/liceo.jpg')}}" alt="" height="30">
                    </span>
                </a>

                <a class="logo logo-light"  href={{route('usuarios.index')}} >
                    <span class="logo-lg">
                        <img src="{{url('/images/liceo.jpg')}}" alt="" height="30">
                    </span>
                </a>

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
                    <img class="rounded-circle header-profile-user" src="{{url('/images/escudo.jpg')}}"
                         alt="20">
                    <!--Espacio para imagen-->
                    <span class="d-none d-xl-inline-block ml-1" key="t-henry">{{Auth::user()->name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block" ></i>
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
                        <a class="dropdown-item text-danger" href="{{route('logout')}}" onclick="this.closest('form').submit()">
                            <i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i>
                            <span key="t-logout">Cerrar Sesión</span>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
