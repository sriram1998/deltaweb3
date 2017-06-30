<html>
    <head>
        
        <title>Share Codes</title>
     <style>
#e:link, #e:visited {position:absolute;
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    margin-left: 1000px;
    margin-top: 25%;

    text-align: center;
    text-decoration: none;
    display: inline-block;
}


#e:hover, #e:active {
    background-color: red;
}
div {position:absolute;

    background-color: lightblue;
    width: 50%;
    padding: 25px;
    border: 25px solid navy;
}
</style>
</head>
<body background="bgl.png">
       
        <a href="userhome.php" id="e">Click here to go back</a><br/><br/>
        </body>
        </html>

<?php
if(!empty($_GET['id']))
{$id=$_GET['id'];
$_SESSION['id']=$id;
$id_exists=true;
mysql_connect("localhost","root","")or die (mysql_error());
mysql_select_db("delta_db")or die("cannot connect to database");
$query=mysql_query("Select * from codes where id='$id'" );
$count=mysql_num_rows($query);
if($count>0)
{
  while($row=mysql_fetch_array($query))
{ Print "<div>";
  Print  nl2br($row['code']);
 Print "</div>";
  

}

}
else
{
  $id_exists=false;
}
}
?>

<?php