<?php

function drawMenu()
{
    $users_ip = whatsMyIP();
    $hostname = $_SERVER["HTTP_HOST"];
    echo "<div align=\"left\" id=\"menu\">".$hostname.": <a href=\"/ip\">What is Your IP</a> (<a href=\"/ip/text\" target=\"_blank\">Text Only Version</a>) | <a href=\"/whois\">Your IP WHOIS</a> | <a href=\"https://multirbl.valli.org/lookup/".$users_ip.".html\" target=\"_blank\">RBL Check</a></div>";
}

?>