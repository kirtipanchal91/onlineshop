<?php

$registration = $_POST['registration'];

$mysqli = new mysqli("localhost", "root", "", "movie");

$result=$mysqli->query("select * from moviename where name='$registration'");

$data=[];
if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        $data[]=$row['name'];
    }
}
echo json_encode($data); 

?>