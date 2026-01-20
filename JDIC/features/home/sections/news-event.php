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
                    <div class="news-promo-card h-100">
                        <img src="<?php echo htmlspecialchars($imgSrc); ?>" class="w-100 rounded-4 border shadow-sm hover-up" alt="<?php echo htmlspecialchars($altText); ?>">
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