@extends('layout.navigation')
@section('title', 'Your Forum')

@section('content')
    @include('partials.sidebar')
    <div class='p-sm-3 w-100'>
        <div class="container">
            <div class="row mt-3">
                <div class="col-lg-3 mb-3 d-sm-none">
                    <div class="card p-4">
                        <img src="https://i.pravatar.cc/300" alt="profile" class="img-fluid border rounded-circle">
                        <div class="text-center mt-3">
                            <a href="#" class="h5 m-0 text-dark link-unstyled">Maulana Ahmadi</a>
                            <div>
                                <a href="#" class="h7 text-muted link-unstyled">@aldimaulana</a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="text-center border-end px-2">
                                <p class="m-0"><small class="text-muted fw-bold">Forum</small>
                                </p>
                                <p class="m-0">12</p>
                            </div>
                            <div class="text-center px-2">
                                <p class="m-0"><small class="text-muted fw-bold">Comment</small>
                                </p>
                                <p class="m-0">23</p>
                            </div>
                            <div class="text-center border-start px-2">
                                <p class="m-0"><small class="text-muted fw-bold">Like</small>
                                </p>
                                <p class="m-0">310</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    @for ($i = 0; $i < 2; $i++)
                        <div class="card mb-3 w-100">
                            <div class="row g-0">
                                <div class="col-md-4 p-2">
                                    <img src="https://asset.indosport.com/article/image/q/80/292889/ilustrasi_formula_e_jadi_di_jakarta1-169.jpg?w=750&h=423"
                                        class="img-fluid rounded h-100" alt="pict">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <a class="link-unstyled underline-link" href="#">

                                            <h5 class="card-title text-dark">Adakah penyanyi yang suaranya tidak enak tapi
                                                karena
                                                massa pendukungnya loyal dia masih eksis sampai sekarang?</h5>
                                        </a>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small>
                                        </p>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-success">Update</button>
                                            <button class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 w-100">
                            <div class="row g-0">
                                <div class="col-md-4 p-2">
                                    <img src="https://asset.indosport.com/article/image/q/80/292889/ilustrasi_formula_e_jadi_di_jakarta1-169.jpg?w=750&h=423"
                                        class="img-fluid rounded h-100" alt="pict">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <a class="link-unstyled underline-link" href="#">
                                            <h5 class="card-title text-dark">Vaksin covid Novavax mengandung DNA laba-laba
                                            </h5>
                                        </a>
                                        <p class="card-text"><small class="text-muted">Last updated 7 days
                                                ago</small>
                                        </p>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-success">Update</button>
                                            <button class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 w-100">
                            <div class="row g-0">
                                <div class="col-md-4 p-2">
                                    <img src="https://asset.indosport.com/article/image/q/80/292889/ilustrasi_formula_e_jadi_di_jakarta1-169.jpg?w=750&h=423"
                                        class="img-fluid rounded h-100" alt="pict">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <a class="link-unstyled underline-link" href="#">

                                            <h5 class="card-title text-dark">Apakah mudik 2022 harus vaksin tiga kali?
                                            </h5>
                                        </a>
                                        <p class="card-text"><small class="text-muted">Last updated 26 days
                                                ago</small>
                                        </p>
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-success">Update</button>
                                            <button class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor

                </div>
                <div class="col-lg-3 mb-3 d-none d-lg-block sticky-right-side">
                    <div class="card p-4">
                        <img src="https://i.pravatar.cc/300" alt="profile" class="img-fluid border rounded-circle">
                        <div class="text-center mt-3">
                            <a href="#" class="h5 m-0 text-dark link-unstyled">Maulana Ahmadi</a>
                            <div>
                                <a href="#" class="h7 text-muted link-unstyled">@aldimaulana</a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="text-center border-end px-2">
                                <p class="m-0"><small class="text-muted fw-bold">Forum</small>
                                </p>
                                <p class="m-0">12</p>
                            </div>
                            <div class="text-center px-2">
                                <p class="m-0"><small class="text-muted fw-bold">Comment</small>
                                </p>
                                <p class="m-0">23</p>
                            </div>
                            <div class="text-center border-start px-2">
                                <p class="m-0"><small class="text-muted fw-bold">Like</small>
                                </p>
                                <p class="m-0">310</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- End of post 2 -->
                {{-- <div class="col-lg-9 mb-3">
                    <div
                        class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
                        <div class="row align-items-center">
                            <div class="col-md-8 mb-3 mb-sm-0">
                                <h5>
                                    <a href="#" class="text-primary">Apa yang normal di jakarta tapi tidak ada di tempat
                                        lain?</a>
                                </h5>
                                <p class="text-sm"><span class="op-6">Posted</span> <a
                                        class="text-black" href="#">45 minutes</a> <span
                                        class="op-6">ago</span></p>
                            </div>
                            <div class="col-md-4 op-7">

                                <div class="justify-content-center align-items-center d-flex flex-column gap-2">
                                    <button class="btn btn-danger w-50">DELETE</button>
                                    <button class="btn btn-success w-50">UPDATE</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
@endsection
