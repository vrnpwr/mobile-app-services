     @extends('layouts.master')

     @section('title')
     Category
     @endsection
     <?php $sidebarTab ='enquiries';  ?>
     @section('content')

     <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Services</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Enquiry</li>
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
              <h3 class="card-title">Add Services</h3>
            </div>
            <!-- /.card-header -->
            <form action="{{ action('EnquiriesController@store')}}" method="post" accept-charset="UTF-8">

              {{ csrf_field() }}

              <div class="card-body">
                <div class="form-group">
                  <div class="col-4">
                    <label>Enquiry First Name</label>                    
                  </div>
                  <input type="text" name="first_name" class="form-control" placeholder="First Name">
                </div>

                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                </div>

                <div class="form-group">
                  <label>Subject</label>
                  <input type="text" name="subject" class="form-control" placeholder="Subject">
                </div>
                
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add</button>
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