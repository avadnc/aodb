<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-17 21:09:03
  from 'C:\xampp\htdocs\dolibarr\htdocs\custom\aodb\engine\templates\vue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f63b44f16e6a1_32686227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afd9682bf8a32a356ac6f87336aedabc012a96f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dolibarr\\htdocs\\custom\\aodb\\engine\\templates\\vue.tpl',
      1 => 1600369739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f63b44f16e6a1_32686227 (Smarty_Internal_Template $_smarty_tpl) {
?>  <!-- Syncfusion Gantt -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/content/ejthemes/default-theme/ej.web.all.min.css" rel="stylesheet"/>
  <link href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/content/default.css" rel="stylesheet"/>
  <link href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/content/default-responsive.css" rel="stylesheet"/>
  <link href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/content/ejthemes/responsive-css/ej.responsive.css" rel="stylesheet"/>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/scripts/jsrender.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/scripts/ej.web.all.min.js" type="text/javascript"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/scripts/properties.js" type="text/javascript"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/scripts/jsonganttdata.js"><?php echo '</script'; ?>
>

  <!-- Bootstrap 4.0 -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/content/bootstrap/css/bootstrap.min.css">
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/content/bootstrap/js/popper.min.js" integrity="" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/content/bootstrap/js/bootstrap.min.js" integrity="" crossorigin="anonymous"><?php echo '</script'; ?>
>

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
/custom/aodb/js/vue/components/gantt.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="module" src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/js/vue/main.js"><?php echo '</script'; ?>
>


  <?php echo '<script'; ?>
>
    var url = "<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/";
  <?php echo '</script'; ?>
>
<?php }
}
