<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="{{route('home2')}}" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>{{__('navbar.Kider')}}</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{route('home2')}}" class="nav-item nav-link {{ request()->is('home2') ? 'active' : '' }}">{{__('navbar.Home')}}</a>
                    <a href="{{route('about')}}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">{{__('navbar.About_Us')}}</a>
                    <a href="{{route('classes')}}" class="nav-item nav-link {{ request()->is('classes') ? 'active' : '' }}">{{__('navbar.Classes')}}</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('navbar.Classes')}}</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="{{route('facilities')}}" class="dropdown-item">{{__('navbar.School_Facilities')}}</a>
                            <a href="{{route('team')}}" class="dropdown-item">{{__('navbar.Popular_Teachers')}}</a>
                            <a href="{{route('call')}}" class="dropdown-item">{{__('navbar.Become_A_Teachers')}}</a>
                            <a href="{{route('appointment')}}" class="dropdown-item">{{__('navbar.Make_Appointment')}}</a>
                            <a href="{{route('testimonial')}}" class="dropdown-item">{{__('navbar.Testimonial')}}</a>
                            <a href="{{route('error')}}" class="dropdown-item">{{__('navbar.404_Error')}}</a> 
                        </div>
                    </div>
                    <a href="{{route('contact')}}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">{{__('navbar.Contact_Us')}}</a>
                </div>
                <div class="d-flex align-items-center">
                <a href="{{ LaravelLocalization::getLocalizedURL('en') }}"  class="me-3">English</a>
                <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">العربية</a>
                </div>
                <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">{{__('navbar.Join_Us')}}<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>