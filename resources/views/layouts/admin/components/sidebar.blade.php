<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu" style="background:#000000b8">

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
                        <li><a href="{{route('usuarios.index')}}" key="t-default" class="bx bx-list-ul"> Listado</a></li>
                        <li><a href="{{route('usuarios.crear')}}" key="t-default" class="bx bx-user-plus"> Nuevo</a>
                        </li>
                        {{--<li><a href="{{route('usuarios.editar')}}" key="t-default" class="bx bx-user-check"> Actualizar</a></li>--}}
                        {{--<li><a href="{{route('usuarios.index')}}" key="t-default" class="bx bx-user-minus"> Desactivar</a></li>--}}
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-buildings"></i>
                        <span key="t-layouts">Activos</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('activos.index')}}" key="t-default" class="bx bx-list-ul"> Listado</a></li>
                        <li><a href="{{route('activos.crear')}}" key="t-vertical" class="bx bx-plus"> Registrar</a></li>
                        {{--<li><a href="{{route('usuarios.index')}}" key="t-vertical" class="bx bx-edit"> Actualizar</a></li>--}}
                        {{--<li><a href="{{route('usuarios.index')}}" key="t-default" class="bx bx-power-off"> Desactivar</a></li>--}}
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect ">
                                <i class="bx bx-laptop"></i>
                                <span key="t-layouts">Asignaciones y Prestamos</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{route('prestamos.index')}}" key="t-horizontal" class="bx bx-list-ul">
                                        Listado</a></li>
                                <li><a href="{{route('prestamos.crear')}}" key="t-vertical" class="bx bx-plus">
                                        Registrar</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-wrench"></i>
                                <span key="t-layouts">Mantenimientos y Garantias</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('Mttogarant.index')}}" key="t-horizontal" class="bx bx-list-ul">
                                        Listado</a></li>
                                <li><a href="{{route('Mttogarant.crear')}}" key="t-vertical" class="bx bx-plus">
                                        Registrar </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store-alt"></i>
                        <span key="t-dashboards">Proveedores</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('proveedores.index')}}" key="t-default" class="bx bx-list-ul"> Listado</a>
                        </li>
                        <li><a href="{{route('proveedores.crear')}}" key="t-saas" class="bx bx-user-plus"> Nuevo</a>
                        </li>
                        {{--<li><a href="{{route('usuarios.index')}}" key="t-default" class="bx bx-user-check"> Actualizar</a></li>--}}
                        {{--<li><a href="{{route('usuarios.index')}}" key="t-default" class="bx bx-user-minus"> Desactivar</a></li>--}}
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-group"></i>
                        <span key="t-dashboards">Docentes</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('docentes.index')}}" key="t-default" class="bx bx-list-ul"> Listado</a></li>
                        <li><a href="{{route('docentes.crear')}}" key="t-saas" class="bx bx-user-plus"> Nuevo</a></li>
                        {{--<li><a href="{{route('usuarios.index')}}" key="t-default" class="bx bx-user-check"> Actualizar</a></li>--}}
                        {{--<li><a href="{{route('usuarios.index')}}" key="t-default" class="bx bx-user-minus"> Desactivar</a></li>--}}
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-paper-plane"></i>
                        <span key="t-dashboards">Ambientes</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('ambientes.index')}}" key="t-default" class="bx bx-list-ul"> Listado</a>
                        </li>
                        <li><a href="{{route('ambientes.crear')}}" key="t-default" class="bx bx-user-plus"> Nuevo</a>
                        </li>
                        {{--<li><a href="{{route('usuarios.editar')}}" key="t-default" class="bx bx-user-check"> Actualizar</a></li>--}}
                        {{--<li><a href="{{route('usuarios.index')}}" key="t-default" class="bx bx-user-minus"> Desactivar</a></li>--}}
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-layouts">Reportes</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('reportes.index')}}" key="t-horizontal">Genererar Reporte</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
