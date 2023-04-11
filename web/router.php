<?php
    // Page Router
    // This file essentially routes requests to the right pages 

    global $what;
    global $what2;

    $what = filter_var($_GET['what'],FILTER_SANITIZE_URL);
    $what2 = filter_var($_GET['what2'],FILTER_SANITIZE_URL);

    if (!$what)     die('Primary Task not specified.');
    if (!$what2)    die('Secondary Task not specified.');

    $pages = scandir($paths['pages']);
    $page_requested = $what . '.php';
    $page_file = $paths['pages'] . $page_requested;

    if ($page_requested == $pages)
    {
        // Check if Page Exists and then Load it if it does
        require($page_file);
    }

    /*
    $files_modules = glob($paths['pages'] . '*.php');
    foreach ($files_modules as $file_module) {
        require_once($file_module);
    }
    */
?>