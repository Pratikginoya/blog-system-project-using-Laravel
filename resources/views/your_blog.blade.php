@include('header')

        <div class="page-title db">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2>Your Blogs with Status <small class="hidden-xs-down hidden-sm-down">Nulla felis eros, varius sit amet volutpat non. </small></h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Your Blogs</li>
                        </ol>
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section lb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 m-auto">
                        <div class="page-wrapper">
                            <div class="blog-custom-build">

                                @foreach($arr as $blog)
                                <div class="blog-box wow fadeIn"> 
                                        @if($blog->status=="Live")
                                            <h5 class="text-center mb-4" style="color: green;">
                                                {{$blog->status}}
                                            </h5>
                                        @else
                                            <h5 class="text-center mb-4" style="color: red;">
                                                {{$blog->status}}
                                            </h5>
                                        @endif
                                    <div class="post-media">
                                        <a href="/blog_details/{{$blog->blog_id}}" title="">
                                            <img src="{{asset('site_images/'.$blog->image_main)}}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div>
                                            <!-- end hover -->
                                        </a>
                                    </div>
                                    <!-- end media -->
                                    <div class="blog-meta big-meta text-center">
                                        <div class="post-sharing">
                                            <ul class="list-inline">
                                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div><!-- end post-sharing -->
                                        <h4><a href="/blog_details/{{$blog->blog_id}}" title="">{{$blog->title}}</a></h4>
                                        <p>{{$blog->s_details}}</p>
                                        <small>{{$blog->tag}}</small>
                                        <small>{{$blog->created_at}}</small>
                                        <small>{{$blog->name}}</small>
                                        <small><i class="fa fa-thumbs-up"></i> {{$blog->likes}}</small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">
                                @endforeach

                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    {{$arr->links('pagination/your_blog_pagi')}}
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                   
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

@include('footer')
