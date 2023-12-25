<?php

$username=$_REQUEST['user-name'];
$password=$_REQUEST['pass'];
$gender=$_REQUEST['male-or-femail']



if(sset($_POST['btns']))
{
    $host="localhost";
    $user="root";
    $password="";
    $db="tpd lan bis";
    
    
    
    $conn = mysqli_connect($host,$user,$password,$db);
    
    
    $insert="insert into lang users values ('$username','$password,$gender)";
    
    mysqli_query($conn,$insert);
    
    
    
    if($conn)
    {
        echo("<h1  style='color: green ;' > your registration is done!</h1>");
    }
    else
    {
        echo("<h1 style=' color: red ;' > your registration is failed!</h1>");
        
    }
    
};

?>