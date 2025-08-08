<section class="blog-section" id="blog-section">
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
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="section-header text-center">





                <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">6 latest blogs</h2>
                 <br><br>
                 <span class="breadcrumb_navigation wow fadeInUp" data-wow-delay=".5s">
                             </span>
                 <span class="header-button ms-3">
                            <a href="{{ url('/') }}" class="btn tj-btn-primary">Home</a>
                        </span>&nbsp;&nbsp;&nbsp;
                 <i class="far fa-long-arrow-right"></i>
                 <span class="header-button ms-3">
                            <a href="{{ route('first.post') }}" class="btn tj-btn-primary">Blog Details</a>
                        </span>&nbsp;&nbsp;&nbsp;
                <p class="wow fadeInUp" data-wow-delay=".4s">
                    @auth
                        <span class="header-button ms-3">
                            <a href="{{ route('user.add.post') }}" class="btn tj-btn-primary">Share Your Ideas</a>
                        </span>&nbsp;&nbsp;&nbsp;
{{--                        <a href="{{ route('user.add.post') }}"><u>share your ideas</u></a>--}}
                    @endauth

                </p>
             </div>
          </div>
       </div>
       <div class="row">
{{--         @php--}}
{{--             $posts = App\Models\BlogPost::Latest()->limit(3)->get();--}}
{{--         @endphp--}}
           @php
               $posts = App\Models\BlogPost::where('approved', 1)->latest()->limit(6)->get();
           @endphp

       @unless (count($posts) == 0)
            @foreach ($posts as $post)
                  @php
                     $comments = App\Models\Comment::where('post_id', $post->id)->where('status', 1)->get();
                   @endphp
               <div class="col-lg-4 col-md-6">
                  <div class="blog-item wow fadeInUp" data-wow-delay=".5s">
                     <div class="blog-thumb">
                        <a href="/post/details/{{ $post->post_slug }}">
                           <img src="{{asset($post->photo)}}" alt="" />
                        </a>
{{--                        <a href="#" class="category">Tutorial</a>--}}
                     </div>

                     <div class="blog-content">
                        <div class="blog-meta">
                           <ul class="ul-reset">
                              <li><i class="fa-light fa-calendar-days"></i> {{ $post->created_at->format('D M, Y')}} </li>
                              <li><i class="fa-light fa-comments"></i> <a href="#">Comment ({{ count($comments) }})</a></li>
                           </ul>
                        </div>
                        <h3 class="blog-title"><a href="/post/details/{{ $post->post_slug }}">{{ Str::limit($post->post_title, 40) }}</a></h3>
                     </div>
                  </div>
               </div>
            @endforeach
         @else
            <p>No Post found!! 😌😌</p>
         @endunless


       </div>
    </div>
 </section>
