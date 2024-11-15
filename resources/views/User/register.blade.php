@extends('layouts.user')

{{-- Pembuka Head --}}
@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<style>
    .btn-outline-white {
        color: white;
        border: transparent;
    }

    .btn-purple {
        background-color: #6a70fc;
        width: 100%;
        color: white;
    }

    .form-check {
        margin-top: -10px;
    }
</style>
@endsection

{{-- Asset itu mendefinisikan folder public --}}
@section('title', 'Register - E-report Hub')
{{-- Penutup Head --}}

{{-- Pembuka Body --}}
@section('content')
<section class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">
                    <h4 class="semi-bold mb-0 text-white">REHUB</h4>
                    <p class="italic mt-0 text-white">E-Report Hub</p>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav text-center ml-auto">
                        <li class="navbar-item">
                            <a href="{{ route('ereporthub.index') }}" class=" btn btn-outline-white m-3 ">Login</a>
                        </li>

                        <li class="navbar-item">
                            <a href="{{ route('ereporthub.formRegister') }}" class=" btn btn-outline-white m-3 ">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="text-center">
        <h2 class=" text-white mt-3">Report Services</h2>
        <p class="italic text-white mb-5">Tell Us About Your Report</p>
    </div>

    <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div>
    <div class="wave wave4"></div>
</section>
<!-- Card Register -->
<section class="h-full mt-md-4">
    <div class="mask d-flex align-items-center h-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Create New account</h2>

                            <form action="#" autocomplete="off" method="post">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="nik">NIK</label>
                                    <input type="number" id="nik" class="form-control form-control-lg" placeholder="Your NIK" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="nama"> Nama</label>
                                    <input type="text" id="nama" class="form-control form-control-lg" placeholder="Full name" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="username"> Username</label>
                                    <input type="text" id="username" class="form-control form-control-lg" placeholder="Username" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="telp"> No Telp</label>
                                    <input type="text" id="telp" class="form-control form-control-lg" placeholder="Phone Number" />
                                </div>

                                <div class="form-outline mb-3">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Enter your password" />
                                </div>

                                <div class="form-check mb-4" style="margin-top: -10px;">
                                    <input class="form-check-input" type="checkbox" id="showPasswordCheckbox" onclick="togglePasswordVisibility()" />
                                    <label class="form-check-label" for="showPasswordCheckbox">
                                        Show password
                                    </label>
                                </div>




                                <div class="form-check d-flex justify-content-start mb-3">
                                    <input class="form-check-input mt-2" name="policy" type="checkbox" value="" />
                                    <label class="form-check-label" for="policy">
                                        I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                    </label>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-purple text-white">Register</button>
                                </div>
                                @if (Session::has('pesan'))
                                <div class="alert alert-danger mt-2">
                                    {{ Session::get('pesan') }}
                                </div>
                                @endif
                                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/"
                                        class="fw-bold text-body"><u>Login here</u></a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Footer --}}
<div class="mt-5">
    <hr>
    <div class="text-center">
        <p class="italic text-secondary">© 2024 Iq Adiatma • All rights reserved</p>
    </div>
</div>
@endsection
@section('js')
<script>
    function togglePasswordVisibility() {
        var passwordField = document.getElementById("password");
        var showPasswordCheckbox = document.getElementById("showPasswordCheckbox");

        if (showPasswordCheckbox.checked) {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>


@endsection