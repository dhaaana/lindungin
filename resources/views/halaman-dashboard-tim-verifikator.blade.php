@extends('layout.navigation')
@section('title', 'Dashboard Tim Verifikator')

@section('content')
    @include('partials.sidebar')
    <div class='p-sm-3 w-100'>
        <div class="container">
            <div class="row mt-3">
                <div class="col-lg-9 ">
                    @if ($message = Session::get('deletesuccess'))
                        <div class="px-1">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @endif
                    @if ($message = Session::get('passsuccess'))
                        <div class="">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @endif
                    <div class="card p-4 m-0">
                        <h4 class="fw-bold text-center mb-4">Forum Verification</h4>
                        <table class="table">
                            <tr>
                                <th>Forum Title</th>
                                <th>Verification Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($allforum as $forum)
                                <div class="modal fade" id={{ 'exampleModal' . $forum->id }} tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Verify Forum</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action={{ '/verify/forum/' . $forum->id }} method='post'>
                                                @csrf
                                                <div class="modal-body">
                                                    <label class="text-muted h7 mb-2">Title:</label>
                                                    <input type="text" class="form-control mb-2" readonly
                                                        value="{{ $forum->title }}">
                                                    <label for="verification_status" class="text-muted h7 mb-2">Verification
                                                        Status:</label>
                                                    <select class="form-select" name="verification_status"
                                                        id="verification_status">
                                                        <option value="Not Verified">Not Verified</option>
                                                        <option value="Hoax">Hoax</option>
                                                        <option value="Misinformation">Misinformation</option>
                                                        <option value="Facts">Facts</option>
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-success">Verify</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <tr>
                                    <td>{{ $forum->title }}</td>
                                    <td>{{ $forum->verification_status }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href={{ '/forum/' . $forum->slug }}>View
                                            Forum</a>

                                        <button class="btn btn-success btn-sm" data-bs-toggle="modal"
                                            data-bs-target={{ '#exampleModal' . $forum->id }}>Verify</button>

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                    <div class="card p-4 mt-4">
                        <h4 class="fw-bold text-center mb-4">Forum Report</h4>
                        <table class="table">
                            <tr>
                                <th>Forum Title</th>
                                <th>Report Count</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($reportedforum as $forum)
                                <div class="modal fade" id={{ 'deleteModal' . $forum->id }} tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Forum</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action={{ '/report/delete/forum/' . $forum->id }} method='get'>
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
                                <tr>
                                    <td>{{ $forum->title }}</td>
                                    <td>{{ $forum->report }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href={{ '/forum/' . $forum->slug }}>View
                                            Forum</a>

                                        <a class="btn btn-success btn-sm"
                                            href={{ '/report/pass/forum/' . $forum->id }}>Pass</a>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target={{ '#deleteModal' . $forum->id }}>Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
                <div class="col-lg-3">
                    @include('partials.rightbar')
                </div>
            </div>
        </div>
    </div>
@endsection
