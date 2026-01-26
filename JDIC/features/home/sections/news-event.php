<?php

$eventsDir = __DIR__ . '/../images/events';
$eventsImgPath = 'features/home/images/events';

$imageFiles = [];
if (is_dir($eventsDir)) {
    $files = glob($eventsDir . '/*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);
    foreach ($files as $file) {
        $imageFiles[] = basename($file);
    }
    // Sort images naturally (1, 2, 3, ...)
    natsort($imageFiles);
    $imageFiles = array_values($imageFiles);
}
?>
<style>
    .news-card {
        transition: all 0.3s ease;
        border: 1px solid #eee;
        background: #fff;
    }
    
    .news-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
        border-color: #e55e01;
    }
    
    .news-card img {
        transition: transform 0.5s ease;
    }
    
    .news-card:hover img {
        transform: scale(1.02);
    }
</style>

<section class="news-event-section section-padding pt-5">
    <div class="container">
        <div class="section-title text-center mb-5">
            <span class="wow fadeInUp" style="color: #e55e01; font-weight: bold; font-size: 1.2rem;">NEWS & EVENT</span>
        </div>
        <div class="row g-4">
            <?php
            $delay = 0.2;
            foreach ($imageFiles as $index => $image):
                $imgSrc = $eventsImgPath . '/' . $image;
                $altText = 'Event ' . ($index + 1);
            ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                    <div class="news-card h-100 rounded-4 d-flex flex-column overflow-hidden position-relative">
                        <a href="https://line.me/R/ti/p/@zoj9075c" target="_blank" class="stretched-link"></a>
                        <div class="w-100">
                            <img src="<?php echo htmlspecialchars($imgSrc); ?>" class="w-100" alt="<?php echo htmlspecialchars($altText); ?>">
                        </div>
                        <div class="mt-auto text-center p-4">
                            <span class="theme-btn" style="padding: 10px 25px; font-size: 14px;">
                                <span>Enroll Your Kid <i class="fa-solid fa-arrow-right-long"></i></span>
                            </span>
                        </div>
                    </div>
                </div>
            <?php
                $delay += 0.2;
            endforeach;
            ?>

            <?php if (empty($imageFiles)): ?>
                <div class="col-12 text-center">
                    <p class="text-muted">No events to display</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>