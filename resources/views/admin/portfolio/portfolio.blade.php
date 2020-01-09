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
              <h3 class="card-title">Portfolio Listing</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <a href="/portfolio/create" class="btn btn-default mb-1">Add Portfolio</a>
              @if(count($portfolios)>0)
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Portfolio Title</th>
                  <th>Image</th>
                  <th>Portfolio Category</th>
                  <th>Action</th>
                </tr>
                </thead>
                @foreach($portfolios as $key=> $portfolio)
                <tbody>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $portfolio->title }}</td>
                  <td> <div>
                      <img src="/images/{{ $portfolio->image }}" style="width: 100px; height: 70px;">
                    </div></td>
                  <td>{{ $portfolio->category }}</td>
                  <td>
                    <a href="/portfolio/{{$portfolio->id}}/edit" class="btn btn-info float-left" >Edit</a>
                  
                  <form action="{{ action('PortfolioController@destroy',$portfolio->id) }}" method="POST" class="float-right">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-danger" name="" value="delete">
                  </form>
                  
                  </td>
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