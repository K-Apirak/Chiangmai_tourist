<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <title>แหล่งท่องเที่ยวเชียงใหม่</title>
</head>
<body>

    <header class="site-nav">
        <a class="brand" href="../index.php">Chiang Mai</a>
        <nav>
            <ul>
                <li><a href="#Mountain">ภูเขา</a></li>
                <li><a href="#Temple">วัด</a></li>
                <li><a href="#Shopping">ช้อปปิ้ง</a></li>
                <li><a href="#Family">ครอบครัว</a></li>
            </ul>
        </nav>
        <a class="back-home" href="../index.php">&larr; กลับหน้าแรก</a>
    </header>

    <section class="hero">
        <div class="hero-overlay">
            <h1>แหล่งท่องเที่ยวเชียงใหม่</h1>
            <p>รวมสถานที่ท่องเที่ยวแนะนำ ทั้งภูเขา วัด แหล่งช้อปปิ้ง และสถานที่สำหรับครอบครัว</p>
        </div>
    </section>

    <?php
        include '../db_connection.php';

        // หมวดหมู่ทั้งหมดที่รองรับ พร้อมชื่อภาษาไทยและไอคอนสำหรับแสดงผล
        $categories = [
            'Mountain' => ['label' => 'ภูเขา',     'icon' => '⛰️'],
            'Temple'   => ['label' => 'วัด',        'icon' => '🛕'],
            'Shopping' => ['label' => 'ช้อปปิ้ง',   'icon' => '🛍️'],
            'Family'   => ['label' => 'ครอบครัว',   'icon' => '👨‍👩‍👧‍👦'],
        ];

        // ดึงข้อมูลทั้งหมดครั้งเดียวแล้วจัดกลุ่มตามหมวดหมู่ในฝั่ง PHP
        // (เดิมเปิด/ปิดการเชื่อมต่อฐานข้อมูลและ query แยกกัน 4 รอบต่อ 1 หน้า)
        $placesByCategory = [];
        $sql = "SELECT * FROM places";
        $result = $conn->query($sql);
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $placesByCategory[$row['category']][] = $row;
            }
        }
        $conn->close();

        foreach ($categories as $key => $meta):
            $places = $placesByCategory[$key] ?? [];
    ?>
    <section id="<?php echo $key; ?>" class="place-section">
        <div class="section-head">
            <h2><span class="icon"><?php echo $meta['icon']; ?></span> <?php echo htmlspecialchars($meta['label']); ?></h2>
            <hr>
        </div>

        <div class="container">
            <?php if (count($places) > 0): ?>
                <?php foreach ($places as $row): ?>
                    <div class="place-card">
                        <div class="place-img" style="background-image: url('<?php echo htmlspecialchars($row['img'], ENT_QUOTES); ?>');"></div>
                        <div class="place-detail">
                            <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                            <span class="badge"><?php echo htmlspecialchars($meta['label']); ?></span>
                            <p><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
                            <p class="location">📍 <?php echo htmlspecialchars($row['location']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="empty">ยังไม่มีข้อมูลสถานที่ในหมวดนี้</p>
            <?php endif; ?>
        </div>
    </section>
    <?php endforeach; ?>

    <footer class="site-footer">
        <p>&copy; <?php echo date('Y'); ?> Chiang Mai Tourist &mdash; ข้อมูลท่องเที่ยวจังหวัดเชียงใหม่</p>
    </footer>

</body>
</html>
