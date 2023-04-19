@extends('layouts.user.app')

@section('css')


   <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets2/css/search.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="css/lightcase.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/menu.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/styles.css')}}">
    <link rel="stylesheet" id="color" href="{{URL::asset('assets2/css/default.css')}}">
@endsection
@section('content')

     <!-- START SECTION PROPERTIES LISTING -->
        <section class="properties-list full featured portfolio blog">
            <div class="container">
                <section class="headings-2 pt-0 pb-0">
                    <div class="pro-wrapper">
                        <div class="detail-wrapper-body">
                            <div class="listing-title-bar">
                                <div class="text-heading text-left">
                                    <p><a href="{{ url('/')}}">{{ __('messages.Home') }} </a> &nbsp;/&nbsp; <span>{{ __('messages.Listings') }}</span></p>
                                </div>
                                <h3>{{ __('messages.List View') }} </h3>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- <section class="headings-2 pt-0">
                    <div class="pro-wrapper">
                        <div class="detail-wrapper-body">
                            <div class="listing-title-bar">
                                <div class="text-heading text-left">
                                    <p class="font-weight-bold mb-0 mt-3">6 Search results</p>
                                </div>
                            </div>
                        </div>
                        <div class="cod-pad single detail-wrapper mr-2 mt-0 d-flex justify-content-md-end align-items-center">
                            <div class="input-group border rounded input-group-lg w-auto mr-4">
                                <label class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3" for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                                <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby" data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3" id="inputGroupSelect01" name="sortby">
                                    <option selected>Top Selling</option>
                                    <option value="1">Most Viewed</option>
                                    <option value="2">Price(low to high)</option>
                                    <option value="3">Price(high to low)</option>
                                </select>
                            </div>
                            <div class="sorting-options">
                                <a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="properties-full-grid-1.html" class="change-view-btn lde"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                </section> --}}
                <div class="row featured portfolio-items">
                 @foreach ($projects as $pro)
                          <!-- homes content -->
                    <div class="col-lg-8 col-md-12 homes-content pb-0 mb-44" data-aos="fade-up" >
                        <!-- homes address -->
                        <h3><a href="{{ route('project',$pro->id) }}">{{ $pro->name() }}</a></h3>
                        <p class="homes-address mb-3">
                            <a href="{{ route('project',$pro->id) }}">
                                <i class="fa fa-map-marker"></i><span>{{ $pro->place->location }}</span>
                            </a>
                        </p>
                        <!-- homes List -->
                        <ul class="homes-list clearfix pb-3">
                            <li class="the-icons">
                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                <span>{{ $pro->bedrooms }} {{ __('messages.Bedrooms') }} </span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                <span>{{ $pro->bath }} {{ __('messages.Bathrooms') }} </span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                <span>{{$pro->size}} {{ __('messages.sq ft') }}</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                <span>{{ $pro->garage }} {{ __('messages.Garages') }} </span>
                            </li>
                        </ul>

                    </div>
                    <div class="item col-lg-4 col-md-12 col-xs-12 landscapes sale pr-0 pb-0 my-44 ft" data-aos="fade-up">
                        <div class="project-single mb-0 bb-0">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button sale rent">{{ __('messages.For Rent') }}</div>
                                        <div class="homes-price">${{ $pro->price }}</div>
                                        <img src="{{ url('/') . '/images/projects/' . $pro->image[0]->name }}" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="{{ $pro->vedio_link }}" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="{{ route('project',$pro->id) }}" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- homes content -->
                 @endforeach


                </div>
                {{ $projects->links('pagination::bootstrap-4') }}

            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->





@endsection
@section('js')
           <!-- ARCHIVES JS -->
        <script src="{{URL::asset('assets2/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/rangeSlider.js')}}"></script>
        <script src="{{URL::asset('assets2/js/tether.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/popper.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/mmenu.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/mmenu.js')}}"></script>
        <script src="{{URL::asset('assets2/js/aos.js')}}"></script>
        <script src="{{URL::asset('assets2/js/aos2.js')}}"></script>
        <script src="{{URL::asset('assets2/js/smooth-scroll.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/lightcase.js')}}"></script>
        <script src="{{URL::asset('assets2/js/search.js')}}"></script>
        <script src="{{URL::asset('assets2/js/light.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/popup.js')}}"></script>
        <script src="{{URL::asset('assets2/js/searched.js')}}"></script>
        <script src="{{URL::asset('assets2/js/ajaxchimp.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/newsletter.js')}}"></script>
        <script src="{{URL::asset('assets2/js/inner.js')}}"></script>
        <script src="{{URL::asset('assets2/js/color-switcher.js')}}"></script>

        <script>
            $(".dropdown-filter").on('click', function() {

                $(".explore__form-checkbox-list").toggleClass("filter-block");

            });

        </script>

@endsection
