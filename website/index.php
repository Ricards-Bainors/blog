<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$file = 'templates/base.html';


if (file_exists($file)) {
    
    include $file;
} else {
    echo "Error: File not found.<br>";
}
?>