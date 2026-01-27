<?php
/**
 * Kidsa - Advance Program Details
 */
$title = 'Kidsa - Advance Programs';
$Title = 'Home';
$Title2 = 'ADVANCED (AGE 8-15) Programs Details';
// Include Home CSS for button styles
$css = '<link rel="stylesheet" href="features/home/css/main.css">';

// Image arrays
$programsData = require __DIR__ . '/features/home/data/programs.php';
$advancePath = $programsData['advance']['base_path'];
$advanceImages = array_map(fn($img) => "$advancePath/$img", $programsData['advance']['items']);
?>
<!DOCTYPE html>
<html lang="en">
    <?php include(__DIR__ . '/shared/layouts/head.php') ?>
    
    <body>
        <!-- Mobile Sidebar -->
        <?php include(__DIR__ . '/shared/components/sidebar.php') ?>

        <?php include(__DIR__ . '/shared/components/navbar.php') ?>

        <?php include(__DIR__ . '/features/program-details/sections/hero-banner.php') ?>

        <section class="program-details-section fix section-padding">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <?php if (!empty($advanceImages)): ?>
                        <?php foreach ($advanceImages as $index => $imgName): ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".<?php echo ($index % 3 + 2) * 2; ?>s">
                                <div class="card h-100 bg-white border rounded-4 shadow-sm p-4 text-center hover-up">
                                    <div class="mb-3 overflow-hidden rounded-3">
                                        <img src="<?php echo $imgName; ?>" class="w-100 img-fluid" alt="Advance Course <?php echo $index + 1; ?>">
                                    </div>
                                    <div class="card-body p-0">
                                        <a href="https://line.me/R/ti/p/@zoj9075c" class="btn btn-hover-scale btn-outline-orange rounded-pill px-4 py-2">
                                            รายละเอียด
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="col-12 text-center py-5">
                            <p class="text-muted">No Advance images found.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <?php include(__DIR__ . '/shared/components/footer.php') ?>
        <?php include(__DIR__ . '/shared/layouts/scripts.php') ?>
    </body>
</html>
