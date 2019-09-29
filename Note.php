<?php

session_start();


$s_name="localhost";
$u_name="root";
$u_pass="";
$db_name="my_note";

$con=mysqli_connect($s_name, $u_name, $u_pass, $db_name);

if($con)
{
    
    $k_bill=$_POST['KiranaBill'];
    $l_bill=$_POST['LightBill'];
    $p_bill=$_POST['PhoneBill'];
    $d_bill=$_POST['DrBill'];
    $DateBill=$_POST['DateBill'];

    $U_ID=$_SESSION["U_Id"];

    $sql="INSERT INTO note (u_id, kbill, lbill, pbill, dbill, date_bill)
        VALUES ($U_ID, '$k_bill', '$l_bill', '$p_bill', '$d_bill', '$DateBill')";

    $Res=mysqli_query($con, $sql);

    if($Res)
    {
        echo "Data is an insert";
    }
    else
    {
        echo "Data is an NOT insert";
    }
    






}
else
{
    echo "Not connected";
}












?>