 <nav class="bg-white shadow-sm sticky-navbar w-100">
     <div class="container-fluid px-md-5 h-100 d-flex justify-content-between align-items-center">
         <a class="navbar-brand d-flex link-unstyled" href="/">
             <div class="px-2 fw-bold bg-blue text-white">LINDUNG</div>
             <div class="px-1 fw-bold text-black">.in</div>
         </a>
         <div class="d-flex gap-4 align-items-center">
             @auth
                 <a class="btn-blue d-none d-md-flex" href="/create" style="font-size: 0.8rem; font-weight: 400;">
                     <span><svg xmlns="http://www.w3.org/2000/svg" class="plus-icons" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                             <path stroke-linecap="round" stroke-linejoin="round"
                                 d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                         </svg></span> Create Forum
                 </a>
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
                         <form action="/logout" method="POST">
                             @csrf
                             <li>
                                 <button class="dropdown-item text-xs" type="submit">Sign out</button>
                             </li>
                         </form>
                     </ul>
                 </div>
             @else
                 <a class="btn-blue d-none d-md-flex" href="/login" style="font-size: 0.8rem; font-weight: 400;">
                     Login
                 </a>
                 <a class="btn-blue d-none d-md-flex" href="/register" style="font-size: 0.8rem; font-weight: 400;">
                     Register
                 </a>
             @endauth

         </div>
     </div>
 </nav>
