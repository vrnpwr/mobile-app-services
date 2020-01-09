    @extends('layouts.master')

    @section('title')
    Category
    @endsection
    <?php $sidebarTab ='portfolio';  ?>
    @section('content')

<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Portfolio</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Portfolio</li>
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
              <h3 class="card-title">Add Portfolio</h3>
            </div>
            <!-- /.card-header -->
            <form action="{{ action('PortfolioController@store') }}" method="post" accept-charset="UTF-8">
              {{ csrf_field() }}
              <div class="card-body">
                <div class="form-group">
                  <div class="col-4">
                    <label >portfolio Title</label>                    
                  </div>
                  <input type="text" name="title" class="form-control" placeholder="portfolio Title">
                </div>
                <div class="form-group">
                  <label >portfolio Image</label>
                    <input type="file" name="image">
                </div>
                <div class="form-group">
                  <label >Portfolio Category</label>
                  <input type="text" name="category" class="form-control"  placeholder="Portfolio Category">
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