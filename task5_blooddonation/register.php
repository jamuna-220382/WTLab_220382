<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$fname=$_POST["Firstname"];
$lname=$_POST["Lastname"];
$email=$_POST["email"];
$password=$_POST["password"];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
// 3. Connect to database
$conn=new mysqli("localhost","root","","userauth");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// 4. Insert data
$sql="INSERT INTO users (FirstName,LastName,Email,password)
        VALUES ('$fname','$lname','$email','$hashed_password')";
if ($conn->query($sql)===TRUE) {
    echo "<h2>Registration Successful</h2>";
echo "First Name: ".$fname."<br>";
echo "Last Name: ".$lname."<br>";
echo "Email: ".$email."<br>";
echo "Password: ".$password."<br>";
} else {
    echo "Error:".$conn->error;
}
$conn->close();}
else{
    echo"405 -method not allowed";
}
?>
