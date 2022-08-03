<?php
include'client.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>E-wallet</title>
	<link rel="stylesheet" href="login.css">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
    .header {
  padding: 80px; /* some padding */
  text-align: center; /* center the text */
  background: #1abc9c; /* green background */
  color: white; /* white text color */
}

/* Increase the font size of the <h1> element */
.header h1 {
  font-size: 40px;
}

.navbar {
  overflow: hidden; /* Hide overflow */
  background-color: #333; /* Dark background color */
}

/* Style the navigation bar links */
.navbar a {
  float: left; /* Make sure that the links stay side-by-side */
  display: block; /* Change the display to block, for responsive reasons (see below) */
  color: white; /* White text color */
  text-align: center; /* Center the text */
  padding: 14px 20px; /* Add some padding */
  text-decoration: none; /* Remove underline */
}

/* Right-aligned link */
.navbar a.right {
  float: right; /* Float a link to the right */
}

/* Change color on hover/mouse-over */
.navbar a:hover {
  background-color: #ddd; /* Grey background color */
  color: black; /* Black text color */
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
  margin-top: 0%;
}
.footer {
  padding: 20px; /* Some padding */
  text-align: center; /* Center text*/
  background: #ddd; /* Grey background */
}
    </style>
    <script>
      function openForm() {
      document.getElementById("myForm").style.display = "block";
}

      function closeForm() {
      document.getElementById("myForm").style.display = "refresh";
}
   </script>
    </head>
<body>
    <div class="header">
        <h1>WELCOME TO E-WALLET SYSTEM OF XYZ Bank PLC </h1>
        <p>Here you can control the transaction of your bank account anywhere you are.    </p>
        <p>We have more amzing welcome Bonus just signup to our website and see the magic.</p>
    </div>
    <div class="navbar">
        <a href="index.php">HOME</a>
        <a href="Loginf.php">LOGIN</a>
        <a href="contact.html">CONTACT-US</a>
    </div>
    <div class="bg-img">
      <div class="form-popup" id="myForm">
        <form action="Register.php" method="post" class="container">
            <h1>Sign Up Here Plz</h1>
            <hr>

            <label for="Names"><b>Names</b></label>
            <input type="text" placeholder="Enter Names " name="name" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="Telephone"><b>Telephone</b></label>
            <input type="text" placeholder="Enter Telephone " name="telephone" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
                
            <label for="pin"><b>Pin</b></label>
            <input type="text" placeholder="Pin" name="pin" required>

            <button type="submit" class="signupbtn" name="signup">Signup</button>
            <button type="button" class="cancelbtn"onclick="closeForm()">Cancel</button>
        </form>
      </div>
    </div>
    <div class="footer">
        <h2>Copy right @Diane MUHORAKEYE</h2>
    </div>
</body>      
</html>