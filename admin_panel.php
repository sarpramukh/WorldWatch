<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Panel</title>
</head>

<body>
	
  
<?php 
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"worldwatch");

if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
} 
	 $user=$_POST['user'];
	 $pass=$_POST['pass'];
$sql="SELECT username,password FROM admin_users";
$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)) {
     		if($user == $row['username'] && $pass == $row['password']){
				include('adminPanel.php');
			}
			else{
  					header("Location:admin.php?error=1");
				}
    	}
	
	}
?>

</body>
</html>