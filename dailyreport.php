<?php
include('dbconnect.php');
// $debitqry="select sum(TransAmount) from transaction where TransTypeId=1";
// $rsdebit=mysqli_query($con,$debitqry);
// $row=mysqli_fetch_array($rsdebit);
// $debit=$row[0];
// $creditqry="select sum(TransAmount) from transaction where TransTypeId=2";
// $rscredit=mysqli_query($con,$creditqry);
// $row=mysqli_fetch_array($rscredit);
// $credit=$row[0];
// $totalbalance=$credit-$debit;
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->

<head>
   
     <meta charset="UTF-8" />
    <title>Expense Manager | Daily Report</title>
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

                <li class="panel active">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#reportmenu">
                        <i class="icon-table"> </i> Reports
                    </a>
                    <ul id="reportmenu">
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
	                    <h2>Daily Report</h2>
						<div class="col-lg-12" style="text-align:center;">
							<table class="table table-striped" id="tbl-dailyreport">
                                <thead>
                                        <tr>
                                            <!-- <th>Trans Id Method ID</th> -->
                                            <th>Account Name </th>
                                            <th>Transaction Type </th>
                                            <th>Transaction Amount</th>
                                            <th>Transaction Description </th>
                                            <th>Transaction Comment</th>
                                            <th>Transaction Date</th>
                                            <th>Created Date</th>
                                            <th>Status </th>
                                            <th>Payment Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sqry="select t.*,a.AcName,tt.TransTypeName,p.PMName from Transaction t, Account a, TransactionType tt, PaymentMethod p where t.AcId=a.AcId and t.TransTypeId=tt.TransTypeId and t.PMId=p.PMId;";
                                            $rstransaction=mysqli_query($con,$sqry);
                                            while($row=mysqli_fetch_assoc($rstransaction))
                                            {
                                                echo "<tr>";
                                                //echo "<td>$row[TransId]</td>";
                                                echo "<td>$row[AcName]</td>";
                                                echo "<td>$row[TransTypeName]</td>";
                                                echo "<td>$row[TransAmount]</td>";
                                                echo "<td>$row[TransDescription]</td>";
                                                echo "<td>$row[TransComment]</td>";
                                                echo "<td>$row[TransDate]</td>";
                                                echo "<td>$row[CreatedDate]</td>";
                                                echo "<td>$row[Status]</td>";
                                                echo "<td>$row[PMName]</td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                        </tbody>
                                    </table>
						</div>


                    </div>
                </div>

                <hr />




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
    <!-- END GLOBAL SCRIPTS -->

    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#tbl-dailyreport').dataTable();
         });
    </script>
</body>
    <!-- END BODY-->
    
</html>
