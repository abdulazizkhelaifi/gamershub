<?php

$sort_by = "myrating";
if(isset($_GET['sort'])) {
    if($_GET['sort']==1) {
        $sort_by = "user_rating";
    }
}

echo $sort_by;

$str2 = file_get_contents("user_reviews.json");
$user_reviews = json_decode($str2, true);

// To calculate average review for each game
function calc_user_rating($gameId) {
    global $user_reviews;
    $avg_review = 0;
    $review_count = 0;
    for($i=0; $i < sizeof($user_reviews); $i++) {
        if($user_reviews[$i]["id"] == $gameId) {
            $review_count++;
            $avg_review += (int)$user_reviews[$i]["rating"];
        }
    }
    if($review_count > 0) {
        $avg_review /= $review_count;
    }
    return $avg_review;
}


function myrating_compare($ar1, $ar2)
{
    $x = $ar1["myrating"];
    $y = $ar2["myrating"];

    if ($x == $y)
        return 0;
    else if ($x > $y)
        return -1;
    else
        return 1;
}

function user_rating_compare($ar1, $ar2)
{
    $x = $ar1["avg_rating"];
    $y = $ar2["avg_rating"];
    
    if ($x == $y)
        return 0;
        else if ($x > $y)
            return -1;
            else
                return 1;
}

$string = file_get_contents("game_pages/games.json");
$games = json_decode($string, true);

// append avg_review for each game in the list of games
for($i=0; $i < sizeof($games); $i++) {
    $games[$i]["avg_rating"] = calc_user_rating($games[$i]["id"]);
}

if($sort_by == "user_rating") {
    usort($games, 'user_rating_compare');
}
else {
    usort($games, 'myrating_compare');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/header.php';?>
    <title>Game Rankings</title>
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
    

    <?php include 'includes/navbar.php';?>
    
    
    <!-- Details 1 -->

	<div id="details" class="basic-2" style="background-color: #4433a0">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">


					<h3>Game Rankings</h3>

					<table class="table">
						<thead class="thead-light">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Title</th>
								<th scope="col">
								Rating<br>
								<a href="?sort=0" style="color: #495057;">Sort</a>
								</th>
								<th scope="col">
								User Rating<br>
								<a href="?sort=1" style="color: #495057;">Sort</a>
								</th>
							</tr>
						</thead>
						<tbody class="text-white">
						<?php
    for ($index = 0; $index < sizeof($games); $index ++) {
        ?>
						    
						    
							<tr>
								<th scope="row"><?php echo $index + 1;?></th>
								<td><?php echo $games[$index]["title"]; ?></td>
								<td><?php echo $games[$index]["myrating"];?></td>
								<td><?php echo $games[$index]["avg_rating"];?></td>
								
							</tr>
							<?php
    }
    ?>
						</tbody>
					</table>


				</div>

				<!-- end of col -->
			</div>
			<!-- end of row -->



		</div>
		<!-- end of container -->
	</div>
	<!-- end of basic-2 -->
	<!-- end of details 1 -->

    

    <?php include 'includes/footer.php';?>
</body>
</html>