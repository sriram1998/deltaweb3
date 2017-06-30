<html>
    <head>
        <title>Share codes</title>
    <style>
a:link, a:visited {position:absolute;
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    margin-left: 500px;
    margin-top: 480px;

    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: red;
}


h2 { position:absolute;
  
   margin-left: 400px;
   border-bottom:thick dotted black;
    color: cyan;
    font-family: verdana;
    font-size: 300%;

}

input[type=text], select {position:absolute;
    margin-top: 200px;
    margin-left: 500px;
    width: 20%;
    padding: 12px 20px;
  
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {position:absolute;
    margin-top: 250px;
    margin-left: 500px;
    
    width: 20%;
    padding: 12px 20px;
    
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {position:absolute;
    margin-top: 300px;
    margin-left: 500px;
  
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
  
    border: none;
    border-radius: 4px;
    cursor: pointer;
}


input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}


</style>
    </head>
    <body background="bgl.png">
        <h2>Registration Page</h2>
        <a href="index.php">Click here to go back</a><br/><br/>
        <form action="register.php" method="POST">
            <input type="text" name="username" placeholder="username" required="required"> <br></br>
            <input type="password" name="password" placeholder= "password" required="required"> <br></br>
           <input type="submit" value="Register">
        </form>

    </body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = mysql_real_escape_string($_POST['username']);
  $password = mysql_real_escape_string($_POST['password']);
    $bool = true;
    
  mysql_connect("localhost", "root","") or die(mysql_error()); 
  mysql_select_db("delta_db") or die("Cannot connect to database"); 
  $query = mysql_query("Select * from users"); 
  while($row = mysql_fetch_array($query)) 
  {
    $table_users = $row['username']; 
    if($username == $table_users) 
    {
      $bool = false; 
      Print '<script>alert("Username has been taken!");</script>'; 
      Print '<script>window.location.assign("register.php");</script>'; 
    }
  }
  if($bool) 
  {
    mysql_query("INSERT INTO users (username,password) VALUES ('$username','$password')"); 
    Print '<script>alert("Successfully Registered!");</script>'; 
    Print '<script>window.location.assign("login.php");</script>';
  }
}
?>
