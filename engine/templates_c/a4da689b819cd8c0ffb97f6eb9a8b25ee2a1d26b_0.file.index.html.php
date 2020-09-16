<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-16 01:50:58
  from 'C:\xampp\htdocs\dolibarr\htdocs\custom\aodb\engine\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f61536284bcb7_73161074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4da689b819cd8c0ffb97f6eb9a8b25ee2a1d26b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dolibarr\\htdocs\\custom\\aodb\\engine\\templates\\index.html',
      1 => 1600213854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f61536284bcb7_73161074 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="http://localhost/dolibarr/htdocs/custom/aodb/engine/templates/content/bootstrap.min.css" rel="stylesheet" />
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

<div class="content-container-fluid">
    <div class="row">
        <div class="cols-sample-area">
            <div id="GanttContainer" style="width:100%;height:450px;" />
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    //DATA SOURCE DECLARATION OF GANTT CONTROL
    var projectData = [{
            "TaskID": 1,
            "TaskName": "Parent Task 1",
            "StartDate": new Date("02/27/2017"),
            "EndDate": new Date("03/03/2017"),
            "Progress": "40",
            "Children": [{
                    "TaskID": 2,
                    "TaskName": "Child Task 1",
                    "StartDate": new Date("02/27/2017"),
                    "EndDate": new Date("03/03/2017"),
                    "Progress": "40"
                },
                {
                    "TaskID": 3,
                    "TaskName": "Child Task 2",
                    "StartDate": new Date("02/27/2017"),
                    "EndDate": new Date("03/03/2017"),
                    "Progress": "40",
                },
                {
                    "TaskID": 4,
                    "TaskName": "Child Task 3",
                    "StartDate": new Date("02/27/2017"),
                    "EndDate": new Date("03/03/2017"),
                    "Duration": 5,
                    "Progress": "40",
                }
            ]
        },
        {
            "TaskID": 5,
            "TaskName": "Parent Task 2",
            "StartDate": new Date("03/18/2017"),
            "EndDate": new Date("03/22/2017"),
            "Progress": "40",
            "Children": [{
                    "TaskID": 6,
                    "TaskName": "Child Task 1",
                    "StartDate": new Date("03/06/2017"),
                    "EndDate": new Date("03/10/2017"),
                    "Progress": "40"
                },
                {
                    "TaskID": 7,
                    "TaskName": "Child Task 2",
                    "StartDate": new Date("03/06/2017"),
                    "EndDate": new Date("03/10/2017"),
                    "Progress": "40",
                },
                {
                    "TaskID": 8,
                    "TaskName": "Child Task 3",
                    "StartDate": new Date("03/06/2017"),
                    "EndDate": new Date("03/10/2017"),
                    "Progress": "40",
                },
                {
                    "TaskID": 9,
                    "TaskName": "Child Task 4",
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
            taskNameMapping: "TaskName",
            scheduleStartDate: new Date("02/23/2017"),
            scheduleEndDate: new Date("03/31/2017"),
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

<?php echo '</script'; ?>
>
<?php }
}
