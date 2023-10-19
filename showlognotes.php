<?php include('includes/header.php');
include('includes/filereader.php');
include('includes/lefty.php');
?>

 
<?php

//The only input which is the path.
$id = $_GET['ID'];

echo '<div class="col-md-8">';

//Set handler in cas of an error.
set_error_handler("warning_handler", E_WARNING);
//Transform the xml file into html
//echo $proc->transformToXML(DOMDocument::load($id));
$lognotes = $proc->transformToXML(DOMDocument::load($id));
echo $lognotes;
restore_error_handler();

//save the html file to the server
//saveHTMLFile($id, $lognotes);

//Display the saved HTML page
//Please note that this is not the best way to do this.
//echo '<iframe src="lognotes.html" width="100%" height="1000px" frameborder="0"></iframe>';









function warning_handler($errno, $errstr)
{

	echo '<div class="alert alert-danger alert-dismissible text-center">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Sorry, there is no lognotes files!</strong>. Please try again later or contact IT Support</div>';
}

function saveHTMLFile($id, $lognotes)
{
	//Set directory & filename
	//Split id to get the filename
	$file_info = explode("/", $id);
	//replace fls with html
	$filename = str_replace("fls", "html", $file_info[4]);

	//Get path to the file
	//path is files/jurisdiction/date/courtroom/
	$path = $file_info[0] . "/" . $file_info[1] . "/" . $file_info[2] . "/" . $file_info[3] . "/";
    
	//Handle errors with try and catch
	try {
		//Save this page to server.
		$file = fopen($path . $filename, "w");
		fwrite($file, $lognotes);
		fclose($file);
	} catch (Exception $e) {
		echo '<div class="alert alert-danger alert-dismissible text-center">
			   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			   <strong>Sorry something went wrong in saving this file.</strong>. Please try again later or contact IT Support</div>';
	}
	
}

echo '</div>';
echo '</div> <!-- end of lefty container. -->  ';

?> 
  
<?php include('includes/footer.php'); ?>