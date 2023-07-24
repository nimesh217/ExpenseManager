<?php
 include('dbconnect.php');

 //delete
if(isset($_GET['del']))
{
    $delid=$_GET['del'];
    $dquery="DELETE FROM `account` WHERE AcId='$delid'";
    $res=mysqli_query($con, $dquery);
    if(!$res)
    {
        echo "Problem in delete Account";
    }
    else{
        header('location:account.php');
    }
}
 //insert & update
 if(isset($_POST["btnsubmit"]))
 {
    if($_POST["btnsubmit"]=="Insert")
    {
        //insert
        $AcName=$_POST["AcName"];
        $qry="insert into account (AcName,isStatus) values ('$AcName',true)";
        $res=mysqli_query($con,$qry);
        if(!$res)
        {
            echo "Problem while insert Account";
        }
        else
        {
            header('location:account.php');
        }
    }

    if($_POST["btnsubmit"]=="Save")
    {
        //update
        echo $AcId=$_POST["editid"];
        $AcName=$_POST["AcName"];
       echo $qry="update account set AcName='$AcName' where AcId=$AcId";
        $res=mysqli_query($con,$qry);
        if(!$res)
        {
            echo "Problem while update Account";
        }
        else
        {
            header('location:account.php');
        }
    }
 } 


?>