<!DOCTYPE html>
<html>
<head>
	<title>registration info</title>
</head>
<body>


<?php
require_once "functions.php";
if($_POST){
	$rollno=$_POST["rollno"];
	$name=$_POST["name"];
	$gender=$_POST["gender"];
	$address=$_POST["address"];
	$dob=$_POST["dob"];
	$sem=$_POST["sem"];
	$email=$_POST["email"];
	$dept=$_POST["dept"];
	$batch=$_POST["batch"];

	if(!empty($rollno)&&!empty($name)&&!empty($gender)&&!empty($address)&&!empty($dob)&&!empty($sem)&&!empty($email)&&!empty($dept)&&!empty($batch)){
//mysql query

?>

<table>
	<tr>
		<th>parameters:</th>
		<th>value</th>
	</tr>
	<tr>
		<td>roll no:</td>
		<td><?php echo fix_rollno($rollno);?></td>
	</tr>
	<tr>
		<td>name:</td>
		<td><?php echo fix_name($name);?></td>
	</tr>
	<tr>
		<td>gender:</td>
		<td><?php echo $gender;?></td>
	</tr>
	<tr>
		<td>Address:</td>
		<td><?php echo fix_address($address);?></td>
	</tr>
	<tr>
		<td>date of birth:</td>
		<td><?php echo $dob;?></td>
	</tr>
	<tr>
		<td>semister:</td>
		<td><?php echo $sem;?></td>
	</tr>
	<tr>
		<td>email:</td>
		<td><?php echo fix_email($email);?></td>
	</tr>
	<tr>
		<td>department:</td>
		<td><?php echo $dept;?></td>
	</tr>
	<tr>
		<td>batch:</td>
		<td><?php echo $batch;?></td>
	</tr>
</table>
<?php
}
	else{
		echo"<span>something went wrong</span>";
		header('refresh:2, url=register.html');}
else{
	echo"<span>please register first</span>";
	header('refresh:0,url=register.html');
}
}
?>
</body>
</html>