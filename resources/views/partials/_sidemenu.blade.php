<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="images/icon/logo.png" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li>
                    <a href="{{route('home')}}">
                        <i class="fas fa-chart-bar"></i>Dashboard</a>
                </li>
                <li>
                    <a href="{{route('oneTimeDonatePage')}}">
                        <i class="fas fa-chart-bar"></i>One Time Payment</a>
                </li>
                <li>
                    <a href="{{route('recurrentDonatePage')}}">
                        <i class="fas fa-table"></i>Recurrent Payment</a>
                </li>
                <li>
                    <a href="{{route("paymentRecord")}}">
                        <i class="far fa-check-square"></i>Payment Records</a>
                </li>

            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="{{route('home')}}">
                        <i class="fas fa-chart-bar"></i>Dashboard</a>
                </li>
                <li>
                    <a href="{{route('oneTimeDonatePage')}}">
                        <i class="fas fa-chart-bar"></i>One Time Payment</a>
                </li>
                <li>
                    <a href="{{route('recurrentDonatePage')}}">
                        <i class="fas fa-table"></i>Recurrent Payment</a>
                </li>
                <li>
                    <a href="{{route("paymentRecord")}}">
                        <i class="far fa-check-square"></i>Payment Records</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->