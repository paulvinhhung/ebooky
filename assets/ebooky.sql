-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 01, 2022 lúc 07:39 PM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ebooky`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ebook`
--

DROP TABLE IF EXISTS `ebook`;
CREATE TABLE IF NOT EXISTS `ebook` (
  `ID` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Poster` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Bookname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Author` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Datepublish` date DEFAULT NULL,
  `Description` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ebook`
--

INSERT INTO `ebook` (`ID`, `Poster`, `Bookname`, `Author`, `Datepublish`, `Description`) VALUES
('01', 'https://tinyurl.com/ddungchidepmakhonghieuchuyen', 'Đừng Chỉ Đẹp Mà Không Hiểu Chuyện', 'Mai Tử', '2019-01-01', 'Nếu như ngoại hình là cách tạo hóa đối xử với mỗi người, thì sự hiểu chuyện chính là cách mỗi người đối xử với bản thân.\r\nMột con người, nhất là người phụ nữ chỉ đẹp mà không hiểu chuyện, vừa là lãng phí của trời cho, vừa là thiếu tôn trọng chính mình; vừa dễ bị đàn ông lợi dụng, vừa hay bị những người phụ nữ khác coi thường. Chỉ cần sảy tay lỡ miệng thể hiện sự không hiểu chuyện, rất nhiều cô gái đã phải trả giá, nhẹ thì vướng vào rắc rối lặt vặt, nặng thì có thể bị lợi dụng, bị hãm hại.'),
('02', 'https://tinyurl.com/thaotungtamlyyy', 'Thao túng tâm lý', 'Shannon Thomas,LCSW', '2022-03-03', '“Thao túng tâm lý” là một dạng của lạm dụng tâm lý. Cũng giống như lạm dụng tâm lý, thao túng tâm lý có thể xuất hiện ở bất kỳ môi trường nào, từ bất cứ đối tượng độc hại nào. Đó có thể là bố mẹ ruột, anh chị em ruột, người yêu, vợ hoặc chồng, sếp hay đồng nghiệp… của bạn. Với tính chất bí hiểm, âm thầm gây hại, thao túng, lạm dụng tâm lý làm tổn thương cảm xúc, lòng tự trọng, cuộc sống của mỗi nạn nhân. Những người từng bị lạm dụng tâm lý thường không thể miêu tả rõ ràng điều gì đã xảy ra với mình. Trong nhiều trường hợp, nạn nhân bị thao túng đến mức tự hỏi có phải họ là người có lỗi, thậm chí họ có phải là người độc hại trong mối quan hệ đó.'),
('03', 'https://tinyurl.com/4ud68n97', 'Tư duy logic(tái bản)', 'Minori Kanbe', '2021-06-01', 'Kanbe – nhân vật chính trong cuốn sách, vào những năm cuối tuổi 20 của cuộc đời, một ngày cô chợt nhận ra, trong khi các bạn cùng trang lứa với cô đã và đang gặt hái nhiều thành quả thì bản thân cô đang dần chững lại trong sự nghiệp. Sau một thời gian suy nghĩ, cô quyết định từ bỏ công việc hiện tại, đi học thêm bằng MBA và đầu quân cho một công ty. Một chương mới tươi sáng hơn được mở ra, và tất cả bắt nguồn từ việc thay đổi nhận thức và tư duy của cô gái trẻ.'),
('04', 'https://tinyurl.com/ycyxvmmc', 'Đừng cố làm người tốt trong mắt mọi người', 'Kim Yoo Eun', '2021-01-01', 'Tôi sống mà phải chịu tổn thương bởi sự can thiệp quá mức của người khác dưới danh nghĩa đang lo lắng hộ tôi và những lời nói vô duyên dưới lớp vỏ bọc lời khuyên. Tôi được học cách sống hoà đồng cùng bạn bè, trong khi không một ai dạy tôi về ý nghĩa của tình bạn thực sự. Tôi toàn nghe người ta nói hãy trở thành một người tử tế và tốt bụng, mà chưa bao giờ được học cách sống chung với những kẻ xấc xược và xấu xa.'),
('05', 'https://tinyurl.com/2s46h9s7', 'Điềm tĩnh và nóng giận', 'Tạ Quốc Kế', '2021-11-11', 'Trong cuộc sống thường ngày, chúng ta thường nổi giận vì nhiều nguyên do: công việc không suôn sẻ, chúng ta tức giận; bị người khác hiểu nhầm, chúng ta tức giận; thấy việc chướng tai gai mắt, chúng ta tức giận; không thể chấp nhận được dư luận xã hội, chúng ta tức giận. Thậm chí, chúng ta bực tức, cáu gắt, hờn dỗi, nhỏ nhen, uất ức vì thời tiết xấu, vì tiền lương thấp, vì nhà cửa bừa bộn, vì thái độ của người khác, vì những chuyện không may mà mình gặp phải. Dường như cuộc đời chúng ta là một chuỗi tức giận không hồi kết. Hãy thử tự hỏi bản thân: sau khi tức giận thì phiền não sẽ tan biến ư?'),
('06', 'https://tinyurl.com/4ewr55kf', 'Trên hành trình tự học', 'Rosie Nguyễn', '2021-07-01', 'Sau thành công của Tuổi Trẻ Đáng Giá Bao Nhiêu, tác giả lên đường du học và nhìn lại quá trình học tập của mình từ khi ra trường cho đến hôm nay. Trên Hành Trình Tự Học là tập hợp những bài viết liên quan đến việc học.Sách chia làm bốn phần chính: Học Để Biết, Học Để Làm, Học Để Chuyển Mình, Học Để Chung Sống. Mỗi phần đều được viết dựa trên kinh nghiệm của tác giả và từ những câu chuyện của những người bạn mà tác giả có dịp gặp gỡ, chia sẻ. Tác giả cũng xem xét về các khía cạnh khác nhau của sự học: cách học trực tuyến, học từ trường, từ gia đình… Song song đó là nhận định tổng quan về giá trị chung của việc học.'),
('07', 'https://tinyurl.com/ycyuh56u', 'Làm sạch tâm hồn', 'Nishi Katsuzo', '1900-01-04', '“Làm sạch tâm hồn - các bài tập thiền” của tác giả Nishi Katsuzo do Tiến sĩ Trương Thị Thảo dịch, đây là những nội dung và các phương pháp giảng dạy đã được thử thách qua thời gian. Đây là những nghiên cứu kiệt xuất trong nền y học tự nhiên của tất cả các dân tộc từ xưa cho tới nay. Đây là những bí quyết đã được khôi phục lại với những giải thích của các chuyên gia thời nay cùng những lời khuyên hết sức cấp thiết của những nhà chuyên môn vĩ đại.Thiền tĩnh tâm là phương pháp có thể cứu giúp chúng ta khi thân thể đang suy sụp và tinh thần mỏi mệt. Thiền cho tâm hồn là điều đem lại hy vọng và chỉ ra con đường dẫn đến phục hồi sức khỏe khi chúng ta cảm thấy dường như mọi con đường đều đã bị cắt đứt.'),
('08', 'https://tinyurl.com/3h7u6jjz', 'Khi mọi điểm tựa đều mất', 'Marci Shimoof - Carol Kline', '2022-01-01', 'Với Happy for No Reason – Khi mọi điểm tựa đều mất, tác giả Marci Shimoff đã có một cuộc cách mạng về quan niệm hạnh phúc. Trong khi phần lớn những quyển sách ở thể loại này hướng vào việc giúp con người tìm kiếm hạnh phúc từ những yếu tố bên ngoài thì Happy for No Reason lại hướng vào những yếu tố nội tâm. Nhờ vậy, bạn sẽ tìm thấy những phương thức tuy đơn giản nhưng lại rất hữu hiệu giúp bạn trải nghiệm một cảm xúc mới – hạnh phúc tự thân – bất kể mọi tác động tiêu cực từ bên ngoài. Quyển sách sẽ gửi đến bạn nền tảng cơ bản nhất, giúp bạn duy trì một trạng thái hạnh phúc bền vững và trọn vẹn.'),
('09', 'https://tinyurl.com/4eue4k2m', 'Giận (Tái bản)', 'Thích Nhất Hạnh', '2021-01-06', 'Giận là một cuốn sách hay của Thiền sư Thích Nhất Hạnh, nó mở ra cho ta những khả năng kỳ diệu, nhưng lại rất dễ thực hành để ta tự mình từng bướ thoát khỏi cơn giận và sống đẹp với xã hội quanh mình. Giận được xuất bản tại Hoa Kỳ ngày 10.9.2001, trước biến cố 11.9.2001 có một ngày. Vì thế Giận đã trở thành quyển sách bán chạy nhất Hoa Kỳ - 50.000 bản mỗi tuần - trong vòng 9 thá Tại Hàn Quốc, quyển sách này đã bán được 1 triệu bản trong vòng 11 tháng. Rất nhiều độc giả nhờ đọc sách này mà đã điều phục được tâm mình, sử dụng ái ngữ lắng nghe để hoà giải với người thân, đem lại hạnh phúc trong gia đình và trong cộng đồng của họ.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
  `email` varchar(100) DEFAULT NULL,
  `pwd` text,
  `phonenumber` varchar(15) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `information`
--

INSERT INTO `information` (`email`, `pwd`, `phonenumber`, `dateofbirth`) VALUES
('hongha@gmail.com', '123456', '0987654321', '2002-08-25'),
('linhnga@gmail.com', '123456', '0123456789', '2002-10-02'),
('ngochanh@gmail.com', '123456', '0987654321', '2002-01-15'),
('vinhhung123@gmail.com', '123456', '0339183725', '2022-11-23'),
('circleK@o9.com', '123456', '0987654321', '2022-11-16'),
('vinhhung@gmail.com', '123456', '0339183725', '2002-01-11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
