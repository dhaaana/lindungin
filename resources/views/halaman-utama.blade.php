@extends('layout.navigation')

@section('title', 'Halamam Utama')

@section('content')
    @include('partials.sidebar')
    <div class='p-3 w-100'>
        <div class="container">
            <div class="row my-3">
                <div class="col-9">
                    <div class="row mx-6 d-flex align-items-center">
                        <div class="col-6">
                            <button class="btn-gray text-xs p-1 px-2 rounded-pill">New</button>
                            <button class="btn-gray text-xs p-1 px-2 rounded-pill">Top</button>
                            <button class="btn-orange text-xs p-1 px-2 rounded-pill">Hot</button>
                            <button class="btn-gray text-xs p-1 px-2 rounded-pill">Closed</button>
                        </div>
                        <div class="col-6"></div>
                    </div>
                    <!--- \\\\\\\Post-->
        <div class="card gedf-card my-4">
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
                    Saya baru baru ini baca di internet, katanya tercium bau bau korupsi dalam penyelenggaraannya. Apakah
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
        </div>
        <!-- Post /////-->
        <!--- \\\\\\\Post-->
        <div class="card gedf-card my-4">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mr-2">
                            <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                        </div>
                        <div class="ml-2">
                            <div class="h5 m-0">@rdhana</div>
                            <div class="h7 text-muted">Ramadhana Rizqy Arifin</div>
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
                <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 25 min ago</div>
                <a class="card-link" href="#">
                    <h5 class="card-title"> Apakah benar ada 4 kali gerhana di tahun ini? Bisa dilihat di Indonesia ga
                        ya?</h5>
                </a>

                <p class="card-text">
                    Mohon informasinya terima kasih
                </p>
                <div class="d-flex justify-content-center">
                    <img class="img-fluid" src="https://i.ytimg.com/vi/EjNGqG8JgkE/maxresdefault.jpg" alt="Gerhana 2022">
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
        </div>
        <!-- Post /////-->
                </div>
                <div class="col-3">

                </div>
            </div>
        </div>

    </div>


    </div>
@endsection
