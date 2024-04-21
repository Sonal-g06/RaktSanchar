<?php
include('connection.php');

	if(isset($_POST['submit']))
	{
		$date=$_POST['Date'];
        $name=$_POST['Hospital_Name'];
		$address=$_POST['Address'];
		
	
	$insertquery="INSERT INTO bloodcamps (`Date`, `Hospital_Name`, `Address`) VALUES ('$date','$name','$address')";

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
        <title>Add Blood Camp</title>
    </head>
    <body>
        <h4>Blood Camp Form</h4>
			<form method="POST">
			    <div>
				<label for="inputDate">Date</label>
				<input type="date" name="Date" id="inputDate">
			  </div>
              <div>
				<label for="inputname">Hospital Name</label>
				<input type="text" value="" name="Hospital_Name" id="inputname" required >
				</div>
			  <div>
				<label for="inputAddress">Address</label>
				<input type="text" name="Address" id="inputAddress" placeholder="Bambolim,Margao...">
			  </div>
			  <div>
				<button type="submit" class="btn btn-primary" name="submit">Save Details</button>
			  </div>
			</form>
    </body>
</html>