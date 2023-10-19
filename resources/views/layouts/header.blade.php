<!-- Header Starts -->
<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block">
        <li class="icon-box {{ request()->is('/') ? 'active' : '' }}">
            <i class="fa fa-home"></i>
            <a href="/">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box {{ request()->is('about') ? 'active' : '' }}">
            <i class="fa fa-user"></i>
            <a href="/about">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box {{ request()->is('projects') ? 'active' : '' }}">
            <i class="fa fa-briefcase"></i>
            <a href="/projects">
                <h2>Projects</h2>
            </a>
        </li>
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox"/>
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li class="active"><a href="/"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="/about"><i class="fa fa-user"></i><span>About</span></a></li>
                <li><a href="/projects"><i class="fa fa-folder-open"></i><span>Projects</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->
