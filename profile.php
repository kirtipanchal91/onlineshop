
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .gradient-custom {
/* fallback for old browsers */
background: #f6d365;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}

.icon{
    margin-top:50px;
}

<style>
      .container {
        font-size: 30px;
        font-family: cursive;
       }
       .a-topnav{
        float: right;
        right:0;
  padding: 4px;
  border: none;
  margin-top: 5px;
  margin-right: -40px;
  font-size: 14px;
  margin-bottom:40px;
       }

        </style>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  </head>
  <body>
  <div class="bg-img">
  <div class="container">
    <div class="topnav">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBIQDPa94VmdZrf6z2_b0rB_goApuz2HvTfQ&s" width="60px" height="60px">
      <a style="">online shop</a>
      <a style="margin-left:30px" href="login.php">Login/</a>  
      <a style="" href="register.php">Register</a> 
      <a style="margin-left:30px" href="home.php">Home</a>
      <a style="margin-left:30px" href="about.php">About</a>
      <a style="margin-left:30px" href="#about">Setting</a>
      <a style="margin-left:30px" href="profile.php">profile</a>
      <a href="logout.php">
      <button type="button" style="margin-left:10px" class="btn btn-dark">logout</button></a>
      <div class="a-topnav">
      <label id="labelsearch" style="position:absolute; z-index:100; margin-top:50px; ">no result found</label>
      <input id="searchin" type="text" placeholder="Search.." onkeyup="create()">
      </div>
    </div>
  </div>
</div>
   
    
  <section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"><br>
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
</svg>
</div><br>
              <h4>user name<br>
              <?php 
                 
                 session_start();
                    echo $_SESSION['username'];      ?></h4>   
              <h6>email address<br><?php 
                  
                  echo $_SESSION['email'];

                    ?></h6>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>user name</h6>
                    <h5 class="text-muted"><?php 
                  
                    echo $_SESSION['username'];
                
                ?></h5>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>email</h6>
                    <h5 class="text-muted">
                      <?php
                  echo $_SESSION['email'];

                    ?></h5>
                  </div>
                </div>
                
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
              
                  <div class="col-6 mb-3">
                    <h6>password</h6>
                    <h5 class="text-muted"> <?php
                    echo $_SESSION['password'];
                    ?></h5>
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
                $("#labelsearch").html(result[0]+"<br>"+result[1]);
              
            }
        });
    }
</script>
  </body>
</html>


