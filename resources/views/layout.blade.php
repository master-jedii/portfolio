<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | BASS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-dark text-white p-4" style="width: 250px;">
            <h5 class="text-center mb-3">Menu</h5>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">บทความทั้งหมด</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">เกี่ยวกับเรา</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/create">เขียนบทความ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/welcome">Portfolio</a>
                </li>
            </ul>
        </div>
        @yield('content')
    </div>

</body>

</html>
