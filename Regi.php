<?php

    session_start();

    $s_name="localhost";
    $u_name="root";
    $u_pass="";
    $db_name="my_note";

    $con=mysqli_connect($s_name, $u_name, $u_pass, $db_name);

    if($con)
    {
        $fname=$_POST['Firstname'];
        $lname=$_POST['Lastname'];
        $email=$_POST['Email'];
        $pass=$_POST['password'];
    
        $sql="INSERT INTO regi (fname, lname, email, pass)
        VALUES ('$fname', '$lname', '$email', '$pass')";
    
        $sel="select email from regi";
    
        $res2=mysqli_query($con, $sel);
    
        $num=mysqli_num_rows($res2);
    
        for($i = 1; $i<=$num; $i++)
        {
            $data=mysqli_fetch_array($res2);
    
            if($data['email']==$email)
            {
                echo "your account has already been linked in this side";
            }
        }
    
        $res=mysqli_query($con, $sql);
    
        if ($res) {
            # code...
            header("Location: Note.html");
        }
        
    }
    else
    {
        echo "Not connected";
    }













?>