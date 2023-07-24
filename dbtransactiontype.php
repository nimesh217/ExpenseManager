<?php
 include('dbconnect.php');

 //delete
if(isset($_GET['del']))
{
    $delid=$_GET['del'];
    $dquery="DELETE FROM `transactiontype` WHERE TransTypeId='$delid'";
    $res=mysqli_query($con, $dquery);
    if(!$res)
    {
        echo "Problem in delete transactiontype";
    }
    else{
        header('location:transactiontype.php');
    }
}
 //insert & update
 if(isset($_POST["btnsubmit"]))
 {
    if($_POST["btnsubmit"]=="Insert")
    {
        //insert
        $TransTypeName=$_POST["TransTypeName"];
        $qry="insert into transactiontype (TransTypeName) values ('$TransTypeName')";
        $res=mysqli_query($con,$qry);
        if(!$res)
        {
            echo "Problem while insert TransactionType";
        }
        else
        {
            header('location:transactiontype.php');
        }
    }

    if($_POST["btnsubmit"]=="Save")
    {
        //update
        echo $TransTypeId=$_POST["editid"];
        $TransTypeName=$_POST["TransTypeName"];
       echo $qry="update transactiontype set TransTypeName='$TransTypeName' where TransTypeId=$TransTypeId";
        $res=mysqli_query($con,$qry);
        if(!$res)
        {
            echo "Problem while update TransactionType";
        }
        else
        {
            header('location:transactiontype.php');
        }
    }
 } 


?>