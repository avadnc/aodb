<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-10 22:22:01
  from 'D:\xampp\htdocs\framfor\htdocs\custom\aodb\engine\templates\vue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
	'version' => '3.1.34-dev-7',
	'unifunc' => 'content_5f5a8ae93557a4_09006569',
	'has_nocache_code' => false,
	'file_dependency' =>
	array(
		'e5ae8da296581139eec65e7c66b8b53bd69e7b01' =>
		array(
			0 => 'D:\\xampp\\htdocs\\framfor\\htdocs\\custom\\aodb\\engine\\templates\\vue.tpl',
			1 => 1599769316,
			2 => 'file',
		),
	),
	'includes' =>
	array(),
), false)) {
	function content_5f5a8ae93557a4_09006569(Smarty_Internal_Template $_smarty_tpl)
	{
?>
		<!-- Bootstrap 4.0-->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
/custom/aodb/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

		<!-- Bootstrap extend-->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
/custom/aodb/css/bootstrap-extend.css">

		<!-- Theme style -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
/custom/aodb/css/master_style.css">

		<!-- Unique_Admin skins -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
/custom/aodb/css/skins/_all-skins.css">

		<!-- datatables responsive css -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
/custom/aodb/css/responsive.bootstrap.min.css">

		<!-- iCheck for checkboxes and radio inputs -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
/custom/aodb/assets/vendor_plugins/iCheck/all.css">

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
								<a href="#" class="btn btn-primary">Add New Flight</a>
							</div>
							<hr>
							<list-flights></list-flights>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- popper -->
		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/assets/vendor_components/popper/dist/popper.min.js"><?php echo '</script'; ?>
		>

		<!-- Bootstrap 4.0-->
		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
		>

		<!-- DataTables -->
		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
		>
		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
		>

		<!-- SlimScroll -->
		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
		>

		<!-- FastClick -->
		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/assets/vendor_components/fastclick/lib/fastclick.js"><?php echo '</script'; ?>
		>

		<!-- Unique_Admin App -->
		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/js/template.js"><?php echo '</script'; ?>
		>

		<!-- This is data table -->
		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
		>

		<!-- start - This is for export functionality only -->
		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
		>
		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js"><?php echo '</script'; ?>
		>
		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js"><?php echo '</script'; ?>
		>
		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js"><?php echo '</script'; ?>
		>
		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js"><?php echo '</script'; ?>
		>
		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js"><?php echo '</script'; ?>
		>
		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js"><?php echo '</script'; ?>
		>

		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/js/dataTables.responsive.min.js"><?php echo '</script'; ?>
		>
		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/js/responsive.bootstrap4.min.js"><?php echo '</script'; ?>
		>

		<!-- iCheck 1.0.1 -->
		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/assets/vendor_plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
		>

		<!-- axios -->
		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/js/vue/axios.js"><?php echo '</script'; ?>
		>

		<!-- development version, includes helpful console warnings -->

		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/js/vue/vue.js"><?php echo '</script'; ?>
		>
		<?php echo '<script'; ?>
		src="https://unpkg.com/vue-router@3.0.1/dist/vue-router.js"><?php echo '</script'; ?>
		>
		<?php echo '<script'; ?>
		src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/js/vue/node_modules/vuejs-datatable/dist/vuejs-datatable.js"><?php echo '</script'; ?>
		>
		<?php echo '<script'; ?>
		type="module" src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/js/vue/components/ListFlights.js"><?php echo '</script'; ?>
		>
		<?php echo '<script'; ?>
		type="module" src="<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/js/vue/main.js"><?php echo '</script'; ?>
		>

		<?php echo '<script'; ?>
		>
		var url = "<?php echo $_smarty_tpl->tpl_vars['dol_url_root']->value; ?>
		/custom/aodb/";
		<?php echo '</script'; ?>
		>
<?php }
}
