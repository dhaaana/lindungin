<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title') - Lindung.in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">


    <!-- Style -->
    <link rel="stylesheet" href={{ asset('css/main.css') }}>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- RichText -->
    <link rel="stylesheet" href={{ asset('css/richtext.min.css') }}>
    <script src={{ asset('js/jquery.richtext.min.js') }}></script>

</head>

<body class="bg-light font-inter d-flex flex-column">
    @include('partials.navbar')


    {{-- Notification Modal --}}
    <div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-center text-secondary">There is no notification</p>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex w-100">
        @yield('content')
    </div>
</body>

<script>
    let sidebarstate = true
    let block = "block"
    let none = "none"

    function handleSidebar() {
        if (window.innerWidth < 768) {
            if (sidebarstate) {
                sidebarstate = !sidebarstate
            }
            document.getElementById("bigSidebar").style.display = none;
            document.getElementById("smallSidebar").style.display = block;
        } else if (window.innerWidth > 768) {
            if (!sidebarstate) {
                sidebarstate = !sidebarstate
            }
            sidebarstate = !sidebarstate
            document.getElementById("bigSidebar").style.display = block;
            document.getElementById("smallSidebar").style.display = none;
        }
    }

    handleSidebar()
    window.addEventListener("resize", handleSidebar)

    function toggleNav() {
        sidebarstate = !sidebarstate
        document.getElementById("bigSidebar").style.display = sidebarstate ? block : none;
        document.getElementById("smallSidebar").style.display = sidebarstate ? none : block;
    }

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>

</html>
