<?php 
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <?php include_once './parts/header.php' ?>

    <main class="main">
        <h1><?php echo 'Урок 3' ?></h1>

        <a href="lesson_3.php">Назад</a>

        <h3>Обработанная строка</h3>

        <?php
        
        $string = $_POST['text'];
        
        ?>

        <p><?php echo strrev($string); ?></p>
    </main>
    
    <?php include_once './parts/footer.php' ?>
</body>

</html>