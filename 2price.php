
<?php 
include ('preeloder.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>  দ্বিতীয় দিনের পুরস্কার </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <style>
  body{
    width: 98%;
    margin: auto;
  }
  table{
    text-align: center;
  }
  td img{
    width: 100px ;
    height: 50px;
  }
  </style>
</head>
<body> 



  <h2 class="mt-5 ml-5 text-center ">২য় দিন পুরুষ্কার </h2>


  <div class="row p-4 bg-info m-auto">
  <div class="col-md-10 m-auto card">

  <table>
    <tr>
        <th> Serial No</th>
        <th> Name Price Name </th>
        <th> Image </th>
    </tr>
  
<?php 
include ('db.php');
$price1= "SELECT * FROM `price2`";
$sql= mysqli_query($connect,$price1);
if(mysqli_num_rows($sql)>0){
    while($row=mysqli_fetch_assoc($sql)){
?>
    <tr>
            <td><?php echo $row['no']; ?> </td>
     
            <td><?php echo $row['name']; ?> </td>


            <td> <img src="<?php echo "admin/image/".$row['image']; ?>" alt="<?php echo $row['name']; ?>">   </td>
    </tr>
       
<?php 
    }
}
?>


  </table>

</div>

</div>



<a class="btn-primary btn m-4" href="index.php">Back</a>



</body>
</html>
