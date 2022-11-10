<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo "connection successful";

}else 
{
    echo"no connection";

}
mysqli_select_db($con,'ajdrink');
$username =$_POST['username'];
$email = $_POST['email'];
$Mobile = $_POST['Mobile'];
$comment = $_POST['comment'];

$query = "INSERT INTO userinfodata(username, email, Mobile, comment)
values('$username','$email','$Mobile','$comment')";

mysqli_query($con,$query);
echo "$query";


 ?>