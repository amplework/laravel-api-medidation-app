
    <!-- Start Preloader Area -->

    <!-- End Preloader Area -->

    <!-- Start Main Content Wrapper Area -->
    <div class="main-content-wrapper d-flex flex-column">

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="main-responsive-menu">
                    <div class="responsive-burger-menu d-lg-none d-block">
                        <span class="top-bar"></span>
                        <span class="middle-bar"></span>
                        <span class="bottom-bar"></span>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="index.html" class="navbar-brand d-flex align-items-center">
                        <img src="{{ asset('user/assets/images/logo.png')}}" alt="image">
                    </a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navbar-burger-menu m-auto">
                            <span class="top-bar"></span>
                            <span class="middle-bar"></span>
                            <span class="bottom-bar"></span>
                        </div>

                      

                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <div class="dropdown profile-nav-item">
                                    <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <div class="menu-profile">
                                            <img src="{{ asset('user/assets/images/user/user-1.jpg')}}" class="rounded-circle" alt="image">
                                            <span class="name">Matthew</span>
                                            <span class="status-online"></span>
                                        </div>
                                    </a>

                                    <div class="dropdown-menu">
                                        <div class="profile-header">
                                            <h3>Matthew Turner</h3>
                                            <a
                                                href=""><span
                                                    class="__cf_email__"
                                                    data-cfemail="92fff3e6e6faf7e5a7a2a5d2f5fff3fbfebcf1fdff">[email&#160;protected]</span></a>
                                        </div>
                                        <ul class="profile-body">
                                            <li><i class="flaticon-user"></i>
                                                <a href="my-profile.html">My
                                                    Profile</a></li>                                  
                                            <li><i class="flaticon-logout"></i>
                                                <form action="{{ route('logout') }}">
                                                @csrf
                                                <button>Logout</button>
                                                </form>
                                                {{-- <a href="{{ route('logout') }}">Logout</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

        </div>
        <!-- End Navbar Area -->