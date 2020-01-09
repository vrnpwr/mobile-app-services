     @extends('layouts.master')

     @section('title')
     Category
     @endsection
     <?php $sidebarTab ='sub-domains';  ?>
     @section('content')

     <script type="text/javascript">

      $(document).ready(function() {
       function intiSummernote(){
        setTimeout(function(){
          $('.summernote').summernote({
           height: 80,  
         });
        },100);
      }
      $('#additional').click(function(event) {
        event.preventDefault();
        $('#additional-inputs').append('<div class="form-group"><label>Additional Title</label><input type="text" name="seo_meta_title[]" class="form-control title" placeholder="enter title"></div><div class="form-group"><label>Additional Description</label><textarea  name="seo_description[]" class="summernote" placeholder="enter description"></textarea></div>');
        intiSummernote();
      });
    });
  </script>
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
            <h3 class="card-title">Add Subdomain</h3>
          </div>
          <!-- /.card-header -->
          <form action="{{ action('SubDomainsController@store') }}" method="post" accept-charset="UTF-8">
            {{ csrf_field() }}
            <div class="card-body">
              <div class="form-group">
                <div class="col-4">
                  <label >Post Name</label>                    
                </div>
                <input type="text" name="name" class="form-control" placeholder="Client Name">
              </div>
              <div class="form-group">
                <label >SEO Keyword</label>
                <input type="text" class="form-control" placeholder="seo keyword" name="seo_keyword">
              </div>

              <!-- JavaScript function -->
              <div class="form-group">
                <a href="#" class="btn btn-primary" id="additional">Add Title & description</a>
              </div>
              <div id="additional-inputs"></div>
              <!-- JavaScript function -->

               <!--  <div class="form-group">
                  <label >SEO Meta Title</label>
                  <input type="text" class="form-control" placeholder="seo meta title" name="seo_meta_title">
                </div>
                <div class="form-group">
                  <label >SEO Description</label>
                  <textarea type="text" class="summernote form-control" name="seo_description"></textarea>
                </div> -->
                <div class="form-group">
                  <label >Featured Image</label>
                  <input type="file" class="" name="image" multiple="">
                </div>                
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add</button>
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