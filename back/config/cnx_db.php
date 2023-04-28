<?php
//devloper: tom
//Database engine connection
$host="localhost";//127.0.0.1
$port="3306";
$username="root";
$password="";
$dbname="market";
//Mysql connection
$conn=new Mysqli($host,$username,$password,$dbname,$port);
//check connection
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
    exit();
} else{
    echo "connection successfully:";
    
}
?>