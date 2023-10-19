<?php 

      include('includes/header.php');
      include('admin/includes/functions.php');
	  include('admin/includes/crud.php');
	 // include('includes/functions.php');
	  
 ?>


 
<?php
//If user is logged in , redirect to search.php
if($_SESSION['user_is_logged_in']){
	redirect("search.php");
}
//Login with Microsoft
if(isset($_POST['submit_login_microsoft'])){
	redirect("signin.php");
}
     
  
?>
  
  <div class="row">
      <div class="text-center">
        <form class="form-horizontal" role="form" method="post" action="index.php">
          <div class="form-group"> 
            <div class="text-center">  
              <p>To log into the Lognotes, you must be registered in the VIQ Tenancy </p>			
			  <button type="submit" class="btn btn-primary text-center" name="submit_login_microsoft">Login using your registered account</button>
            </div>
          </div>
        </form>
          
  </div>
</div>
  
  
<?php include('includes/footer.php'); ?>