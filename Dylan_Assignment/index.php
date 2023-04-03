<?php require_once('./config/connect.php'); ?>
<?php include_once('./inc/jeff.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/header1.css" />
    <link rel="stylesheet" href="./css/css1.css" />
</head>

<body>

    <?php
   
        include("content1.php");

        $jose = new Jeff;

        $jose->dbLoad($pdo);

        echo $jose;


    
    
    
    
    


    ?>

</body>

</html>