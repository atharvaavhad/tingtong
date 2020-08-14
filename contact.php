<?php
$username = "root";
$pass = "";
$host = "localhost";
$db = "userdata";
$conn = mysqli_connect($host,$username,$pass,$db);

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$msg = $_POST['msg'];
	$query = "INSERT INTO `contact`(`name`, `email`, `phone`, `msg`) VALUES ('$name','$email','$number','$msg')";
	$insert = mysqli_query($conn,$query);
	if ($insert) {
		?>
		<script>
			alert("Thanks for response");
		</script>
		<?php
	}
	else {
		?>
		<script>
			alert("Your msg flailed by connection");
		</script>
		<?php
	}
}
?>
