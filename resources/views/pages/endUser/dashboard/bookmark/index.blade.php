@extends("layouts")
@section("title","Bookmark - Classicads")

@section("headLinks")
<link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/custom/main.css">
<link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/custom/index.css">

<link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/custom/bookmark.css">

@endsection

@section("content")
@include("includes.endUser.navbar")
<!--=====================================
                    BOOKMARK PART START
        =======================================-->
        <section class="bookmark-part">
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
                    @forelse ($bookmarks as $bookmark)
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="{{asset('assets/endUser')}}/images/product/04.jpg" alt="product">
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">{{ $bookmark->condition }}</span>
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
                                    {{-- <li class="breadcrumb-item"><a href="#">{{ $bookmark->name }}</a></li> --}}
                                    <li class="breadcrumb-item active" aria-current="page">television</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="#">{{ $bookmark->name }}</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>{{ $bookmark->created_at }}</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">${{ $bookmark->price  }}</h5>
                                    <div class="product-btn">
                                        <form method="post" action="{{ route('dashboard.myAds.addToBookmark',$bookmark->ad_id) }}">
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
                        <h4>no boomark</h4>
                    @endforelse

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-pagection">
                            <p class="page-info">Showing 12 of 60 Results</p>
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">...</li>
                                <li class="page-item"><a class="page-link" href="#">67</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-long-arrow-alt-left"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    BOOKMARK PART END
        =======================================-->

@endsection
