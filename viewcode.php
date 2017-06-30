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
{
  Print  nl2br($row['code']);
 
  

}

}
else
{
  $id_exists=false;
}
}
?>

<?php