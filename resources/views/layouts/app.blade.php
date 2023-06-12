<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel Blog</title>
    <!-- CSS links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        #menu a {
            color: #0170b9;
        }
    </style>
</head>

<body>
    <!-- Include -->
    @include('layouts/register')
    <!-- End Include -->
    <!-- Header -->
    <header>
        @include('layouts/header')
    </header>
    <br>
    <!-- Main content -->
    <main>
        <!-- Content section -->
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <!-- Footer content -->
    </footer>

    <!-- Javascript files -->
    @yield('scripts')
</body>

</html>
