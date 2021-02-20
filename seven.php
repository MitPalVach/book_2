<?php

const BR = '<br>';
const HR = '<hr>';

echo BR;
echo HR;
// =====================================================================================================================
?>

<!-- Навязчивые предупреждения -->
<form action="seven.php">
    <input type="submit" name="doGo" value="Click!">
</form>
<?php
// В массиве $_REQUEST всегда содержатся пришедшие из формы данные.
if (@$_REQUEST['doGo']) {   //  @ отключает предупреждения в браузере
    echo "Вы нажали кнопку!";
}
if (isset($_REQUEST['doGo'])) {   //  лучше писать isset вместо @
    echo "Вы нажали кнопку!";
}
?>

<?php
echo BR;
echo HR;
// =====================================================================================================================

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Вывод параметров командной строки</title>
    <meta charset='utf-8'>
</head>
<body>
<?php
echo "Данные из командной строки: {$_SERVER['QUERY_STRING']}";
echo BR;
echo HR;
var_dump($GLOBALS);
?>
</body>
</html>
<!--=================================================================================================================-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Страница с формой</title>
</head>
<body>
<?php
if (!isset($_REQUEST['doGo'])) { ?>
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>">
        Login: <input type="text" name="login" value=""><br>
        Pass: <input type="password" name="password" value=""><br>
        <input type="submit" name="doGo" value="Нажмите, кнопку, чтобы запустить сценарий!">
    </form>


    <?php
} else {
    if ($_REQUEST['login'] == "root" && $_REQUEST['password'] == "Z10N0101") {
        echo "Доступ открыт для пользователя {$_REQUEST['login']}";
    } else {
        echo "Access denied";
    }
}

?>
</body>
</html>












































