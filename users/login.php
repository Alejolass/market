<?php
//login-sing in
include("../config/cnx_db,php");
$email=$_POST['email'];
$passwd=$_POST['password'];

$sql="SELECT*FROM MARKET WHERE email='$email' AND password='$passwd'";
$result=$conn->query ($sql);
if($result->num_rows>0) {
    echo "User has been found successfully.you are login";   
} else{
    echo"verify your data";
}
?>
