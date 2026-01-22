<!-- <section class="program-section py-5 bg-peach"> -->
<section class="team-section fix bg-white section-padding">
    <div class="love-shape float-bob-x">
        <img src="assets/img/team/love.png" alt="shape-img">
    </div>
    <div class="frame-shape">
        <img src="assets/img/team/frame.png" alt="shape-img">
    </div>

    <!-- Custom Style for Hover Effect -->
    <style>
        .nav-btn-custom:hover {
            background-color: #E65100 !important;
            color: #ffffff !important;
        }
    </style>

    <div class="container">

        <div class="text-center mb-3">
            <!-- <span class="wow fadeInUp fw-bold fs-2 text-orange">
                กระบวนการเรียนรู้ สู่การเป็นนวัตกร
            </span> -->
            <img src="features/home/images/program-section/program-heading.gif" class="w-100" alt="process">
        </div>

        <?php
        // Path setup
        $programBasicDir = __DIR__ . '/../images/program-section/basic';
        $programBasicImgPath = 'features/home/images/program-section/basic';

        $programAdvanceDir = __DIR__ . '/../images/program-section/advance';
        $programAdvanceImgPath = 'features/home/images/program-section/advance';

        // Helper function to get images
        function getProgramImages($dir)
        {
            $images = [];
            if (is_dir($dir)) {
                // glob braces not work on some server, separate calls safer if needed but usually fine locally
                $files = glob($dir . '/*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);
                if ($files) {
                    foreach ($files as $file) {
                        $images[] = basename($file);
                    }
                    natsort($images);
                }
            }
            return array_values($images);
        }

        $basicImages = getProgramImages($programBasicDir);
        $advanceImages = getProgramImages($programAdvanceDir);
        ?>
        <hr>

        <!-- Basic Level Slider -->
        <div class="program-slider-wrapper position-relative mb-5">
            <div class="d-flex justify-content-between align-items-center mb-4 px-2">
                <div class="d-flex align-items-center">
                    <div class="text-white px-5 py-2 rounded-pill fw-bold shadow-sm wow fadeInUp fs-5 me-4" style="background-color: #E65100;">
                        JDIC Level - Basic
                    </div>
                </div>
                <!-- Controls (Desktop Only) -->
                <div class="slider-controls d-none d-lg-flex gap-2">
                    <button class="basic-prev btn rounded-circle border border-2 text-orange d-flex align-items-center justify-content-center p-0 nav-btn-custom" style="width: 40px; height: 40px; border-color: #E65100 !important; transition: all 0.3s;">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button class="basic-next btn rounded-circle border border-2 text-orange d-flex align-items-center justify-content-center p-0 nav-btn-custom" style="width: 40px; height: 40px; border-color: #E65100 !important; transition: all 0.3s;">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <div class="swiper program-basic-slider overflow-hidden pb-3">
                <div class="swiper-wrapper">
                    <?php if (!empty($basicImages)): ?>
                        <?php foreach ($basicImages as $index => $imgName): ?>
                            <div class="swiper-slide h-auto">
                                <div class="card h-100 bg-white border rounded-4 shadow-sm p-4 text-center hover-up">
                                    <div class="mb-3 overflow-hidden rounded-3">
                                        <img src="<?php echo $programBasicImgPath . '/' . $imgName; ?>" class="w-100 img-fluid" alt="Basic Course <?php echo $index + 1; ?>">
                                    </div>
                                    <div class="card-body p-0">
                                        <!-- <h5 class="fw-bold mb-1">
                                            <a href="program-details.php" class="text-dark text-decoration-none">Smart Science</a>
                                        </h5>
                                        <span class="text-muted d-block small mb-3">Basic Level</span> -->
                                        <a href="program-details.php" class="btn btn-hover-scale btn-outline-orange rounded-pill px-4 py-2">
                                            รายละเอียด
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="col-12 text-center py-5">
                            <p class="text-muted">No Basic images found.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Controls (Mobile Only) - Below Cards -->
            <div class="slider-controls d-flex d-lg-none justify-content-center gap-3 mt-3">
                <button class="basic-prev btn rounded-circle border border-2 text-orange d-flex align-items-center justify-content-center p-0 nav-btn-custom" style="width: 40px; height: 40px; border-color: #E65100 !important; transition: all 0.3s;">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="basic-next btn rounded-circle border border-2 text-orange d-flex align-items-center justify-content-center p-0 nav-btn-custom" style="width: 40px; height: 40px; border-color: #E65100 !important; transition: all 0.3s;">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- Advanced Level Slider -->
        <div class="program-slider-wrapper position-relative">
            <div class="d-flex justify-content-between align-items-center mb-4 mt-4 px-2">
                <div class="d-flex align-items-center">
                    <div class="text-white px-5 py-2 rounded-pill fw-bold shadow-sm wow fadeInUp fs-5 me-4" style="background-color: #E65100;">
                        JDIC Level - Advanced
                    </div>
                </div>
                <!-- Controls (Desktop Only) -->
                <div class="slider-controls d-none d-lg-flex gap-2">
                    <button class="advanced-prev btn rounded-circle border border-2 text-orange d-flex align-items-center justify-content-center p-0 nav-btn-custom" style="width: 40px; height: 40px; border-color: #E65100 !important; transition: all 0.3s;">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button class="advanced-next btn rounded-circle border border-2 text-orange d-flex align-items-center justify-content-center p-0 nav-btn-custom" style="width: 40px; height: 40px; border-color: #E65100 !important; transition: all 0.3s;">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <div class="swiper program-advanced-slider overflow-hidden pb-3">
                <div class="swiper-wrapper">
                    <?php if (!empty($advanceImages)): ?>
                        <?php foreach ($advanceImages as $index => $imgName): ?>
                            <div class="swiper-slide h-auto">
                                <div class="card h-100 bg-white border rounded-4 shadow-sm p-4 text-center hover-up">
                                    <div class="mb-3 overflow-hidden rounded-3">
                                        <img src="<?php echo $programAdvanceImgPath . '/' . $imgName; ?>" class="w-100 img-fluid" alt="Advanced Course <?php echo $index + 1; ?>">
                                        <!-- <img src="features/home/images/coding-level-advance.png" class="w-100 img-fluid" alt="Advanced Course"> -->
                                    </div>
                                    <div class="card-body p-0">
                                        <!-- <h5 class="fw-bold mb-1">
                                            <a href="program-details.php" class="text-dark text-decoration-none">Smart Science</a>
                                        </h5>
                                        <span class="text-muted d-block small mb-3">Advanced Level</span> -->
                                        <a href="program-details.php" class="btn btn-hover-scale btn-outline-orange rounded-pill px-4 py-2">
                                            รายละเอียด
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="col-12 text-center py-5">
                            <p class="text-muted">No Advanced images found.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Controls (Mobile Only) - Below Cards -->
            <div class="slider-controls d-flex d-lg-none justify-content-center gap-3 mt-3">
                <button class="advanced-prev btn rounded-circle border border-2 text-orange d-flex align-items-center justify-content-center p-0 nav-btn-custom" style="width: 40px; height: 40px; border-color: #E65100 !important; transition: all 0.3s;">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="advanced-next btn rounded-circle border border-2 text-orange d-flex align-items-center justify-content-center p-0 nav-btn-custom" style="width: 40px; height: 40px; border-color: #E65100 !important; transition: all 0.3s;">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>

    </div>
</section>

<section class="py-5 bg-private">
    <div class="container">
        <div>
            <div class="row g-4 justify-content-center">
                <!-- 
                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="card h-100 bg-white border rounded-4 shadow-sm hover-up mt-4 overflow-visible position-relative card-private-custom px-4 pb-4">

                        <div class="position-absolute top-0 start-50 translate-middle z-1">
                            <span class="badge bg-white rounded-pill shadow-sm px-4 py-2 fs-4 fw-bold border floating-badge-custom">
                                JDIC Private
                            </span>
                        </div>

                        <div class="d-flex align-items-center text-start">
                            <img src="https://placehold.co/300x200/gray/000?text=300x200" class="private-img me-4 rounded-4 shadow-sm" alt="Private">
                            <div>
                                <h5 class="fw-bold text-dark mb-1">Private แบบตัวต่อตัว</h5>
                                <p class="small text-muted mb-2">ออกแบบการเรียนรู้เฉพาะบุคคล</p>

                                <a href="program-details.php" class="btn btn-hover-scale bg-orange text-white rounded-pill px-4 py-2 border-0">
                                    อ่านเพิ่มเติม <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".4s">
                    <div class="card h-100 bg-white border rounded-4 shadow-sm hover-up mt-4 overflow-visible position-relative card-private-custom px-4 pb-4">

                        <div class="position-absolute top-0 start-50 translate-middle z-1">
                            <span class="badge bg-white rounded-pill shadow-sm px-4 py-2 fs-4 fw-bold border floating-badge-custom">
                                JDIC Private Exclusive
                            </span>
                        </div>

                        <div class="d-flex align-items-center text-start">
                            <img src="https://placehold.co/300x200/gray/000?text=300x200" class="private-img me-4 rounded-4 shadow-sm" alt="Exclusive">
                            <div>
                                <h5 class="fw-bold text-dark mb-1">Private Exclusive</h5>
                                <p class="small text-muted mb-2">ดูแลพิเศษ เจาะลึกทุกเนื้อหา</p>
                                <a href="program-details.php" class="btn btn-hover-scale bg-orange text-white rounded-pill px-4 py-2 border-0">
                                    อ่านเพิ่มเติม <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>