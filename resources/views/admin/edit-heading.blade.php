@include('admin/header')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Website Heading</h1>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Website Heading</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($arr as $heading)
              <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Edit Title of Website Heading</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title of Website Heading" name="title" maxlength="100" required value="{{$heading->title}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Edit Details of Website Heading</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Some Details of Website Heading" name="details" maxlength="250" required value="{{$heading->details}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Select New Image of Website Heading</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                    </div> 
                  </div>

                  <label for="exampleInputFile">Current Image of Website Heading</label>
                  <div style="width: 200px; height: 200px;">
                      <img src="{{asset('site_images/'.$heading->image)}}" style="height: 100%; width: 100%; object-fit: cover;">
                  </div>
 
                </div>
                <!-- /.card-body -->
           
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="edit_heading" value="Submit">
                </div>
              </form>
              @endforeach
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