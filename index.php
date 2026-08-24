<?php 
    session_start();

    if(!isset($_SESSION['username'])){
        $_SESSION['msg'] = " กรุณาเข้าสู่ระบบก่อนใช้งาน";
        header('location:Login.php');
        exit();
    }
    if (isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location:Login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@400;700&display=swap" rel="stylesheet">
    <title>Chiangmai Tourist</title>
</head>
<body class="Home_page">  
<div class="content">
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="success">
            <h3>
                <?php 
                    echo $_SESSION['success']; 
                    unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <?php if (isset($_SESSION['username'])) : ?>
        <p>ยินดีต้อนรับคุณ <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong></p>
        <p><a href="index.php?logout='1'" style="color: red;">ออกจากระบบ</a></p>
    <?php endif ?>
</div>
        <div class="container bg">
            <div class="menu">
                <div class="logo">
                    <a href=""></a>
                </div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#about">เกี่ยวกับ</a></li>
                        <li><a href="#news">ข่าวและประกาศ</a></li>
                        <!-- <li><a href="tourist.php">แหล่งท่องเที่ยว</a></li> -->
                        <li><a href="#service">ศูนย์บริการประชาชน</a></li>
                    </ul>
            </div>
            <div class="content2">
                <div class="header_index">
                    <h3><i>Thailand</i></h3>
                    <h1>Chiang Mai</h1>
                    <p>เมืองเชียงใหม่ มีชื่อที่ปรากฏในตำนานว่า "นพบุรีศรีนครพิงค์เชียงใหม่" เป็นราชธานีของอาณาจักรล้านนาไทยมาตั้งแต่พระยามังรายได้ทรงสร้างขึ้น เมื่อ พ.ศ.1839 ซึ่งมี อายุครบ 710 ปี ในปี พ.ศ.2549 และเมืองเชียงใหม่ได้มีวิวัฒนาการ สืบเนื่องกันมาในประวัติศาสตร์ตลอดมา เชียงใหม่มีฐานะเป็นนครหลวงอิสระ ปกครองโดยกษัตริย์ราชวงศ์มังราย ประมาณ 261 ปี (ระหว่าง พ.ศ.1839-2100) ในปี พ.ศ.2101</p>
                </div>
                <div class="grid-card">

                    <a href="New/tourist.php#Mountain" target="_blank">
                    <div class="box bg1">
                        <h2 style="color:white;">Mountain</h2>
                    </div>
                    </a>

                    <a href="New/tourist.php#Temple" target="_blank">
                    <div class="box bg2">
                        <h2 style="color:white;">Temple</h2>
                    </div>
                    </a>
                    
                    <a href="New/tourist.php#Shopping" target="_blank">
                    <div class="box bg3">
                        <h2 style="color:white;">Shopping</h2>
                    </div>
                    </a>

                    <a href="New/tourist.php#Family" target="_blank">
                    <div class="box bg4">
                        <h2 style="color:white;">Family</h2>
                    </div>
                    </a>

                </div>
            </div>
        </div>
        <section id="about" class="detail_cmi">
            <div class="container-section">
                <h1>ยินดีต้อนรับสู่จังหวัดเชียงใหม่</h1>
                <hr>
                <br><h2>ประวัติความเป็นมาจังหวัดเชียงใหม่</h2><br>
                <p style="text-align: left;">เชียงใหม่ หรือ "นพบุรีศรีนครพิงค์เชียงใหม่" เป็นเมืองที่มีประวัติศาสตร์ยาวนานกว่า 700 ปี
                การก่อตั้ง: สถาปนาขึ้นโดย พญามังรายมหาราช เมื่อวันที่ 12 เมษายน พ.ศ. 1839 โดยได้รับความช่วยเหลือจากพญางำเมืองและพญาร่วง (พ่อขุนรามคำแหง)
                ชัยภูมิ: ตั้งอยู่บนลุ่มแม่น้ำปิง โดยมีดอยสุเทพเป็นปราการธรรมชาติ และมีคูเมืองรูปสี่เหลี่ยมเป็นเอกลักษณ์
                อัตลักษณ์: เป็นศูนย์กลางของอาณาจักรล้านนา มีความรุ่งเรืองด้านศิลปวัฒนธรรม ภาษา และสถาปัตยกรรมที่เป็นเอกลักษณ์เฉพาะตัว จนได้รับการขนานนามว่าเป็น "กุหลาบเหนือ"</p>
                <br><hr><br>
                <h2>โครงสร้างการบริหาร</h2><br>
                <p style="text-align: left;">การบริหารราชการส่วนภูมิภาค	แบ่งพื้นที่การปกครองออกเป็น 25 อำเภอ, 204 ตำบล และ 2,066 หมู่บ้าน โดยมีผู้ว่าราชการจังหวัดเป็นหัวหน้าส่วนราชการ
                การบริหารราชการส่วนท้องถิ่น	ประกอบด้วย องค์การบริหารส่วนจังหวัด (อบจ.), เทศบาลนครเชียงใหม่, เทศบาลเมือง, เทศบาลตำบล และองค์การบริหารส่วนตำบล (อบต.)
                ส่วนราชการส่วนกลาง	หน่วยงานจากกระทรวง ทบวง กรม ต่างๆ ที่มาตั้งสำนักงานตัวแทนอยู่ในจังหวัด</p><br>
                <hr>
                <br><h2>วิสัยทัศน์ และ พันธกิจ</h2><br>
                <p style="text-align: left;"><b>วิสัยทัศน์ (Vision):</b>
                "นครแห่งชีวิตและความมั่งคั่ง" (City of Life and Prosperity)
                หมายถึง เมืองที่ให้ความสุขแก่ผู้อยู่อาศัยและผู้มาเยือน และเป็นเมืองที่มีการเติบโตทางเศรษฐกิจอย่างยั่งยืน</p>
                <p style="text-align: left;"><b>พันธกิจ (Mission):</b>
                ทำนุบำรุงศิลปวัฒนธรรม: รักษาจารีตประเพณีและภูมิปัญญาท้องถิ่นให้คงอยู่
                พัฒนาการท่องเที่ยว: ส่งเสริมการท่องเที่ยวเชิงวัฒนธรรมและธรรมชาติให้เป็นระดับสากล
                จัดการทรัพยากร: อนุรักษ์ทรัพยากรธรรมชาติและสิ่งแวดล้อมอย่างมีส่วนร่วม
                ยกระดับคุณภาพชีวิต: เสริมสร้างความเข้มแข็งของชุมชนและเศรษฐกิจฐานรากตามหลักปรัชญาเศรษฐกิจพอเพียง</p><br><hr>
            </div>
            
        </section>
<div class="news_1">
    <section id="news" class="news_cmi">
        <h1 style="padding : 0px">ข่าวและประกาศ</h1> 
        <br><hr>
        
        <div class="news-container"> 
            <?php
                include 'db_connection.php';
                $sql = "SELECT * FROM `news` ORDER BY `news`.`date` DESC";
                $result = $conn->query($sql);
                
                if($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()){
            ?>
                <div class="news-card">
                    <div class="news-img" style="background-image: url('<?php echo $row['img']; ?>');"></div>
                    <div class="news-detail">
                        <h3><?php echo $row["title"]; ?></h3>
                        <p><?php echo $row["detail"]; ?></p>
                        <p>วันที่โพสต์: <?php echo $row["date"]; ?></p>
                    </div>
                </div>
            <?php
                    } // ปิด while
                } else {
                    echo "<p>ไม่มีข่าวในขณะนี้</p>";
                }
                $conn->close();
            ?>
        </div> </section>
</div>
        <hr>
        </section>
        </div>
        <section id="service" class="service_cmi">
            <div class="container-section">
            <h1>ศูนย์บริการประชาชน</h1>
            <h2 style=" margin-top: 10px;">ศูนย์ราชการจังหวัดเชียงใหม่</h2>
            <!-- <h4 style="font-size: 16px; margin-top: 10px;">ที่อยู่</h4>  -->
                <p style="font-size: 16px; margin-top: 20px;"> 
                   
                ที่อยู่ ถ.โชตนา ต.ช้างเผือก อ.เมือง จ.เชียงใหม่ 50300<br>
                เวลาเปิดทำการ : วันจันทร์-ศุกร์ (08.30-16.30 น.)<br>
                หน่วยงานภายใน: อาคารอำนวยการกลาง, สำนักงานส่งเสริมการปกครองท้องถิ่น <br>
                การบริการ: ให้บริการด้านเอกสาร ราชการ และข้อมูลภาครัฐ<br>
                โทรศัพท์: 053-112325-6 
            </p>
            </div>
            <br><hr>
        </section>
</body>
</html>
