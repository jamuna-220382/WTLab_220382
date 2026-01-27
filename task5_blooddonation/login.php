<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $email=trim($_POST['email']);
    $password=$_POST['password'];
    $conn=new mysqli("localhost", "root","","userauth");
    if ($conn->connect_error) {
        die("Connection failed");
    }
    $sql="SELECT * FROM users WHERE Email='$email'";
    $result=$conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $row=$result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Login successful! Welcome " . $row['FirstName'];
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "User not found!";
    }
    $conn->close();
}
?>