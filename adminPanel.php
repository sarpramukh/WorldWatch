<!doctype html>
<html>
<head>
	<link href="css/main.css" rel="stylesheet" />
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
	

		if(isset($_POST['submitCitizen'])){
			$cImg = $_POST['Cimagefile'];
			$cModel = $_POST['Cmodel'];
			$cCase = $_POST['Ccase'];
			$cPrize = $_POST['Cprize'];	
			$sql="INSERT INTO citizen (id,img,model,case,prize) VALUES ('', '". file_get_contents($cImg)."','".$cModel."','".$cCase."','".$cPrize."')";

$result = mysqli_query($conn, $sql);
if($result){
	echo "inserted";
	}
		}
	?>

	<div id="main1">
    	<div class="common" >
        <form action="adminPanel.php" method="post" >
        	<table>
            	<tbody>
                <tr><td colspan="2" align="center"> <input type="file" name="Cimagefile"/> </td> </tr> 
                <tr><td>Model : </td> <td> <input type="text" name="Cmodel"/> </td> </tr> 
                <tr><td>Case :</td> <td><input type="text" name="Ccase"/> </td> </tr> 
                <tr><td>Prize : </td> <td> <input type="text" name="Cprize"/> </td> </tr> 
                <tr><td colspan="2" align="center"> <input type="submit" name="submitCitizen" value="Save Citizen"/> </td> </tr> 
                </tbody>
            </table>
          </form>
        </div>
        
        <div class="common">
        <form action="adminPanel.php" method="post" >
        	<table>
            	<tbody>
                <tr><td colspan="2" align="center"> <input type="file" name="Timagefile"/> </td> </tr> 
                <tr><td>Model : </td> <td> <input type="text" name="Tmodel"/> </td> </tr> 
                <tr><td>Case :</td> <td><input type="text" name="Tcase"/> </td> </tr> 
                <tr><td>Prize : </td> <td> <input type="text" name="Tprize"/> </td> </tr> 
                <tr><td colspan="2" align="center"> <input type="submit" name="submitTitan" value="Save Titan"/> </td> </tr> 
                </tbody>
            </table>
          </form>
        </div>
        
        <div class="common">
        <form action="adminPanel.php" method="post" >
        	<table>
            	<tbody>
                <tr><td colspan="2" align="center"> <input type="file" name="Rimagefile"/> </td> </tr> 
                <tr><td>Model : </td> <td> <input type="text" name="Rmodel"/> </td> </tr> 
                <tr><td>Case :</td> <td><input type="text" name="Rcase"/> </td> </tr> 
                <tr><td>Prize : </td> <td> <input type="text" name="Rprize"/> </td> </tr> 
                <tr><td colspan="2" align="center"> <input type="submit" name="submitRolex" value="Save Rolex"/> </td> </tr> 
                </tbody>
            </table>
          </form>
        </div>
    </div>
<?php
mysqli_close($conn);
?>
</body>
</html>