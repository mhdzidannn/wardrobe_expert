<?php
session_start();
include_once ("config.php");

if (isset($_POST["but"])) {
			$pay = $_POST['pay'];
            $datetime = $_POST['datetime'];
            $service = $_POST['service'];
            $address = $_POST['address'];
			$article = $_POST['article'];
			$weight = $_POST['weight'];
			$total = $_POST['weight'] * 6;
    
			$data = implode(",",$article);


        $query = "INSERT INTO myorder(Date,Article,Weight,Total,Service,PaymentMethod) VALUES ('$datetime','$data','$weight','$total','$service','$pay')";
		$sql1 = $conn->query($query);
        header("Location: ../main.php?order=success");

}


?>