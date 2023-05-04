@extends("layouts")
@section('title', 'Page Title')

@section("headLinks")
<link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/custom/main.css">
<link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/custom/index.css">
@endsection

@section("content")

  <!--=====================================
                    HEADER PART START
        =======================================-->

        @include("includes.endUser.sidebar")


        <!--=====================================
                    MOBILE-NAV PART START
        =======================================-->
        <nav class="mobile-nav">
            <div class="container">
                <div class="mobile-group">
                    <a href="index.html" class="mobile-widget">
                        <i class="fas fa-home"></i>
                        <span>home</span>
                    </a>
                    <a href="user-form.html" class="mobile-widget">
                        <i class="fas fa-user"></i>
                        <span>join me</span>
                    </a>
                    <a href="ad-post.html" class="mobile-widget plus-btn">
                        <i class="fas fa-plus"></i>
                        <span>Ad Post</span>
                    </a>
                    <a href="notification.html" class="mobile-widget">
                        <i class="fas fa-bell"></i>
                        <span>notify</span>
                        <sup>0</sup>
                    </a>
                    <a href="message.html" class="mobile-widget">
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
                    BANNER PART START
        =======================================-->
        <section class="banner-part">
            <div class="container">
                <div class="banner-content">
                    <h1>You can #Buy, #Rent, #Booking anything from here.</h1>
                    <p>Buy and sell everything from used cars to mobile phones and computers, or search for property, jobs and more in the world.</p>
                    <a href="{{ route('endUser.ads.index') }}" class="btn btn-outline">
                        <i class="fas fa-eye"></i>
                        <span>Show all ads</span>
                    </a>
                </div>
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
        =======================================-->


        <!--=====================================
                    SUGGEST PART START
        =======================================-->
        <section class="suggest-part">
            <div class="container">
                <div class="suggest-slider slider-arrow">

                   @forelse ( $adsOfCategory as $adsCategory )
                    <a href="{{ route('endUser.ads.show',$adsCategory->id) }}" class="suggest-card">
                        <img src="{{ asset('assets/endUser') }}/images/suggest/automobile.png" alt="car">
                        <h6>{{ $adsCategory->name }}</h6>
                        <p>({{ $adsCategory->category->count() }}) category</p>
                    </a>
                   @empty

                   <h4>no category</h4>
                   @endforelse
                </div>
            </div>
        </section>
        <!--=====================================
                    SUGGEST PART END
        =======================================-->


        <!--=====================================
                    FEATURE PART START
        =======================================-->
        <section class="section feature-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-5">
                        <div class="section-side-heading">
                            <h2>Find your needs in our best <span>Featured Ads</span></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero voluptatum repudiandae veniam maxime tenetur fugiat eaque alias nobis doloremque culpa nam.</p>
                            <a href="ad-list-column3.html" class="btn btn-inline">
                                <i class="fas fa-eye"></i>
                                <span>view all featured</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7">
                        <div class="feature-card-slider slider-arrow">
                            @forelse ($randomAds as $ad )
                                <div class="feature-card">
                                    <a href="{{ route('endUser.ads.show',$ad->id) }}" class="feature-img">
                                        {{-- <img src="{{ $ad->image }}" alt="feature"> --}}
                                        <img src="{{ asset('assets/endUser') }}/images/product/10.jpg" alt="feature">
                                    </a>
                                    <div class="cross-inline-badge feature-badge">
                                        <span>{{ $ad->condition }}</span>
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <button type="button" class="feature-wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <div class="feature-content">
                                        <ol class="breadcrumb feature-category">
                                            <li><span class="flat-badge rent">{{ $ad->condition }}</span></li>
                                            <li class="breadcrumb-item"><a href="#">{{ $ad->category->name }}</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">{{ $ad->category->department->name }}</li>
                                        </ol>
                                        <h3 class="feature-title"><a href="{{ route('endUser.ads.show',$ad->id) }}">{{ $ad->description }}</a></h3>
                                        <div class="feature-meta">
                                            <span class="feature-price">$ {{ $ad->price }} <small>/Monthly</small></span>
                                            <span class="feature-time"><i class="fas fa-clock"></i>{{ $ad->created_at }}</span>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <h4>no ads</h4>
                            @endforelse
                        </div>
                        <div class="feature-thumb-slider">
                            @forelse ( $randomAds as $ad )
                                <div class="feature-thumb">
                                    <img src="{{ $ad->image }}" alt="feature" />
                                    {{-- <img src="{{ asset('assets/endUser') }}/images/product/10.jpg" alt="feature" /> --}}
                                </div>
                            @empty
                                <h4>no category</h4>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    FEATURE PART END
        =======================================-->


        <!--=====================================
                    RECOMEND PART START
        =======================================-->
        <section class="section recomend-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-center-heading">
                            <h2>Our Recommend <span>Ads</span></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero voluptatum repudiandae veniam maxime tenetur.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="recomend-slider slider-arrow">
                            @forelse ($ourRecommendsAds as $ad )

                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/01.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-clipboard-check"></i>
                                        <span>recommend</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge booking">{{ $ad->condition }}</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>{{ $ad->visitors }}</span></li>
                                        {{-- <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li> --}}
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">{{ $ad->category->name }}</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $ad->category->department->name }}</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="{{ route('endUser.ads.show',$ad->id) }}">{{ $ad->name }}</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>
                                             @foreach ( $ad->user->profiles as $profile )
                                                {{ $profile->city }}
                                                ,
                                                {{ $profile->country }}

                                             @endforeach

                                         </span>
                                        <span><i class="fas fa-clock"></i>{{ $ad->created_at }}</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$ {{ $ad->price }}<span>/Per Day</span></h5>
                                        <div class="product-btn">
                                            <a href="{{ route('endUser.ads.show',$ad->id) }}" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @empty
                                <h4>No Ads</h4>
                            @endforelse

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-50">
                            <a href="ad-list-column3.html" class="btn btn-inline">
                                <i class="fas fa-eye"></i>
                                <span>view all recommend</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    RECOMEND PART START
        =======================================-->


        <!--=====================================
                    TREND PART START
        =======================================-->
        <section class="section trend-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-center-heading">
                            <h2>Top <span>Products</span></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero voluptatum repudiandae veniam maxime tenetur.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">

                    @forelse ($topProductByCheckout as $product)
                        <div class="col-md-11 col-lg-8 col-xl-6">
                            <div class="product-card standard">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/01.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-bolt"></i>
                                        <span>trending</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge booking">booking</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">{{ $product->product->category->department->name }}</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $product->product->category->name }}</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-right.html">{{ $product->product->name }}</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>

                                            @foreach ( $product->user->profiles as $profile )
                                                {{ $profile->city }}
                                                ,
                                                {{ $profile->country }}
                                             @endforeach

                                        </span>
                                        <span><i class="fas fa-clock"></i>{{ $product->product->created_at  }}</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$  {{ $product->product->price }} <span>/per day</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h4>No data</h4>
                    @endforelse


                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-20">
                            <a href="ad-list-column3.html" class="btn btn-inline">
                                <i class="fas fa-eye"></i>
                                <span>view all trend</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    TREND PART END
        =======================================-->


        <!--=====================================
                    NICHE PART START
        =======================================-->
        <section class="section niche-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-center-heading">
                            <h2>Browse Our Top <span>Niche</span></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero voluptatum repudiandae veniam maxime tenetur.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="niche-nav">
                            <ul class="nav nav-tabs">
                                <li><a href="#ratings" class="nav-link active" data-toggle="tab">top ratings</a></li>
                                <li><a href="#advertiser" class="nav-link" data-toggle="tab">top advertiser</a></li>
                                <li><a href="#engaged" class="nav-link" data-toggle="tab">top engaged</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab-pane active" id="ratings">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/07.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge booking">booking</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">resort</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1590<span>/per week</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/08.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">mobile</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$454<span>/fixed</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/09.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">animal</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">cat</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$235<span>/Negotiable</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/10.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge rent">rent</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">private car</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$768<span>/per month</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/11.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge booking">booking</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Duplex house</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1470<span>/per day</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/13.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">electronics</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">laptop</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1550<span>/fixed</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/14.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge rent">rent</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">bike</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$90<span>/per hour</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/15.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">camera</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1200<span>/Negotiable</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Rating ads -->

                <div class="tab-pane " id="advertiser">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/08.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">mobile</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$454<span>/fixed</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/07.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge booking">booking</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">resort</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1590<span>/per week</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/10.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge rent">rent</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">private car</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$768<span>/per month</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/09.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">animal</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">cat</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$235<span>/Negotiable</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/13.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">electronics</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">laptop</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1550<span>/fixed</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/11.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge booking">booking</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Duplex house</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1470<span>/per day</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/15.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">camera</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1200<span>/Negotiable</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/14.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge rent">rent</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">bike</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$90<span>/per hour</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Advertiser ads -->

                <div class="tab-pane" id="engaged">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/15.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">camera</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1200<span>/Negotiable</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/07.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge booking">booking</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">resort</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1590<span>/per week</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/09.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">animal</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">cat</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$235<span>/Negotiable</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/10.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge rent">rent</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">private car</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$768<span>/per month</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/08.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">mobile</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$454<span>/fixed</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/13.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge sale">sale</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">electronics</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">laptop</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1550<span>/fixed</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/14.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge rent">rent</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">bike</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$90<span>/per hour</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/11.jpg" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge booking">booking</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Duplex house</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1470<span>/per day</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Engaged ads -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-20">
                            <a href="ad-list-column3.html" class="btn btn-inline">
                                <i class="fas fa-eye"></i>
                                <span>view all ads</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    NICHE PART END
        =======================================-->


        <!--=====================================
                    CITY PART START
        =======================================-->
        <section class="section city-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-center-heading">
                            <h2>Top Cities by <span>Ads</span></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero voluptatum repudiandae veniam maxime tenetur.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <a href="ad-list-column3.html" class="city-card" style="background: url({{ asset('assets/endUser') }}/images/cities/01.jpg) no-repeat center; background-size: cover">
                            <div class="city-content">
                                <h4>Los Angeles</h4>
                                <p>(25) ads</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <a href="ad-list-column3.html" class="city-card" style="background: url({{ asset('assets/endUser') }}/images/cities/02.jpg) no-repeat center; background-size: cover">
                            <div class="city-content">
                                <h4>san francisco</h4>
                                <p>(25) ads</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-5">
                        <a href="ad-list-column3.html" class="city-card" style="background: url({{ asset('assets/endUser') }}/images/cities/03.jpg) no-repeat center; background-size: cover">
                            <div class="city-content">
                                <h4>california</h4>
                                <p>(25) ads</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-5">
                        <a href="ad-list-column3.html" class="city-card" style="background: url({{ asset('assets/endUser') }}/images/cities/04.jpg) no-repeat center; background-size: cover">
                            <div class="city-content">
                                <h4>new york</h4>
                                <p>(25) ads</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <a href="ad-list-column3.html" class="city-card" style="background: url({{ asset('assets/endUser') }}/images/cities/05.jpg) no-repeat center; background-size: cover">
                            <div class="city-content">
                                <h4>manhattan</h4>
                                <p>(25) ads</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <a href="ad-list-column3.html" class="city-card" style="background: url({{ asset('assets/endUser') }}/images/cities/06.jpg) no-repeat center; background-size: cover">
                            <div class="city-content">
                                <h4>Baltimore</h4>
                                <p>(25) ads</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-20">
                            <a href="cities.html" class="btn btn-inline">
                                <i class="fas fa-eye"></i>
                                <span>view all Cities</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    CITY PART END
        =======================================-->


        <!--=====================================
                    CATEGORY PART START
        =======================================-->
        <section class="section category-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-center-heading">
                            <h2>Top Categories by <span>Ads</span></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero voluptatum repudiandae veniam maxime tenetur.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="category-card">
                            <div class="category-head">
                                <img src="{{ asset('assets/endUser') }}/images/category/electronics.jpg" alt="category">
                                <a href="#" class="category-content">
                                    <h4>electronics</h4>
                                    <p>(3678)</p>
                                </a>
                            </div>
                            <ul class="category-list">
                                <li><a href="#"><h6>television</h6><p>(34)</p></a></li>
                                <li><a href="#"><h6>Generetor</h6><p>(24)</p></a></li>
                                <li><a href="#"><h6>Washing machine</h6><p>(12)</p></a></li>
                                <li><a href="#"><h6>air condition</h6><p>(19)</p></a></li>
                                <li><a href="#"><h6>iron</h6><p>(56)</p></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="category-card">
                            <div class="category-head">
                                <img src="{{ asset('assets/endUser') }}/images/category/gadgets.jpg" alt="category">
                                <a href="#" class="category-content">
                                    <h4>gadgets</h4>
                                    <p>(3678)</p>
                                </a>
                            </div>
                            <ul class="category-list">
                                <li><a href="#"><h6>computer</h6><p>(34)</p></a></li>
                                <li><a href="#"><h6>mobile</h6><p>(24)</p></a></li>
                                <li><a href="#"><h6>camera</h6><p>(12)</p></a></li>
                                <li><a href="#"><h6>dron</h6><p>(19)</p></a></li>
                                <li><a href="#"><h6>airphone</h6><p>(56)</p></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="category-card">
                            <div class="category-head">
                                <img src="{{ asset('assets/endUser') }}/images/category/furnitures.jpg" alt="category">
                                <a href="#" class="category-content">
                                    <h4>furnitures</h4>
                                    <p>(3678)</p>
                                </a>
                            </div>
                            <ul class="category-list">
                                <li><a href="#"><h6>dyning table</h6><p>(34)</p></a></li>
                                <li><a href="#"><h6>chair</h6><p>(24)</p></a></li>
                                <li><a href="#"><h6>sofa</h6><p>(12)</p></a></li>
                                <li><a href="#"><h6>tea table</h6><p>(19)</p></a></li>
                                <li><a href="#"><h6>dressing table</h6><p>(56)</p></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="category-card">
                            <div class="category-head">
                                <img src="{{ asset('assets/endUser') }}/images/category/animals.jpg" alt="category">
                                <a href="#" class="category-content">
                                    <h4>animals</h4>
                                    <p>(3678)</p>
                                </a>
                            </div>
                            <ul class="category-list">
                                <li><a href="#"><h6>dyning table</h6><p>(34)</p></a></li>
                                <li><a href="#"><h6>chair</h6><p>(24)</p></a></li>
                                <li><a href="#"><h6>sofa</h6><p>(12)</p></a></li>
                                <li><a href="#"><h6>tea table</h6><p>(19)</p></a></li>
                                <li><a href="#"><h6>dressing table</h6><p>(56)</p></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="category-card">
                            <div class="category-head">
                                <img src="{{ asset('assets/endUser') }}/images/category/fashions.jpg" alt="category">
                                <a href="#" class="category-content">
                                    <h4>fashions</h4>
                                    <p>(3678)</p>
                                </a>
                            </div>
                            <ul class="category-list">
                                <li><a href="#"><h6>jeans</h6><p>(34)</p></a></li>
                                <li><a href="#"><h6>underware</h6><p>(24)</p></a></li>
                                <li><a href="#"><h6>shirt</h6><p>(12)</p></a></li>
                                <li><a href="#"><h6>jacket</h6><p>(19)</p></a></li>
                                <li><a href="#"><h6>shorts</h6><p>(56)</p></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="category-card">
                            <div class="category-head">
                                <img src="{{ asset('assets/endUser') }}/images/category/motorbikes.jpg" alt="category">
                                <a href="#" class="category-content">
                                    <h4>motorbikes</h4>
                                    <p>(3678)</p>
                                </a>
                            </div>
                            <ul class="category-list">
                                <li><a href="#"><h6>dyning table</h6><p>(34)</p></a></li>
                                <li><a href="#"><h6>chair</h6><p>(24)</p></a></li>
                                <li><a href="#"><h6>sofa</h6><p>(12)</p></a></li>
                                <li><a href="#"><h6>tea table</h6><p>(19)</p></a></li>
                                <li><a href="#"><h6>dressing table</h6><p>(56)</p></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="category-card">
                            <div class="category-head">
                                <img src="{{ asset('assets/endUser') }}/images/category/properties.jpg" alt="category">
                                <a href="#" class="category-content">
                                    <h4>properties</h4>
                                    <p>(3678)</p>
                                </a>
                            </div>
                            <ul class="category-list">
                                <li><a href="#"><h6>dyning table</h6><p>(34)</p></a></li>
                                <li><a href="#"><h6>chair</h6><p>(24)</p></a></li>
                                <li><a href="#"><h6>sofa</h6><p>(12)</p></a></li>
                                <li><a href="#"><h6>tea table</h6><p>(19)</p></a></li>
                                <li><a href="#"><h6>dressing table</h6><p>(56)</p></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="category-card">
                            <div class="category-head">
                                <img src="{{ asset('assets/endUser') }}/images/category/automobiles.jpg" alt="category">
                                <a href="#" class="category-content">
                                    <h4>automobiles</h4>
                                    <p>(3678)</p>
                                </a>
                            </div>
                            <ul class="category-list">
                                <li><a href="#"><h6>dyning table</h6><p>(34)</p></a></li>
                                <li><a href="#"><h6>chair</h6><p>(24)</p></a></li>
                                <li><a href="#"><h6>sofa</h6><p>(12)</p></a></li>
                                <li><a href="#"><h6>tea table</h6><p>(19)</p></a></li>
                                <li><a href="#"><h6>dressing table</h6><p>(56)</p></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-20">
                            <a href="category-list.html" class="btn btn-inline">
                                <i class="fas fa-eye"></i>
                                <span>view all categories</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    CATEGORY PART END
        =======================================-->


        <!--=====================================
                    INTRO PART START
        =======================================-->
        <section class="intro-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-center-heading">
                            <h2>Do you have something to advertise?</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero voluptatum repudiandae veniam maxime tenetur.</p>
                            <a href="ad-post.html" class="btn btn-outline">
                                <i class="fas fa-plus-circle"></i>
                                <span>post your ad</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    INTRO PART END
        =======================================-->


        <!--=====================================
                     PRICE PART START
        =======================================-->
        <section class="price-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-center-heading">
                            <h2>Best Reliable Pricing Plans</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero voluptatum repudiandae veniam maxime tenetur.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="price-card">
                            <div class="price-head">
                                <i class="flaticon-bicycle"></i>
                                <h3>$00</h3>
                                <h4>Free Plan</h4>
                            </div>
                            <ul class="price-list">
                                <li>
                                    <i class="fas fa-plus"></i>
                                    <p>1 Regular Ad for 7 days</p>
                                </li>
                                <li>
                                    <i class="fas fa-times"></i>
                                    <p>No Credit card required</p>
                                </li>
                                <li>
                                    <i class="fas fa-times"></i>
                                    <p>No Top or Featured Ad</p>
                                </li>
                                <li>
                                    <i class="fas fa-times"></i>
                                    <p>No Ad will be bumped up</p>
                                </li>
                                <li>
                                    <i class="fas fa-plus"></i>
                                    <p>Limited Support</p>
                                </li>
                            </ul>
                            <div class="price-btn">
                                <a href="user-form.html" class="btn btn-inline">
                                    <i class="fas fa-sign-in-alt"></i>
                                    <span>Register Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="price-card price-active">
                            <div class="price-head">
                                <i class="flaticon-car-wash"></i>
                                <h3>$23</h3>
                                <h4>Standard Plan</h4>
                            </div>
                            <ul class="price-list">
                                <li>
                                    <i class="fas fa-plus"></i>
                                    <p>1 Recom Ad for 30 days</p>
                                </li>
                                <li>
                                    <i class="fas fa-times"></i>
                                    <p>No Featured Ad Available</p>
                                </li>
                                <li>
                                    <i class="fas fa-times"></i>
                                    <p>No Ad will be bumped up</p>
                                </li>
                                <li>
                                    <i class="fas fa-times"></i>
                                    <p>No Top Ad Available</p>
                                </li>
                                <li>
                                    <i class="fas fa-plus"></i>
                                    <p>Basic Support</p>
                                </li>
                            </ul>
                            <div class="price-btn">
                                <a href="user-form.html" class="btn btn-inline">
                                    <i class="fas fa-sign-in-alt"></i>
                                    <span>Register Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="price-card">
                            <div class="price-head">
                                <i class="flaticon-airplane"></i>
                                <h3>$49</h3>
                                <h4>Premium Plan</h4>
                            </div>
                            <ul class="price-list">
                                <li>
                                    <i class="fas fa-plus"></i>
                                    <p>1 Featured Ad for 60 days</p>
                                </li>
                                <li>
                                    <i class="fas fa-plus"></i>
                                    <p>Access to All features</p>
                                </li>
                                <li>
                                    <i class="fas fa-plus"></i>
                                    <p>With Recommended</p>
                                </li>
                                <li>
                                    <i class="fas fa-plus"></i>
                                    <p>Ad Top Category</p>
                                </li>
                                <li>
                                    <i class="fas fa-plus"></i>
                                    <p>Priority Support</p>
                                </li>
                            </ul>
                            <div class="price-btn">
                                <a href="user-form.html" class="btn btn-inline">
                                    <i class="fas fa-sign-in-alt"></i>
                                    <span>Register Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                     PRICE PART END
        =======================================-->


        <!--=====================================
                     BLOG PART START
        =======================================-->
        <section class="blog-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-center-heading">
                            <h2>Read Our <span>Recent Articles</span></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero voluptatum repudiandae veniam maxime tenetur.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-slider slider-arrow">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/endUser') }}/images/blog/01.jpg" alt="blog">
                                    <div class="blog-overlay">
                                        <span class="marketing">Marketing</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="blog-avatar">
                                        <img src="{{ asset('assets/endUser') }}/images/avatar/01.jpg" alt="avatar">
                                    </a>
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <p><a href="#">MironMahmud</a></p>
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <p>02 Feb 2021</p>
                                        </li>
                                    </ul>
                                    <div class="blog-text">
                                        <h4><a href="blog-details.html">Lorem ipsum dolor sit amet eius minus elit cum quaerat volupt.</a></h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus veniam ad dolore labore laborum perspiciatis...</p>
                                    </div>
                                    <a href="blog-details.html" class="blog-read">
                                        <span>read more</span>
                                        <i class="fas fa-long-arrow-alt-left"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/endUser') }}/images/blog/02.jpg" alt="blog">
                                    <div class="blog-overlay">
                                        <span class="advertise">advertise</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="blog-avatar">
                                        <img src="{{ asset('assets/endUser') }}/images/avatar/02.jpg" alt="avatar">
                                    </a>
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <p><a href="#">LabonnoKhan</a></p>
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <p>02 Feb 2021</p>
                                        </li>
                                    </ul>
                                    <div class="blog-text">
                                        <h4><a href="blog-details.html">Lorem ipsum dolor sit amet eius minus elit cum quaerat volupt.</a></h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus veniam ad dolore labore laborum perspiciatis...</p>
                                    </div>
                                    <a href="blog-details.html" class="blog-read">
                                        <span>read more</span>
                                        <i class="fas fa-long-arrow-alt-left"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/endUser') }}/images/blog/03.jpg" alt="blog">
                                    <div class="blog-overlay">
                                        <span class="safety">safety</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="blog-avatar">
                                        <img src="{{ asset('assets/endUser') }}/images/avatar/03.jpg" alt="avatar">
                                    </a>
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <p><a href="#">MironMahmud</a></p>
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <p>02 Feb 2021</p>
                                        </li>
                                    </ul>
                                    <div class="blog-text">
                                        <h4><a href="blog-details.html">Lorem ipsum dolor sit amet eius minus elit cum quaerat volupt.</a></h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus veniam ad dolore labore laborum perspiciatis...</p>
                                    </div>
                                    <a href="blog-details.html" class="blog-read">
                                        <span>read more</span>
                                        <i class="fas fa-long-arrow-alt-left"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/endUser') }}/images/blog/04.jpg" alt="blog">
                                    <div class="blog-overlay">
                                        <span class="security">security</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="blog-avatar">
                                        <img src="{{ asset('assets/endUser') }}/images/avatar/04.jpg" alt="avatar">
                                    </a>
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <p><a href="#">TahminaBonny</a></p>
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i>
                                            <p>02 Feb 2021</p>
                                        </li>
                                    </ul>
                                    <div class="blog-text">
                                        <h4><a href="blog-details.html">Lorem ipsum dolor sit amet eius minus elit cum quaerat volupt.</a></h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus veniam ad dolore labore laborum perspiciatis...</p>
                                    </div>
                                    <a href="blog-details.html" class="blog-read">
                                        <span>read more</span>
                                        <i class="fas fa-long-arrow-alt-left"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-btn">
                            <a href="blog-list.html" class="btn btn-inline">
                                <i class="fas fa-eye"></i>
                                <span>view all blogs</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                     BLOG PART END
        =======================================-->





@endsection
