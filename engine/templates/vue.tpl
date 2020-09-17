  <!-- Syncfusion Gantt -->
  <link href="http://localhost/dolibarr/htdocs/custom/aodb/assets/content/ejthemes/default-theme/ej.web.all.min.css" rel="stylesheet"/>
  <link href="http://localhost/dolibarr/htdocs/custom/aodb/assets/content/default.css" rel="stylesheet"/>
  <link href="http://localhost/dolibarr/htdocs/custom/aodb/assets/content/default-responsive.css" rel="stylesheet"/>
  <link href="http://localhost/dolibarr/htdocs/custom/aodb/assets/content/ejthemes/responsive-css/ej.responsive.css" rel="stylesheet"/>
  <script src="http://localhost/dolibarr/htdocs/custom/aodb/assets/scripts/jsrender.min.js"></script>
  <script src="http://localhost/dolibarr/htdocs/custom/aodb/assets/scripts/ej.web.all.min.js" type="text/javascript"></script>
  <script src="http://localhost/dolibarr/htdocs/custom/aodb/assets/scripts/properties.js" type="text/javascript"></script>
  <script src="http://localhost/dolibarr/htdocs/custom/aodb/assets/scripts/jsonganttdata.js"></script>

  <!-- Bootstrap 4.0 -->
  <link rel="stylesheet" href="http://localhost/dolibarr/htdocs/custom/aodb/assets/content/bootstrap/css/bootstrap.min.css">
  <script src="http://localhost/dolibarr/htdocs/custom/aodb/assets/content/bootstrap/js/popper.min.js" integrity="" crossorigin="anonymous"></script>
  <script src="http://localhost/dolibarr/htdocs/custom/aodb/assets/content/bootstrap/js/bootstrap.min.js" integrity="" crossorigin="anonymous"></script>

  <!-- Bootstrap extend 
  <link rel="stylesheet" href="{$dol_url_root}/custom/aodb/css/bootstrap-extend.css">
  -->
  
  <!-- Theme style -->
  <link rel="stylesheet" href="{$dol_url_root}/custom/aodb/css/master_style.css">
    
  <!-- Unique_Admin skins -->
  <link rel="stylesheet" href="{$dol_url_root}/custom/aodb/css/skins/_all-skins.css">
  
  <!-- datatables responsive css -->
  <link rel="stylesheet" href="{$dol_url_root}/custom/aodb/css/responsive.bootstrap.min.css">
  

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{$dol_url_root}/custom/aodb/assets/vendor_plugins/iCheck/all.css">
    
    <div class="modal fade" id="addNewFlight" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	 <div class="modal-dialog" role="document">
	   <div class="modal-content">
		 <div class="modal-header">
		   <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			 <span aria-hidden="true">&times;</span>
		   </button>
		 </div>
		 <div class="modal-body">
		   ...
		 </div>
		 <div class="modal-footer">
		   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		   <button type="button" class="btn btn-primary">Save changes</button>
		 </div>
	   </div>
	 </div>
   </div>
	</div>

  <div class="section">
      <div class="row">
          <div class="col-12">
              <div class="box" id="app">
 
                  <div class="box-header with-border">
                      <h3 class="box-title">Flights Table Demo</h3>
                      <h6 class="box-subtitle">How i show data In dataTable</h6>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <div class="row">
                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addNewFlight">Add New Flight</a>
                      </div>
                      <hr>
                      <gantt></gantt>
                      <hr>
                      <list-flights></list-flights>
                  </div>
              </div>
          </div>
      </div>
  </div>
 
  <!-- DataTables -->
  <script src="{$dol_url_root}/custom/aodb/assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="{$dol_url_root}/custom/aodb/assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

  <!-- SlimScroll --> 
  <script src="{$dol_url_root}/custom/aodb/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

  <!-- FastClick -->
  <script src="{$dol_url_root}/custom/aodb/assets/vendor_components/fastclick/lib/fastclick.js"></script>

  <!-- Unique_Admin App -->
  <script src="{$dol_url_root}/custom/aodb/js/template.js"></script> 

  <!-- This is data table -->
  <script src="{$dol_url_root}/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>

  <!-- start - This is for export functionality only -->
  <script src="{$dol_url_root}/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js"></script>
  <script src="{$dol_url_root}/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js"></script>
  <script src="{$dol_url_root}/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js"></script>
  
  <script src="{$dol_url_root}/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js"></script>
  <script src="{$dol_url_root}/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js"></script>
  <script src="{$dol_url_root}/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js"></script>

  <script src="{$dol_url_root}/custom/aodb/js/dataTables.responsive.min.js"></script>
  <script src="{$dol_url_root}/custom/aodb/js/responsive.bootstrap4.min.js"></script>

  <!-- iCheck 1.0.1 -->
  <script src="{$dol_url_root}/custom/aodb/assets/vendor_plugins/iCheck/icheck.min.js"></script>

  <!-- axios -->
  <script src="{$dol_url_root}/custom/aodb/js/vue/axios.js"></script>

  <!-- development version, includes helpful console warnings -->

  <script src="{$dol_url_root}/custom/aodb/js/vue/vue.js"></script>
  <script src="https://unpkg.com/vue-router@3.0.1/dist/vue-router.js"></script>
  <script src="{$dol_url_root}/custom/aodb/js/vue/node_modules/vuejs-datatable/dist/vuejs-datatable.js"></script>
  <script type="module" src="{$dol_url_root}/custom/aodb/js/vue/components/ListFlights.js"></script>
  <script type="module" src="{$dol_url_root}/custom/aodb/js/vue/components/gantt.js"></script>
  <script type="module" src="{$dol_url_root}/custom/aodb/js/vue/main.js"></script>


  <script>
    var url = "{$dol_url_root}/custom/aodb/";
  </script>
