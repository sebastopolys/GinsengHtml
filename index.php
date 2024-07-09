<?php
namespace ginsenghtml;

ini_set( 'display_errors', 1 );
ini_set( 'display_startup_errors', 1 );
error_reporting( E_ALL );

 if( file_exists( __DIR__ ).'/vendor/autoload.php' ){
        require  __DIR__ .'/vendor/autoload.php';
    } else {
        die( '<pre>ERROR: cannot load autoloader file</pre>' );
    }
 
// Start the thing

