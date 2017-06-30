<?php
    session_start();
    if($_SESSION['user']){
    }
    else{ 
       header("location:index.php");
    }

    if($_SERVER['REQUEST_METHOD']="POST")
    {$code = nl2br(mysql_real_escape_string($_POST['code']));
    $time = strftime("%X"); 
    $date = strftime("%B %d, %Y"); 
    $id=uniqid();
    $url="code.com/$id";
    mysql_connect("localhost","root","")or die (mysql_error());
    mysql_select_db("delta_db")or die("cannot connect to databse");
    mysql_query("INSERT INTO codes (code,url,date_posted,time_posted) VALUES ('$code','$url','$date','$time')");
    header("location:userhome.php");}
    else
    {
        header("location:userhome.php");
    }


?>