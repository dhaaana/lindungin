@extends('layout.navigation')
@section('title', 'Contoh')

@section('content')
    @include('partials.sidebar')
    <div class='container p-3 w-100'>
        <div class="row">
            <div class="col-9 border py-2">
                <!--- \\\\\\\Post Forum-->
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">Hana Kamila</div>
                                    <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>12 November 2022 19:25
                                    </div>
                                    <!--<div class="h7 text-muted">Miracles Lee Cross</div>-->
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
                        <!--<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>-->
                        <h5 class="card-title"><b>Lorem ipsum dolor sit amet, consectetur adip.</b></h5>

                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa
                            praesentium esse magnam nemo dolor
                            sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-thumbs-o-up"></i> Like</a>
                        <a href="#" class="card-link"><i class="fa  fa-thumbs-o-down"></i> Dislike</a>
                        <a href="#" class="card-link"><i class="fa fa-comment-o"></i> Comment</a>
                        {{-- <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Report</a> --}}
                        <!-- Button trigger modal -->
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <a href="#" class="card-link"><i class="fa fa-warning"></i> Report</a>
                        </button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Report a forum</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                It's suspicious or spam
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                                checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                It's abusive or harmful
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Doesn't answer the question that was asked
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                It's plagiarism
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Substantially incorrect and/or incorrect primary information
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Sexually explicit, pornographic or otherwise inappropriate
                                            </label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-danger">Report</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post /////-->
            </div>
            <div class="col-3 border py-2">

            </div>
        </div>

        <div class="row">
        Add a comment
        </div>
    </div>
@endsection
