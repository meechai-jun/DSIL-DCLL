<style>
    /* กำหนดให้รูปภาพเป็น container หลักและซ่อนส่วนที่ล้นออก */
    .teacherImg {
        position: relative;
        overflow: hidden;
        /* สำคัญมาก: เพื่อไม่ให้ overlay โผล่ออกมาตอนยังไม่ hover */
    }

    .teacher-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(235, 88, 6, 0.9);
        /* สีพื้นหลัง (ในที่นี้ใช้สีส้มแบบโปร่งแสง ปรับได้ตามธีม) */
        color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;

        /* Effect การเลื่อน */
        opacity: 0;
        transform: translateY(100%);
        /* เริ่มต้นด้วยการซ่อนอยู่ด้านล่าง */
        transition: all 0.4s ease-in-out;
    }

    /* ดีไซน์ส่วน Overlay ที่จะเลื่อนขึ้นมา */

    /* สั่งให้ทำงานเมื่อนำเมาส์ไปวางที่การ์ดหลัก (.single-teachers) */
    .single-teachers:hover .teacher-overlay {
        opacity: 1;
        transform: translateY(0);
        /* เลื่อนกลับมาที่ตำแหน่งปกติ */
    }

    /* ปรับแต่งข้อความข้างใน Overlay */
    .teacher-overlay h5 {
        font-weight: bold;
        margin-bottom: 5px;
        color: #fff;
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

    /* --- CSS หลัก (Desktop) --- */
    .teacher-name {
        font-size: 18px;
        line-height: 1.3;
        color: #333;
    }



    /* จัดการการ์ดให้พื้นหลังขาวเสมอ แก้ปัญหาแถบเทา */
    .single-teachers {
        background-color: #ffffff;
        /* บังคับพื้นหลังขาว */
        display: flex;
        flex-direction: column;
        height: 100%;
        /* สูงเต็มพื้นที่ */
    }

    /* บังคับให้ส่วนชื่อ (content) ยืดลงมาปิดด้านล่าง */
    .teachers-content {
        flex-grow: 1;
        background-color: #ffffff;
        /* บังคับพื้นหลังขาว */
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* จัดข้อความให้อยู่กลางแนวตั้ง (ถ้าชอบ) */
    }

    /* --- CSS สำหรับ Hover (Overlay) --- */
    .teacher-overlay h5,
    .teacher-overlay span,
    .teacher-overlay p,
    .teacher-overlay .bio-text {
        color: #ffffff !important;
    }

    .teacher-overlay .btn-light {
        background-color: rgba(255, 255, 255, 0.9);
        border: none;
        color: #EB5806;
    }

    /* --- แก้ปัญหา Mobile (หน้าจอเล็กกว่า 576px) --- */
    @media (max-width: 576px) {

        /* ลดขนาดฟอนต์ชื่อลงอีก */
        .teacher-name {
            font-size: 14px !important;
            margin-bottom: 2px !important;
        }

        /* ลดขนาดตำแหน่งงาน */
        .designation {
            font-size: 11px !important;
        }

        /* ลด Padding รอบๆ ชื่อ เพื่อให้มีพื้นที่มากขึ้น */
        .teachers-content {
            padding: 10px !important;
        }

        /* ลดขนาด Overlay ตอนจิ้มค้าง/Hover ในมือถือ */
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

        /* ตัดคำยาวๆ */
    }
</style>

<section class="bg-light teachers-area-three teacher-wrap pt-100 pb-70">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center gap-3">
            <span style="height: 3px; width: 60px; background-color: #ff6600; border-radius: 5px;"></span>

            <h1 class="text-orange fs-1 fw-bold mb-0 text-uppercase" style="letter-spacing: 2px;">
                OUR TEACHERS
            </h1>

            <span style="height: 3px; width: 60px; background-color: #ff6600; border-radius: 5px;"></span>
        </div>

        <div class="container py-5">
            <div class="row justify-content-center mb-4">
                <?php foreach ($leaders as $t) : ?>
                    <?php
                    $pic = "assets/images/teachers03.jpg";
                    if (isset($t['FaPic']) && !empty($t['FaPic']) && file_exists("assets/images/teachers/{$t['FaPic']}")) {
                        $pic = "assets/images/teachers/{$t['FaPic']}";
                    }
                    ?>
                    <div class="col-lg-3 col-md-4 col-6 mb-4" data-aos="fade-up" data-aos-duration="800">
                        <div class="single-teachers shadow-sm rounded-4 overflow-hidden text-center border-0">

                            <div class="teacherImg position-relative">
                                <img src="<?= $pic ?>" class="w-100 img-fluid" alt="<?= htmlspecialchars($t['Fullname']) ?>">

                                <div class="teacher-overlay d-flex flex-column justify-content-center align-items-center p-2">
                                    <h5 class="fw-bold mb-1"><?= htmlspecialchars($t['Fullname']) ?></h5>
                                    <span class="d-block mb-2 small"><?= htmlspecialchars($t['FaPosition']) ?></span>

                                    <?php if (isset($t['Bio']) && !empty($t['Bio'])): ?>
                                        <p class="small bio-text mb-0"><?= mb_strimwidth(htmlspecialchars($t['Bio']), 0, 100, '...') ?></p>
                                    <?php else: ?>
                                        <a href="#" class="btn btn-sm btn-light mt-2 rounded-pill px-3 fw-bold" style="font-size: 10px;">รายละเอียด</a>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="teachers-content p-3">
                                <h5 class="teacher-name fw-bold"><?= htmlspecialchars($t['Fullname']) ?></h5>
                                <div class="designation text-muted small"><?= htmlspecialchars($t['FaPosition']) ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="row justify-content-center">
                <?php foreach ($otherTeachers as $t) : ?>
                    <?php
                    $pic = "assets/images/teachers03.jpg";
                    if (isset($t['FaPic']) && !empty($t['FaPic']) && file_exists("assets/images/teachers/{$t['FaPic']}")) {
                        $pic = "assets/images/teachers/{$t['FaPic']}";
                    }
                    ?>
                    <div class="col-lg-3 col-md-4 col-6 mb-4" data-aos="fade-up" data-aos-duration="800">
                        <div class="single-teachers shadow-sm rounded-4 overflow-hidden text-center border-0">

                            <div class="teacherImg position-relative">
                                <img src="<?= $pic ?>" class="w-100 img-fluid" alt="<?= htmlspecialchars($t['Fullname']) ?>">

                                <div class="teacher-overlay d-flex flex-column justify-content-center align-items-center p-2">
                                    <h5 class="fw-bold mb-1"><?= htmlspecialchars($t['Fullname']) ?></h5>
                                    <span class="d-block mb-2 small"><?= htmlspecialchars($t['FaPosition']) ?></span>

                                    <?php if (isset($t['Bio']) && !empty($t['Bio'])): ?>
                                        <p class="small bio-text mb-0"><?= mb_strimwidth(htmlspecialchars($t['Bio']), 0, 100, '...') ?></p>
                                    <?php else: ?>
                                        <a href="#" class="btn btn-sm btn-light mt-2 rounded-pill px-3 fw-bold" style="font-size: 10px;">รายละเอียด</a>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="teachers-content p-3">
                                <h5 class="teacher-name fw-bold"><?= htmlspecialchars($t['Fullname']) ?></h5>
                                <div class="designation text-muted small"><?= htmlspecialchars($t['FaPosition']) ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>