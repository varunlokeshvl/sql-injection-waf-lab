<?php
$conn = mysqli_connect("localhost","root","","login_db");

$username = mysqli_real_escape_string($conn,$_POST['username']);

$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){
echo "Login Successful";
}else{
echo "Login Failed";
}
?>

<form method="POST">
<input type="text" name="username" placeholder="Enter username">
<button type="submit">Login</button>
</form>