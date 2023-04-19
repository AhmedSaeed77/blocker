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

    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets2/css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/menu.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/styles.css')}}">
    <link rel="stylesheet" id="color" href="{{URL::asset('assets2/css/default.css')}}">

@endsection


@section('content')

        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1> {{ $blog->title()}}</h1>
                    {{-- <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Blog Details</h2> --}}
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION BLOG -->
        <section class="blog blog-section bg-white" style="text-align: center">
            <div class="container" style="text-align: center">
                <div class="row" style="text-align: center">
                    <div class="col-lg-9 col-md-12 blog-pots">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="news-item details no-mb2" style="text-align: center">
                                    <a href="blog-details.html" class="news-img-link">
                                        <div class="news-item-img">
                                            <img class="img-responsive" src="{{ url('/') . '/images/blogs/' . $blog->image}}" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="news-item-text details pb-0">
                                        <a href="blog-details.html"><h3>{{ $blog->title()}}</h3></a>
                                        {{-- <div class="dates">
                                            <span class="date">April 11, 2020 &nbsp;/</span>
                                            <ul class="action-list pl-0">
                                                <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                                <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                                <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                            </ul>
                                        </div> --}}
                                        <div class="news-item-descr big-news details visib mb-0">
                                            <p class="mb-3">Lorem ipsum dolor uga ea, perspiciatis aut!</p>

                                            <p class="d-none d-sm-none d-lg-block d-md-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, ea? Vitae pariatur ab amet iusto tempore neque a, deserunt eaque recusandae obcaecati eos atque delectus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi labore vel enim repellendus excepturi autem. Eligendi cum laboriosam exercitationem illum repudiandae quasi sint dicta consectetur porro fuga ea, perspiciatis aut!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <section class="comments">
                            <h3 class="mb-5">5 Comments</h3>
                            <div class="row mb-4">
                                <ul class="col-12 commented">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="images/testimonials/ts-4.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <h5 class="mb-1">Mario Smith</h5>
                                            <p class="mb-4">Jun 23, 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="row ml-5">
                                <ul class="col-12 commented">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="images/testimonials/ts-5.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <h5 class="mb-1">Mary Tyron</h5>
                                            <p class="mb-4">Jun 23, 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="row my-4">
                                <ul class="col-12 commented">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="images/testimonials/ts-6.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info no-mb">
                                            <h5 class="mb-1">Leo Williams</h5>
                                            <p class="mb-4">Jun 23, 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section> --}}
                        <section class="leve-comments wpb">
                            <h3 class="mb-5">Leave a Comment</h3>
                            <div class="row">
                                <div class="col-md-12 data">
                                    <form action="#">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="First Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Message" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg mt-2">Submit Comment</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
            </div>
        </section>
        <!-- END SECTION BLOG -->

@endsection

@section('js')

        <!-- ARCHIVES JS -->
        <script src="{{URL::asset('assets2/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/tether.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/popper.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/mmenu.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/mmenu.js')}}"></script>
        <script src="{{URL::asset('assets2/js/smooth-scroll.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/ajaxchimp.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/newsletter.js')}}"></script>
        <script src="{{URL::asset('assets2/js/color-switcher.js')}}"></script>
        <script src="{{URL::asset('assets2/js/inner.js')}}"></script>


@endsection
