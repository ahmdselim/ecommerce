@extends("includes.dashboard.master")

@section("dashboardHead" , "category | Create")

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

                        <form method="post" action="{{route('admin.category.store')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-4">
                                <span class="input-group-text">English Name</span>
                                <input type="text" class="form-control my-2" name="name_en" value="{{ old('name_en') }}"
                                    placeholder="Name Of Department In English">

                                @error('name_en')
                                <div class="alert alert-danger mt-1" role="alert">
                                    <div class="alert-body">
                                        {{ $message }}
                                    </div>
                                </div>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <span class="input-group-text">Arabic Name</span>
                                <input type="text" class="form-control my-2" name="name_ar" value="{{ old('name_ar') }}"
                                    placeholder="Name Of Department In Arabic">
                                @error('name_ar')
                                <div class="alert alert-danger mt-1" role="alert">

                                    <div class="alert-body">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <span class="input-group-text">Image</span>
                                <input type="file"  class="form-control my-2" name="image">
                                @error('image')
                                <div class="alert alert-danger mt-1" role="alert">

                                    <div class="alert-body">
                                        {{ $message }}
                                    </div>
                                </div>
                                @enderror

                                <span class="input-group-text">Department</span>
                                <select class="form-control my-2" name="department_id">
                                    <option value="">Please Select Department</option>
                                    @foreach ($departments as $department )
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                                @error('department_id')
                                <div class="alert alert-danger mt-1" role="alert">

                                    <div class="alert-body">
                                        {{ $message }}
                                    </div>
                                </div>
                                @enderror
                            </div>




                            <input type="submit" class="mt-4 mb-4 btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
    @endsection

