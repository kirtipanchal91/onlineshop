<html>
  <head>
    <style>

      .text-center{
        text-align: center;
        font-size:30px;
      }
      .add{
        text-align: center;
      }
      </style>

</head>
<?php include "nav.php"?>
  <?php 

           session_start();


           echo $_SESSION['username'];  
          if($_SESSION["alertreset"])
           echo '<script type="text/javascript">alert("password updated") </script>';

          $_SESSION["alertreset"]=0;
           
  ?>
 
 
<div class="kirti">

<div
  class="bg-image"
  style="background-image: url('https://thumbs.dreamstime.com/b/generative-ai-image-shopping-bags-pink-basket-flowers-leaves-background-326711216.jpg');
   width:100%; height: 100vh;
  ">
<div class="text-center">
  <h1 class="text-black">you can always find something you want </h1>
</div>
<div class="add">
<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-bag-heart-fill" viewBox="0 0 16 16">
  <path d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"/>
</svg>
    </div><br>
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
    <div class="text-center p-4" style="background-color: rgba(220, 60, 151, 0.65);">
    It allows consumers to directly purchase goods or services from a seller over the internet. <br>
    Online shopping involves browsing an online store, selecting products, and adding them to a virtual shopping cart.
    <a class="text-reset fw-bold"></a>
  </div>
 
</footer>


   
  </body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>