<?php
    // Loader Script. All this does is load the backends and structure files.
    
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