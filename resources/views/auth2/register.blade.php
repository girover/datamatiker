@extends('layout.app-local')

@section('content')
    <!-- Hero Section Begin -->
    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Register</h2>
                    </div>
                </div>
            </div>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" id="" aria-describedby="name" placeholder="Your Name">
                        @if ($errors->has('name'))
                                <small id="name" class="form-text text-danger">{{$errors->first('name')}}</small>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" id="" aria-describedby="email" placeholder="Your E-mail">
                        @if ($errors->has('email'))
                                <small id="email" class="form-text text-danger">{{$errors->first('email')}}</small>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id="" aria-describedby="password" placeholder="Your Password">
                        @if ($errors->has('password'))
                                <small id="password" class="form-text text-danger">{{$errors->first('password')}}</small>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <label for="">Password Confirm</label>
                        <input type="password" class="form-control" name="password_confirmation" id="" aria-describedby="passwordc" placeholder="Your Password">
                        @if ($errors->has('password_confirmation'))
                                <small id="passwordc" class="form-text text-danger">{{$errors->first('password_confirmation')}}</small>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="site-btn">Register</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!-- Contact Form End -->
@endsection
