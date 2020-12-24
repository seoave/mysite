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

        <div class="wrapper">
        <?php
        for ($m=1; $m < 11 ; $m++) {
            echo '<div class="num">'; 
            for ($i=1; $i < 11 ; $i++) { 
                
                // show first number
                $m_view = show_color($m);

                // show second number
                $i_view = show_color($i);

                // get the result of multiplication
                $sum = $m*$i;



                if($sum < 10) {

                    $sum_view = show_color($sum);

                } else if ($sum > 9) {

                    // get sum numbers
                    $arr = str_split($sum);
                    $sum1 = $arr[0];
                    $sum2 = $arr[1];
                    $sum3 = $arr[2];
                    
                    $sum1_view = show_color($sum1);
                    $sum2_view = show_color($sum2);
                    $sum3_view = show_color($sum3);
                    $sum_view = $sum1_view . $sum2_view . $sum3_view;
                }
                


                // output string to table
                echo $m_view .' x '. $i_view .' = '. $sum_view . '<br>' ;
            };
            echo '</div>';
        }   
        ?>
        </div>
    </main>
    
    <?php include_once './parts/footer.php' ?>
</body>

</html>