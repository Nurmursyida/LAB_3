<?php
$servername ="localhost";
$username = "root";
$pass = "";
$dbname = "register_user";

try{
    $conn = new PDO ("mysql:host=$servername;dbname=$dbname" ,$username,$pass);
    $conn ->setAttribute( PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch (PDOException $e) {
    echo $sql . "<br>" .$se->getMessage();
}

?>