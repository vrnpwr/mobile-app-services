
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
          <h1 class="m-0 text-dark">Slider</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Slider </li>
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
          <h3 class="card-title">Slider Listing</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <a href="/slider/create" class="btn btn-default mb-1">Add Slider</a>
          @if(count($sliders) > 0)
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="width: 10%;">Sr No</th>
                <th style="width: 10%;">Slider Name</th>
                <th style="width: 50%;">Image</th>
                <th style="width: 10%;">Order No</th>
                <th style="width: 10%;">Action</th>
              </tr>
            </thead>
            @foreach($sliders as $key => $slider)
            <tbody>
              <td style="width: 10%;">{{ $key+1}}</td>
              <td style="width: 10%;">{{ $slider->name}}</td>
              <td style="width: 50%;">
                <div> 
                  <?php $img = explode(',', $slider->image); ?>
                  @foreach($img as $key=>$value)
                  @if(!empty($value))
                  <img src="/images/{{ $value }}" style="width: 100px; height: 70px;">
                  @endif
                  @endforeach
                </div>
              </td>
              <td style="width: 10%;">{{ $slider->order_no}}</td>
              <td style="width: 10%;" class="d-flex">
                <a href="/slider/{{$slider->id}}/edit" class="btn btn-info float-left" >Edit</a>
                
                <form action="{{ action('SliderController@destroy',$slider->id) }}" method="POST" class="float-right">
                  {{ method_field('DELETE') }}
                  {{ csrf_field() }}
                  <input type="submit" class="btn btn-danger" name="" value="delete">
                </form>
                <!-- <a href="/slider/{{$slider->id}}"><i class="fa fa-trash"></i></a> -->
              </td>
            </tbody>  
            @endforeach
          </table>
          @else
          <p>Nothing to display</p>
          @endif
          
          
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <!-- /.card -->
          <!-- DIRECT CHAT -->

          <!-- /.card -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">


        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  <!-- ##################### Content ################ -->
</div>

@endsection