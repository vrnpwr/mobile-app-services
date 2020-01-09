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
      <!-- ########################Bar######################### -->

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Subdomain Listing</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
         <a href="/sub-domains/create" class="btn btn-default mb-1">Add Sub-domians</a>
         @if(count($subdomains)>0)
         <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Sr No.</th>
              <th>Post Name</th>
              <th>SEO Keyword</th>
              <th>SEO Meta Title</th>
              <th>SEO Description</th>
              <th>Featured Image</th>
              <th>Actions</th>
            </tr>
          </thead>
          @foreach($subdomains as $key => $subdomain)
          <tbody>
            <td>{{ $key+1}}</td>
            <td>{{ $subdomain->name }}</td>
            <td>{{ $subdomain->seo_keyword }}</td>
            
            @php $titles = explode('`',$subdomain->seo_meta_title) @endphp
            <td>
              @foreach($titles as $title)
              {{ $title }}<br> 
              @endforeach
            </td>  
            
            @php $descriptions = explode('`',$subdomain->seo_description) @endphp
            <td>
              @foreach($descriptions as $description)
              {{ strip_tags($description) }}<br> 
              @endforeach
            </td>            <td>
              <div>
                <img src="/images/{{ $subdomain->featured_image }}" style="width: 100px; height: 70px;">
              </div>
            </td>
            <td>
              <a href="/sub-domains/{{$subdomain->id}}/edit" class="btn btn-info float-left" >Edit</a>

              <form action="{{ action('SubDomainsController@destroy',$subdomain->id) }}" method="POST" class="float-right">
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
    <!-- /.card -->
  </div>

  @endsection