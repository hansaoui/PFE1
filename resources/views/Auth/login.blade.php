@extends('Layouts.guest')

@section('title', 'Login')


@section('content')
<style>
    body {
        margin-top: 20px;
        background: #f6f9fc;
    }

    .account-block {
        padding: 0;
        background-image: url(https://bootdey.com/img/Content/bg1.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
        position: relative;
    }

    .account-block .overlay {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .account-block .account-testimonial {
        text-align: center;
        color: #fff;
        position: absolute;
        margin: 0 auto;
        padding: 0 1.75rem;
        bottom: 3rem;
        left: 0;
        right: 0;
    }

    .text-theme {
        color: #5369f8 !important;
    }

    .btn-theme {
        background-color: #5369f8;
        border-color: #5369f8;
        color: #fff;
    }
</style>
<div id="main-wrapper" class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="mb-5">
                                    <h3 class="h4 font-weight-bold text-theme">Login</h3>
                                </div>

                                <h6 class="h5 mb-0">Welcome</h6>
                                <p class="text-muted mt-2 mb-5">Enter your email address and password to access admin
                                    panel.</p>

                                <form action="{{ route('login.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address
                                        </label>
                                        <span style="color: red;">@error('email') {{ $message }} @enderror</span>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="exampleInputPassword1">Password</label>
                                        <span style="color: red;">@error('password') {{ $message }} @enderror</span>
                                        <input type="password" name="password" class="form-control"
                                            value="{{ old('email') }}">
                                    </div>
                                    <button type="submit" class="btn btn-theme">Login</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 d-none d-lg-inline-block">
                            <div class="account-block rounded-right">
                                <div class="overlay rounded-right"></div>
                                <div class="account-testimonial">
                                    <h4 class="text-white mb-4">Badlo had text stare 90</h4>
                                    <p class="lead text-white">Stare 91 ✅</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->

            <!-- end row -->

        </div>
        <!-- end col -->
    </div>
    <!-- Row -->
</div>
@endsection