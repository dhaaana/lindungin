<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Lindung.in - @yield('title')</title>
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
    <link rel="stylesheet" href="css/main.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light font-inter d-flex flex-column" style="height: 3000px">
    {{-- Navbar --}}
    <nav class="bg-white shadow-sm sticky-navbar" style="height: 9vh">
        <div class="container-fluid px-5 h-100 d-flex justify-content-between align-items-center">
            <a class="navbar-brand d-flex link-unstyled" href="#">
                <div class="px-2 fw-bold bg-blue text-white">LINDUNG</div>
                <div class="px-1 fw-bold text-black">.in</div>
            </a>
            <div class="d-flex gap-4 align-items-center">
                <a class="btn-blue d-flex" href="#">
                    <span><svg xmlns="http://www.w3.org/2000/svg" class="plus-icons" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg></span> Create Forum
                </a>
                <div class="position-relative">
                    <div class="position-absolute end-0 bg-danger text-white text-2xs px-1 rounded-circle">1</div>
                    <button class="btn p-0" data-bs-toggle="modal" data-bs-target="#notificationModal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="notification-bell" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>
                </div>
                <div class="d-flex dropdown">
                    <img class="avatar" src="https://i.pravatar.cc/100" alt="profile">
                    <svg id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false"
                        xmlns="http://www.w3.org/2000/svg" class="avatar-arrow dropdown-toggle" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                    <ul class="dropdown-menu dropdown-menu-lg-end shadow-sm" aria-labelledby="dropdownUser2">
                        <li><a class="dropdown-item text-xs" href="#">Settings</a></li>
                        <li><a class="dropdown-item text-xs" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-xs" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

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

    <div class="d-flex border-2 h-100">
        {{-- Small Sidebar --}}
        <div id="smallSidebar" class="p-3 bg-white shadow-sm sticky-sidebar"
            style="width: 80px; height: 91vh; display: none">
            <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed"
                        onclick="openNav()" data-bs-toggle="tooltip" data-bs-placement="right" title="Search">
                        <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg></span>
                    </button>
                </li>
                <li class="border-top my-2"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed"
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
                        <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg></span>
                    </button>
                </li>
                <li class="border-top my-2"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed"
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Category">
                        <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg></span>
                    </button>
                </li>
                <li class="border-top my-2"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed"
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Your Forum">
                        <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg></span>
                    </button>
                </li>
                <li class="border-top my-2"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed"
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Your Comments">
                        <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg></span>
                    </button>
                </li>
                <li class="border-top my-2"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed"
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Your Likes">
                        <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg></span>
                    </button>
                </li>
                <button class="position-absolute mb-3 mr-3 btn btn-light" data-bs-toggle="tooltip" onclick="openNav()"
                    data-bs-placement="right" title="Open" style="bottom:0; right: 0.7rem;">
                    <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                        </svg></span>
                </button>
            </ul>
        </div>

        {{-- Big Sidebar --}}
        <div id="bigSidebar" class="p-3 bg-white shadow-sm sticky-sidebar" style="width: 280px; height: 91vh">
            <ul class="list-unstyled ps-0">
                <li class="mb-2 h-100 text-xs text-secondary ms-3 fw-bold">
                    Search
                </li>
                <li class="mb-3 px-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search here.." aria-label="Search here.."
                            aria-describedby="button-addon2">
                        <div class="btn-blue" id="button-addon2"><svg xmlns="http://www.w3.org/2000/svg"
                                class="plus-icons mx-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg></div>
                    </div>
                </li>
                <li class="text-xs text-secondary mb-2 ms-3 fw-bold">
                    Menu
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed">
                        <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg></span> Home
                    </button>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed"
                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg></span> Category
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded">Kesehatan</a></li>
                            <li><a href="#" class="link-dark rounded">Politik</a></li>
                            <li><a href="#" class="link-dark rounded">Sosial</a></li>
                            <li><a href="#" class="link-dark rounded">See More..</a></li>
                        </ul>
                    </div>
                </li>
                <li class="border-top my-3"></li>
                <li class="text-xs text-secondary mb-2 ms-3 fw-bold">
                    Personal Navigator
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed">
                        <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg></span> Your Forums
                    </button>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed">
                        <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg></span> Your Comments
                    </button>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed">
                        <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg></span> Your Likes
                    </button>
                </li>
                <button class="position-absolute mb-3 mr-3 btn btn-light" data-bs-toggle="tooltip" onclick="closeNav()"
                    data-bs-placement="right" title="Close" style="bottom:0; right: 1.3rem;">
                    <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                        </svg></span>
                </button>
            </ul>
        </div>

        <div class="p-3">
            @yield('content')
        </div>
    </div>
</body>

<script>
    function openNav() {
        document.getElementById("bigSidebar").style.display = "block";
        document.getElementById("smallSidebar").style.display = "none";

    }

    function closeNav() {
        document.getElementById("bigSidebar").style.display = "none";
        document.getElementById("smallSidebar").style.display = "block";
    }

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>

</html>
