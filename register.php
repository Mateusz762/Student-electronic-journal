<?php
//check connection//
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dziennik";

$conn = new mysqli("localhost", "root", "", "dziennik");
//check connection//
if($conn->connect_error){
  die("Conection failed: . $con->connect_error");
}
echo "Connected successfully";
//Log in users//
try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Database connection failed: " . htmlspecialchars($e->getMessage()));
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Process login
  $username = isset($_POST["username"]) ? trim($_POST["username"]) : "";
  $password = isset($_POST["password"]) ? $_POST["password"] : "";
}
  if ($username === "" || $password === "") {
      $message = "Please fill in both username and password.";
  } else {
      // Check if user exists
      $stmt = $pdo->prepare("SELECT password_hash FROM users WHERE username = :username LIMIT 1");
      $stmt->execute(["username" => $username]);
      $user = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($user) {
          // Verify password hash
          if (password_verify($password, $user["password_hash"])) {
              $_SESSION["loggedin"] = true;
              $_SESSION["username"] = $username;
              $message = "Login successful! Welcome, " . htmlspecialchars($username) . ".";
              // Redirect or other post-login action here if desired
          } else {
              $message = "Incorrect username or password.";
          }
      } else {
          $message = "Incorrect username or password.";
      }
  } 
?>