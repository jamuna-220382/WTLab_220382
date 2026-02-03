<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$fname=ucfirst(trim($_POST["Firstname"]));
$lname=ucfirst(trim($_POST["Lastname"]));
$email=strtolower(trim($_POST["email"]));
$password=trim($_POST["password"]);
if(strlen($password)<6){
    die("Password must be at least 6 characters");
}
$hashed_password=password_hash($password,PASSWORD_DEFAULT);
$namecount=str_word_count($fname);
echo "first name has $namecount words<br>"
if(strpos($email,"@")==false){
    die("invalid email fromat");
}
$username=substr($email,0,5);
echo "username suggestions is $username<br>";
$fname=htmlspecialchars($fname);
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

} else {
    echo "Error:".$conn->error;
}
$conn->close();}
else{
    echo"405 -method not allowed";
}
echo "hello world";
?>
