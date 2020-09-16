<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-25 22:00:08
  from 'D:\xampp\htdocs\dolibarr12\htdocs\custom\laboratorio\engine\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f456dc81a57d9_79499680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6057d3cd0937890bbecc468ae455f2138165aa1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\dolibarr12\\htdocs\\custom\\laboratorio\\engine\\templates\\index.tpl',
      1 => 1598385589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f456dc81a57d9_79499680 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Hola desde Smarty</h2>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />


    <!-- Main content -->
    <section class="content">
	  <div class="callout bg-pale-info">
        <h4>Nots!</h4>
        <p>All the data is loaded from a seperate JS file</p>
      </div>
      <div class="row">
        <div class="col-12">
         
          <div class="box box-outline-info">
            <div class="box-body">
            	<div class="table-responsive">
				  <table id="project-table" class="table table-bordered table-striped display nowrap margin-top-10">
					<thead>
						<tr class="bg-gray">
							<th></th>
							<th>Projects</th>
							<th><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> EST</th>
							<th>Contacts</th>
							<th>Status</th>
							<th><i class="fa fa-fw fa-calendar text-muted hidden-md hidden-sm hidden-xs"></i> Starts</th>
							<th><i class="fa fa-fw fa-calendar text-muted hidden-md hidden-sm hidden-xs"></i> Ends</th>
							<th>Tracker</th>
						</tr>
					</thead>
				  </table>
            	</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->


<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php }
}
