
<!doctype html>
   
<html>
<head>
	<link href="css/imgGrid.css" rel="stylesheet" />
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


$sql="SELECT * FROM citizen";
$result = mysqli_query($conn,$sql);
?>	
<?php 
while($row = mysqli_fetch_array($result)) { 
echo "<div id='gridDiv' >";
echo "<table>";
    echo "<tbody id='gridTable'>";
    echo "<tr  class='gridImg'> <td> <img src=data:image/jpeg;base64,". base64_encode($row['img']) ." /> </td> </tr> ";
      echo " <tr> <td class='gridContent'><b> Model  : </b>  ". $row['model']."</td> </tr> ";
       echo "     <tr> <td class='gridContent'><b> Case :</b> ". $row['case'] ." mm </td> </tr> ";
       echo "     <tr> <td class='gridContent'><b> Prize :</b> $". $row['prize'] ." </td> </tr> ";
        echo "</tbody>";
    echo "</table>";
 echo "</div>";
}

mysqli_close($conn); ?>


</body>
</html>