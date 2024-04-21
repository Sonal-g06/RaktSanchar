<?php
include('connection.php');

	if(isset($_POST['submit']))
	{
		$name=$_POST['Name'];
		$age=$_POST['Age'];
		$address=$_POST['Address'];
		$phone=$_POST['Phone'];
		$blood=$_POST['BloodType'];
		$allergy=$_POST['Allergy'];
	
	
	$insertquery="INSERT INTO donor (`Name`, `Age`, `Address`, `Phone`, `BloodType`, `Allergy`) VALUES ('$name', '$age','$address','$phone','$blood','$allergy')";

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
        <title>Donor Registration</title>
    </head>
    <body>
        <h4>Donor Registration Form</h4>
			<form method="POST">
			    <div>
				<label for="inputname">Full Name</label>
				<input type="text" value="" name="Name" id="inputname" required >
				</div>
                <div>
				<label for="inputAge">Age</label>
				<input type="text" name="Age" id="inputAge">
			  </div>
			  <div>
				<label for="inputAddress">Address</label>
				<input type="text" name="Address" id="inputAddress" placeholder="Bambolim,Margao...">
			  </div>
              <div>
				<label for="inputPhone">Phone</label>
				<input type="tel" name="Phone" id="inputPhone">
			  </div>
			  <div>
				<label for="inputType">Blood Type</label>
				<select id="inputType" name="BloodType">
				  <option selected>Select Blood Type</option>
				  <option>O+</option>
				  <option>A+</option>
				  <option>B+</option>
				  <option>AB+</option>
				</select>
			  </div>
			  <div>
				<label for="inputAllergy">Allergy</label>
				<input type="text" name="Allergy" id="inputAllergy">
			  </div>
			  <div>
				<button type="submit" class="btn btn-primary" name="submit">Save Details</button>
			  </div>
			</form>
    </body>
</html>