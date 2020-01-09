    @extends('layouts.master')
    @section('title')
    Category
    @endsection
    <?php $sidebarTab ='services';  ?>
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
                <li class="breadcrumb-item active">Services</li>
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
              <h3 class="card-title">Services Listing</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <a href="/services/create" class="btn btn-default mb-1">Add Services</a>

              @if(count($services) > 0)
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Sr No.</th>
                    <th>Services Title</th>
                    <th>Services Content</th>
                    <th>Action</th>
                  </tr>
                </thead>
                @foreach($services as $service)
                <tbody>
                  <td>1</td>
                  <td>{{ $service->title }}</td>
                  <td>{{ $service->content }}</td>
                  <td>
                  <a href="/services/{{$service->id}}/edit" class="btn btn-info float-left" >Edit</a>
                  
                  <form action="{{ action('ServicesController@destroy',$service->id) }}" method="POST" class="float-right">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-danger" name="" value="delete">
                  </form>
                  </td>
                </tbody>  
                @endforeach
              </table>
              @else
              <p>Nothing To display</p>
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