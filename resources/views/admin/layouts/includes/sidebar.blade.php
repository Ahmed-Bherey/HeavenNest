<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('public/admin/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('public/admin/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Widgets
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            الاعدادات العامة
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('country.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>العملاء</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('realEstate.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>الادمينات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/inline.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>اضافة Role</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/inline.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>اضافة Permission</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/inline.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ادارة الصلاحيات</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('realEstate.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>من نحن</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('country.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>اضافة دولة</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('realEstate.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>اضافة عقار</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            تقارير
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('country.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>اضافة دولة</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('realEstate.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>اضافة عقار</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/inline.html" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>Inline</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
