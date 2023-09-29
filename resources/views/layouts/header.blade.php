<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

        <a href="/" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">HOME</a></li>
                <li><a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">ABOUT US</a></li>
                <li><a class="nav-link {{ Request::is('portofolio') ? 'active' : '' }} " href="/portofolio">PORTOFOLIO</a></li>
                <li><a class="nav-link {{ Request::is('article') ? 'active' : '' }}" href="#">ARTICLE</a></li>
                <li><a class="nav-link {{ Request::is('faq') ? 'active' : '' }}" href="/faq">FAQ</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->