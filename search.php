<?php 
      include('includes/header.php'); 
      include('includes/filereader.php');
      include('includes/lefty.php'); 
?>


<?php

//Redirect users if they are not logged_in 
 if($_SESSION['user_is_logged_in']){
	 
 }else{
	 header("Location: index.php");
 }


?>

<div class="row">    
      <div class="col-md-4">
        <form class="form-horizontal" role="form" method="post"  action="<?php echo $_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
          <div class="form-group">
            
			<div class="col-sm-10">
			<label class="control-label " for="jurisdiction">Please select a Juridiction</label><br>
			<select class="form-select form-select-lg mb-3" id="jurisdiction" name ="jurisdiction" aria-label="size 3 select example" required>
                           <option ></option>
                           <option value="RSB">RSB</option>
                           <option value="SAET">SAET</option>
                           <option value="DotAg">DoTag</option>
						   <option value="CSV">CSV</option>
             </select>
             </div>
			 
            <div class="col-sm-10">
			  <label class="control-label" for="day">Please select a date</label>
              <input type="date" name="day" class="form-control" id="day" placeholder="Type in a date to search for (DD/MM/YYYY)" required>
            </div>
          </div>
          <div class="form-group"> 
            <div class="col-sm-10 text-center">
              <button type="search" class="btn btn-primary pull-right" name="search">SEARCH</button>
              <a class="pull-left btn btn-danger" href=""> CANCEL</a>
            </div>
          </div>
        </form>
		
          



<?php

	if(isset($_POST['search'])){
        $jurisdiction   = $_POST['jurisdiction'];		
		//TO DO : validate a date here 
		//change date into YYYYMMDD
		$day            = date_format(date_create($_POST['day']),"Ymd");
		$path           = "files/".$jurisdiction."/".$day;
		echo "</div></div><br><br><br><div class='text-center'>";
		//SHOW FOLDER STRUCTURE 
		echo "Searching for lognotes in ".$jurisdiction." folder for this date: ".$_POST['day']."</br>";
		echo "This is the path in Filezilla : ".$path;
		echo navigateFolder($path);

	}
?>
</div>

<?php include('includes/footer.php'); ?>