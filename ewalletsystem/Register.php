<?php


include('./client.php');

//signup

if (isset($_POST["signup"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $password = $_POST['password'];
    $pin = $_POST['pin'];

    //var_dump($name, $email, $telephone, $password, $pin);


    $sql = "INSERT INTO client (Names, Email, Telephone, Password, Pin) VALUES('$name','$email','$telephone', '$password', '$pin')";

    if($conn->query($sql)) 
    {

        header("location:loginf.php");

    } else {
        exit("failed");
        
    }
}
//login
if (isset($_POST["login"])) 
{
    //$type =$_POST['type'];
    $email =$_POST['email'];
    $password =$_POST['password'];

    //var_dump($email, $password );

  $sql =$conn->prepare("SELECT * FROM client WHERE email= ? AND password= ? ");

       $sql->bindParam(1, $email);
        $sql->bindParam(2, $password);

        $sql->execute();

        if($sql->rowCount() > 0){
            
         header("location:transaction.php");
          exit();
            
        }else{
            header("location:Loginf.php");
            exit();
        }
}
//transaction retrieval

function transaction()
{
    global $conn;
    //var_dump($email, $password );

  $sql =$conn->prepare("SELECT * FROM deposit WHERE date= ? AND amount= ? ");

        $sql->execute();
         $data = $sql->fetchAll(PDO::FETCH_OBJ);
         return data;
}

?>