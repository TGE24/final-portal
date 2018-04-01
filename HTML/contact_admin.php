<!--                  PRAYER LINE
       --------------------------------------------
        Dear GOD,
        PLEASE BE WITH ME AS I DEVELOP THIS PROJECT
        AND GUIDE ME SO AS TO BE FREE OF CODING ERROR.
                                                         -->
<?php
require 'core.inc.php';
require '../init.php';
function mysqli_result($res,$row=0,$col=0){
   $numrows = mysqli_num_rows($res);
   if ($numrows && $row <= ($numrows-1) && $row >=0){
       mysqli_data_seek($res,$row);
       $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
       if (isset($resrow[$col])){
           return $resrow[$col];
       }
   }
   return false;
}


if(loggedin() ) {

} else {
  header('Location: login.php');
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <!-- Meta, title, CSS, favicons, etc. -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>D.M.S</title>

   <!-- Bootstrap core CSS -->

   <link href="../CSS/bootstrap.min2.css" rel="stylesheet">

   <link href="../fonts/css/font-awesome.min.css" rel="stylesheet">
   <link href="../CSS/animate.min.css" rel="stylesheet">

   <!-- Custom styling plus plugins -->
   <link href="../CSS/custom1.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="../CSS/maps/jquery-jvectormap-2.0.1.css" />
   <link href="../CSS/icheck/flat/green.css" rel="stylesheet" />
   <link href="../CSS/floatexamples.css" rel="stylesheet" type="text/css" />

   <script src="../js/jquery.min.js"></script>
   <script src="../js/nprogress.js"></script>
   <script>
       NProgress.start();
   </script>

</head>

<body class="nav-md">

   <div class="container body">


       <div class="main_container">

           <div class="col-md-3 left_col">
               <div class="left_col scroll-view">

                   <div class="navbar nav_title" style="border: 0;">
                       <a href="index.html" class="site_title"><i class="fa fa-laptop"></i> <span>D.M.S</span></a>
                   </div>
                   <div class="clearfix"></div>

                   <!-- menu prile quick info -->
                   <div class="profile">
                       <div class="profile_pic">
                           <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                       </div>
                       <div class="profile_info">
                           <span>Welcome,</span>
                           <?php echo getuserfield('name');?>
                       </div>
                   </div>
                   <!-- /menu prile quick info -->

                   <br />

                   <!-- sidebar menu -->
                   <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                       <div class="menu_section">
                           <h3>General</h3>
                           <ul class="nav side-menu">
                               
                               <li><a><i class="fa fa-book"></i> Courses <span class="fa fa-chevron-down"></span></a>
                                 <ul class="nav child_menu" style="display:none">


                                       <li><a href="study_table.php"><i class="fa fa-calendar-o"></i> Study Timetable <!-- <span class="fa fa-chevron-down"></span>--></a>

                                       <li><a href="exam_table.php"><i class="fa fa-calendar"></i> Examination Timetable <!-- <span class="fa fa-chevron-down"></span>--></a>

                                 </ul>

                               </li>



                               <li><a href="election.php"><i class="fa fa-bars"></i> Election </a></li>

                               <li><a href="contact_admin.php"><i class="fa fa-envelope-o"></i> Contact Admin</a></li>


                           </ul>
                       </div>
                       <div class="menu_section">

                       </div>

                   </div>
                   <!-- /sidebar menu -->

                   <!-- /menu footer buttons -->
                       <div class="sidebar-footer hidden-small">

                       <a href="logout.php" data-toggle="tooltip" data-placement="top" title="Logout">
                           <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                       </a>
                   </div>
                   <!-- /menu footer buttons -->
               </div>
           </div>
           <footer>
               <div class>
                   <p class="pull-right">TECH-18 | <a href="00webhost.oglovescode.com"> OG</a> |
                       <span class="lead"> <i class="fa fa-laptop"></i> TECH-18</span>
                   </p>
               </div>
               <div class="clearfix"></div>
           </footer>
           <!-- top navigation -->
           <div class="top_nav">

               <div class="nav_menu">
                   <nav class="" role="navigation">
                       <div class="nav toggle">
                           <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                       </div>

                       <ul class="nav navbar-nav navbar-right">
                           <li class="">
                               <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                   <img src="images/img.jpg" alt=""><?php echo getuserfield('name');?>
                                   <span class=" fa fa-angle-down"></span>
                               </a>
                               <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">

                                   <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                   </li>
                               </ul>
                           </li>
                               </ul>
                           </li>

                       </ul>
                   </nav>
               </div>

           </div>
           <!-- /top navigation -->

           <!-- page content -->
           <div class="right_col" role="main">
               <div class="">

                   <div class="page-title">
                       <div class="title_left">
                           <h3>
                             Contact Admin
                           </h3>
                       </div>

                       <div class="title_right">
                           <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                               <div class="input-group">
                                   <input type="text" class="form-control" placeholder="Search for...">
                                   <span class="input-group-btn">
                           <button class="btn btn-default" type="button">Go!</button>
                       </span>
                               </div>
                           </div>
                       </div>
                   </div>
                       <div class="clearfix"></div>

                       <div class="col-md-12 col-sm-12 col-xs-12">
                           <div class="x_panel">
                               <div class="x_content">

                                 <!---       main code------------------------------->
                                 <form name="sentMessage" id="contactForm" novalidate>
                                 <div class="form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12">Subject </label>
                                     <div class="col-md-9 col-sm-9 col-xs-12">
                                         <input type="text" id="subject" class="form-control" placeholder="Subject" required="required">
                                     </div>
                                 </div><br><br><br>

                                 <div class="form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12">Email </label>
                                     <div class="col-md-9 col-sm-9 col-xs-12">
                                         <input type="text" id="email" class="form-control" placeholder="Enter Email Here" required="required">
                                     </div>
                                 </div><br><br><br>

                                 <div class="form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12">Reg Number </label>
                                     <div class="col-md-9 col-sm-9 col-xs-12">
                                         <input type="text" id="regnum" class="form-control" placeholder="Enter Reg Number Here" required="required">
                                     </div>
                                 </div><br><br><br>

                                 <div class="form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12">Body <span class="required">*</span>
                                     </label>
                                     <div class="col-md-9 col-sm-12 col-xs-12">
                                         <textarea class="form-control" id="message" rows="9" placeholder="Enter Message Here"></textarea>
                                     </div>
                                 </div>

                                 </div>
                                      <div class="form-group">
                                                 <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                   <br><br>
                                                     <input type="submit" class="btn btn-primary" value="Cancel">
                                                     <input type="submit" class="btn btn-success" value="Submit">

                                                 </div>
                                             </div>
                                             <?php

                                                  $con = mysqli_connect("localhost", "root", "", "nacoss");

                                                  if($con === false)
                                                  {
                                                     
                                                   die("ERROR: Could not connect. " . mysqli_connect_error());

                                                  }
                                             // Check for empty fields
                                             if((isset($_POST['subject'])  	&&
                                              isset($_POST['email'])	&&
                                                isset($_POST['regnum']) 	&&
                                                isset($_POST['message'])
                                                &&!empty($_POST['subject']) &&!empty($_POST['email']) &&!empty($_POST['regnum'])  &&!empty($_POST['message'])));

                                                {/*
                                                  $email = $_POST['email'];
                                              		$subject = $_POST['subject'];
                                              		$message =  $_POST['message'];
                                                  $regnum = $_POST['regnum'];*/

                                              
                                                  /*$query = "INSERT INTO `messages` (`regnum`, `subject`, `email`, `message`) VALUES ('$regnum', '$subject', '$email', '$message')";*/

                                                  /*$result = mysqli_query($con,$query);*/

                                                }
                                                /*$email = strtolower($_POST['email']);
                                            		$topic = strtolower($_POST['subject']);
                                            		$body = strtolower($_POST['message']);
                                                $regnum = strtolower($_POST['regnum']);*/



                                             /*   $mail = new PHPMailer();
                                            		$mail->isSMTP();
                                            		$mail->SMTPAuth = true;
                                            		$mail->SMTPSecure = 'ssl';
                                            		$mail->Host = 'theleadbtc.org';
                                            		$mail->Port = '465';
                                            		//$mail->SMTPDebug = 2;
                                            		$mail->isHTML();
                                            		$mail->Username = 'noreply@theleadbtc.org';
                                            		$mail->Password = 'hN4!p6qFtb17c';
                                            		$mail->SetFrom ('noreply@theleadbtc.org', 'TheleadBtc');

                                            		$mail->Subject = $topic;
                                                $mail->Subject = $regnum;
                                            		$mail->Body = $body;
                                            		$mail->AddAddress('godswillokokon3@gmail.com');
                                            		//Joseph.mbassey2@gmail.com

                                            		if ($mail->Send())
                                            		{
                                            			echo "Message Sent";
                                            		}

                                            		else
                                            			{

                                            			echo "Message not sent";

                                            			}*/  


                                             ?>
                                 </form>

                               </div>
                           </div>
                       </div>
                   </div>

               </div>


           </div>
           <!-- /page content -->
       </div>

   </div>

   <div id="custom_notifications" class="custom-notifications dsp_none">
       <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
       </ul>
       <div class="clearfix"></div>
       <div id="notif-group" class="tabbed_notifications"></div>
   </div>

   <script src="../js/bootstrap.min.js"></script>

   <!-- chart js -->
   <script src="../js/chartjs/chart.min.js"></script>
   <!-- bootstrap progress js -->
   <script src="../js/progressbar/bootstrap-progressbar.min.js"></script>
   <script src="../js/nicescroll/jquery.nicescroll.min.js"></script>
   <!-- icheck -->
   <script src="../js/icheck/icheck.min.js"></script>

   <script src="../js/custom.js"></script>
 </body>
</html>
