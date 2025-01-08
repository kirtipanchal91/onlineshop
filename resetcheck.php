<html>
    <body>
   <?php    

$password=$_POST['password'];
$npassword=$_POST['npassword'];
$email=$_POST['email'];


$atcheck=0;

$dotcheck=0;
$digit=0;

for($i=0;$i<strlen($email);$i++){

    if($email[$i]=="@")
        $atcheck=1;
    if($email[$i]=="."){
        $dotcheck=1;
    }

}

    
if($atcheck and $dotcheck)
{
   
        $mysqli = new mysqli("localhost", "root", "", "users");


        $abc=$mysqli->query("update kirti set password='$npassword' where email='$email'");
        if($abc){
           

            session_start();
            $_SESSION["alertreset"]= 1; 
            header("location: home.php"); 
        }
        else
        {
        echo '<script type="text/javascript">alert("password not updated") </script>';
        header("location: reset.php"); 
        exit;
    }
}
else    
{
    echo '<script type="text/javascript">alert("password not updated") </script>';
header("location: reset.php"); 
}


echo $password;
echo $npassword;



?>
</body>
    </html>
