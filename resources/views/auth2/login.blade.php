@extends('layout.app-local')

@section('content')
    <!-- Hero Section Begin -->
    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="Your E-mail">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id="" aria-describedby="emailHelpId" placeholder="Your Password">
                        @if ($errors->any())
                                <small id="emailHelpId" class="form-text text-danger">These credentials do not match our records.</small>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="site-btn">Login</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!-- Contact Form End -->
@endsection
