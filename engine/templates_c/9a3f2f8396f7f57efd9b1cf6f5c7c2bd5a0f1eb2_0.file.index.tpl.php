<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-26 18:54:02
  from 'D:\xampp\htdocs\framfor\htdocs\custom\aodb\engine\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4693aadcf974_49602647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a3f2f8396f7f57efd9b1cf6f5c7c2bd5a0f1eb2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\framfor\\htdocs\\custom\\aodb\\engine\\templates\\index.tpl',
      1 => 1598385589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4693aadcf974_49602647 (Smarty_Internal_Template $_smarty_tpl) {
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
