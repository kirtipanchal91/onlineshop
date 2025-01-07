<!doctype html>
<html lang="en">
  <head> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  
    

  <body>
  <style>
      .container {
        font-size: 30px;
        font-family: cursive;
       }
       .topnav{
        float: right;
  
  margin-top: 4px;
  margin-right: 10px;
 
       }
</style>
  <div class="bg-img">
  <div class="container">
    <div class="topnav">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBIQDPa94VmdZrf6z2_b0rB_goApuz2HvTfQ&s" width="60px" height="60px">
      <a style="">online shop</a>
      <div class="topnav">
  <input id="searchin" type="text" placeholder="Search.." onkeyup="create()">
</div>
      <br>
      
      <label id="labelsearch" style="padding-left:600px">No result found</label>
      <br>
      <a style="margin-left:70px" href="login.php">Login/</a>  
      <a style="" href="register.php">Register</a> 
      <a style="margin-left:70px" href="home.php">Home</a>
      <a style="margin-left:70px" href="about.php">About</a>
      <a style="margin-left:70px" href="#about">Setting</a>
      <a style="margin-left:70px" href="profile.php">profile</a>
      <a href="logout.php">
        
        
      <button type="button" style="margin-left:10px" class="btn btn-dark">logout</button></a>

      </div>
  </div>
</div>

<script>
    function create () {
      var a=  document.getElementById("searchin").value;
        $.ajax({
            url:"test.php",    //the page containing php script
            type: "post",    //request type,
            dataType: 'json',
            data: {registration: a},
            success:function(result){
                console.log(result);
                $("#labelsearch").html(result[0]+"<br>"+result);
            }
        });
    }
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>