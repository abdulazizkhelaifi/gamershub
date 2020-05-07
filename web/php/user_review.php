<?php 
session_start();

$rating = $_GET['rating'];
$review = $_GET['review'];
$id = $_GET['id'];

$string = file_get_contents("user_reviews.json");
$user_reviews = json_decode($string, true);

$data = array("id" => $id, "rating" => $rating, "review" => $review, "user" => $_SESSION['Username']);

array_push($user_reviews, $data);

$txtToWrite = json_encode($user_reviews);
$file = fopen("user_reviews.json", "w") or die("Unable to open reviews file");

fwrite($file, $txtToWrite);
fclose($file);

header("location:/gamingWebsite-php/website/web/php/game_pages/games.php?id=".$id);

?>