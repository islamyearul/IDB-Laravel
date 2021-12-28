@include('includes/ad-head');
@include('includes/ad-header');

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="{{ url('/admin/dashboard') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link" href="{{ url('/admin/main') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                        Main
                    </a>
                    <a class="nav-link" href="{{ url('/admin/service') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tasks"></i></div>
                        Service
                    </a>
                    <a class="nav-link" href="{{ url('/admin/about') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                        About
                    </a>
                    <a class="nav-link" href="{{ url('/admin/contact') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-phone"></i></div>
                        Contact
                    </a>


                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                        aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Layouts
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                            <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                        </nav>
                    </div>

                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Start Bootstrap
            </div>
        </nav>
    </div>

    <div id="layoutSidenav_content">

        <main>
            <div class="container px-4">

                @yield('dashboard')
                @yield('main')
                @yield('service')
                @yield('about')
                @yield('contact')
                @yield('script')



            </div>
        </main>

        @include('includes/ad-footer');
    </div>
</div>


