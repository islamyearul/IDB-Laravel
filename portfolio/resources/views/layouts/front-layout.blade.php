<!DOCTYPE html>
<html lang="en">
  @include('includes/front-head')
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        @include('includes/front-header')

        <!-- Index-->

        @yield('index')

        <!-- Services-->
{{-- 
        @yield('service')
      

        <!-- Portfolio Grid-->
        @yield('portfolio')
        <!-- About-->
        @yield('about')
        <!-- Team-->
        @yield('team')
        <!-- Clients-->
        @yield('client')
        <!-- Contact-->
        @yield('contact') --}}
        <!-- Footer-->
        @include('includes/front-footer')

        
        @include('frontsection/modal')

    </body>
</html>
