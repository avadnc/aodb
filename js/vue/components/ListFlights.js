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
					columns: [{
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
						}, {
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
					columnDefs: [{
						width: "5%",
						targets: 0,
					}, ],
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
		var projectData = [{
				"TaskID": 5,
				"Gate": "Gate 1",
				"StartDate": new Date("03/18/2017 03:24:00"),
				"EndDate": new Date("03/22/2017 04:24:00"),
				"Progress": "40",
				"Children": [{
						"TaskID": 6,
						"Gate": "Florida",
						"StartDate": new Date("03/06/2017"),
						"EndDate": new Date("03/10/2017"),
						"Progress": "40"
					},
					{
						"TaskID": 7,
						"Gate": "España",
						"StartDate": new Date("03/06/2017"),
						"EndDate": new Date("03/10/2017"),
						"Progress": "40",
					},
					{
						"TaskID": 8,
						"Gate": "CDMX",
						"StartDate": new Date("03/06/2017"),
						"EndDate": new Date("03/10/2017"),
						"Progress": "40",
					},
					{
						"TaskID": 9,
						"Gate": "Colombia",
						"StartDate": new Date("03/06/2017"),
						"EndDate": new Date("03/10/2017"),
						"Progress": "40"
					}
				]
			},
			{
				"TaskID": 10,
				"TaskName": "Parent Task 3",
				"StartDate": new Date("03/13/2017"),
				"EndDate": new Date("03/17/2017"),
				"Progress": "40",
				"Children": [{
						"TaskID": 11,
						"TaskName": "Child Task 1",
						"StartDate": new Date("03/13/2017"),
						"EndDate": new Date("03/17/2017"),
						"Progress": "40"
					},
					{
						"TaskID": 12,
						"TaskName": "Child Task 2",
						"StartDate": new Date("03/13/2017"),
						"EndDate": new Date("03/17/2017"),
						"Progress": "40",
					},
					{
						"TaskID": 13,
						"TaskName": "Child Task 3",
						"StartDate": new Date("03/13/2017"),
						"EndDate": new Date("03/17/2017"),
						"Progress": "40",
					},
					{
						"TaskID": 14,
						"TaskName": "Child Task 4",
						"StartDate": new Date("03/13/2017"),
						"EndDate": new Date("03/17/2017"),
						"Progress": "40",
					},
					{
						"TaskID": 15,
						"TaskName": "Child Task 5",
						"StartDate": new Date("03/13/2017"),
						"EndDate": new Date("03/17/2017"),
						"Progress": "40",
					}
				]
			}

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
				rowHeight: window.theme == "material" ? 48 : window.theme == "office-365" ? 36 : 30,
				taskNameMapping: "Gate",
				scheduleStartDate: new Date("02/23/2020"),
				scheduleEndDate: new Date("02/24/2020"),
				startDateMapping: "StartDate",
				endDateMapping: "EndDate",
				progressMapping: "Progress",
				childMapping: "Children",
				allowGanttChartEditing: false,
				treeColumnIndex: 1,
				isResponsive: true,
				load: function () {
					this.getColumns()[0].width = window.theme == "material" ? 60 : 30;
				}
			});
		});
	}
});
