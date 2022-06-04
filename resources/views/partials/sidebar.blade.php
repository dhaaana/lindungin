{{-- Small Sidebar --}}
<div id="smallSidebar" class="p-3 bg-white shadow-sm sticky-sidebar" style="width: 80px; height: 91vh; display: none">
    <ul class="list-unstyled ps-0">
        <li class="mb-1">
            <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed" onclick="toggleNav()"
                data-bs-toggle="tooltip" data-bs-placement="right" title="Search">
                <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg></span>
            </button>
        </li>
        <li class="border-top my-2"></li>
        <li class="mb-1">
            <a class="link-unstyled" href="/">
                <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed"
                    data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
                    <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg></span>
                </button>
            </a>
        </li>
        <li class="border-top my-2"></li>
        <li class="mb-1">
            <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed"
                data-bs-toggle="tooltip" data-bs-placement="right" title="Category">
                <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                    </svg></span>
            </button>
        </li>
        <li class="border-top my-2"></li>
        <li class="mb-1">
            <a class="link-unstyled" href="/your-forum">
                <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed"
                    data-bs-toggle="tooltip" data-bs-placement="right" title="Your Forum">
                    <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg></span>
                </button>
            </a>
        </li>
        <li class="border-top my-2"></li>
        <li class="mb-1">
            <a class="link-unstyled" href="/your-forum">
                <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed"
                    data-bs-toggle="tooltip" data-bs-placement="right" title="Your Comments">
                    <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg></span>
                </button>
            </a>
        </li>
        <li class="border-top my-2"></li>
        <li class="mb-1">
            <a class="link-unstyled" href="/your-forum">
                <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed"
                    data-bs-toggle="tooltip" data-bs-placement="right" title="Your Likes">
                    <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg></span>
                </button>
            </a>
        </li>
        <button class="position-absolute mb-3 mr-3 btn btn-light" data-bs-toggle="tooltip" onclick="toggleNav()"
            data-bs-placement="right" title="Open" style="bottom:0; right: 0.7rem;">
            <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                </svg></span>
        </button>
    </ul>
</div>

{{-- Big Sidebar --}}
<div id="bigSidebar" class="p-3 bg-white shadow-sm sticky-sidebar" style="min-width: 280px; height: 91vh">
    <ul class="list-unstyled ps-0">
        <li class="mb-2 h-100 text-xs text-secondary ms-3 fw-bold">
            Search
        </li>
        <li class="mb-3 px-2">
            <form action="/search/forum" method="get">
                <div class="input-group">
                    <input name="title" type="text" class="form-control" placeholder="Search here.." aria-label="Search here.."
                        aria-describedby="button-addon2">
                    <button type="submit" class="btn-blue" id="button-addon2"><svg xmlns="http://www.w3.org/2000/svg"
                            class="plus-icons mx-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg></button>
                </div>
            </form>
        </li>
        <li class="text-xs text-secondary mb-2 ms-3 fw-bold">
            Menu
        </li>
        <li class="mb-1">
            <a class="link-unstyled" href="/">
                <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed">
                    <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg></span> Home
                </button>
            </a>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed"
                data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
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
            <a class="link-unstyled" href="/your-forum">
                <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed">
                    <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg></span> Your Forums
                </button>
            </a>
        </li>
        <li class="mb-1">
            <a class="link-unstyled" href="/your-forum">
                <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed">
                    <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg></span> Your Comments
                </button>
            </a>
        </li>
        <li class="mb-1">
            <a class="link-unstyled" href="/your-forum">
                <button class="btn btn-toggle d-flex align-items-center text-start rounded collapsed">
                    <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg></span> Your Likes
                </button>
            </a>
        </li>
        <button class="position-absolute mb-3 mr-3 btn btn-light" data-bs-toggle="tooltip" onclick="toggleNav()"
            data-bs-placement="right" title="Close" style="bottom:0; right: 1.3rem;">
            <span><svg xmlns="http://www.w3.org/2000/svg" class="sidebar-icons" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                </svg></span>
        </button>
    </ul>
</div>
