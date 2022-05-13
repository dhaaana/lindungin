@extends('layout.navigation')
@section('title', 'Login')

@section('content')
    <div class="row w-100">
        <div class="col-sm-6">
            <div class="" style="padding: 6rem">
                <div class="container py-5 h-100">
                    <div class="row d-flex align-items-center justify-content-center h-100">
                        <div>
                            <form class="needs-validation" novalidate>
                                <p><b>We've Missed You!</b></p>
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form1Example13">Username</label>
                                    <input type="email" required id="form1Example13" class="form-control form-control-lg" />
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide a valid username!
                                    </div>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form1Example23">Password</label>
                                    <input type="password" required id="form1Example23"
                                        class="form-control form-control-lg" />
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide a valid password!
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <!-- Submit button -->
                                    <button type="submit" class="btn-blue w-100">Sign in</button>
                                </div>
                                <br>
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    Forgot password?<a href="#!"> Press Here</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <img src="https://miro.medium.com/max/1400/1*JrHDbEdqGsVfnBYtxOitcw.jpeg" alt="Login image"
                class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
    </div>
    <script>
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
@endsection
