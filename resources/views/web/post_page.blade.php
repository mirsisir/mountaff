@extends('layouts.web_layout')
@section('content')
    <style>
        .post-title {
            font-size: 28px;
            color: #1bb1dc;
            font-family: "Montserrat", sans-serif;
            font-weight: 700;

        }
         img {
            width: 100% !important;
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

                        @foreach ($randoms as $random )
                        <div class="post post-widget">
                            
                                    
                            <div class="post-body">
                                <h3 class="post-title"><a href="{{ route('blog.page',$random->slug) }}">
                                    {{$random->title}}
                                    </a></h3>
                            </div>
                        </div>
                        @endforeach
                      

                      
                    </div>


                   

                  




                </div>

            </div>

        </div>

    </div>
@endsection