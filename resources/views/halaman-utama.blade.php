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
                    @foreach ($allforum as $forum)
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
                                    <a class="link-unstyled underline-link text-dark" href={{ '/forum/' . $forum->slug }}>
                                        <h5 class="fw-bold">{{ $forum->title }}</h5>
                                    </a>
                                    <div>
                                        @if ($forum->verification_status == 'Hoax')
                                            <span class="badge bg-light rounded-pill text-dark"><span
                                                    class="badge bg-danger rounded-pill me-1">X</span>Hoax</span>
                                        @elseif($forum->verification_status == 'Facts')
                                            <span class="badge bg-light rounded-pill text-dark"><span
                                                    class="badge bg-success rounded-pill me-1">V</span>Facts</span>
                                        @elseif($forum->verification_status == 'Misinformation')
                                            <span class="badge bg-light rounded-pill text-dark"><span
                                                    class="badge bg-warning rounded-pill me-1">X</span>Misinformation</span>
                                        @elseif($forum->verification_status == 'Not Verified')
                                            <span class="badge bg-light rounded-pill text-dark">Not Verified</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mw-100">
                                    {!! $forum->body !!}
                                </div>
                            </div>
                            <div
                                class="mt-4 d-flex flex-lg-row flex-column justify-content-between align-items-sm-center border-0">
                                <div class="text-muted h7 m-0"> <i
                                        class="fa fa-clock-o me-1"></i>{{ \Carbon\Carbon::parse($forum->created_at)->format('j F Y') }}
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    @if (!$allstatus->where('forum_id', $forum->id)->where('type', 'like')->isEmpty())
                                        {{-- tombol like kalau sudah pernah like --}}
                                        <form action={{ 'forum/unlike/' . $forum->id }} method="post"
                                            class="d-flex align-items-center gap-sm-2">
                                            @csrf
                                            <button type="submit" class="fa fa-thumbs-o-up post-icons-disabled"></button>
                                            <p class="m-0 text-muted">{{ $forum->like }}</p>
                                        </form>
                                    @else
                                        {{-- tombol like kalau belum pernah like --}}
                                        <form action={{ 'forum/like/' . $forum->id }} method="post"
                                            class="d-flex align-items-center gap-sm-2">
                                            @csrf
                                            <button type="submit" class="fa fa-thumbs-o-up post-icons"></button>
                                            <p class="m-0 text-muted">{{ $forum->like }}</p>
                                        </form>
                                    @endif

                                    {{-- tombol dislike --}}
                                    @if (!$allstatus->where('forum_id', $forum->id)->where('type', 'dislike')->isEmpty())
                                        {{-- tombol dislike kalau sudah pernah dislike --}}
                                        <form action={{ 'forum/undislike/' . $forum->id }} method="post"
                                            class="d-flex align-items-center gap-sm-2">
                                            @csrf
                                            <button type="submit" class="fa fa-thumbs-o-down post-icons-disabled"></button>
                                            <p class="m-0 text-muted">{{ $forum->dislike }}</p>
                                        </form>
                                    @else
                                        {{-- tombol dislike kalau belum pernah dislike --}}
                                        <form action={{ 'forum/dislike/' . $forum->id }} method="post"
                                            class="d-flex align-items-center gap-sm-2">
                                            @csrf
                                            <button type="submit" class="fa fa-thumbs-o-down post-icons"></button>
                                            <p class="m-0 text-muted">{{ $forum->dislike }}</p>
                                        </form>
                                    @endif
                                    <a href={{ '/forum/' . $forum->slug . '#comment' }}
                                        class="d-flex align-items-center gap-2 link-unstyled">
                                        <button class="fa fa-comment-o post-icons"></button>
                                        <p class="m-0 text-muted">{{ $forum->comments->count() }}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-lg-3 mb-3 d-none d-lg-block sticky-right-side">
                    @include('partials.rightbar')
                </div>
            </div>
        </div>

    @endsection
