@extends('layouts.web_layout')
@section('content')
    <style>
        .post-title {
            font-size: 28px;
            color: #1bb1dc;
            font-family: "Montserrat", sans-serif;
            font-weight: 700;

        }
    </style>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">


            {{--                <h2>Blog</h2>--}}

        </div>
    </section><!-- End Breadcrumbs -->
    <div class="section">

        <div class="container">

            <div class="row">

                <div class="col-md-8">
                    <h3 class="post-title">{{ $post->title }}</h3>

                    <div class="section-row sticky-container">
                        <div class="main-post">
                            {!! $post->body !!}
                        </div>

                    </div>


                </div>


                <div class="col-md-4">




                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Most Read</h2>
                        </div>
                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img
                                        src="img/xwidget-1.jpg.pagespeed.ic.NYJjOYjv_V.webp" alt=""
                                        data-pagespeed-url-hash="3605550000"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And
                                        Development Tools</a></h3>
                            </div>
                        </div>
                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img
                                        src="img/xwidget-2.jpg.pagespeed.ic.cSUEAOhjjU.webp" alt=""
                                        data-pagespeed-url-hash="3900049921"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your
                                        Website
                                        Design Mockup Into Code Automatically</a></h3>
                            </div>
                        </div>
                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img
                                        src="img/xwidget-3.jpg.pagespeed.ic.5z-SP7IbT6.webp" alt=""
                                        data-pagespeed-url-hash="4194549842"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On
                                        The
                                        Backend Development Block!</a></h3>
                            </div>
                        </div>
                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img
                                        src="img/xwidget-4.jpg.pagespeed.ic.i3iWR0f20S.webp" alt=""
                                        data-pagespeed-url-hash="194082467"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And
                                        Development Tools</a></h3>
                            </div>
                        </div>
                    </div>


                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Featured Posts</h2>
                        </div>
                        <div class="post post-thumb">
                            <a class="post-img" href="blog-post.html"><img
                                        src="img/xpost-2.jpg.pagespeed.ic.DOAToGcDYE.webp" alt=""
                                        data-pagespeed-url-hash="361851009"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-3" href="#">Jquery</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use
                                        JQuery?</a></h3>
                            </div>
                        </div>
                        <div class="post post-thumb">
                            <a class="post-img" href="blog-post.html"><img
                                        src="img/xpost-1.jpg.pagespeed.ic.2GXRfHYjOg.webp" alt=""
                                        data-pagespeed-url-hash="67351088"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2" href="#">JavaScript</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against
                                        JavaScript-Based CPU Side-Channel Attacks</a></h3>
                            </div>
                        </div>
                    </div>


                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Catagories</h2>
                        </div>
                        <div class="category-widget">
                            <ul>
                                <li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
                                <li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
                                <li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
                                <li><a href="#" class="cat-3">CSS<span>35</span></a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="aside-widget">
                        <div class="tags-widget">
                            <ul>
                                <li><a href="#">Chrome</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">Tutorial</a></li>
                                <li><a href="#">Backend</a></li>
                                <li><a href="#">JQuery</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">JavaScript</a></li>
                                <li><a href="#">Website</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Archive</h2>
                        </div>
                        <div class="archive-widget">
                            <ul>
                                <li><a href="#">January 2018</a></li>
                                <li><a href="#">Febuary 2018</a></li>
                                <li><a href="#">March 2018</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection