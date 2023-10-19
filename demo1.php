<?php
//List files in a directory.
include('includes/header.php');
require_once "vendor/autoload.php"; 
use MicrosoftAzure\Storage\File\FileRestProxy;
use myPHPnotes\Microsoft\Handlers\Session;

$accountName = "audiofinder";
$accountKey = "7q30tIcqIOY5oT3iTex71iLGa4kV5pC0xvnjN3kqjVc2fx3H6kxET0bKiP6mt+WA1BQlrc/LaBTa+ASt8C9ovg==";

$shareName = "rsb";
$token= $_SESSION['adnanhussainturki/microsoft']['accessToken'];

$connectionString = "DefaultEndpointsProtocol=https;AccountName=$accountName;AccountKey=$accountKey";

$connectionString ="BlobEndpoint=myBlobEndpoint;QueueEndpoint=myQueueEndpoint;TableEndpoint=myTableEndpoint;FileEndpoint=myFileEndpoint;AccountName=$accountName";
//$fileClient = FileRestProxy::createFileServiceWithTokenCredential($token, $connectionString);

//used to list all files in a directory
// $fileClient = FileRestProxy::createFileService($connectionString);
$list = $fileClient->listDirectoriesAndFiles($shareName);
// function endsWith( $str, $sub ) {
//     return ( substr( $str, strlen( $str ) - strlen( $sub ) ) === $sub );
// }

// foreach($list->getFiles() as &$file) {
//     $fileName = $file->getName();
//     if(endsWith($fileName, ".pdf")) {
//         echo $fileName."\n";
//     }
// foreach($list->getDirectories() as &$directory) {
//     $dirName = $directory->getName();
//     echo $dirName."\n";
// };
//}





//$FileEndpoint="FileEndpoint=myFileEndpoint;AccountName=$accountName";
//$fileClient=FileRestProxy::createQueueServiceWithTokenCredential($token, $connectionString);


?>

<?php include('includes/footer.php'); ?>