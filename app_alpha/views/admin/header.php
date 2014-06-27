<?php // ADMIN HEADER // ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <title>Partners Connect</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/flat/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/flat/bootstrap/css/prettify.css" rel="stylesheet">
    <!-- Loading Flat UI -->
    <link href="<?php echo base_url(); ?>assets/flat/css/flat-ui.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/flat/css/docs.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/knockout-3.1.0.js'></script> -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
   
<div class="row red-header">

    <div class="container">

        <!-- <div class="custom-tab-header"> -->
            <!-- <div class="custom-tab">Text options here</div> -->
        <!-- </div> -->
        
        <p> <img id="logo" src="/assets/img/pconnect.png" /> </p>
        <nav class="navbar navbar-inverse navbar-embossed mtop50" role="navigation">

            <div class="collapse navbar-collapse" id="navbar-collapse-01">

                <ul class="nav navbar-nav navbar-left">  
                                                
                    <!-- <li><a href="/admin">Home</a></li> -->
                    
                    <li class="dropdown">
                        
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Participants <b class="caret"></b></a>
                      
                        <span class="dropdown-arrow"> </span>

                            <ul class="dropdown-menu">

                                <li><a href="/admin/users">Eligible Users</a></li>
                                <li><a href="/admin/not-opt-in">Eligible and Declined</a></li>
                                <li><a href="/admin/opted-out"> Participants Who Opted Out</a></li>
                                <li><a href="/admin/not-eligible"> Ineligible Users </a></li>
 
                                 <li class="divider"></li> 

                                <li><a href="/admin/create">Create Participant</a></li>
                                <li><a href="/admin?delall=true">Remove Incomplete Screeners</a></li>
                                <li><a href="/admin/opt-out-user">Opt Out Participant</a></li>
                                <li><a href="/admin/deactivated/">Delete Opted Out Participant</a></li>
                                
                            </ul>

                    </li>

                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Actions <b class="caret"></b></a>

                        <span class="dropdown-arrow"> </span>

                        <ul class="dropdown-menu">
                            <li><a href="/admin/scheduled?status=upcoming">Upcoming Actions</a></li>
                            <li><a href="/admin/scheduled?status=completed">Completed Actions</a></li>
                        </ul>

                    </li>

                    <li><a href="/admin/resources">Study Notes</a></li>
                    <li><a href="/admin/ip/">CLear IP</a></li>
                    <li><a href="/logout">Logout</a></li>


                </ul>

            </div> <!-- /.navbar-collapse -->

        </nav> <!-- /navbar -->

    </div>

</div>