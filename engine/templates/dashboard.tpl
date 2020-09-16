	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{$dol_url_root}/custom/aodb/assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	
	<!-- Bootstrap-extend -->
	<link rel="stylesheet" href="{$dol_url_root}/custom/aodb/css/bootstrap-extend.css">
	
	<!-- Morris charts -->
	<link rel="stylesheet" href="{$dol_url_root}/custom/aodb/assets/vendor_components/morris.js/morris.css">
	
	<!-- date picker -->
	<link rel="stylesheet" href="{$dol_url_root}/custom/aodb/assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">
	
	<!-- daterange picker -->
	<link rel="stylesheet" href="{$dol_url_root}/custom/aodb/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">
	
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="{$dol_url_root}/custom/aodb/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="{$dol_url_root}/custom/aodb/css/master_style.css">
	
	<!-- Unique_Admin skins -->
	<link rel="stylesheet" href="{$dol_url_root}/custom/aodb/css/skins/_all-skins.css">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">	  
		
	  <div class="row">
        <div class="col-12 ">
          	<div class="box">
              <div class="row no-gutters py-2">

                <div class="col-sm-6 col-lg-3">
                  <div class="box-body br-1 border-light">
                    <div class="flexbox mb-1">
                      <span class="font-size-18">
                        Total Tickets
                      </span>
                      <span class="text-primary font-size-40">154</span>
                    </div>
                    <div class="progress progress-xxs mt-10 mb-0">
                      <div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>


                <div class="col-sm-6 col-lg-3 hidden-down">
                  <div class="box-body br-1 border-light">
                    <div class="flexbox mb-1">
                      <span class="font-size-18">
                        New Tickets
                      </span>
                      <span class="text-info font-size-40">24</span>
                    </div>
                    <div class="progress progress-xxs mt-10 mb-0">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 55%; height: 4px;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>


                <div class="col-sm-6 col-lg-3 d-none d-lg-block">
                  <div class="box-body br-1 border-light">
                    <div class="flexbox mb-1">
                      <span class="font-size-18">
                        Open Tickets
                      </span>
                      <span class="text-warning font-size-40">74</span>
                    </div>
                    <div class="progress progress-xxs mt-10 mb-0">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 65%; height: 4px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>


                <div class="col-sm-6 col-lg-3 d-none d-lg-block">
                  <div class="box-body">
                    <div class="flexbox mb-1">
                      <span class="font-size-18">
                        Closed Tickets
                      </span>
                      <span class="text-danger font-size-40">41</span>
                    </div>
                    <div class="progress progress-xxs mt-10 mb-0">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
        </div>
        <!-- /.col -->
		  
      </div>	
		
	  <div class="row">		
        <div class="col-lg-5 col-12">		  
          <!-- AREA CHART -->
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">Ticket Overview</h4>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
				<ul class="list-inline text-right">
					<li>
						<h5><i class="fa fa-circle mr-5 text-info"></i>Total</h5>
					</li>
					<li>
						<h5><i class="fa fa-circle mr-5 text-danger"></i>Close</h5>
					</li>
				</ul>
              <div id="morris-area-chart2" style="height: 252px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		<div class="col-lg-4 col-12">
          <!-- AREA CHART -->
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">Site activity</h4>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
			    <ul class="list-inline text-center">
					<li>
						<h5><i class="fa fa-circle mr-5 text-success"></i>	Pageviews</h5>
					</li>
					<li>
						<h5><i class="fa fa-circle mr-5 text-secondary"></i>Visitors</h5>
					</li>
				</ul>
              <div class="chart">
                <div class="chart" id="revenue-chart" style="height: 252px;"></div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		<div class="col-lg-3 col-12">
          <!-- AREA CHART -->
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">Best Agent</h4>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
			    <div class="box p-25 text-center">
				  <div>
					<a class="avatar avatar-xxl status-success mb-3" href="#">
					  <img src="../images/avatar/9.jpg" alt="...">
					</a>
				  </div>
				  <h5 class="mt-5 "><a class="text-default hover-primary" href="#">William</a></h5>
				  <p><small class="font-size-12">Designer</small></p>
				  <p class="text-light font-size-12 mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				  <div class="gap-items font-size-16">
					<a class="text-facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="text-instagram" href="#"><i class="fa fa-instagram"></i></a>
					<a class="text-google" href="#"><i class="fa fa-google"></i></a>
					<a class="text-twitter" href="#"><i class="fa fa-twitter"></i></a>
				  </div>
				</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		  
		<div class="col-lg-9 col-12">
			<div class="box">
				<div class="box-header with-border">						
					<h4 class="box-title">Ticket List</h4>
					<h6 class="box-subtitle">List of ticket opend by customers</h6>
				</div>
				<div class="box-body">
					<div class="table-responsive">
						<table id="tickets" class="table mt-0 table-hover no-wrap b-1" data-page-size="10">
							<thead>
								<tr class="bg-gray">
									<th>ID</th>
									<th>Opened By</th>
									<th>Cust. Email</th>
									<th>Sbuject</th>
									<th>Status</th>
									<th>Assign to</th>
									<th>Date</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1011</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/1.jpg" alt="user" class="avatar avatar-sm mr-5" /> Jacob</a>
									</td>
									<td>Jacob@gmail.com</td>
									<td>How to customize the template?</td>
									<td><span class="label label-warning">New</span> </td>
									<td>Gavin</td>
									<td>14-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>1224</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/2.jpg" alt="user" class="avatar avatar-sm mr-5" /> Mason</a>
									</td>
									<td>Mason@gmail.com</td>
									<td>How to change colors</td>
									<td><span class="label label-success">Complete</span> </td>
									<td>Nicholas</td>
									<td>13-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>1024</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/3.jpg" alt="user" class="avatar avatar-sm mr-5" /> William</a>
									</td>
									<td>William@gmail.com</td>
									<td>How to set Horizontal nav</td>
									<td><span class="label label-success">Complete</span> </td>
									<td>Tyler</td>
									<td>13-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>2124</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/4.jpg" alt="user" class="avatar avatar-sm mr-5" /> Jayden</a>
									</td>
									<td>Jayden@gmail.com</td>
									<td>How to change colors</td>
									<td><span class="label label-inverse">Pending</span> </td>
									<td>Tyler</td>
									<td>12-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>3124</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/5.jpg" alt="user" class="avatar avatar-sm mr-5" /> Michael</a>
									</td>
									<td>Michael@gmail.com</td>
									<td>How to set navigation</td>
									<td><span class="label label-success">Complete</span> </td>
									<td>Tyler</td>
									<td>12-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>1611</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/6.jpg" alt="user" class="avatar avatar-sm mr-5" /> Noah</a>
									</td>
									<td>Noah@gmail.com</td>
									<td>How to customize the template?</td>
									<td><span class="label label-warning">New</span> </td>
									<td>Gavin</td>
									<td>14-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>4224</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/7.jpg" alt="user" class="avatar avatar-sm mr-5" /> Aiden</a>
									</td>
									<td>Aiden@gmail.com</td>
									<td>How to change colors</td>
									<td><span class="label label-success">Complete</span> </td>
									<td>Nicholas</td>
									<td>13-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>2524</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/8.jpg" alt="user" class="avatar avatar-sm mr-5" /> Alexander</a>
									</td>
									<td>Alexander@gmail.com</td>
									<td>How to set Horizontal nav</td>
									<td><span class="label label-success">Complete</span> </td>
									<td>Tyler</td>
									<td>13-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>7524</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/9.jpg" alt="user" class="avatar avatar-sm mr-5" /> Elijah</a>
									</td>
									<td>Elijah@gmail.com</td>
									<td>How to customize the template?</td>
									<td><span class="label label-inverse">Pending</span> </td>
									<td>Tyler</td>
									<td>12-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>4124</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/2.jpg" alt="user" class="avatar avatar-sm mr-5" /> Andrew</a>
									</td>
									<td>Andrew@gmail.com</td>
									<td>How to set navigation</td>
									<td><span class="label label-success">Complete</span> </td>
									<td>Tyler</td>
									<td>12-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>1011</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/1.jpg" alt="user" class="avatar avatar-sm mr-5" /> David</a>
									</td>
									<td>David@gmail.com</td>
									<td>How to customize the template?</td>
									<td><span class="label label-warning">New</span> </td>
									<td>Gavin</td>
									<td>14-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>1224</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/3.jpg" alt="user" class="avatar avatar-sm mr-5" />Logan</a>
									</td>
									<td>Logan@gmail.com</td>
									<td>How to change colors</td>
									<td><span class="label label-success">Complete</span> </td>
									<td>Nicholas</td>
									<td>13-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>8024</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/4.jpg" alt="user" class="avatar avatar-sm mr-5" /> Joseph</a>
									</td>
									<td>Joseph@gmail.com</td>
									<td>How to set Horizontal nav</td>
									<td><span class="label label-success">Complete</span> </td>
									<td>Tyler</td>
									<td>13-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>5124</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/5.jpg" alt="user" class="avatar avatar-sm mr-5" /> Gabriel</a>
									</td>
									<td>Gabriel@gmail.com</td>
									<td>How to customize the template?</td>
									<td><span class="label label-inverse">Pending</span> </td>
									<td>Tyler</td>
									<td>12-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>3144</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/6.jpg" alt="user" class="avatar avatar-sm mr-5" /> John</a>
									</td>
									<td>John@gmail.com</td>
									<td>How to set navigation</td>
									<td><span class="label label-success">Complete</span> </td>
									<td>Tyler</td>
									<td>12-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>1621</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/7.jpg" alt="user" class="avatar avatar-sm mr-5" /> Gabriel</a>
									</td>
									<td>Gabriel@gmail.com</td>
									<td>How to customize the template?</td>
									<td><span class="label label-warning">New</span> </td>
									<td>Gavin</td>
									<td>14-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>4724</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/8.jpg" alt="user" class="avatar avatar-sm mr-5" /> Nathan</a>
									</td>
									<td>Nathan@gmail.com</td>
									<td>How to change colors</td>
									<td><span class="label label-success">Complete</span> </td>
									<td>Nicholas</td>
									<td>13-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>2594</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/9.jpg" alt="user" class="avatar avatar-sm mr-5" /> Lucas</a>

									</td>
									<td>Lucas@gmail.com</td>
									<td>How to set Horizontal nav</td>
									<td><span class="label label-success">Complete</span> </td>
									<td>Tyler</td>
									<td>13-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>7524</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/1.jpg" alt="user" class="avatar avatar-sm mr-5" /> Christian</a>
									</td>
									<td>Christian@gmail.com</td>
									<td>How to customize the template?</td>
									<td><span class="label label-inverse">Pending</span> </td>
									<td>Tyler</td>
									<td>12-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>4124</td>
									<td>
										<a href="javascript:void(0)"><img src="../images/avatar/4.jpg" alt="user" class="avatar avatar-sm mr-5" /> Caleb</a>
									</td>
									<td>Caleb@gmail.com</td>
									<td>How to set navigation</td>
									<td><span class="label label-success">Complete</span> </td>
									<td>Tyler</td>
									<td>12-10-2017</td>
									<td>
										<button type="button" class="btn btn-sm btn-danger-outline" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>												
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-12">			
			<div class="box box-inverse bg-red">
				<div class="box-body">
					<div id="myCarouse2" class="carousel slide" data-ride="carousel">
						<!-- Carousel items -->
						<div class="carousel-inner">
							<div class="carousel-item flex-column carousel-item-next carousel-item-left">
								<i class="fa fa-google-plus fa-2x text-white pl-5"></i>
								<p class="text-white">25th Jan</p>
								<h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
						  on buy</h3>
								<div class="text-white m-t-20">
									<i>- Eric fandanc</i>
								</div>
							</div>
							<div class="carousel-item flex-column">
								<i class="fa fa-google-plus fa-2x text-white pl-5"></i>
								<p class="text-white">25th Jan</p>
								<h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
						  on buy</h3>
								<div class="text-white m-t-20">
									<i>- Numbro zomix</i>
								</div>
							</div>
							<div class="carousel-item flex-column active carousel-item-left">
								<i class="fa fa-google-plus fa-2x text-white pl-5"></i>
								<p class="text-white">25th Jan</p>
								<h3 class="text-white font-light">Now Get <span class="font-bold">50% Off</span><br>
						  on buy</h3>
								<div class="text-white m-t-20">
									<i>- Sitrix stock</i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		  
			<div class="box box-inverse box-carousel slide bg-info" data-ride="carousel">
              <div class="box-header no-border">
                <span class="fa fa-twitter font-size-30"></span>
				  <div class="box-tools pull-right">
                	<h5 class="box-title box-title-bold">Twitter feed</h5>
				  </div>
              </div>

              <div class="carousel-inner">
                <blockquote class="blockquote blockquote-inverse no-border m-0 py-15 carousel-item active">
                  <p>Holisticly benchmark plug imperatives for multifunctional.</p>
                  <div class="flexbox">
                    <time class="text-white" datetime="2017-11-22 20:00">22 November, 2017</time>
                    <span><i class="fa fa-heart"></i> 62</span>
                  </div>
                </blockquote>

                <blockquote class="blockquote blockquote-inverse no-border m-0 py-15 carousel-item">
                  <p>Uniquely revolutionize leveraged catalysts change.</p>
                  <div class="flexbox">
                    <time class="text-white" datetime="2017-11-22 20:00">22 November, 2017</time>
                    <span><i class="fa fa-heart"></i> 45</span>
                  </div>
                </blockquote>

                <blockquote class="blockquote blockquote-inverse no-border m-0 py-15 carousel-item">
                  <p>Enthusiastically optimize cross-media manufactured.</p>
                  <div class="flexbox">
                    <time class="text-white" datetime="2017-11-22 20:00">22 November, 2017</time>
                    <span><i class="fa fa-heart"></i> 65</span>
                  </div>
                </blockquote>
              </div>
            </div>
			
			<div class="box">
				<div class="box-header">
					<h4 class="box-title">Site Traffic</h4>
					<div class="box-tool pull-right">
						<small class="mt-10 text-success"><i class="fa fa-sort-asc"></i> 18% High then last month</small> 
					</div>
				</div>
				<div class="box-body">
					<ul class="flexbox flex-justified text-center my-20">
						<li class="br-1">
						  <div class="font-size-18">80.40%</div>
						  <small>Overall Growth</small>
						</li>

						<li class="br-1">
						  <div class="font-size-18">15.40%</div>
						  <small>Montly</small>
						</li>

						<li>
						  <div class="font-size-18">5.50%</div>
						  <small>Day</small>
						</li>
					  </ul>
					<div id="sparkline8"><canvas width="484" height="60" style="display: inline-block; width: 484px; height: 60px; vertical-align: top;"></canvas></div>
				</div>
			</div>	
			
			<div class="media align-items-center py-10 bg-inverse mb-20">
			  <img class="avatar avatar-xxl" src="../images/avatar/7.jpg" alt="...">
			  <div class="media-body">
				<h5>Racky Behal</h5>
				<p class="text-white font-size-12 my-3">Continually underwhelm stand-alone relationships via information. Dramatically productivate extensive process.</p>
				<div class="gap-items font-size-16">
				  <a class="text-white" href="#"><i class="fa fa-twitter"></i></a>
				  <a class="text-white" href="#"><i class="fa fa-instagram"></i></a>
				  <a class="text-white" href="#"><i class="fa fa-facebook"></i></a>
				</div>
			  </div>
			</div>
			
		</div>
		
	</div>	  
		
      <div class="row">
      	<div class="col-xl-7 col-12">
      		<!-- quick email widget -->
          <div class="box">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h4 class="box-title">Quick Email</h4>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-danger btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea b-1 p-10 w-p100" placeholder="Message"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-blue" id="sendEmail"> Send <i class="fa fa-paper-plane-o"></i></button>
            </div>
          </div>
			
      	</div>
      	<div class="col-xl-5 col-12">            
			
          <!-- DIRECT CHAT PRIMARY -->
          <div class="box direct-chat direct-chat-info">
            <div class="box-header with-border">
              <h4 class="box-title">Direct Chat</h4>

              <div class="box-tools pull-right">
				<span data-toggle="tooltip" title="1 New Messages" class="badge bg-blue">1</span>
				<button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
				  <i class="fa fa-comments"></i></button>
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				</button>
				<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
				</button>
			  </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages inner-content-div" id="direct-chat">
                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-left">Tom Crus</span>
					<span class="direct-chat-timestamp pull-right">April 14, 2017 18:00 </span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="../images/user1-128x128.jpg" alt="message user image">
				  <!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					Lorem Ipsum is simply dummy text industry.
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-right">Mili Lakhani</span>
					<span class="direct-chat-timestamp pull-left">April 14, 2017 18:00</span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="../images/user3-128x128.jpg" alt="message user image">
				  <!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					Lorem Ipsum is...
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
                <!-- /.direct-chat-msg -->
				<div class="direct-chat-msg">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-left">Tom Crus</span>
					<span class="direct-chat-timestamp pull-right">April 14, 2017 18:00 </span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="../images/user1-128x128.jpg" alt="message user image">
				  <!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					Lorem Ipsum is simply dummy text industry.
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-right">Mili Lakhani</span>
					<span class="direct-chat-timestamp pull-left">April 14, 2017 18:00</span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="../images/user3-128x128.jpg" alt="message user image">
				  <!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					Lorem Ipsum is...
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
                <!-- /.direct-chat-msg -->
				<div class="direct-chat-msg">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-left">Tom Crus</span>
					<span class="direct-chat-timestamp pull-right">April 14, 2017 18:00 </span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="../images/user1-128x128.jpg" alt="message user image">
				  <!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					Lorem Ipsum is simply dummy text industry.
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
				  <div class="direct-chat-info clearfix">
					<span class="direct-chat-name pull-right">Mili Lakhani</span>
					<span class="direct-chat-timestamp pull-left">April 14, 2017 18:00</span>
				  </div>
				  <!-- /.direct-chat-info -->
				  <img class="direct-chat-img" src="../images/user3-128x128.jpg" alt="message user image">
				  <!-- /.direct-chat-img -->
				  <div class="direct-chat-text">
					Lorem Ipsum is...
				  </div>
				  <!-- /.direct-chat-text -->
				</div>
                <!-- /.direct-chat-msg -->
              </div>
              <!--/.direct-chat-messages-->

              <!-- Contacts are loaded here -->
              <div class="direct-chat-contacts">
                <ul class="contacts-list">
                  <li>
					<a href="#">
					  <img class="contacts-list-img" src="../images/user1-128x128.jpg" alt="User Image">

					  <div class="contacts-list-info">
							<span class="contacts-list-name">
							  Pavan kumar
							  <small class="contacts-list-date pull-right">April 14, 2017</small>
							</span>
						<span class="contacts-list-email">info@.multipurpose.com</span>
					  </div>
					  <!-- /.contacts-list-info -->
					</a>
				  </li>
				  <!-- End Contact Item -->
				  <li>
					<a href="#">
					  <img class="contacts-list-img" src="../images/user7-128x128.jpg" alt="User Image">

					  <div class="contacts-list-info">
							<span class="contacts-list-name">
							  Sonu Sud
							  <small class="contacts-list-date pull-right">March 14, 2017</small>
							</span>
						<span class="contacts-list-email">sonu@gmail.com</span>
					  </div>
					  <!-- /.contacts-list-info -->
					</a>
				  </li>
                  <!-- End Contact Item -->
                </ul>
                <!-- /.contatcts-list -->
              </div>
              <!-- /.direct-chat-pane -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <form action="#" method="post">
                <div class="input-group">
                  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-info">Send</button>
                      </span>
                </div>
              </form>
            </div>
            <!-- /.box-footer-->
          </div>
          <!--/.direct-chat -->
			
			
        </div>      	
      	
      </div>
      
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  	<!-- popper -->
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>
	
	<!-- Morris.js charts -->
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_components/raphael/raphael.min.js"></script>
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_components/morris.js/morris.min.js"></script>	
	
	<!-- DataTables -->
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	
	<!-- This is data table -->
    <script src="{$dol_url_root}/custom/aodb/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
	
	<!-- Sparkline -->
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js"></script>
	
	<!-- daterangepicker -->
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<!-- datepicker -->
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	
	<!-- Bootstrap WYSIHTML5 -->
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
	
	<!-- Slimscroll -->
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	
	<!-- FastClick -->
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- peity -->
	<script src="{$dol_url_root}/custom/aodb/assets/vendor_components/jquery.peity/jquery.peity.js"></script>
	
	<!-- Unique_Admin App -->
	<script src="{$dol_url_root}/custom/aodb/js/template.js"></script>
	
	<!-- Unique_Admin dashboard demo (This is only for demo purposes) -->
	<script src="{$dol_url_root}/custom/aodb/js/pages/dashboard.js"></script>
	
	<!-- Unique_Admin for demo purposes -->
	<script src="{$dol_url_root}/custom/aodb/js/demo.js"></script>

    <script>

    var query_json = {$query_json};
  
{literal}
    $.post('/framfor/htdocs/custom/aodb/ajax/ajaxFlights.php', {query: query_json}, (result)=> {
        $.each(JSON.parse(result),(data,value)=>{
            console.log(value);
        });
       
    });
{/literal}
    </script>
