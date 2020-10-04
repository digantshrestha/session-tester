<?php session_start(); ?>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/db/connection.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Test</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
</head>
<body>
    <div class="page-header">
        <div class="container">
            <h1>Session Tester</h1>
        </div>
    </div>

    <div class="container">    