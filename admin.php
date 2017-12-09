<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Login</title>
<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<?php
	$error = '';
	if(isset($_GET['error'])){
		if($_GET['error'] == 1){
				$error = 'invalid username/password';
		}
	}
?>


<form action="admin_panel.php" method="post">
<table>
<tbody>
<tr> <td colspan="2" style="color:red;text-align:center;"> <?php echo $error; ?> </td></tr>
<tr> <td> Username: </td> <td> <input type="text" name="user"> </td></tr>
<tr> <td> Password: </td> <td> <input type="password" name="pass"> </td> </tr>
<tr> <td colspan="2" ><input type="submit"> </td></tr>

</tbody>
</table>
</form>
    
</body>
</html>