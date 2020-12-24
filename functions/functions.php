<?php 

function show_color($number){
    switch ($number) {
        case 1:
            $class = 'red';
            break;
        case 2:
            $class = 'green';
            break;
        case 3:
            $class = 'yellow';
            break;
        case 4:
            $class = 'blue';
            break;
        default:
            $class = '';
            break;
    };

    $view = '<span class="'.$class.'">'. $number . '</span>';

    return $view;
}

?>