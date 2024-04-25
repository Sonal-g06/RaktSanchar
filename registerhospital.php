<?php
include('connection.php');

	if(isset($_POST['submit']))
	{
		$name=$_POST['Hospital_Name'];
		$address=$_POST['Address'];
		$password=$_POST['Password'];
	
	$insertquery="INSERT INTO hospital (`Hospital_Name`, `Address`, `Password`) VALUES ('$name','$address','$password')";

	$result = mysqli_query($conn, $insertquery);

    if ($result) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
	}
?>

<html>
    <head>
        <title>Hospital Registration</title>
    </head>
    <body>
        <h4>Hospital Registration Form</h4>
			<form method="POST">
			    <div>
				<label for="inputname">Hospital Name</label>
				<input type="text" value="" name="Hospital_Name" id="inputname" required >
				</div>
			  <div>
				<label for="inputAddress">Address</label>
				<input type="text" name="Address" id="inputAddress" placeholder="Bambolim,Margao...">
			  </div>
              <div>
				<label for="inputPassword">Password</label>
				<input type="password" name="Password" id="inputPassword">
			  </div>
			  <div>
				<button type="submit" class="btn btn-primary" name="submit">Save Details</button>
			  </div>
			</form>
    </body>
</html>
