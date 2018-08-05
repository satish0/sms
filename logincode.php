
<?php
	$conn;
	include('dbcon.php');

	if(isset($_POST['submit'])) {
	$username = $_POST['uname'];
	$password = $_POST['pass'];

 	$sql = "SELECT * FROM `logindetails` WHERE `username` = '$username' AND `password` = '$password'";
 	$result = $conn->query($sql);
 	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	echo "username and password not matched";
	        echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
	    }
	}
	else{
			echo "0 results";
		}
	$conn->close();
}
?>