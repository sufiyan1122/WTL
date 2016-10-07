<!DOCTYPE html>
<html>
<head>
	<title>registration info</title>
</head>
<body>


<?php
require_once "functions.php";
if($_POST){
	$rollno=  fix_rollno($_POST["rollno"]);
	$name=fix_name($_POST["name"]);
	$gender=$_POST["gender"];
	$address=fix_address($_POST["address"]);
	$dob=$_POST["dob"];
	$sem=$_POST["sem"];
	$email=fix_email($_POST["email"]);
	$dept=$_POST["dept"];
	$batch=$_POST["batch"];

	if(!empty($rollno)&&!empty($name)&&!empty($gender)&&!empty($address)&&!empty($dob)&&!empty($sem)&&!empty($email)&&!empty($dept)&&!empty($batch)){
            $conn=mysqli_connect("localhost", "root", "root", "AIKTC");
            if(!$conn){
                echo 'connection failed';
                mysqli_connect_error($conn);
               }
        
        $query="INSERT INTO `students`(`rollno`, `name`, `gender`, `address`, `dob`, `sem`, `email`, `dept`, `batch`) VALUES ('$rollno','$name','$gender','$address','$dob','$sem','$email','$dept','$batch')";
       
        $sql=  mysqli_query($conn, $query);
        if(!$sql){
            echo mysqli_error($conn);
        }        
        
        $query2="select * from students";
        $sql2=  mysqli_query($conn, $query2);
        if(!$sql2){
            echo mysqli_error($conn);
        }        
        ?>
    <table>
    <?php
        while ($result = mysqli_fetch_array($sql2)) {
        ?>
	<tr>
		<th>parameters:</th>
		<th>value</th>
	</tr>
	<tr>
		<td>roll no:</td>
		<td><?php echo $result[rollno];?></td>
	</tr>
	<tr>
		<td>name:</td>
		<td><?php echo $result[name];?></td>
	</tr>
	<tr>
		<td>gender:</td>
		<td><?php echo $result[gender];?></td>
	</tr>
	<tr>
		<td>Address:</td>
		<td><?php echo $result[address];?></td>
	</tr>
	<tr>
		<td>date of birth:</td>
		<td><?php echo $result[dob];?></td>
	</tr>
	<tr>
		<td>semister:</td>
		<td><?php echo $result[sem];?></td>
	</tr>
	<tr>
		<td>email:</td>
		<td><?php echo $result[email];?></td>
	</tr>
	<tr>
		<td>department:</td>
		<td><?php echo $result[dept];?></td>
	</tr>
	<tr>
		<td>batch:</td>
		<td><?php echo $result[batch];?></td>
	</tr>
        <?php
        }
        ?>
    
    </table>
<?php
        
        }

	else{
		echo"<span>something went wrong</span>";
      		header('refresh:2, url=register.html');}
        }
else{
	echo"<span>please register first</span>";
	header('refresh:0,url=register.html');
}

?>
</body>
</html>