     @extends('layouts.master')

     @section('title')
     Category
     @endsection
     <?php $sidebarTab ='sub-domains';  ?>
     @section('content')
     <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Subdomain</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Subdomain</li>
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
              <h3 class="card-title">Edit Subdomain</h3>
            </div>
            <!-- /.card-header -->
            <form action="{{ action('SubdomainsController@update',$subdomain->id) }}" method="POST" accept-charset="UTF-8">
              {{ method_field('PUT') }}
              {{ csrf_field() }}
              <div class="card-body">
                <div class="form-group">
                  <div class="col-4">
                    <label >Post Name</label>                    
                  </div>
                  <input type="text" value="{{ $subdomain->name }}" name="name" class="form-control" placeholder="Client Name">
                </div>
                <div class="form-group">
                  <label >SEO Keyword</label>
                  <input type="text" class="form-control" value="{{ $subdomain->seo_keyword }}" name="seo_keyword">
                </div> 
                <div class="form-group">
                  <label >SEO Meta Title</label>
                  <input type="text" class="form-control" value="{{ $subdomain->seo_meta_title }}" name="seo_meta_title">
                </div>
                <div class="form-group">
                  <label >SEO Description</label>
                  <input type="text" class="form-control" value="{{ $subdomain->seo_description }}" name="seo_description">
                </div>
                <div class="form-group">
                  <label >Featured Image</label>
                  <div>
                    <img src="/images/{{ $subdomain->featured_image }}" style="width: 100px; height: 70px;">
                  </div>
                  <input type="file" class="" value="" name="image">
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