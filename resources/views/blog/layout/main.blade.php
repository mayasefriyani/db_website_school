<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ config('app.name') }} - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('blog') }}/assets/write.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('blog') }}/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        @include('blog.layout.navbar')
        
        @if (Request::is('/'))
        @include('blog.layout.slide')
        @endif
        <!-- Page content-->
        <div class="container">
            <div class="row">
                @yield('content')


                @if (Request::is('/'))
                @include('blog.layout.aside')
                @endif
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark mt-5">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; School Univercity 2024</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('blog') }}/js/scripts.js"></script>
    </body>
</html>
