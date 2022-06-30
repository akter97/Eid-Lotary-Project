<!DOCTYPE html>
<html lang="en">
<head>
  <title>২০২২ ঈদের সের অফার</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <style>
#preeloder{
    width:100%;
    height:100vh;
    background: #000;
    display: flex;
    justify-content: center;
    align-items: center;
}
.loader {
    border-top: 16px solid #4285F4;
   
    border-right: 16px solid #EA4335;
    border-bottom: 16px solid #FBBC05;
    border-left: 16px solid #34A853;
    border-radius: 50%;
    width: 120px;
    height: 120px;
    -webkit-animation: rotate 2s linear infinite;
    animation: rotate 2s linear infinite;
}
@keyframes rotate {
    0% { 
        transform: rotate(0deg);
        background-image: url('admin/img/world.gif');
        background-attachment: cover;
        background-position: center;
        width: 50%;
        height:50%;
    }
   
    100% { 
        transform: rotate(360deg);
        background-image: url('admin/img/world.gif');
        background-attachment: cover;
        background-position: center;
    
    }
}
@-webkit-keyframes rotate {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
}
</style>
</head>
<body> 
<div id="preeloder">
<div class="loader">


</div>
</div>


<script>

window.onload = function(){
        //hide the preloader
        document.getElementById("preeloder").style.display = "none";
    }
    
</script>
</body>
</html>
