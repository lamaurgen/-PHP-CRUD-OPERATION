<?php
  include 'action.php';

  ?>

<!doctype html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
      <div class="container my-5">
        <form method="post">
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control"
            placeholder= "Enter ur name" name="name" autocomplete="off" value =<?php echo $name;?>>
    </div>
    
    <div class="form-group">
      <label>Email</label>
        <input type="text" class="form-control"
        placeholder= "Enter ur email" name="email" autocomplete="off" value =<?php echo $email;?>>
        </div>
    <div class="form-group">
      <label>Mobile</label>
      <input type="number" class="form-control"
      placeholder= "Enter ur number" name="mobile" autocomplete="off" value =<?php echo $mobile;?>>
      </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control"
      placeholder= "Enter ur password" name="password" autocomplete="off" value =<?php echo $password;?>>
    </div>
    <br>
    
    <button type="submit" class="btn btn-primary" name="update">Update</button>
    </form>
    </div>
    
    </body>
    </html>