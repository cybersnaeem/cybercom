<?php
    $colors = array('dark'=> array('Red','Green','Blue'), 'light'=> array('Yellow','Pink'));

    foreach($colors as $outer_ele => $inner_ele){
        print_r('<ul type="square"><li>'.$outer_ele.'</li></ul>');
        foreach($inner_ele as $element){
            print_r('<ul type="circle"><li>'.$element.'</li></ul>');
        }
    } 
?>