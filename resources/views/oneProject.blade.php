@extends('layouts.user.app')

@section('css')

 <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/jquery-ui.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:500,600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{URL::asset('assets2/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/fontawesome-5-all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/font-awesome.min.css')}}">
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{URL::asset('assets2/css/leaflet.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/leaflet-gesture-handling.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/leaflet.markercluster.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/leaflet.markercluster.default.cs')}}s">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets2/css/timedropper.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/datedropper.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/menu.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/slick.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/styles.css')}}">
    <link rel="stylesheet" id="color" href="{{URL::asset('assets2/css/default.css')}}">

@endsection


@section('content')
    <!-- START SECTION PROPERTIES LISTING -->
        <section class="single-proper blog details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 blog-pots">
                        <div class="row">
                            <div class="col-md-12">
                                <section class="headings-2 pt-0">
                                    <div class="pro-wrapper">
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <h3>{{ $project->name() }} <span class="mrg-l-5 category-tag">{{ $status->name }}</span></h3>
                                                <div class="mt-0">
                                                    <a href="#listing-location" class="listing-address">
                                                        <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>{{ $project->place->location }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single detail-wrapper mr-2">
                                            <div class="detail-wrapper-body">
                                                <div class="listing-title-bar">
                                                    <h4>$ {{ $project->price }}</h4>
                                                    <div class="mt-0">
                                                        
                                                            <p>$ 1,200 / {{ __('messages.sq ft') }}</p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- main slider carousel items -->
                                <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                                    <h5 class="mb-4">{{ __('messages.Gallery') }}</h5>
                                    <div class="carousel-inner">
                                        @foreach ($project->image as $i)
                                            <div class=" @if($loop->index == 0)active  @endif item carousel-item" data-slide-number="{{ $i->id}}">
                                            <img src="{{ url('/') . '/images/projects/' . $i->name }}" class="img-fluid" alt="slider-listing">
                                        </div>
                                        @endforeach
                                        <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                        <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div  class=" listing-details-sliders mb-30">
                                    <h5 class="mb-4">{{ __('messages.Description') }}</h5>
                                    <div class="carousel-inner">
                                    <p>
                                        {{ $project->description()}}
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single homes-content details mb-30">
                            <!-- title -->
                            <h5 class="mb-4">{{ __('messages.Property Details') }}</h5>
                            <ul class="homes-list clearfix">
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Property ID') }}:</span>
                                    <span class="det">{{$project->code}}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Property Type') }}:</span>
                                    <span class="det">{{ $type->type }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Property status') }}:</span>
                                    <span class="det">{{ $status->name }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Property Price') }}:</span>
                                    <span class="det">$ {{$project->price}}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Rooms') }}:</span>
                                    <span class="det"> {{$project->rooms}}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Bedrooms') }}:</span>
                                    <span class="det">{{$project->bedrooms}}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Baths') }}:</span>
                                    <span class="det"> {{ $project->bath }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">{{ __('messages.Garages') }}:</span>
                                    <span class="det"> {{ $project->garage }}</span>
                                </li>
                            </ul>
                            <!-- title -->
                            <h5 class="mt-5">{{ __('messages.Amenities') }}</h5>
                            <!-- cars List -->
                            <ul class="homes-list clearfix">
                                @foreach ($project->amenitie as  $r)
                                    <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>{{ $r->amenitie->name() }}</span>
                                </li>
                                @endforeach

                                {{-- <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Balcony</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Internet</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Dishwasher</span>
                                </li> --}}
                                {{-- <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Bedding</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Cable TV</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Parking</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Pool</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Fridge</span>
                                </li> --}}
                            </ul>
                        </div>
                        @foreach ($project->plans as  $p)
                            <div class="floor-plan property wprt-image-video w50 pro">
                                <h5>{{$p->name}} </h5>
                                <img alt="image" src="{{ url('/') . '/images/projects/plan/' . $p->image }}">
                            </div>
                        @endforeach
                        <div class="property wprt-image-video w50 pro">
                            <h5>{{ __('messages.Property Video') }}</h5>
                            <img alt="image" src="{{ url('/') . '/images/projects/' . $project->image[0]->name }}">
                            <a class="icon-wrap popup-video popup-youtube" href="{{ $project->vedio_link }}">
                                <i class="fa fa-play"></i>
                            </a>
                            <div class="iq-waves">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                        <div class="property-location map">
                            <h5>{{ __('messages.Location') }}</h5>
                            <div class="divider-fade"></div>
                            <div  class="contact-map">
                                <iframe src="{{ $project->plan }}" width="700" height="300" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="property-location map">
                            <h5>{{ __('messages.Project description') }}</h5>
                            <div class="divider-fade"></div>
                            <div  class="contact-map">
                                <iframe src="{{ asset($project->pdf) }}#toolbar=0" width="700" height="300" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <aside class="col-lg-4 col-md-12 car">
                        <div class="single widget">
                            <!-- Start: Schedule a Tour -->

                            <!-- End: Schedule a Tour -->
                            <!-- end author-verified-badge -->
                            <div class="sidebar">
                                <div class="widget-boxed mt-33 mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>{{ __('messages.Agent Information') }}</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="sidebar-widget author-widget2">
                                            <div class="author-box clearfix">
                                                <img src="{{ asset($project->devolper->logo) }}" alt="author-image" class="author__img">
                                                <h4 class="author__title"> {{ $project->devolper->name ?? 'غير معروف' }}</h4>
                                            </div>
                                            <ul class="author__contact">
                                                <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span> {{ $project->devolper->phone ?? 'غير معروف' }}</li>
                                                <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span>{{ $project->devolper->email ?? 'غير معروف' }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- START SIMILAR PROPERTIES -->
                <section class="similar-property featured portfolio p-0 bg-white-inner">
                    <div class="container">
                        <h5>{{ __('messages.Similar Properties') }}</h5>
                        <div class="row portfolio-items">
                        @foreach (\App\Models\Project::where('region_id', $project->region_id)->orderByDesc('created_at')->limit(5)->get() as $pro )
                            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured" style="width: fit-content !important">{{\App\Models\Type::find($pro->type_id)->type}}</div>
                                                <div class="homes-tag button alt sale" style="width: fit-content !important">{{ $status->name }}</div>
                                                <div class="homes-price">$ {{ $pro->price }}</div>
                                                <!-- <img src="{{ url('/') . '/images/projects/' . $pro->image[0]->name }}" alt="{{ $pro->name() }}" class="img-responsive"> -->
                                                <div style="
                                                         height: 350px;
                                                         background-repeat: no-repeat !important;
                                                         background-position: center;
                                                         background-size: cover;
                                                         background:url({{  url('/') . '/images/projects/' . $pro->image[0]->name }})"></div>
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="{{ $pro->vedio_link }}" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">{{ $project->name() }}</a></h3>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>{{ $project->bedrooms }} {{ __('messages.Bedrooms') }} </span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>{{ $project->bath }} {{ __('messages.Bathrooms') }} </span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>{{$project->size}} {{ __('messages.sq ft') }}</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>{{ $project->garage }} {{ __('messages.Garages') }}</span>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                        </div>
                    </div>
                </section>
                <!-- END SIMILAR PROPERTIES -->
            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->
        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        @endsection

@section('js')


        <!-- ARCHIVES JS -->
        <script src="{{URL::asset('assets2/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery-ui.js')}}"></script>
        <script src="{{URL::asset('assets2/js/range-slider.js')}}"></script>
        <script src="{{URL::asset('assets2/js/tether.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/popper.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/mmenu.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/mmenu.js')}}"></script>
        <script src="{{URL::asset('assets2/js/slick.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/slick4.js')}}"></script>
        <script src="{{URL::asset('assets2/js/fitvids.js')}}"></script>
        <script src="{{URL::asset('assets2/js/smooth-scroll.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/popup.js')}}"></script>
        <script src="{{URL::asset('assets2/js/ajaxchimp.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/newsletter.js')}}"></script>
        <script src="{{URL::asset('assets2/js/timedropper.js')}}"></script>
        <script src="{{URL::asset('assets2/js/datedropper.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jqueryadd-count.js')}}"></script>
        <script src="{{URL::asset('assets2/js/leaflet.js')}}"></script>
        <script src="{{URL::asset('assets2/js/leaflet-gesture-handling.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/leaflet-providers.js')}}"></script>
        <script src="{{URL::asset('assets2/js/leaflet.markercluster.js')}}"></script>
        <script src="{{URL::asset('assets2/js/map-single.js')}}"></script>
        <script src="{{URL::asset('assets2/js/color-switcher.js')}}"></script>
        <script src="{{URL::asset('assets2/js/inner.js')}}"></script>

        <!-- Date Dropper Script-->
        <script>
            $('#reservation-date').dateDropper();

        </script>
        <!-- Time Dropper Script-->
        <script>
            this.$('#reservation-time').timeDropper({
                setCurrentTime: false,
                meridians: true,
                primaryColor: "#e8212a",
                borderColor: "#e8212a",
                minutesInterval: '15'
            });

        </script>

        <script>
            $(document).ready(function() {
                $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                    disableOn: 700,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false
                });
            });

        </script>

        <script>
            $('.slick-carousel').each(function() {
                var slider = $(this);
                $(this).slick({
                    infinite: true,
                    dots: false,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0'
                });

                $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
                    slider.slick('slickPrev');
                });
                $(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
                    slider.slick('slickNext');
                });
            });

        </script>

@endsection
