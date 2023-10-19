<?php
//set the timezone
date_default_timezone_set('Australia/Sydney');
?>
<div class="row">

<div class="col-md-4">
   <h3> TODAY'S RSB LOGNOTES</h3>
   <h5> To refresh the list, please hit F5</H5>
<?php
// fixed-top
$id="files/RSB/".date("Ymd");
//echo $id;
echo navigateFolder($id);

//files/YYYYMMDD/COURTROOM/FILE.FLS
//echo $proc->transformToXML(DOMDocument::load(navigate($id))); 
?>


</div>
