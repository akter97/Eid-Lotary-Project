<?php 
include ('preeloder.php');
 
include ('db.php');

if(isset($_POST['submit'])){
  $name= $_POST['name'];
  $email= $_POST['email'];
  $ps =$_POST['password'];
  $db= $_POST['bd'];
  $sql= " INSERT INTO `acount`(`name`, `email`,`ps`,`db`) VALUES ('$name','$email','$ps','$db')";
$result= mysqli_query($connect,$sql);
if($result){
  echo "<script> alert ('WelCome You Are new Menber of the your Website') </script>";
  header('location:login.php');
}
else{
  echo "error";
}
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


<style>
   button{
    margin: 30px 40%;;
   }
.added-acount{
    width: 50%;
    height: 70%;
    padding: 30px 10px;
    color: white;
    margin: auto;
    background: #000;
    border: 10px dotted red;
    margin-top: 30px;
}

</style>

</head>
<body>

<div class="container">

<div class="added-acount">
  <h2 class="text-center">Added New Member</h2>
  <form action="" method="POST">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" require placeholder="Enter name" name="name">
   
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" require placeholder="Enter email" name="email">
   
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" require placeholder="Enter password" name="password">
      <label for="db">Date Of Birth:</label>
      <input type="date" class="form-control" id="db" require placeholder="Enter Date of Birth" name="db">
   
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>
</div>

</body>
</html>
