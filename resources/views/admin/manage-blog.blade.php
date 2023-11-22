@include('admin/header')

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog Pending for Approval</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Blog for Approval</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover display_order_admin_page_change">
                  <thead>
                  <tr>
                    <th>Blog ID</th>
                    <th>Blog Status</th>
                    <th>Blog Date & Time</th>
                    <th>Title</th>
                    <th>User name</th>
                    <th>Image 1 (Main)</th>
                    <th>View More</th>
                  </tr>
                  </thead>
                  
                  @foreach($arr as $blog)
                   <tr>
                    <td>{{$blog->blog_id}}</td>
                    <td>{{$blog->status}}</td>
                    <td>{{$blog->created_at}}</td>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->name}}</td>
                    <td align="center">
                         <div style="width: 200px; height: 170px;"><img src="{{asset('site_images/'.$blog->image_main)}}" style="height: 100%; width: 100%; object-fit: cover; object-position: top;"></td></div>
                    </td>

                    <td><a href="/admin/view-manage-detail-blog/{{$blog->blog_id}}">View More</a></td>
                  </tr>
                  @endforeach

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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