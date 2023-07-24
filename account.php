<?php
   include('dbconnect.php');
   if(isset($_GET['edit']))
   {
    $editid=$_GET['edit'];
    $qry="select * from account where AcId=$editid";
    $eresult=mysqli_query($con,$qry);
    if(!$eresult)
    {
        //no result from the databse;
    }
    else
    {
        $erow=mysqli_fetch_assoc($eresult);    
        $eAcId=$erow['AcId'];
        $eAcName=$erow['AcName'];
    }
   }
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->
<head>
   
     <meta charset="UTF-8" />
    <title>Expense Manager | Account</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END  HEAD-->
    <!-- BEGIN BODY-->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">


         <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.html" class="navbar-brand "> Expense Manager
                    <!-- <img src="assets/img/logo.png" alt="" />--></a> 
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!--ADMIN SETTINGS SECTIONS -->
                       <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> User Profile </a>
                            </li>
                            <li><a href="#"><i class="icon-gear"></i> Settings </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
       <div id="left">
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> Nimesh Patel</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-warning btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Busy
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>
            <ul id="menu" class="collapse">

                
<li class="panel">
    <a href="dashboard.php" >
        <i class="icon-table"></i> Dashboard

       
    </a>    
                 
</li>
<li class="panel ">
    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#mastermenu">
        <i class="icon-table"> </i> Master Entry
    </a>
    <ul class="collapse" id="mastermenu">
       <li><a href="account.php"><i></i> Manage Account</a></li> 
       <li><a href="transactiontype.php"><i></i> Manage Transaction Type</a></li> 
       <li><a href="paymentmethod.php"><i></i> Manage Payment Method</a></li> 
    </ul>  
</li>

<li class="panel ">
    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#transmenu">
        <i class="icon-table"> </i> Transaction Entry
    </a>
    <ul class="collapse" id="transmenu">
       <li><a href="transaction.php"><i></i> Manage Transaction </a></li> 
    </ul>  
</li>

<li class="panel ">
    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#reportmenu">
        <i class="icon-table"> </i> Reports
    </a>
    <ul class="collapse" id="reportmenu">
       <li><a href="dailyreport.php"><i></i> Report Daily</a></li> 
       <li><a href="weeklyreport.php"><i></i> Report Weekly</a></li> 
       <li><a href="monthlyreport.php"><i></i> Report Monthly</a></li> 
       <li><a href="accountsummary.php"><i></i> Report Accountwise</a></li> 
       <li><a href="customreport.php"><i></i> Custome Report</a></li> 
    </ul>  
</li> 
<li><a href="login.php"><i class="icon-signin"></i> Login Page </a></li>

</ul>

        </div>
        <!--END MENU SECTION -->


        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:600px;">
                <div class="row">
                    <div class="col-lg-12">


                        <h2>Manage Account</h2>



                    </div>
                </div>

                <hr />

                <div>
                
                <!-- Start Panel -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                                Account
                    </div>
                    <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab">List Account</a></li>
                                <li><a href="#tab2" data-toggle="tab">Add Account</a></li>
                            </ul>           
                            <div class="tab-content">
                            <div id="tab1" class="<?php if(isset($eAcId)) {echo 'tab-pane fade';} else {echo 'tab-pane fade in active';}?>">
                                    <div class="table-responsive">
                                    <table class="table table-striped" id="tbl-account">
                                        <thead>
                                        <tr>
                                            <!-- <th>Ac Id</th> -->
                                            <th>Ac Name</th>
                                            <th>Created Date</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $sqry="select * from Account";
                                            $rsaccount=mysqli_query($con,$sqry);
                                            while($row=mysqli_fetch_assoc($rsaccount))
                                            {
                                                echo "<tr>";
                                                // echo "<td>$row[AcId]</td>";
                                                echo "<td>$row[AcName]</td>";
                                                echo "<td>$row[CreatedDate]</td>";
                                                echo "<td>$row[isStatus]</td>";
                                                echo "<td><a href='account.php?edit=$row[AcId]' class='btn btn-info btn-circle'><i class='icon-check danger'></i></a></td>";
                                                echo "<td><a href='dbaccount.php?del=$row[AcId]' class='btn btn-danger btn-circle'><i class='icon-remove-sign'></i></a></td>";
                                                echo "</tr>";
                                            }
                                            
                                        ?>
                                       </tbody>
                                    </table>
                                    </div>
                                </div>
                                <div id="tab2" class="<?php if(isset($eAcId)) {echo 'tab-pane fade  in active';} else {echo 'tab-pane fade';}?>">
                                    <form action="dbaccount.php" method="post" class="form-horizontal" id="popup-validation">
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Enter Account Name</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="validate[required] form-control" name="AcName" id="AcName" value="<?php if(isset($eAcName)) echo $eAcName; ?>">
                                            </div>    
                                        </div>
                                       <div style="text-align:center" class="form-actions no-margin-bottom">
                                                <input type="submit" value="<?php if(isset($eAcId)) {echo 'Save';} else {echo 'Insert';}?>" class="btn btn-primary btn-lg " name="btnsubmit" />
                                                <input type="reset" value="Clear" class="btn btn-primary btn-lg " />
                                                <input type="hidden" name="editid" value="<?php if(isset($eAcId)) echo $eAcId;?>" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
                <!--End  Start Panel -->
                </div>


            </div>




        </div>
       <!--END PAGE CONTENT -->


    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  Expense Manager &nbsp;2023 &nbsp;</p>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#tbl-account').dataTable();
         });
    </script>
    <!-- END GLOBAL SCRIPTS -->
</body>
    <!-- END BODY-->
    
</html>
