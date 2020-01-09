    @extends('layouts.master')
    @section('title')
    Category
    @endsection
    <?php $sidebarTab ='slider';  ?>
    @section('content')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v2</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <!-- ##################### Content ################ -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Add Slides</h3>
            </div>
            <!-- /.card-header -->
            <form id="form-add-slider" action="{{ action('SliderController@store')}}" method="post" accept-charset="UTF-8">

              {{ csrf_field() }}

              <div class="card-body">
                <div class="form-group">
                  <div class="col-4">
                    <label>Image Name</label>                    
                  </div>
                  <input type="text" name="name" class="form-control" placeholder="Image Name">
                </div>
                <div class="form-group">
                  <label>Image Url</label>
                  <input type="file" name="image" multiple="">
                  <input type="hidden" id="hiddenPond" name="image">
                </div>
                <div class="form-group">
                  <label>Order No</label>
                  <input type="text" name="order_no" class="form-control" placeholder="Order No">
                </div>
                
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary" id="call">Add</button>
              </div>
            </form>
            <!-- /.card-body -->
          </div>

          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
      <!-- ##################### Content ################ -->
    </div>

    @endsection