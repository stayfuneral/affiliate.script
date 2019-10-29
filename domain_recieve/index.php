<?php
/*
 * Страница с фреймом
 */
$DB = @mysqli_connect('localhost', 'root', '', 'test') or die('Error connection with Database');
$requestToken = str_replace('/', '', $_SERVER['REQUEST_URI']); // получаем токен из адресной строки

$SQL = mysqli_query($DB, "SELECT affLinks.*, affPages.* FROM affLinks LEFT JOIN affPages ON affLinks.pageID = affPages.ID WHERE partnerToken = '{$requestToken}'");
while ($frame = mysqli_fetch_assoc($SQL)) {
    $title = $frame['pageTitle'];
    $link = $frame['pageLink'];
    $partnerID = $frame['partnerID'];
    $code = $frame['pageCode'];
    
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?= $title ?></title>        
    </head>
    <body>
<!--Вызов целевой страницы во фрейме с партнёрским идентификатором-->
        <iframe src="<?= $link ?>?partnerID=<?= $partnerID ?>" width="100%" style="min-height: 95vh; max-height: 100%" scroll="no" marginheight="0" frameborder="0" id="<?= $code ?>" name="<?= $code ?>"></iframe>
    </body>
</html>
