@extends('layout.navigation')
@section('title', 'Login')

@section('content')
    <div class='container-fluid w-100' style="height: 91vh">
        <div class="row h-100">
            <div class="col-lg-5">
                <div class="container p-sm-5 h-100">
                    <div class="row d-flex align-items-center justify-content-center h-100 p-sm-4">
                        <form method="POST" action="{{ route('password.update') }}" class="needs-validation" novalidate>
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <h4 class="fw-bold">Forgot Your Password?</h4>
                            <p class="text-muted py-2">Enter your new password here! </p>
                            <!-- Username input -->
                            <div class="form-floating mb-3">
                                <input type="password" required class="form-control" id="floatingInput">
                                <label for="floatingInput">New Password</label>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-center">
                                <!-- Submit button -->
                                <button type="submit" class="btn-blue w-100">Reset Password</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block p-0">

                <img src="https://miro.medium.com/max/1400/1*JrHDbEdqGsVfnBYtxOitcw.jpeg"
                    style="width:100%; height:100%; object-fit:cover" alt="laptop">

            </div>
        </div>
    </div>

@endsection
