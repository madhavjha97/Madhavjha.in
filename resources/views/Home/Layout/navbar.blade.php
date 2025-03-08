<header id="header_main" class="header_1 js-header">
    <div class="themes-container ">
        <div class="row">
            <div class="col-md-12">
                <div id="site-header-inner">
                    <div class="wrap-box relative">
                        <div id="site-logo" class="clearfix">
                            <div id="site-logo-inner">
                                <a href="{{ route('home') }}" rel="home" class="main-logo">
                                    <h2>{{ $basicsetting->title }}</h2>
                                    <!-- <img id="logo_header" src="assets/images/logo/logo.png" alt="img" width="155" height="46"> -->
                                </a>
                            </div>
                        </div>
                        <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
                        <nav id="main-nav" class="main-nav">
                            <ul id="menu-primary-menu" class="menu">
                                <li class="menu-item  current-menu-item">
                                    <a href="{{ route('home') }}">Home</a>

                                </li>
                                <li class="menu-item menu-item-has-children ">
                                    <a href="#">Tutorials</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item current-item"><a href="html.php">HTML</a></li>
                                        <li class="menu-item"><a href="css.php">CSS</a></li>
                                        <li class="menu-item"><a href="bootstrap.php">Bootstrap</a></li>
                                        <li class="menu-item"><a href="javascript.php">JavaScript</a></li>
                                        <li class="menu-item"><a href="react.php">React</a></li>
                                        <li class="menu-item"><a href="mysql.php">MySQL</a></li>
                                        <li class="menu-item"><a href="#">PHP</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item">
                                    <a href="project.php"> Project</a>
                                </li>

                                <li class="menu-item ">
                                    <a href="https://github.com/DopplerHQ/awesome-interview-questions">Interview Q/A</a>
                                </li>

                                <li class="menu-item ">
                                    <!-- Auth Links -->
                                    @auth
                                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                            @csrf
                                            <button type="submit" style="background: none; border: none; color: inherit; cursor: pointer;">Logout</button>
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}">Login</a>
                                        <a href="{{ route('register') }}">Register</a>
                                    @endauth
                                </li>

                                <li class="menu-item menu-item-has-children">
                                    <a data-scroll href="#blog">More</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="blog.html">Free Resources</a></li>
                                        <li class="menu-item"><a href="blog-standard.html">About</a></li>
                                        <li class="menu-item"><a href="blog-details.html">Blog Details</a></li>
                                        <li class="menu-item"><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </nav><!-- /#main-nav -->
                        <div class="flat-button-top">
                            <div class="sc-btn-top" id="site-header">
                                <a href="{{ route('contact') }}" class="btn-action"><span>Contact me
                                            </span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
