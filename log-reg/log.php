
<form action="" method = 'POST' >
    Логин: <input type="text" value="" name="login" /><br>

    Пароль: <input type="password" value="" name="password" />
    <input type="submit" value="Войти" name="log_in" />

</form>



<?php
    
    session_start();
    $_SESSION['count']++;
    if(empty($_SESSION['login'])){
        var_dump($_SESSION);
    }
    var_dump($_GET);

?>


