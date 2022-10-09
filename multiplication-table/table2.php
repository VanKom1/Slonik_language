<?php

function check_href($var)
{
    if($var >= 2 && $var <= 9){
        return '<a href = "draw.php?column='.$var.'">' . $var . '</a>';
    }else{
        return $var;
    }
}

function draw_table($num1 = 2,$num2 = 9){   

    $result = '';
    if($num1 == $num2){
        $result .= '<a href = "draw.php" >Назад</a>';
    }


    $result .=  '<div class = "main_flex">';
        for($num1;$num1 < $num2 + 1;$num1++){
            $result .= '<div class = "flex_box">';
                for($j = 1;$j < 11;$j++){
                    $result .= '<b>' . check_href($num1) . '*' . check_href($j) .'=' . check_href($num1 * $j) . '</b>';
                }
            $result .= '</div>';
        }
    $result .= '</div>';
    return $result;
}

?>
