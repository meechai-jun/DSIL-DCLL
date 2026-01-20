<?php
/**
 * Home Feature - Main Page
 * DCLL Website
 */

// Teacher data with clear, readable structure
$teachers = [
    [
        'photo'    => "F0071.png",
        'role'     => "Leader",
        'name'     => "นายคมสัน รักษ์ศิริ",
        'bio'      => "ผู้นำทีม DCLL ผู้ขับเคลื่อนการเรียนรู้ดิจิทัลและนวัตกรรมในศตวรรษที่ 21"
    ],
    [
        'photo'    => "F0131.png",
        'role'     => "Teacher",
        'name'     => "นางสาวนุศรินทร์ นุเสน",
        'bio'      => "ครูผู้สร้างแรงบันดาลใจในการเรียนรู้ผ่าน Maker Education และเทคโนโลยีสร้างสรรค์"
    ],
    [
        'photo'    => "F0174.png",
        'role'     => "Teacher",
        'name'     => "นายณรงศักดิ์ ยลประเวส",
        'bio'      => "ครูผู้มีความเชี่ยวชาญด้านการใช้เทคโนโลยีเพื่อยกระดับการเรียนรู้ในห้องเรียนยุคใหม่"
    ],
    [
        'photo'    => "F0182.png",
        'role'     => "Teacher",
        'name'     => "นางสาวอนุสรา ศิริพราหมนุกูล",
        'bio'      => "ผู้ออกแบบประสบการณ์เรียนรู้แห่งอนาคตด้วย AI และ Virtual Learning"
    ],
    [
        'photo'    => "F0247.png",
        'role'     => "Teacher",
        'name'     => "นางสาวสิรินภาพร ศรีสุวรรณ",
        'bio'      => "ครูผู้ส่งเสริมการเรียนรู้เชิงสร้างสรรค์และพัฒนา Soft Skills ของผู้เรียน"
    ],
];

// Separate teachers by role
$teamLeaders = [];
$teachingStaff = [];

foreach ($teachers as $teacher) {
    if ($teacher['role'] === 'Leader') {
        $teamLeaders[] = $teacher;
    } else {
        $teachingStaff[] = $teacher;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(__DIR__ . '/../../shared/layouts/head.php') ?>
    <title>DCLL | Home</title>
    <link rel="stylesheet" href="features/home/css/main.css?v=<?php echo time(); ?>">
</head>

<body class="bg-body-tertiary">
    <?php include(__DIR__ . '/../../shared/components/navbar.php') ?>
    <?php include(__DIR__ . '/sections/hero.php') ?>
    <?php include(__DIR__ . '/sections/courses.php') ?>
    <?php include(__DIR__ . '/sections/about.php') ?>
    <?php include(__DIR__ . '/sections/classes.php') ?>
    <?php include(__DIR__ . '/sections/video-section.php') ?>
    <?php include(__DIR__ . '/sections/gallery.php') ?>
    <?php include(__DIR__ . '/sections/testimonials.php') ?>
    <?php include(__DIR__ . '/sections/teachers.php') ?>
    <?php include(__DIR__ . '/sections/enroll.php') ?>

    <?php include(__DIR__ . '/../../shared/layouts/scripts.php') ?>
    <script src="features/home/js/home.js?v=<?php echo time(); ?>"></script>
</body>

</html>
