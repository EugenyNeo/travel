<?php
/**
Template name: Home page
*/

require_once 'database.php';


get_header();?>


<section class="flights" id="flights">
	<div class="container">
		<div class="row">

					<form  class="input-group col col-lg-12 " method="post">
						<input type="text" name="input_from" class="input_one"  placeholder="Where are you leaving from?"/>
					    <input type="text"  name="input_to" class="input_two" placeholder="Where do you want to go?" />
						<input type="date"  name="input_date" class="input_three" placeholder="Date" required/>
						<input type="submit" name="Submit"   class="btn_search"  />
					</form>

		</div>
			<div class="row" >
				<h4 class="text_ d-flex justify-content-center">Flights</h4>

				<ul class="menu_flights d-flex">
					<li class="menu_flights__item">
			            <a href="#" >Non stop</a>
					</li>
					<li class="menu_flights__item">
			            <a href="#" class="">Best price</a>
					</li>
					<li class="menu_flights__item">
			            <a href="#">Airline</a>
					</li>
					<li class="menu_flights__item ">
			            <a href="#">Schedule</a>
					</li>
				</ul>

		</div>

		<!--table-->
		<div class="row">
			<div class="table-responsive">
			<table class="table">
				<thead >
					<tr>
						<th class="airlines">Airlines</th>
						<th>Date</th>
						<th>Departure</th>
						<th>Arrival</th>
						<th  class="time">Time</th>
						<th class="price">Price</th>
					</tr>
				</thead>
				<tbody style="padding:30px 0px 10px 0px">

              <?php $flights = isset($_POST['submit']) ? get_filter($db) : get_flights($db) ?>

				<?php if(count($flights) === 0): ?>
				   echo 'Your request there is nothing!';
				   <?php else: ?>

				<?php foreach($flights as $flight): ?>
					<tr>
						<td class="d-flex justify-content-left">
							<span style="padding:10px 0" >
								<img class="vueling_img" src="<?=$flight["image"]?>" width="35px" height="35px" alt="airline_name" >
							</span>
							<span style="margin-left:20px;">
								<h6><?=$flight["name"]?></h6>
						    	<p><?=$flight["code_air"]?><?=$flight["no"]?></p>
						    </span>
						</td>
						<td>
							<h6><?php $datetime =$flight["date"] ?><?=date("Y/m/d",strtotime($datetime))?></h6>
							<p>In 3 days</p>
						</td>
						<td>
							<h6><?=$flight["departure"]?> (<?=$flight["airport_from"]?>)</h6>
							<p><?php $datetime =$flight["date"] ?><?=date("H:m",strtotime($datetime))?></p>
						</td>
						<td >
							<h6><?=$flight["arrival"]?></h6>
							<p><?php $datetime =$flight["arr_time"] ?><?=date("H:m",strtotime($datetime))?></p>
						</td>
                        <td>
							<h6><?=date("H:m",strtotime($flight["SELECT (flights.arr_time - flights.date) FROM flights" ]))?></h6>
							<p><?=$flight["airport_from"]?> - <?=$flight["airport_to"]?></p>
						</td>
						<td >
							<button class="btn btn_price"><?=$flight["price"]?>$</button>
						</td>
					</tr>

                   <?php endforeach; ?>
                   <?php endif; ?>


				</tbody>
			</table>

           </div>
		</div>

			<div class="all_flights all">
		       <a href="/">See all flights</a>
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
      							<img class="block_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/room_1.jpg" alt="img_1" class="one">
      						</div>

      						<div class="description">
      							<h4>Hotel Paris Ouest Acheros</h4>
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
      							<img class="block_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/room_2.jpg" alt="img_2" class="one">
      						</div>

      						<div class="description">
      							<h4>Hotel Paris Ouest Acheros</h4>
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
      							<img class="block_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/room_3.jpg" alt="img_3" class="one">
      						</div>

      						<div class="description">
      							<h4>Hotel Paris Ouest Acheros</h4>
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
      							<img class="block_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/room_4.jpg" alt="img_4" class="one">
      						</div>

      						<div class="description">
      							<h4>Hotel Paris Ouest Acheros</h4>
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
      							<img class="block_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/room_5.jpg" alt="img_5" class="one">
      						</div>

      						<div class="description">
      							<h4>Hotel Paris Ouest Acheros</h4>
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
      							<img class="block_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/room_6.jpg" alt="img_6" class="one">
      						</div>

      						<div class="description">
      							<h4>Hotel Paris Ouest Acheros</h4>
      							<div class="option">
      								<span class="distance">12.3 km</span>
      								<span class="wifi">Free Wi-Fi</span>
      							</div>
      							<button type="btn" class="price_room">30$</button>
      						</div>
      					</div>
      			</div>
      		</div>

            <div class="all_flights all">
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
				<ul class="menu_attr d-flex justify-content-center">
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
		<div class="col col-sm-12 col-md-12 col-lg-4 ">
			<div class="item_1 item col col-sm-12 col-md-6 col-lg-12 ">
			       <p>Eiffel Tower</p>
		   </div>
		</div>


		<div class="col col-sm-12 col-md-8 col-lg-8 no-gutters block_02">
			<div class="item_2 item_in col-sm-12 "><p>Louvres</p></div>
			<div class="item_3 item_in  col-sm-12"><p>Notre Dame de Paris</p></div>
		</div>

     </div>


     <div class="row block_attr">
		<div class="col col-sm-12 col-md-4">
			<div class="item_4 item col-sm-12"><p>Forum de Halles</p></div>
		</div>
	    <div class="col col-sm-12 col-md-4">
			<div class="item_5 item col-sm-12"><p>Arc de Triumphe</p></div>
		</div>
		<div class="col col-sm-12 col-md-4">
			<div class="item_6 item col-sm-12"><p>Sacre Ceuer</p></div>
		</div>

     </div>
            <div class="all_attr all">
		       <a href="#">See all attractions</a>
	        </div>
</div>

</section>

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
		     <div class="col-md-4">
				<img class="block_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/download_1.jpg" alt="img_4" class="one">
			</div>
			<div class="col-md-8 block_text_item" >
				<h5>Lorem ipsum dolor sit amet, consectetur.</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, in dolorum placeat unde, deserunt earum voluptate adipisci optio quam consequuntur, vero perferendis velit veritatis saepe! Hic atque aliquam nemo dolorum, esse autem eos laboriosam beatae placeat minima eius sit culpa possimus, at modi porro pariatur quisquam debitis similique explicabo. Aperiam atque rerum aliquid optio iusto mollitia. Consectetur amet, sapiente temporibus.</p>
			</div>
		</div>

		<div class="row no-gutters block_tpips">
		     <div class="col-md-4 " >
				<img class="block_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/paris_louvre.jpg" alt="img_4" class="one">
			</div>
			<div class="col-md-8 block_text_item" >
				<h5>Lorem ipsum dolor sit amet, consectetur.</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, in dolorum placeat unde, deserunt earum voluptate adipisci optio quam consequuntur, vero perferendis velit veritatis saepe! Hic atque aliquam nemo dolorum, esse autem eos laboriosam beatae placeat minima eius sit culpa possimus, at modi porro pariatur quisquam debitis similique explicabo. Aperiam atque rerum aliquid optio iusto mollitia. Consectetur amet, sapiente temporibus.</p>
			</div>
		</div>

		<div class="row no-gutters block_tpips">
		     <div class="col-md-4 " >
				<img class="block_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/1.jpg" alt="img_4" class="one">
			</div>
			<div class="col-md-8 block_text_item" >
				<h5>Lorem ipsum dolor sit amet, consectetur.</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, in dolorum placeat unde, deserunt earum voluptate adipisci optio quam consequuntur, vero perferendis velit veritatis saepe! Hic atque aliquam nemo dolorum, esse autem eos laboriosam beatae placeat minima eius sit culpa possimus, at modi porro pariatur quisquam debitis similique explicabo. Aperiam atque rerum aliquid optio iusto mollitia. Consectetur amet, sapiente temporibus.</p>
			</div>
		</div>

            <div class="all_trips all">
		       <a href="#">See all Trips</a>
	        </div>

</div>

</section>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<?php get_footer();
