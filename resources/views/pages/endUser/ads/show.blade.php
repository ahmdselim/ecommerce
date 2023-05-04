@extends("layouts")
@section('title', 'Page Title')

@section("headLinks")
<link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/custom/main.css">
<link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/custom/ad-details.css">

@endsection

@section("content")

@include("includes.endUser.sidebar")


@if ($ad->count() > 0)


<!--=====================================
                    MOBILE-NAV PART START
        =======================================-->

        <!--=====================================
                    MOBILE-NAV PART END
        =======================================-->


        <!--=====================================
                  SINGLE BANNER PART START
        =======================================-->
        <section class="single-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content">
                            <h2>{{ $ad->name }}</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="ad-column3.html">{{ $ad->category->name }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $ad->name }}</li>
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
                    AD DETAILS PART START
        =======================================-->
        <section class="inner-section ad-details-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        <!-- AD DETAILS CARD -->
                        <div class="common-card">
                            <ol class="breadcrumb ad-details-breadcrumb">
                                <li><span class="flat-badge sale">for sale</span></li>
                                <li class="breadcrumb-item"><a href="#">Property</a></li>
                                <li class="breadcrumb-item active" aria-current="page">house</li>
                            </ol>
                            <h5 class="ad-details-address">1420 west jalkuri, shiddirganj, Narayanganj</h5>
                            <h3 class="ad-details-title">Lorem ipsum dolor sit amet consectetur adipisicing elit Maxime ab nesciunt dignissimos.</h3>
                            <div class="ad-details-meta">
                                <a href="#review" class="rating">
                                    <i class="fas fa-star"></i>
                                    <span><strong>({{ $ad->visitors }})</strong>review</span>
                                </a>
                            </div>
                            <div class="ad-details-slider-group">
                                <div class="ad-details-slider slider-arrow">

                                    @forelse ($ad->adImages as $images )
                                      <div><img src="{{ $images->image }}" alt="details" style="display: block !important" ></div>
                                    @empty
                                        <h4>this ad not have multi images</h4>
                                    @endforelse

                                    {{-- <div><img src="{{ asset('assets/endUser') }}/images/product/01.jpg" alt="details"></div>
                                    <div><img src="{{ asset('assets/endUser') }}/images/product/01.jpg" alt="details"></div>
                                    <div><img src="{{ asset('assets/endUser') }}/images/product/01.jpg" alt="details"></div>
                                    <div><img src="{{ asset('assets/endUser') }}/images/product/01.jpg" alt="details"></div> --}}
                                </div>
                                <div class="cross-vertical-badge ad-details-badge">
                                    <i class="fas fa-clipboard-check"></i>
                                    <span>recommend</span>
                                </div>
                            </div>
                            <div class="ad-thumb-slider">
                                @forelse ($ad->adImages as $images )
                                    <div><img src="{{ $images->image }}" alt="details" style="display: block !important" ></div>
                                @empty
                                    <h4>this ad not have multi images</h4>
                                @endforelse
                            </div>
                            <div class="ad-details-action">
                                <button type="button" class="wish"><i class="fas fa-heart"></i>bookmark</button>
                                <button type="button"><i class="fas fa-exclamation-triangle"></i>report</button>
                                <button type="button" data-toggle="modal" data-target="#ad-share">
                                    <i class="fas fa-share-alt"></i>
                                    share
                                </button>
                            </div>
                        </div>

                        <!-- SPECIFICATION CARD -->
                        <div class="common-card">
                            <div class="card-header">
                                <h5 class="card-title">Specification</h5>
                            </div>
                            <ul class="ad-details-specific">
                                <li>
                                    <h6>price:</h6>
                                    <p>$ {{ $ad->price }}</p>
                                </li>
                                <li>
                                    <h6>seller type:</h6>
                                    <p>personal</p>
                                </li>
                                <li>
                                    <h6>published:</h6>
                                    <p>{{ $ad->created_at }}</p>
                                </li>
                                <li>
                                    <h6>location:</h6>
                                    <p>
                                        @foreach ($ad->user->profiles as $profiles )
                                            {{ $profiles->city }} ,
                                            {{ $profiles->country }}
                                        @endforeach
                                </p>
                                </li>
                                <li>
                                    <h6>category:</h6>
                                    <p>{{ $ad->category->name }}</p>
                                </li>
                                <li>
                                    <h6>condition:</h6>
                                    <p>{{ $ad->condition }}</p>
                                </li>
                            </ul>
                        </div>

                        <!-- DESCRIPTION CARD -->
                        <div class="common-card">
                            <div class="card-header">
                                <h5 class="card-title">description</h5>
                            </div>
                            <p class="ad-details-desc">{{ $ad->description }}</p>
                        </div>

                        <!-- REVIEWS CARD -->
                        <div class="common-card" id="review">
                            <div class="card-header">
                                <h5 class="card-title">reviews ({{ $ad->reviews->count() }})</h5>
                            </div>
                            <div class="ad-details-review">
                                <ul class="review-list">


                                    @forelse ($ad->reviews as $review)
                                  <div class="reviewList">

                                    <li class="review-item">
                                        <div class="review-user">
                                            <div class="review-head">
                                                <div class="review-profile">
                                                    <a href="#" class="review-avatar">
                                                        <img src="{{ asset('assets/endUser') }}/images/avatar/03.jpg" alt="review">
                                                    </a>
                                                    <div class="review-meta">
                                                        <h6>
                                                            <a href="#">miron mahmud -</a>
                                                            <span>{{ $review->created_at }}</span>
                                                        </h6>
                                                        <ul>

                                                            @for ($i =0;$i<$review->rating;$i++)
                                                            <li><i class="fas fa-star active"></i></li>
                                                            @endfor
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="review-desc">{{ $review->comment }}</p>
                                        </div>

                                        @foreach ($review->replayViews as $replayViews )
                                        <div class="review-author">
                                            <div class="review-head">
                                                <div class="review-profile">
                                                    <a href="#" class="review-avatar">
                                                        <img src="{{ asset('assets/endUser') }}/images/avatar/04.jpg" alt="review">
                                                    </a>
                                                    <div class="review-meta">
                                                        <h6><a href="#">Miron Mahmud</a></h6>
                                                        <h6>
                                                            @if($replayViews->user_id ===  $review->user_id)
                                                                Author
                                                            @endif
                                                            - <span>{{ $replayViews->created_at }}</span>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="review-desc">{{ $replayViews->comment }}</p>
                                        </div>
                                        @endforeach


                                    </li>

                                  </div>
                                    @empty
                                        <h4>No Reviews</h4>
                                    @endforelse

                                </ul>

                                @if (auth()->user())
                                    {{-- <form class="review-form" method="post" action="{{ route('endUser.ads.store') }}" >
                                        @csrf --}}
                                        <div class="star-rating">
                                            <input type="radio" value="5" name="rating" id="star-1" class="ratings"><label for="star-1"></label>
                                            <input type="radio" value="4" name="rating" id="star-2" class="ratings"><label for="star-2"></label>
                                            <input type="radio" value="3" name="rating" id="star-3" class="ratings"><label for="star-3"></label>
                                            <input type="radio" value="2" name="rating" id="star-4" class="ratings"><label for="star-4"></label>
                                            <input type="radio" value="1" name="rating" id="star-5" class="ratings"><label for="star-5"></label>
                                        </div>
                                        <input type="hidden" name="ad_id" value="{{ $ad->id }}" id="adID" />
                                        @error('rating')
                                        <div class="alert alert-danger mt-1" role="alert">

                                            <div class="alert-body">
                                                {{ $message }}
                                            </div>
                                        </div>
                                        @enderror
                                        <div class="form-group">
                                            <textarea id="commentReview" class="form-control" name="comment" placeholder="Describe">{{ old("comment") }}</textarea>
                                            @error('comment')
                                            <div class="alert alert-danger mt-1" role="alert">

                                                <div class="alert-body">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <button type="submit" id="btnSendReview" onClick="sendReview()" class="btn btn-inline review-submit">
                                            <i class="fas fa-tint"></i>
                                            <span>drop your review</span>
                                        </button>
                                    {{-- </form> --}}
                                @else
                                    <h4>Login First</h4>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">

                        <!-- PRICE CARD -->
                        <div class="common-card price">
                            <h3>$2347<span>/negotiable</span></h3>
                            <i class="fas fa-tag"></i>
                        </div>

                        <!-- NUMBER CARD -->
                        <button type="button" class="common-card number" data-toggle="modal" data-target="#number">
                            <h3>(+880)<span>Click to show</span></h3>
                            <i class="fas fa-phone"></i>
                        </button>

                        <!-- AUTHOR CARD -->
                        <div class="common-card">
                            <div class="card-header">
                                <h5 class="card-title">author info</h5>
                            </div>
                            <div class="ad-details-author">
                                <a href="#" class="author-img active">
                                    <img src="{{ asset('assets/endUser') }}/images/avatar/01.jpg" alt="avatar">
                                </a>
                                <div class="author-meta">
                                    <h4><a href="#">Jackon Honson</a></h4>
                                    <h5>joined: february 02, 2021</h5>
                                    <p>Corporis dolore libero temporibus minus tempora quia voluptas nesciunt.</p>
                                </div>
                                <div class="author-widget">
                                    <a href="profile.html" title="Profile" class="fas fa-eye"></a>
                                    <a href="message.html" title="Message" class="fas fa-envelope"></a>
                                    <button type="button" title="Follow" class="follow fas fa-heart"></button>
                                    <button type="button" title="Number" class="fas fa-phone" data-toggle="modal" data-target="#number"></button>
                                    <button type="button" title="Share" class="fas fa-share-alt" data-toggle="modal" data-target="#profile-share"></button>
                                </div>
                                <ul class="author-list">
                                    <li><h6>total ads</h6><p>134</p></li>
                                    <li><h6>total ratings</h6><p>78</p></li>
                                    <li><h6>total follower</h6><p>56</p></li>
                                </ul>
                            </div>
                        </div>

                        <!-- OPENING CARD -->
                        <div class="common-card">
                            <div class="card-header">
                                <h5 class="card-title">opening hour</h5>
                            </div>
                            <ul class="ad-details-opening">
                                <li>
                                    <h6>Saturday</h6>
                                    <p>09:00am - 05:00pm</p>
                                </li>
                                <li>
                                    <h6>Sunday</h6>
                                    <p>09:00am - 05:00pm</p>
                                </li>
                                <li>
                                    <h6>monday</h6>
                                    <p>09:00am - 05:00pm</p>
                                </li>
                                <li>
                                    <h6>tuesday</h6>
                                    <p>09:00am - 05:00pm</p>
                                </li>
                                <li>
                                    <h6>wednesday</h6>
                                    <p>09:00am - 05:00pm</p>
                                </li>
                                <li>
                                    <h6>thursday</h6>
                                    <p>09:00am - 05:00pm</p>
                                </li>
                                <li>
                                    <h6>friday</h6>
                                    <p>closed</p>
                                </li>
                            </ul>
                        </div>

                        <!-- LOCATION CARD -->
                        <div class="common-card">
                            <div class="card-header">
                                <h5 class="card-title">area map</h5>
                            </div>
                            <iframe class="ad-details-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.3406974350205!2d90.48469931445422!3d23.663771197998262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b0d5983f048d%3A0x754f30c82bcad3cd!2sJalkuri%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1610539261654!5m2!1sen!2sbd"></iframe>
                        </div>

                        <!-- SAFETY CARD -->
                        <div class="common-card">
                            <div class="card-header">
                                <h5 class="card-title">safety tips</h5>
                            </div>
                            <div class="ad-details-safety">
                                <p>Check the item before you buy</p>
                                <p>Pay only after collecting item</p>
                                <p>Beware of unrealistic offers</p>
                                <p>Meet seller at a safe location</p>
                                <p>Do not make an abrupt decision</p>
                                <p>Be honest with the ad you post</p>
                            </div>
                        </div>

                        <!-- FEATURE CARD -->
                        <div class="common-card">
                            <div class="card-header">
                                <h5 class="card-title">featured ads</h5>
                            </div>
                            <div class="ad-details-feature slider-arrow">
                                <div class="feature-card">
                                    <a href="#" class="feature-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/10.jpg" alt="feature">
                                    </a>
                                    <div class="cross-inline-badge feature-badge">
                                        <span>featured</span>
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <button type="button" class="feature-wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <div class="feature-content">
                                        <ol class="breadcrumb feature-category">
                                            <li><span class="flat-badge rent">rent</span></li>
                                            <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">private car</li>
                                        </ol>
                                        <h3 class="feature-title"><a href="ad-details-left.html">Unde eveniet ducimus nostrum maiores soluta temporibus ipsum dolor sit amet.</a></h3>
                                        <div class="feature-meta">
                                            <span class="feature-price">$1200<small>/Monthly</small></span>
                                            <span class="feature-time"><i class="fas fa-clock"></i>56 minute ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature-card">
                                    <a href="#" class="feature-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/01.jpg" alt="feature">
                                    </a>
                                    <div class="cross-inline-badge feature-badge">
                                        <span>featured</span>
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <button type="button" class="feature-wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <div class="feature-content">
                                        <ol class="breadcrumb feature-category">
                                            <li><span class="flat-badge booking">booking</span></li>
                                            <li class="breadcrumb-item"><a href="#">Property</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">House</li>
                                        </ol>
                                        <h3 class="feature-title"><a href="ad-details-left.html">Unde eveniet ducimus nostrum maiores soluta temporibus ipsum dolor sit amet.</a></h3>
                                        <div class="feature-meta">
                                            <span class="feature-price">$800<small>/perday</small></span>
                                            <span class="feature-time"><i class="fas fa-clock"></i>56 minute ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature-card">
                                    <a href="#" class="feature-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/08.jpg" alt="feature">
                                    </a>
                                    <div class="cross-inline-badge feature-badge">
                                        <span>featured</span>
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <button type="button" class="feature-wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <div class="feature-content">
                                        <ol class="breadcrumb feature-category">
                                            <li><span class="flat-badge sale">sale</span></li>
                                            <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">iphone</li>
                                        </ol>
                                        <h3 class="feature-title"><a href="ad-details-left.html">Unde eveniet ducimus nostrum maiores soluta temporibus ipsum dolor sit amet.</a></h3>
                                        <div class="feature-meta">
                                            <span class="feature-price">$1150<small>/Negotiable</small></span>
                                            <span class="feature-time"><i class="fas fa-clock"></i>56 minute ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    AD DETAILS PART END
        =======================================-->


        <!--=====================================
                    RELATED PART START
        =======================================-->
        <section class="inner-section related-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-center-heading">
                            <h2>Related This <span>Ads</span></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero voluptatum repudiandae veniam maxime tenetur.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="related-slider slider-arrow">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/01.jpg" alt="product">
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
                                        <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Duplex House</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="#">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$1500<span>/negotiable</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/03.jpg" alt="product">
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
                                        <li class="breadcrumb-item"><a href="#">stationary</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">books</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="#">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$470<span>/fixed</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/10.jpg" alt="product">
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
                                        <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">private car</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="#">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$3300<span>/fixed</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/09.jpg" alt="product">
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
                                        <li class="breadcrumb-item"><a href="#">animals</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">cat</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="#">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$900<span>/Negotiable</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{ asset('assets/endUser') }}/images/product/02.jpg" alt="product">
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
                                        <li class="breadcrumb-item"><a href="#">fashion</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">shoes</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="#">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                        <span><i class="fas fa-clock"></i>30 min ago</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$384<span>/fixed</span></h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-50">
                            <a href="ad-column3.html" class="btn btn-inline">
                                <i class="fas fa-eye"></i>
                                <span>view all related</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    RELATED PART START
        =======================================-->
        @else
            <h4>No Ads</h4>
        @endif


@stop


@push('script')
<script>
    const commentReview = document.getElementById("commentReview");
    const rating = document.querySelectorAll(".ratings");
    const btnSendReview = document.getElementById("btnSendReview");
    const adID = document.getElementById("adID");


    let ratingValue = "";
    $("div.star-rating input").on("click", function () {
        ratingValue = $(this).val();
    });


    const sendReview = () => {
        const dataValue = {
                '_token': '{{ csrf_token() }}',
                'comment':commentReview.value,
                'ad_id' :adID.value,
                'rating' : ratingValue,
                'user_id' : '{{ auth()->user()->id  ?? null}}'
            };

        console.log(dataValue);


        $.ajax({
            type:'POST',
            url:'{{ route("endUser.ads.store") }}',
            data: dataValue,
            success:function(data) {
                console.log(data);
                commentReview.value = "";
                var todo = `
                <li class="review-item">
                                        <div class="review-user">
                                            <div class="review-head">
                                                <div class="review-profile">
                                                    <a href="#" class="review-avatar">
                                                        <img src="{{ asset('assets/endUser') }}/images/avatar/03.jpg" alt="review">
                                                    </a>
                                                    <div class="review-meta">
                                                        <h6>
                                                            <a href="#">miron mahmud -</a>
                                                            <span> ${review.created_at}</span>
                                                        </h6>
                                                        <ul>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="review-desc">${review.comment}</p>
                                        </div>
                                    </li>
                `;
                jQuery('.reviewList').append(todo);
            },
            error:function(err) {
                console.log("err",err);
            }
        });

    }


</script>
@endpush


