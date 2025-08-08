<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />

    <!-- Site Title -->
    <title>{{ config('app.name') }} </title>

    <!-- Place favicon.ico in the root directory -->
    {{--   <link rel="apple-touch-icon" href=" {{asset('frontend/assets/img/favicon.png')}} " />--}}
    {{--   <link rel="shortcut icon" type="image/png" href="{{asset('frontend/assets/img/favicon.png')}}" />--}}

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome-pro.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon_gerold.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/backToTop.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/odometer-theme-default.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/light-mode.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    <style>
        .btn.tj-btn-primary {
            position: relative;
        }

        .btn.tj-btn-primary::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px; /* Changed from 2px to 1px */
            bottom: 0;
            left: 50%;
            background-color: #fff;
            transition: all 0.3s ease-in-out;
        }

        .btn.tj-btn-primary:hover::after {
            width: 100%;
            left: 0;
        }


    </style>
</head>

<body>
<!-- Preloader Area Start -->
<div class="preloader">
    <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
        <path id="preloaderSvg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
    </svg>

    <div class="preloader-heading">
        <div class="load-text">
            <span>L</span>
            <span>o</span>
            <span>a</span>
            <span>d</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>
        </div>
    </div>
</div>
<!-- Preloader Area End -->

<!-- start: Back To Top -->
<div class="progress-wrap" id="scrollUp">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- end: Back To Top -->

<!-- HEADER START -->
{{--        @include('frontend.partials.header')--}}
<!-- HEADER END -->

<main class="site-content" id="content">
<section class="breadcrumb_area" data-bg-image="{{ asset('frontend/assets/img/breadcrumb/breadcrumb-bg.jpg') }}" data-bg-color="#140C1C">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col text-center">
                <div class="breadcrumb_content d-inline-flex flex-column align-items-center">
                    <h2 class="title wow fadeInUp" data-wow-delay=".3s">Search Results for "{{ $query }}"</h2>
                    <span class="breadcrumb_navigation wow fadeInUp" data-wow-delay=".5s">
                             </span>
                    <span class="header-button ms-3">
                            <a href="{{ url('/blog') }}" class="btn tj-btn-primary">Blog</a>
                        </span>&nbsp;&nbsp;&nbsp;

                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: Breadcrumb Area -->

<!-- START: Blog Section -->
<section class="full-width tj-post-details__area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @if ($posts->isNotEmpty())
                    @foreach ($posts as $post)
                        @php $comments = App\Models\Comment::where('post_id', $post->id)->where('status', 1)->get(); @endphp
                        <div class="blog-item wow fadeInUp" data-wow-delay=".5s">
                            <div class="blog-thumb">
                                <a href="/post/details/{{ $post->post_slug }}">
                                    <img src="{{ asset($post->photo) }}" alt="" />
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul class="ul-reset">
                                        <li><i class="fa-light fa-calendar-days"></i> {{ $post->created_at->format('D M, Y') }} </li>
                                        <li><i class="fa-light fa-comments"></i> <a href="#">Comment ({{ count($comments ?? []) }})</a></li>
                                    </ul>
                                </div>
                                <h3 class="blog-title"><a href="/post/details/{{ $post->post_slug }}">{{ Str::limit($post->post_title, 40) }}</a></h3>
                            </div>
                        </div>
                    @endforeach
                    {{ $posts->links() }}
                @else
                    <p>No Post found!! </p>
                @endif
            </div>
            <div class="col-lg-4">
                <div class="tj_main_sidebar">
                    <div class="sidebar_widget tj_recent_posts wow fadeInUp" data-wow-delay=".3s">
                        <div class="widget_title">
                            <h3 class="title">Recent post</h3>
                        </div>
                        <ul>
                            @foreach ($rposts as $rpost)
                                @php $comments = App\Models\Comment::where('post_id', $rpost->id)->where('status', 1)->get(); @endphp
                                <li>
                                    <div class="recent-post_thumb">
                                        <a href="/post/details/{{ $rpost->post_slug }}">
                                            <img src="{{ asset($rpost->photo) }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="recent-post_content">
                                        <div class="tj-post__meta entry-meta">
                                            <span><i class="fa-light fa-calendar-days"></i> {{ $rpost->created_at->format('M, Y') }} </span>
                                            <span><i class="fa-light fa-comments"></i><a href="#"> ({{ count($comments) }})</a></span>
                                        </div>
                                        <h4 class="recent-post_title">
                                            <a href="/post/details/{{ $rpost->post_slug }}">{{ Str::limit($rpost->post_title,30)}}</a>

                                            <h4 class="recent-post_title">
                                                <a href="/post/details/{{ $rpost->post_slug }}">{{ Str::limit($rpost->post_title, 30) }}</a>
                                            </h4>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- END: Blog Section -->

<!-- END: Blog Section -->


</main>

<!-- FOOTER AREA START -->
@include('frontend.partials.footer')
<!-- FOOTER AREA END -->

<!-- CSS here -->
<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/nice-select.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/backToTop.js')}}"></script>
<script src="{{asset('frontend/assets/js/smooth-scroll.js')}}"></script>
<script src="{{asset('frontend/assets/js/appear.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/gsap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/one-page-nav.js')}}"></script>
<script src="{{asset('frontend/assets/js/lightcase.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/swiper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/imagesloaded-pkgd.js')}}"></script>
<script src="{{asset('frontend/assets/js/isotope.pkgd.min.j')}}s"></script>
<script src="{{asset('frontend/assets/js/odometer.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/magnific-popup.js')}}"></script>
<script src="{{asset('frontend/assets/js/validate.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/main.js')}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>
</body>
</html>

