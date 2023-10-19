<?php 
//Open ob_start and session_start functions
ob_start();
session_start();


?>
    
    <html>

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VIQ Solutions</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/scripts.js"></script>
		<!-- Include jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<!-- Bootstrap Date-Picker Plugin -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
        <!-- Custom CSS -->
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="css/plugins/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

        

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]
        url(https://lh3.googleusercontent.com/-7kOBhr3B2dE/AAAAAAAAAAI/AAAAAAAAAAA/AOtt-yHs4g14qqNJaJBXAcpIMv_fV9dDGw/s32-c-mo/photo.jpg)
        -->
    </head>
    
    <body  style="padding-top: 30px;background-color:#FFFFFF;color:black;">            
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">

        <div class="container-fluid" >

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand navbar-light" href="search.php" style="color: #f3f3f3"><strong>VIQ Solutions</strong></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href=""></a></li>
                </ul>
				<?php 
				  //Check to see if user is logged in and collect session info and echo
                    if($_SESSION['user_is_logged_in']){
					     //user is logged in
						 $fullname = $_SESSION['user_data']['fullname'];
					
						
				?>
					
				<ul class="nav navbar-nav navbar-right" >
				
				<?php 
				   //check if user is admin to display MANAGE USERS
				   if($_SESSION['user_data']['isadmin']){ 
							 //echo "User is admin <br>";
							 //echo $_SESSION['user_data']['isadmin'];
						
				
				?>
				  <li class="dropdown">
                    <a class="dropdown fa fa-plus-square" href="register.php" id="dropdownMenuLink" data-toggle="dropdown">&nbsp;Manage Users </a>
                        <ul class="dropdown-menu">
                             <li><a  class="dropdown-item fa fa-plus-square" href="admin/register.php">&nbsp;Add User</a></li> 	
							 <li class="divider"></li>
                             <li><a  class="dropdown-item fa fa-pencil" href="admin/edit_admin.php">&nbsp;Edit User</a></li>
							 <li class="divider"></li>
							 <li><a class="dropdown-item fa fa-trash-o fa-sm" href="admin/edit_admin.php">&nbsp;Delete User</a></li>
							 <li class="divider"></li>
                             <li><a class="dropdown-item" href="#">&nbsp;View All Users</a></li>
                        </ul>
                  </li>
				  <?php 
				     }else{
							 //Non-admin user, do nothing
							 //echo "User is simple";
							 
							 
						 }
				  
				  ?>
                  <li class="navbar-text">Welcome, <?php echo $fullname; ?></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle fa fa-cog" data-toggle="dropdown"></b>
                        <?php //echo 'image' ; ?></a>
                                <ul class="dropdown-menu">
                                    <li><a href="includes/logout.php"><i class="fa fa-sign-out"></i> Sign-out</a></li>
                                </ul>						
                </li>
                  
                </ul> 
				
				<?php
				//When user is not logged in.
				    }else {
						 echo "User is not logged in";
						 //header("Location: signin.php");
			    ?>
			   <?php 
			            // else if the user is not loggin in then show this 
						
						
				?>
                        <ul class="nav navbar-nav navbar-right" >
                              <li><a href="index.php">Welcome Guest!</a></li>
                           
                              
                        </ul>
						 
					
			  <?php } //Close else?>
				
				
				
				
				
                
              
               
              
				

              
     

            </div>

        </div>

    </nav>
        
    <div class="container-fluid">
    