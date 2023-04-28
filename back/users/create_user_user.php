<?php
    inclued ("../config/cnx_db.php");
    $first_name=$_post['f_name'];
    $last_name=$_post['l_name'];
    $email=$_post['email'];
    $pass=$_post['passwd'];
    $sql="insert into users(first_name,last_name,email,password)VALUES($fist_name,$last_name,$email.$pass)";
    //$conn->query($sql);
if ($conn->query($sql)===TRUE){
    echo"User has been created successfully";
}else{
    echo"Error:". $conn->error;"<br>".$sql;
}
    ?>