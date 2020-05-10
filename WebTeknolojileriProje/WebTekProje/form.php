<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr =  "";
$kname = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["kname"])) {
    $nameErr = "Name is required";
  } else {
    $kname = test_input($_POST["kname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$kname)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["sifre"])) {
    $emailErr = "Email is required";
  } else {
    $sifre = test_input($_POST["sifre"]);
    // check if e-mail address is well-formed
    if (!filter_var(sifre, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
echo "<h2>Your Input:</h2>";
echo $kname;
echo "<br>";
echo $sifre;
echo "<br>";
?>

</body>
</html>