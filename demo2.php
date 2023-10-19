<?php

//This successfully send a request to the Logic App. Only works for GET.
$path = "Hello World";
//Send http request 
$url= "https://prod-24.canadacentral.logic.azure.com:443/workflows/d856d2850dd74a85a7b3f4a72c056fb2/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=_CbYVvDmRK_snldVG9yH-07ka19vpqz_zJqpyyQPU1g";
$response = file_get_contents($url);
if ($response === false) {
    echo "Error fetching URL";
}
else{
    echo $response;
}


// set_time_limit(0); //Unlimited max execution time

// $path = 'DOWN-3.2_20211217-0916_01d7f326bf080680.fls';
// $url = 'https://prod-24.canadacentral.logic.azure.com:443/workflows/d856d2850dd74a85a7b3f4a72c056fb2/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=_CbYVvDmRK_snldVG9yH-07ka19vpqz_zJqpyyQPU1g';
// $newfname = $path;
// //echo 'Starting Download!<br>';
// $file = fopen ($url, "rb");
// if($file) {
//     $newf = fopen ($newfname, "wb");
//     if($newf)
//         while(!feof($file)) {
//             fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
//             echo '1 MB File Chunk Written!<br>';
//         }
// }
// if($file) {
//     fclose($file);
// }
// if($newf) {
//     fclose($newf);
// }
// echo 'Finished!';



?>


<html>

<!-- //This work create a form to submit username 
<form action="https://prod-24.canadacentral.logic.azure.com:443/workflows/d856d2850dd74a85a7b3f4a72c056fb2/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=_CbYVvDmRK_snldVG9yH-07ka19vpqz_zJqpyyQPU1g" method="post">
    <input type="text" name="username" placeholder="Enter username">
    <input type="submit" value="Submit">
</html> -->
<?php include('includes/footer.php'); ?>