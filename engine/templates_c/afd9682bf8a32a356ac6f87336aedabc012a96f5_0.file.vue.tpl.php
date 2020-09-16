<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-16 04:37:18
  from 'C:\xampp\htdocs\dolibarr\htdocs\custom\aodb\engine\templates\vue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f617a5eea4fe7_78441873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afd9682bf8a32a356ac6f87336aedabc012a96f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dolibarr\\htdocs\\custom\\aodb\\engine\\templates\\vue.tpl',
      1 => 1600222936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f617a5eea4fe7_78441873 (Smarty_Internal_Template $_smarty_tpl) {
?>  <!-- Syncfusion Gantt -->
  <!-- <link href="http://localhost/dolibarr/htdocs/custom/aodb/engine/templates/content/bootstrap.min.css" rel="stylesheet" /> -->
  <link
      href="http://localhost/dolibarr/htdocs/custom/aodb/engine/templates/content/ejthemes/default-theme/ej.web.all.min.css"
      rel="stylesheet" />
  <link href="http://localhost/dolibarr/htdocs/custom/aodb/engine/templates/content/default.css" rel="stylesheet" />
  <link href="http://localhost/dolibarr/htdocs/custom/aodb/engine/templates/content/default-responsive.css"
      rel="stylesheet" />
  <link
      href="http://localhost/dolibarr/htdocs/custom/aodb/engine/templates/content/ejthemes/responsive-css/ej.responsive.css"
      rel="stylesheet" />
  <!--[if lt IE 9]>
       <?php echo '<script'; ?>
 type="text/javascript" src="../scripts/jquery-1.11.3.min.js" ><?php echo '</script'; ?>
>
      <![endif]-->
  <!--[if gte IE 9]><!-->
  <?php echo '<script'; ?>
 src="http://localhost/dolibarr/htdocs/custom/aodb/engine/templates/scripts/jquery-3.4.1.min.js"
      type="text/javascript">
  <?php echo '</script'; ?>
>
  <!--<![endif]-->
  <?php echo '<script'; ?>
 src="http://localhost/dolibarr/htdocs/custom/aodb/engine/templates/scripts/jsrender.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://localhost/dolibarr/htdocs/custom/aodb/engine/templates/scripts/ej.web.all.min.js"
      type="text/javascript">
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://localhost/dolibarr/htdocs/custom/aodb/engine/templates/scripts/properties.js"
      type="text/javascript">
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://localhost/dolibarr/htdocs/custom/aodb/engine/templates/scripts/jsonganttdata.js"><?php echo '</script'; ?>
>



  <!-- Bootstrap 4.0 -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
  
  <!-- Bootstrap extend 
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/css/bootstrap-extend.css">
  -->
  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/css/master_style.css">
    

  <!-- Unique_Admin skins -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/css/skins/_all-skins.css">
  
  <!-- datatables responsive css -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/css/responsive.bootstrap.min.css">
  

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/vendor_plugins/iCheck/all.css">
    
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


  <!-- popper -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/vendor_components/popper/dist/popper.min.js"><?php echo '</script'; ?>
>

  <!-- Bootstrap 4.0 -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>


  <!-- DataTables -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
  

  <!-- SlimScroll --> 
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
  

  <!-- FastClick -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/vendor_components/fastclick/lib/fastclick.js"><?php echo '</script'; ?>
>

  <!-- Unique_Admin App -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/js/template.js"><?php echo '</script'; ?>
> 

  <!-- This is data table -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>

  <!-- start - This is for export functionality only -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js"><?php echo '</script'; ?>
>
  
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/js/dataTables.responsive.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/js/responsive.bootstrap4.min.js"><?php echo '</script'; ?>
>

  <!-- iCheck 1.0.1 -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/vendor_plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>

  <!-- axios -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/js/vue/axios.js"><?php echo '</script'; ?>
>

  <!-- development version, includes helpful console warnings -->

  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/js/vue/vue.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://unpkg.com/vue-router@3.0.1/dist/vue-router.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/js/vue/node_modules/vuejs-datatable/dist/vuejs-datatable.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="module" src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/js/vue/components/ListFlights.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="module" src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/js/vue/main.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="module" src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/js/vue/gantt.js"><?php echo '</script'; ?>
>


  <?php echo '<script'; ?>
>
    var url = "<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/";
  <?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    //DATA SOURCE DECLARATION OF GANTT CONTROL
    

<?php echo '</script'; ?>
>
<?php }
}
