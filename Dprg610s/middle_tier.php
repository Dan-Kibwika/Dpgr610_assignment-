<?php

$user_name =  POST['user_name'];
$Last_name =POST['Last_name'];
$Statut =POST['Statut'];
$user_password =POST['$'];


$conn = new mysqli('localhost', 'root', '','Alumni_tracking_system ');
if ($conn-> connect_error){
  die('connection failed : '. $conn->error_error);

}
else {
  $user_password =POST['$'];
$statement = $conn->prepare("insert into registration(user_name,Last_name,Statut,user_password )values(?,?,?,?)");
$statement -> blind_param("sssi",$user_name,$Last_name, $Statut, $user_password);
$statement ->execute();

echo ' saved succefully';
$statement ->close();
$conn -> close();
?>
