<!--=====================================
                    MOBILE-NAV PART START
        =======================================-->
        <nav class="mobile-nav">
            <div class="container">
                <div class="mobile-group">
                    <a href="{{ route('home.index') }}" class="mobile-widget">
                        <i class="fas fa-home"></i>
                        <span>home</span>
                    </a>
                    <a href="user-form.html" class="mobile-widget">
                        <i class="fas fa-user"></i>
                        <span>join me</span>
                    </a>
                    <a href="{{ route('dashboard.ad.create') }}" class="mobile-widget plus-btn">
                        <i class="fas fa-plus"></i>
                        <span>Ad Post</span>
                    </a>
                    <a href="notification.html" class="mobile-widget">
                        <i class="fas fa-bell"></i>
                        <span>notify</span>
                        <sup>0</sup>
                    </a>
                    <a href="{{ route('dashboard.message',1) }}" class="mobile-widget">
                        <i class="fas fa-envelope"></i>
                        <span>message</span>
                        <sup>0</sup>
                    </a>
                </div>
            </div>
        </nav>
        <!--=====================================
                    MOBILE-NAV PART END
        =======================================-->


        <!--=====================================
                  SINGLE BANNER PART START
        =======================================-->
        <section class="single-banner dashboard-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content">
                            <h2>profile</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                  SINGLE BANNER PART END
        =======================================-->


        <!--=====================================
                DASHBOARD HEADER PART START
        =======================================-->
        <section class="dash-header-part">
            <div class="container">
                <div class="dash-header-card">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="dash-header-left">
                                <div class="dash-avatar">
                                    <a href="#"><img src="{{asset('assets/endUser')}}/images/avatar/01.jpg" alt="avatar"></a>
                                </div>
                                <div class="dash-intro">
                                    <h4><a href="#">{{ Auth::user()->fname . '  ' .  Auth::user()->lname }}</a></h4>
                                    <h5>new seller</h5>
                                    <ul class="dash-meta">
                                        <li>
                                            <i class="fas fa-phone-alt"></i>
                                            <span>{{ $profile->phone }}</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-envelope"></i>
                                            <span>{{ Auth::user()->email }}</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span>{{ $profile->country . ' ,' . $profile->city . ' ,' . $profile->state }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="dash-header-right">
                                <div class="dash-focus dash-list">
                                    {{-- <h2>{{ $ads }}</h2> --}}
                                    <p>listing ads</p>
                                </div>
                               <div class="dash-focus dash-book">
                                    <h2>2433</h2>
                                    <p>total follower</p>
                                </div>
                            <div class="dash-focus dash-rev">
                                    <h2>2433</h2>
                                    <p>total review</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dash-header-alert alert fade show">
                                <p>From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and Edit your password and account details.</p>
                                <button data-dismiss="alert"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dash-menu-list">
                                <ul>
                                    <li><a href="{{ route('dashboard.home') }}">dashboard</a></li>
                                    <li><a class="active" href="{{ route('dashboard.profile') }}">Profile</a></li>
                                    <li><a href="{{ route('dashboard.ad.create') }}">Ad Post</a></li>
                                    <li><a href="{{ route('dashboard.product.create') }}">Product Post</a></li>
                                    <li><a href="{{ route('dashboard.myAds') }}">My Ads</a></li>
                                    <li><a href="{{ route('dashboard.settings') }}">settings</a></li>
                                    <li><a href="{{ route('dashboard.bookmark') }}">bookmarks</a></li>
                                    <li><a href="{{ route('dashboard.message',1) }}">message</a></li>
                                    <li><a href="notification.html">notification</a></li>
                                    <li><a href="user-form.html">logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                DASHBOARD HEADER PART END
        =======================================-->
