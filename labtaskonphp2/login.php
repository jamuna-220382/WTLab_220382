<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$email=strtolower(trim($_POST["email"]));
$password=trim($_POST["password"]);
// Connect database
$conn=new mysqli("localhost","root","","userauth");
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
// Find user
$sql="SELECT * FROM users WHERE Email='$email'";
$result=$conn->query($sql);
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    if(strcasecmp($email,$row['Email'])==0){
           // Verify password
         if(password_verify($password, $row['password'])){
        echo "Login Successful!";
        echo "<br>Welcome " . $row['FirstName'];
        }else{
         echo "Invalid Password!";
      }
    }
    else{
        echo "email mismatch";
    }

}
   else{
    echo "User not found!";
}
$conn->close();
}
?>
