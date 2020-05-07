<?php
session_start();

$string = file_get_contents("games.json");
$games = json_decode($string, true);
$game_id = $_GET['id'];
$status = "na";
$index = 0;
for ($index = 0; $index < sizeof($games); $index ++) {
    if ($game_id == $games[$index]["id"]) {
        $status = "found";
        break;
    }
}

$str2 = file_get_contents("../user_reviews.json");
$reviews = json_decode($str2, true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../includes/header.php';?>
    <title><?php echo $games[$index]["title"]; ?></title>
</head>

<body data-spy="scroll" data-target=".fixed-top">

	<!-- Preloader -->
	<div class="spinner-wrapper">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	<!-- end of preloader -->
    

    <?php include '../includes/navbar.php';?>
    
    
    <!-- Details 1 -->
    <?php if($status == "found") {?>
	<div id="details" class="basic-2" style="background-color: #4433a0">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<img class="img-fluid" src="<?php echo $games[$index]["image"]; ?>"
						alt="alternative">
				</div>
				<!-- end of col -->
				<div class="col-lg-6">
					<div class="text-container">
						<h3><?php echo $games[$index]["title"]; ?></h3>

						<p><?php echo $games[$index]["description"]; ?></p>



						<!-- Video Preview -->
						<div class="image-container">
							<div class="video-wrapper">
								<a class="popup-youtube btn-solid-reg"
									href="<?php echo $games[$index]["trailer"]; ?>"
									data-effect="fadeIn"> <img class="img-fluid"> <i
									class="fab fa-youtube">Trailer</i> <span
									class="video-play-button"> <span></span>
								</span>
								</a>
							</div>
							<!-- end of video-wrapper -->
						</div>




					</div>
					<!-- end of text-container -->
				</div>






				<!-- end of col -->
			</div>
			<!-- end of row -->

			<div class="row mt-2"></div>


			<div class="row">
				<div class="col-lg-6">
					

					<h3 class="pt-4">Official Reviews</h3>

					<a class=" btn-solid-reg"
						href="<?php echo $games[$index]["review1"]; ?>"> IGN </a> <a
						class=" btn-solid-reg"
						href="<?php echo $games[$index]["review2"]; ?>"> METACRITIC </a> <a
						class=" btn-solid-reg"
						href="<?php echo $games[$index]["review3"]; ?>"> PCGAMER</a>


					<h3 class="pt-4">Retailer Links</h3>

					<a class=" btn-solid-reg"
						href="<?php echo $games[$index]["retailer1"]; ?>"> <i
						class="fab fa-amazon">AMAZON</i></a> <a class=" btn-solid-reg"
						href="<?php echo $games[$index]["retailer2"]; ?>"> <i
						class="fab fa-steam">STEAM</i></a> <a class=" btn-solid-reg"
						href="<?php echo $games[$index]["retailer3"]; ?>"> <i
						class="fab fa-playstation">SONY STORE</i></a>

				</div>

				<div class="col-lg-6">

					<h3 class="pt-4 text-center">Other details</h3>

					<p class="text-center">
						<b>Genre:</b> <?php echo $games[$index]["genre"]; ?>
					</p>

					<p class="text-center">
						<b>Age Rating:</b> <?php echo $games[$index]["age_rating"]; ?>
					</p>

					<p class="text-center">
						<b>Developed by:</b> <?php echo $games[$index]["developed_by"]; ?>
					</p>

					<p class="text-center">
						<b>Date of release:</b> <?php echo $games[$index]["date_of_release"]; ?>
					</p>

					<p class="text-center">
						<b>Rating:</b> <?php echo $games[$index]["myrating"]; ?>
					</p>

				</div>
			</div>
			
		


			<div class="row">
				<div class="col-lg-6">

					<h3 class="pt-4">Write a Review</h3>
				
				<?php if(isset($_SESSION['Username'])) { ?>

					<form action="/gamingWebsite-php/website/web/php/user_review.php"
						method="GET">

						<div class="form-group">
							<label for="exampleFormControlSelect1">Rating</label> <select
								class="form-control" id="exampleFormControlSelect1"
								name="rating">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

						<div class="form-group">
							<label for="exampleFormControlTextarea1">Enter your review
								here...</label>
							<textarea name="review" class="form-control"
								id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
						<input type="hidden" name="id"
							value="<?php echo $games[$index]["id"]; ?>">
						<button type="submit" class=" btn-solid-reg">Submit</button>
					</form>
					
					<?php } else { ?>
					
					<p>
						Please <a href="/gamingWebsite-php/website/web/login.html">login</a>
						to write a review.
					</p>
					
					<?php }?>

				</div>

				<div class="col-lg-6">

					<h3 class="pt-4">User Reviews</h3>
				
				<?php
                $review_count = 0;
				for ($i = 0; $i < sizeof($reviews); $i++) {

				    if ($reviews[$i]["id"] == $games[$index]["id"]) {
				        $review_count++;
                ?>
                
                <div>
						<h5> <?php echo $reviews[$i]["user"]; ?> - Rating <?php echo $reviews[$i]["rating"]; ?></h5>
						<p><?php echo $reviews[$i]["review"]; ?></p>
					</div>
                
                <?php
            }
        }
        
        if($review_count==0) {
            ?>
            
            <h5>No reviews found.</h5>
            
            <?php 
        }
        ?>
				
				

				</div>


			</div>

		</div>
		<!-- end of container -->
	</div>
	<!-- end of basic-2 -->
	<!-- end of details 1 -->
	<?php } else { ?>
	<div id="details" class="basic-2">
		<div class="container">
			<div class="row">
				<!-- end of col -->
				<div class="col-lg-6">
					<div class="text-container">
						<h3>Page not found</h3>


					</div>
					<!-- end of text-container -->
				</div>

				<!-- end of col -->
			</div>
			<!-- end of row -->

		</div>
		<!-- end of container -->
	</div>
	
	<?php
    }
    ?>
    

    <?php include '../includes/footer.php';?>


</body>
</html>