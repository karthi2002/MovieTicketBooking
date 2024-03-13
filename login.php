<?php
$Lusername=$_POST['username'];
$Lpassword=$_POST['password'];
//connection
$conn=new mysqli('localhost','root','','userDetails');
if($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}
else {
    $sql1= "SELECT username from signup where username='$Lusername'";
    $result1=$conn->query($sql1);
    $sql2= "SELECT password from signup where username='$Lusername'";
    $result2=$conn->query($sql2);
    if($result1==$Lusername)
    {
        if($result2==$Lpassword)
        {
            $stmt = $conn->prepare("insert into login(username,password,time)values(?,?,?)");
            $stmt->bind_param("sss",$Lusername,$Lpassword,date("l jS \of F Y h:i:s A"));
            $stmt->execute();
            echo '<script type="text/javascript">
            window.location.assign("index.html")
            </script>';
        }
    }
    else{
        echo '<script type="text/javascript">
            alert("Account not found");
            </script>';
    }
}
?>