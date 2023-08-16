<?php
$conn=mysqli_connect('localhost','root','','db1');
$sql="create table signup(email varchar(20) primary key,password varchar(20))";
$result=mysqli_query($conn,$sql);
if($result==true){
    echo "Table created sucessfully";
}
else{
    echo "Table not created ".mysqli_error($conn);
}
mysqli_close($conn);

?>