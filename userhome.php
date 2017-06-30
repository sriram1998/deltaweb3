<html>
<head>
<title>Share codes</title>
<style>
#h { position:absolute;
	margin-top:0px;
  
   margin-left: 500px;
   border-bottom:thick dotted black;
    color: cyan;
    font-family: verdana;
    font-size: 300%;

}

#url {position:absolute;
    margin-top: 250px;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#url td, #url th {
    border: 1px solid #ddd;
    padding: 8px;
}

#url tr:nth-child(even){background-color: #f2f2f2;}

#url tr:hover {background-color: #ddd;}

#url th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}
#url #d {
width:60%;
	padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;

}

textarea {position:absolute;
    margin-top:100px;
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}

input[type=submit] {position:absolute;
    margin-top: 220px;
    margin-left: 0px;
  
    width: 15%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
  
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
#lo:link, #lo:visited {position:absolute;
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    margin-left: 1050px;
    margin-top: 0px;

    text-align: center;
    text-decoration: none;
    display: inline-block;
}


#lo:hover, #lo:active {
    background-color: red;
}
</style>
</head>
<?php
session_start();
if($_SESSION['user'])
{}
else
{
	header("location:index.php");
}
$user=$_SESSION['user'];
?>
<body>
<h2 id="h">HOME PAGE</h2>

<a href="logout.php" id="lo">Click here to logout</a><br></br>

<form action="codeadd.php" method="POST">
<textarea placeholder="PASTE A CODE:" rows="4" columns="50" id=textin name="code"></textarea><br></br>
<input type="submit" value="Paste code">
</form>

<table border="1px" width="100%" id="url">
<tr>
<th>Id</th>
<th id="d">CODE</th>
<th>POST TIME</th>
</tr>

<?php
mysql_connect("localhost","root","")or die (mysql_error());
mysql_select_db("delta_db")or die("cannot connect to database");
$query=mysql_query("Select * from codes");
while($row=mysql_fetch_array($query))
{
	Print "<tr>";
	Print '<td align="center">'. $row['id']."</td>";
	 Print '<td align="center"><a href="viewcode.php?id='. $row['id'] .'">'. $row['url'] .'</a> </td>';
	Print '<td align="center">'. $row['date_posted'] . "  " .$row['time_posted']."</td>";
	
	Print "</tr>";

}
?>
</table>
</body>
</html>