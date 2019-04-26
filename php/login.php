<?php
$username = "$_POST[username]";
$password ="$_POST[password]";
$mysqli = new mysqli('localhost', 'root', 'wahyutif17', 'hotel');
$rs = $mysqli->query("CALL SP_Login('".$username."','".$password."')" );
$row = $rs->fetch_object();
if ($row) {
  header("location: index.html");
} else {
  echo "Data tidak terdaftar";
  header('Location: login.html');
}
?>