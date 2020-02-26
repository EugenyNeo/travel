<?php
/**
Template name: Home page
*/

get_header();?>


<section class="flights" id="flights">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4 class="text_section">Flights</h4>
			</div>

			<div class="col-md-6">
				<ul class="menu_flights d-flex">
					<li class="menu_flights__item">
			            <a href="#" class="active">Non stop</a>
					</li>
					<li class="menu_flights__item">
			            <a href="#" class="">Best price</a>
					</li>
					<li class="menu_flights__item">
			            <a href="#">Airline</a>
					</li>
					<li class="menu_flights__item">
			            <a href="#">Schedule</a>
					</li>
				</ul>
			</div>
		</div>

		<!--table-->
		<div class="row">
			<div class="table-responsive">
			<table class="table">
				<thead >
					<tr >
						<th class="airlines">Airles</th>
						<th>Date</th>
						<th>Departure</th>
						<th>Arrival</th>
						<th>Time</th>
						<th class="price">Price</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="d-flex">
							<span style="padding:10px 0" >
								<img class="vueling_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/vueling.png" width="35px" alt="vueling" >
							</span>
							<span style="margin-left:20px;">
								<h5>Vueling</h5>
						    	<p>VO1361</p>
						    </span>
						</td>
						<td>
							<h5>03/11/2017</h5>
							<p>In 3 days</p>
						</td>
						<td>
							<h5>Paris(CDG)</h5>
							<p>07:15</p>
						</td>
						<td>
							<h5>Miami</h5>
							<p>5:00</p>
						</td>
						<td>
							<h5>08:45</h5>
							<p>CDG - MIA</p>
						</td>
						<td>
							<button class="btn btn_price">870$</button>
						</td>
					</tr>

					<tr>
						<td class="d-flex justify-content-left ">
							<span style="padding:10px 0" >
								<img class="vueling_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/vueling.png" width="35px" alt="vueling" >
							</span>
							<span style="margin-left:20px;">
								<h5>Vueling</h5>
						    	<p>VO1361</p>
						    </span>
						</td>
						<td>
							<h5>03/11/2017</h5>
							<p>In 3 days</p>
						</td>
						<td>
							<h5>Paris(CDG)</h5>
							<p>07:15</p>
						</td>
						<td>
							<h5>Miami</h5>
							<p>5:00</p>
						</td>
						<td>
							<h5>08:45</h5>
							<p>CDG - MIA</p>
						</td>
						<td>
							<button class="btn btn_price">870$</button>
						</td>
					</tr>

					<tr>
						<td class="d-flex justify-content-left ">
							<span style="padding:10px 0" >
								<img class="vueling_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/vueling.png" width="35px" alt="vueling" >
							</span>
							<span style="margin-left:20px;">
								<h5>Vueling</h5>
						    	<p>VO1361</p>
						    </span>
						</td>
						<td>
							<h5>03/11/2017</h5>
							<p>In 3 days</p>
						</td>
						<td>
							<h5>Paris(CDG)</h5>
							<p>07:15</p>
						</td>
						<td>
							<h5>Miami</h5>
							<p>5:00</p>
						</td>
						<td>
							<h5>08:45</h5>
							<p>CDG - MIA</p>
						</td>
						<td>
							<button class="btn btn_price">870$</button>
						</td>
					</tr>

					<tr>
						<td class="d-flex justify-content-left ">
							<span style="padding:10px 0" >
								<img class="vueling_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/vueling.png" width="35px" alt="vueling" >
							</span>
							<span style="margin-left:20px;">
								<h5>Vueling</h5>
						    	<p>VO1361</p>
						    </span>
						</td>
						<td>
							<h5>03/11/2017</h5>
							<p>In 3 days</p>
						</td>
						<td>
							<h5>Paris(CDG)</h5>
							<p>07:15</p>
						</td>
						<td>
							<h5>Miami</h5>
							<p>5:00</p>
						</td>
						<td>
							<h5>08:45</h5>
							<p>CDG - MIA</p>
						</td>
						<td>
							<button class="btn btn_price">870$</button>
						</td>
					</tr>

					<tr>
						<td class="d-flex justify-content-left ">
							<span style="padding:10px 0" >
								<img class="vueling_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/vueling.png" width="35px" alt="vueling" >
							</span>
							<span style="margin-left:20px;">
								<h5>Vueling</h5>
						    	<p>VO1361</p>
						    </span>
						</td>
						<td>
							<h5>03/11/2017</h5>
							<p>In 3 days</p>
						</td>
						<td>
							<h5>Paris(CDG)</h5>
							<p>07:15</p>
						</td>
						<td>
							<h5>Miami</h5>
							<p>5:00</p>
						</td>
						<td>
							<h5>08:45</h5>
							<p>CDG - MIA</p>
						</td>
						<td>
							<button class="btn btn_price">870$</button>
						</td>
					</tr>
				</tbody>
			</table>

           </div>
		</div>

			<div class="all_flights">
		       <a href="#">See all flights</a>
	        </div>
	</div>

</section>



<section id="hotels" class="hotels">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4 class="text_">Hotels</h4>
			</div>

			<div class="col-md-6">
				<ul class="menu_hotelss d-flex ">
					<li class="menu_hotelss__item">
			            <a href="#" class="active">Best price</a>
					</li>
					<li class="menu_hotelss__item">
			            <a href="#" class="">Distance</a>
					</li>

				</ul>
		    </div>
		</div>

           <div class="row justify-content-center">
      		      <div class="col col-md-4 col-12">
                        <div class="block_one">
      						<div>
      							<img class="block_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/room_1.jpg" alt="img_1" class="one">
      						</div>

      						<div class="description">
      							<h6>Hotel Paris Ouest Acheros</h6>
      							<div class="option">
      								<span class="distance">12.3 km</span>
      								<span class="wifi">Free Wi-Fi</span>
      							</div>
      							<button type="btn" class="price_room">30$</button>
      						</div>
      					</div>
      			</div>


      			<div class="col col-md-4 col-12">
                        <div class="block_one">
      						<div>
      							<img class="block_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/room_2.jpg" alt="img_2" class="one">
      						</div>

      						<div class="description">
      							<h6>Hotel Paris Ouest Acheros</h6>
      							<div class="option">
      								<span class="distance">12.3 km</span>
      								<span class="wifi">Free Wi-Fi</span>
      							</div>
      							<button type="btn" class="price_room">30$</button>
      						</div>
      					</div>
      			</div>

      			<div class="col col-md-4 col-12">
                        <div class="block_one">
      						<div>
      							<img class="block_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/room_3.jpg" alt="img_3" class="one">
      						</div>

      						<div class="description">
      							<h6>Hotel Paris Ouest Acheros</h6>
      							<div class="option">
      								<span class="distance">12.3 km</span>
      								<span class="wifi">Free Wi-Fi</span>
      							</div>
      							<button type="btn" class="price_room">30$</button>
      						</div>
      					</div>
      			</div>
      		</div>

      		<div class="row">

      			<div class="col col-md-4 col-12">
                        <div class="block_one">
      						<div>
      							<img class="block_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/room_4.jpg" alt="img_4" class="one">
      						</div>

      						<div class="description">
      							<h6>Hotel Paris Ouest Acheros</h6>
      							<div class="option">
      								<span class="distance">12.3 km</span>
      								<span class="wifi">Free Wi-Fi</span>
      							</div>
      							<button type="btn" class="price_room">30$</button>
      						</div>
      					</div>
      			</div>


                <div class="col col-md-4 col-12">
                        <div class="block_one">
      						<div>
      							<img class="block_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/room_5.jpg" alt="img_5" class="one">
      						</div>

      						<div class="description">
      							<h6>Hotel Paris Ouest Acheros</h6>
      							<div class="option">
      								<span class="distance">12.3 km</span>
      								<span class="wifi">Free Wi-Fi</span>
      							</div>
      							<button type="btn" class="price_room">30$</button>
      						</div>
      					</div>
      			</div>
      			<div class="col col-md-4 col-12">
                        <div class="block_one">
      						<div>
      							<img class="block_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/room_6.jpg" alt="img_6" class="one">
      						</div>

      						<div class="description">
      							<h6>Hotel Paris Ouest Acheros</h6>
      							<div class="option">
      								<span class="distance">12.3 km</span>
      								<span class="wifi">Free Wi-Fi</span>
      							</div>
      							<button type="btn" class="price_room">30$</button>
      						</div>
      					</div>
      			</div>
      		</div>

            <div class="all_flights">
		       <a href="#">See all flights</a>
	        </div>

		</div>
	</div>

</section>

<section id="attractions" class="attractions">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4 class="text_">Attractions</h4>
			</div>

			<div class="col-md-6">
				<ul class="menu_hotelss d-flex justify-content-center">
					<li class="menu_attr__item">
			            <a href="#" class="active">All</a>
					</li>
					<li class="menu_attr__item">
			            <a href="#" class="">Shopping</a>
					</li>
					<li class="menu_attr__item">
			            <a href="#" class="">Show</a>
					</li>
					<li class="menu_attr__item">
			            <a href="#" class="">Parks</a>
					</li>
					<li class="menu_attr__item">
			            <a href="#" class="">Circus</a>
					</li>
					<li class="menu_attr__item">
			            <a href="#" class="">Museums</a>
					</li>
					<li class="menu_attr__item">
			            <a href="#" class="">Monuments</a>
					</li>

				</ul>
		    </div>
		</div>

	<div class="row block_attr">
		<div class="col col-md-4">
			<div class="item_1 item">
			       <p>Eiffel Tower</p>
		   </div>
		</div>

		<div class="col col-md-8">
			<div class="item_2 item_in"><p>Louvres</p></div>
			<div class="item_3 item_in"><p>Notre Dame de Paris</p></div>
		</div>
     </div>

     <div class="row block_attr">
		<div class="col col-md-4">
			<div class="item_4 item"><p>Forum de Halles</p></div>
		</div>

		<div class="col col-md-4">
			<div class="item_5 item"><p>Arc de Triumphe</p></div>

		</div>
		<div class="col col-md-4">

			<div class="item_6 item"><p>Sacre Ceuer</p></div>
		</div>
     </div>

            <div class="all_attr">
		       <a href="#">See all attractions</a>
	        </div>
</div>
<section id="trips" class="trips">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4 class="text_">Trips</h4>
			</div>

			<div class="col-md-6">
				<ul class="menu_trips d-flex ">
					<li class="menu_trips__item">
			            <a href="#" class="active">Best trips</a>
					</li>
					<li class="menu_trips__item">
			            <a href="#" class="">Popularity</a>
					</li>
				</ul>
		    </div>
		</div>



		<div class="row no-gutters block_tpips">
		     <div class="col-md-4 " >
				<img class="block_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/download_1.jpg" alt="img_4" class="one">
			</div>
			<div class="col-md-8 block_text_item" >
				<h5>Lorem ipsum dolor sit amet, consectetur.</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, in dolorum placeat unde, deserunt earum voluptate adipisci optio quam consequuntur, vero perferendis velit veritatis saepe! Hic atque aliquam nemo dolorum, esse autem eos laboriosam beatae placeat minima eius sit culpa possimus, at modi porro pariatur quisquam debitis similique explicabo. Aperiam atque rerum aliquid optio iusto mollitia. Consectetur amet, sapiente temporibus.</p>
			</div>
		</div>

		<div class="row no-gutters block_tpips">
		     <div class="col-md-4 " >
				<img class="block_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/paris_louvre.jpg" alt="img_4" class="one">
			</div>
			<div class="col-md-8 block_text_item" >
				<h5>Lorem ipsum dolor sit amet, consectetur.</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, in dolorum placeat unde, deserunt earum voluptate adipisci optio quam consequuntur, vero perferendis velit veritatis saepe! Hic atque aliquam nemo dolorum, esse autem eos laboriosam beatae placeat minima eius sit culpa possimus, at modi porro pariatur quisquam debitis similique explicabo. Aperiam atque rerum aliquid optio iusto mollitia. Consectetur amet, sapiente temporibus.</p>
			</div>
		</div>

		<div class="row no-gutters block_tpips">
		     <div class="col-md-4 " >
				<img class="block_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/1.jpg" alt="img_4" class="one">
			</div>
			<div class="col-md-8 block_text_item" >
				<h5>Lorem ipsum dolor sit amet, consectetur.</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, in dolorum placeat unde, deserunt earum voluptate adipisci optio quam consequuntur, vero perferendis velit veritatis saepe! Hic atque aliquam nemo dolorum, esse autem eos laboriosam beatae placeat minima eius sit culpa possimus, at modi porro pariatur quisquam debitis similique explicabo. Aperiam atque rerum aliquid optio iusto mollitia. Consectetur amet, sapiente temporibus.</p>
			</div>
		</div>

            <div class="all_trips">
		       <a href="#">See all Trips</a>
	        </div>

</div>

</section>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<?php get_footer();
