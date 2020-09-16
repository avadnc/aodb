  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{$dol_url_root}/custom/aodb/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="{$dol_url_root}/custom/aodb/css/bootstrap-extend.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="{$dol_url_root}/custom/aodb/css/master_style.css">
	
	<!-- Unique_admin skins -->
	<link rel="stylesheet" href="{$dol_url_root}/custom/aodb/css/skins/_all-skins.css">

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
                            <th>flight_date</th>
                            <th>flight_status</th>
                            <th>departure_airport</th>
                            <th>departure_timezone</th>
                            <th>departure_iata</th>
                            <th>departure_icao</th>
                            <th>departure_terninal</th>
                            <th>departure_gate</th>
                            <th>departure_delay</th>
                            <th>departure_scheduled</th>
                            <th>departure_estimated</th>
                            <th>departure_actual</th>
                            <th>departure_estimated_runway</th>
                            <th>departure_actual_runway</th>
                            <th>arrival_airport</th>
                            <th>arrival_timezone</th>
                            <th>arrival_iata</th>
                            <th>arrival_icao</th>
                            <th>arrival_terminal</th>
                            <th>arrival_gate</th>
                            <th>arrival_baggage</th>
                            <th>arrival_delay</th>
                            <th>arrival_scheduled</th>
                            <th>arrival_estimated</th>
                            <th>arrival_actual</th>
                            <th>arrival_estimated_runway</th>
                            <th>arrival_actual_runway</th>
                            <th>airline_name</th>
                            <th>airline_iata</th>
                            <th>airline_icao</th>
                            <th>flight_number</th>
                            <th>flight_iata</th>
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
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- DataTables -->
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Unique_admin App -->
	<script src="{$dol_url_root}/custom/aodb/js/template.js"></script>
	
	<!-- Unique_admin for demo purposes -->
	<script src="{$dol_url_root}/custom/aodb/js/demo.js"></script>
	
	<!-- This is data table -->
    <script src="{$dol_url_root}/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
    
    <!-- start - This is for export functionality only -->
    <script src="{$dol_url_root}/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="{$dol_url_root}/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="{$dol_url_root}/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js"></script>
    <script src="{$dol_url_root}/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js"></script>
    <script src="{$dol_url_root}/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js"></script>
    <script src="{$dol_url_root}/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js"></script>
    <script src="{$dol_url_root}/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>

<script>
var dol_root = '{$dol_url_root}';
{literal}
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
        {data : 'flight_date'},
        {data : 'flight_status'},
        {data : 'departure_airport'},
        {data : 'departure_timezone'},
        {data : 'departure_iata'},
        {data : 'departure_icao'},
        {data : 'departure_terninal'},
        {data : 'departure_gate'},
        {data : 'departure_delay'},
        {data : 'departure_scheduled'},
        {data : 'departure_estimated'},
        {data : 'departure_actual'},
        {data : 'departure_estimated_runway'},
        {data : 'departure_actual_runway'},
        {data : 'arrival_airport'},
        {data : 'arrival_timezone'},
        {data : 'arrival_iata'},
        {data : 'arrival_icao'},
        {data : 'arrival_terminal'},
        {data : 'arrival_gate'},
        {data : 'arrival_baggage'},
        {data : 'arrival_delay'},
        {data : 'arrival_scheduled'},
        {data : 'arrival_estimated'},
        {data : 'arrival_actual'},
        {data : 'arrival_estimated_runway'},
        {data : 'arrival_actual_runway'},
        {data : 'airline_name'},
        {data : 'airline_iata'},
        {data : 'airline_icao'},
        {data : 'flight_number'},
        {data : 'flight_iata'},
        {data : 'flight_icao'},
        {data : 'aircraft_registration'},
        {data : 'aircraft_iata'},
        {data : 'aircraft_icao'},
        {data : 'aircraft_icao24'}
        ]
        })
    });
	 
{/literal}
</script>
