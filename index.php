<html>
    <head>
    <title>Share codes</title>
    <style>
#l:link, #l:visited {position:absolute;
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    margin-left: 1100px;
    margin-top: 250px;

    text-align: center;
    text-decoration: none;
    display: inline-block;
}


#l:hover, #l:active {
    background-color: red;
}
#url {position:absolute;
    margin-top: 250px;
    margin-left: 20%;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

#url td, #url th {
    border: 1px solid white;
    padding: 8px;
}



#url tr:hover {background-color: white;}

#url th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}
#url #d {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;

}

#r:link, #r:visited {position:absolute;
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    margin-left: 1100px;
    margin-top: 300px;

    text-align: center;
    text-decoration: none;
    display: inline-block;
}


#r:hover, #r:active {
    background-color: red;
}

h2 { position:absolute;
	 margin-left: 250px;
	 border-bottom:thick dotted black;
    color: green;
    font-family: verdana;
    font-size: 300%;

}

</style>
    </head>
    <body background="bgs.png">
    <table border="1px" width="100%" id="url">
<tr>

<th id="d">CODE URL</th>


</tr>

<?php
mysql_connect("localhost","root","")or die (mysql_error());
mysql_select_db("delta_db")or die("cannot connect to database");
$query=mysql_query("Select * from codes");

while($row=mysql_fetch_array($query))
{
    Print "<tr>";
   // Print '<td align="center">'. $row['id']."</td>";
    //Print '<td align="center">'. nl2br($row['code'])."</td>";
    Print '<td align="center"><a href="viewcode.php?id='. $row['id'] .'">'. $row['url'] .'</a> </td>';
    //Print '<td align="center">'. $row['date_posted'] . "  " .$row['time_posted']."</td>";
    
    Print "</tr>";

}
?>
</table>
    
   <a href="login.php" id="l">click here to login</a><br></br>
   <a href="register.php" id="r">click here to register</a>
   <h2>SHARE AND VIEW CODES</h2>
    </body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE delta_db";
if ($conn->query($sql) === TRUE) {
   
} else {
   
}

$conn->close();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "delta_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table users
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
   
} else {
  
}






mysqli_close($conn);

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "delta_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE  codes (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
code text NOT NULL,
url VARCHAR(50) NOT NULL,
date_posted VARCHAR(30) NOT NULL,
time_posted time
)";
if ($conn->query($sql) === TRUE) {
    
} else {
   
}

mysqli_close($conn);
?>
