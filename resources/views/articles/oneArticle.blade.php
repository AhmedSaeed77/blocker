
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

<body class="inner-pages hd-white">
    <!-- START SECTION HEADINGS -->
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>{{ __('messages.Blog details') }} </h1>
                    <h2><a href="{{route('main')}}">{{ __('messages.Home') }} </a> &nbsp;/&nbsp; {{ $article->title }} {{ __('messages.Details') }} </h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION BLOG -->
        <section class="blog blog-section bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 blog-pots">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="news-item details no-mb2">
                                    <a href="" class="news-img-link">
                                        <div class="news-item-img text-center">
                                            <img class="img-responsive" src="{{ asset('images/blogs/'.$article->image ) }}" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="news-item-text details pb-0">
                                        <a href=""><h3>{{ $article->title }}</h3></a>
                                        <div class="dates">
                                            
                                            
                                        </div>
                                        <div class="news-item-descr big-news details visib mb-0">
                                            <p class="mb-3">{{ $article->article }}</p>

                                            <p class="d-none d-sm-none d-lg-block d-md-block"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- END SECTION BLOG -->

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>


        <!-- ARCHIVES JS -->
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

    </div>
    <!-- Wrapper / End -->
</body>

</html>
