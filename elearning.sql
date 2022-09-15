-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 04:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(255) NOT NULL COMMENT 'รหัสผู้ดูแลระบบ',
  `username` varchar(255) NOT NULL COMMENT 'ชื่อผู้ใช้',
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'รหัสผ่าน',
  `prefix` varchar(255) NOT NULL COMMENT 'คำนำหน้าชื่อ',
  `admin_name` varchar(255) NOT NULL COMMENT 'ชื่อ',
  `admin_surname` varchar(255) NOT NULL COMMENT 'นามสกุล',
  `license` varchar(255) NOT NULL COMMENT 'สิทธิการใช้งาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `password`, `prefix`, `admin_name`, `admin_surname`, `license`) VALUES
(1, 'admin', '$2y$10$Op0PhEK5Im3eITLJNnKaPOlUJ0vOOvBrvYS9W6SIbxwcUVXt19e8e', 'นาย', 'admin', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `lesson_id` int(255) NOT NULL COMMENT 'บทเรียนที่',
  `lesson_name` varchar(255) NOT NULL COMMENT 'ชื่อบทเรียน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`lesson_id`, `lesson_name`) VALUES
(1, 'จำนวนนับไม่เกิน 100,000'),
(2, 'การบวกและการลบจำนวนไม่เกิน 100,000'),
(3, 'เวลา'),
(4, 'รูปเลขาคณิต'),
(5, 'แผนภูมิรูปภาพและตารางทางเดียว'),
(6, 'เศษส่วน'),
(7, 'การคูณ');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(255) NOT NULL COMMENT 'รหัสนักเรียน',
  `username` varchar(255) NOT NULL COMMENT 'ชื่อผู้ใช้',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสผ่าน',
  `prefix` varchar(255) NOT NULL COMMENT 'คำนำหน้าชื่อ',
  `student_name` varchar(255) NOT NULL COMMENT 'ชื่อ',
  `student_surname` varchar(255) NOT NULL COMMENT 'นามสกุล',
  `license` varchar(255) NOT NULL COMMENT 'สิทธิการใช้งาน   '
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `username`, `password`, `prefix`, `student_name`, `student_surname`, `license`) VALUES
(1, 'kan2564', '$2y$10$wHNHul7vX3ViX2uPBcd0WO4KmJ28xbLESXZpaChTkguEI6PUIKKBy', 'เด็กหญิง', 'กานต์ ', '-', 'Student'),
(2, 'Sorasak2564', '$2y$10$Szr34RnwLsVy2HHAV4TIDO75BSs7kqop8Jnt2IFzOqp9ErMkk8v3S', 'เด็กชาย', 'ศรศักดิ์ ', 'คุ้มหรั่ง', 'Student'),
(3, 'thaiyakorn2564', '$2y$10$gS5O8nPotzYULfvv09xSjOIgQm5y9vR64hhnH8mtVI/woo9UASmHO', 'เด็กชาย', 'ไทยกรณ์', '-', 'Student'),
(4, 'Nadech2564', '$2y$10$VUNvIiP7VdaByok5trQut.vNmf1bssFhmMrtbh19x6rtC7zXFNRzi', 'เด็กชาย', 'ณเดช', '-', 'Student'),
(5, 'chnudom2564', '$2y$10$EiPfnA8BplRhjLvXgK09YOzBiQA3SWlJgVBp9B5np8iYzDGHlz8I.', 'เด็กชาย', 'ชนุดม', 'ศรีสุข', 'Student'),
(6, 'jaturonk2564', '$2y$10$1X4XbBPefPKoj3iCu3h.8.u5vlJdbJGAMjSoJTgggiPGnfojMvpse', 'เด็กชาย', 'จัตุรงค์ ', 'นาคน้อย', 'Student'),
(7, 'peerapat2564', '$2y$10$t3qeZCukVBbt2eIM.PtDrux7EgieVxJcNCs8Q6bFQ.Z06GzQCwyFO', 'เด็กชาย', 'พีรวัฒน์', 'แก้วกัน', 'Student'),
(8, 'tawatchai2564', '$2y$10$PBKRxBA60DnwHlGogicBHOAAAzbxY2d/JDUPjqLWG2gzA9KwqjN5y', 'เด็กชาย', 'ธวัฒน์ชัย', 'โคตรรัตน์', 'Student'),
(9, 'kamporn2564', '$2y$10$iXFgv/HoJqwNGUtG1cHFbOCeQ9kYY2i2pE6ikUShdrfTva6pQwK3G', 'เด็กชาย', 'กำพร', 'บุดสดี', 'Student'),
(10, 'vayu2564', '$2y$10$OudiW2AMP/fxeZNz3EybGeyyY91405nQSWTV1g7vlMLYLh5EKIJCe', 'เด็กชาย', 'วายุ', 'แรงจริง', 'Student'),
(11, 'thanikanut2564', '$2y$10$/6.riPzadzers8ZbkO.ss.4tcjSf/17qHf/4bOornb4KGS98G1cw.', 'เด็กหญิง', 'ฐานิกานุช', 'กระโห้ทอง', 'Student'),
(12, 'natnaree2564', '$2y$10$KRtnHdLLV8EfkmEiWf2wCu16QRsC0Aa9x9mrDpklZ3exI0wUUUUse', 'เด็กหญิง', 'ณัฐนรี', 'ทองคำ', 'Student'),
(13, 'natthanicha2564', '$2y$10$jOG6E/J3EeJOoRTP8Ae0s.Zte/BgrraYcBIm0YUXZaz38ILFnAoRC', 'เด็กหญิง', 'ณัฏฐณิชา', 'ทองคำ', 'Student'),
(14, 'chanika2564', '$2y$10$JWB/gjgp4wXgxG1wCCUIMOe5/FmA4NzYbn9Xone4k.3gIkFDb7r1i', 'เด็กหญิง', 'ฌาณิกา', 'สังผัน', 'Student'),
(15, 'wirinchatr2564', '$2y$10$qABXP65ue0ugUC6mURP6TelUrUU47VED5R3pmr3c7uk76PBWci7Bi', 'เด็กหญิง', 'วิริญฉัตร ', 'สุวรรณ', 'Student'),
(16, 'thararin2564', '$2y$10$fBkHvWUT5i7oTkYlhZQlPePkO49BgjXhToCY/5J0CoyPcPtGtM1.C', 'เด็กหญิง', 'ธารารินทร์', 'กาแก้ว', 'Student'),
(17, 'thasniya2564', '$2y$10$NWDR6ss1G10CRJS1zbHxz.Ub1OYoFnVmItyM2ZbaUQAb.JLQuGtmy', 'เด็กหญิง', 'ทัศนียา', 'จันลาศรี', 'Student'),
(18, 'natnicha2564', '$2y$10$4F7od6N1hTKubzg9ZdrWMeHMYI5i5EMDlcntyvosyIDzAnNfze646', 'เด็กหญิง', 'ณัฐณิชา', 'แสงสว่าง', 'Student'),
(19, 'nitcharmon2564', '$2y$10$Mzb5ptPEg3rder5NEsY20eiKVq2YdszzaXC9j5vdeXiyDnqS34kty', 'เด็กหญิง', 'ณิชมน', 'ขำวงษ์', 'Student'),
(20, 'natyada2564', '$2y$10$YpOeMfDy2Y4I7J66ePexBO0ZE3OVljwZqmfODS5w1spJO48Cf9PIu', 'เด็กหญิง', 'ณัฐญาดา ', 'โคตรรัตน์', 'Student'),
(21, 'thanyarak2564', '$2y$10$toyR8ykHQhOQBR9xKmj.eustkuF9gKY2AoE1SteDWAUrsPhamY9K6', 'เด็กหญิง', 'ธัญญาลักษ์', 'พรหมมา', 'Student'),
(22, 'phearwa2564', '$2y$10$OCiDPY6faKJ7o3bZdTQoRe8tbsK696Xl2Sr4WPJnMHkYvOG7sAErW', 'เด็กหญิง', 'แพรวา', 'แหล่งสนาม', 'Student'),
(23, 'alice2564', '$2y$10$4c5kdtRx9Hs9lfLl1RDHzOoCMtmkhvLUHnBa5MdGjN6CVoMksderm', 'เด็กหญิง', 'อลิช ', 'เนเลอร์', 'Student'),
(24, 'narokkamon2564', '$2y$10$1FF1fh/hcbwI9jJxKxc14.gKYEzOzQ5PucEYejKXcPW0bAw5H6up2', 'เด็กหญิง', 'นรกมล', 'กาสังข์', 'Student'),
(25, 'sarocha2564', '$2y$10$QNQnbhQn7VIDD4yMknd09uykAuDRO3pH33PLswmlhiSC9m.DbHCA6', 'เด็กหญิง', 'สโรชา', 'พุทธระ', 'Student'),
(26, 'karntiphak2564', '$2y$10$9b9j2ZFKu.qBop2qIcEcSOX8bRqFTHP8SEjEIUeP3VPtaMN3DCOyK', 'เด็กหญิง', 'กานติภัค', 'มั่นสนาม', 'Student'),
(27, 'sitkawin2564', '$2y$10$BaHmgNli5QXw8JYKb95jKuHP.DzX9oJwSl0PeuEiZXNlAVgYqWQ8y', 'เด็กชาย', 'สิทธิ์กวิน', 'ตรัยชัยศักดิ์', 'Student'),
(28, 'chinnawat2564', '$2y$10$gvSB0O2hU8kERDZRca8VM.E3kXftv2NT0Ogd2ZY9g6.gDkDruDtDC', 'เด็กชาย', 'ชิณณวรรธน์', 'สมท่า', 'Student'),
(29, 'suphaphon2564', '$2y$10$gWvuN7eA7ngANC6hH3J8fOY9r7ZVBSZI3c0clx6HsNIEjo1NBTFlO', 'เด็กหญิง', 'สุภาพร', 'แซ่อึง', 'Student'),
(30, 'nahoa2564', '$2y$10$m006U038QA5HIw6D9qTPbOwNcVj3OpAqJENWs8ZAs55GJSjx4BZKe', 'เด็กหญิง', 'นาโฮะ', 'อะโอยาม่า', 'Student'),
(31, 'thanwa2564', '$2y$10$ImX8mwho/MYc8e5qDrsX0.8uWbccyiwp83JU2RY9SroniEFUpTDz2', 'เด็กชาย', 'ธันวา', 'แก้วพิลา', 'Student'),
(32, 'tonkha2564', '$2y$10$GmrhPwAxhauZlrBgcyaRVuuFZPRt2mlHA1Af4uEsQgOjBJe9KT35m', 'เด็กชาย', 'ต้นกล้า', 'คำจ้อย', 'Student'),
(33, 'pechaya2564', '$2y$10$EMyM5H/QExzdQ.ZhCcjCPeHQbofS/DgrL.53oa45LQzRjplVazBWK', 'เด็กหญิง', 'พีชญา', 'สิทธิพา', 'Student'),
(34, 'suphakorn2564', '$2y$10$GEEfiDN4RH.faTnrReoKLeMK391q0ktgIjkMB/tyjZzoI/OkPpBQe', 'เด็กชาย', 'ศุภากร', 'ช้างเจริญ', 'Student'),
(35, 'thanwa22564', '$2y$10$hUfOUJPyXXsPm9PmAeHRE.gkCfktTijjGePuA3dS3M2WoAu5Lfbdm', 'เด็กชาย', 'ธันวา   ', '-', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(255) NOT NULL COMMENT 'รหัสอาจารย์',
  `username` varchar(255) NOT NULL COMMENT 'ชื่อผู้ใช้',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสผ่าน',
  `prefix` varchar(255) NOT NULL COMMENT 'คำนำหน้าชื่อ',
  `teacher_name` varchar(255) NOT NULL COMMENT 'ชื่อ',
  `teacher_surname` varchar(255) NOT NULL COMMENT 'นามสกุล',
  `license` varchar(255) NOT NULL COMMENT 'สิทธิการใช้งาน   '
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `username`, `password`, `prefix`, `teacher_name`, `teacher_surname`, `license`) VALUES
(1, 'teachersomnuk', '$2y$10$ZtuKpC9ZeMki03ePdpX2POYdw2bPGxd3mugnevsCY50HTboP3qPQ6', 'นาง', 'สมนึก', 'ดิเรกศรี', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topic_id` int(11) NOT NULL COMMENT 'รหัสหัวข้อ',
  `topic_name` varchar(255) NOT NULL COMMENT 'ชื่อหัวข้อ',
  `content` longtext NOT NULL COMMENT 'เนื้อหา',
  `lesson_id` int(255) NOT NULL COMMENT 'บทที่',
  `image` varchar(255) NOT NULL COMMENT 'รูปภาพ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_id`, `topic_name`, `content`, `lesson_id`, `image`) VALUES
(1, 'ความหมายของ \"จำนวนนับไม่เกิน 100,000\"', 'จำนวนนับไม่เกิน 100,000 คือ จำนวนตัวเลขที่มีไม่เกิน 5 หลัก นั่นคือ จำนวนตัวเลขที่ไม่เกิน 99,999 หรือจำนวนตัวเลขที่ไม่เกินหลักหมื่น\r\nเป็นจำนวนที่ประกอบด้วยหลักหน่วย  หลักสิบ  หลักร้อย  หลักพัน  และหลักหมื่นที่สามารถเขียนแทนด้วยตัวเลข ฮินดูอารบิก  ตัวเลขไทย \r\nและตัวหนังสือ การเขียนจำนวนนับไม่เกิน 100,000 จะใส่เครื่องหมายจุลภาค (,) ทุกช่วงสามตำแหน่งของจำนวนโดยนับจากหลักหน่วยมา\r\nทางซ้ายมือสามารถอ่านและเขียนตัวเลขฮินดูอารบิก ตัวเลขไทยและตัวหนังสือแสดงจำนวนได้ ', 1, 'ความหมาย-01.jpg'),
(2, 'ตัวอย่างที่ลูกคิดที่ 1', '24,135 อ่านว่า สองหมื่นสี่พันหนึ่งร้อยสามสิบห้า เขียนเป็นเลขไทย  ๒๔,๑๓๕', 1, '1.24,135-01.jpg'),
(3, 'ตัวอย่างที่ลูกคิดที่ 2', '43,161   อ่านว่า  สี่หมื่นสามพันหนึ่งร้อยหกสิบเอ็ด เขียนเป็นเลขไทย  ๔๓,๑๖๑', 1, '2. 43,161-01.jpg'),
(4, 'ตัวอย่างที่ลูกคิดที่ 3', '32,720  อ่านว่า  สามหมื่นสองพันเจ็ดร้อยยี่สิบ เขียนเป็นเลขไทย  ๓๒,๗๒๐', 1, '3. 32,720-01.jpg'),
(5, 'ตัวอย่างที่ลูกคิดที่ 4', '13,240  อ่านว่า  หนึ่งหมื่นสามพันสองร้อยสี่สิบ   เขียนเป็นเลขไทย  ๑๓,๒๔๐', 1, '4. 13,240-01.jpg'),
(6, 'ตัวอย่างที่ลูกคิดที่ 5', '53,223  อ่านว่า  ห้าหมื่นสามพันสองร้อยยี่สิบสาม   เขียนเป็นเลขไทย  ๕๓,๒๒๓', 1, '5. 53,223-01-01.jpg'),
(7, 'การบวก ', '          การบวกจำนวนที่มีหลายหลัก ผลบวกหาได้จากการนำจำนวนที่อยู่ในหลักเดียวกันบวกกัน เมื่อผลบวกในหลักใดได้เป็นสองหลักให้ทด\r\nจำนวนในหลักสิบ ไปรวมกับผลบวกในหลักถัดไปทางซ้ายมือ จำนวนสองจำนวนที่นำมาบวกกัน สามารถสลับที่กันได้ โดยที่ผลบวกยังคงเดิม \r\nการบวกจำนวนสามจำนวนอาจหาผลบวก ของสองจำนวนแรกก่อน แล้วบวกกับจำนวนที่สาม หรือบวกทีละสามจำนวนก็ได้ \r\n          กระบวนการแก้โจทย์ปัญหา คือ ทำความเข้าใจโจทย์ วางแผน  ลงมือทำ ตรวจสอบ ใช้ในการแก้โจทย์ปัญหาการบวกได้ นักเรียน\r\nสามารถนำความรู้นี้ไปใช้แก้โจทย์ปัญหาการบวกจำนวนต่าง ๆ ในชีวิตประจำวันได้', 2, '1.การบวก-01.jpg'),
(8, 'การลบ', '          การลบจำนวนสองจำนวน เป็นการหักออกจากจำนวนหนึ่งแล้วหาจำนวนที่เหลือ การลบจำนวนที่มีหลายหลัก ทำได้โดยลบเลขโดดใน\r\nหลักเดียวกันเมื่อเลขโดดในหลักใดของตัวตั้งน้อยกว่าตัวลบให้กระจายตัวตั้งจากหลักที่อยู่ถัดไปทางซ้ายมือมารวมกับตัวตั้งเดิมแล้วจึงลบกัน \r\nการบวกและการลบมีความสัมพันธ์กันโดยผลลบของจำนวนสองจำนวนใด ๆ เมื่อรวมกับตัวลบจะมีค่าเท่ากับตัวตั้ง \r\n          กระบวนการแก้โจทย์ปัญหา 4 ขั้นคือ ทำความเข้าใจโจทย์ วางแผน ลงมือทำ และตรวจสอบใช้ในการแก้โจทย์ปัญหาการลบ และโจทย์\r\nปัญหาการบวกลบได้การสร้างโจทย์ปัญหาเกี่ยวกับการบวกและการลบต้องสร้างให้มีข้อมูลเพียงพอที่จะหาคำตอบและสิ่งที่ถามต้องมีความชัดเจน', 2, '2.การลบ-01.jpg'),
(9, 'ตัวอย่างการบวกที่ 1 การบวกจำนวนไม่เกิน 100,000', '          ร้านขายหุ่นยนต์สาขาที่ 1 ขายหุ่นยนต์ได้ 45,230 บาท ร้านขายหุ่นยนต์สาขาที่ 2 ขายหุ่นยนต์ได้ 34,153 บาท เมื่อนำยอดเงินที่ขาย\r\nหุ่นยนต์ทั้ง 2 สาขามารวมกันจะได้เท่าไร ?\r\n          นำยอดเงินร้านขายหุ่นยนต์ทั้ง 2 สาขามาทำการ \"บวก\" 45,230 + 34,153 = 79,383 บาท ', 2, 'ตัวอย่างการบวกที่ 1 การบวกจำนวนไม่เกิน 100,000.jpg'),
(10, 'ตัวอย่างการบวกที่ 2 การบวกจำนวนไม่เกิน 100,000', '          คุณพ่อไปซื้อจักรยานราคา 25,335 บาท และซื้อจักรยานให้ลูกเพิ่มอีก 1,153 บาท คุณพ่อต้องจ่ายเงินให้ร้านจักรยานเป็นจำนวนเท่าไร ?\r\nนำยอดเงินที่ซื้อจักรยานมาทำการ \"บวก\" 25,335 + 1,153 = 26,888 บาท ', 2, 'ตัวอย่างการบวกที่ 2 การบวกจำนวนไม่เกิน 100,000-01.jpg'),
(11, 'ตัวอย่างการบวกที่ 3 การบวกจำนวนไม่เกิน 100,000', '          คุณแม่ซื้อวัตถุดิที่ตลาดนัดมี กุ้ง หอย ปู ปลา เพื่อมาทำอาหารราคา 1,222 บาท และซื้ออาหารให้ลูกมี อาหารเช้า ขนม เป็นราคา 765 บาท\r\nคุณแม่มีรายจ่ายทั้งหมดเท่าไร ?\r\n          นำยอดเงินรายจ่ายทำการ \"บวก\" 1,222 + 765 = 1,987 บาท ', 2, 'ตัวอย่างการบวกที่ 3 การบวกจำนวนไม่เกิน 100,000-01.jpg'),
(12, 'ตัวอย่างการลบที่ 1 การลบจำนวนไม่เกิน 100,000', '          ลุงข้างบ้านจะซื้อมอเตอร์ไซค์ราคา 35,658 บาท ตอนนี้มีเงินเก็บอยู่ 15,423 บาท ลุงข้างบ้านต้องมีเงินอีกเท่าไรถึงจะซื้อ\r\nมอเตอร์ไซค์ได้ ?\r\n          นำราคารถมอเตอร์ไซค์มาทำการ \"ลบ\" กับเงินเก็บของลุงข้างบ้าน 35,658 - 15,423 = 20,235 บาท', 2, 'ตัวอย่างการลบที่ 1 การลบจำนวนไม่เกิน 100,000.jpg'),
(13, 'ตัวอย่างการลบที่ 2 การลบจำนวนไม่เกิน 100,000', '          ป้าข้างบ้านได้เงินเดือน 35,465 บาท จ่ายค่าไฟบ้าน 4,314 บาท ป้าข้างบ้านเหลือเงินเท่าไร ?\r\nนำเงินเดือนมาทำการ \"ลบ\" กับค่าไฟบ้าน 35,465 - 4,314 = 31,151 บาท ', 2, 'ตัวอย่างการลบที่ 2 การลบจำนวนไม่เกิน 100,000.jpg'),
(14, 'ตัวอย่างการลบที่ 3 การลบจำนวนไม่เกิน 100,000', '          พี่ชายจะซื้อโทรศัพท์สมาร์ทโฟนราคา 43,596 บาท มีเงินอยู่ 11,253 บาท พี่ชายต้องไปขอเงินพี่สาวเท่าไรถึงจะซื้อโทรศัพท์\r\nสมาร์ทโฟนได้ ?\r\n          นำราคาโทรศัพท์สมาร์ทโฟนมาทำการ \"ลบ\" กับเงินเก็บของพี่ชาย 43,596 - 11,253 = 32,343 บาท ', 2, 'ตัวอย่างการลบที่ 3 การลบจำนวนไม่เกิน 100,000.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL COMMENT 'รหัสผู้ใช้',
  `user` varchar(255) NOT NULL COMMENT 'ชื่อผู้ใช้',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสผ่าน',
  `license` varchar(255) NOT NULL COMMENT 'สิทธิการใช้งาน',
  `user_name` varchar(255) NOT NULL COMMENT 'ชื่อ',
  `user_surname` varchar(255) NOT NULL COMMENT 'นามสกุล'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user`, `password`, `license`, `user_name`, `user_surname`) VALUES
(1, 'bunyarit', '$2y$10$guYBtwK8a6xx7YZowtOefeTuO3R6iW5sSoS.TIhG6u/Rc/4ieD2Rq', 'Admin', 'บุญฤทธิ์', 'สิงห์โต'),
(2, 'Artid', '$2y$10$OGhDaIWH/9nA96nfPlWsvuwXfQG8X0k7/7yamcRxjSbB3ZrUpkv6q', 'Admin', 'อาทิตย์', 'ดิเรกศรี');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT COMMENT 'รหัสผู้ดูแลระบบ', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `lesson_id` int(255) NOT NULL AUTO_INCREMENT COMMENT 'บทเรียนที่', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(255) NOT NULL AUTO_INCREMENT COMMENT 'รหัสนักเรียน', AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(255) NOT NULL AUTO_INCREMENT COMMENT 'รหัสอาจารย์', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสหัวข้อ', AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT COMMENT 'รหัสผู้ใช้', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
