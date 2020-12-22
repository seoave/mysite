<?php 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <?php include_once './parts/header.php' ?>

    <main class="main">
        <h1><?php echo 'Урок 1' ?></h1>

        <div class="wrapper">
        <?php
        for ($m=1; $m < 11 ; $m++) {
            echo '<div class="num">'; 
            for ($i=1; $i < 11 ; $i++) { 
                echo $m .' x '. $i .' = '. $m*$i.'<br>' ;
            };
            echo '</div>';
        }   
        ?>
        </div>
    </main>
    
    <?php include_once './parts/footer.php' ?>
</body>

</html>