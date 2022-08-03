<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="wallet";

    $conn=new mysqli($host,$user,$pass,$db);
    if(!$conn)
    {
      echo"there are ploblem";
    }
    else {
        echo"connected";
    }
if(isset($_POST['submit'])){

$Date=$_POST['Date'];
$Amount=$_POST['Amount'];
$Name=$_POST['Name'];
$Pin=$_POST['Pin'];

$sql=("INSERT INTO account (Id, Amount, Name, Pin) 
VALUES ('$Id','$Amount','$Name','$Pin')");
$insert= mysqli_query($conn,$sql);
if(!$insert){
    echo"there are pronlem while inserting data";
}
else{
    echo"data inserted successfully!";
}
}
?>