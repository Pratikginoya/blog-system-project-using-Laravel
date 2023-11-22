@include('header')

        <div class="page-title db">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2>Add Your Blog Now <small class="hidden-xs-down hidden-sm-down">Nulla felis eros, varius sit amet volutpat non. </small></h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Add New Blog</li>
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
                            <div class="row">
                                 <div class="col-lg-6">
                                    <h4>Before Adding The Blog</h4>
                                    <p>Please fillup all below mentioned details of your blog. Make sure that do not mention any unsubjected details becuase it will be reviewed by the Admin before live.</p>
                                </div>

                                <div class="col-lg-6">
                                    <h4>After Adding The Blog</h4>
                                    <p>Blog will be reviewed by the Admin after your submission and it will be live after approval of Admin. If anything found unsubjected then blog will be rejected by the admin.</p>
                                </div>                               
                            </div><!-- end row -->

                            <hr class="invis">

                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form-wrapper" method="post" enctype="multipart/form-data">
                                        @csrf
                                    <h3 class="mb-4">Blog Details</h3>
                                        <label>Title of Blog*</label>
                                        <input type="text" class="form-control" placeholder="Blog Title" name="title" required maxlength="50">
                                        
                                        <label>Short Details of Blog*</label>
                                        <textarea class="form-control" placeholder="Short details about blog" required rows="3" maxlength="250" name="s_details"></textarea>

                                        <label>Full Details of Blog*</label>
                                        <textarea class="form-control" placeholder="Full details about blog" required rows="3" maxlength="1500" name="f_details"></textarea>

                                        <label>Slogan About the Blog (Optional)</label>
                                        <textarea class="form-control" placeholder="Slogn about blog"  rows="3" maxlength="250" name="slogan"></textarea>

                                        <label>Select Tag of Your Blog*</label>
                                        <select class="form-control" required name="tag">
                                            <option disabled>-Select Blog Tag-</option>
                                            <option>Fashion</option>
                                            <option>Life Style</option>
                                            <option>Sports</option>
                                            <option>Fitness</option>
                                            <option>Travel</option>
                                            <option>Business</option>
                                            <option>Marketing</option>
                                            <option>Financial</option>
                                            <option>News</option>
                                            <option>Politics</option>
                                            <option>Music and Movies</option>
                                            <option>Entertainment</option>
                                            <option>Blogging</option>
                                            <option>Case Study</option>
                                            <option>Other</option>
                                        </select>

                                        <label>Main Image*</label>
                                        <input type="file" class="form-control" placeholder="Blog Title" name="image_main" required>

                                        <label>Image 2 (Optional)</label>
                                        <input type="file" class="form-control" placeholder="Blog Title" name="image_2">

                                        <label>Image 3 (Optional)</label>                                      
                                        <input type="file" class="form-control" placeholder="Blog Title" name="image_3">

                                        <input type="submit" class="btn btn-primary" value="Submit Blog" name="submit_blog">
                                    </form>
                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

@include('footer')