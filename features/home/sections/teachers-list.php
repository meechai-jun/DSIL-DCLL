<?php
// Data Logic (ย้ายมาจาก index.php เพื่อให้ไฟล์นี้จบในตัว หรือจะรับตัวแปรมาก็ได้)
// สมมติว่า $leaders และ $otherTeachers ถูกส่งเข้ามาจาก index.php แล้ว
?>

<section class="teachers-section section-padding bg-white">
    <div class="container">
        <div class="section-title text-center mb-5">
            <span class="text-orange fw-bold">บุคลากรของเรา</span>
            <h2 class="fw-bold">Our Teachers</h2>
        </div>

        <div class="row justify-content-center mb-5">
            <?php foreach ($leaders as $t) : ?>
                <?php
                $pic = "images/teachers03.jpg";
                if (isset($t['FaPic']) && !empty($t['FaPic']) && file_exists("teacher_pic/{$t['FaPic']}")) {
                    $pic = "teacher_pic/{$t['FaPic']}";
                }
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4" data-aos="fade-up">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden text-center h-100 single-teachers">
                        <div class="teacherImg position-relative">
                            <img src="<?= $pic ?>" class="w-100 object-fit-cover" style="height: 300px;" alt="<?= htmlspecialchars($t['Fullname']) ?>">
                            <div class="teacher-overlay">
                                <h5><?= htmlspecialchars($t['Fullname']) ?></h5>
                                <span><?= htmlspecialchars($t['FaPosition']) ?></span>
                                <p class="text-white small px-3"><?= mb_strimwidth(htmlspecialchars($t['Bio']), 0, 100, '...') ?></p>
                            </div>
                        </div>
                        <div class="card-body p-3 bg-light">
                            <h5 class="fw-bold mb-1" style="font-size: 1.1rem;"><?= htmlspecialchars($t['Fullname']) ?></h5>
                            <small class="text-orange fw-bold"><?= htmlspecialchars($t['FaPosition']) ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="row justify-content-center">
            <?php foreach ($otherTeachers as $t) : ?>
                <?php
                $pic = "images/teachers03.jpg";
                if (isset($t['FaPic']) && !empty($t['FaPic']) && file_exists("teacher_pic/{$t['FaPic']}")) {
                    $pic = "teacher_pic/{$t['FaPic']}";
                }
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4" data-aos="fade-up">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden text-center h-100 single-teachers">
                        <div class="teacherImg position-relative">
                            <img src="<?= $pic ?>" class="w-100 object-fit-cover" style="height: 250px;" alt="<?= htmlspecialchars($t['Fullname']) ?>">
                            <div class="teacher-overlay">
                                <h5><?= htmlspecialchars($t['Fullname']) ?></h5>
                                <span><?= htmlspecialchars($t['FaPosition']) ?></span>
                                <p class="text-white small px-3"><?= mb_strimwidth(htmlspecialchars($t['Bio']), 0, 80, '...') ?></p>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="fw-bold mb-1"><?= htmlspecialchars($t['Fullname']) ?></h6>
                            <small class="text-muted"><?= htmlspecialchars($t['FaPosition']) ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>