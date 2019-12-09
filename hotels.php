<?php
     require_once('config.php');?>
<section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Special Offers</span>
            <h2 class="mb-4"><strong>Top</strong> Hotel Packages</h2>
          </div>
        </div>
    	</div>
    	<div class="container-fluid">
    		<div class="row">



    			<div class="destination-slider owl-carousel  ftco-animate">
                    <?php $sql = "SELECT * from hotel";

       	$query = $dbh -> prepare($sql);
       	//$query -> bindParam(':city', $city, PDO::PARAM_STR);
       	$query->execute();
       	$results=$query->fetchAll(PDO::FETCH_OBJ);
       	$cnt=1;
       	if($query->rowCount() > 0)
       	{
       	foreach($results as $result)
       	{				?>

    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-5.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#"><?php echo htmlentities($result->name);?></a></h3>
		    						<p class="rate">
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star"></i>
		    							<i class="icon-star-o"></i>
		    							<span>8 Rating</span>
		    						</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$<?php echo htmlentities($result->price);?></span>
    							</div>
    						</div>
    						<p><?php echo htmlentities($result->city);?></p>
    						<p class="days"><span><?php echo htmlentities($result->country);?></span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> <?php echo substr(($result->description),0,3);?> </span>
    							<span class="ml-auto"><a href="hotel-single.php?pid=<?php echo htmlentities($result->id);?>">Discover</a></span>
    						</p>
    					</div>
    				</div><?php  }} ?>
    			</div>
    		</div>
    	</div>
    </section>
