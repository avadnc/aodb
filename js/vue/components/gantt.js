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
