<?php
/**
 * JDIC - Program Details Feature Index
 */
$title = 'Kidsa - Program Details';
$css = '<link rel="stylesheet" href="features/program-details/css/main.css">';

// Variables for Hero Banner defaults
if (!isset($Title)) $Title = 'Home';
if (!isset($Title2)) $Title2 = 'BASIC Programs Details';
?>
<!DOCTYPE html>
<html lang="en">
    <?php include(__DIR__ . '/../../shared/layouts/head.php') ?>
    
    <body>
        <!-- Mobile Sidebar -->
        <?php include(__DIR__ . '/../../shared/components/sidebar.php') ?>

        <?php include(__DIR__ . '/../../shared/components/navbar.php') ?>

        <?php include(__DIR__ . '/sections/hero-banner.php') ?>

        <section class="program-details-section fix section-padding">
            <div class="container">
                <div class="program-details-wrapper">
                    <div class="row g-5">
                        
                        <div class="col-lg-8">
                            <?php include(__DIR__ . '/sections/content.php'); ?>
                        </div>

                        <div class="col-lg-4">
                            <div class="sticky-top" style="top: 120px; z-index: 1;">
                                <?php include(__DIR__ . '/sections/sidebar.php'); ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <?php include(__DIR__ . '/../../shared/components/footer.php') ?>
        <?php include(__DIR__ . '/../../shared/layouts/scripts.php') ?>
    </body>
</html>
