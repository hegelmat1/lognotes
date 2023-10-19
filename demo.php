<?php
//Works using accountKey: bad for security ppurposes.
// require_once "vendor/autoload.php"; 
// use MicrosoftAzure\Storage\Common\Internal\Resources;
// use MicrosoftAzure\Storage\File\FileSharedAccessSignatureHelper;

// $accountName = "audiofinder";
// $accountKey = "7q30tIcqIOY5oT3iTex71iLGa4kV5pC0xvnjN3kqjVc2fx3H6kxET0bKiP6mt+WA1BQlrc/LaBTa+ASt8C9ovg==";

// $shareName = "rsb";
// $fileName = "AFP.pdf";

// $now = date(DATE_ISO8601);
// $date = date_create($now);
// date_add($date, date_interval_create_from_date_string("1 hour"));
// $expiry = str_replace("+0000", "Z", date_format($date, DATE_ISO8601));

// $helper = new FileSharedAccessSignatureHelper($accountName, $accountKey);
// $sas = $helper->generateFileServiceSharedAccessSignatureToken(
//         Resources::RESOURCE_TYPE_FILE,
//         "$shareName/$fileName",
//         'r',                        // Read
//         $expiry // A valid ISO 8601 format expiry time， such as '2020-01-01T08:30:00Z' 
//     );
// $fileUrlWithSAS = "https://$accountName.file.core.windows.net/$shareName/$fileName?$sas";
// echo $fileUrlWithSAS;
// echo "<h1>Demo to display PDF from Azure File Storage</h1>";
// echo "<iframe src='$fileUrlWithSAS'  width='800' height='500' allowfullscreen webkitallowfullscreen></iframe>";


//if(isset($_POST)){

    //echo "POST";
    //echo var_dump($_POST);
    //echo var_dump($_FILES['filename']);
   // echo var_dump($_POST['file_path']);
    uploadFile($_FILES['filename'], $_POST['file_path'], array("pdf","fls"), 2000000);
//}

//function to upload file to local folder includes
function uploadFile($file, $path, $allowedExts, $maxFileSize)
{
    //Get the file name
    $file_name = $file['name'];
    //Get the file size
    $file_size = $file['size'];
    //Get the file temp location
    $file_tmp = $file['tmp_name'];
    //Get the file type
    $file_type = $file['type'];
    //Get the file extension
    $file_ext = strtolower(end(explode('.', $file['name'])));


    //Check if the file extension is allowed
    if (in_array($file_ext, $allowedExts) === false) {
        $errors[] = "Extension not allowed, please choose a PDF file.".$file_ext."lo";
    }

    //Check if the file size is allowed
    if ($file_size > $maxFileSize) {
        $errors[] = "File size must be less than 2 MB";
    }

    //Check if there are no errors
    if (empty($errors) == true) {
        //Check if directory exists else create it
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        //Upload the file
        move_uploaded_file($file_tmp, $path . $file_name);
        echo "File Successfully Uploaded";
        return true;
    } else {
        //Print errors
        print_r($errors);
        return false;
    }
}
?>