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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .navbar{
            background-color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            padding-right: 500px;padding-left: 500px;

        }
        .navdiv{
            align-content: center;
        }
        #cc{
            color: red;align-self: center;
        }
        #ss{
           margin-left: 42px
     ;
        }
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            
        }
        body{
            
            justify-content: center;
            align-items: center;
            min-height: 100px;
            background-color: crimson;
            background-image: url("v41_2676.png");
            background-size: cover;
        }
        .login-box{
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 440px;
            height: 400px;
            padding: 30px;
            margin: auto;
            margin-top: 50px;
    
        }
        .login-header{
          text-align: center;
            margin: 20px 0 40px 0;
        }
        .login-header header{
            color: white;
            font-size: 30px;
            font-weight: 600;
           
        }
        .input-box .input-field{
            width: 60%;
            height: 30px;
            margin-left: 25px;
            
        }   

        .box{
            width: 100%;
            height:100%;
            padding:20px;
            background: white;
            border-radius: 4px;
            box-shadow:0 8px 16px red;
        }
        .input-submit{
            position: relative;
        }
        .submit-btn{
            width: 100%;
            height: 60px;
            background: rgb(10, 10, 21);
            border-radius: 30px;
            cursor: pointer;

        }
        .input-submit label{
            position: absolute;
            top:35%;
            color: white;
            left: 43%;
            
        }
        .submit-btn:hover{
            background: black;
            transform: scale(1.05,1);
        }

        
     
    </style>
</head>
<body >
    <nav class="navbar">
        <div class="navdiv">
           <h1 id="cc">RAKHT SANCHAR</h1>
           <h5 id="ss">Share Life, Share Hope</h5> 
        </div>
    </nav>
    <div class="login-box">
        <div class="login-header">
            <header>HOSPITAL ADMIN LOGIN</header>
         </div>
         <div class="box"> <div class="input-box">
            <b>Hospital name: </b><input type="text" class="input-field"  autocomplete="off" required> <br><br>      
          </div>
          <div class="input-box">
            <b>Address: </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input-field"  autocomplete="off" required>    <br><br>   
           </div>
           
           <div class="input-box">
            <b>Password: </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" class="input-field"  autocomplete="off" required> <br><br><br><br>      
           </div>
           <div class="input-submit">
             <button class="submit-btn" id="submit"></button>
             <label for="submit">Sign-In</label>
           </div>
        </div>
         
        
    </div>
</body>
</html>
