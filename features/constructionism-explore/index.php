<?php
/**
 * Constructionism Explore Feature - Main Page
 * DCLL Website
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(__DIR__ . '/../../shared/layouts/head.php') ?>
    <title>DCLL | Constructionism Explore</title>
    <link rel="stylesheet" href="features/constructionism-explore/css/main.css?v=<?php echo time(); ?>">
</head>

<body>
    <?php include(__DIR__ . '/../../shared/components/navbar.php') ?>

    <div class="container pt-5 pb-5">
        <h1 class="text-center text-orange fs-1 fw-bold mb-5">Constructionism Explore</h1>

        <div class="row g-4">
            <!-- Network Map Column -->
            <div class="col-md-4">
                <div class="sub-header">เครือข่ายและพันธมิตรในแต่ละภาค</div>
                <div class="explore-box">
                    <img src="./assets/images/th_map.png" alt="แผนที่เครือข่าย Constructionism ประเทศไทย" class="explore-image">
                </div>
            </div>

            <!-- Progress Column -->
            <div class="col-md-4">
                <div class="sub-header">ความก้าวหน้าและกิจกรรม</div>
                <div class="explore-box">
                    <p class="text-muted">*** ใส่รูปภาพ ***</p>
                </div>
            </div>

            <!-- Resources Column -->
            <div class="col-md-4">
                <div class="sub-header">เครื่องมือ บทความและเอกสารเผยแพร่</div>
                <div class="row">
                    <div class="col-6 resource-list">
                        <strong>Software</strong>
                        <ul>
                            <li>Scratch</li>
                            <li>Octostudio</li>
                        </ul>

                        <strong>Learning Tools</strong>
                        <ul>
                            <li>Laser Cutter</li>
                            <li>3D Printer</li>
                            <li>Micro Controller</li>
                        </ul>
                    </div>
                    <div class="col-6 resource-list">
                        <strong>Books</strong>
                        <ul>
                            <li>Constructionism</li>
                            <li>Learning Theory</li>
                            <li>Innovation</li>
                        </ul>

                        <strong class="text-highlight">Articles & Research</strong>
                        <ul>
                            <li>Article</li>
                            <li>Research</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include(__DIR__ . '/../../shared/layouts/scripts.php') ?>
</body>

</html>
