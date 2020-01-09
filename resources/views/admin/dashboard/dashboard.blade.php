@extends('layouts.master')

@section('title')
Category
@endsection
  <?php $sidebarTab ='';  ?>
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
              <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v2</li>
              </ol> -->
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
          <div class="row">
            <div class="col-md-4">
              <!-- Info Boxes Style 2 -->
              <div class="info-box mb-3 bg-warning">
                <span class="info-box-icon"><i class="fa fa-tag"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Slider Setting</span>
                  <span class="info-box-number">5,200</span>
                </div>
                <!-- /.info-box-content -->
              </div>
            </div>
            <div class="col-md-4">            
              <!-- /.info-box -->
              <div class="info-box mb-3 bg-success">
                <span class="info-box-icon"><i class="fas fa-blog"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Blogs</span>
                  <span class="info-box-number">92,050</span>
                </div>
                <!-- /.info-box-content -->
              </div>
            </div>
            <div class="col-md-4">
              <!-- /.info-box -->
              <div class="info-box mb-3 bg-danger">
                <span class="info-box-icon"><i class="fas fa-portrait"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Portfolio</span>
                  <span class="info-box-number">114,381</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-md-4">            
              <div class="info-box mb-3 bg-info">
                <span class="info-box-icon"><i class="fas fa-exchange-alt"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Enquires</span>
                  <span class="info-box-number">163,921</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->

      </section>
      <!-- /.content -->
      <!-- ##################### Content ################ -->
    </div>

@endsection