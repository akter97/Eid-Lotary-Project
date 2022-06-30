<?php 
include ('preeloder.php');
 
include ('db.php');
if(isset($_POST['login'])){
  $name= $_POST['name'];
  $ps= $_POST['password'];

$sql= " SELECT * FROM `acount` WHERE `name`='$name' AND `ps`='$ps'";
$login= mysqli_query($connect,$sql);
if($row=mysqli_fetch_array($login)){
    echo "<script> alert('Login Successfully') </script>";
     header('location:lotari.php?name=$name');
}


else {
  echo "<script> alert('Error Name :-$name- Or Password -:$ps- ') </script>";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


<style>
   .button{
    margin: 30px 40%;;
   }
.login-acount{
    width: 50%;
    height: 70%;
    padding: 30px 10px;
    color: white;
    margin: 50px auto;
    background: #000;
    border: 10px dotted red;
    margin-top: 30px;
}

</style>

</head>
<body>

<div class="container">

<div class="login-acount">
  <h2 class="text-center">Login You Account</h2>
  <form action="" method="POST">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" require placeholder="Enter name" name="name">
   
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" require placeholder="Enter password" name="password">
     
    <button  type="submit" class="btn btn-primary button" name="login">Login</button>
  
    <button class="mt-5"><a class="btn btn-primary p-2" href="acount.php "> New Acount</a></button>
  
  </form>
</div>
</div>

</body>
</html>
