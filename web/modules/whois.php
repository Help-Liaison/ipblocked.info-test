<?php

function whoisLookup($ip,$server)
{
    $whois = shell_exec("whois $ip");
    /*
    if ($conn = fsockopen ($server, 43) or die("whois connection error")) {
        fputs($conn, $ip . "\r\n");
        while(!feof($conn)) {
            $output .= fgets($conn,128);
        }
        fclose($conn);
        $whois = $output;
    }
    */
    return $whois;
}

?>