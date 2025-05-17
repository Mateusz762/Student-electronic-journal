<?php
  //check connection//
$servername = "localhost";
$username = "username";
$password = "password";

$conn = new mysqli("localhost", "root", "", "dziennik");
//check connection//
if($conn->connect_error){
  die("Conection failed: . $con->connect_error");
}
echo "Connected successfully";
  // Log in Check //
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT password FROM user WHERE username = ['$password']";
    $stmt = $conn->prepare($sql);
    $query->bind_param('s', $setting);
    $query->execute();
    $query->store_result();
    if ($query->num_rows() > 0)
}
    if($stm->num_row > 0){
      $stm->bind_result($hashed_password);
      $stm->fetch();

      if(password_verify($password, $hashed_password)){
        // Password is correct, Start a session
        $_SESSION['username'] = $username;
        echo "Login successful! Welcome, " . $username;
      }else{
        echo "Zle logowanie!";
      }
    }
    $stm->close();
?>