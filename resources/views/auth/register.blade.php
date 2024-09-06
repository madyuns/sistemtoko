@extends('layouts.app')
<style>
        body, html {
            height: 100%;
            margin: 0;
        }
        .bg {
            /* Full height */
            height: 100%; 
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
@section('content')
<section class="bg mt-auto" style="background-image: url('{{ asset('images/shop.jpg') }}');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="form-container">
                    <h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
                    <form method="POST" class="needs-validation formlogin" novalidate="" autocomplete="off" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="name">Name</label>
                            <input id="name" type="name" class="form-control" name="name" value="" required autofocus>
                            <div class="invalid-feedback">
                                Name is invalid
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                            <div class="invalid-feedback">
                                Email is invalid
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="mb-2 w-100">
                                <label class="text-muted" for="password">Password</label>
                                <a href="forgot.html" class="float-end">Forgot Password?</a>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" required>
                            <div class="invalid-feedback">
                                Password is required
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="form-check">
                                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                <label for="remember" class="form-check-label">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary ml-2 ms-auto">Register</button>
                        </div>
                    </form>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            Don't have an account? <a href="register.html" class="text-dark">Create One</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5 text-muted">
                    Copyright &copy; 2017-2021 &mdash; Your Company 
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
