<?php
//This page contains confidential information to use for SSO


session_start();
require "vendor/autoload.php";
use myPHPnotes\Microsoft\Auth;

//This works for the VIQ environemnt.
$tenant        = "viqsolutions1.onmicrosoft.com";
$client_id     = "47c8da30-1206-440e-972b-8b23f3152cb2";
$client_secret = ".cB8Q~svvrhYwhp~loTM81_Sx7fB1JnlL6EbZaDk";
$callback      = "http://localhost/lognotes/LOGNOTES-APP/callback.php";
$scopes        = ["User.Read"];

//This works for the VIQ environemnt. Necessary for mounting files.
//$tenant        = "hegeltshiswekaoutlook.onmicrosoft.com";
//$client_id     = "4f4a62f0-d506-4f88-943b-961f1b59b74c";
//$client_secret = "tej8Q~4YHY2tv3-u8V5v-hRYHTHVe78VpQ3jwaM3";
//$callback      = "http://localhost/lognotes/LOGNOTES-APP/callback.php";
//$scopes        = ["User.Read"];


$microsoft = new Auth($tenant, $client_id, $client_secret, $callback, $scopes);

header("location: ". $microsoft->getAuthUrl());


?>