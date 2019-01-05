<?php include 'header.php';?>

<main class="main-content bgc-grey-100">
	<div id="mainContent">
		<div class="row gap-20 masonry pos-r">
			<div class="masonry-sizer col-md-6">
				
			</div>
			<?php 

			include("db.php");
			$usrcnt = mysqli_query($con,"SELECT COUNT(*) as c_id FROM cat_bill");
			$odrcnt = mysqli_query($con,"SELECT COUNT(*) as id FROM cat_orders");
			//$odrcnt = mysqli_query($con,"SELECT COUNT(*) as o_id FROM hotel_info");
			$res = mysqli_fetch_array($usrcnt);
            $cnt_mbrs = $res ['c_id'];
             $res1 = mysqli_fetch_array($odrcnt);
            $cnt_odrs = $res1 ['id'];
            // $res1 = mysqli_fetch_array($odrcnt);
            // $cnt_odrs = $res1['o_id'];
             // count no. of dishes
             $dishcnt = mysqli_query($con,"SELECT COUNT(*) as d_id FROM dish_list");
             $res2 = mysqli_fetch_array($dishcnt);
            $cnt_dish = $res2 ['d_id'];
               // count no. of Items
            $itemcnt = mysqli_query($con,"SELECT COUNT(*) as id FROM item_list");
             $res3 = mysqli_fetch_array($itemcnt);
            $cnt_item = $res3 ['id'];

            $eventcnt = mysqli_query($con,"SELECT  count(c_id) as cnt FROM event_info");
             $res5 = mysqli_fetch_array($eventcnt);
            $cnt_event = $res5 ['cnt'];
			?>
			<div class="masonry-item w-100">
				<div class="row gap-20">
					<div class="col-md-3">
						<div class="layers bd bgc-white p-20">
							<div class="layer w-100 mB-10"><a href="customer_catering_invoice.php"><h6 class="lh-1">Catering Customers</h6></a>
							</div>
							<div class="layer w-100">
								<div class="peers ai-sb fxw-nw">
									<div class="peer peer-greed"><i class="c-green-500 ti-user"></i><i class="c-green-500 ti-user"></i>
									</div>
									<div class="peer"><a href="event_info.php"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500"><?php echo "$cnt_mbrs";?></a></span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="layers bd bgc-white p-20">
							<div class="layer w-100 mB-10"><a href="event_info.php"><h6 class="lh-1">Catering Orders</h6></a>
							</div>
							<div class="layer w-100">
								<div class="peers ai-sb fxw-nw">
									<div class="peer peer-greed"><i class="c-orange-700 ti-shopping-cart"></i>
									</div>
									<div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500"><?php echo "$cnt_odrs";?></span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="layers bd bgc-white p-20">
							<div class="layer w-100 mB-10"><a href="#"><h6 class="lh-1">Dishes</h6></a></div>
							<div class="layer w-100">
								<div class="peers ai-sb fxw-nw">
									<div class="peer peer-greed"><i class="c-purple-500 ti-tag"></i><i class="c-purple-500 ti-tag"></i></div>
									<div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500"><?php echo "$cnt_dish";?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="layers bd bgc-white p-20">
							<div class="layer w-100 mB-10"><a href="invoices.php"><h6 class="lh-1">List Items</h6></a></div>
							<div class="layer w-100">
								<div class="peers ai-sb fxw-nw">
									<div class="peer peer-greed"><i class="c-blue-500 ti-menu-alt"></i></div>
									<div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500"><?php echo "$cnt_item";?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="masonry-item col-12">
				<div class="bd bgc-white">
					<div class="peers fxw-nw@lg+ ai-s">
						<div class="peer peer-greed w-70p@lg+ w-100@lg- p-20">
							<div class="layers">
								<div class="layer w-100 mB-10"><h6 class="lh-1">Statistics</h6>
								</div>
								<div class="layer w-100"><div ><?php include "graph.php";?></div>
							</div>
						</div>
					</div>
					
		</div>
	</div>
</div>

</div>
</div>
<!-- <div class="masonry-item col-md-6">
	<div class="bd bgc-white">
		<div class="layers">
			<div class="layer w-100 p-20">
				<h6 class="lh-1">Sales Report</h6>
			</div>
			<div class="layer w-100">
				<div class="bgc-light-blue-500 c-white p-20">
					<div class="peers ai-c jc-sb gap-40">
						<div class="peer peer-greed">
							<h5>November 2017</h5>
							<p class="mB-0">Sales Report</p>
						</div>
						<div class="peer">
							<h3 class="text-right">$6,000</h3>
						</div>
					</div>
				</div>

				<div class="table-responsive p-20">
					<table class="table">
						<thead>
							<tr>
								<th class="bdwT-0">Name</th>
								<th class="bdwT-0">Status</th>
								<th class="bdwT-0">Date</th>
								<th class="bdwT-0">Price</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="fw-600">Item #1 Name</td>
								<td><span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c badge-pill">Unavailable</span></td>
								<td>Nov 18</td>
								<td><span class="text-success">$12</span></td>
							</tr>

							<tr>
								<td class="fw-600">Item #2 Name</td>
								<td><span class="badge bgc-deep-purple-50 c-deep-purple-700 p-10 lh-0 tt-c badge-pill">New</span>
								</td>
								<td>Nov 19</td>
								<td><span class="text-info">$34</span></td>
							</tr>

							<tr>
								<td class="fw-600">Item #3 Name</td>
								<td><span class="badge bgc-pink-50 c-pink-700 p-10 lh-0 tt-c badge-pill">New</span></td>
								<td>Nov 20</td>
								<td><span class="text-danger">-$45</span></td>
							</tr>

							<tr>
								<td class="fw-600">Item #4 Name</td>
								<td><span class="badge bgc-green-50 c-green-700 p-10 lh-0 tt-c badge-pill">Unavailable</span></td>
								<td>Nov 21</td>
								<td><span class="text-success">$65</span></td>
							</tr>

							<tr>
								<td class="fw-600">Item #5 Name</td>
								<td><span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c badge-pill">Used</span></td>
								<td>Nov 22</td>
								<td><span class="text-success">$78</span></td>
							</tr>

							<tr>
								<td class="fw-600">Item #6 Name</td>
								<td><span class="badge bgc-orange-50 c-orange-700 p-10 lh-0 tt-c badge-pill">Used</span></td>
								<td>Nov 23</td>
								<td><span class="text-danger">-$88</span></td>
							</tr>
							<tr>
								<td class="fw-600">Item #7 Name</td>
								<td><span class="badge bgc-yellow-50 c-yellow-700 p-10 lh-0 tt-c badge-pill">Old</span></td>
								<td>Nov 22</td>
								<td><span class="text-success">$56</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="ta-c bdT w-100 p-20"><a href="#">Check all the sales</a>
		</div>
	</div>
</div>
<div class="masonry-item col-md-6">
	<div class="bd bgc-white p-20">
		<div class="layers">
			<div class="layer w-100 mB-20">
				<h6 class="lh-1">Weather</h6>
			</div>
			<div class="layer w-100">
				<div class="peers ai-c jc-sb fxw-nw">
					<div class="peer peer-greed">
						<div class="layers">
							<div class="layer w-100">
								<div class="peers fxw-nw ai-c">
									<div class="peer mR-20"><h3>32<sup>°F</sup></h3>
									</div>
									<div class="peer"><canvas class="sleet" width="44" height="44"></canvas>
									</div>
								</div>
							</div>
							<div class="layer w-100"><span class="fw-600 c-grey-600">Partly Clouds</span>
							</div>
						</div>
					</div>
					<div class="peer">
						<div class="layers ai-fe">
							<div class="layer">
								<h5 class="mB-5">Monday</h5>
							</div>
							<div class="layer"><span class="fw-600 c-grey-600">Nov, 01 2017</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="layer w-100 mY-30">
				<div class="layers bdB">
					<div class="layer w-100 bdT pY-5">
						<div class="peers ai-c jc-sb fxw-nw">
							<div class="peer"><span>Wind</span></div>
							<div class="peer ta-r"><span class="fw-600 c-grey-800">10km/h</span>
							</div>
						</div>
					</div>
					<div class="layer w-100 bdT pY-5">
						<div class="peers ai-c jc-sb fxw-nw">
							<div class="peer"><span>Sunrise</span>
							</div>
							<div class="peer ta-r"><span class="fw-600 c-grey-800">05:00 AM</span>
							</div>
						</div>
					</div>
					<div class="layer w-100 bdT pY-5">
						<div class="peers ai-c jc-sb fxw-nw">
							<div class="peer"><span>Pressure</span>
							</div>
							<div class="peer ta-r"><span class="fw-600 c-grey-800">1B</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="layer w-100">
				<div class="peers peers-greed ai-fs ta-c">
					<div class="peer">
						<h6 class="mB-10">MON</h6>
						<canvas class="sleet" width="30" height="30"></canvas>
						<span class="d-b fw-600">32<sup>°F</sup></span>
					</div>
					<div class="peer">
						<h6 class="mB-10">TUE</h6>
						<canvas class="clear-day" width="30" height="30"></canvas>
						<span class="d-b fw-600">30<sup>°F</sup></span>
					</div>
					<div class="peer">
						<h6 class="mB-10">WED</h6>
						<canvas class="partly-cloudy-day" width="30" height="30"></canvas>
						<span class="d-b fw-600">28<sup>°F</sup></span>
					</div>
					<div class="peer">
						<h6 class="mB-10">THR</h6>
						<canvas class="cloudy" width="30" height="30"></canvas>
						<span class="d-b fw-600">32<sup>°F</sup></span>
					</div>

					<div class="peer">
						<h6 class="mB-10">FRI</h6>
						<canvas class="snow" width="30" height="30"></canvas>
						<span class="d-b fw-600">24<sup>°F</sup></span>
					</div>

					<div class="peer">
						<h6 class="mB-10">SAT</h6>
						<canvas class="wind" width="30" height="30"></canvas>
						<span class="d-b fw-600">28<sup>°F</sup></span>
					</div>

					<div class="peer">
						<h6 class="mB-10">SUN</h6>
						<canvas class="sleet" width="30" height="30"></canvas>
						<span class="d-b fw-600">32<sup>°F</sup></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->
<!-- <div class="masonry-item col-md-6">
	<div class="bd bgc-white">
		<div class="layers">
			<div class="layer w-100 p-20">
				<h6 class="lh-1">Quick Chat</h6>
			</div>
			<div class="layer w-100">
				<div class="bgc-grey-200 p-20 gapY-15">
					<div class="peers fxw-nw">
						<div class="peer mR-20">
							<img class="w-2r bdrs-50p" src="../../../randomuser.me/api/portraits/men/11.jpg" alt="">
						</div>
						<div class="peer peer-greed">
							<div class="layers ai-fs gapY-5">
								<div class="layer">
									<div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
										<div class="peer mR-10"><small>10:00 AM</small>
										</div>
										<div class="peer-greed"><span>Lorem Ipsum is simply dummy text of</span>
										</div>
									</div>
								</div>
								<div class="layer">
									<div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
										<div class="peer mR-10"><small>10:00 AM</small>
										</div>
										<div class="peer-greed"><span>the printing and typesetting industry.</span>
										</div>
									</div>
								</div>
								<div class="layer">
									<div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
										<div class="peer mR-10"><small>10:00 AM</small>
										</div>
										<div class="peer-greed"><span>Lorem Ipsum has been the industry's</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="peers fxw-nw ai-fe">
						<div class="peer ord-1 mL-20">
							<img class="w-2r bdrs-50p" src="../../../randomuser.me/api/portraits/men/12.jpg" alt=""></div>
							<div class="peer peer-greed ord-0">
								<div class="layers ai-fe gapY-10">
									<div class="layer">
										<div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
											<div class="peer mL-10 ord-1"><small>10:00 AM</small>
											</div>
											<div class="peer-greed ord-0"><span>Heloo</span></div>
										</div>
									</div>
									<div class="layer"><div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
										<div class="peer mL-10 ord-1"><small>10:00 AM</small>
										</div>
										<div class="peer-greed ord-0"><span>??</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="p-20 bdT bgc-white">
					<div class="pos-r">
						<input type="text" class="form-control bdrs-10em m-0" placeholder="Say something..."> 
						<button type="button" class="btn btn-primary bdrs-50p w-2r p-0 h-2r pos-a r-1 t-1"><i class="fa fa-paper-plane-o"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->
</div>
</div>
</main>


<?php include 'footer.php';?>