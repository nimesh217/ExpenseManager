<?php
 include('dbconnect.php');

 //delete
if(isset($_GET['del']))
{
    $delid=$_GET['del'];
    $dquery="DELETE FROM `transaction` WHERE TID='$delid'";
    $res=mysqli_query($con, $dquery);
    if(!$res)
    {
        echo "Problem in delete Payment Method";
    }
    else{
        header('location:transaction.php');
    }
}
 //insert & update
 if(isset($_POST["btnsubmit"]))
 {
    if($_POST["btnsubmit"]=="Insert")
    {
        //insert
        $AcId=$_POST["ACName"];
        $TransTypeId=$_POST["TransTypeName"];
        $TransAmount=$_POST["TransAmount"];
        $TransDescription=$_POST["TransDescription"];
        $TransComment=$_POST["TransComment"];
        $TransDate=$_POST["TransDate"];
        $Status=true;
        $PMId=$_POST["PMName"];
        $qry="insert into transaction (AcId,TransTypeId,TransAmount,TransDescription,TransComment,TransDate,Status,PMId) values ($AcId,$TransTypeId,$TransAmount,'$TransDescription','$TransComment','$TransDate',$Status,$PMId)";
        $res=mysqli_query($con,$qry);
        if(!$res)
        {
            echo "Problem while insert transaction";
        }
        else
        {
            header('location:transaction.php');
        }
    }

    if($_POST["btnsubmit"]=="Save")
    {
        //update
        echo $TransId=$_POST["editid"];
        $AcId=$_POST["ACName"];
        $TransTypeId=$_POST["TransTypeName"];
        $TransAmount=$_POST["TransAmount"];
        $TransDescription=$_POST["TransDescription"];
        $TransComment=$_POST["TransComment"];
        $TransDate=$_POST["TransDate"];
        $Status=true;
        $PMId=$_POST["PMName"];
        $qry="update account set AcId=$AcId,TransTypeId=$TransTypeId,TransAmount=$TransAmount,TransDescription='$TransDescription',TransComment='$TransComment',TransDate=$TransDate,Status=$Status,PMId=$PMId where AcId=$AcId";         $res=mysqli_query($con,$qry);
        if(!$res)
        {
            echo "Problem while update Transaction";
        }
        else
        {
            header('location:transaction.php');
        }
    }
 } 


?>