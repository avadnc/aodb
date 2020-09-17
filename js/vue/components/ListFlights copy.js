Vue.component("list-flights", {
	template: `
	<div>
 	<div class="table-responsive">
				  <table id="tabla-datos" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
          <thead>
			  <tr>
			  <th>Airline<br>ICAO</th>
			  <th>Flight<br>Number</th>
                  
				  <th>Flight<br>Status</th>
				  <th>SOBT<br></th>
				  <th>EOBT<br></th>
				  <th>TOBT<br></th>
				  <th>TSAT<br></th>
				  <th>AOBT<br></th>
				  <th>ETBT<br></th>
				  <th>ATOT<br></th>
				  <th>Service<br>Type</th>
				  <th>IATA<br>STATION</th>
				  <th>Arrival<br>Departure</th>
				  <th>Flight<br>Type</th>
				  <th>Arrival<br>Gate</th>
				  <th>Gate<br>Status</th>
                  <th>Carousel<br></th>
                  <th>Options<br></th>
              </tr>
		  </thead>
	  </table>
	  </div>

	  <div class="modal fade" id="tableModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  				
	  `,
	data() {
		return {
			flights: [],
		};
	},
	mounted: function () {
		axios
			.post(url + "/ajax/ajaxFlights.php")
			.then((response) => {
				this.flights = response.data;
				//console.log(response.data);
				var table = $("#tabla-datos").dataTable({
					responsive: true,
					deferRender: true,
					retrieve: true,
					processing: true,
					dom: "Bfrtip",
					buttons: ["copy", "csv", "excel"],
					pageLength: 50,
					autoWidth: false,
					data: this.flights,
					columns: [
						{
							data: "airline_icao",
						},
						{
							data: "flight_number",
						},
						// { data: "flight_date" },
						{
							data: function (data) {
								return (
									'<input type="text" class="outlinenone" value="' +
									data["flight_status"] +
									'">'
								);
							},
						},
						{
							data: function (data) {
								return (
									'<input type="text" class="outlinenone" value="' +
									data["flight_status"] +
									'">'
								);
							},
						},
						{
							data: function (data) {
								return (
									'<input type="text" class="outlinenone" value="' +
									data["flight_status"] +
									'">'
								);
							},
						},
						{
							data: function (data) {
								return (
									'<input type="text" class="outlinenone" value="' +
									data["flight_status"] +
									'">'
								);
							},
						},
						{
							data: function (data) {
								return (
									'<input type="text" class="outlinenone" value="' +
									data["flight_status"] +
									'">'
								);
							},
						},
						{
							data: function (data) {
								return (
									'<input type="text" class="outlinenone" value="' +
									data["flight_status"] +
									'">'
								);
							},
						},
						{
							data: function (data) {
								return (
									'<input type="text" class="outlinenone" value="' +
									data["flight_status"] +
									'">'
								);
							},
						},
						{
							data: function (data) {
								return (
									'<input type="text" class="outlinenone" value="' +
									data["flight_status"] +
									'">'
								);
							},
						},
						{
							data: function (data) {
								return (
									'<input type="text" class="outlinenone" value="' +
									data["departure_iata"] +
									'">'
								);
							},
						},
						{
							data: function (data) {
								return (
									'<input type="text" class="outlinenone" value="' +
									data["flight_icao"] +
									'">'
								);
							},
						},
						{
							data: function (data) {
								return (
									'<input type="text" class="outlinenone" value="' +
									data["arrival_terminal"] +
									'">'
								);
							},
						},
						{
							data: function (data) {
								return (
									'<input type="text" class="outlinenone" value="' +
									data["flight_number"] +
									'">'
								);
							},
						},
						{
							data: function (data) {
								return (
									'<input type="text" class="outlinenone" value="' +
									data["departure_iata"] +
									'">'
								);
							},
						},
						{
							data: function (data) {
								return (
									'<input type="text" class="outlinenone" value="' +
									data["departure_iata"] +
									'">'
								);
							},
						},
						{
							data: function (data) {
								return (
									'<input type="text" class="outlinenone" value="' +
									data["departure_iata"] +
									'">'
								);
							},
						},
						{
							data: function () {
								return '<button class="btn btn-primary" data-toggle="modal" data-target="#tableModal"><i class="fa fa-paper-plane"></i></button>';
							},
						},
					],
					columnDefs: [
						{
							width: "5%",
							targets: 0,
						},
					],
				});
			})
			.catch((error) => {
				console.log(error);
			});
	},
	methods: {
		saluda: function () {
			console.log("Hola desde el evento del botón");
		},
	},
});

Vue.component("gantt", {
	template: ` 
	<div class="content-container-fluid">
        <div class="row">
            <div class="cols-sample-area">
                <div id="GanttContainer" style="width:100%;height:450px;" />
            </div>
        </div>
    </div>
	`,
	mounted: function () {
		var d = new Date();
		var strDate =
			d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + d.getDate();
		console.log(strDate);
		var projectData = [
			{
				TaskID: 5,
				Gate: "Gate 1",
				StartDate: new Date(strDate),
				EndDate: new Date(strDate),
				Children: [
					{
						TaskID: 6,
						Gate: "Florida",
						StartDate: new Date("2020/9/17 10:20:00"),
						EndDate: new Date("2020/9/17 10:40:00"),
						duration: 5,
					},
					{
						TaskID: 6,
						Gate: "Florida",
						StartDate: new Date("2020/9/17 15:20:00"),
						EndDate: new Date("2020/9/17 15:25:00"),
						duration: 5,
					},
					{
						TaskID: 7,
						Gate: "España",
						StartDate: new Date("2020/9/17 15:30:00"),
						EndDate: new Date("2020/9/17 15:35:00"),
						duration: 5,
					},
					{
						TaskID: 8,
						Gate: "CDMX",
						StartDate: new Date("2020/9/17 15:40:00"),
						EndDate: new Date("2020/9/17 15:45:00"),
						duration: 5,
					},
					{
						TaskID: 9,
						Gate: "Colombia",
						StartDate: new Date("2020/9/17 15:50:00"),
						EndDate: new Date("2020/9/17 15:55:00"),
						duration: 5,
					},
				],
			},
		];

		$(function () {
			var data = ej.DataManager(projectData);
			$("#GanttContainer").ejGantt({
				dateFormat: "M/d/yyyy hh:mm:ss tt",
				durationUnit: ej.Gantt.DurationUnit.Minute,
				scheduleHeaderSettings: {
					scheduleHeaderType: ej.Gantt.ScheduleHeaderType.Hour,
					minutesPerInterval: ej.Gantt.minutesPerInterval.FiveMinutes,
				},
				dataSource: data,
				allowSelection: true,
				allowColumnResize: true,
				taskIdMapping: "TaskID",
				rowHeight:
					window.theme == "material"
						? 48
						: window.theme == "office-365"
						? 36
						: 30,
				taskNameMapping: "Gate",
				scheduleStartDate: new Date("2020/9/17"),
				scheduleEndDate: new Date("2020/9/18"),
				startDateMapping: "StartDate",
				endDateMapping: "EndDate",
				childMapping: "Children",
				allowGanttChartEditing: false,
				treeColumnIndex: 1,
				isResponsive: true,
				load: function () {
					this.getColumns()[0].width = window.theme == "material" ? 60 : 30;
				},
			});
		});
	},
});
