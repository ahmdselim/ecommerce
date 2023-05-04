@extends("includes.dashboard.master")

@section("dashboardHead" , "Ads | Update")


@section("dashboardLinks")


 <!--  BEGIN CUSTOM STYLE FILE  -->
 <link rel="stylesheet" href="{{asset('assets/dashboard')}}/src/assets/css/light/apps/ecommerce-create.css">
 <link rel="stylesheet" href="{{asset('assets/dashboard')}}/src/assets/css/dark/apps/ecommerce-create.css">
 <!--  END CUSTOM STYLE FILE  -->


@endsection



@section('content')

@include("includes.dashboard.navbar")


<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>

    @include("includes.dashboard.sidebar")

<div id="content" class="main-content">

    <div class="container mt-5">


        <div class="container">

            <!--  BEGIN BREADCRUMBS  -->
            <div class="secondary-nav">
                <div class="breadcrumbs-container" data-page-heading="Analytics">
                    <header class="header navbar navbar-expand-sm">
                        <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-menu">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </a>
                        <div class="d-flex breadcrumb-content">
                            <div class="page-header">

                                <div class="page-title">
                                </div>

                                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Form</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Basic</li>
                                    </ol>
                                </nav>

                            </div>
                        </div>
                    </header>
                </div>
            </div>
            <div class="col-lg-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header p-3">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Form controls</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area p-3">

                        <form method="post" action="{{route('admin.ads.update', $ad)}}" enctype="multipart/form-data">
                            @csrf
                            @method("put")
                            {{-- english name --}}
                            <div class="form-group mb-4">
                                <span class="input-group-text">English Name</span>
                                <input type="text" class="form-control my-2" name="name_en" value="{{ $ad->getTranslation('name', 'en') }}"
                                    placeholder="Name Of Department In English">

                                @error('name_en')
                                <div class="alert alert-danger mt-1" role="alert">
                                    <div class="alert-body">
                                        {{ $message }}
                                    </div>
                                </div>
                                @enderror
                            </div>

                            {{-- arabic name --}}
                            <div class="form-group mb-4">
                                <span class="input-group-text">Arabic Name</span>
                                <input type="text" class="form-control my-2" name="name_ar" value="{{ $ad->getTranslation('name', 'ar') }}"
                                    placeholder="Name Of Department In Arabic">
                                @error('name_ar')
                                <div class="alert alert-danger mt-1" role="alert">

                                    <div class="alert-body">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                {{-- Image --}}
                                <div class="form-group mb-4">
                                    <span class="input-group-text">Image</span>
                                    <input type="file"  class="form-control my-2" name="image">

                                    <div class="avatar  me-3 mb-3">
                                        <img src="{{ $ad->image }}" alt="Avatar" width="64" height="64">
                                    </div>

                                    @error('image')
                                    <div class="alert alert-danger mt-1" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                    @enderror
                                </div>

                                {{-- brands --}}
                                <div class="form-group mb-4">
                                    <span class="input-group-text">Brands</span>
                                    <select class="form-control my-2" name="brand_id[]" multiple>
                                        <option value="">Please Select brand</option>
                                        @foreach ($brands as $brand )
                                        <option value="{{ $brand->id }}"  {{ in_array($brand->id , $ad->brands->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $brand->name }}</option>
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

                                {{-- catgeories --}}
                                <div class="form-group mb-4">
                                    <span class="input-group-text">Category</span>
                                    <select class="form-control my-2" name="category_id">
                                        <option value="">Please Select category</option>
                                        @foreach ($categories as $category )
                                        <option value="{{ $category->id }}"  @selected('category_id')>{{ $category->name }}</option>
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

                                {{-- users --}}
                                <div class="form-group mb-4">
                                    <span class="input-group-text">User</span>
                                    <select class="form-control my-2" name="user_id">
                                        <option value="">Please Select User</option>
                                        @foreach ($users as $user )
                                        <option value="{{ $user->id }}"  @selected('user_id')>{{ $user->fname }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                    <div class="alert alert-danger mt-1" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                    @enderror

                                     {{-- price --}}
                                <div class="form-group mb-4">
                                    <span class="input-group-text">Price</span>
                                    <input type="number" class="form-control my-2" name="price" value="{{ $ad->price }}"
                                        placeholder="Price">
                                    @error('price')
                                    <div class="alert alert-danger mt-1" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                {{-- description --}}
                                <div class="form-group mb-4">
                                    <span class="input-group-text">description</span>
                                    <textarea class="form-control" name="description" placeholder="Describe your message" value="{{ $ad->description }}"></textarea>

                                    @error('description')
                                    <div class="alert alert-danger mt-1" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                 {{-- condition --}}
                                 <div class="form-group mb-4">
                                    <span class="input-group-text">condition</span>
                                    <select class="form-control my-2" name="condition" value="{{ $ad->condition }}">
                                        <option value=""  >Please Select condition</option>
                                        <option value="new" >new</option>
                                        <option value="used">used</option>
                                    </select>
                                    @error('condition')
                                    <div class="alert alert-danger mt-1" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    {{-- status --}}
                                    <div class="form-group mb-4">
                                        <span class="input-group-text">status</span>
                                        <select class="form-control my-2" name="status">
                                            <option value="">Please Select status</option>
                                            <option value="pindling">pindling</option>
                                            <option value="accept">accept</option>
                                            <option value="reject">reject</option>
                                        </select>
                                        @error('status')
                                        <div class="alert alert-danger mt-1" role="alert">
                                            <div class="alert-body">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                </div>



                            </div>






                            {{-- </div> --}}

                            <input type="submit" class="mt-4 mb-4 btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
    @endsection

