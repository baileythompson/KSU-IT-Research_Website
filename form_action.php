<!DOCTYPE HTML>  
<html>

<body>

<?php

$name = $email = $gender = $grades = $position = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $grades = test_input($_POST["grades"]);
  $campus = test_input($_POST)["campus"]);
  $gender = test_input($_POST["gender"]);
  $position = test_input($_POST["position"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


</body>
</html>