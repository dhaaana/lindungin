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
                    @foreach ($yourforum as $forum)
                        <div class="card mb-3 w-100">
                            <div class="row g-0">
                                <div class="col-md-4 p-2">
                                    <img src="https://www.howardluksmd.com/wp-content/uploads/2021/10/featured-image-placeholder-728x404.jpg"
                                        class="img-fluid rounded h-100" alt="pict">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <a class="link-unstyled" href="#">
                                            <h5 class="card-title text-dark">{{ $forum->title }}
                                                @if ($forum->isPublished == false)
                                                    <span class="badge bg-secondary">Unpublished</span>
                                                @endif
                                            </h5>
                                        </a>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small>
                                        </p>
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href={{ '/update/forum/' . $forum->id }}>
                                                <button class="btn btn-success">Update</button>
                                            </a>
                                            <a href={{ 'delete/forum/' . $forum->id }}>
                                                <button class="btn btn-danger">Delete</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

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
            </div>
        </div>
    </div>
@endsection
