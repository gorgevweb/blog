@extends('layouts.header-footer')
@section('content')
    <div class="inner-page-header">
        <div class="banner">
            <img src="{{asset('images/banner/3.jpg')}}" alt="Banner">
        </div>
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-page-title">
                            <h1>Account</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Page Header serction end here -->

    <!-- Blog Page Start Here -->
    <div class="account-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="border register">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <h3>Register</h3>
                                    <div class="form-group">
                                        <label>Username *</label>
                                        <input class="form-control" required="" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Email address *</label>
                                        <input class="form-control" required="" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Password *</label>
                                        <input class="form-control" required="" type="password">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input class="form-control" required="" type="password">
                                    </div>
                                    <div class="form-group btn-register">
                                        <button class="btn-send" type="submit">Register</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area Section Start Here -->
@endsection
