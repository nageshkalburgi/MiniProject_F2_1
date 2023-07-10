<?php 

$username= $_POST['username'];
$email=$_POST['email'];
$service=$_POST['service'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$conn = mysqli_connect('localhost','root','','form1');
if($conn->connect_error)
{
    die('Connection Failed : ' .$conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into userinfodata(username,email,service,phone,message)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssis",$username,$email,$service,$phone,$message);
    $stmt->execute();
    echo "registration Successfully....";
    <a href="contact.html" class="btn btn-info" role="button">Link Button</a>
    $stmt->close();
    $conn->close();
}

