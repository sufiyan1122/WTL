<!DOCTYPE html>
<html>
	<head>
		<title> php example's</title>	
       
	</head>

        <body>
            <?php
            echo "welcome to php";
            if($_POST){
                $username=$_POST['username'];
                $brand=$_POST['brand'];
                echo "thankyou".$username"you have voted for".$brand;
                }
            ?>
        
            <label for"username" >user name:</label>
            <input id="username" type="text" name="username"/></br>
            <label>please vote for your favorite mobile brand</label></br>
            <label><input type="radio" name="brand" value="Nokia"/>Nokia</label></br>
            <label><input type="radio" name="brand" value="Apple"/>Apple</label></br>
            <label><input type="radio" name="brand" value="Samsung"/>Samsung</label></br>
            <label><input type="radio" name="brand" value="HTC"/>HTC</label></br>
            <label><input type="radio" name="brand" value="Asus"/>Asus</label></br>
            <input type="submit" value="vote"/>
        </body>
</html>