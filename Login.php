<?php

session_start();


$s_name="localhost";
$u_name="root";
$u_pass="";
$db_name="my_note";

$con=mysqli_connect($s_name, $u_name, $u_pass, $db_name);


if($con)
{

    $email=$_POST['email'];
    $pass=$_POST['password'];
    
    $sel="select * from regi";
    
    $res2=mysqli_query($con, $sel);
    
    $num=mysqli_num_rows($res2);
    
    for($i = 1; $i<=$num; $i++)
    {
        $data=mysqli_fetch_array($res2);
    
        if($data['email']==$email && $data['pass']==$pass)
        {
            $_SESSION["U_Id"]=$data['id'];
            header("Location: Note.html");
        }
    }
    
    echo "PLZ created account first";
    
}
else
{
    echo "Not connected";
}






?>