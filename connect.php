<?php
$name=$_POST['fname'];
$username=$_POST['usrname'];
$email=$_POST['email'];
$phno=$_POST['phno'];
$password=$_POST['pwd'];
//connection
$conn=new mysqli('localhost','root','','userDetails');
if($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}
else {
    $stmt = $conn->prepare("insert into signup(name,username,email,phno,password)values(?,?,?,?,?)");
    $stmt->bind_param("sssis",$name,$username,$email,$phno,$password);
    $stmt->execute();
    echo '<script type="text/javascript">
    alert("register successful try to login");
    window.location.assign("Login.html")
    </script>';
}
?>