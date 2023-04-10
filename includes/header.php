<?php


function setHeaders($type,$refresh)
{
    $hostname = $_SERVER["HTTP_HOST"];
    $what = filter_var($_GET['what'],FILTER_SANITIZE_URL);
    $what2 = filter_var($_GET['what2'],FILTER_SANITIZE_URL);
    $protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';
    if ($what2) { $refreshurl = $protocol."://".$hostname."/".$what."/".$what2; } 
    if ($what)  { $refreshurl = $protocol."://".$hostname."/".$what; }
    else {
        $refreshurl = $protocol."://".$hostname."/";
    }
    if ($refresh != 0) header("Refresh: $refresh;url='$refreshurl'");
    header("Content-Type: $type; charset=UTF-8");
    header("Cache-Control: private, max-age 120, min-fresh 30, stale-if-error 300, must-revalidate");
    header("Access-Control-Allow-Origin: *");
}

function drawHeader()
{
    return $header;
}

?>