@extends('layout.navigation')
@section('title', 'Login')

@section('content')
    <div class='container-fluid w-100' style="height: 91vh">
        <div class="row h-100">
            <div class="col-lg-5">
                <div class="container p-sm-5 h-100">
                    <div class="row d-flex align-items-center justify-content-center h-100 p-sm-4">
                        <form action="{{route('login')}}" method="post" class="needs-validation" novalidate>
                            @csrf
                            <h4 class="fw-bold">We've Missed You!</h4>
                            <p class="text-muted py-2">More than 100+ forums are waiting for your wise comments!</p>
                            <!-- Email input -->
                            <div class="form-floating mb-3">
                                <input type="text" name="email" required class="form-control" id="floatingInput" placeholder="dhana">
                                <label for="floatingInput">Email</label>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password input -->
                            <div class="form-floating mb-3">
                                <input type="password" name="password" required class="form-control" id="floatingInput"
                                    placeholder="dhana">
                                <label for="floatingInput">Password</label>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-center">
                                <!-- Submit button -->
                                <button type="submit" class="btn-blue w-100">Login</button>
                            </div>
                            <br>
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                Forgot password?<a class="link-unstyled underline-link text-primary fw-bold ms-1" href="/forgot-password">
                                    Press
                                    Here</a>
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
