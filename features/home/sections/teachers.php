<style>
/* Teacher Card */
.teacherImg {
    position: relative;
    overflow: hidden;
}

.teacher-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(235, 88, 6, 0.9);
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    opacity: 0;
    transform: translateY(100%);
    transition: all 0.4s ease-in-out;
}

.single-teachers:hover .teacher-overlay {
    opacity: 1;
    transform: translateY(0);
}

.teacher-overlay h5,
.teacher-overlay span,
.teacher-overlay p,
.teacher-overlay .bio-text {
    color: #ffffff !important;
}

.teacher-overlay span {
    font-size: 0.9rem;
    display: block;
    margin-bottom: 15px;
}

.teacher-overlay p {
    font-size: 0.85rem;
    line-height: 1.4;
}

.teacher-overlay .btn-light {
    background-color: rgba(255, 255, 255, 0.9);
    border: none;
    color: #EB5806;
}

/* Teacher Card Layout */
.single-teachers {
    background-color: #ffffff;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.teachers-content {
    flex-grow: 1;
    background-color: #ffffff;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.teacher-name {
    font-size: 18px;
    line-height: 1.3;
    color: #333;
}

/* Mobile Responsive */
@media (max-width: 576px) {
    .teacher-name {
        font-size: 14px !important;
        margin-bottom: 2px !important;
    }

    .designation {
        font-size: 11px !important;
    }

    .teachers-content {
        padding: 10px !important;
    }

    .teacher-overlay h5 {
        font-size: 14px !important;
    }

    .bio-text {
        font-size: 10px !important;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
}
</style>

<section class="teachers-area-three teacher-wrap pt-100 pb-70">
    <div class="container">
        <div class="title center_title">
            <h1>Our Teachers</h1>
        </div>

        <div class="container py-5">
            <!-- Team Leaders -->
            <div class="row justify-content-center mb-4">
                <?php foreach ($teamLeaders as $teacher) : ?>
                    <?php
                    $photoPath = "assets/images/teachers/{$teacher['photo']}";
                    $photoUrl = file_exists($photoPath) ? $photoPath : "assets/images/teachers03.jpg";
                    ?>
                    <div class="col-lg-3 col-md-4 col-6 mb-4" data-aos="fade-up" data-aos-duration="800">
                        <div class="single-teachers shadow-sm rounded-4 overflow-hidden text-center border-0">
                            <div class="teacherImg position-relative">
                                <img src="<?= $photoUrl ?>" class="w-100 img-fluid" alt="<?= htmlspecialchars($teacher['name']) ?>">

                                <div class="teacher-overlay d-flex flex-column justify-content-center align-items-center p-2">
                                    <h5 class="fw-bold mb-1"><?= htmlspecialchars($teacher['name']) ?></h5>
                                    <span class="d-block mb-2 small"><?= htmlspecialchars($teacher['role']) ?></span>

                                    <?php if (!empty($teacher['bio'])): ?>
                                        <p class="small bio-text mb-0"><?= mb_strimwidth(htmlspecialchars($teacher['bio']), 0, 100, '...') ?></p>
                                    <?php else: ?>
                                        <a href="#" class="btn btn-sm btn-light mt-2 rounded-pill px-3 fw-bold" style="font-size: 10px;">รายละเอียด</a>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="teachers-content p-3">
                                <h5 class="teacher-name fw-bold"><?= htmlspecialchars($teacher['name']) ?></h5>
                                <div class="designation text-muted small"><?= htmlspecialchars($teacher['role']) ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Teaching Staff -->
            <div class="row justify-content-center">
                <?php foreach ($teachingStaff as $teacher) : ?>
                    <?php
                    $photoPath = "assets/images/teachers/{$teacher['photo']}";
                    $photoUrl = file_exists($photoPath) ? $photoPath : "assets/images/teachers03.jpg";
                    ?>
                    <div class="col-lg-3 col-md-4 col-6 mb-4" data-aos="fade-up" data-aos-duration="800">
                        <div class="single-teachers shadow-sm rounded-4 overflow-hidden text-center border-0">
                            <div class="teacherImg position-relative">
                                <img src="<?= $photoUrl ?>" class="w-100 img-fluid" alt="<?= htmlspecialchars($teacher['name']) ?>">

                                <div class="teacher-overlay d-flex flex-column justify-content-center align-items-center p-2">
                                    <h5 class="fw-bold mb-1"><?= htmlspecialchars($teacher['name']) ?></h5>
                                    <span class="d-block mb-2 small"><?= htmlspecialchars($teacher['role']) ?></span>

                                    <?php if (!empty($teacher['bio'])): ?>
                                        <p class="small bio-text mb-0"><?= mb_strimwidth(htmlspecialchars($teacher['bio']), 0, 100, '...') ?></p>
                                    <?php else: ?>
                                        <a href="#" class="btn btn-sm btn-light mt-2 rounded-pill px-3 fw-bold" style="font-size: 10px;">รายละเอียด</a>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="teachers-content p-3">
                                <h5 class="teacher-name fw-bold"><?= htmlspecialchars($teacher['name']) ?></h5>
                                <div class="designation text-muted small"><?= htmlspecialchars($teacher['role']) ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>