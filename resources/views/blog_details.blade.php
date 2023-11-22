@include('header')

        <section class="section lb m3rem">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                        @foreach($arr as $blog)
                            <div class="blog-title-area">
                                
                                <ol class="breadcrumb hidden-xs-down">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active">{{$blog->title}}</li>
                                </ol>
                                

                                <span class="color-yellow"><a href="" title="" class="disabled-link">{{$blog->tag}}</a></span>

                                <h3>{{$blog->title}}</h3>

                                <div class="blog-meta big-meta">
                                    <small>{{$blog->tag}}</small>
                                    <small>{{$blog->created_at}}</small>
                                    <small>{{$blog->name}}</small>
                                </div><!-- end meta -->

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="{{asset('site_images/'.$blog->image_main)}}" alt="" class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">  
                                <div class="pp">
                                    <p>{{$blog->s_details}}</p>

                                    <h3><strong>{{$blog->slogan}}</strong></h3>
                                </div><!-- end pp -->

                                @if($blog->image_2=="")
                                @else
                                <img src="{{asset('site_images/'.$blog->image_2)}}" alt="" class="img-fluid img-fullwidth">
                                @endif

                                <div class="pp">
                                    <p>{{$blog->f_details}}</p>
                                </div>

                                @if($blog->image_3=="")
                                @else
                                <img src="{{asset('site_images/'.$blog->image_3)}}" alt="" class="img-fluid img-fullwidth">
                                @endif
                            </div><!-- end content -->

                        @if($blog->status=="Live")
                            @if (session()->has('user_login'))
                            <div class="blog-title-area">
                                <div class="tag-cloud-single change_after_like">
                                    <span>Like Blog</span>

                                    @if($like_count>0)
                                    <small class="like_blog"><a href="javascript:void(0)" attr_id="{{$blog->blog_id}}" id="add_like" class="disabled-link"><i class="fa fa-thumbs-up" style="color: blue"></i></a> <spans> {{$like}} </spans> </small>
                                    @else
                                    <small class="like_blog"><a href="javascript:void(0)" attr_id="{{$blog->blog_id}}" id="add_like"><i class="fa fa-thumbs-up"></i></a> <spans id="total_like"> {{$like}} </spans> </small>
                                    @endif
                                </div><!-- end meta -->
                            </div><!-- end title -->
                            @endif
                        @endif
                            <hr class="invis1">

                            <div class="custombox authorbox clearfix">
                                <h4 class="small-title">About author</h4>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <img src="{{asset('site_images/'.$blog->profile_pic)}}" alt="" class="img-fluid rounded-circle"> 
                                    </div><!-- end col -->

                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <h4>{{$blog->name}}</h4>
                                        <p>{{$blog->about_you}}</p>

                                        <div class="topsocial">
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Website"><i class="fa fa-link"></i></a>
                                        </div><!-- end social -->

                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end author-box -->

                            <hr class="invis1">
                        @endforeach


                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">3 Comments</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="comments-list" id="comment_data">

                                @foreach($cmt as $comment)
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="{{asset('site_images/'.$comment->profile_pic)}}" alt="" class="rounded-circle">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading user_name">{{$comment->name}}<small>{{$comment->created_at}}</small></h4>
                                        <p>{{$comment->cmt}}</p>
                                        @if(Session::get('user_login')==$comment->user_cmt_id)
                                        <a href="javascript:void(0)" attr_id="{{$comment->cmt_id}}" attr_blog_id="{{$comment->blog_cmt_id}}" class="btn btn-primary btn-sm delete_comment">Delete Comment</a>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                        
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end custom-box -->

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">Leave a Comment</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        @foreach($arr as $blog)

                                        @if($blog->status=="Live")
                                        <form class="form-wrapper" method="post">
                                            @csrf
                                            <textarea class="form-control" placeholder="Your comment" name="comment"></textarea>
                                            <input type="submit" class="btn btn-primary" value="Submit Comment" name="comment_send">
                                        </form>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
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
                                        <?php $i++; if($i==5){break;} ?>
                                        @endforeach
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Popular Categories</h2>
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