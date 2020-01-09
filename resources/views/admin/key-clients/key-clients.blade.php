    @extends('layouts.master')

    @section('title')
    Category
    @endsection
    <?php $sidebarTab ='key-clients';  ?>
    @section('content')
    
        <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Key-clients</h1>
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

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Key-clients Listing</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <a href="/key-clients/create" class="btn btn-default mb-1">Add Client</a>
              @if(count($keyClients) > 0)
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Client Name</th>
                  <th>Client URL</th>
                  <th>Order No</th>
                  <th>Action</th>
                </tr>
                </thead>
                @foreach($keyClients as $keyClient)
                <tbody>
                  <td>1</td>
                  <td>{{ $keyClient->name }}</td>
                  <td>
                    <div class="text-center">                      
                        <img src="/images/{{ $keyClient->image }}" style="width: 100px; height: 70px;">  
                    </div>
                  </td>
                  <td>{{ $keyClient->order_no }}</td>
                  <td>
                    <a href="/key-clients/{{$keyClient->id}}/edit" class="btn btn-info float-left" >Edit</a>
                  
                  <form action="{{ action('KeyClientsController@destroy',$keyClient->id) }}" method="POST" class="float-right">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-danger" name="" value="delete">
                  </form>
                </td>
                </tbody>  
              @endforeach
              </table>
              @else
              <p>nothing to display</p>
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