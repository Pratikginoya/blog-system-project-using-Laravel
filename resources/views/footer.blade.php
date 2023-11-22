<?php 

$conn = mysqli_connect('localhost','root','','blog_system_project');

$recent = "select * from blog_details where status='Live' order by blog_id desc";
$data = mysqli_query($conn,$recent);

$popular = "select blog_like_id from like_blog group by blog_like_id order by count(*) desc limit 1";
$data_p = mysqli_query($conn,$popular);

while($row = mysqli_fetch_assoc($data_p))
{
    $blog_id = $row['blog_like_id'];
}

$most_like = "select * from blog_details where blog_id = $blog_id and status='Live'";
$data_m_l = mysqli_query($conn,$most_like);
 ?>
   <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Recent Posts</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">

                                <?php $i=0; while($row = mysqli_fetch_assoc($data)) { ?>
                                    <a href="blog_details/<?php echo $row['blog_id']; ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="site_images/<?php echo $row['image_main']; ?>" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1"><?php echo $row['title'];?></h5>
                                            <small><?php echo $row['created_at']; ?></small>
                                        </div>
                                    </a>
                                <?php $i++; if($i==4){break;} } ?>
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Most Liked Post</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                     <?php $i=0; while($row = mysqli_fetch_assoc($data_m_l)) { ?>
                                    <a href="blog_details/<?php echo $row['blog_id']; ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="site_images/<?php echo $row['image_main']; ?>" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1"><?php echo $row['title'];?></h5>
                                            <small><?php echo $row['created_at']; ?></small>
                                        </div>
                                    </a>
                                <?php $i++; if($i==4){break;} } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget-no-style">
                                <div class="newsletter-widget text-center align-self-center">
                                    <h3>Subscribe Today!</h3>
                                    <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                                    <form class="form-inline" method="post">
                                        <input type="text" name="email" placeholder="Add your email here.." required class="form-control" />
                                        <input type="submit" value="Subscribe" class="btn btn-default btn-block" />
                                    </form>         
                                </div><!-- end newsletter -->
                            </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <br>
                        <div class="copyright">&copy; Markedia. Design: <a href="http://html.design">HTML Design</a>.</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="dmtop"> TOP </div>
        
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/tether.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/animate.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    <script type="text/javascript">
        
        $(document).ready(function(){

            $('#add_like').click(function(){

                var like = $(this).attr('attr_id');

                // alert(like);
                $.ajax({

                    type:"get",
                    url:"/like_ajax",
                    data:{"_token":"{{csrf_token()}}","blog_id":like},

                    success:function(res)
                    {
                        $('.change_after_like').html(res);
                    }
                });
            });

            $('.delete_comment').click(function(){

                var c_id = $(this).attr('attr_id');
                var b_id = $(this).attr('attr_blog_id');

                // alert(c_id);

                $.ajax({

                    type:"get",
                    url:"/delete_comment",
                    data:{"_token":"{{csrf_token()}}","c_id":c_id,"b_id":b_id},

                    success:function(res)
                    {
                        $('#comment_data').html(res);
                    }
                });
            });
        });

    </script>
</body>
</html>

