<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 22:23:40
  from 'D:\xampp\htdocs\framfor\htdocs\custom\aodb\engine\templates\datatable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4eadcc54a9d2_78847814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b065a784f1c600425dcb98db73813a1526708972' => 
    array (
      0 => 'D:\\xampp\\htdocs\\framfor\\htdocs\\custom\\aodb\\engine\\templates\\datatable.tpl',
      1 => 1598991816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4eadcc54a9d2_78847814 (Smarty_Internal_Template $_smarty_tpl) {
?>  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/css/bootstrap-extend.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/css/master_style.css">
	
	<!-- Unique_admin skins -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/css/skins/_all-skins.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">


<div class="wrapper">
    <div class="content-wrapper">
    
        <!-- Main content -->
        <section class="content">
        <div class="row">
        <div class="col-12">
            <div class="box-body">
                <div class="table-responsive" style="width: 50%;">
                    <table id="example" class="table table-bordered table-striped">
                        <thead>
                            <th>#</th>
                            
                            <th>flight_icao</th>
                            <th>aircraft_registration</th>
                            <th>aircraft_iata</th>
                            <th>aircraft_icao</th>
                            <th>aircraft_icao24</th>
                        </thead>
                    </table>
                </div>
            </div>
            </div>
            </div>
        </section>
  </div>
</div>


	<!-- popper -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/assets/vendor_components/popper/dist/popper.min.js"><?php echo '</script'; ?>
>
	
	<!-- Bootstrap 4.0-->
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
	
	<!-- Unique_admin App -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/js/template.js"><?php echo '</script'; ?>
>
	
	<!-- Unique_admin for demo purposes -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
/custom/aodb/js/demo.js"><?php echo '</script'; ?>
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
/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js"><?php echo '</script'; ?>
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
    <!-- end - This is for export functionality only -->
    <?php echo '<script'; ?>
 src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
var dol_root = '<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value;?>
';

$(function () {
    "use strict";
	$('#example').DataTable({
        processing: true,
        responsive: true,
		dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf','colvis'
        ],
        ajax: {
            url: dol_root+'/custom/aodb/ajax/ajaxFlights.php',
            type:'post',
            dataSrc:""
        },
        columns: [
        {data : 'rowid'},
     
        {data : 'flight_icao'},
        {data : 'aircraft_registration'},
        {data : 'aircraft_iata'},
        {data : 'aircraft_icao'},
        {data : 'aircraft_icao24'}
        ]
        })
    });
	 

<?php echo '</script'; ?>
>
<?php }
}
