<?php
include 'conect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>View</title>
</head>
<body>
     <table>
     <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>


    </tr>
  </thead>
  <tbody>
    <?php

    $sql=" Select * from `crud`";
    $result = mysqli_query($connection, $sql);
        if ($result ){
         while( $row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $password=$row['password'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
              <button  class="btn btn-danger"><a href="action.php?id='.$id.'" onclick="return myFunction()" class="text-light">Delete</a></button>
              
              </td>
              
              
              </tr>';
         }
        }
        ?>
  </tbody>
</table>
     </table>
    <div class="container">
        <button class="btn btn-primary my-4"><a href="index.php" class="text-light">Add User</a> </button>
    </div>
    
    <script>
function myFunction() {
var r = confirm("OK to delete?");
if (r == false) {
   return false;
} 

}
</script>   
    
</body>
</html>