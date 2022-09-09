<head>
    <link rel="stylesheet" href="style.css">
</head> 

<pre>
<?php

$mas = [
    "main" => ["title" => "Главная","file" => "main.php"],
    "about" => ["title" => "О нас","file" => "about.php"],
    "blog" => ["title" => "Статьи","file" => "blog.php"],
    "acount" => ["title" => "Акаунт","file" => "acount.php"]
];
echo '<header>';

echo "<ul>";
foreach($mas as $key => $val){
    if($key != "main" && $key != "main"){
        echo '<li>|<a href = "' . $val["file"] .'">'.$val["title"].'</a></li>';
    }else{
        echo '<li><a href = "' . $val["file"] .'">'.$val["title"].'</a></li>';
    }
}
unset($val);
echo "</ul>";
echo '</header>';

echo'вы на странице "Аканут"';

?>