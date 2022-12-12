<?php
include 'conect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into `crud` (name, email,mobile, password)  values ('$name','$email','$mobile','$password')";
    $result=mysqli_query($connection,$sql);
    if ($result){
        header('location: view.php');
    }
    else{
        die (mysqli_error($connection));
    }
    

}
// delete
 
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql= "DELETE from crud where id = $id";
    $result=mysqli_query($connection, $sql);
    if ($result){
        header('location:view.php');
    }else{
            die(mysqli_error($connection));
        }
    };
    // Updaate


    // $id=$_GET['update'];
    // $sql = "SELECT * FROM `crud` where id=$id";
    // $result= mysqli_query($connection, $sql);
    // $row= mysqli_fetch_assoc($result);
    // $name= $row ['name'];
    // $email= $row ['email'];
    // $mobile= $row ['mobile'];
    // $password= $row ['password'];




    if(isset($_POST['update'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
  
      $mobile=$_POST['mobile'];
      $password=$_POST['password'];
  
      $sql ="update `crud` set id=$id,name='$name',email='$email', mobile='$mobile', password = '$password' where id= $id";
      $result=mysqli_query ($connection, $sql);
      if($result){
          header('location: view.php');
      }
    }
    
?> 

