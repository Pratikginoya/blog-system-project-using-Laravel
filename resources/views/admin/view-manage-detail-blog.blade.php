@include('admin/header')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Details of Blog (Approve or Reject the Blog)</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @foreach($arr as $blog)
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Details of Blog to Approve or Reject</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <table id="example2" class="table table-bordered">
                  
                  <tr>
                    <th>Blog ID</th>
                    <td>{{$blog->blog_id}}</td>
                  </tr>
                  <tr>
                    <th>Blog Status</th>
                    <td>{{$blog->status}}</td>
                  </tr>
                  <tr>
                    <th>Upload Time</th>
                    <td>{{$blog->created_at}}</td>
                  </tr>
                  <tr>
                    <th>Blog Title</th>
                    <td>{{$blog->title}}</td>
                  </tr>
                  <tr>
                    <th>Short Details</th>
                    <td>{{$blog->s_details}}</td>
                  </tr>
                  <tr>
                    <th>Full Details</th>
                    <td>{{$blog->f_details}}</td>
                  </tr>
                  <tr>
                    <th>Slogan</th>
                    <td>{{$blog->slogan}}</td>
                  </tr>
                  <tr>
                    <th>Tag / Topic</th>
                    <td>{{$blog->tag}}</td>
                  </tr>
                  <tr>
                    <th>Image_1 (Main)</th>
                    <td align="center">
                         <div style="width: 250px; height: 200px;"><img src="{{asset('site_images/'.$blog->image_main)}}" style="height: 100%; width: 100%; object-fit: cover; object-position: top;"></td></div>
                    </td>
                  </tr>

                  @if($blog->image_2!="")
                  <tr>
                    <th>Image_2</th>
                    <td align="center">
                         <div style="width: 250px; height: 200px;"><img src="{{asset('site_images/'.$blog->image_2)}}" style="height: 100%; width: 100%; object-fit: cover; object-position: top;"></td></div>
                    </td>
                  </tr>
                  @endif

                  @if($blog->image_3!="")
                  <tr>
                    <th>Image_3</th>
                    <td align="center">
                         <div style="width: 250px; height: 200px;"><img src="{{asset('site_images/'.$blog->image_3)}}" style="height: 100%; width: 100%; object-fit: cover; object-position: top;"></td></div>
                    </td>
                  </tr>
                  @endif

                  <tr>
                    <td align="center" colspan="2">
                      <form method="post" class="m-auto">
                        @csrf
                          <input type="radio" name="status" value="Approve"> Approve &nbsp;
                          <input type="radio" name="status" value="Reject"> Reject
                          <br><br>
                          <input type="submit" class="btn btn-primary" value="Approve or Reject Blog" name="change_status">
                      </form>
                    </td>
                  </tr>
                  </table>

                  <a href="/admin/manage-blog" class="btn btn-primary">Back to Blog for Approval</a>
 
            </div>
            <!-- /.card -->
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endforeach

  </div>
  <!-- /.content-wrapper -->

  @include('admin/footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin/scripts')