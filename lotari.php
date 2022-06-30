<?php 
include ('preeloder.php');
 
include ('db.php');
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $fname= $_POST['fname'];
    $mname= $_POST['mname'];
    $address= $_POST['address'];
    $email= $_POST['email'];
    $pnumber= $_POST['pnumber'];
    $nationality= $_POST['nationality'];
    $gender= $_POST['gender'];
    $nid= $_POST['nid'];
    $db= $_POST['db'];
    $img= $_FILES['img']['name'];
    $tmp_name= $_FILES["img"]["tmp_name"];
    $destination="image/".$img;
    move_uploaded_file($tmp_name,$destination);

    $sql= "INSERT INTO `lotari`(`name`, `fname`, `mname`, `address`, `email`, `pnumber`, `nationality`, `gender`, `nid`, `db`, `img`) VALUES ('$name', '$fname','$mname', '$address', '$email', '$pnumber', '$nationality', '$gender', '$nid', '$db', '$img')";
    $result = mysqli_query($connect, $sql);
    if($result){
        echo "akter";
        header('location: lotariview.php');
    }
    else{
        echo "mysqli_error_result-";
    }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>লটারি </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="css/lotari.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>



 
</head>
<body> 

    <div class="jumbotron bg-info  header text-center">
 

  
  <h1>পবিত্র ঈদুল আযহা ঈদ আনন্দ ২০২২ </h1>
  <marquee> সু-খবর সু-খবর সু-খবর পবিত্র ঈদুল আযহা অর্থ্যাৎ কোরবানির ঈদ বাংলাদেশে ১০ জুলাই ২০২২ মঙ্গলবার শুরু হবে এই উপলক্ষে লটারির করা হবে ১০,১১,১২ তারিখ ‍তিনদিন ব্যাপি প্রতিটি টিকিট এর মূল্য ৫০ টাকা। বিকাশ এর মাধ্যমে ক্রয় করতে পারবেন। ৫০ টাকা! ৫০ টাকা! ৫০ টাকা!</marquee>

 

    </div>
  

  <h2 > লটারিতে অংশ গ্রহণ করুন </h2>
  

  <div class="container">
  <form action=" " enctype= "multipart/form-data" method="POST">
      
  
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" max="20" required placeholder="Enter name" name="name">


      <label for="fname">Father Name:</label>
      <input type="text" class="form-control" id="fname" max="20" required placeholder="Enter name" name="fname">

      <label for="mname">Mother Name:</label>
      <input type="text" class="form-control" id="mname" max="20" required placeholder="Enter name" name="mname">

      <label for="address">Addrress:</label>
      <input type="text" class="form-control" id="address" minlength="20" required placeholder="Enter Addrress" name="address">
   
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" required placeholder="Enter email" name="email">

      <label for="pnumber">Phone Number:</label>
      <input type="number" class="form-control" id="pnumber" maxlength="11" required placeholder="+880" name="pnumber">
   
      <label for="nationality">Nationality:</label>


      <select class="form-control" name="nationality">
          <option value="Bangladesh">Bangladesh</option>
          <option value="India">India</option>
          <option value="Pakisthan">Pakisthan</option>
          <option value="Srelanka">Srelanka</option>

      </select>

      <!-- <input type="text" class="form-control" id="nationality" require name="nationality"> -->
     
     
      <label class="d-block"   for="male">Geder </label>
        <input type="radio" class="" id="male" name="gender" value="Male">Male
        <input type="radio" class="" id="female" name="gender" value="Female">Female      
         <input type="radio" class="" id="custom" name="gender" value="Custom"> Custom
     

        <label class="d-block" for="nid"> NID/Birth NO:</label>
      <input type="number" class="form-control" id="nid" required placeholder="National Id No" name="nid">
       <label class="d-block" for="db">Date Of Birth:</label>
      <input type="date" class="form-control" id="db" required placeholder="Enter Date of Birth" name="db">
      <label class="d-block" for="img">Image:</label>
      <input type="file" class="form-control" id="img" required name="img">

      
    <button class="submit btn btn-info" type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>


</div>




<footer> 
<div class="bg-primary"> 
    <span>   Design By Akter Ujjaman Raj </span>

    </div>
</footer>
</body>




</html>
