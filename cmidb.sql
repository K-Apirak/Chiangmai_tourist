-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2026 at 01:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `detail`, `img`, `date`) VALUES
(28, '\"เลขเด็ดเชียงใหม่\" มาแล้ว แม่ค้าหวยไม่กั๊ก \"เลขดัง\" ขายดีประจำงวด 16/3/69', 'น.ส.พรรณี ลู่ปู่เงิน แม่ค้าขายลอตเตอรี่ย่านถนนเชียงใหม่ลำพูน อ.สารภี เชียงใหม่ เผยว่า หวยงวดนี้ขายดีต่อเนื่อง คนยังเลือกซื้อเลขนายกฯ อนุทิน กันต่อ คือเลข 28, 33, 37, 509, 59, 60 เลขวันสำคัญทางพุทธศาสนา มาฆบูชา 15 ค่ำ มีเลข 03, 05, 50, 250, 125, 330, 145 มีเลขศุกร์ 13 เดือนมีนาคม 2569 เป็นวันช้างไทยพอดี 31, 13, 331, 113, 134 เลขเชื้อพระวงศ์ 02, 05, 70, 71, 27, 402, 271, 471, 489, 905 มีเลขปฏิทินจีน 236, 637, 37, 67, 63 ก็ต้องลุ้นกันต่อ', 'https://static.thairath.co.th/media/dFQROr7oWzulq5Fa7HG8NBToFe7JlsIYZtAcpvW1UUAkpl8NktUVU2k2L8Qu2kTCok7.webp', '2026-03-14 08:49:39'),
(33, 'ศิษย์เก่า “MC 13” จัดประชุมสังสรรค์ประจำเดือนมีนาคม', 'วันศุกร์ที่ 13 มีนาคม พ.ศ. 2569 เวลา 18.00 น. ณ ร้านห้องอาหารโฮลอินวัน (Hole in One) ชั้น 2 ภายในสนามกอล์ฟลานนา จังหวัดเชียงใหม่ ดร.สุรพงษ์ ชุ่มประดิษฐ์ ประธานศิษย์เก่า MC 13 พร้อมด้วย นายมงคล เชาวน์ลักษณ์สกุล ประธานกองทุนศิษย์เก่า “MC 13” เป็นประธานร่วมในการประชุมหารือของคณะศิษย์เก่ารุ่น MC 13 โดยมีที่ปรึกษา คณะกรรมการกองทุน และสมาชิกศิษย์เก่ารุ่น 13 เข้าร่วมประชุมอย่างพร้อมเพรียง ท่ามกลางบรรยากาศแห่งมิตรภาพและความผูกพันของเพื่อนร่วมรุ่น', 'https://cdn.chiangmainews.co.th/wp-content/uploads/2026/03/14105856/1773460736_427215-chiangmainews.avif', '2026-03-14 12:08:20'),
(39, 'เคาะ EIA รถไฟทางคู่เด่นชัย – เชียงใหม่', 'วันที่ 12 มีนาคม นายสุชาติ ชมกลิ่น รองนายกรัฐมนตรีและรัฐมนตรีว่าการกระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม มอบหมายให้ ดร.รวีวรรณ ภูริเดช ปลัดกระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม เป็นประธานการประชุมคณะกรรมการสิ่งแวดล้อมแห่งชาติ ครั้งที่ 1/2569 โดยมีนางสาวปรีญาพร สุวรรณเกษ รองปลัดกระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม นายบรรณรักษ์ เสริมทอง เลขาธิการสำนักงานนโยบายและแผนทรัพยากรธรรมชาติและสิ่งแวดล้อม นายสุรินทร์ วรกิจธำรง อธิบดีกรมควบคุมมลพิษ พร้อมด้วยผู้แทนหน่วยงานที่เกี่ยวข้องและผู้ทรงคุณวุฒิเข้าร่วมประชุมอย่างพร้อมเพรียง ณ ห้องประชุม 301 ตึกบัญชาการ 1 ทำเนียบรัฐบาล', 'https://cdn.chiangmainews.co.th/wp-content/uploads/2026/03/14101434/1773458074_273959-chiangmainews.avif', '2026-03-15 14:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` enum('Mountain','Temple','Shopping','Family') DEFAULT NULL,
  `description` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `category`, `description`, `location`, `img`) VALUES
(1, 'ดอยอินทนนท์', 'Mountain', 'เวลาเปิด-ปิด: อุทยานฯ เปิดให้บริการตั้งแต่เวลา 05:00 - 16:00 น.\nสภาพอากาศ: อุณหภูมิเฉลี่ยบนยอดดอยมักจะต่ำกว่าพื้นที่พื้นราบอย่างมาก ในช่วงหน้าหนาวอุณหภูมิอาจลดลงต่ำกว่า 0 องศาเซลเซียส จนเกิด \"เหมยขาบ\" (น้ำค้างแข็ง)\nการเดินทาง: อยู่ห่างจากตัวเมืองเชียงใหม่ประมาณ 90 กิโลเมตร สามารถเดินทางไปได้โดยรถยนต์ส่วนตัวหรือรถสองแถวเหลืองสายจอมทอง', 'ตำบลบ้านหลวง อำเภอจอมทอง จังหวัดเชียงใหม่', 'https://image-tc.galaxy.tf/wijpeg-sxrfid5inslt46adwg0pwpho/intanon_standard.jpg?crop=112%2C0%2C1777%2C1333'),
(2, 'ม่อนแจ่ม', 'Mountain', 'เดินทางสะดวก วิวสวนดอกไม้และที่พักวิวภูเขาอลังการ', 'อ.แม่ริม', 'https://lh3.googleusercontent.com/gps-cs-s/AHVAwep2diw3v-KRRKtZrtALiTE4yh-3ue5r9KFwv3bFe7czLVyq24fWR87Fhs9-t5kA_QbOCbzMymw2g6Rsb05oHQykUEarioBOf0tkUPn_aCKBMbW8t1ojvj70pGEsiIZVo3KSbTbJI7WSniGJ=s1360-w1360-h1020-rw'),
(3, 'ดอยอ่างขาง', 'Mountain', 'สถานีเกษตรหลวง สัมผัสอากาศหนาวและชมซากุระเมืองไทย', 'อ.ฝาง', 'https://s359.kapook.com/pagebuilder/433ab354-5b86-4f1b-b1a7-f1cf76eb3671.jpg'),
(4, 'วัดพระธาตุดอยสุเทพราชวรวิหาร', 'Temple', 'พระธาตุคู่บ้านคู่เมือง สวยงามด้วยเจดีย์สีทอง บนยอดดอยสุเทพ ทรูไอดี', 'ตำบลสุเทพ อำเภอเมืองเชียงใหม่ เชียงใหม่ 50200', 'https://upload.wikimedia.org/wikipedia/commons/c/c1/Wat_Phra_That_Doi_Suthep_%28I%29.jpg'),
(5, 'เซ็นทรัล เชียงใหม่', 'Shopping', 'ศูนย์การค้าที่ใหญ่ที่สุดในภาคเหนือ ตั้งอยู่บนถนนซูเปอร์ไฮเวย์เชียงใหม่-ลำปาง เป็นแลนด์มาร์กสำคัญที่ผสมผสานไลฟ์สไตล์การช้อปปิ้ง แบรนด์ชั้นนำ ร้านอาหารหลากหลาย และกิจกรรมอีเว้นท์ระดับประเทศอย่างครบวงจร โดดเด่นด้วยการออกแบบที่สวยงามและเป็นศูนย์กลางความบันเทิงในจังหวัด', '99 99/1 -99/2 หมู่ที่ 4 ถ. ซุปเปอร์ไฮเวย์ เชียงใหม่-ลำปาง ตำบล ฟ้าฮ่าม อำเภอเมืองเชียงใหม่ เชียงใหม่ 50000', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2c/f1/0a/c1/exterior-1.jpg?w=500&h=500&s=1'),
(6, 'สวนพฤกษศาสตร์ทวีชล', 'Family', 'สวนพฤกษศาสตร์ทวีชล เชียงใหม่ เป็นศูนย์รวมพันธุ์ไม้หายากนานาชนิดมาไว้ที่นี่ แบ่งเป็น 4 โซน ได้แก่ ศูนย​์รวมพันธุ์ไม้, สวนไม้ดัด, สวนสัตว์ และพิพิธภัณฑ์จัดแสดง ที่นี่เป็นทั้งแหล่งการเรียนรู้และที่พักผ่อนหย่อนใจสำหรับเดินเล่นและออกกำลังกาย', 'อำเภอดอยสะเก็ด จังหวัดเชียงใหม่', 'https://img.wongnai.com/p/1920x0/2018/09/18/dcf2576b27144f9a88467d887f578b7c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(28, 'admin', '123', 'admin'),
(29, 'user', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
