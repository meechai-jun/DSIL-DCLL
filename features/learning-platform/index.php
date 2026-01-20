<?php
/**
 * Learning Platform Feature - Main Page
 * DCLL Website
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(__DIR__ . '/../../shared/layouts/head.php') ?>
    <title>DCLL | Learning Platform</title>
    <link rel="stylesheet" href="features/learning-platform/css/main.css?v=<?php echo time(); ?>">
</head>

<body data-bs-spy="scroll" data-bs-target="#subNavbar" data-bs-offset="150" tabindex="0">
    <?php include(__DIR__ . '/../../shared/components/navbar.php') ?>

    <?php include(__DIR__ . '/sections/adult-digital-skills.php') ?>
    <?php include(__DIR__ . '/sections/jdic-overview.php') ?>

    <?php include(__DIR__ . '/../../shared/layouts/scripts.php') ?>
</body>

</html>
