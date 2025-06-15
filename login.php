<?php
$users = [
  "admin" => "1234",
  "mark" => "mypass"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_POST["username"];
  $pass = $_POST["password"];

  if (isset($users[$user]) && $users[$user] == $pass) {
    echo "<p style='color:green;'>Welcome, $user!</p>";
  } else {
    echo "<p style='color:red;'>Invalid credentials.</p>";
  }
}
?>

<form method="post">
  Username: <input type="text" name="username"><br><br>
  Password: <input type="password" name="password"><br><br>
  <input type="submit" value="Login">
</form>
