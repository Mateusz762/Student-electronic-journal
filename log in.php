<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "dziennik";
     //connect db//
     $con = new mysqli($servername, $username, $password, $dbname);
 if ($con->connect_error) {
     die("Connection failed" . $con->connect_error);
     }
     echo "Connected successfully";
     return;
     
  if(isset($_POST['register'])){
    $user = $_POST['user'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    echo $user . " " .$password . " " .$email . " ";
    $sql = "ISERT INTO user (user, password, email) VALUES (?,?,?)";
    
    $result = $conn-query($sql);
    $stmtinsert = $db->prepare($sql);
    if($result){
      echo "Udalo sie zajerestrowac nowego ucznia";
    }else{
      echo "Nie udalo sie zarejestrowac uczna";
    }
  }
  return;
    $user = $_GET["user"];
    $password = $_GET["password"];

    echo $user . " " .$password . "";
    return;
?>