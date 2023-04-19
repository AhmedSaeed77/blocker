
@extends('layouts.user.app')

@section('css')

<!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets2/css/search.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/bootstrap.rtl.min.css')}}"> 
    <link rel="stylesheet" href="{{URL::asset('assets2/css/menu.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/slick.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/slider-search2.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/styles.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/maps.css')}}">
    <link rel="stylesheet" id="color" href="{{URL::asset('assets2/css/colors/darkblue.css')}}">

       <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="{{URL::asset('assets2/revolution/css/settings.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/revolution/css/layers.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/revolution/css/navigation.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/search-form.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/search.css')}}">

@endsection

@section('content')
           <section id="hero-area"
                 class="parallax-searchs home17 overlay"
                 data-stellar-background-ratio="0.5">
            <div class="hero-main">
                <div class="container"
                     data-aos="zoom-in">
                    <div class="banner-inner-wrap">
                        <div class="row">
                            <div class="col-12">
                                <div class="banner-inner">
                                    <h1 class="title text-center">Find Your Dream Home</h1>
                                    <h5 class="sub-title text-center">We Have Over Million Properties For You</h5>
                                </div>
                            </div>
                            <!-- Search Form -->
                            <div class="col-12">
                                <div class="banner-search-wrap">
                                    <ul class="nav nav-tabs rld-banner-tab">
                                        <li class="nav-item">
                                            <a class="nav-link active"
                                               data-toggle="tab"
                                               href="#tabs_1">For Sale</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                               data-toggle="tab"
                                               href="#tabs_2">For Rent</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active"
                                             id="tabs_1">
                                            <div class="rld-main-search">
                                                <div class="row">
                                                    <div class="rld-single-input">
                                                        <input type="text"
                                                               placeholder="Enter Keyword...">
                                                    </div>
                                                    <div class="rld-single-select ml-22">
                                                        <select class="select single-select">
                                                            <option value="1">Property Type</option>
                                                            <option value="2">Family House</option>
                                                            <option value="3">Apartment</option>
                                                            <option value="3">Condo</option>
                                                        </select>
                                                    </div>
                                                    <div class="rld-single-select">
                                                        <select class="select single-select mr-0">
                                                            <option value="1">Location</option>
                                                            <option value="2">Los Angeles</option>
                                                            <option value="3">Chicago</option>
                                                            <option value="3">Philadelphia</option>
                                                            <option value="3">San Francisco</option>
                                                            <option value="3">Miami</option>
                                                            <option value="3">Houston</option>
                                                        </select>
                                                    </div>
                                                    <div class="dropdown-filter"><span>Advanced Search</span></div>
                                                    <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                        <a class="btn btn-yellow"
                                                           href="#">Search Now</a>
                                                    </div>
                                                    <div class="explore__form-checkbox-list full-filter">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                                <!-- Form Property Status -->
                                                                <div class="form-group categories">
                                                                    <div class="nice-select form-control wide"
                                                                         tabindex="0"><span class="current"><i
                                                                               class="fa fa-home"></i>Property
                                                                            Status</span>
                                                                        <ul class="list">
                                                                            <li data-value="1"
                                                                                class="option selected ">For Sale</li>
                                                                            <li data-value="2"
                                                                                class="option">For Rent</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!--/ End Form Property Status -->
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                                <!-- Form Bedrooms -->
                                                                <div class="form-group beds">
                                                                    <div class="nice-select form-control wide"
                                                                         tabindex="0"><span class="current"><i
                                                                               class="fa fa-bed"
                                                                               aria-hidden="true"></i> Bedrooms</span>
                                                                        <ul class="list">
                                                                            <li data-value="1"
                                                                                class="option selected">1</li>
                                                                            <li data-value="2"
                                                                                class="option">2</li>
                                                                            <li data-value="3"
                                                                                class="option">3</li>
                                                                            <li data-value="3"
                                                                                class="option">4</li>
                                                                            <li data-value="3"
                                                                                class="option">5</li>
                                                                            <li data-value="3"
                                                                                class="option">6</li>
                                                                            <li data-value="3"
                                                                                class="option">7</li>
                                                                            <li data-value="3"
                                                                                class="option">8</li>
                                                                            <li data-value="3"
                                                                                class="option">9</li>
                                                                            <li data-value="3"
                                                                                class="option">10</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!--/ End Form Bedrooms -->
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                                <!-- Form Bathrooms -->
                                                                <div class="form-group bath">
                                                                    <div class="nice-select form-control wide"
                                                                         tabindex="0"><span class="current"><i
                                                                               class="fa fa-bath"
                                                                               aria-hidden="true"></i> Bathrooms</span>
                                                                        <ul class="list">
                                                                            <li data-value="1"
                                                                                class="option selected">1</li>
                                                                            <li data-value="2"
                                                                                class="option">2</li>
                                                                            <li data-value="3"
                                                                                class="option">3</li>
                                                                            <li data-value="3"
                                                                                class="option">4</li>
                                                                            <li data-value="3"
                                                                                class="option">5</li>
                                                                            <li data-value="3"
                                                                                class="option">6</li>
                                                                            <li data-value="3"
                                                                                class="option">7</li>
                                                                            <li data-value="3"
                                                                                class="option">8</li>
                                                                            <li data-value="3"
                                                                                class="option">9</li>
                                                                            <li data-value="3"
                                                                                class="option">10</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!--/ End Form Bathrooms -->
                                                            </div>
                                                            <div
                                                                 class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld d-none d-lg-none d-xl-flex">
                                                                <!-- Price Fields -->
                                                                <div class="main-search-field-2">
                                                                    <!-- Area Range -->
                                                                    <div class="range-slider">
                                                                        <label>Area Size</label>
                                                                        <div id="area-range"
                                                                             data-min="0"
                                                                             data-max="1300"
                                                                             data-unit="sq ft"></div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                    <br>
                                                                    <!-- Price Range -->
                                                                    <div class="range-slider">
                                                                        <label>Price Range</label>
                                                                        <div id="price-range"
                                                                             data-min="0"
                                                                             data-max="600000"
                                                                             data-unit="$"></div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                 class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30 d-none d-lg-none d-xl-flex">
                                                                <!-- Checkboxes -->
                                                                <div
                                                                     class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                    <input id="check-2"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-2">Air Conditioning</label>
                                                                    <input id="check-3"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-3">Swimming Pool</label>
                                                                    <input id="check-4"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-4">Central Heating</label>
                                                                    <input id="check-5"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-5">Laundry Room</label>
                                                                    <input id="check-6"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-6">Gym</label>
                                                                    <input id="check-7"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-7">Alarm</label>
                                                                    <input id="check-8"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-8">Window Covering</label>
                                                                </div>
                                                                <!-- Checkboxes / End -->
                                                            </div>
                                                            <div
                                                                 class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30 d-none d-lg-none d-xl-flex">
                                                                <!-- Checkboxes -->
                                                                <div
                                                                     class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                    <input id="check-9"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-9">WiFi</label>
                                                                    <input id="check-10"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-10">TV Cable</label>
                                                                    <input id="check-11"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-11">Dryer</label>
                                                                    <input id="check-12"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-12">Microwave</label>
                                                                    <input id="check-13"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-13">Washer</label>
                                                                    <input id="check-14"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-14">Refrigerator</label>
                                                                    <input id="check-15"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-15">Outdoor Shower</label>
                                                                </div>
                                                                <!-- Checkboxes / End -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade"
                                             id="tabs_2">
                                            <div class="rld-main-search">
                                                <div class="row">
                                                    <div class="rld-single-input">
                                                        <input type="text"
                                                               placeholder="Enter Keyword...">
                                                    </div>
                                                    <div class="rld-single-select ml-22">
                                                        <select class="select single-select">
                                                            <option value="1">Property Type</option>
                                                            <option value="2">Family House</option>
                                                            <option value="3">Apartment</option>
                                                            <option value="3">Condo</option>
                                                        </select>
                                                    </div>
                                                    <div class="rld-single-select">
                                                        <select class="select single-select mr-0">
                                                            <option value="1">Location</option>
                                                            <option value="2">Los Angeles</option>
                                                            <option value="3">Chicago</option>
                                                            <option value="3">Philadelphia</option>
                                                            <option value="3">San Francisco</option>
                                                            <option value="3">Miami</option>
                                                            <option value="3">Houston</option>
                                                        </select>
                                                    </div>
                                                    <div class="dropdown-filter"><span>Advanced Search</span></div>
                                                    <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                        <a class="btn btn-yellow"
                                                           href="#">Search Now</a>
                                                    </div>
                                                    <div class="explore__form-checkbox-list full-filter">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                                <!-- Form Property Status -->
                                                                <div class="form-group categories">
                                                                    <div class="nice-select form-control wide"
                                                                         tabindex="0"><span class="current"><i
                                                                               class="fa fa-home"></i>Property
                                                                            Status</span>
                                                                        <ul class="list">
                                                                            <li data-value="1"
                                                                                class="option selected ">For Sale</li>
                                                                            <li data-value="2"
                                                                                class="option">For Rent</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!--/ End Form Property Status -->
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                                <!-- Form Bedrooms -->
                                                                <div class="form-group beds">
                                                                    <div class="nice-select form-control wide"
                                                                         tabindex="0"><span class="current"><i
                                                                               class="fa fa-bed"
                                                                               aria-hidden="true"></i> Bedrooms</span>
                                                                        <ul class="list">
                                                                            <li data-value="1"
                                                                                class="option selected">1</li>
                                                                            <li data-value="2"
                                                                                class="option">2</li>
                                                                            <li data-value="3"
                                                                                class="option">3</li>
                                                                            <li data-value="3"
                                                                                class="option">4</li>
                                                                            <li data-value="3"
                                                                                class="option">5</li>
                                                                            <li data-value="3"
                                                                                class="option">6</li>
                                                                            <li data-value="3"
                                                                                class="option">7</li>
                                                                            <li data-value="3"
                                                                                class="option">8</li>
                                                                            <li data-value="3"
                                                                                class="option">9</li>
                                                                            <li data-value="3"
                                                                                class="option">10</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!--/ End Form Bedrooms -->
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                                <!-- Form Bathrooms -->
                                                                <div class="form-group bath">
                                                                    <div class="nice-select form-control wide"
                                                                         tabindex="0"><span class="current"><i
                                                                               class="fa fa-bath"
                                                                               aria-hidden="true"></i> Bathrooms</span>
                                                                        <ul class="list">
                                                                            <li data-value="1"
                                                                                class="option selected">1</li>
                                                                            <li data-value="2"
                                                                                class="option">2</li>
                                                                            <li data-value="3"
                                                                                class="option">3</li>
                                                                            <li data-value="3"
                                                                                class="option">4</li>
                                                                            <li data-value="3"
                                                                                class="option">5</li>
                                                                            <li data-value="3"
                                                                                class="option">6</li>
                                                                            <li data-value="3"
                                                                                class="option">7</li>
                                                                            <li data-value="3"
                                                                                class="option">8</li>
                                                                            <li data-value="3"
                                                                                class="option">9</li>
                                                                            <li data-value="3"
                                                                                class="option">10</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!--/ End Form Bathrooms -->
                                                            </div>
                                                            <div
                                                                 class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                                <!-- Price Fields -->
                                                                <div class="main-search-field-2">
                                                                    <!-- Area Range -->
                                                                    <div class="range-slider">
                                                                        <label>Area Size</label>
                                                                        <div id="area-range-rent"
                                                                             data-min="0"
                                                                             data-max="1300"
                                                                             data-unit="sq ft"></div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                    <br>
                                                                    <!-- Price Range -->
                                                                    <div class="range-slider">
                                                                        <label>Price Range</label>
                                                                        <div id="price-range-rent"
                                                                             data-min="0"
                                                                             data-max="600000"
                                                                             data-unit="$"></div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                <!-- Checkboxes -->
                                                                <div
                                                                     class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                    <input id="check-16"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-16">Air Conditioning</label>
                                                                    <input id="check-17"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-17">Swimming Pool</label>
                                                                    <input id="check-18"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-18">Central Heating</label>
                                                                    <input id="check-19"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-19">Laundry Room</label>
                                                                    <input id="check-20"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-20">Gym</label>
                                                                    <input id="check-21"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-21">Alarm</label>
                                                                    <input id="check-22"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-22">Window Covering</label>
                                                                </div>
                                                                <!-- Checkboxes / End -->
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                <!-- Checkboxes -->
                                                                <div
                                                                     class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                    <input id="check-23"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-23">WiFi</label>
                                                                    <input id="check-24"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-24">TV Cable</label>
                                                                    <input id="check-25"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-25">Dryer</label>
                                                                    <input id="check-26"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-26">Microwave</label>
                                                                    <input id="check-27"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-27">Washer</label>
                                                                    <input id="check-28"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-28">Refrigerator</label>
                                                                    <input id="check-29"
                                                                           type="checkbox"
                                                                           name="check">
                                                                    <label for="check-29">Outdoor Shower</label>
                                                                </div>
                                                                <!-- Checkboxes / End -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Search Form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="featured portfolio bg-white-3 rec-pro">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Properties for </span>Sale</h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="portfolio col-xl-12">
                    <div class="slick-lancers2">
                          @foreach (\App\Models\Project::orderByDesc('created_at')->limit(10)->get() as $pro )
                        <div class="agents-grid"
                             data-aos="zoom-in">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="{{ route('project',$pro->id) }}"
                                               class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <img src="{{ url('/') . '/images/projects/' . $pro->image[0]->name }}"
                                                     alt="{{ $pro->name() }}"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="{{ route('project',$pro->id) }}"
                                               class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                               class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="{{ route('project',$pro->id) }}"
                                               class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="{{ route('project',$pro->id) }}">{{ $pro->name() }} </a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="{{ route('project',$pro->id) }}">
                                                <i class="fa fa-map-marker"></i><span>{{ $pro->place->location }}</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2"
                                                   aria-hidden="true"></i>
                                                <span>{{$pro->bedrooms }} Beds</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2"
                                                   aria-hidden="true"></i>
                                                <span>{{$pro->baths }} Baths</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square"
                                                   aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ {{ $pro->price}}</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#"
                                                   title="Compare">
                                                    <i class="flaticon-compare"></i>
                                                </a>
                                                <a href="#"
                                                   title="Share">
                                                    <i class="flaticon-share"></i>
                                                </a>
                                                <a href="#"
                                                   title="Favorites">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                     <div class="bg-all">
                    <a href="{{ route('allprojects')}}" class="btn btn-outline-light"> رؤية المزيد  </a>
                        </div>
                </div>
            </div>
        </section>
        <!-- END SECTION PROPERTIES FOR SALE -->
        <!-- START SECTION POPULAR PLACES -->
        <section class="visited-cities bg-white-3 rec-pro">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Most Popular </span>Places</h2>
                    <p>Explore the world of real estate.</p>
                </div>
                <div class="row">
                    @foreach (\App\Models\Location::orderByDesc('created_at')->limit(10)->get() as $lo )
                    <div class="col-lg-3 col-md-6 pr-1"
                         data-aos="fade-right">
                        <!-- Image Box -->
                        <a href="{{ route('filterLocation',$lo->id) }}"
                           class="img-box hover-effect">
                            <img src="{{ url('/') . '/images/places/' . $lo->image}}"
                                 class="img-responsive"
                                 alt="">
                            <!-- Badge -->
                            <div class="img-box-content visible">
                                <h4 class="mb-2">{{ $lo->location }}</h4>
                                
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- END SECTION POPULAR PLACES -->
        <!-- START SECTION CONTACT US -->
        <section class="request info-help"
                 id="quote">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12"
                         data-aos="fade-right">
                        <h3>Ready to get started?</h3>
                        <form id="contactform" class="contact-form">
                            <div id="success"
                                 class="successform">
                                <p class="alert alert-success font-weight-bold"
                                   role="alert">Your message was sent successfully!</p>
                            </div>
                            <div id="error"
                                 class="errorform">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                            <div class="form-group">
                                <input type="text"
                                       required
                                       v-model="name"
                                       class="form-control input-custom input-full"
                                       name="name"
                                       placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="number"
                                       required
                                       class="form-control input-custom input-full"
                                       name="phone"
                                       v-model="phone"
                                       placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <input type="email"
                                       class="form-control input-custom input-full"
                                       name="email"
                                       v-model="email"
                                       placeholder="Your Email">
                            </div>
                            <div class="form-group mb-1">
                                <textarea class="form-control textarea-custom input-full"
                                          id="ccomment"
                                          name="msg"
                                          v-model="msg"
                                          required
                                          rows="1"
                                          placeholder="Your Message"></textarea>
                            </div>
                            <button type="button"
                                    @click="saveData"
                                    class="btn btn-primary btn-lg">Send Message</button>
                        </form>
                    </div>
                    <div class="col-lg-5 col-md-12 bgc"
                         data-aos="fade-left">
                        <div class="call-info">
                            <h3>Contact Details</h3>
                            <p class="mb-5">Please find below contact details and contact us today!</p>
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker"
                                           aria-hidden="true"></i>
                                           <!-- 95 South Park Ave, USA -->
                                        <p class="in-p">{{ getAddress() }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone"
                                           aria-hidden="true"></i>
                                           <!-- +456 875 369 208 -->
                                        <p class="in-p">{{ getPhones() }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope"
                                           aria-hidden="true"></i>
                                           <!-- support@findhouses.com -->
                                        <p class="in-p ti">{{ getEmail() }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info cll">
                                        <i class="fa fa-clock-o"
                                           aria-hidden="true"></i>
                                        <p class="in-p ti">8:00 a.m - 9:00 p.m</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION CONTACT US -->
       <!-- START SECTION BLOG -->
        <section class="blog-section bg-white rec-pro">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Latest </span>News</h2>
                    <p>The latest news form real estate.</p>
                </div>
                <div class="news-wrap">
                    <div class="row">
                    @foreach (\App\Models\Blog::orderByDesc('created_at')->limit(6)->get() as $blog)
                        <div class="col-xl-6 col-md-12 col-xs-12" data-aos="fade-right">
                            <div class="news-item news-item-sm">
                                <a href="{{ route('article',$blog->id) }}" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="resp-img" src="{{ url('/') . '/images/blogs/' . $blog->image}}" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="{{ route('article',$blog->id) }}"><h3>{{ $blog->title }}</h3></a>
                                 
                                    <div class="news-item-descr">
                                        <p>{{ $blog->article }}</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="{{ route('article',$blog->id) }}" class="news-link">Read more...</a>
                                        <ul class="action-list">
                                            <li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
                
            </div>
            <div class="bg-all">
                    <a href="{{ route('allarticle')}}" class="btn btn-outline-light"> رؤية المزيد  </a>
                        </div>
        </section>
        <!-- END SECTION BLOG -->

  <!-- STAR SECTION PARTNERS -->
        <div class="partners bg-white-3 rec-pro">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Our </span>Partners</h2>
                    <p>The Companies That Represent Us.</p>
                </div>
                <div class="owl-carousel style2">
                    @foreach (\App\Models\Developer::all() as $dev)
                    <div class="owl-item" data-aos="fade-up"><img src="{{url('/') . '/images/devs/' . $dev->logo}}" alt=""></div>
                    @endforeach
                      {{-- @foreach (\App\Models\Test::all() as $r)
                                        <span> {{ $r->id }} </span>    <h1>{{ evaluate($r)['name'] }}</h1>
                      @endforeach --}}

                </div>
            </div>
        </div>
        <!-- END SECTION PARTNERS -->
@endsection

@include('vue')
@section('js')
<script>
 content = new Vue({
            'el': '#quote',
            data: {
                name:'',
                email:'',
                phone:'',
                msg: ''
            },
            methods: {
                validation:function(el , msg){
                    if(el == ''){
                        this.error.push({
                            'err' : 'err'
                        });
                        swal({
                                title:  msg,
                                type: 'warning',
                                confirmButtonText: 'موافق',
                            });
                        return 0;
                    }
                },
                saveData: function(e) {
                    e.preventDefault();
                        this.error = []
                        this.validation(this.name , '   الاسم مطلوب ');
                        this.validation(this.phone , '   رقم التليفون مطلوب ');
                        this.validation(this.email , '    البريد الالكترونى مطلوب   ');
                        this.validation(this.msg , '    محتوى الرساله مطلوب    ');
                    if (this.error.length !== 0) {
                            return false
                        }
                    let formData = new FormData(document.getElementById('contactform'));
                    axios.post('{{ route('reqcontact') }}', formData).then(response => {
                        console.log(response)
                        if (response.data.err == true) {
                            swal({
                                title: 'هناك خطأ ما من فضلك حاول مره اخرى',
                                type: 'warning',
                                confirmButtonText: 'موافق',
                            });
                        } else {
                            swal({
                                title: 'شكرا لك سيتم التواصل معك قريبا',
                                type: 'success',
                                confirmButtonText: 'موافق',
                            });
                           
                        }
                    }).catch(response => {
                        swal({
                            title: response.response.message,
                            type: 'warning',
                            confirmButtonText: 'موافق',
                        });
                    })
                }
            }
        });
</script>

@endsection