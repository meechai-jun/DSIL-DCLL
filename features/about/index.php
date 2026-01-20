<?php
/**
 * About Feature - Main Page
 * DCLL Website
 */

// Teacher data with clear structure
$teachers = [
    [
        'photo' => "F0071.png",
        'role'  => "Leader",
        'name'  => "นายคมสัน รักษ์ศิริ",
        'bio'   => "ผู้นำทีม DCLL ผู้ขับเคลื่อนการเรียนรู้ดิจิทัลและนวัตกรรมในศตวรรษที่ 21"
    ],
    [
        'photo' => "F0131.png",
        'role'  => "Teacher",
        'name'  => "นางสาวนุศรินทร์ นุเสน",
        'bio'   => "ครูผู้สร้างแรงบันดาลใจในการเรียนรู้ผ่าน Maker Education และเทคโนโลยีสร้างสรรค์"
    ],
    [
        'photo' => "F0174.png",
        'role'  => "Teacher",
        'name'  => "นายณรงศักดิ์ ยลประเวส",
        'bio'   => "ครูผู้มีความเชี่ยวชาญด้านการใช้เทคโนโลยีเพื่อยกระดับการเรียนรู้ในห้องเรียนยุคใหม่"
    ],
    [
        'photo' => "F0182.png",
        'role'  => "Teacher",
        'name'  => "นางสาวอนุสรา ศิริพราหมนุกูล",
        'bio'   => "ผู้ออกแบบประสบการณ์เรียนรู้แห่งอนาคตด้วย AI และ Virtual Learning"
    ],
    [
        'photo' => "F0247.png",
        'role'  => "Teacher",
        'name'  => "นางสาวสิรินภาพร ศรีสุวรรณ",
        'bio'   => "ครูผู้ส่งเสริมการเรียนรู้เชิงสร้างสรรค์และพัฒนา Soft Skills ของผู้เรียน"
    ],
];

// Separate by role
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
    <title>DCLL | About</title>
</head>

<body>
    <?php include(__DIR__ . '/../../shared/components/navbar.php') ?>

    <?php include(__DIR__ . '/sections/goal.php') ?>
    <?php include(__DIR__ . '/sections/facilitator.php') ?>
    <?php include(__DIR__ . '/sections/constructionism.php') ?>

    <?php include(__DIR__ . '/../../shared/layouts/scripts.php') ?>
</body>

</html>
