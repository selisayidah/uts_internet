<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'data_sekolah';
    try {
        return new PDO('mysql:host=' , $DATABASE_HOST , ';data_sekolah=' , $DATABASE_NAME , ';charset=utf8', $DATABASE_USER , $DATABASE_PASS);
    } catch (PDOException $exception) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to database!');
    }
}
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>$title</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontwesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
    <nav class="navtop">
        <div>
             <h1>phpcrud Title</h1>
             <a href="index.php"><i class="fas fa-home"></i>Home</a>
             <a href="read.php"><i class="fas fa-address"></i>contacts</a>
        </div>
    </nav>
EOT;
}
ffuncition template_footer() {
    echo <<<EOT
        </body>
    </html>
    EOT;
}
?>