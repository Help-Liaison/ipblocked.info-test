<?php

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