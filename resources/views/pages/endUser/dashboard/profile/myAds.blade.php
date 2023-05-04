@extends("layouts")
@section('title', 'Page Title')

@section("headLinks")
<link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/custom/main.css">
<link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/custom/index.css">

<!-- FOR USER FORM PAGE STYLE -->
<link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/custom/my-ads.css">

@endsection


@section("content")
@include("includes.endUser.navbar")



        <!--=====================================
                    MY ADS PART START
        =======================================-->
        <section class="myads-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-filter">
                            <div class="filter-show">
                                <label class="filter-label">Show :</label>
                                <select class="custom-select filter-select">
                                    <option value="1">12</option>
                                    <option value="2">24</option>
                                    <option value="3">36</option>
                                </select>
                            </div>
                            <div class="filter-short">
                                <label class="filter-label">Short by :</label>
                                <select class="custom-select filter-select">
                                    <option selected>all ads</option>
                                    <option value="3">booking ads</option>
                                    <option value="2">rental ads</option>
                                    <option value="1">sale ads</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                @forelse ($myAds as $ad )
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="{{asset('assets/endUser')}}/images/product/04.jpg" alt="product">
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">{{ $ad->condition }}</span>
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
                                    <li class="breadcrumb-item"><a href="#">{{ $ad->category->name }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">television</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="#">{{ $ad->name }}</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>{{ $ad->created_at }}</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">${{ $ad->price  }}</h5>
                                    <div class="product-btn">
                                        <form method="post" action="{{ route('dashboard.myAds.addToBookmark',$ad->id) }}">
                                            @csrf
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="submit" title="Wishlist" id="btnWishlist" class="far fa-heart" ></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h4>There is no advertisement</h4>
                @endforelse



                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-pagection ">
                            {{-- <p class="page-info">Showing 12 of 60 Results</p> --}}
                            {{ $myAds->onEachSide(5)->links() }}

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    MY ADS PART END
        =======================================-->



@endsection


