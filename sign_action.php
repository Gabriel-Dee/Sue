<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $Firstname=$_POST['Firstname'];
    $Lastname=$_POST['Lastname'];
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $PhoneNo=$_POST['PhoneNo'];
    $email=$_POST['email'];
    $sex=$_POST['sex'];


$con=new mysqli('localhost', 'root', '','arulibrary');
if($con){
    $sql="insert into `user`(Firstname,Lastname,Username,Password,PhoneNo,email,sex)values('$Firstname','$Lastname','$Username',
    '$Password','$PhoneNo','$email','$sex')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data inserted successfully";

}else{
    die(mysqli_error($con));
}



}else{
    die(mysqli_error($con));
}

}

?>