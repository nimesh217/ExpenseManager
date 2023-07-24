<?php
 include('dbconnect.php');

 //delete
if(isset($_GET['del']))
{
    $delid=$_GET['del'];
    $dquery="DELETE FROM `paymentmethod` WHERE PMId='$delid'";
    $res=mysqli_query($con, $dquery);
    if(!$res)
    {
        echo "Problem in delete Payment Method";
    }
    else{
        header('location:paymentmethod.php');
    }
}
 //insert & update
 if(isset($_POST["btnsubmit"]))
 {
    if($_POST["btnsubmit"]=="Insert")
    {
        //insert
        $PMName=$_POST["PMName"];
        echo $qry="insert into PaymentMethod (PMName,Status) values ('$PMName',true)";
        $res=mysqli_query($con,$qry);
        if(!$res)
        {
            echo "Problem while insert PaymentMethod";
        }
        else
        {
            header('location:paymentmethod.php');
        }
    }

    if($_POST["btnsubmit"]=="Save")
    {
        //update
        echo $PMId=$_POST["editid"];
        $PMName=$_POST["PMName"];
       echo $qry="update PaymentMethod set PMName='$PMName' where PMID=$PMId";
        $res=mysqli_query($con,$qry);
        if(!$res)
        {
            echo "Problem while update Payment Method";
        }
        else
        {
            header('location:paymentmethod.php');
        }
    }
 } 


?>