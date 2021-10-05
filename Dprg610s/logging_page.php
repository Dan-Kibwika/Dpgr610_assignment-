<?php
$Id_number = $_POST['Id_number'];
$status = $_POST['status' ];
$Password = $_POST['Password'];

if (!empty($Id_number) ||  !empty($status) ||!empty($Password)   ) {

$host ="localhost";
$dbUsername = "root"
$dbPassword = "";
$dbname="form";

//create connections
$conn = new mysqli($host, $dbUsername , $dbPassword, $dbname);


  if ( mysqli_connect_error() ) {
    die( 'connect Error('. mysqli_connect_errno().')'.MariaDB_connect_error());}

    else {
      $stmt = $conn->prepare("insert into form(Id_number,status,Password)values(?,?,?)");
      $stmt -> blind_param("iss"$Id_number,$status,$Password);
      $stmt ->execute();
      echo " Siggned in succefully";


    }
  }


     }

else {echo "succefully";
           die();
}
?>
