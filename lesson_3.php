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
        <h1><?php echo 'Урок 3' ?></h1>

        <form action="show.php" method="post">
        <input type="text" name="text">
        <button type="submit">Send</button>
        </form>
    </main>
    
    <?php include_once './parts/footer.php' ?>
</body>

</html>