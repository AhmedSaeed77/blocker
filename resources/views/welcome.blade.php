@extends('layouts.user.app')

@section('css')
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/search.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('assets2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/menu.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/slider-search2.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/styles.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/maps.css') }}">
    <link rel="stylesheet" id="color" href="{{ URL::asset('assets2/css/colors/darkblue.css') }}">

    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="{{ URL::asset('assets2/revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/revolution/css/layers.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/revolution/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/search-form.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets2/css/search.css') }}">
    

    @if (getLang() == 'ar')
        <link rel="stylesheet" href="{{ URL::asset('assets2/css/rtl.css') }}">
    @endif
@endsection

@section('content')
    <section id="hero-area" style="background-image: url('{{ URL::asset('images/1.jpg') }}')" class="parallax-searchs home17 overlay" data-stellar-background-ratio="0.5">
        <div class="hero-main">
            <div class="container" data-aos="zoom-in">
                <div class="banner-inner-wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-inner mt-4">
                                <h1 class="title text-center">{{ __('messages.Find Your Dream Home') }}</h1>
                                <h5 class="sub-title text-center">{{ __('messages.We Have Over Million Properties For You') }}</h5>
                            </div>
                        </div>
                        <!-- Search Form -->
                        <div class="col-12">
                            <div class="banner-search-wrap">
                                <ul class="nav nav-tabs rld-banner-tab">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs_1">For Sale</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tabs_1">
                                        <div class="rld-main-search">
                                            <form action="{{ route('searchProperty') }}" method="post">
                                                @csrf
                                                <div class="row">

                                                    <div class="rld-single-input col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                        <input name="keyword" type="text" placeholder="Enter Keyword..." required>
                                                    </div>
                                                    <div class="rld-single-select ml-22 col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                        <select name="type" class="select single-select">
                                                            @foreach($types as $type)
                                                            <option value="{{$type->id}}">{{$type->type}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="rld-single-select col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                        <select name="location" class="select single-select mr-0">
                                                            @foreach($locations as $location)
                                                            <option value="{{$location->id}}">{{$location->location}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-3">
                                                        <input class="btn btn-yellow" type="submit" value="{{ __('messages.Search Now') }}">
                                                    </div>
                                                </div>
                                            </form>
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
    
    <section id="projectShowList" class="featured portfolio bg-white-3  rec-pro">
        <div class="container-fluid">
            <div  class="sec-title pt-5">
                <h2>{{ __('messages.Properties For Sale') }}</h2>
                <p>{{ __('messages.We provide full service at every step.') }}</p>
            </div>
            <div  class="portfolio col-xl-12">
                <div class="slick-lancers2">
                    @foreach (\App\Models\Project::orderByDesc('created_at')->limit(10)->get() as $pro)
                        <div class="agents-grid" data-aos="zoom-in">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="{{ route('project', $pro->id) }}" class="homes-img">
                                                <div class="homes-tag button alt featured" style="width: fit-content !important">{{\App\Models\Type::find($pro->type_id)->type ?? ''}}</div>
                                                <div class="homes-tag button alt sale" style="width: fit-content !important">{{\App\Models\Status::find($pro->status_id)->name ?? ''}}</div>
                                                <div
                                                    style="
                                                         height: 350px;
                                                         background-repeat: no-repeat !important;
                                                         background-position: center;
                                                         background-size: cover;
                                                         background:url({{ url('/') . '/images/projects/' . $pro->image[0]->name }})">
                                                </div>

                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="{{ route('project', $pro->id) }}" class="btn"><i
                                                    class="fa fa-link"></i></a>
                                            <a href="{{ $pro->vedio_link }}"
                                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="{{ route('project', $pro->id) }}" class="img-poppu btn"><i
                                                    class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="{{ route('project', $pro->id) }}">{{ $pro->name() }} </a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="{{ route('project', $pro->id) }}">
                                                <i class="fa fa-map-marker"></i><span>{{ $pro->place->location }}</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>{{ $pro->bedrooms }} {{ __('messages.beds') }}</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>{{ $pro->bath }}  {{ __('messages.Baths') }} </span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square" aria-hidden="true"></i>
                                                <span>{{$pro->size}} {{ __('messages.sq ft') }} </span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">$ {{ $pro->price }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="bg-all">
                    <a href="{{ route('allprojects') }}" class="btn btn-outline-light "> {{ __('messages.Read More') }} </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION PROPERTIES FOR SALE -->
    <!-- START SECTION POPULAR PLACES -->
    <section class="visited-cities bg-white-3 rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2>{{ __('messages.Most Popular Places') }}</h2>
                <p>{{ __('messages.Explore the world of real estate.') }}</p>
            </div>
            <div class="row d-flex justify-content-center">
                @foreach (\App\Models\Location::orderByDesc('created_at')->limit(4)->get() as $lo)
                    <div class="col-lg-3 col-md-6 pr-1" data-aos="fade-right">
                        <!-- Image Box -->
                        <a href="{{ route('filterLocation', $lo->id) }}" class="img-box hover-effect">
                            <img src="{{ url('/') . '/images/places/' . $lo->image }}" class="img-responsive"
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
    <section  style="background-image: url('{{ URL::asset('images/2.jpg') }}')"  class="request info-help" id="quote">
        <div   class="container ">
            <div class="row pt-5">
                <div class="col-lg-7 col-md-12" data-aos="fade-right">
                    <h3>{{ __('messages.Ready to get started?') }}</h3>
                    <form id="contactform"  class="contact-form">
                        <div id="success" class="successform">
                            <p class="alert alert-success font-weight-bold" role="alert">{{ __('messages.your message send successfully') }}!</p>
                        </div>
                        <div id="error" class="errorform">
                            <p>{{ __('messages.please try agan')}}</p>
                        </div>
                        <div class="form-group">
                            <input type="text" required v-model="name" class="form-control input-custom input-full"
                                name="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="number" required class="form-control input-custom input-full" name="phone"
                                v-model="phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-custom input-full" name="email"
                                v-model="email" placeholder="Your Email">
                        </div>
                        <div class="form-group mb-1">
                            <textarea class="form-control textarea-custom input-full" id="ccomment" name="msg" v-model="msg" required
                                rows="1" placeholder="Your Message"></textarea>
                        </div>
                        <button type="button" @click="saveData" class="btn btn-primary btn-lg">{{ __('messages.Send Message')}} </button>
                    </form>
                </div>
                <div style="background-image: url('{{ URL::asset('images/3.jpg') }}')"  class="col-lg-5 col-md-12 bgc" data-aos="fade-left">
                    <div class="call-info">
                        <h3>{{ __('messages.Please leave a message') }} </h3>
                        <p class="mb-5">{{ __('messages.Please find below contact details and contact us today!') }}</p>
                        <ul>
                            <li>
                                <div class="info">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p class="in-p">{{ getcon('address') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p class="in-p">{{ getcon('phone') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p class="in-p ti">{{ getcon('email') }}</p>
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
                <h2> {{ __('messages.Latest News')}} </h2>

            </div>
            <div class="news-wrap">
                <div class="row">
                    @foreach (\App\Models\Blog::orderByDesc('created_at')->limit(6)->get() as $blog)
                        <div class="col-xl-6 col-md-12 col-xs-12" data-aos="fade-right">
                            <div class="news-item news-item-sm">
                                <a href="{{ route('article', $blog->id) }}" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="resp-img" loading="lazy" src="{{ url('/') . '/images/blogs/' . $blog->image }}"
                                            alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="{{ route('article', $blog->id) }}">
                                        <h3>{{ $blog->title }}</h3>
                                    </a>
                                    <div class="news-item-descr">
                                        <p>{{ \Illuminate\Support\Str::limit($blog->article,25) }}</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="{{ route('article', $blog->id) }}" class="news-link">{{ __('messages.Read More') }} </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="bg-all">
            <a href="{{ route('allarticle') }}" class="btn btn-outline-light">  {{ __('messages.Read More') }}  </a>
        </div>
    </section>
    <!-- END SECTION BLOG -->

    <!-- STAR SECTION PARTNERS -->
    <div class="partners bg-white-3 rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span> {{ __('messages.Our Partners') }} </h2>

            </div>
            <div class="owl-carousel style2">
                @foreach (\App\Models\Developer::all() as $dev)
                    <div class="owl-item" loading="lazy" data-aos="fade-up"><img src="{{ url('/') . '/images/devs/' . $dev->logo }}" alt="{{ $dev->name }}"></div>
                @endforeach
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
                name: '',
                email: '',
                phone: '',
                msg: ''
            },
            methods: {
                validation: function(el, msg) {
                    if (el == '') {
                        this.error.push({
                            'err': 'err'
                        });
                        swal({
                            title: msg,
                            type: 'warning',
                            confirmButtonText: 'موافق',
                        });
                        return 0;
                    }
                },
                saveData: function(e) {
                    e.preventDefault();
                    this.error = []
                    this.validation(this.name, '   الاسم مطلوب ');
                    this.validation(this.phone, '   رقم التليفون مطلوب ');
                    this.validation(this.email, '    البريد الالكترونى مطلوب   ');
                    this.validation(this.msg, '    محتوى الرساله مطلوب    ');
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
