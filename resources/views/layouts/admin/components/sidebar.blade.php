<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user"></i>
                        <span key="t-dashboards">Usuarios</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('usuarios.index')}}" key="t-default" class="bx bx-search"> Listado</a></li>
                        <li><a href="{{route('usuarios.crear')}}" key="t-default" class="bx bx-user-plus"> Nuevo</a></li>
                        {{--<li><a href="{{route('usuarios.editar')}}" key="t-default" class="bx bx-user-check"> Actualizar</a></li>--}}
                        <li><a href="{{route('usuarios.index')}}" key="t-default" class="bx bx-user-minus"> Desactivar</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-buildings"></i>
                        <span key="t-layouts">Activos</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('usuarios.crear')}}" key="t-horizontal" class="bx bx-search"> Listado</a></li>
                        <li><a href="{{route('usuarios.index')}}" key="t-vertical" class="bx bx-plus"> Registrar</a></li>
                        <li><a href="{{route('usuarios.index')}}" key="t-vertical" class="bx bx-edit"> Actualizar</a></li>
                        <li><a href="{{route('usuarios.index')}}" key="t-default" class="bx bx-power-off"> Desactivar</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user"></i>
                        <span key="t-dashboards">Proveedores</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('proveedores.index')}}" key="t-default" class="bx bx-search"> Listado</a></li>
                        <li><a href="{{route('proveedores.crear')}}" key="t-saas" class="bx bx-user-plus"> Nuevo</a></li>
                        {{--<li><a href="{{route('usuarios.index')}}" key="t-default" class="bx bx-user-check"> Actualizar</a></li>--}}
                        {{--<li><a href="{{route('usuarios.index')}}" key="t-default" class="bx bx-user-minus"> Desactivar</a></li>--}}
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user"></i>
                        <span key="t-dashboards">Docentes</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('usuarios.index')}}" key="t-default" class="bx bx-search"> Listado</a></li>
                        <li><a href="{{route('usuarios.index')}}" key="t-saas" class="bx bx-user-plus"> Nuevo</a></li>
                        <li><a href="{{route('usuarios.index')}}" key="t-default" class="bx bx-user-check"> Actualizar</a></li>
                        <li><a href="{{route('usuarios.index')}}" key="t-default" class="bx bx-user-minus"> Desactivar</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-mouse"></i>
                        <span key="t-layouts">Prestamos</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('usuarios.index')}}" key="t-horizontal" class="bx bx-search"> Listado</a></li>
                        <li><a href="{{route('usuarios.index')}}" key="t-vertical" class="bx bx-plus"> Registrar</a></li>
                        <li><a href="{{route('usuarios.index')}}" key="t-vertical" class="bx bx-edit"> Actualizar</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-laptop"></i>
                        <span key="t-layouts">Asignaciones</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('usuarios.index')}}" key="t-horizontal" class="bx bx-search" > Listado</a></li>
                        <li><a href="{{route('usuarios.index')}}" key="t-vertical" class="bx bx-plus"> Registrar</a></li>
                        <li><a href="{{route('usuarios.index')}}" key="t-vertical" class="bx bx-edit"> Actualizar</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-wrench"></i>
                        <span key="t-layouts">Mantenimiento</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('usuarios.index')}}" key="t-horizontal" class="bx bx-search"> Listado</a></li>
                        <li><a href="{{route('usuarios.index')}}" key="t-vertical" class="bx bx-plus" >Nueva Mantenimiento</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-layouts">Reportes</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('usuarios.index')}}" key="t-horizontal">Genererar Reporte</a></li>

                    </ul>
                </li>

                <!------------------------------------------------------------------------------------------------------------->

            </ul>
        </div>
    </div>
</div>
