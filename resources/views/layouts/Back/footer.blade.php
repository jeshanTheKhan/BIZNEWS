        <!-- footer content -->
        <footer>
            <div class="pull-right">
              Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->
        </div>
      </div>
  
      <!-- jQuery -->
      <script src="{{asset('storage/back/vendors/jquery/dist/jquery.min.js')}}"></script>
      <!-- Bootstrap -->
      <script src="{{asset('storage/back/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
      <!-- FastClick -->
      <script src="{{asset('storage/back/vendors/fastclick/lib/fastclick.js')}}"></script>
      <!-- NProgress -->
      <script src="{{asset('storage/back/vendors/nprogress/nprogress.js')}}"></script>
      <!-- Chart.js -->
      <script src="{{asset('storage/back/vendors/Chart.js/dist/Chart.min.js')}}"></script>
      <!-- gauge.js -->
      <script src="{{asset('storage/back/vendors/gauge.js/dist/gauge.min.js')}}"></script>
      <!-- bootstrap-progressbar -->
      <script src="{{asset('storage/back/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
      <!-- iCheck -->
      <script src="{{asset('storage/back/vendors/iCheck/icheck.min.js')}}"></script>
      <!-- Skycons -->
      <script src="{{asset('storage/back/vendors/skycons/skycons.js')}}"></script>
      <!-- Flot -->
      <script src="{{asset('storage/back/vendors/Flot/jquery.flot.js')}}"></script>
      <script src="{{asset('storage/back/vendors/Flot/jquery.flot.pie.js')}}"></script>
      <script src="{{asset('storage/back/vendors/Flot/jquery.flot.time.js')}}"></script>
      <script src="{{asset('storage/back/vendors/Flot/jquery.flot.stack.js')}}"></script>
      <script src="{{asset('storage/back/vendors/Flot/jquery.flot.resize.js')}}"></script>
      <!-- Flot plugins -->
      <script src="{{asset('storage/back/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
      <script src="{{asset('storage/back/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
      <script src="{{asset('storage/back/vendors/flot.curvedlines/curvedLines.js')}}"></script>
      <!-- DateJS -->
      <script src="{{asset('storage/back/vendors/DateJS/build/date.js')}}"></script>
      <!-- JQVMap -->
      <script src="{{asset('storage/back/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
      <script src="{{asset('storage/back/vendors/jqvmap/dist/maps/jquery.vmap.world.j')}}s"></script>
      <script src="{{asset('storage/back/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
      <!-- bootstrap-daterangepicker -->
      <script src="{{asset('storage/back/vendors/moment/min/moment.min.js')}}"></script>
      <script src="{{asset('storage/back/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  
      <!-- Custom Theme Scripts -->
      <script src="{{asset('storage/back/build/js/custom.min.js')}}"></script>
      <!-- bootstrap-wysiwyg -->
      <script src="{{asset('storage/back/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
      <script src="{{asset('storage/back/vendors/jquery.hotkeys/jquery.hotkeys.j')}}s"></script>
      <script src="{{asset('storage/back/vendors/google-code-prettify/src/prettify.js')}}"></script>
      <!-- jQuery Tags Input -->
      <script src="{{asset('storage/back/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
      <!-- Switchery -->
      <script src="{{asset('storage/back/vendors/switchery/dist/switchery.min.js')}}"></script>
      <!-- Select2 -->
      <script src="{{asset('storage/back/vendors/select2/dist/js/select2.full.min.js')}}"></script>
      <!-- Parsley -->
      <script src="{{asset('storage/back/vendors/parsleyjs/dist/parsley.min.js')}}"></script>
      <!-- Autosize -->
      <script src="{{asset('storage/back/vendors/autosize/dist/autosize.min.js')}}"></script>
      <!-- jQuery autocomplete -->
      <script src="{{asset('storage/back/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
      <!-- starrr -->
      <script src="{{asset('storage/back/vendors/starrr/dist/starrr.js')}}"></script>


         <!-- Datatables -->
    <script src="{{asset('storage/back/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('storage/back/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('storage/back/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('storage/back/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('storage/back/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('storage/back/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('storage/back/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('storage/back/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('storage/back/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('storage/back/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('storage/back/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('storage/back/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('storage/back/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('storage/back/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('storage/back/vendors/pdfmake/build/vfs_fonts.js')}}"></script>


          <!-- Toaster & Sweetalert Style -->
    <script src="{{asset('storage/back/build/js/toastr.min.js')}}"></script>

 
   
      <script>
      @if(Session::has('message'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                 toastr.info("{{ Session::get('message') }}");
                 break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
      @endif
    </script>
     
     
      
    </body>
  </html>