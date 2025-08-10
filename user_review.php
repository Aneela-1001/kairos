<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Your Review Has Been Recorded";
}else{
	echo "Sorry!There Might Be A Technical Issue!";
}

mysqli_select_db($con,'kairos_user_review');

$user = $_POST['user'];
$product = $_POST['product'];
$rating = $_POST['rating'];
$comment = $_POST['comment'];


$query = " insert into user_review(user, product, rating, comment) values('$user','$product','$rating','$comment')";


mysqli_query($con, $query);

header('location:index.php');

?>