<!DOCTYPE html>
<html lang="en">

@include('partials._head')

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
@include("partials._sidemenu")

<!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
    @include('partials._header')
    <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    @yield('content')

                    @include('partials._footer')
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

</div>

<!-- Jquery JS-->
@include('partials._script')
</body>

</html>
<!-- end document-->
