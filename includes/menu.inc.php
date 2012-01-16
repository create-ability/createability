<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>

<ul id="navigator">
    <li><a href="index.php" <?php if ($currentPage == 'index.php') { echo 'id="focused"'; } ?>>Home</a></li>
    <li><a href="about_create-ability.php" <?php if ($currentPage == 'about_create-ability.php') { echo 'id="focused"'; } ?>>About Create-Ability</a></li>
    <li><a href="services.php" <?php if ($currentPage == 'services.php') { echo 'id="focused"'; } ?>>Services</a></li>
    <li><a href="employment.php" <?php if ($currentPage == 'employment.php') { echo 'id="focused"'; } ?>>Employment</a></li>
    <li><a href="contact_us.php" <?php if ($currentPage == 'contact_us.php') { echo 'id="focused"'; } ?>>Contact Us</a></li>
</ul>
