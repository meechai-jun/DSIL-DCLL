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

        $programsData = require __DIR__ . '/../data/programs.php';

        $basicPath = $programsData['basic']['base_path'];
        $basicImages = array_map(fn($img) => "$basicPath/$img", $programsData['basic']['items']);

        $advancePath = $programsData['advance']['base_path'];
        $advanceImages = array_map(fn($img) => "$advancePath/$img", $programsData['advance']['items']);
        ?>
        <hr>

        <!-- Basic Level Slider -->
        <div class="program-slider-wrapper position-relative mb-5">
            <div class="d-flex justify-content-between align-items-center mb-4 px-2">
                <div class="d-flex align-items-center">
                    <div class="text-white px-5 py-2 rounded-pill fw-bold shadow-sm wow fadeInUp fs-5 me-4"
                        style="background-color: #E65100;">
                        JDIC Level - Basic
                    </div>
                </div>
                <!-- Controls (Desktop Only) -->
                <div class="slider-controls d-none d-lg-flex gap-2">
                    <button
                        class="basic-prev btn rounded-circle border border-2 text-orange d-flex align-items-center justify-content-center p-0 nav-btn-custom"
                        style="width: 40px; height: 40px; border-color: #E65100 !important; transition: all 0.3s;">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button
                        class="basic-next btn rounded-circle border border-2 text-orange d-flex align-items-center justify-content-center p-0 nav-btn-custom"
                        style="width: 40px; height: 40px; border-color: #E65100 !important; transition: all 0.3s;">
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
                                        <img src="<?php echo $imgName; ?>" class="w-100 img-fluid"
                                            alt="Basic Course <?php echo $index + 1; ?>">
                                    </div>
                                    <div class="card-body p-0">
                                        <!-- <h5 class="fw-bold mb-1">
                                            <a href="https://line.me/R/ti/p/@zoj9075c" class="text-dark text-decoration-none">Smart Science</a>
                                        </h5>
                                        <span class="text-muted d-block small mb-3">Basic Level</span> -->
                                        <a href="https://line.me/R/ti/p/@zoj9075c"
                                            class="btn btn-hover-scale btn-outline-orange rounded-pill px-4 py-2">
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
                <button
                    class="basic-prev btn rounded-circle border border-2 text-orange d-flex align-items-center justify-content-center p-0 nav-btn-custom"
                    style="width: 40px; height: 40px; border-color: #E65100 !important; transition: all 0.3s;">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button
                    class="basic-next btn rounded-circle border border-2 text-orange d-flex align-items-center justify-content-center p-0 nav-btn-custom"
                    style="width: 40px; height: 40px; border-color: #E65100 !important; transition: all 0.3s;">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- Advanced Level Slider -->
        <div class="program-slider-wrapper position-relative">
            <div class="d-flex justify-content-between align-items-center mb-4 mt-4 px-2">
                <div class="d-flex align-items-center">
                    <div class="text-white px-5 py-2 rounded-pill fw-bold shadow-sm wow fadeInUp fs-5 me-4"
                        style="background-color: #E65100;">
                        JDIC Level - Advanced
                    </div>
                </div>
                <!-- Controls (Desktop Only) -->
                <div class="slider-controls d-none d-lg-flex gap-2">
                    <button
                        class="advanced-prev btn rounded-circle border border-2 text-orange d-flex align-items-center justify-content-center p-0 nav-btn-custom"
                        style="width: 40px; height: 40px; border-color: #E65100 !important; transition: all 0.3s;">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button
                        class="advanced-next btn rounded-circle border border-2 text-orange d-flex align-items-center justify-content-center p-0 nav-btn-custom"
                        style="width: 40px; height: 40px; border-color: #E65100 !important; transition: all 0.3s;">
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
                                        <img src="<?php echo $imgName; ?>" class="w-100 img-fluid"
                                            alt="Advanced Course <?php echo $index + 1; ?>">
                                        <!-- <img src="features/home/images/coding-level-advance.png" class="w-100 img-fluid" alt="Advanced Course"> -->
                                    </div>
                                    <div class="card-body p-0">
                                        <!-- <h5 class="fw-bold mb-1">
                                            <a href="https://line.me/R/ti/p/@zoj9075c" class="text-dark text-decoration-none">Smart Science</a>
                                        </h5>
                                        <span class="text-muted d-block small mb-3">Advanced Level</span> -->
                                        <a href="https://line.me/R/ti/p/@zoj9075c"
                                            class="btn btn-hover-scale btn-outline-orange rounded-pill px-4 py-2">
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
                <button
                    class="advanced-prev btn rounded-circle border border-2 text-orange d-flex align-items-center justify-content-center p-0 nav-btn-custom"
                    style="width: 40px; height: 40px; border-color: #E65100 !important; transition: all 0.3s;">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button
                    class="advanced-next btn rounded-circle border border-2 text-orange d-flex align-items-center justify-content-center p-0 nav-btn-custom"
                    style="width: 40px; height: 40px; border-color: #E65100 !important; transition: all 0.3s;">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>

    </div>
</section>

<section class="py-5 bg-private" id="private-exclusive-section" style="scroll-margin-top: 100px;">
    <div class="container">
        <div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-10 col-md-10 col-sm-12 wow fadeInUp" data-wow-delay=".4s">
                    <div
                        class="card h-100 bg-white border rounded-4 shadow-sm hover-up mt-4 overflow-visible position-relative card-private-custom px-4">

                        <div class="position-absolute top-0 start-50 translate-middle z-1" >
                            <span
                                class="badge bg-white rounded-pill shadow-sm px-4 py-2 fs-4 fw-bold border floating-badge-custom">
                                Private Exclusive
                            </span>
                        </div>

                        <div class="text-center">
                            <div class="mb-4">
                                <img src="features/home/images/program-section/private/private.png"
                                    class="w-100 img-fluid rounded-4 shadow-sm" alt="Exclusive">
                            </div>
                            <a href="https://line.me/R/ti/p/@zoj9075c"
                                class="btn btn-hover-scale bg-orange text-white rounded-pill px-4 py-2 border-0">
                                รายละเอียด
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>