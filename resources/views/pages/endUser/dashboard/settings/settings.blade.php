@extends("layouts")

@section("title","Settings - Classicads")

@section("headLinks")

<link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/custom/main.css">
<link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/custom/index.css">
<link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/custom/setting.css">

@endsection



@section("content")
@include("includes.endUser.navbar")

<!--=====================================
                    SETTING PART START
        =======================================-->
        <div class="setting-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="account-card alert fade show">
                            <div class="account-title">
                                <h3>Edit Profile</h3>
                                <button data-dismiss="alert">close</button>
                            </div>
                            <form class="setting-form" method="post" action="{{ route('dashboard.profile.update' ,$user->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">First Name</label>
                                            <input type="text" name="fname" class="form-control" placeholder="Mahmudul" value="{{ $user->fname }}">
                                        </div>

                                        @error('fname')
                                                <div class="alert alert-danger mt-1" role="alert">
                                                    <div class="alert-body">
                                                    {{ $message }}
                                                    </div>
                                                </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" name="lname" class="form-control" placeholder="Hasan" value="{{ $user->lname }}">
                                        </div>

                                        @error('lname')
                                                <div class="alert alert-danger mt-1" role="alert">
                                                    <div class="alert-body">
                                                    {{ $message }}
                                                    </div>
                                                </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Company</label>
                                            <input type="text" name="company" class="form-control" placeholder="Classicads Advertising LID." value="{{ $profile->company }}">
                                        </div>

                                        @error('company')
                                                <div class="alert alert-danger mt-1" role="alert">
                                                    <div class="alert-body">
                                                    {{ $message }}
                                                    </div>
                                                </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">City</label>
                                            <input type="text" name="city" class="form-control" placeholder="Narayanganj" value="{{ $profile->city }}">
                                        </div>

                                        @error('city')
                                                <div class="alert alert-danger mt-1" role="alert">
                                                    <div class="alert-body">
                                                    {{ $message }}
                                                    </div>
                                                </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">State</label>
                                            <input type="text" name="state" class="form-control" placeholder="West Jalkuri"  value="{{ $profile->state }}">
                                        </div>

                                        @error('state')
                                                <div class="alert alert-danger mt-1" role="alert">
                                                    <div class="alert-body">
                                                    {{ $message }}
                                                    </div>
                                                </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Zip</label>
                                            <input type="text" name="zip" class="form-control" placeholder="1420"  value="{{ $profile->zip }}">
                                        </div>

                                        @error('zip')
                                            <div class="alert alert-danger mt-1" role="alert">
                                                <div class="alert-body">
                                                {{ $message }}
                                                </div>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Country</label>
                                            <input type="text" name="country" class="form-control" placeholder="Bangladesh"  value="{{ $profile->country }}">
                                        </div>

                                        @error('country')
                                                <div class="alert alert-danger mt-1" role="alert">
                                                    <div class="alert-body">
                                                    {{ $message }}
                                                    </div>
                                                </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Phone</label>
                                            <input type="text" name="phone" class="form-control" placeholder="+8801838288389"  value="{{ $profile->phone }}">
                                        </div>

                                        @error('phone')
                                                <div class="alert alert-danger mt-1" role="alert">
                                                    <div class="alert-body">
                                                    {{ $message }}
                                                    </div>
                                                </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Birthday</label>
                                            <input type="date" name="dateOfBirth" class="form-control" value="{{ $profile->dateOfBirth }}">
                                        </div>

                                        @error('dateOfBirth')
                                                <div class="alert alert-danger mt-1" role="alert">
                                                    <div class="alert-body">
                                                    {{ $message }}
                                                    </div>
                                                </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Profile Image</label>
                                            <input type="file" name="image" class="form-control">
                                            <img style="width: 50px; height:50px; border-radius:25px; margin-top:10px;" src="{{ $profile->image }}" alt="image of {{ $user->fname }}" />
                                        </div>

                                        @error('image')
                                            <div class="alert alert-danger mt-1" role="alert">
                                                <div class="alert-body">
                                                {{ $message }}
                                                </div>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="btn btn-inline">
                                            <i class="fas fa-user-check"></i>
                                            <span>update profile</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================================
                    SETTING PART END
        =======================================-->


@endsection
