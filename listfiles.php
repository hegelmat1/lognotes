<?php 
include('includes/header.php'); 
require_once "vendor/autoload.php";


//use Office365\Runtime\Auth\ClientCredential;
//use Office365\SharePoint\ClientContext;
//use Office365\SharePoint\ListItem;
?>


<?php

// //Might need to create separate app to deal with these.
// $client_id     = "47c8da30-1206-440e-972b-8b23f3152cb2";
// $client_secret = ".cB8Q~svvrhYwhp~loTM81_Sx7fB1JnlL6EbZaDk";
// $tenant        = "viqsolutions1.onmicrosoft.com";
// $siteUrl       = "https://viqsolutions1.sharepoint.com/sites/DataworxsSystemsAustralia-IT";

// $credentials = new ClientCredential($client_id, $client_secret);
// $client = (new ClientContext($siteUrl))->withCredentials($credentials);

// //Read SharePoint List Items
//  $web = $client->getWeb();
//  $list = $web->getLists()->getByTitle("Employees"); //init List resource
//  $items = $list->getItems();  //prepare a query to retrieve from the
//  $client->load($items);  //save a query to retrieve list items from the server

//  //echo var_dump($items);
//  try{
//  $client->executeQuery(); //submit query to SharePoint server
//  }catch (Exception $e) {
//     echo 'Caught exception: ',  $e->getMessage(), "\n";
//     //show detailed error information
//     echo $e->getTraceAsString();
//  }
//  /** @var ListItem $item */
// //  foreach($items as $item) {
// //      print "Task: {$item->getProperty('Title')}\r\n";
// //  }
?>

<php

  $url = "https://viqsolutions1.sharepoint.com/sites/DataworxsSystemsAustralia-IT/_api/web/GetFolderByServerRelativeUrl('/sites/DataworxsSystemsAustralia-IT/Shared%20Documents/General')/Files";
  $response = file_get_contents($url);
  echo $response;
?>

<?php include('includes/footer.php'); ?>