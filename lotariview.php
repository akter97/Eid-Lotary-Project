<?php 
include ('db.php');
$nid= $_POST['nid'];
$img= $_FILES['img']['name'];
$tmp_name= $_FILES["img"]["tmp_name"];
  
include ('preeloder.php');
 

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


<style>
  table{
    width: 80%;
    height: auto;
    margin: auto;
  }
  table th{
    width: 20%;;
    height: auto;
    margin:2px auto;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
  
  table td{
    width: 30%;;
    height: auto;
    margin: auto;
  }
  .img{
    width: 100px;
    height: 100px;
    top: 20px;
    right: 20px;
    position: absolute;
    background: red;
    border-radius: 30%;
    overflow: hidden;
    box-sizing: border-box;
  }
  .img img{
    width: 100%;
    height: 100%;
  }
  button{
    width: 20%;
    height: auto;
    margin: 30px auto;
    display: block;
    padding: 10px;
    overflow: hidden;
    box-sizing: border-box;
  }
  button a{
    color: whitesmoke;
    padding: 20px 50%;
    text-align: center;
  }
</style>

</head>
<body> 

    <div class="jumbotron bg-info  header text-center">
 

  
  <h1>পবিত্র ঈদুল আযহা ঈদ আনন্দ ২০২২ </h1>
  <marquee> সু-খবর সু-খবর সু-খবর পবিত্র ঈদুল আযহা অর্থ্যাৎ কোরবানির ঈদ বাংলাদেশে ১০ জুলাই ২০২২ মঙ্গলবার শুরু হবে এই উপলক্ষে লটারির করা হবে ১০,১১,১২ তারিখ ‍তিনদিন ব্যাপি প্রতিটি টিকিট এর মূল্য ৫০ টাকা। বিকাশ এর মাধ্যমে ক্রয় করতে পারবেন। ৫০ টাকা! ৫০ টাকা! ৫০ টাকা!</marquee>

 

    </div>
  

  <h2 > আপনার তথ্যটি আমরা সংগ্রহ করেছি </h2>
  
  <marquee behavior="" direction=""> <?php echo $_POST['name']; ?> আপনার আসনটি সম্পন্য করতে 01845797997 এই নাম্বারে বিকাশ, নগন অথবা সিওর ক্যাশ এর মাধ্যমে ৫০ টাকা প্রেমেন্ট করে computereng2021gmail.com স্কিনসট পাঠান  </marquee>

  <div class="container">







  <table class="table">
    <thead>

      <h1 class="text-center">  <?php echo $_POST['name']; ?> </h1>
      <div class="img"><img src=<?php echo 'image/'.$img ; ?> alt="<?php echo $_POST['name']; ?>"> 
      </div>

      <tr>
      
        <th>ID</th> <td><?php echo $nid ; ?> </td>
        <th>Name</th> <td><?php echo $_POST['name']; ?> </td>
       </tr>
       <tr>
        <th>Father Name</th> <td><?php echo $_POST['fname']; ?> </td>
        <th>Mother Name</th> <td><?php echo $_POST['mname']; ?> </td>
       </tr>
       <tr>
        <th>Address</th> <td><?php echo $_POST['address']; ?> </td>
        <th>Email</th>  <td><?php echo $_POST['email']; ?> </td>
       </tr>
       <tr>
        <th>Phone Number</th> <td><?php echo $_POST['pnumber']; ?> </td>
        <th>Nationality</th> <td><?php echo $_POST['nationality']; ?> </td>
       </tr>
       <tr>
        <th>Gender</th> <td><?php echo $_POST['gender']; ?> </td>
        <th>Nationan ID</th> <td><?php echo $_POST['nid']; ?> </td>
       </tr>
       <tr>
        <th>Birth Day</th> <td><?php echo $_POST['db']; ?> </td>
      </tr>
    </thead>
  </table>



<button class="btn btn-primary button" onclick="window.print()">Print</button>
<button class=" btn-info btn"  ><a href="lotari.php">OK</a></button>

</div>




<footer> 
<div class="bg-primary"> 
    <span>   Design By Akter Ujjaman Raj </span>

    </div>
</footer>

<script> alert(' <?php echo $_POST['name']; ?> আপনার আসনটি সম্পন্য করতে 01845797997 এই নাম্বারে বিকাশ, নগন অথবা সিওর ক্যাশ এর মাধ্যমে ৫০ টাকা প্রেমেন্ট করে computereng2021gmail.com স্কিনসট পাঠান আপনার বর্তমান আইডি নাম্বার- <?php echo $nid ; ?>') </script>
</body>
</html>
