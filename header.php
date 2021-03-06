<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Dashboard</title>
	<style>#loader{transition:all .3s ease-in-out;opacity:1;visibility:visible;position:fixed;height:100vh;width:100%;background:#fff;z-index:90000}#loader.fadeOut{opacity:0;visibility:hidden}.spinner{width:40px;height:40px;position:absolute;top:calc(50% - 20px);left:calc(50% - 20px);background-color:#333;border-radius:100%;-webkit-animation:sk-scaleout 1s infinite ease-in-out;animation:sk-scaleout 1s infinite ease-in-out}@-webkit-keyframes sk-scaleout{0%{-webkit-transform:scale(0)}100%{-webkit-transform:scale(1);opacity:0}}@keyframes sk-scaleout{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}</style>

	<link href="style.css" rel="stylesheet">
	</head>
	<body class="app">
		<div id="loader">
			<div class="spinner"></div>
			</div>
			<script type="text/javascript">window.addEventListener('load', () => {
	const loader = document.getElementById('loader');
	setTimeout(() => {
		loader.classList.add('fadeOut');
	}, 300);
});</script>

<div>
	<div class="sidebar">
		<div class="sidebar-inner">
			<div class="sidebar-logo">
				<div class="peers ai-c fxw-nw"><div class="peer peer-greed">
					<a class="sidebar-link td-n" href="index.php" class="td-n">
						<div class="peers ai-c fxw-nw">
							<div class="peer">
								<div class="logo">
									<img src="img/logo1.png" alt="">
								</div>
							</div>
							<div class="peer peer-greed">
								<h5 class="lh-1 mB-0 logo-text">Salvi Caterings</h5>
							</div>
						</div>
					</a>
				</div>
				<div class="peer">
					<div class="mobile-toggle sidebar-toggle">
						<a href="#" class="td-n"><i class="ti-arrow-circle-left"></i></a>
					</div>
				</div>
			</div>
		</div>
		<ul class="sidebar-menu scrollable pos-r">
			<li class="nav-item mT-30 active">
				<a class="sidebar-link" href="index.php" default><span class="icon-holder"><i class="c-blue-500 ti-home"></i> </span><span class="title">Dashboard</span></a></li>

				<li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-red-500 ti-shopping-cart"></i> </span><span class="title">Inventory</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>

					<ul class="dropdown-menu">
						<li><a class="sidebar-link" href="inventory_hotel_details.php">Hotel Inventory </a></li>
						<li><a class="sidebar-link" href="inventory_catering_details.php">Catering Inventory</a></li>
					</ul>
				</li>

				<li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-deep-purple-500 ti-printer"></i> </span><span class="title">Billing</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>

					<ul class="dropdown-menu">
						<li><a class="sidebar-link" href="hotel_invoice.php">Hotel Billing  </a></li>
						<li><a class="sidebar-link" href="customer_catering_invoice.php">Catering Billing</a></li>
					</ul>
				</li>


				<li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-orange-500 ti-id-badge"></i> </span><span class="title">Worker</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>

					<ul class="dropdown-menu">
						<li><a class="sidebar-link" href="worker_details.php">Catering Worker </a></li>
						<li><a class="sidebar-link" href="#">Hotel Worker </a></li>
					</ul>
				</li>

				<li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-teal-500 ti-pinterest-alt"></i> </span><span class="title">Manage Products</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>

					<ul class="dropdown-menu">
						<li><a class="sidebar-link" href="add_dish_form.php">Add New Dishes</a></li>
						<li><a class="sidebar-link" href="add_item_form.php">Add New items </a></li>
					</ul>
				</li>

				<li class="nav-item"><a class="sidebar-link" href="invoices.php"><span class="icon-holder"><i class="c-brown-500 ti-menu-alt"></i> </span><span class="title">Item list invoice</span></a></li>
				
								<li class="nav-item"><a class="sidebar-link" href="event_info.php"><span class="icon-holder"><i class="c-deep-orange-500 ti-calendar"></i> </span><span class="title">Events</span></a></li>

				<li class="nav-item"><a class="sidebar-link" href="signin.php"><span class="icon-holder"><i class="c-blue-500 ti-share"></i> </span><span class="title">Sign In</span></a></li>

				


				<!-- <li class="nav-item"><a class="sidebar-link" href="compose.html"><span class="icon-holder"><i class="c-blue-500 ti-share"></i> </span><span class="title">Compose</span></a></li>
				<li class="nav-item"><a class="sidebar-link" href="chat.html"><span class="icon-holder"><i class="c-deep-purple-500 ti-comment-alt"></i> </span><span class="title">Chat</span></a></li>
				<li class="nav-item"><a class="sidebar-link" href="charts.html"><span class="icon-holder"><i class="c-indigo-500 ti-bar-chart"></i> </span><span class="title">Charts</span></a></li>
				<li class="nav-item"><a class="sidebar-link" href="forms.html"><span class="icon-holder"><i class="c-light-blue-500 ti-pencil"></i> </span><span class="title">Forms</span></a></li>
				<li class="nav-item dropdown"><a class="sidebar-link" href="ui.html"><span class="icon-holder"><i class="c-pink-500 ti-palette"></i> </span><span class="title">UI Elements</span></a></li> -->

				<!-- <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-orange-500 ti-layout-list-thumb"></i> </span><span class="title">Tables</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>

					<ul class="dropdown-menu">
						<li><a class="sidebar-link" href="basic-table.html">Basic Table</a></li>
						<li><a class="sidebar-link" href="datatable.html">Data Table</a></li>
					</ul>
				</li>

				<li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-purple-500 ti-map"></i> </span><span class="title">Maps</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>

					<ul class="dropdown-menu">
						<li><a href="google-maps.html">Google Map</a></li>
						<li><a href="vector-maps.html">Vector Map</a></li>

					</ul>
				</li> -->
			<!-- 	<li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-red-500 ti-files"></i> </span><span class="title">Pages</span> <span class="arrow"><i class="ti-angle-right"></i></span></a><ul class="dropdown-menu"><li><a class="sidebar-link" href="404.html">404</a></li>
					<li><a class="sidebar-link" href="500.html">500</a></li><li><a class="sidebar-link" href="signin.html">Sign In</a></li>
					<li><a class="sidebar-link" href="signup.html">Sign Up</a></li>
				</ul>
			</li> -->

			<!-- <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-teal-500 ti-view-list-alt"></i> </span><span class="title">Multiple Levels</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>

				<ul class="dropdown-menu">
					<li class="nav-item dropdown"><a href="javascript:void(0);"><span>Menu Item</span></a></li>
					<li class="nav-item dropdown"><a href="javascript:void(0);"><span>Menu Item</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>

						<ul class="dropdown-menu">
							<li><a href="javascript:void(0);">Menu Item</a></li>
							<li><a href="javascript:void(0);">Menu Item</a></li>
						</ul>
					</li>

				</ul>
			</li> -->
		</ul>
	</div>
</div>
<div class="page-container">
	<div class="header navbar">
		<div class="header-container">
			<ul class="nav-left">
				<li><a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="ti-menu"></i></a></li>
				<!-- <li class="search-box"><a class="search-toggle no-pdd-right" href="javascript:void(0);"><i class="search-icon ti-search pdd-right-10"></i> <i class="search-icon-close ti-close pdd-right-10"></i></a></li>
				<li class="search-input"><input class="form-control" type="text" placeholder="Search..."></li> -->
			</ul>
			<?php
								include "db.php";
								$sql = "SELECT count(*) as i_id FROM inventory_stock_cater";
                                 $qry = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($qry);
                                 $cntitem = $row['i_id'];

                               //End Count message

                                 
                                 //for Alert message
								$query = "SELECT * FROM inventory_stock_cater ORDER BY i_id DESC LIMIT 2"; 
								$result = mysqli_query($con, $query);
								$output = '';
								if(mysqli_num_rows($result) > 0)
                                 {
 
                                 while($row = mysqli_fetch_array($result))
 
                                 {
 
                                     $output .= '
                                       <li>
                                       <a href="#">
                                  <strong>'.$row["item"].'</strong><br />
                               
                                      </a>
                                     </li>
 
                                            ';
                                         }
                                          }
                                          // End Alert Message
                                          //Event List
                                          $eventsql = "SELECT count(*) as c_id FROM event_info";
                                 $eventqry = mysqli_query($con, $eventsql);
                                 $row = mysqli_fetch_assoc($eventqry);
                                 $cntevent = $row['c_id'];
                                          $eventquery = "SELECT * FROM event_info  ORDER BY c_id DESC LIMIT 2"; 
								$result1 = mysqli_query($con, $eventquery);
								$output1 = '';
								if(mysqli_num_rows($result1) > 0)
                                 {
 
                                 while($row = mysqli_fetch_array($result1))
 
                                 {
 
                                     $output1 .= '
                                       <li>
                                       <a href="#">
                                  <strong>'.$row["event_name"].'</strong><br />
                               
                                      </a>
                                     </li>
 
                                            ';
                                         }
                                          }      

 
								?>
			<ul class="nav-right">
				<li class="notifications dropdown"><span class="counter bgc-red"><?php echo "$cntitem" ; ?></span> <a href="#" class="dropdown-toggle no-after" data-toggle="dropdown"><i class="ti-bell"></i></a>
					<ul class="dropdown-menu">
						<li class="pX-20 pY-15 bdB"><i class="ti-hand-point-down pR-10"></i> <span class="fsz-sm fw-600 c-grey-900"><?php echo "New Item Added to Catering Inventory".$output?></span></li>
						<li>

</li>

<li class="pX-20 pY-15 ta-c bdT"><span><a href="inventory_catering_details.php" class="c-grey-600 cH-blue fsz-sm td-n">View All Items <i class="fs-xs ti-angle-right mL-10"></i></a></span></li>
					

	
</ul>
</li>
<li class="notifications dropdown"><span class="counter bgc-blue"><?php echo "$cntevent" ; ?></span> <a href="#" class="dropdown-toggle no-after" data-toggle="dropdown"><i class="ti-email"></i></a>
<ul class="dropdown-menu">
	<li class="pX-20 pY-15 bdB"><i class="ti-email pR-10"></i> <span class="fsz-sm fw-600 c-grey-900"><?php echo "New Event Added". $output1; ?></span>
	</li>
	<li>

</li>

<li class="pX-20 pY-15 ta-c bdT"><span><a href="event_info.php" class="c-grey-600 cH-blue fsz-sm td-n">View All Events <i class="fs-xs ti-angle-right mL-10"></i></a></span></li>
</ul>
</li>

<li class="dropdown"><a href="#" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
	<div class="peer mR-10">
		<img class="w-2r bdrs-50p" src="../../../randomuser.me/api/portraits/men/10.jpg" alt="">
	</div>
	<div class="peer"><span class="fsz-sm c-grey-900">Admin</span>
	</div>
</a>

<ul class="dropdown-menu fsz-sm">
	<!-- <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-settings mR-10"></i> <span>Setting</span></a>
	</li>

	<li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-user mR-10"></i> <span>Profile</span></a>
	</li>

	<li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-email mR-10"></i> <span>Messages</span></a></li> -->

	<li role="separator" class="divider"></li>
	<li><a href="signin.php" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-power-off mR-10"></i> <span>Logout</span></a></li>
</ul>
</li>

</ul>
</div>
</div>
