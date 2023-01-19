<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Library</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ url('/') }}/assets/assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ url('/') }}/assets/css/styles.css" rel="stylesheet" />
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
    <body>
        <!-- Responsive navbar-->
        @include('partials.navbar')

        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            @yield('content')
        </div>
        <!-- Footer-->
        @include('partials.footer')
        @include('partials.script')
    </body>
</html>
