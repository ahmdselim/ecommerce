@extends("layouts")
@section("title","Ad Post - Classicads")

@section("headLinks")
<link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/custom/main.css">
<link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/custom/index.css">

<link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/custom/ad-post.css">

@endsection

@section("content")
@include("includes.endUser.navbar")

<!--=====================================
                    ADPOST PART START
        =======================================-->
        <section class="adpost-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="adpost-form" method="post" action="{{ route('dashboard.ad.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="adpost-card">
                                <div class="adpost-title">
                                    <h3>Ad Information</h3>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Product Title Arabic</label>
                                            <input type="text" class="form-control" name="name_ar" placeholder="Type your product title here" value="{{ old('name_ar') }}">

                                            @error('name_ar')
                                            <div class="alert alert-danger mt-1" role="alert">

                                                <div class="alert-body">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Product Title English</label>
                                            <input type="text" class="form-control" name="name_en" placeholder="Type your product title here" value="{{ old('name_en') }}">

                                            @error('name_en')
                                            <div class="alert alert-danger mt-1" role="alert">

                                                <div class="alert-body">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">product image</label>
                                            <input type="file" class="form-control" name="image" value="{{ old('image') }}">

                                            @error('image')
                                            <div class="alert alert-danger mt-1" role="alert">

                                                <div class="alert-body">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">product images</label>
                                            <input type="file" class="form-control" name="images[]" multiple value="{{ old('image') }}">

                                            @error('images')
                                            <div class="alert alert-danger mt-1" role="alert">

                                                <div class="alert-body">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Product Category</label>
                                            <select class="form-control custom-select" value="{{ old('category_id') }}"name="category_id" >
                                                <option  selected>Select Category</option>
                                                    @foreach ($categories as $category )
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                            </select>

                                            @error('category_id')
                                            <div class="alert alert-danger mt-1" role="alert">

                                                <div class="alert-body">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Product Brand</label>
                                            <select class="form-control custom-select" name="brand_id[]" multiple>
                                                @foreach ($brands as $brand )
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                @endforeach
                                            </select>

                                            @error('brand_id')
                                            <div class="alert alert-danger mt-1" role="alert">
                                                <div class="alert-body">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Price</label>
                                            <input type="number" class="form-control" name="price" placeholder="Enter your pricing amount" value="{{ old('price') }}">

                                            @error('price')
                                                <div class="alert alert-danger mt-1" role="alert">
                                                    <div class="alert-body">
                                                        {{ $message }}
                                                    </div>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">ad description</label>
                                            <textarea class="form-control" name="description" placeholder="Describe your message" value="{{ old('description') }}"></textarea>

                                            @error('description')
                                                <div class="alert alert-danger mt-1" role="alert">
                                                    <div class="alert-body">
                                                    {{ $message }}
                                                    </div>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Condition</label>
                                            <select class="form-control custom-select"   name="condition">
                                                <option value="">Please Select condition</option>
                                                <option value="new">new</option>
                                                <option value="used">used</option>
                                            </select>

                                            @error('condition')
                                                <div class="alert alert-danger mt-1" role="alert">
                                                    <div class="alert-body">
                                                    {{ $message }}
                                                    </div>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="adpost-card pb-2">
                                <div class="form-group text-right">
                                    <button class="btn btn-inline">
                                        <i class="fas fa-check-circle"></i>
                                        <span>published your ad</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="account-card alert fade show">
                            <div class="account-title">
                                <h3>Safety Tips</h3>
                                <button data-dismiss="alert">close</button>
                            </div>
                            <ul class="account-card-text">
                                <li>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit debitis odio perferendis placeat at aperiam.</p>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit debitis odio perferendis placeat at aperiam.</p>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit debitis odio perferendis placeat at aperiam.</p>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit debitis odio perferendis placeat at aperiam.</p>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit debitis odio perferendis placeat at aperiam.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    ADPOST PART END
        =======================================-->

@endsection
