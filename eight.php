<?php

const BR = '<br>';
const HR = '<hr>';

echo BR;
echo HR;
// =====================================================================================================================
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вывод IP-адреса и браузера пользователя</title>
</head>
<body>
Your IP: <?= $_SERVER['REMOTE_ADDR'] . BR?>
Your browser: <?= $_SERVER['HTTP_USER_AGENT'] . BR?>
</body>
</html>

<?php


echo BR;
echo HR;
// =====================================================================================================================

## Демонстрация работы с массивом $_COOKIES.
// Вначале счетчик равен нулю.
$count = 0;
// Если в Cookies что-то есть, берем счетчик оттуда.
if (isset($_COOKIE['count'])) $count = $_COOKIE['count'];
$count++;
// Записываем в Cookies новое значение счетчика.
setcookie("count", $count, 0x7FFFFFFF, "/");
// Выводим счетчик.
echo $count;


echo BR;
echo HR;
// =====================================================================================================================


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Гарантированный прием значений от флажков</title>
    <meta charset='utf-8'>
</head>
<body>
<?php
if (isset($_REQUEST['doGo'])) {
    foreach ($_REQUEST['known'] as $k => $v) {
        if($v) echo "Вы знаете язык $k!<br>";
        else echo "Вы не знаете языка $k. <br>";
    }
}
?>
<form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
    Какие языки программирования вы знаете?<br />
    <input type="hidden" name="known[PHP]" value="0">
    <input type="checkbox" name="known[PHP]" value="1">PHP<br />

    <input type="hidden" name="known[Perl]" value="0">
    <input type="checkbox" name="known[Perl]" value="1">Perl<br />

    <input type="submit" name="doGo" value="Go!">
</form>
</body>
</html>







































