<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
        @include('include.head')

  </head>
    <body>

		<!-- Preloader -->
        @include('include.preloader')
        <!-- End Preloader -->

		<!-- Get Pro Button -->


		<!-- Header Area -->
		@include('include.header')
		<!-- End Header Area -->

        @yield('content')



        <!-- Footer Area -->
		@include('include.footer')
		<!--/ End Footer Area -->

		@include('include.footerJs')
    </body>
</html>

@sectio
