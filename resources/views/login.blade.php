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
                            <h1>Login</h1>
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
                    <div class="border">
                        <form>
                            <fieldset>
                                <div class="row">
                                    <h3>Login</h3>
                                    <div class="form-group">
                                        <label>Username or email address *</label>
                                        <input class="form-control" required="" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Password *</label>
                                        <input class="form-control" required="" type="pass">
                                    </div>
                                    <div class="form-group btn-register">
                                        <span class="lost-pass">Lost your password?</span>
                                        <button class="btn-send" type="submit">Login</button>
                                        <span class="checkbox">
                                          <label>
                                            <input type="checkbox" value=""><span class="cr"><i class="fa cr-icon fa-check" aria-hidden="true"></i></span>Remember Me
                                          </label>
                                        </span>
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
