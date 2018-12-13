<?php 
	
	$con = mysqli_connect('localhost','root','');

	if(!$con)
	{
		echo 'Not Connected to server';

	}

	if(!mysqli_select_db($con,'projectbrickfield')){
		echo 'datbase is not selecting'	;
	}

	$prodtype = $_POST['pt'];
	$size = $_POST['size'];
	$quantity = $_POST['quantity'];


	$sql = "INSERT INTO productinfo(type,size,quantity) VALUES('$prodtype','$size','$quantity')";
	if ($prodtype != '' && $size!='' && $quantity!='') {
		
	

	if (!mysqli_query($con,$sql))
	{

		echo 'Not inserted.....';

	}
	else{

		echo 'inserted Successfully';
	}

}else echo '<b>Error .Type again</b>';
	header("refresh:2; url=productinfohome_seller.php");