@extends('backend.layouts.app')
@section('content')
<div class="row justify-content-center align-items-center authentication authentication-basic h-100">
    <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
        <div class="card custom-card my-5">
            <div class="card-body p-5">
                <p class="h5 fw-semibold mb-2 text-center">Sign Up</p>
                <p class="mb-4 text-muted op-7 fw-normal text-center">Welcome To Pathshala !</p>
                <div class="row gy-3">
                    <div class="col-xl-12">
                        <label class="form-label text-default">User Name</label>
                        <input type="text" class="form-control form-control-lg" placeholder="User name">
                    </div>
                    <div class="col-xl-12">
                        <label class="form-label text-default">Phone</label>
                        <input type="number" class="form-control form-control-lg" placeholder="+880">
                    </div>
                    <div class="col-xl-12">
                        <label for="signin-username" class="form-label text-default">User Email</label>
                        <input type="email" class="form-control form-control-lg" id="signin-username" placeholder="Entire Email">
                    </div>
                    <div class="col-xl-12 mb-2">
                        <label for="signin-password" class="form-label text-default d-block">Password<a href="reset-password-basic.html" class="float-end text-danger"></a></label>
                        <div class="input-group">
                            <input type="password" class="form-control form-control-lg" id="signin-password" placeholder="password">
                            <button class="btn btn-light" type="button" onclick="createpassword('signin-password',this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                        </div>
                        <div class="mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label text-muted fw-normal" for="defaultCheck1">
                                    Remember password ?
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 d-grid mt-2">
                        <a href="index.html" class="btn btn-lg btn-primary">Sign Up</a>
                    </div>
                </div>
                <div class="text-center">
                    <p class="fs-12 text-muted mt-3">Already have an account? <a href="{{ route('dashboard.login') }}" class="text-primary">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection