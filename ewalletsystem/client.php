

<?php

  try{
    $conn = new PDO('mysql:host=localhost; dbname=wallet','root','' );

  }

  catch(PDOException $e){
    die('

    	<h1>Connection Failed</h1>
    ');
  }

?>


