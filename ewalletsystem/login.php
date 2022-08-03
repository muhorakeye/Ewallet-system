<?php

include('client.php');

if (isset($_POST['submit']))

	{
		$email=$_POST['email'];
		$password=$_POST['psw'];

		
			$result=mysqli_query($conn, "SELECT * FROM client WHERE email='$email' AND password='$password' ")
				or die ('cannot login' . mysql_error());
			$row=mysqli_fetch_array  ($result);
			$run_num_rows = mysqli_num_rows($result);
							
						if ($run_num_rows > 0 )
						{
							session_start ();
							$_SESSION['Id'] = $row['Id'];
							header ("location:index.php");
						}
						
						else
						{
							echo "<script>alert('Invalid Email or Password')</script>";
							header("location:index.php");
						}
	}
	?>
