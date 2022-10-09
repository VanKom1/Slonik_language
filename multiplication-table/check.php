<?php




if(array_keys($_GET) == ["column"]){

    $input = $_GET['column'];

    if(($input >= 2 && $input <= 9) && is_numeric($input)){
        $num1 = $input;
        $num2 = $input;

    }else{
        header('Location:  draw.php');
        $num1 = 2;
        $num2 = 9;

    }
}elseif($_SERVER['REQUEST_URI'][-1] === "?"){
    $num1 = 2;
    $num2 = 9;
    header('Location: draw.php');

}elseif(count($_GET) == 0){
    $num1 = 2;
    $num2 = 9;
}
else{
    header('Location: draw.php');
}


?>
