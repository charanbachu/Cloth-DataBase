<?php
include('connect.php');
$id=$_POST['id'];
$query="DELETE FROM `orderdetails` WHERE `order_id`='$id'";
$query_run=mysql_query($query);
@$row=mysql_affected_rows();
if($query_run && $row > 0)
{
	$newURL="cusorder.php";
	header('Location: '.$newURL);
echo $query_run;
}
else
{
			echo '<script type="text/javascript">'; 
			echo 'alert("Incorrect Id");'; 
			echo 'window.location.href = "cusorder.php";';
			echo '</script>';
			echo "charan";
}

?>

