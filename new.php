<html>
    <body>
   <?php    

$username = $_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];


echo $name;
echo $email;
echo $password;
echo $rpassword;

if($password === $rpassword)
{
    $mysqli = new mysqli("localhost", "root", "", "users");


    $abc=$mysqli->query("insert into kirti values('$username','$email','$password','$rpassword')");
    if($abc){
    echo "its work";

        session_start();

    $_SESSION['username']=$username;


    $_SESSION['email']=$email;

    $_SESSION['password']=$password;

    header("location:home.php");

    }
    else
    echo "its not work";
}
else{
    echo "password did not match";
}

?>
</body>
    </html>
