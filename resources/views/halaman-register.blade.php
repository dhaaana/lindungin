@extends('layout.navigation')
@section('title', 'Register')

@section('content')
    <div class='container-fluid w-100' style="height: 91vh">
        <div class="row h-100">
            <div class="col-lg-5">
                <div class="container p-sm-5 h-100">
                    <div class="row d-flex align-items-center justify-content-center h-100 p-sm-4">
                        <form method="post" action="/register" class="needs-validation" novalidate>
                            @csrf
                            <h4 class="fw-bold">Join Lindung.in Forum</h4>
                            <p class="text-muted py-2">Get more features and priviliges by joining to the most helpful forum
                            </p>
                            <!-- Username input -->
                            <div class="form-floating mb-3">
                                <input type="text" name="username" value="{{ old('username') }}" required
                                    class="form-control" id="floatingInput">
                                <label for="floatingInput">Username</label>
                                @error('username')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Fullname input -->
                            <div class="form-floating mb-3">
                                <input type="text" name="name" value="{{ old('name') }}" required class="form-control"
                                    id="floatingInput">
                                <label for="floatingInput">Fullname</label>
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email input -->
                            <div class="form-floating mb-3">
                                <input type="email" name="email" value="{{ old('email') }}" required class="form-control"
                                    id="floatingInput">
                                <label for="floatingInput">Email</label>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password input -->
                            <div class="form-floating mb-3">
                                <input type="password" name="password" required class="form-control" id="floatingInput"
                                    placeholder="">
                                <label for="floatingInput">Password</label>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Repeat Password input -->
                            <div class="form-floating mb-3">
                                <input type="password" name="repeatPassword" required class="form-control"
                                    id="floatingInput" placeholder="">
                                <label for="floatingInput">Repeat Password</label>
                                @error('repeatPassword')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-center">
                                <!-- Submit button -->
                                <button type="submit" class="btn-blue w-100">Sign Up</button>
                            </div>
                            <br>
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                Forgot password?<a class="link-unstyled underline-link text-primary fw-bold ms-1" href="#">
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
