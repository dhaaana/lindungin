@extends('layout.navigation')
@section('title', 'Halaman Utama')

@section('content')
    @include('partials.sidebar')
    <div class='p-sm-3 w-100'>
        <div class="container">
            <div class="row mt-3">
                <div class="col-lg-9">
                    <div class="d-flex mb-3 gap-2 align-items-center">
                        <button class="btn-gray text-xs p-1 px-2 rounded-pill">New</button>
                        <button class="btn-gray text-xs p-1 px-2 rounded-pill">Top</button>
                        <button class="btn-orange text-xs p-1 px-2 rounded-pill">Hot</button>
                        <button class="btn-gray text-xs p-1 px-2 rounded-pill">Closed</button>
                    </div>
                    @for ($i = 0; $i < 4; $i++)
                        <div class="card p-4 mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-wrap align-items-center gap-3">
                                    <div>
                                        <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                    </div>
                                    <div>
                                        <a href="#" class="h5 m-0 link-unstyled">Maulana Ahmadi</a>
                                        <div>
                                            <a href="#" class="h7 text-muted link-unstyled">@aldimaulana</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-dark sidebar-icons m-0"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Share</a></li>
                                        <li><a class="dropdown-item" href="#">Report</a></li>
                                        <li><a class="dropdown-item" href="#">Visit Profile</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="d-flex flex-lg-row flex-column-reverse gap-2 justify-content-between">
                                    <a class="link-unstyled underline-link text-dark" href="/nama-forum">
                                        <h5 class="fw-bold">Apakah ada kasus korupsi di gelaran Formula E
                                            Jakarta?
                                        </h5>
                                    </a>
                                    <div>
                                        <span class="badge bg-light rounded-pill text-dark"><span
                                                class="badge bg-danger rounded-pill me-1">X</span>Hoax</span>
                                    </div>
                                </div>
                                <p>
                                    Saya baru baru ini baca di internet, katanya tercium bau bau korupsi dalam
                                    penyelenggaraannya. Apakah
                                    benar demikian? Mohon informasinya terima kasih
                                </p>
                                <div class="d-flex justify-content-center">
                                    <img class="img-fluid"
                                        src="https://asset.indosport.com/article/image/q/80/292889/ilustrasi_formula_e_jadi_di_jakarta1-169.jpg?w=750&h=423"
                                        alt="Formula E Jakarta">
                                </div>
                            </div>
                            <div
                                class="mt-4 d-flex flex-lg-row flex-column justify-content-between align-items-sm-center border-0">
                                <div class="text-muted h7 m-0"> <i class="fa fa-clock-o me-1"></i>15 Februari 2022</div>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="d-flex align-items-center gap-1">
                                        <button class="fa fa-thumbs-o-up post-icons"></button>
                                        <p class="m-0 text-muted">546</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <button class="fa fa-thumbs-o-down post-icons"></button>
                                        <p class="m-0 text-muted">457</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <button class="fa fa-comment-o post-icons"></button>
                                        <p class="m-0 text-muted">12</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor

                </div>
                <div class="col-lg-3 mb-3 d-none d-lg-block sticky-right-side">
                    @include('partials.rightbar')
                </div>
            </div>
        </div>
        {{-- Post --}}
        {{-- <div class="card gedf-card my-4">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-2">
                                        <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                    </div>
                                    <div class="ml-2">
                                        <div class="h5 m-0">@aldimaulana</div>
                                        <div class="h7 text-muted">Maulana Ahmadi</div>
                                    </div>
                                </div>
                                <div>
                                    <div class="dropdown">
                                        <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                            <div class="h6 dropdown-header">Configuration</div>
                                            <a class="dropdown-item" href="#">Save</a>
                                            <a class="dropdown-item" href="#">Hide</a>
                                            <a class="dropdown-item" href="#">Report</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 10 min ago</div>
                            <a class="card-link" href="#">
                                <h5 class="card-title"> Apakah ada kasus korupsi di gelaran Formula E Jakarta?</h5>
                            </a>

                            <p class="card-text">
                                Saya baru baru ini baca di internet, katanya tercium bau bau korupsi dalam
                                penyelenggaraannya. Apakah
                                benar demikian? Mohon informasinya terima kasih
                            </p>
                            <div class="d-flex justify-content-center">
                                <img src="https://asset.indosport.com/article/image/q/80/292889/ilustrasi_formula_e_jadi_di_jakarta1-169.jpg?w=750&h=423"
                                    alt="Formula E Jakarta">
                            </div>
                            <div>
                                <span class="badge badge-primary">JavaScript</span>
                                <span class="badge badge-primary">Android</span>
                                <span class="badge badge-primary">PHP</span>
                                <span class="badge badge-primary">Node.js</span>
                                <span class="badge badge-primary">Ruby</span>
                                <span class="badge badge-primary">Paython</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                            <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                            <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                        </div>
                    </div> --}}
    </div>

@endsection
