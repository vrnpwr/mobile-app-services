    <footer class="main-footer">
      <strong>Copyright &copy; 2019 Mobileappservices.</strong>
      <div class="float-right d-none d-sm-inline-block">
        <!-- Right Footer -->
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->


  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

  <!-- include summernote css/js -->
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Morris.js charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="/admin-lte/plugins/morris/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="/admin-lte/plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="/admin-lte/plugins/knob/jquery.knob.js"></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
  <script src="/admin-lte/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="/admin-lte/plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="/admin-lte/plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="/admin-lte/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="/admin-lte/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/admin-lte/dist/js/demo.js"></script>



  <!-- FilePond init script -->
  <script>
// Register plugins
FilePond.registerPlugin(
  FilePondPluginFileValidateSize,
  FilePondPluginImageExifOrientation,
  FilePondPluginImageCrop,
  FilePondPluginImageResize,
  FilePondPluginImagePreview,
  FilePondPluginImageTransform,
  FilePondPluginFileValidateType
  );

// Set default FilePond options
FilePond.setOptions({
// maximum allowed file size
maxFileSize: '221MB',
acceptedFileTypes: ['image/*'],
// labelIdle: 'Upload videos or photos (Max 221MB)',
maxFiles: 50,
/*     imagePreviewHeight: 100,
imagePreviewWidth: 100,
imageResizeTargetWidth: 45,
imageResizeTargetHeight: 45,*/
instantUpload: true,
// crop the image to a 1:1 ratio
// imageCropAspectRatio: '1:1',
// upload to this server end point
server:{
 process:'/filepond/uploadImage?_method=get',
 revert: '/filepond/deleteImage?_method=DELETE&_token=<?php echo csrf_token(); ?>'
}

});
// Turn a file input into a file pond
var pond = FilePond.create(document.querySelector('input[type="file"]'));
console.log(pond);

function getImageSrc(selector){
  var collectHtml="";
  var files = selector.getFiles();
  for(i in files){
    var item = files[i];    
    collectHtml +=item.serverId+",";
  }
  console.log(collectHtml);
  return collectHtml;
}

$('#call').click(function(){
 $('#hiddenPond').val(getImageSrc(pond));
});
</script>
<!-- FilePond init script -->




</body>
</html>