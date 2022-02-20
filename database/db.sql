-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_edukasi_florafauna
CREATE DATABASE IF NOT EXISTS `db_edukasi_florafauna` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_edukasi_florafauna`;

-- Dumping structure for table db_edukasi_florafauna.links
CREATE TABLE IF NOT EXISTS `links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `facebook` varchar(40) DEFAULT NULL,
  `twitter` varchar(40) DEFAULT NULL,
  `comments_script` text,
  `sharing_script` text,
  `javascript` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table db_edukasi_florafauna.links: ~1 rows (approximately)
/*!40000 ALTER TABLE `links` DISABLE KEYS */;
INSERT INTO `links` (`id`, `facebook`, `twitter`, `comments_script`, `sharing_script`, `javascript`) VALUES
	(1, 'http://www.facebook.com', 'http://www.twitter.com', '<div class="fb-comments container" data-href="http://www.uoecu.org/newsview.php?id=<?php echo $row[\'id\'];?>" data-numposts="10" width="100%"></div>', '<div class="addthis_sharing_toolbox"></div>', '<script>(function(d, s, id) {\r\n		var js, fjs = d.getElementsByTagName(s)[0];\r\n		if (d.getElementById(id)) return;\r\n		js = d.createElement(s); js.id = id;\r\n		js.src = \'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=298807240601869\';\r\n		fjs.parentNode.insertBefore(js, fjs);\r\n	}(document, \'script\', \'facebook-jssdk\'));</script>\r\n<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57587edcb1479678"></script>');
/*!40000 ALTER TABLE `links` ENABLE KEYS */;

-- Dumping structure for table db_edukasi_florafauna.modul
CREATE TABLE IF NOT EXISTS `modul` (
  `id_modul` int(5) NOT NULL AUTO_INCREMENT,
  `isi_modul` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_modul`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_edukasi_florafauna.modul: 3 rows
/*!40000 ALTER TABLE `modul` DISABLE KEYS */;
INSERT INTO `modul` (`id_modul`, `isi_modul`, `gambar`) VALUES
	(1, '<p>Halaman web yang Anda saksikan ini adalah sebuah aplikasi untuk \npengerjaan ujian secara online. Sistem ini hanya bisa diakses ketika \nAnda telah melakukan LOGIN. LOGIN ditandai dengan pengisian ID peserta \ndan password pada sebuah kotak login yang telah ditentukan. Ringkasnya \nhanya peserta yang telah terdaftar yang bisa mengikuti ujian online ini.</p>\n		<br><p>Jika Anda telah sukses dalam proses login, anda bisa mengisi \njawaban dalam setiap tes atau soal yang ada. Tapi jangan lupa baca \ndengan seksama beberapa peraturan yang harus Anda taati dan setujui \nsebelum pengerjaan soal. Pengerjaan soal-soal ujian online ini dibatasi \ndengan waktu ... Lho koq bisa. (Ya...bisa). Jadi Anda perhatikan dengan \nbaik soal-soal Anda, jawab dengan sejujurnya, dan jangan lupa perhatikan\n sisa waktu Anda mengerjakan. Kerjakan soal yang mudah-mudah lewati \nsoal-soal yang Anda anggap sulit. Karena soal yang sudah dikerjakan bisa\n dibenarkan atau diedit atau diulangi kembali, dengan catatan Anda masih\n punya sisa waktu yang cukup untuk mengerjakan.Jangan terburu-buru \nmengerjakannya, usahakan manfaatkan waktu Anda sebaik-baiknya.</p>\n		<br><p>Setelah Anda selesai mengerjakan.... Anda bisa melihat langsung\n jawaban Anda (Asyik donk ...). Yang jelas jangan berdebar-debar. Apapun\n hasilnya itulah kemampuan Anda. Oleh sebab itu bertindaklah yang jujur.</p>', 'kartun-computer.jpg'),
	(2, '<!--[if gte mso 9]><xml>\n <w:WordDocument>\n  <w:View>Normal</w:View>\n  <w:Zoom>0</w:Zoom>\n  <w:TrackMoves/>\n  <w:TrackFormatting/>\n  <w:PunctuationKerning/>\n  <w:ValidateAgainstSchemas/>\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\n  <w:DoNotPromoteQF/>\n  <w:LidThemeOther>IN</w:LidThemeOther>\n  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\n  <w:Compatibility>\n   <w:BreakWrappedTables/>\n   <w:SnapToGridInCell/>\n   <w:WrapTextWithPunct/>\n   <w:UseAsianBreakRules/>\n   <w:DontGrowAutofit/>\n   <w:SplitPgBreakAndParaMark/>\n   <w:DontVertAlignCellWithSp/>\n   <w:DontBreakConstrainedForcedTables/>\n   <w:DontVertAlignInTxbx/>\n   <w:Word11KerningPairs/>\n   <w:CachedColBalance/>\n  </w:Compatibility>\n  <m:mathPr>\n   <m:mathFont m:val="Cambria Math"/>\n   <m:brkBin m:val="before"/>\n   <m:brkBinSub m:val="--"/>\n   <m:smallFrac m:val="off"/>\n   <m:dispDef/>\n   <m:lMargin m:val="0"/>\n   <m:rMargin m:val="0"/>\n   <m:defJc m:val="centerGroup"/>\n   <m:wrapIndent m:val="1440"/>\n   <m:intLim m:val="subSup"/>\n   <m:naryLim m:val="undOvr"/>\n  </m:mathPr></w:WordDocument>\n</xml><![endif]--><!--[if gte mso 9]><xml>\n <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"\n  DefSemiHidden="true" DefQFormat="false" DefPriority="99"\n  LatentStyleCount="267">\n  <w:LsdException Locked="false" Priority="0" SemiHidden="false"\n   UnhideWhenUsed="false" QFormat="true" Name="Normal"/>\n  <w:LsdException Locked="false" Priority="9" SemiHidden="false"\n   UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>\n  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>\n  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>\n  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>\n  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>\n  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>\n  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>\n  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>\n  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>\n  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>\n  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>\n  <w:LsdException Locked="false" Priority="10" SemiHidden="false"\n   UnhideWhenUsed="false" QFormat="true" Name="Title"/>\n  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>\n  <w:LsdException Locked="false" Priority="11" SemiHidden="false"\n   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>\n  <w:LsdException Locked="false" Priority="22" SemiHidden="false"\n   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>\n  <w:LsdException Locked="false" Priority="20" SemiHidden="false"\n   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>\n  <w:LsdException Locked="false" Priority="59" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Table Grid"/>\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>\n  <w:LsdException Locked="false" Priority="1" SemiHidden="false"\n   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light Shading"/>\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light List"/>\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light Grid"/>\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Shading 1"/>\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Shading 2"/>\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium List 1"/>\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium List 2"/>\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 1"/>\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 2"/>\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 3"/>\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Dark List"/>\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful Shading"/>\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful List"/>\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful Grid"/>\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light List Accent 1"/>\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>\n  <w:LsdException Locked="false" Priority="34" SemiHidden="false"\n   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>\n  <w:LsdException Locked="false" Priority="29" SemiHidden="false"\n   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>\n  <w:LsdException Locked="false" Priority="30" SemiHidden="false"\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Dark List Accent 1"/>\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light List Accent 2"/>\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Dark List Accent 2"/>\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful List Accent 2"/>\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light Shading Accent 3"/>\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light List Accent 3"/>\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light Grid Accent 3"/>\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Dark List Accent 3"/>\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful List Accent 3"/>\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light Shading Accent 4"/>\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light List Accent 4"/>\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light Grid Accent 4"/>\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Dark List Accent 4"/>\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful List Accent 4"/>\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light Shading Accent 5"/>\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light List Accent 5"/>\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light Grid Accent 5"/>\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Dark List Accent 5"/>\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful List Accent 5"/>\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light Shading Accent 6"/>\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light List Accent 6"/>\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Light Grid Accent 6"/>\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Dark List Accent 6"/>\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful List Accent 6"/>\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>\n  <w:LsdException Locked="false" Priority="19" SemiHidden="false"\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>\n  <w:LsdException Locked="false" Priority="21" SemiHidden="false"\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>\n  <w:LsdException Locked="false" Priority="31" SemiHidden="false"\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>\n  <w:LsdException Locked="false" Priority="32" SemiHidden="false"\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>\n  <w:LsdException Locked="false" Priority="33" SemiHidden="false"\n   UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>\n  <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>\n  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>\n </w:LatentStyles>\n</xml><![endif]--><!--[if gte mso 10]>\n<style>\n /* Style Definitions */\n table.MsoNormalTable\n	{mso-style-name:"Table Normal";\n	mso-tstyle-rowband-size:0;\n	mso-tstyle-colband-size:0;\n	mso-style-noshow:yes;\n	mso-style-priority:99;\n	mso-style-qformat:yes;\n	mso-style-parent:"";\n	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;\n	mso-para-margin-top:0cm;\n	mso-para-margin-right:0cm;\n	mso-para-margin-bottom:10.0pt;\n	mso-para-margin-left:0cm;\n	line-height:115%;\n	mso-pagination:widow-orphan;\n	font-size:11.0pt;\n	font-family:"Calibri","sans-serif";\n	mso-ascii-font-family:Calibri;\n	mso-ascii-theme-font:minor-latin;\n	mso-fareast-font-family:"Times New Roman";\n	mso-fareast-theme-font:minor-fareast;\n	mso-hansi-font-family:Calibri;\n	mso-hansi-theme-font:minor-latin;\n	mso-bidi-font-family:"Times New Roman";\n	mso-bidi-theme-font:minor-bidi;}\n</style>\n<![endif]-->\n\n<h1 class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:\njustify;text-indent:1.0cm;line-height:200%" align="left"><span style="font-size:12.0pt;\nline-height:200%;font-family:" times="" new="" roman","serif""=""><font face="comic sans ms" size="3" color="#0000FF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; AKADEMI MANAJEMEN INFORMATIKA AMIK SELATPANKANG</font></span><span style="font-size:12.0pt;\nline-height:200%;font-family:" times="" new="" roman","serif""=""></span></h1><p class="MsoNormal" style="margin-bottom:12.0pt;text-align:center;\nline-height:normal" align="center"><b><span style="font-size:9.0pt;font-family:" verdana","sans-serif";="" mso-fareast-font-family:"times="" new="" roman";mso-bidi-font-family:"times="" roman";="" mso-fareast-language:in"="">Visi Perguruan Tinggi :</span></b><b><span style="font-size:9.0pt;mso-bidi-font-size:11.0pt;font-family:" verdana","sans-serif";="" mso-fareast-font-family:"times="" new="" roman";mso-bidi-font-family:"times="" roman";="" mso-fareast-language:in"="">&nbsp;</span></b><span style="font-size:9.0pt;\nfont-family:" verdana","sans-serif";mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";mso-fareast-language:in"=""></span><br><span style="font-size:9.0pt;\nfont-family:" verdana","sans-serif";mso-fareast-font-family:"times="" new="" roman";="" mso-bidi-font-family:"times="" roman";mso-fareast-language:in"="">\nMENCERDASKAN BANGSA DENGAN TEKNOLOGI INFORMASI</span><span style="font-size:\n9.0pt;mso-bidi-font-size:11.0pt;font-family:" verdana","sans-serif";mso-fareast-font-family:="" "times="" new="" roman";mso-bidi-font-family:"times="" roman";mso-fareast-language:="" in"="">&nbsp;</span><span style="font-size:9.0pt;font-family:" verdana","sans-serif";="" mso-fareast-font-family:"times="" new="" roman";mso-bidi-font-family:"times="" roman";="" mso-fareast-language:in"=""></span><br><span style="font-size:9.0pt;font-family:" verdana","sans-serif";="" mso-fareast-font-family:"times="" new="" roman";mso-bidi-font-family:"times="" roman";="" mso-fareast-language:in"=""></span><span style="font-size:9.0pt;font-family:" verdana","sans-serif";="" mso-fareast-font-family:"times="" new="" roman";mso-bidi-font-family:"times="" roman";="" mso-fareast-language:in"="">\n<br>\n<b>Misi Perguruan Tinggi :</b></span><b><span style="font-size:9.0pt;\nmso-bidi-font-size:11.0pt;font-family:" verdana","sans-serif";mso-fareast-font-family:="" "times="" new="" roman";mso-bidi-font-family:"times="" roman";mso-fareast-language:="" in"="">&nbsp;</span></b><span style="font-size:9.0pt;font-family:" verdana","sans-serif";="" mso-fareast-font-family:"times="" new="" roman";mso-bidi-font-family:"times="" roman";="" mso-fareast-language:in"=""><br>\nMenyelenggarakan pendidikan berbasis teknologi informasi Memberikan kesempatan\nbelajar dan beasiswa kepada yang berprestasi Memberdayakan dan meningkatkan\nsumber daya yang dimiliki Menciptakan atmosfir akademik yang sehat dan\nberwawasan Mengembangkan budaya akademik secara berkelanjutan Menghasilkan\nlulusan yang terampil dan mampu berkompetisi Melakukan penelitian dan\npengembangan dibidang teknologi informasi Menjalin kerjasama baik dengan\npemerintah maupun swasta sebagai mitra kerja.</span></p>\n\n<p>\n&nbsp;\n</p>\n<p>\n</p>\n', 'kartun-computer.jpg'),
	(3, '<ol><li>Periksa dan bacalah soal-soal dengan teliti sebelum menjawab!</li><li>Pengerjaan\r\n Soal-soal ujian akan diberikan batasan waktu, apabila waktu telah \r\nhabis, anda tidak dapat lagi mengisi / mengoreksi kembali jawaban dari \r\nsoal-soal yang tersedia.&nbsp;<br></li><li>Skor atau nilai hanya akan ditampilkan saja&nbsp;</li></ol>', 'contacts.png');
/*!40000 ALTER TABLE `modul` ENABLE KEYS */;

-- Dumping structure for table db_edukasi_florafauna.tbl_admin
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id_admin` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_edukasi_florafauna.tbl_admin: 1 rows
/*!40000 ALTER TABLE `tbl_admin` DISABLE KEYS */;
INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
	(1, 'admin', 'admin');
/*!40000 ALTER TABLE `tbl_admin` ENABLE KEYS */;

-- Dumping structure for table db_edukasi_florafauna.tbl_data
CREATE TABLE IF NOT EXISTS `tbl_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text,
  `video` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `audio` varchar(100) DEFAULT NULL,
  `tag` varchar(100) DEFAULT NULL,
  `kategori_id` int(11) NOT NULL DEFAULT '0',
  `subkategori_id` int(11) NOT NULL DEFAULT '0',
  `tanggal` date DEFAULT NULL,
  `aktif` enum('Y','N') DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_edukasi_florafauna.tbl_data: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_data` DISABLE KEYS */;
INSERT INTO `tbl_data` (`id`, `judul`, `deskripsi`, `video`, `gambar`, `audio`, `tag`, `kategori_id`, `subkategori_id`, `tanggal`, `aktif`) VALUES
	(3, 'Burung Contoh', '<p style="margin-top: 0.5em; margin-bottom: 0.5em; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 17.5px;"><b>Burung</b>&nbsp;adalah anggota kelompok&nbsp;<a href="https://id.wikipedia.org/wiki/Hewan" title="Hewan" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">hewan</a>&nbsp;bertulang belakang (<a href="https://id.wikipedia.org/wiki/Vertebrata" title="Vertebrata" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">vertebrata</a>) yang memiliki&nbsp;<a href="https://id.wikipedia.org/wiki/Bulu" title="Bulu" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">bulu</a>&nbsp;dan&nbsp;<a href="https://id.wikipedia.org/wiki/Sayap" title="Sayap" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">sayap</a>.&nbsp;<a href="https://id.wikipedia.org/wiki/Fosil" title="Fosil" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Fosil</a>&nbsp;tertua burung ditemukan di&nbsp;<a href="https://id.wikipedia.org/wiki/Jerman" title="Jerman" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Jerman</a>&nbsp;dan dikenal sebagai&nbsp;<i><a href="https://id.wikipedia.org/wiki/Archaeopteryx" class="mw-redirect" title="Archaeopteryx" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Archaeopteryx</a></i>.</p><p style="margin-top: 0.5em; margin-bottom: 0.5em; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 17.5px;">Jenis-jenis burung begitu bervariasi, mulai dari&nbsp;<a href="https://id.wikipedia.org/wiki/Burung_kolibri" class="mw-redirect" title="Burung kolibri" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">burung kolibri</a>&nbsp;yang kecil dan dapat mengepakkan sayap dengan sangat cepat,&nbsp;<a href="https://id.wikipedia.org/wiki/Penguin" title="Penguin" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">penguin</a>&nbsp;yang menyelam dengan sayapnya, hingga&nbsp;<a href="https://id.wikipedia.org/wiki/Burung_unta" title="Burung unta" style="color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">burung unta</a>, yang lebih tinggi dari manusia.&nbsp;</p>', '151.mp4', '7burung.jpg', '34voice_burung_smart_mastering_blackthroat.mp3', NULL, 2, 3, '2020-03-15', 'Y'),
	(4, 'Kuda', '<p style="margin-top: 0.5em; margin-bottom: 0.5em; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 17.5px;"><b>Kuda</b>&nbsp;(<i>Equus caballus</i>&nbsp;atawa&nbsp;<i>Equus ferus caballus</i>) adalah salah saikung matan sapuluh&nbsp;<a href="https://bjn.wikipedia.org/w/index.php?title=Sp%C3%A9si%C3%A9s&amp;action=edit&amp;redlink=1" class="new" title="SpÃ©siÃ©s (tungkaran baluman ada)" style="color: rgb(165, 88, 88); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">spÃ©siÃ©s</a>&nbsp;modÃ©rn&nbsp;<a href="https://bjn.wikipedia.org/w/index.php?title=Mamalia&amp;action=edit&amp;redlink=1" class="new" title="Mamalia (tungkaran baluman ada)" style="color: rgb(165, 88, 88); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">mamalia</a>&nbsp;matan&nbsp;<a href="https://bjn.wikipedia.org/w/index.php?title=Genus&amp;action=edit&amp;redlink=1" class="new" title="Genus (tungkaran baluman ada)" style="color: rgb(165, 88, 88); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">genus</a>&nbsp;<i>Equus</i>. Binatang naya sudah lawas manjadi salah satu&nbsp;<a href="https://bjn.wikipedia.org/w/index.php?title=Binatang_tarnak&amp;action=edit&amp;redlink=1" class="new" title="Binatang tarnak (tungkaran baluman ada)" style="color: rgb(165, 88, 88); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">binatang tarnak</a>&nbsp;nang panting sacara ikunumis, wan sudah maingkuti paranan panting sabagai alat pangkutan urang wan barang baribu-ribu tahun lawasnya.</p><p style="margin-top: 0.5em; margin-bottom: 0.5em; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 17.5px;">Kuda kawa ditunggangi ulih manusia lawan mamakai&nbsp;<a href="https://bjn.wikipedia.org/w/index.php?title=Sadil&amp;action=edit&amp;redlink=1" class="new" title="Sadil (tungkaran baluman ada)" style="color: rgb(165, 88, 88); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">sadil</a>&nbsp;wan kawa jua dipakai gasan manarik sasuatu, kaya kandaraan baruda, atawa&nbsp;<a href="https://bjn.wikipedia.org/w/index.php?title=Bajak&amp;action=edit&amp;redlink=1" class="new" title="Bajak (tungkaran baluman ada)" style="color: rgb(165, 88, 88); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">bajak</a>. Di babarapa dairah, kuda jua dipakai sabagai sumbar&nbsp;<a href="https://bjn.wikipedia.org/w/index.php?title=Makanan&amp;action=edit&amp;redlink=1" class="new" title="Makanan (tungkaran baluman ada)" style="color: rgb(165, 88, 88); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">makanan</a>. Biar haja patarnakan kuda dikira-kira sudah ada mulai tahun&nbsp;<a href="https://bjn.wikipedia.org/w/index.php?title=4500_SM&amp;action=edit&amp;redlink=1" class="new" title="4500 SM (tungkaran baluman ada)" style="color: rgb(165, 88, 88); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">4500 SM</a>, nang bukti-buktinya pamakai kuda gasan kaparluan manusia hanyar didapatakan tajadi mulai tahun&nbsp;<a href="https://bjn.wikipedia.org/w/index.php?title=2000_SM&amp;action=edit&amp;redlink=1" class="new" title="2000 SM (tungkaran baluman ada)" style="color: rgb(165, 88, 88); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">2000 SM</a>.</p>', '782.mp4', '63kuda.jpg', '62suara-kuda-meringkik.mp3', NULL, 2, 5, '2020-03-18', 'Y');
/*!40000 ALTER TABLE `tbl_data` ENABLE KEYS */;

-- Dumping structure for table db_edukasi_florafauna.tbl_kategori
CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_edukasi_florafauna.tbl_kategori: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_kategori` DISABLE KEYS */;
INSERT INTO `tbl_kategori` (`id`, `nama_kategori`) VALUES
	(1, 'flora'),
	(2, 'fauna');
/*!40000 ALTER TABLE `tbl_kategori` ENABLE KEYS */;

-- Dumping structure for table db_edukasi_florafauna.tbl_nilai
CREATE TABLE IF NOT EXISTS `tbl_nilai` (
  `id_nilai` int(7) NOT NULL AUTO_INCREMENT,
  `id_user` int(5) DEFAULT '64',
  `benar` varchar(20) DEFAULT NULL,
  `salah` varchar(20) DEFAULT NULL,
  `kosong` varchar(20) DEFAULT NULL,
  `score` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Dumping data for table db_edukasi_florafauna.tbl_nilai: 2 rows
/*!40000 ALTER TABLE `tbl_nilai` DISABLE KEYS */;
INSERT INTO `tbl_nilai` (`id_nilai`, `id_user`, `benar`, `salah`, `kosong`, `score`, `tanggal`, `keterangan`, `username`) VALUES
	(17, 64, '3', '3', '0', '50.0', '2020-03-13', 'Lulus', 'Mamas'),
	(20, 64, '5', '1', '0', '83.3', '2020-03-13', 'Lulus', 'Yusuf');
/*!40000 ALTER TABLE `tbl_nilai` ENABLE KEYS */;

-- Dumping structure for table db_edukasi_florafauna.tbl_pengaturan_ujian
CREATE TABLE IF NOT EXISTS `tbl_pengaturan_ujian` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nama_ujian` varchar(20) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `nilai_min` varchar(20) NOT NULL,
  `peraturan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_edukasi_florafauna.tbl_pengaturan_ujian: 1 rows
/*!40000 ALTER TABLE `tbl_pengaturan_ujian` DISABLE KEYS */;
INSERT INTO `tbl_pengaturan_ujian` (`id`, `nama_ujian`, `waktu`, `nilai_min`, `peraturan`) VALUES
	(1, 'Kuis Flora Fauna', '10', '50', '<ol><li>Bacalah dengan teliti tiap-tiap soal sebelum menjawab</li><li>Pengerjaan Soal-soal ujian akan diberikan batasan waktu, apabila waktu telah habis, anda tidak dapat lagi mengisi / mengoreksi kembali jawaban dari soal-soal yang tersedia.&nbsp;<br></li><li>Skor atau nilai hanya akan ditampilkan setelah Anda klik tombol jawab.<br></li></ol>');
/*!40000 ALTER TABLE `tbl_pengaturan_ujian` ENABLE KEYS */;

-- Dumping structure for table db_edukasi_florafauna.tbl_soal
CREATE TABLE IF NOT EXISTS `tbl_soal` (
  `id_soal` int(5) NOT NULL AUTO_INCREMENT,
  `soal` text NOT NULL,
  `a` varchar(30) NOT NULL,
  `b` varchar(30) NOT NULL,
  `c` varchar(30) NOT NULL,
  `d` varchar(30) NOT NULL,
  `knc_jawaban` varchar(30) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `aktif` enum('Y','N') DEFAULT 'Y',
  `kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_soal`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- Dumping data for table db_edukasi_florafauna.tbl_soal: 6 rows
/*!40000 ALTER TABLE `tbl_soal` DISABLE KEYS */;
INSERT INTO `tbl_soal` (`id_soal`, `soal`, `a`, `b`, `c`, `d`, `knc_jawaban`, `gambar`, `tanggal`, `aktif`, `kategori`) VALUES
	(25, 'Hewan berikut ini termasuk mamalia, kecuali', 'Burung', 'Kecoa', 'Katak', 'Kambing', 'd', NULL, '2020-03-13', 'Y', NULL),
	(26, 'Elang termasuk spesies...', 'aves', 'insect', 'reptil', 'ikan', 'a', NULL, '2020-03-13', 'Y', NULL),
	(27, 'Hewan yang memiliki sayap untuk terbang adalah...', 'Angsa', 'Ayam', 'Itik', 'Merpati', 'd', NULL, '2020-03-13', 'Y', NULL),
	(28, 'Lebah termasuk spesies...', 'Aves', 'Insect', 'Mamalia', 'Ikan', 'b', NULL, '2020-03-13', 'Y', NULL),
	(29, 'Tumbuhan yang memiliki kambium adalah...', 'Pohon Jati', 'Padi', 'Rumput', 'Eceng gondok', 'a', NULL, '2020-03-13', 'Y', NULL),
	(30, 'Bunga tanaman padi dibantu penyerbukan oleh...', 'Burung', 'Serangga', 'Angin', 'Petani', 'c', NULL, '2020-03-13', 'Y', NULL);
/*!40000 ALTER TABLE `tbl_soal` ENABLE KEYS */;

-- Dumping structure for table db_edukasi_florafauna.tbl_subkategori
CREATE TABLE IF NOT EXISTS `tbl_subkategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_subkategori` varchar(50) NOT NULL,
  `kategori_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_edukasi_florafauna.tbl_subkategori: ~4 rows (approximately)
/*!40000 ALTER TABLE `tbl_subkategori` DISABLE KEYS */;
INSERT INTO `tbl_subkategori` (`id`, `nama_subkategori`, `kategori_id`) VALUES
	(1, 'ikan', 2),
	(2, 'serangga', 2),
	(3, 'aves', 2),
	(4, 'reptil', 2),
	(5, 'mamalia', 2);
/*!40000 ALTER TABLE `tbl_subkategori` ENABLE KEYS */;

-- Dumping structure for table db_edukasi_florafauna.tbl_user
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `statusaktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  `nama` varchar(50) NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

-- Dumping data for table db_edukasi_florafauna.tbl_user: 5 rows
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` (`id_user`, `username`, `statusaktif`, `nama`) VALUES
	(76, 'mohammad', 'Y', 'mohammad'),
	(75, 'ahdi', 'Y', 'ahdi'),
	(73, 'Yusuf', 'Y', 'Yusuf'),
	(83, 'Yusuf', 'Y', 'Yusuf'),
	(81, 'Yusuf', 'Y', 'Yusuf'),
	(82, 'Yusufmufti', 'Y', 'Yusufmufti');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;

-- Dumping structure for table db_edukasi_florafauna.titles
CREATE TABLE IF NOT EXISTS `titles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `website_name` varchar(40) DEFAULT NULL,
  `tagline` varchar(40) DEFAULT NULL,
  `icon` varchar(40) DEFAULT NULL,
  `keywords` varchar(220) DEFAULT NULL,
  `short_description` varchar(200) DEFAULT NULL,
  `detailed_description` text,
  `address` varchar(40) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table db_edukasi_florafauna.titles: ~1 rows (approximately)
/*!40000 ALTER TABLE `titles` DISABLE KEYS */;
INSERT INTO `titles` (`id`, `website_name`, `tagline`, `icon`, `keywords`, `short_description`, `detailed_description`, `address`, `email`, `phone`) VALUES
	(1, 'Flora Fauna', 'Belajar tentang hewan dan tumbuhan', '95401600_1524766758.jpg', 'flora, fauna, hewan, tumbuhan', 'Website ini untuk memudahkan pembelajaran tentang flora dan fauna', 'Website ini untuk memudahkan pembelajaran tentang flora dan fauna', 'Merauke, Indonesia', 'info@florafauna.id', '089637319180');
/*!40000 ALTER TABLE `titles` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
