<?php
    // Loader Script. All this does is load the backends and structure files.
    // Load Configuration
    require_once(__DIR__ .'configuration.php') or die('Could Not Load configuration.php. Exiting.');
    // Load all Includes
    $files_includes = glob($paths['includes'] . '*.php');
    foreach ($files_includes as $file_include) {
        require_once($file_include);
    }
    // Load All Modules
    $files_modules = glob($paths['modules'] . '*.php');
    foreach ($files_modules as $file_module) {
        require_once($file_module);
    }
?>