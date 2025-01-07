<html>
    <body>
   <?php    

$username = $_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];


$mysqli = new mysqli("localhost", "root", "", "users");


$result=$mysqli->query("select * from kirti where name='$username' and email='$email' and password='$password'");

$initial=0;

while($row = mysqli_fetch_array($result))
{
  // print_r($row);
   $initial=$initial+1;
} 

//echo $initial;

if($initial > 0){
    echo "logged in ";
    session_start();
    $_SESSION['username']=$username;
    $_SESSION['logincheck']=1;
    
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    header("location:home.php");
}
else{
    echo '<script type="text/javascript">alert("password does not match") </script>';
    

}


?>
</body>
    </html>
