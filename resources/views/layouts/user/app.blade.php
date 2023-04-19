<!DOCTYPE html>
<html >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title> {{ getAppName() }} </title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('assets2/favicon.ico')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/jquery-ui.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{URL::asset('assets2/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/fontawesome-5-all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style >.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:80px;
	right:5px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}</style>

    @yield('css')
</head>

<body class="homepage-6 homepage-9 hd-white home-11 hp1">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container" >
            <!-- Header -->
            <div id="header">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="{{ route('main')}}"><img src="{{asset('assets/images/logo.png')}}"  alt=""></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <li><a href="{{ route('main') }}">Home</a>
                                    <!-- <ul>
                                        <li><a href="#">Home Map</a>
                                            <ul>
                                                <li><a href="index-9.html">Home Map Style 1</a></li>
                                                <li><a href="index-12.html">Home Map Style 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Home Image</a>
                                            <ul>
                                               <li><a href="index.html">Modern Home</a></li>
                                                <li><a href="index-2.html">Home Boxed Image</a></li>
                                                <li><a href="index-3.html">Home Modern Image</a></li>
                                                <li><a href="index-5.html">Home Minimalist Style</a></li>
                                                <li><a href="index-6.html">Home Parallax Image</a></li>
                                                <li><a href="index-8.html">Home Search Form</a></li>
                                                <li><a href="index-10.html">Modern Full Image</a></li>
                                                <li><a href="index-15.html">Home Typed Image</a></li>
                                                <li><a href="index-17.html">Modern Parallax Image</a></li>
                                                <li><a href="index-18.html">Image Filter Search</a>
                                                <li><a href="index-21.html">Parallax Image video</a></li>
												<li><a href="index-23.html">Home Image</a></li>
												<li><a href="index-24.html">Image and video</a></li>
                                            </ul>
                                            </li>
                                            <li><a href="#">Home Video</a>
                                                <ul>
                                                    <li><a href="index-4.html">Home Video Image</a></li>
                                                    <li><a href="index-7.html">Home Video</a></li>
                                                    <li><a href="index-20.html">Home Modern Video</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Home Slider</a>
                                                <ul>
                                                    <li><a href="index-11.html">Slider Presentation 2</a></li>
                                                    <li><a href="index-16.html">Slider Presentation 3</a></li>
                                                    <li><a href="index-19.html">Home Modern Slider</a></li>
                                                    <li><a href="index-22.html">Home Image Slider</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Home Styles</a>
                                                <ul>
                                                    <li><a href="index-13.html">Home Style Dark</a></li>
                                                    <li><a href="index-14.html">Home Style White</a></li>
                                                </ul>
                                            </li>
                                    </ul> -->
                                    </li>
                                    <!-- <li><a href="#">Listing</a>
                                        <ul>
                                            <li><a href="#">Listing Grid</a>
                                                <ul>
                                                    <li><a href="properties-grid-1.html">Grid View 1</a></li>
                                                    <li><a href="properties-grid-2.html">Grid View 2</a></li>
                                                    <li><a href="properties-grid-3.html">Grid View 3</a></li>
                                                    <li><a href="properties-grid-4.html">Grid View 4</a></li>
                                                    <li><a href="properties-full-grid-1.html">Grid Fullwidth 1</a></li>
                                                    <li><a href="properties-full-grid-2.html">Grid Fullwidth 2</a></li>
                                                    <li><a href="properties-full-grid-3.html">Grid Fullwidth 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Listing List</a>
                                                <ul>
                                                    <li><a href="properties-full-list-1.html">List View 1</a></li>
                                                    <li><a href="properties-list-1.html">List View 2</a></li>
                                                    <li><a href="properties-full-list-2.html">List View 3</a></li>
                                                    <li><a href="properties-list-2.html">List View 4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Listing Map</a>
                                                <ul>
                                                    <li><a href="properties-half-map-1.html">Half Map 1</a></li>
                                                    <li><a href="properties-half-map-2.html">Half Map 2</a></li>
                                                    <li><a href="properties-half-map-3.html">Half Map 3</a></li>
                                                    <li><a href="properties-top-map-1.html">Top Map 1</a></li>
                                                    <li><a href="properties-top-map-2.html">Top Map 2</a></li>
                                                    <li><a href="properties-top-map-3.html">Top Map 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Agent View</a>
                                                <ul>
                                                    <li><a href="agents-listing-grid.html">Agent View 1</a></li>
                                                    <li><a href="agents-listing-row.html">Agent View 2</a></li>
                                                    <li><a href="agents-listing-row-2.html">Agent View 3</a></li>
                                                    <li><a href="agent-details.html">Agent Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Agencies View</a>
                                                <ul>
                                                    <li><a href="agencies-listing-1.html">Agencies View 1</a></li>
                                                    <li><a href="agencies-listing-2.html">Agencies View 2</a></li>
                                                    <li><a href="agencies-details.html">Agencies Details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <li><a href="{{route('allprojects')}}">Property</a>
                                        <ul>
                                            @foreach(\App\Models\Project::latest()->limit(5)->get() as $project)
                                                <li><a href="{{ route('project',$project->id) }}">{{ $project -> name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{route('allarticle')}}">Blog</a>
                                        <ul>
                                            @foreach(\App\Models\Blog::latest()->limit(5)->get() as $blog)
                                                <li><a href="{{ route('article',$blog->id) }}">{{ $blog -> title }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li><a href="{{route('user.about')}}">About us</a></li>
                                    <li><a href="{{route('main')}}#quote">Contact</a></li>
                                    <li class="d-none d-xl-none d-block d-lg-block"><a href="login.html">Login</a></li>
                                    <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a></li>
                                    <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a href="add-property.html" class="button border btn-lg btn-block text-center">Add Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Right Side Content / End -->
                    @auth
     <!-- Right Side Content / End -->

                    <!-- <div class="header-user-menu user-menu add ">
                        <div class="header-user-name">
                            <span><img src="{{ asset('/attachments/users/'. Auth::user()->photo ) }}" alt=""></span>{{Auth::user()->name}}
                        </div>
                        <ul>
                            <li> <div class="modal-open2" ><a href="">Edit profile</a></div></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                        <i class="fas fa-sign-out-alt"></i>Log Out
                                    </a>

                                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>

                        </ul>
                    </div>
 -->
                    <!-- Right Side Content / End -->
                    @else
                    <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                        
                        <div class="header-widget sign-in">
                            <div class="show-reg-form modal-open"><a href="#">Register</a></div>
                        </div>
                        
                    </div>
                    
                    @endauth

                    <!-- lang-wrap-->
                    <div onClick="show()" id="Active" class="header-user-menu user-menu add d-none d-lg-none d-xl-flex">
                        <div class="lang-wrap">
                            <div class="show-lang"><span><i class="fas fa-globe-americas"></i><strong>{{ getLang() }}</strong></span><i class="fa fa-caret-down arrlan"></i></div>
                            <ul class="lang-tooltip lang-action no-list-style">
                                <li><a href="{{ route('set.localization','en') }}"  >English</a></li>
                                <li><a href="{{ route('set.localization','fr') }}" >Francais</a></li>
                                <li><a href="{{ route('set.localization','ar') }}" >عربي</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- lang-wrap end-->

                </div>
            </div>
            <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

            @yield('content')


        <!-- START FOOTER -->
        <footer class="first-footer rec-pro">
            <div class="top-footer border-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="netabout">
                                <a href="{{route('main')}}" class="logo">
                                    <img src="{{asset('assets/images/logo.png')}}" style="max-width: 20%;max-height: 20%" alt="netcom">
                                </a>
                                <p> {{  get('goals') }} </p>
                            </div>
                            <div class="contactus">
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
                        <div class="col-lg-4 col-md-6">
                            <div class="navigation">
                                <h3> {{ __('messages.Navigation') }}</h3>
                                <div class="nav-footer">
                                    <ul>
                                        <li><a href="{{route('main')}}"> {{ __('messages.Home one') }}</a></li>
                                        <li><a href="{{route('main')}}#projectShowList">{{ __('messages.Properties right') }}</a></li>
                                        <li><a href="{{route('allprojects')}}">{{ __('messages.Properties list') }}</a></li>
                                        <li><a href="{{route('allprojects')}}">{{ __('messages.Property details') }}</a></li>
                                       
                                    </ul>
                                    <ul class="nav-right">
                                       
                                        <li><a href="{{route('user.about')}}">{{ __('messages.About us') }}</a></li>
                                        <li><a href="{{route('allarticle')}}">{{ __('messages.Blog default') }}</a></li>
                                        <li><a href="{{route('allarticle')}}">{{ __('messages.Blog details') }}</a></li>
                                        <li class="no-mgb"><a href="{{route('main')}}#quote">{{ __('messages.Contact us') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="widget">
                                <h3>{{ __('messages.Latest News') }}</h3>
                                <div class="twitter-widget contuct">
                                    <div class="twitter-area">
                                        @foreach(\App\Models\Blog::orderByDesc('created_at')->limit(3)->get() as $blog)
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="{{get('twitter')}}"></a> {{ $blog->title }}</h5>
                                                
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                            </div> 
                                            <div class="text">
                                                <h5><a href="{{get('twitter')}}"></a> {{\Illuminate\Support\Str::limit(getblog(),25)}}</h5>
                                                <h4>{{ __('messages.About 5 days ago') }}</h4>
                                            </div>
                                        </div> 
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="{{get('twitter')}}"></a> {{\Illuminate\Support\Str::limit(getblog(),25)}}</h5>
                                               
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-3 col-md-6">
                            <div class="newsletters">
                                <h3>Newsletters</h3>
                                <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in your inbox.</p>
                            </div>
                            <form class="bloq-email mailchimp form-inline" method="post">
                                <label for="subscribeEmail" class="error"></label>
                                <div class="email">
                                    <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                                    <input type="submit" value="Subscribe">
                                    <p class="subscription-success"></p>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="second-footer rec-pro">
                <div class="container-fluid sd-f">
                    <p>{{ __('messages.2021 © Copyright - All Rights Reserved.') }}</p>
                    <ul class="netsocials">
                        <li><a href="{{getcon('facebook')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="{{getcon('twitter')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="{{getcon('insta')}}"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="{{getcon('youtube')}}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

      <!--register form -->
      <!-- @abdo -->
      @php 
            
            $link = 'https://api.whatsapp.com/send?phone=';
            $link .= getcon("whatsapp"); 
            $link .= '&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202';
      @endphp
      <a href="{{ $link }}" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>{{ __('messages.Welcome to') }}  <span><strong>{{ getAppName() }}</strong></span></h3>
                    <div class="soc-log fl-wrap">

                    </div>

                    <div id="tabs-container">
                        <ul class="tabs-menu p-0">
                            <!-- <li ><a href="#tab-1">{{ __('messages.Login') }}</a></li> -->
                            <div class="bg-danger w-20 p-2 m-auto text-light text-center">{{ __('messages.GET IN TOUCH') }}</div>
                            <li class="current d-none"><a href="#tab-2">{{ __('messages.GET IN TOUCH') }}</a></li>
                        </ul>
                        <div class="tab">
                            <!-- <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                    <form  action= "/login" method="post" name="registerform">
                                         @csrf
                                        <label>{{ __('messages.Email Address *') }}</label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>{{ __('messages.Password *') }} </label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn"><span>{{ __('messages.Login') }}</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">{{ __('messages.Remember me') }}</label>
                                        </div>
                                    </form>
                                </div>
                            </div> -->

                            <div class="tab">
                                <div id="tab-1" class="tab-contents">
                                    <div class="custom-form">
                                        <form  method="post" action="{{route('requests.store') }}"
                                         class="main-register-form" id="main-register-form2" enctype="multipart/form-data">
                                            @csrf
                                            <label> {{ __('messages.Name*') }}</label>
                                            <input name="name" type="text" onClick="this.select()"  required>
                                            <label> {{ __('messages.Phone*') }} </label>
                                            <input name="phone" type="text" onClick="this.select()"  >
                                            <label>{{ __('messages.Email Address*') }}</label>
                                            <input name="email" type="text" onClick="this.select()"  required>

                                            <label>{{ __('messages.Select Country *') }}</label><br><br>
                                            <select name="country" value="{{old('country')}}" class="nice-select form-control wide" tabindex="0" class="list" required><span>Select</span>
                                                @foreach( \App\Models\Country::all() as $country)
                                                <option value="{{$country->name}}" class="option">{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                            <label> {{ __('messages.City*') }} </label>
                                            <input name="city" type="text" onClick="this.select()" value="" >
                                            <!-- <label>{{ __('messages.Password*') }}</label>
                                            <input name="password" onClick="this.select()" type="password" onClick="this.select()" value="" required>
                                            <label >{{ __('messages.Project Personal Image *') }}</label>
                                            <input type="file"  name="photo" value="{{old('photo')}}"  placeholder="Enter your project Main images" required> -->
                                            <label> {{ __('messages.Message*') }}</label>
                                            <input name="message" type="text" onClick="this.select()"  >
                                            
                                            <div class="row mt-3">
                                                <div class="col-lg-3">
                                                    <label class="ckbox">
                                                        <input name="keep" type="checkbox">
                                                        <span> Keep me </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- <input type="checkbox" name="keep"  >
                                            <label>Keep me update on news and offer</label> -->
                                            <button type="submit" class="log-submit-btn"><span>{{ __('messages.Submit') }}</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->
<!--register form -->
        <div class="login-and-register-form modal2">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>{{ __('messages.Welcome to') }} <span><strong>{{ getAppName() }}</strong></span></h3>
                    <div class="soc-log fl-wrap">

                    </div>
                    @if( Auth::user())
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current">{{ __('messages.Update profile') }}</li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                        </form>
                                     <form action = "{{ route('user.editprofile') }} "  method="post"
                                         class="main-register-form" id="main-register-form2" enctype="multipart/form-data">
                                            @csrf
                                            <label> {{ __('messages.Name*') }}</label>
                                            <input name="name" type="text" value ="{{ Auth::user()->name }}" onClick="this.select()" required>
                                            <label> {{ __('messages.Phone*') }}</label>
                                            <input name="phone" type="text" value ="{{ Auth::user()->phone }}" onClick="this.select()"  required>
                                            <label>{{ __('messages.Email Address*') }}</label>
                                            <input name="email" type="text" value ="{{ Auth::user()->email }}" onClick="this.select()"  required>
                                            <label>{{ __('messages.Select Country *') }}</label><br><br>
                                            <select name="country" value="{{old('country')}}" class="nice-select form-control wide" tabindex="0" class="list" required><span>Select</span>
                                                @foreach( \App\Models\Country::all() as $country )
                                                <option @if(Auth::user()->country == $country->name) selected @endif value="{{$country->name}}" class="option">{{$country->name}}</option>
                                                @endforeach
                                            </select>

                                            <label>{{ __('messages.City*') }}</label><br><br>
                                            <input name="city" type="text" value ="{{ Auth::user()->city }}" onClick="this.select()"  required>

                                            <label>{{ __('messages.Password*') }}</label>
                                            <input name="password"  onClick="this.select()" type="password" onClick="this.select()"  >

                                            <label>{{ __('messages.Project Personal Image *') }}</label>
                                            <input type="file"  name="photo" value="{{old('photo')}}"  >
                                                <!-- <input type="file"  name="imageone" ><br><br> -->
                                            <img src = "{{ asset('/attachments/users/'. Auth::user()->photo) }} "
                                                        class = "img-thumnail" width = "75"
                                                        style="width:100px;height: 100px;" alt="image"/>

                                            <button type="submit" class="log-submit-btn"><span>{{ __('messages.Update') }}</span></button>
                                        </form>

                                </div>
                            </div>



                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <!--register form end -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>


        <!-- END PRELOADER -->
        <!-- ARCHIVES JS -->
        <script src="{{URL::asset('assets2/js/jquery-ui.js')}}"></script>
        <script src="{{URL::asset('assets2/js/tether.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/popper.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/moment.js')}}"></script>
        <script src="{{URL::asset('assets2/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/mmenu.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/mmenu.js')}}"></script>
        <script src="{{URL::asset('assets2/js/slick.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/fitvids.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery.counterup.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/smooth-scroll.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/lightcase.js')}}"></script>
        <script src="{{URL::asset('assets2/js/search.js')}}"></script>
        <script src="{{URL::asset('assets2/js/owl.carousel.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/ajaxchimp.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/newsletter.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery.form.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery.validate.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/searched.js')}}"></script>
        <script src="{{URL::asset('assets2/js/forms-2.js')}}"></script>
        <script src="{{URL::asset('assets2/js/color-switcher.js')}}"></script>
        <script src="{{URL::asset('assets2/js/search.js')}}"></script>


        <!-- Slider Revolution scripts -->
        <script src="{{URL::asset('assets2/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script src="{{URL::asset('assets2/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        @yield('js')
    <script>
                var modal = {};
                modal.hide = function () {
                    $('.modal').fadeOut();
                    $("html, body").removeClass("hid-body");
                };
                $('.modal-open').on("click", function (e) {
                    e.preventDefault();
                    $('.modal').fadeIn();
                    $("html, body").addClass("hid-body");
                });
                 $('.close-reg').on("click", function () {
                    modal.hide();
                });
                modal.hide2 = function () {
                    $('.modal2').fadeOut();
                    $("html, body").removeClass("hid-body");
                };
                $('.modal-open2').on("click", function (e) {
                    e.preventDefault();
                    $('.modal2').fadeIn();
                    $("html, body").addClass("hid-body");
                });


                $('.close-reg').on("click", function () {
                    modal.hide2();
                });
                    $(".tabs-menu a").on("click", function (a) {
                    a.preventDefault();
                    $(this).parent().addClass("current");
                    $(this).parent().siblings().removeClass("current");
                    var b = $(this).attr("href");
                    $(".tab-contents").not(b).css("display", "none");
                    $(b).fadeIn();

                });
            </script>
            <script src="{{URL::asset('assets2/js/script.js')}}"></script>



        <script>
            var tpj = jQuery;
            var revapi486;
            tpj(document).ready(function() {
                if (tpj("#rev_slider_one").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_one");
                } else {
                    revapi486 = tpj("#rev_slider_one").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "{{URL::asset('assets2/plugins/revolution/js/')}}",
                        sliderLayout: "fullwidth",
                        dottedOverlay: "yes",
                        delay: 100000000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                touchOnDesktop: "off",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                style: "metis",
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 600,
                                hide_onleave: false,
                                tmp: '',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 0,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 0,
                                    v_offset: 0
                                }
                            }

                        },
                        responsiveLevels: [1200, 1040, 778, 480],
                        visibilityLevels: [1200, 1040, 778, 480],
                        gridwidth: [1170, 1040, 778, 600],
                        gridheight: [850, 850, 850, 950],
                        lazyType: "none",
                        parallax: {
                            type: "scroll",
                            origo: "enterpoint",
                            speed: 400,
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55]
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "on",
                        stopAfterLoops: 0,
                        stopAtSlide: 0,
                        disableProgressBar: "on",
                        shuffle: "off",
                        autoHeight: "off",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                }
            }); /*ready*/

        </script>

        <script>
            $('.slick-lancers2').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                arrows: true,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }]
            });

        </script>

        <!-- MAIN JS -->

        <!-- MAIN JS -->

    </div>
    <!-- Wrapper / End -->
<script>
    let active =document.getElementById("Active");
    let x=1;
    function show(){
        if(x){
        active.classList.add("active");
        x--
        }else{
        active.classList.remove("active");
        x++
        }
    }
</script>
</body>

</html>