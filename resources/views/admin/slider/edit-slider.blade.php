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
                <li class="breadcrumb-item active">Edit Slider</li>
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
              <h3 class="card-title">Edit Slides</h3>
            </div>
            <!-- /.card-header -->
            <form action="{{ action('SliderController@update', $slider->id)}}" method="POST" accept-charset="UTF-8">
              {{ method_field('PUT') }}
              {{ csrf_field() }}

              <div class="card-body">
                <div class="form-group">
                  <div class="col-4">
                    <label>Image Name</label>                    
                  </div>
                  <input type="text" name="name" value="{{ $slider->name }}" class="form-control" placeholder="Image Name">
                </div>
                <div class="form-group">
                  <label>Image Url</label>
                  <div>
                    @if(!empty($slider))
                    <?php $img = explode(',', $slider->image) ?>
                      @foreach($img as $key=>$value)
                        @if(!empty($value))
                          <img src="/images/{{ $value }}" style="width: 100px; height: 70px;" >
                        @endif
                      @endforeach
                    @endif
                  </div>
                  <input type="file" value="" name="image" multiple="">
                </div>
                <div class="form-group">
                  <label>Order No</label>
                  <input type="text" value="{{ $slider->order_no }}" name="order_no" class="form-control" placeholder="Order No">
                </div>
                
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
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