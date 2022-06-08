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
                            <a href="#" class="h5 m-0 text-dark link-unstyled">{{ auth()->user()->name }}</a>
                            <div>
                                <a href="#" class="h7 text-muted link-unstyled">{{ '@' . auth()->user()->username }}</a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="text-center border-end px-2">
                                <p class="m-0"><small class="text-muted fw-bold">Forum</small>
                                </p>
                                <p class="m-0">{{ $yourforum->count() }}</p>
                            </div>
                            <div class="text-center px-2">
                                <p class="m-0"><small class="text-muted fw-bold">Comment</small>
                                </p>
                                <p class="m-0">{{ $yourcommentcount }}</p>
                            </div>
                            <div class="text-center border-start px-2">
                                <p class="m-0"><small class="text-muted fw-bold">Like</small>
                                </p>
                                <p class="m-0">{{ $yourlikecount }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    @foreach ($yourforum as $forum)
                        <div class="modal fade" id={{ 'exampleModal' . $forum->id }} tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Forum</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action={{ 'delete/forum/' . $forum->id }} method='get'>
                                        @csrf
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete "{{ $forum->title }}"</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn-gray"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
                                            <button class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target={{ '#exampleModal' . $forum->id }}>Delete</button>
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
                            <a href="#" class="h5 m-0 text-dark link-unstyled">{{ auth()->user()->name }}</a>
                            <div>
                                <a href="#" class="h7 text-muted link-unstyled">{{ '@' . auth()->user()->username }}</a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="text-center border-end px-2">
                                <p class="m-0"><small class="text-muted fw-bold">Forum</small>
                                </p>
                                <p class="m-0">{{ $yourforum->count() }}</p>
                            </div>
                            <div class="text-center px-2">
                                <p class="m-0"><small class="text-muted fw-bold">Comment</small>
                                </p>
                                <p class="m-0">{{ $yourcommentcount }}</p>
                            </div>
                            <div class="text-center border-start px-2">
                                <p class="m-0"><small class="text-muted fw-bold">Like</small>
                                </p>
                                <p class="m-0">{{ $yourlikecount }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
