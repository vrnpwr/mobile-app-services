@extends('layouts.master')

    @section('title')
    Category
    @endsection
    <?php $sidebarTab ='testimonials';  ?>
    @section('content')

        <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Testimonial</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Testimonial</li>
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
              <h3 class="card-title">Add Testimonial</h3>
            </div>
            <!-- /.card-header -->
            <form action="{{ action('TestimonialsController@store')}}" method="post" accept-charset="UTF-8">

              {{ csrf_field() }}

              <div class="card-body">
                <div class="form-group">
                  <div class="col-4">
                    <label>Author name</label>                    
                  </div>
                  <input type="text" name="name" class="form-control" placeholder="Image Name">
                </div>
                <div class="form-group">
                  <label>Author Designation</label>
                  <input type="text" name="designation" class="form-control" placeholder="author designation">
                </div>
                <div class="form-group">
                  <label>Author Review</label>
                  <input type="text" name="review" class="form-control" placeholder="author review">
                </div>
                <div class="form-group">
                  <label>Star rating</label>
                  <input type="text" name="rating" class="form-control" placeholder="author rating">
                </div>                
    			<div class="form-control">
    				<label>Author Image</label>
    				<input type="file" name="image" >
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