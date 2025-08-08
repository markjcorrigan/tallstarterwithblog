<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Hey there! I’m Mustapha, I studied computer science for 4 years at AL-QALAM University Katsina, graduated in 2022 atfer completing Information Technology Developer (ITD) program at Legacy Computer Institute kaduna. I design and develop services for customers of all sizes, specialized in creating stylish, modern websites / web applications, web services and online stores" />

    <!-- Site Title -->
    <title>{{ config('app.name') }} </title>

    <!-- Place favicon.ico in the root directory -->
{{--    <link rel="apple-touch-icon" href=" {{asset('frontend/assets/img/favicon.png')}} " />--}}
{{--    <link rel="shortcut icon" type="image/png" href="{{asset('frontend/assets/img/favicon.png')}}" />--}}

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
{{--    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>--}}
{{--    <--NB valid Api key needed-->--}}

    <script src="https://cdn.jsdelivr.net/npm/tinymce@6/tinymce.min.js"></script>


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
<main class="site-content" id="content">

    <!-- START: Breadcrumb Area -->
    <section class="breadcrumb_area" data-bg-image="{{ asset('frontend/assets/img/breadcrumb/breadcrumb-bg.jpg') }}"
             data-bg-color="#140C1C">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb_content d-flex flex-column align-items-center">
{{--                        <h2 class="title wow fadeInUp" data-wow-delay=".3s" style="text-align: center">{{ $post->post_title }}</h2>--}}
                        <div class="breadcrumb_navigation wow fadeInUp" data-wow-delay=".5s">
{{--                            <span><a href="/">Home</a></span>--}}
{{--                            <i class="far fa-long-arrow-right"></i>--}}
{{--                            <span class="current-item">Blog Details</span>--}}
                            <span class="breadcrumb_navigation wow fadeInUp" data-wow-delay=".5s">
                             </span>
                            <span class="header-button ms-3">
                            <a href="{{ url('/blog') }}" class="btn tj-btn-primary">Blog</a>
                        </span>&nbsp;&nbsp;&nbsp;
{{--                            <i class="far fa-long-arrow-right"></i>&nbsp;&nbsp;&nbsp;--}}
{{--                            <span class="current-item">Blog Details</span>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Breadcrumb Area -->

    <!-- START: Blog Section -->
    <section class="full-width tj-post-details__area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="tj-post-details__container">
                <form class="forms-sample" method="POST" action="{{ route('user.store.post') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="post_title" class="col-sm-3 col-form-label">Post Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('post_title') is-invalid @enderror" name="post_title" placeholder="Post Title" value="{{ old('post_title') }}" required>
                            @error('post_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="post_tags" class="col-sm-3 col-form-label">Post Tags <br>(CSV (Comma Separated Values))</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('post_tags') is-invalid @enderror" name="post_tags" placeholder="Tag1, Tag2 etc." value="{{ old('post_tags') }}" required>
                            @error('post_tags')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="post_description" class="col-sm-3 col-form-label">Post Content<br>(Use Format to change the color of the text etc.)</label>
                        <div class="col-sm-9">
                            <textarea class="form-control @error('post_description') is-invalid @enderror" id="tinymceExample" name="post_description" rows="10">{{ old('post_description') }}</textarea>
                            @error('post_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="post_photo" class="col-sm-3 col-form-label">Post Photo</label>
                        <div class="col-sm-9">
                            <input class="form-control @error('post_photo') is-invalid @enderror" name="post_photo" type="file" id="Image" required>
                            @error('post_photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <img id="ShowImage" src="{{ asset('uploads/no_image.jpg') }}" alt="" style="width: 90px; height: 90px">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary">Add Post</button>
                </form>
            </div>
        </div>
    </div>

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
    tinymce.init({
        selector: '#tinymceExample',
        height: 300,
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar: 'undo redo | blocks | bold italic forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help'
    });
</script>


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
