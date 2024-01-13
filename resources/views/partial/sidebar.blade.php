<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/e318da7e58.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <title>Live Code</title>
</head>

<body>
    <link rel="stylesheet" href="{{ URL::asset('code.css') }}">
    <!-- sidebar -->
    <div class="wrapper">
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">Hiroshi</a>
                </div>
                <!-- sidebar navigation -->
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Tester
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-list" pe-2></i>
                            Beranda
                        </a>
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-list" pe-2></i>
                            Materi
                        </a>
                        <a href="tes" class="sidebar-link">
                            <i class="fa-solid fa-list" pe-2></i>
                            Soal UKK
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- Main content -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <!-- button sidebar -->
                <button class="btn" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <div class="container mt-4">
                @yield('isi')
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
