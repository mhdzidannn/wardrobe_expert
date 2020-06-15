<?php
session_start();
include_once ("config.php");

if (isset($_POST["but"])) {
			$name = $_POST['name'];
            $phone = $_POST['phonenum'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $rpass = $_POST['repeatpass'];
            $address = $_POST['address'];
            $username = $_POST['username'];
		$checkUser = "SELECT Username FROM client WHERE Username = '$username'";
		$checkEmail = "SELECT Email FROM client WHERE Email = '$email'";
		
		$result = $conn->query($checkUser);
		$result1 = $conn->query($checkEmail);
		
		
    if (mysqli_num_rows($result) > 0 &&  mysqli_num_rows($result1)>0) {
        header("Location: ../signup.php?error=takenuseremail");
    } else if (mysqli_num_rows($result)> 0) {
        header("Location: ../signup.php?error=takenuser");
    } else if (mysqli_num_rows($result1)>0) {
        header("Location: ../signup.php?error=takenemail");
    }else{

    
        $query = "INSERT INTO client(Name,PhoneNumber,Email,Password,Address,Username) VALUES ('$name','$phone','$email','$pass','$address','$username')";
		$sql1 = $conn->query($query);
        header("Location: ../signup.php?signup=success");
	}
}


?>