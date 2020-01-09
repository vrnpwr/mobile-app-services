    @extends('layouts.master')

    @section('title')
    Category
    @endsection
    <?php $sidebarTab ='blogs';  ?>
    @section('content')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Blogs</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blogs</li>
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
              <h3 class="card-title">Add Blogs</h3>
            </div>
            <!-- /.card-header -->
            <form action="{{ action('BlogsController@store')}}" method="post" accept-charset="UTF-8">

              {{ csrf_field() }}

              <div class="card-body">
                <div class="form-group">              
                  <label>Blog Name</label>       
                  <input type="text" name="name" class="form-control" placeholder="Blog Name">
                </div>
                <div class="form-group">              
                  <label>Blog Description</label>       
                  <textarea name="description" class="form-control summernote" ></textarea>
                </div>
                <div class="form-group">
                  <label>Order No</label>
                  <input type="text" name="order_no" class="form-control" placeholder="Order No">
                </div>
                <div class="form-group">
                  <label>SEO Title</label>
                  <input type="text" name="title" class="form-control" placeholder="SEO Title">
                </div>
                <div class="form-group">
                  <label>SEO Keyword</label>
                  <input type="text" name="seo_keyword" class="form-control" placeholder="SEO Keyword">
                </div>
                <div class="form-group">
                  <label>SEO Description</label>
                  <input type="text" name="seo_description" class="form-control" placeholder="SEO Description">
                </div>
                <div class="form-group">
                  <label>Blog Image</label>
                  <input type="file" name="image">
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