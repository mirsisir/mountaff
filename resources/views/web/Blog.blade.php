@extends('layouts.web_layout')
@section('content')
    <style>
        .post-title {
            font-size: 28px;
            color: #1bb1dc;
            font-family: "Montserrat", sans-serif;
            font-weight: 700;

        }

        .post-body {
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
        }

        .post-meta {
            text-transform: uppercase;
            font-weight: 400;
            text-align: justify-all;
        }

        .post-img {
            display: block;
        }

        .post-img img {
            width: 100%;
        }

        .aside-widget {
            margin-left: 20px;
        }

        ul, ol {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .category-widget ul li {

            padding-bottom: 10px;
            border-bottom: 1px solid #eceef2;
        }

        .category-widget ul li > a {
            display: block;
            -webkit-transition: .2s color;
            transition: .2s color;
            font-weight: 600;
        }


        .category-widget ul li > a > span {
            float: right;
            color: #fff;
            background-color: #212631;
            padding: 0 5px;
            font-weight: 600;
            border-radius: 2px;
        }

    </style>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">


                {{--                <h2>Blog</h2>--}}

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2>Most Recent Blog</h2>
                                </div>
                            </div>

                            @foreach($posts as $post)
                                <div class="col-md-12">
                                    <div class="post post-row">
                                        <div class="post-body">
                                            <div class="post-meta d-flex justify-content-between align-items-center">
                                                <a class="post-category cat-2" href="#">{{$post->category->title}}</a>
                                                <span class="post-date">{{$post->created_at}}</span>
                                            </div>
                                            <h3 class="post-title"><a
                                                        href="{{ route('blog.page',$post->slug) }}">{{ $post->title }}</a>
                                            </h3>
                                            @if($post->thumbnail)
                                                <a class="post-img " href="{{ route('blog.page',$post->slug) }}"><img
                                                            class="shadow rounded mb-2"
                                                            src="{{ $post->thumbnail }}"
                                                            alt=""></a>
                                            @endif
                                            <p>{!! $post->summary !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{ $posts->links() }}


                            {{--                            <div class="col-md-12">--}}
                            {{--                                <div class="post post-row">--}}
                            {{--                                    <a class="post-img" href="blog-post.html"><img--}}
                            {{--                                                src="img/xpost-6.jpg.pagespeed.ic.XqKLoKE85z.webp" alt=""--}}
                            {{--                                                data-pagespeed-url-hash="1539850693"--}}
                            {{--                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>--}}
                            {{--                                    <div class="post-body">--}}
                            {{--                                        <div class="post-meta">--}}
                            {{--                                            <a class="post-category cat-2" href="category.html">JavaScript</a>--}}
                            {{--                                            <span class="post-date">March 27, 2018</span>--}}
                            {{--                                        </div>--}}
                            {{--                                        <h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid--}}
                            {{--                                                On The Backend Development Block!</a></h3>--}}
                            {{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod--}}
                            {{--                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim--}}
                            {{--                                            veniam...</p>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}


                            {{--                            <div class="col-md-12">--}}
                            {{--                                <div class="post post-row">--}}
                            {{--                                    <a class="post-img" href="blog-post.html"><img--}}
                            {{--                                                src="img/xpost-1.jpg.pagespeed.ic.2GXRfHYjOg.webp" alt=""--}}
                            {{--                                                data-pagespeed-url-hash="67351088"--}}
                            {{--                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>--}}
                            {{--                                    <div class="post-body">--}}
                            {{--                                        <div class="post-meta">--}}
                            {{--                                            <a class="post-category cat-4" href="category.html">Css</a>--}}
                            {{--                                            <span class="post-date">March 27, 2018</span>--}}
                            {{--                                        </div>--}}
                            {{--                                        <h3 class="post-title"><a href="blog-post.html">CSS Float: A Tutorial</a></h3>--}}
                            {{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod--}}
                            {{--                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim--}}
                            {{--                                            veniam...</p>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}


                            {{--                            <div class="col-md-12">--}}
                            {{--                                <div class="post post-row">--}}
                            {{--                                    <a class="post-img" href="blog-post.html"><img--}}
                            {{--                                                src="img/xpost-2.jpg.pagespeed.ic.DOAToGcDYE.webp" alt=""--}}
                            {{--                                                data-pagespeed-url-hash="361851009"--}}
                            {{--                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>--}}
                            {{--                                    <div class="post-body">--}}
                            {{--                                        <div class="post-meta">--}}
                            {{--                                            <a class="post-category cat-3" href="category.html">Jquery</a>--}}
                            {{--                                            <span class="post-date">March 27, 2018</span>--}}
                            {{--                                        </div>--}}
                            {{--                                        <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use--}}
                            {{--                                                JQuery?</a></h3>--}}
                            {{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod--}}
                            {{--                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim--}}
                            {{--                                            veniam...</p>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            {{--                            <div class="col-md-12">--}}
                            {{--                                <div class="section-row">--}}
                            {{--                                    <button class="primary-button center-block">Load More</button>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="aside-widget text-center">
                            <a href="#" style="display: inline-block;margin: auto;">
                                <img class="img-responsive" src="img/xad-1.jpg.pagespeed.ic.qQJhsdJdF0.webp" alt=""
                                     data-pagespeed-url-hash="225625779"
                                     onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </a>
                        </div>


                        <div class="aside-widget">
                            <div class="section-title">
                                <h2>Catagories</h2>
                            </div>
                            <div class="category-widget">
                                <ul>
                                    @foreach($category as $c)
                                    <li><a href="#" class="cat-1">{{$c->title}}<span>-</span></a></li>
                                    @endforeach
                                
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->


@endsection