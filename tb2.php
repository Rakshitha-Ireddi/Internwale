<?php
$conn=mysqli_connect('localhost','root','','db1');
$sql="create table register(firstname varchar(20),username varchar(20),password varchar(20),lastname varchar(20),email varchar(20) primary key,confirmpassword varchar(20),phonenumber varchar(10))";
$result=mysqli_query($conn,$sql);
if($result==true){
    echo "Table created sucessfully";
}
else{
    echo "Table not created ".mysqli_error($conn);
}
mysqli_close($conn);

?>