<?php
ini_set('smtp_port', 1025);
date_default_timezone_set('Europe/Paris');
include "./functions/classAutoLoader.php";
spl_autoload_register('classAutoLoader');
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8" />
    <title>CESI AP - Blog/e-commerce</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>
<body>
<div id="container">
<?php
include "./includes/header.php";
CallPage::display();
include "./includes/footer.php";
?>
</div>
</body>
</html>
