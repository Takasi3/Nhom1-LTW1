-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 03, 2018 lúc 06:04 AM
-- Phiên bản máy phục vụ: 5.7.21
-- Phiên bản PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_ID` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manu_img` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`manu_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`manu_ID`, `manu_name`, `manu_img`) VALUES
(1, 'VANS', 'vans.png'),
(2, 'ADIDAS', 'adidas.jpg'),
(3, 'NIKE', 'nike.jpg'),
(4, 'GUCCI', 'gucci.jpg'),
(5, 'SUPREME', 'supreme.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `manu_ID` int(11) NOT NULL,
  `type_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`ID`, `name`, `price`, `image`, `description`, `manu_ID`, `type_ID`) VALUES
(1, 'Supreme Air Humara', 170, 'supremeSNEAKER.jpg', 'Trong collab này, kiểu dáng của Air Humara được giữ lại gần như trọn vẹn và được bổ sung thêm bởi phong cách phối màu độc đáo của Supreme. Tiếp tục sử dụng các tông màu sáng nổi bật, collab sẽ bao gồm bốn phối màu Đen/Đen, Hồng/Đen, Xanh Lá/Đen và Xanh Biển/Đen. Điểm nhấn của các phối màu nằm ở các chi tiết phản quang được phân bổ với từng chi tiết ở khắp thân giày. Cuối cùng là tên thương hiệu Supreme đặt ở mũi và heel-tab, đi cùng motif World Famous thêu trên gót giày.', 5, 3),
(2, ' Supreme Clarks Weaver', 200, 'supremeNAM.jpg', 'Tiếp tục với các dự án collab của Supreme, với đối tác quen thuộc – Clarks. Thật sự không phải là một lời khen thảo mai, nhưng Supreme dường như đã rất chín chắn trong việc định hình phong cách của riêng mình – và không chỉ dừng lại ở các sản phẩm streetwear quen thuộc mà còn mở rộng sanng nhiều phong cách thời trang khác nhau (Ví dụ: denim với Levi’s, punk vibe với Dr.Martens và đặc biệt nhất là Clarks).\r\n\r\nVới Clarks, một thương hiệu gần như không có bất cứ sự quen thuộc nào đối với streetwear (ngoại trừ thiết kế Desert Boots quá kinh điển); nhưng Supreme qua những collab cùng thương hiệu này đã biến nó trở nên “cool” hơn trong mắt giới trẻ.', 5, 1),
(3, 'supreme COMME', 180, 'supremeNU.jpg', 'Theo sau hai collab cùng Rap-A-Lot và Dr.Martens, Supreme tiếp tụ c cho ra mắt BST collab thứ 3 trong tháng này với sự xuất hiện của COMME des GARCONS SHIRT. BST này lấy cảm hứng từ chiến dịch quảng cáo mùa Xuân/Hè 2010 của CdG, được thực hiện bởi Stephen J Shanabrook. Các item trong đợt ra mắt này rất đa dạng với sự phân chia rõ rệt về phong cách. Theo hướng high-end của CdG SHIRT, là những bộ Suit và sơ mi tay ngắn mang họa tiết Eyeball, đi cùng chiếc Fishtail Parka trơn trong tông đen mang tên 2 thương hiệu ở phía lưng áo. Ngoài ra, họa tiết này còn xuất hiện trên mẫu Nike Air Force 1', 5, 2),
(4, 'Supreme More Uptempo', 500, 'supremeBOOT.jpg', 'Không nằm ngoài dự đoán, không chỉ Suptempo được “hype” mà cả những phiên bản Uptempo bình thường cũng được săn đón một cách nồng nhiệt. Trong suốt khoãng thời gian đó cho đến ngày release chính thức, Nike liên tiếp cho ra mắt các phối màu mới trên dòng Uptempo – với lối thiết kế hiện đại, hợp thị hiếu cộng đồng đầu giày. Và kết quả cuối cùng, Uptempo chính thức trở lại spotlight và có khả năng sẽ trở thành một trong những dòng giày được Nike phát triển chủ đạo trong năm nay và năm tới', 5, 5),
(5, 'SUPREME SB Air Force 2', 800, 'supremeSPORT.jpg', 'Với BST này, Supreme mang trở lại motif “World Famous” cùng lối thiết kế đầy đơn giản tập trung vào màu sắc. Bốn sản phẩm trong collab sẽ mang bốn phối màu đơn sắc với Nâu, Vàng, Cam và Xanh Biển Nhạt. Sản phẩm được làm từ chất liệu da cao cấp kết hợp cùng một phần da bóng đục lỗ ở giữa thân giày.\r\n\r\nVề branding, nổi bật nhất là ở phía sau gót với hai từ “World” và “Famous” được thêu cho mỗi bên giày. Các chi tiết branding nhỏ khác gồm phần tag giày với logo của Nike SB và Supreme; và phần lót giày màu Đỏ đặc trưng cũng được logo của cả 2 thương hiệu.', 5, 4),
(6, 'Gucci Ace Embroidered Sneaker', 1000, 'gucciSNEAKER.jpg', 'Những ai là fan của kiểu giày sneaker trắng sẽ không thể bỏ qua những thiết kế vui mắt của Gucci. Tương tự phom dáng với những đôi giày sneaker trắng thịnh hành hiện nay nhưng bộ sưu tập của Gucci bắt mắt hơn với những hình thêu chỉ vàng vui mắt, sang trọng hay thêu hình hoa, lồng da hình trái tim nữ tính, vô cùng đáng yêu. Mang phong cách unisex nên bộ sưu tập phù hợp cho cả nam lẫn nữ.', 4, 3),
(7, 'Gucci Mid-heel Loafer', 1100, 'gucciNU.jpg', 'Tôn thờ chủ nghĩa lưỡng tính trong thời trang, Gucci còn kiến tạo nên những đôi giày mang phong cách menswear vừa thoải mái lại phong cách cho các quý cô sành mốt. Và món thời trang thú vị nhất, dễ \"gây nghiện\" nhất của nhà mốt nước Ý là đôi loafer với phần gót đính ngọc trai - \"bánh bèo\" một cách hết sức cá tính!', 4, 2),
(8, 'Gucci Princetown Slipper', 995, 'gucciNAM.jpg', 'Ngay khi phát hiện kiểu giày này trên sàn diễn năm 2015 của Gucci, các chuyên gia đánh giá rằng kiểu giày lười đính lông rồi sẽ theo chân của các ngôi sao hay fashionista táo bạo nhất. Mặc dù còn nhiều tranh cãi vì Gucci sử dụng lông kangaroo để tạo phần lót giày, nhưng dường như giới mộ điệu không thể chối từ sức hấp dẫn từ nó.', 4, 1),
(9, 'Leather over-the-knee boot', 3600, 'gucciBOOT.jpg', 'First introduced as a men\'s riding boot in the XV century, the over-the-knee boot served as a sophisticated footwear statement in the 1960s and made a comeback in 90s fashion. Presented with a relaxed leg and cinched self-tie detail at the opening, the audacious silhouette is crafted in black soft leather.', 4, 5),
(10, 'Flashtrek', 980, 'gucciSPORT.jpg', 'Inspired by the hiking world and designed with an oversize shape sole, for Fall Winter 2018 these sneakers are presented in white. Featuring a dynamic mix of materials – rubber, suede, and technical canvas – the accessory is defined by the Gucci patch with the graphic font of SEGA, a fixture in the colorful arcades and coin-op game rooms of the \'80s.', 4, 4),
(11, 'Giày Nike Free RN Flyknit 2018 Nam - Đen Trắng', 500, 'nikeNAM.jpg', 'Giày Nike Free RN Flyknit 2018 là phiên bản tiếp theo của dòng giày running Nike Free RN. Phiên bản mới có trọng lượng nhẹ hơn và nổi bật với upper được nâng cấp mang đến cảm giác vừa vặn và linh hoạt hơn.\r\nUpper giày Nike Free RN Flyknit 2018 sử dụng chất liệu vải Flyknit, cấu trúc như những sợ len đan nhau mang đến cảm giác thật mềm mại, độ co dãn cao, cho đôi chân trở nên thoải mái hơn khi chạy. Bạn sẽ không phải chịu áp lực bó chặt từ đôi giày thật khó chịu và đau rát chân, khi mang giày Nike Free RN Flyknit 2018 cảm tưởng như đang chạy chân trần vậy. Chẳng ngạc nhiên khi những nhà thiết kế đặt tên \"Free\" (nhẹ như không) cho phần đế tuyệt vời này.\r\nĐôi giày được giữ nguyên kiểu dáng giày thấp, thiết kế trẻ trung năng động.\r\n', 3, 1),
(12, 'Giày Tập Nữ Free 1.0 Cross Bionic 2', 200, 'nikeNU.jpg', 'Thiết kế thân lưới tạo cảm giác thông thoáng cho bàn chân\r\nĐế giữa và miếng lót cho lớp đệm chân mỏng nhẹ êm ái\r\nĐế giày xẻ rãnh chống trơn trượt\r\n', 3, 2),
(13, 'Nike Special Field Men’s Boot (Black)', 600, 'nikeBOOT.jpg', 'Một khởi động thể thao hiện đại được thiết kế cho những người phản ứng đầu tiên, Nike Special Field Men\'s Boot được thiết kế theo thông số kỹ thuật của các anh hùng đẳng cấp thế giới, từ các chuyên gia quân sự đến cứu hộ và nhân viên thực thi pháp luật. Kết quả: khởi động nhanh nhất, khô nhanh nhất, hiệu suất di động cao nhất mà Nike từng thực hiện.', 3, 5),
(14, 'NIKE AIR MAX 95 ESSENTIAL', 200, 'nikeSPORT.jpg', 'Khi nói đến bóng rổ, không có cách nào xung quanh Nike - thương hiệu với Swoosh thuộc về trò chơi như dunks, ba con trỏ và cross-overs. Cho dù ở NBA, giải đấu châu Âu hay khu phố của bạn ...', 3, 4),
(15, 'NIKE CORTEZ SNEAKER LEATHER BLACK', 500, 'nikeSNEAKER.jpg', 'Da Cortez cơ bản của Nike được làm bằng da cao cấp trên và một cấu hình lấy cảm hứng từ chạy vượt thời gian cho sự thoải mái và một cái nhìn mang tính biểu tượng.\r\nDa trên cho độ bền và thoải mái\r\nEVA midsole cho đệm\r\nĐế ngoài cao su với mô hình xương cá cho lực kéo và độ bền\r\nNike Cortez là kiệt tác đầu tiên của Bill Bowerman, được chế tạo để nhẹ hơn và thời tiết hơn bất kỳ loại giày nào khác. Năm 1972, nó đặt đệm chưa từng có dưới chân nhanh nhất trong thế giới đang chạy và nhanh chóng trở thành chiếc giày đào tạo phổ biến nhất trong cả nước. Đó là một biểu tượng không thể nhầm lẫn - một biển quảng cáo đi bộ kể câu chuyện của bạn và tuyên bố liên kết của bạn - và đã phát triển mạnh với phong cách khốc liệt trên các đường phố của Los Angeles. Kể từ đó, không có giày đã mở rộng định nghĩa của một chiếc giày chạy khá giống như Nike Cortez.\r\n', 3, 3),
(16, 'Vans Italian Weave SK8-Hi Slim Nam', 90, 'vansNAM.jpg', 'Vans Dệt Ý Sk8-Hi Slim, một phiên bản mỏng của chiếc Vans ren-up cao cấp huyền thoại, có mũ dệt dệt, cổ áo độn để hỗ trợ và linh hoạt, và đế ngoài cao su', 1, 1),
(17, 'Vans Suede Authentic Platform 2.0 Nữ', 62, 'vansNU.jpg', 'Vans Nền tảng Authentic Authentic kết hợp bản gốc Vans thấp và mang tính biểu tượng hàng đầu với những chiếc mũ da lộn, móc kim loại và đế lót bằng cao su chữ ký nền tảng ', 1, 2),
(18, 'VANS WARD LO SUEDE SNEAKER - MEN\'S', 60, 'vansSNEAKER.jpg', '•	Canvas và da lộn trên\r\n•	Cao su lưu hóa đế ngoài\r\n', 1, 3),
(19, 'Giày Thể Thao Vans Flame - SK049', 65, 'vansSPORT.jpg', 'Vans The Flame Sk049 tái phát hành, đỉnh Vans huyền thoại tái phát hành với độ nhạy cổ điển, tính năng in canvas và da lộn mũ, reec thực thi toecaps để chịu được lặp đi lặp lại mặc, độn collars để hỗ trợ và linh hoạt, và đế ngoài cao su', 1, 4),
(20, '2019 Vans Hi Standard OG Snowboard Boot in Schoph', 190, 'vansBOOT.jpg', 'Hi-Standard OG có cảm giác thoải mái và quen thuộc với một bộ khởi động ren truyền thống với các tính  năng bổ sung', 1, 5),
(21, 'Giày adidas Swift Run Primeknit', 220, 'adidasNAM.jpg', 'Hàng chính hãng. Xuất sứ từ mỹ, chất liệu cao\r\n', 2, 1),
(22, 'Giày golf nữ Adidas Adicross IV Q47023', 260, 'adidasNU.jpg', '•	Loại giầy:	Giầy chơi Golf\r\n•	Đối tượng sử dụng	Nữ\r\n•	Màu sắc		Trắng\r\n•	Thương hiệu		Mỹ\r\n', 2, 2),
(23, 'Giày ADIDAS SNEAKER Prophere grey chính hãng - ADM803', 600, 'adidasSNEAKER.jpg', '•	Kích thước: 	42- 43-45-46-47\r\n•	Chất liệu: Nhiều chất liệu.\r\n•	Chiều cao: 3cm.\r\n•	Đối tượng sử dụng	Nữ\r\n•	Màu sắc		Trắng\r\n•	Thương hiệu		Mỹ\r\n', 2, 3),
(24, 'Giày thể thao nam chính hãng ADIDAS - BB9930', 850, 'adidasSPORT.jpg', 'THUỘC TÍNH SẢN PHẨM\r\n•	Chất liệu: Cao su tổng hợp,Da.\r\n•	Chiều cao: 3cm.\r\nCHI TIẾT SẢN PHẨM\r\n•	Sản phẩm chất lượng cao từ ADIDAS.\r\n', 2, 4),
(25, 'GIÀY BOOT CAO CỔ, 5CM, GÓT NHŨ', 640, 'adidasBOOT.jpg', 'Loại gót:		Gót Vuông\r\nChất liệu:	Da lộn\r\nChiều cao :	5cm\r\nMàu:		Đen classic\r\nChất liệu:	Nhung cao cấp, đế nhựa dẽo\r\nXuất sứ:		Mỹ\r\n', 2, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_ID` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_img` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`type_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_ID`, `type_name`, `type_img`) VALUES
(1, 'GIÀY NAM', 'NAM.jpg'),
(2, 'GIÀY NỮ', 'NU.jpg'),
(3, 'SNEAKER', 'SNEAKER.jpg'),
(4, 'SPORT', 'SPORT.jpg'),
(5, 'BOOT', 'BOOT.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
