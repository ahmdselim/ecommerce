@extends("layouts")
@section('title', 'Page Title')

@section("headLinks")

<!-- FOR USER FORM PAGE STYLE -->
<link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/custom/user-form.css">

@endsection

@section("content")

  <!--=====================================
                    USER-FORM PART START
        =======================================-->
        <section class="user-form-part">
            <div class="user-form-banner">
                <div class="user-form-content">
                    <a href="#"><img src="{{asset('assets/endUser')}}/images/logo.png" alt="logo"></a>
                    <h1>Advertise your assets <span>Buy what are you needs.</span></h1>
                    <p>Biggest Online Advertising Marketplace in the World.</p>
                </div>
            </div>

            <div class="user-form-category">
                <div class="user-form-header">
                    <a href="#"><img src="{{asset('assets/endUser')}}/images/logo.png" alt="logo"></a>
                    <a href="#"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="user-form-category-btn">
                    <ul class="nav nav-tabs">
                        <li><a href="#login-tab" class="nav-link active" data-toggle="tab">sign in</a></li>
                        <li><a href="#register-tab" class="nav-link" data-toggle="tab">sign up</a></li>
                    </ul>
                </div>

                <div class="tab-pane active" id="login-tab">
                    <div class="user-form-title">
                        <h2>Welcome!</h2>
                        <p>Use credentials to access your account.</p>
                    </div>
                    @if(session()->has('invalid'))
                        <div class="alert alert-danger">
                            {{ session()->get('invalid') }}
                        </div>
                    @endif
                    <form action="{{ route('auth.login') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" id="pass" placeholder="Password">
                                    <button type="button" class="form-icon"><i class="eye fas fa-eye"></i></button>
                                    <small class="form-alert">Password must be 6 characters</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="signin-check">
                                        <label class="custom-control-label" for="signin-check">Remember me</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group text-left">
                                    <a href="#" class="form-forgot">Forgot password?</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-inline">
                                        <i class="fas fa-unlock"></i>
                                        <span>Enter your account</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="user-form-direction">
                        <p>Don't have an account? click on the <span>( sign up )</span> button above.</p>
                    </div>
                </div>

                <div class="tab-pane" id="register-tab">
                    <div class="user-form-title">
                        <h2>Register</h2>
                        <p>Setup a new account in a minute.</p>
                    </div>

                    <form method="post" action="{{ route('auth.signup') }}">

                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach


                        @csrf
                        @method('post')
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <button class="form-icon"><i class="eye fas fa-eye"></i></button>
                                    <small class="form-alert">Password must be 6 characters</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Repeat Password">
                                    <button class="form-icon"><i class="eye fas fa-eye"></i></button>
                                    <small class="form-alert">Password must be 6 characters</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="signup-check">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-inline">
                                        <i class="fas fa-user-check"></i>
                                        <span>Create new account</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="user-form-direction">
                        <p>Already have an account? click on the <span>( sign in )</span> button above.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    USER-FORM PART END
        =======================================-->

@endsection
