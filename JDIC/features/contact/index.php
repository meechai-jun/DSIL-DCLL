<?php
/**
 * JDIC - Contact Us Feature Index
 */
$title = 'Contact Us - JDIC';
?>
<!DOCTYPE html>
<html lang="en">
    <?php include(__DIR__ . '/../../shared/layouts/head.php') ?>
    
    <body>
        <?php include(__DIR__ . '/../../shared/components/sidebar.php') ?>
        <?php include(__DIR__ . '/../../shared/components/navbar.php') ?>

        <!-- Map Section -->
        <?php include(__DIR__ . '/sections/map.php') ?>

        <!-- Contact Info Section -->
        <?php include(__DIR__ . '/sections/info.php') ?>

        <?php include(__DIR__ . '/../../shared/components/footer.php') ?>
        <?php include(__DIR__ . '/../../shared/layouts/scripts.php') ?>
    </body>
</html>
