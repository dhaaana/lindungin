 <nav class="bg-white shadow-sm sticky-navbar">
     <div class="container-fluid px-md-5 h-100 d-flex justify-content-between align-items-center">
         <a class="navbar-brand d-flex link-unstyled" href="#">
             <div class="px-2 fw-bold bg-blue text-white">LINDUNG</div>
             <div class="px-1 fw-bold text-black">.in</div>
         </a>
         <div class="d-flex gap-4 align-items-center">
             <a class="btn-blue d-none d-md-flex" href="#">
                 <span><svg xmlns="http://www.w3.org/2000/svg" class="plus-icons" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                         <path stroke-linecap="round" stroke-linejoin="round"
                             d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                     </svg></span> Create Forum
             </a>
             <div class="position-relative">
                 <div class="position-absolute end-0 bg-danger text-white text-2xs px-1 rounded-circle">1</div>
                 <button class="btn p-0" data-bs-toggle="modal" data-bs-target="#notificationModal">
                     <svg xmlns="http://www.w3.org/2000/svg" class="notification-bell" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
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
                     <li><a class="dropdown-item text-xs d-sm-inline d-md-none" href="#">Create
                             Forum</a></li>
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
