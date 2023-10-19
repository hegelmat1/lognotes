<?php

//No need to handle unregistered users.
include('admin/includes/functions.php');

use myPHPnotes\Microsoft\Auth;
use myPHPnotes\Microsoft\Handlers\Session;
use myPHPnotes\Microsoft\Models\User;

session_start();
require "vendor/autoload.php";


$auth = new Auth(Session::get("tenant_id"), Session::get("client_id"), Session::get("client_secret"), Session::get("redirect_uri"), Session::get("scopes"));
//echo ($auth);
$tokens = $auth->getToken($_REQUEST['code']);
$accessToken = $tokens->access_token;
$auth->setAccessToken($accessToken);

//save these in _Session for later use
Session::set("access_token", $accessToken);
Session::set("refresh_token", $tokens->refresh_token);
Session::set("token_expires", $tokens->expires_on);

$user = new User;
//set here all the session data
$_SESSION['user_data']= array(
				 
				    'fullname' =>   $user->data->getDisplayName(),
					'email'    =>   $user->data->getUserPrincipalName()	
			     );
$_SESSION['user_is_logged_in'] = true;
redirect('search.php');

?>