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
              <h3 class="card-title">Blog Listing</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <a href="blogs/create" class="btn btn-default mb-1">Add Blog</a>
             
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Blog Name</th>
                  <th>Blog Description</th>
                  <th>Order No</th>
                  <th>SEO Title</th>
                  <th>SEO Keyword</th>
                  <th>SEO Description</th>
                  <th>Blog Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                @foreach($blogs as $key => $blog)
                <tbody>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $blog->name }}</td>
                  <td>{{ $blog->description }}</td>
                  <td>{{ $blog->order_no }}</td>
                  <td>{{ $blog->title }}</td>
                  <td>{{ $blog->seo_keyword }}</td>
                  <td>{{ $blog->seo_description }}</td>
                  <td>
                    <div> 
                      <img src="/images/{{$blog->image}}" style="width: 100px; height: 70px;">  
                    </div>
                  </td>
                  <td>
                    <a href="/blogs/{{$blog->id}}/edit" class="btn btn-info float-left" >Edit</a>
                  
                  <form action="{{ action('BlogsController@destroy',$blog->id) }}" method="POST" class="float-right">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-danger" name="" value="delete">
                  </form>
                  </td>
                </tbody> 
                @endforeach 
              </table>
           
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