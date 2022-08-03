<?php
include('./client.php');

    //deposit
if (isset($_POST["deposit"])) 
{
    $date=$_POST['date'];
    $amount=$_POST['amount'];
    $name=$_POST['name'];
    $pin=$_POST['pin'];

    var_dump($date, $amount, $name, $pin);


    $sql = "INSERT INTO deposit (Date, Amount, Name, Pin) VALUES('$date','$amount','$name', '$pin')";

    if($conn->query($sql)) 
    {

        header("location:transaction.php");

    } else {
        
        exit("failed");
        
    }
}
?>