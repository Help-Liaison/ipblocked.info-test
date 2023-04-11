<?php

    // This page outputs the users' IP Address

    if ($pagetype == "html")
    {
        // This Page shows the user their current IP
        setHeaders("text/html",60);
        drawHeader();
        drawMenu();
        echo(whatsMyIP());
        drawFooter();

    }

    if ($pagetype == "text")
    {
        // This Page shows the user their current IP
        setHeaders("text/plain",60);
        echo(whatsMyIP());
    }

?>