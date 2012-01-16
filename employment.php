<?php include('./includes/title.inc.php'); ?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create-Ability, Inc.<?php if (isset($title)) { echo "&#8212;{$title}"; } ?></title>
        <link href="./css/principal.css" rel="stylesheet" type="text/css" media="screen">
    </head>
    <body>
        <div id="header">
            <h1>Create-Ability</h1>
        </div>
        <div id="core">
            <?php include('./includes/menu.inc.php'); ?>
            
            <?php include('./includes/footer.inc.php'); ?>
        </div>
    </body>
</html>
