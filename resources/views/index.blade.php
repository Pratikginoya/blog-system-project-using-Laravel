@include('header')

        @foreach($arr_2 as $heading)
        <section id="cta" class="section" style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('../site_images/{{$heading->image}}')!important;">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-8 col-md-12 align-self-center">
                        <h2>{{$heading->title}}</h2>
                        <p class="lead">{{$heading->details}}</p>
                        <a href="/add_blog" class="btn btn-primary">Add Blog</a>
                    </div>
                    
                </div>
            </div>
        </section>
        @endforeach

        <section class="section lb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-custom-build">

                            @foreach($arr as $blog)
                                <div class="blog-box wow fadeIn">
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
                    
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widget-title">Recent Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <?php $i=0; ?>
                                        @foreach($recent as $recent_blog)
                                        <a href="/blog_details/{{$recent_blog->blog_id}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="{{asset('site_images/'.$recent_blog->image_main)}}" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">{{$recent_blog->title}}</h5>
                                                <small>{{$recent_blog->created_at}}</small>
                                            </div>
                                        </a>
                                        <?php $i++; if($i==3){break;} ?>
                                        @endforeach
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->
                            
                            <div class="widget">
                                <h2 class="widget-title">Popular Categories Blog Live</h2>
                                <div class="link-widget">
                                    <ul>
                                        <li><a href="#" class="disabled-link">Fashion <span>({{$fash}})</span></a></li>
                                        <li><a href="#" class="disabled-link">Life Style <span>({{$life}})</span></a></li>
                                        <li><a href="#" class="disabled-link">Sports <span>({{$sports}})</span></a></li>
                                        <li><a href="#" class="disabled-link">Fitness <span>({{$fit}})</span></a></li>
                                        <li><a href="#" class="disabled-link">Travel <span>({{$tra}})</span></a></li>
                                        <li><a href="#" class="disabled-link">Business <span>({{$buss}})</span></a></li>
                                        <li><a href="#" class="disabled-link">Financial <span>({{$fin}})</span></a></li>
                                        <li><a href="#" class="disabled-link">News <span>({{$news}})</span></a></li>
                                        <li><a href="#" class="disabled-link">Politics <span>({{$poli}})</span></a></li>
                                        <li><a href="#" class="disabled-link">Music and Movies <span>({{$music}})</span></a></li>
                                        <li><a href="#" class="disabled-link">Entertainment <span>({{$ent}})</span></a></li>
                                        <li><a href="#" class="disabled-link">Blogging <span>({{$blo}})</span></a></li>
                                        <li><a href="#" class="disabled-link">Case Study <span>({{$case}})</span></a></li>
                                        <li><a href="#" class="disabled-link">Other <span>({{$other}})</span></a></li>
                                    </ul>
                                </div><!-- end link-widget -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

@include('footer')