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
              <h1 class="m-0 text-dark">Dashboard</h1>
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
              <h3 class="card-title">Enquires Listing</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <a href="/enquiries/create" class="btn btn-default mb-1">Add Enquires</a>
              @if(count($enquiries))
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>First Enquiry Name</th>
                  <th>Last Name</th>
                  <th>Subject</th>
                  <th>Action</th>
                </tr>
                </thead>
                @foreach($enquiries as $key=> $enquiry)
                <tbody>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $enquiry->first_name }}</td>
                  <td>{{ $enquiry->last_name }}</td>
                  <td>{{ $enquiry->subject }}</td>
                  <td><a href="#">View</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#">Export</a></td>
                </tbody>  
              @endforeach
              </table>
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