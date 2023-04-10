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

function showMenu()
{
    $users_ip = whatsMyIP();
    $hostname = $_SERVER["HTTP_HOST"];
    echo "<div align=\"left\" id=\"menu\">".$hostname.": <a href=\"/ip\">What is Your IP</a> (<a href=\"/ip/text\" target=\"_blank\">Text Only Version</a>) | <a href=\"/whois\">Your IP WHOIS</a> | <a href=\"https://multirbl.valli.org/lookup/".$users_ip.".html\" target=\"_blank\">RBL Check</a></div>";
}
function showTime($format) {
    if ($format == null) $format = 'unix';
    if ($format == 'unix') {
        $timeNow = time();
    } else {
        $timeNow = date($format);
    }
    return $timeNow;
}

function makeJSON($input)
{
    $json = json_encode($input);
    return $json;
}

?>