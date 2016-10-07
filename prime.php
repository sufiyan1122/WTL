<?php
if($_POST){
	$num1=$_POST["num1"];
	$num2=$_POST["num2"];
	for($i=$num1;$i<=$num2;$i++)
	{
		for($j=0;$j<=$num1;$j++){
		if($i%$j=0){
			if($i==$j){
				echo "$i is a prime no<br>";}
		}
	}
}
}
else{
	echo "enter the numbers";
}
?>