<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username === "your_username" && $password === "your_password") {
    header("Location: welcome.php");
    exit;
  } else {
    echo "Invalid username or password. Please try again.";
  }
}
?>