<?php
ob_start();
session_start();

require_once('config/iniSis.php');
require_once('config/autoload.php');

$sis = new Sistema;
$sis->debug(false);

$autUser = session_id();

$sis->api();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="src/style.css?v=<?=VERSION?>">
    <title><?= TITULO ?></title>
    <meta property="og:site_name" content="<?=TITULO?>">
    <meta property="og:title" content="<?=TITULO?>" />
    <meta property="og:description" content="<?=DESCRICAO?>" />
    <meta property="og:image" content="<?=BASE?>/src/banner.png">
    <meta property="og:image:width" content="360"> 
    <meta property="og:image:height" content="360">
</head>
<body>
    <?php
        $sis->getHome($autUser);
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="src/config.js?v=<?=VERSION?>"></script>
</body>
</html>
<?php
ob_end_flush();
