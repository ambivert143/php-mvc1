<?php
    include "Model/DB.php";
    $db = new Database;
    $db->Connect();

    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }else{
        $controller = '';
    }

    switch($controller){
        case 'sanpham':{
            require_once('Controller/sanpham/index.php');
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <title>Document</title>
</head>
<body>
    
</body>
</html>