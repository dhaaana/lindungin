@extends('layout.navigation')
@section('title', 'Halaman Utama')

@section('content')
    @include('partials.sidebar')
    <div class='p-sm-3 w-100'>
        <div class="container">
            <div class="row mt-3">
                <div class="col-lg-9">
                    @if (isset($filter))
                        <div class="d-flex mb-3 gap-2 align-items-center">
                            <a href="/filter/new" class="link-unstyled">
                                <button
                                    class="@if ($filter == 'new') btn-orange
                                @else
                                btn-gray @endif text-xs p-1 px-2 rounded-pill">New</button>
                            </a>
                            <a href="/filter/hot" class="link-unstyled">
                                <button
                                    class="@if ($filter == 'hot') btn-orange
                            @else
                            btn-gray @endif text-xs p-1 px-2 rounded-pill">Hot</button>
                            </a>
                            <a href="/filter/verified" class="link-unstyled">
                                <button
                                    class="@if ($filter == 'verified') btn-orange
                        @else
                        btn-gray @endif text-xs p-1 px-2 rounded-pill">Verified</button>
                            </a>
                            <a href="/filter/hoax" class="link-unstyled">
                                <button
                                    class="@if ($filter == 'hoax') btn-orange
                        @else
                        btn-gray @endif text-xs p-1 px-2 rounded-pill">Hoax</button>
                            </a>
                            <a href="/filter/misinformation" class="link-unstyled">
                                <button
                                    class="@if ($filter == 'misinformation') btn-orange
                        @else
                        btn-gray @endif text-xs p-1 px-2 rounded-pill">Misinformation</button>
                            </a>
                            <a href="/filter/facts" class="link-unstyled">
                                <button
                                    class="@if ($filter == 'facts') btn-orange
                        @else
                        btn-gray @endif text-xs p-1 px-2 rounded-pill">Facts</button>
                            </a>

                        </div>
                    @else
                        <div class="d-flex mb-3 gap-2 align-items-center">
                            <a href="/filter/new" class="link-unstyled">
                                <button class="btn-gray text-xs p-1 px-2 rounded-pill">New</button>
                            </a>
                            <a href="/filter/hot" class="link-unstyled">
                                <button class="btn-gray text-xs p-1 px-2 rounded-pill">Hot</button>
                            </a>
                            <a href="/filter/verified" class="link-unstyled">
                                <button class="btn-gray text-xs p-1 px-2 rounded-pill">Verified</button>
                            </a>
                            <a href="/filter/hoax" class="link-unstyled">
                                <button class="btn-gray text-xs p-1 px-2 rounded-pill">Hoax</button>
                            </a>
                            <a href="/filter/misinformation" class="link-unstyled">
                                <button class="btn-gray text-xs p-1 px-2 rounded-pill">Misinformation</button>
                            </a>
                            <a href="/filter/facts" class="link-unstyled">
                                <button class="btn-gray text-xs p-1 px-2 rounded-pill">Facts</button>
                            </a>
                        </div>
                    @endif

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    @foreach ($allforum as $forum)
                        <div class="modal fade" id={{ 'reportModal' . $forum->id }} tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Report a forum</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action={{ '/report/forum/' . $forum->id }} method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-check">
                                                <input class="form-check-input" name="reports[]" type="checkbox"
                                                    value="It's suspicious or spam" id="spam">
                                                <label class="form-check-label" for="spam">
                                                    It's suspicious or spam
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" name="reports[]" type="checkbox"
                                                    value="It's abusive or harmful" id="abusive">
                                                <label class="form-check-label" for="abusive">
                                                    It's abusive or harmful
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" name="reports[]" type="checkbox"
                                                    value="Doesn't answer the question that was asked" id="notasnwer">
                                                <label class="form-check-label" for="notasnwer">
                                                    Doesn't answer the question that was asked
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" name="reports[]" type="checkbox"
                                                    value="It's plagiarism" id="plagiarism">
                                                <label class="form-check-label" for="plagiarism">
                                                    It's plagiarism
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" name="reports[]" type="checkbox"
                                                    value="Substantially incorrect and/or incorrect primary information"
                                                    id="incorrect">
                                                <label class="form-check-label" for="incorrect">
                                                    Substantially incorrect and/or incorrect primary information
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" name="reports[]" type="checkbox"
                                                    value="Sexually explicit, pornographic or otherwise inappropriate"
                                                    id="explicit">
                                                <label class="form-check-label" for="explicit">
                                                    Sexually explicit, pornographic or otherwise inappropriate
                                                </label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-gray"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-danger">Report</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card p-4 mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-wrap align-items-center gap-3">
                                    <div>
                                        <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                    </div>
                                    <div>
                                        <a href="#" class="h5 m-0 link-unstyled text-dark">{{ $forum->user->name }}</a>
                                        <div>
                                            <a href="#"
                                                class="h7 text-muted link-unstyled">{{ '@' . $forum->user->username }}</a>
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
                                        <li><button class="dropdown-item"
                                                onclick="navigator.clipboard.writeText(`${window.location.href}forum/{{ $forum->slug }}`)">Share</button>
                                        </li>
                                        <li><button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target={{ '#reportModal' . $forum->id }}>
                                                Report
                                            </button></li>
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
                                @isset($allstatus)
                                    <div class="d-flex align-items-center gap-3">
                                        @if (!$allstatus->where('forum_id', $forum->id)->where('user_id', auth()->user()->id)->where('type', 'like')->isEmpty())
                                            {{-- tombol like kalau sudah pernah like --}}
                                            <form action={{ '/unlike/forum/' . $forum->id }} method="post"
                                                class="d-flex align-items-center gap-sm-2">
                                                @csrf
                                                <button type="submit" class="fa fa-thumbs-o-up post-icons-disabled"></button>
                                                <p class="m-0 text-muted">{{ $forum->like }}</p>
                                            </form>
                                        @else
                                            {{-- tombol like kalau belum pernah like --}}
                                            <form action={{ '/like/forum/' . $forum->id }} method="post"
                                                class="d-flex align-items-center gap-sm-2">
                                                @csrf
                                                <button type="submit" class="fa fa-thumbs-o-up post-icons"></button>
                                                <p class="m-0 text-muted">{{ $forum->like }}</p>
                                            </form>
                                        @endif

                                        {{-- tombol dislike --}}
                                        @if (!$allstatus->where('forum_id', $forum->id)->where('user_id', auth()->user()->id)->where('type', 'dislike')->isEmpty())
                                            {{-- tombol dislike kalau sudah pernah dislike --}}
                                            <form action={{ '/undislike/forum/' . $forum->id }} method="post"
                                                class="d-flex align-items-center gap-sm-2">
                                                @csrf
                                                <button type="submit" class="fa fa-thumbs-o-down post-icons-disabled"></button>
                                                <p class="m-0 text-muted">{{ $forum->dislike }}</p>
                                            </form>
                                        @else
                                            {{-- tombol dislike kalau belum pernah dislike --}}
                                            <form action={{ '/dislike/forum/' . $forum->id }} method="post"
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
                                @else
                                    <div class="d-flex align-items-center gap-sm-3">
                                        <a href="/login" class="d-flex align-items-center gap-sm-2 link-unstyled">
                                            <button type="submit" class="fa fa-thumbs-o-up post-icons"></button>
                                            <p class="m-0 text-muted">{{ $forum->like }}</p>

                                        </a>
                                        <a href="/login" class="d-flex align-items-center gap-sm-2 link-unstyled">
                                            <button type="submit" class="fa fa-thumbs-o-down post-icons"></button>
                                            <p class="m-0 text-muted">{{ $forum->dislike }}</p>

                                        </a>
                                        <a href={{ '/forum/' . $forum->slug . '#comment' }}
                                            class="d-flex align-items-center gap-sm-2 link-unstyled">
                                            <button class="fa fa-comment-o post-icons"></button>
                                            <p class="m-0 text-muted">{{ $forum->comments->count() }}</p>
                                        </a>
                                    </div>
                                @endisset

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
