-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 10, 2018 at 12:58 PM
-- Server version: 5.7.23-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puspidep_dbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `isi_about` text NOT NULL,
  `place` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `isi_about`, `place`) VALUES
(1, '                                                                                                                                                                                                                                                                                                                                                <h2>Pusat Pengkajian Islam Demokrasi dan Perdamaian </h2><p><h4>(PusPIDeP) adalah lembaga profesional yang bergerak di bidang sosial, keagamaan, dan kemanusiaan. PusPIDeP mempunyai komitmen kuat dalam melakukan penelitian, advokasi, diseminasi dan publikasi terkait topik-topik keislaman dan demokrasi serta berpartisipasi aktif dalam mengupayakan perdamaian dan dialog antar iman. Untuk itu, PusPIDeP membuka diri untuk bekerja sama dengan pihak-pihak terkait baik dari dalam maupun luar negeri.<br></h4></p>  \r\n                                 \r\n                      \r\n                                 \r\n                      \r\n                                 \r\n                      \r\n                                 \r\n                      \r\n                                 \r\n                      \r\n                                 \r\n                      \r\n                                 \r\n                      \r\n                                 \r\n                      \r\n                                 \r\n                      \r\n                                 \r\n                      \r\n                                 \r\n                      \r\n                                 \r\n                      \r\n                                 \r\n                      \r\n                                 \r\n                    ', '2'),
(2, '533adc7f3195d3cad0ee155303a2221e.jpg', '1'),
(3, '                                                                        <!--[if gte mso 9]><xml><w:WordDocument><w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel><w:DisplayHorizontalDrawingGridEvery>0</w:DisplayHorizontalDrawingGridEvery><w:DisplayVerticalDrawingGridEvery>2</w:DisplayVerticalDrawingGridEvery><w:DocumentKind>DocumentNotSpecified</w:DocumentKind><w:DrawingGridVerticalSpacing>7.8 磅</w:DrawingGridVerticalSpacing><w:PunctuationKerning></w:PunctuationKerning><w:View>Normal</w:View><w:Compatibility><w:DontGrowAutofit></w:DontGrowAutofit><w:BalanceSingleByteDoubleByteWidth></w:BalanceSingleByteDoubleByteWidth><w:DoNotExpandShiftReturn></w:DoNotExpandShiftReturn></w:Compatibility><w:Zoom>0</w:Zoom></w:WordDocument></xml><![endif]--><!--[if gte mso 9]><xml><w:LatentStyles DefLockedState=\"false\"  DefUnhideWhenUsed=\"true\"  DefSemiHidden=\"true\"  DefQFormat=\"false\"  DefPriority=\"99\"  LatentStyleCount=\"260\" >\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Normal\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"heading 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"heading 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"heading 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"heading 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"heading 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"heading 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"heading 7\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"heading 8\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"heading 9\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index 7\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index 8\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index 9\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toc 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toc 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toc 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toc 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toc 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toc 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toc 7\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toc 8\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toc 9\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Normal Indent\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"footnote text\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"annotation text\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"header\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"footer\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index heading\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"caption\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"table of figures\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"envelope address\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"envelope return\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"footnote reference\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"annotation reference\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"line number\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"page number\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"endnote reference\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"endnote text\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"table of authorities\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"macro\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toa heading\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Bullet\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Number\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Bullet 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Bullet 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Bullet 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Bullet 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Number 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Number 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Number 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Number 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Title\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Closing\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Signature\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Default Paragraph Font\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Body Text\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Body Text Indent\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Continue\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Continue 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Continue 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Continue 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Continue 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Message Header\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Subtitle\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Salutation\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Date\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Body Text First Indent\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Body Text First Indent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Note Heading\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Body Text 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Body Text 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Body Text Indent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Body Text Indent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Block Text\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Hyperlink\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"FollowedHyperlink\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Strong\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Emphasis\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Document Map\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Plain Text\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"E-mail Signature\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Normal (Web)\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Acronym\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Address\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Cite\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Code\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Definition\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Keyboard\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Preformatted\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Sample\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Typewriter\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Variable\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Normal Table\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"annotation subject\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"No List\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Simple 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Simple 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Simple 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Classic 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Classic 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Classic 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Classic 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Colorful 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Colorful 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Colorful 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Columns 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Columns 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Columns 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Columns 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Columns 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Grid 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Grid 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Grid 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Grid 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Grid 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Grid 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Grid 7\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Grid 8\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table List 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table List 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table List 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table List 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table List 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table List 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table List 7\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table List 8\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table 3D effects 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table 3D effects 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table 3D effects 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Contemporary\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Elegant\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Professional\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Subtle 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Subtle 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Web 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Web 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Web 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Balloon Text\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Grid\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Theme\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Shading\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light List\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Grid\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Dark List\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Shading\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful List\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Grid\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Shading Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light List Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Grid Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 1 Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 2 Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 1 Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 2 Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 1 Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 2 Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 3 Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Dark List Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Shading Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful List Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Grid Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Shading Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light List Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Grid Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 1 Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 2 Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 1 Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 2 Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 1 Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 2 Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 3 Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Dark List Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Shading Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful List Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Grid Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Shading Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light List Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Grid Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 1 Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 2 Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 1 Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 2 Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 1 Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 2 Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 3 Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Dark List Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Shading Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful List Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Grid Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Shading Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light List Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Grid Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 1 Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 2 Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 1 Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 2 Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 1 Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 2 Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 3 Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Dark List Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Shading Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful List Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Grid Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Shading Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light List Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Grid Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 1 Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 2 Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 1 Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 2 Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 1 Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 2 Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 3 Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Dark List Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Shading Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful List Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Grid Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Shading Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light List Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Grid Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 1 Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 2 Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 1 Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 2 Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 1 Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 2 Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 3 Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Dark List Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Shading Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful List Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Grid Accent 6\" ></w:LsdException>\r\n</w:LatentStyles></xml><![endif]--><style>\r\n@font-face{\r\nfont-family:\"Times New Roman\";\r\n}\r\n\r\n@font-face{\r\nfont-family:\"宋体\";\r\n}\r\n\r\n@font-face{\r\nfont-family:\"Cambria\";\r\n}\r\n\r\n@font-face{\r\nfont-family:\"ＭＳ 明朝\";\r\n}\r\n\r\np.MsoNormal{\r\nmso-style-name:Normal;\r\nmso-style-parent:\"\";\r\nmargin:0pt;\r\nmargin-bottom:.0001pt;\r\nfont-family:Cambria;\r\nmso-fareast-font-family:\'ＭＳ 明朝\';\r\nmso-bidi-font-family:\'Times New Roman\';\r\nfont-size:12,0000pt;\r\n}\r\n\r\nspan.msoIns{\r\nmso-style-type:export-only;\r\nmso-style-name:\"\";\r\ntext-decoration:underline;\r\ntext-underline:single;\r\ncolor:blue;\r\n}\r\n\r\nspan.msoDel{\r\nmso-style-type:export-only;\r\nmso-style-name:\"\";\r\ntext-decoration:line-through;\r\ncolor:red;\r\n}\r\n@page{mso-page-border-surround-header:no;\r\n	mso-page-border-surround-footer:no;}@page Section0{\r\n}\r\ndiv.Section0{page:Section0;}</style><!--StartFragment--><p class=\"MsoNormal\" style=\"text-align: justify; \">PusPIDeP&nbsp;merupakan&nbsp;lembaga&nbsp;penelitian&nbsp;</p><p class=\"MsoNormal\" style=\"text-align: justify;\">dan&nbsp;advokasi&nbsp;independen&nbsp;yang&nbsp;bertujuan&nbsp;untuk&nbsp;mengkaji&nbsp;isu isu&nbsp;keislaman,&nbsp;demokrasi&nbsp;dan&nbsp;kemanusiaan.&nbsp;&nbsp;<a href=\"http://localhost/Puspidep/Blog/Show_blog/42/2018-08-07\">Read More</a></p><!--EndFragment--><input type=\"hidden\" name=\"id_about\" value=\"3\">\r\n                    <input type=\"hidden\" name=\"place\" value=\"3\">\r\n\r\n                                        <input type=\"hidden\" name=\"id_about\" value=\"3\">\r\n                    <input type=\"hidden\" name=\"place\" value=\"3\">\r\n\r\n                                        <input type=\"hidden\" name=\"id_about\" value=\"3\">\r\n                    <input type=\"hidden\" name=\"place\" value=\"3\">\r\n\r\n                                        <input type=\"hidden\" name=\"id_about\" value=\"3\">\r\n                    <input type=\"hidden\" name=\"place\" value=\"3\">\r\n\r\n                    ', '3'),
(4, 'PusPIDeP berkoPusPIDeP merupakan lembaga penelitian dan advokasi independen yang bertujuan untuk mengkaji isu-isu keislaman, demokrasi dan kemanusiaan. mitmen untuk menanamkan dan memperkuat nilai-nilai sosial demokrasi dan perdamaian dalam masyarakat dengan mengadakan kegiatan penelitian, pengkajian, seminar, pelatihan, pendampingan, resolusi konflik serta publikasi.', '4'),
(5, '                                                Visi PusPIDeP adalah menciptakan kehidupan sosial dan masyarakat Indonesia berdasarkan pada nilai-nilai kebangsaan, keagamaan, dan kemanusiaan, serta turut berkontribusi untuk menciptakan masyarakat Muslim yang bermartabat dan berkeadaban dengan mengintegrasikan gagasan keislaman, kebangsaan dan demokrasi.', '5'),
(6, '                        <p>                        Untuk mewujudkan visi tersebut, PusPIDeP memandang perlu untuk mengambil langkah-langkah strategis dengan:\r\n</p><p>1.Mengadakan penelitian sosial dan pemberdayaan masyarakat dalam isu kajian Islam, kajian agama.\r\n</p><p>2.Melaksanakan pelatihan dan pendidikan masyarakat dalam rangka penenaman dan penguatan nilai-nilai demokrasi dan perdamaian.\r\n</p><p>3.Mendorong peran pemeluk agama dan masyarakat dalam demokrasi, serta peran pemeluk agama dan masyarakat dalam menciptakan dan menjaga perdamaian dalam semua lingkup kehidupan.</p><p>\r\n4.Mengadakan pelatihan dan pendampingan manajemen dan resolusi konflik di masyarakat dalam rangka penanaman dan penguatan demokrasi dan perdamaian.</p><p>\r\n5.Menjembatani jarak antara kajian-kajian akademik, aspirasi masarakat dan arah kebijakan pemerintah dalam upaya ikut merumuskan rekomendasi kebijakan dalam bidang keislaman, demokrasi dan perdamaian.                    <input type=\"hidden\" name=\"id_about\" value=\"6\">\r\n                    <input type=\"hidden\" name=\"place\" value=\"6\">\r\n                    </p>                    <input type=\"hidden\" name=\"id_about\" value=\"6\">\r\n                    <input type=\"hidden\" name=\"place\" value=\"6\">\r\n                    ', '6');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '77c25370d112c28199a1be6117dcc189'),
(2, 'admin2', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, 'admin3', '77c25370d112c28199a1be6117dcc189');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(5) NOT NULL,
  `judul_blog` varchar(40) NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `status` int(1) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `tgl_blog` date NOT NULL,
  `gambar_blog` varchar(50) NOT NULL,
  `isi_blog` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `judul_blog`, `kategori`, `status`, `deskripsi`, `tgl_blog`, `gambar_blog`, `isi_blog`) VALUES
(42, 'Tentang Puspidep', '', 2, '																				Tentang Apa itu Puspidep																		', '2018-08-07', '82c45eb1efb254557ba5f3a5c6dc1e74.jpg', '<p class=\"MsoNormal\" align=\"justify\" style=\"text-align: justify; line-height: 150%;\">PusPIDeP merupakan lembaga penelitian dan advokasi independen yang bertujuan untuk mengkaji isu-isu keislaman, demokrasi dan kemanusiaan. PusPIDeP berkomitmen untuk menanamkan dan memperkuat nilai-nilai sosial demokrasi dan perdamaian dalam masyarakat dengan mengadakan kegiatan penelitian, pengkajian, seminar, pelatihan, pendampingan, resolusi konflik serta publikasi.&nbsp;</p><p class=\"MsoNormal\" align=\"justify\" style=\"text-align: justify; line-height: 150%;\"><br></p><p class=\"MsoNormal\" align=\"justify\" style=\"text-align: justify; line-height: 150%;\">Latar belakang berdirinya PusPIDeP adalah respon terhadap munculnya politik identitas berbasis agama yang tidak jarang menimbulkan tensi sosial politik di kalangan masyarakat Muslim Indonesia pasca tumbangnya pemerintahan Suharto pada 1998. Demokratisasi di era baru yang sering disebut sebagai Era Reformasi disambut gembira oleh banyak elemen masyarakat Indonesia dan menjadi titik tolak kebebasan sipil dalam bidang politik, sosial keagamaan dan kebudayaan. Namun, demokratisasi juga turut serta memfasilitasi kelompok-kelompok keagamaan yang turut aktif mengisi ruang-ruang publik dengan ekspresi identitas berbasis agama. Fenomena ini turut menguatkan politik identitas dan potensi gesekan horizontal dalam kehidupan sosial masyarakat karena perbedaan penafsiran keagamaan maupun afiliasi politik.&nbsp;</p><p class=\"MsoNormal\" align=\"justify\" style=\"text-align: justify; line-height: 150%;\"><br></p><p class=\"MsoNormal\" align=\"justify\" style=\"text-align: justify; line-height: 150%;\">Anak muda yang sering disebut sebagai generasi penerus bangsa oleh kelompok elit tertentu menjadi salah satu fokus dan perhatian PusPIDeP. Fakta bahwa pemuda —yang merupakan kategori sosial penting dalam masyarakat Indonesia dan turut serta dalam banyak aktivisme berbasis agama di era demokratisasi— adalah generasi yang kerapkali terpapar krisis pencarian identitas. Selain itu, mereka juga seringkali dianggap banyak mengalami mentalitas terancam akibat dilema di antara kepungan budaya pop global yang ‘sekuler’ dan tuntutan kesalehan yang tinggi di kalangan keluarga dan masyarakat. Sebagai upaya untuk membentengi diri, generasi muda ini mencoba untuk mencari referensi keberagamaan yang tersedia di “pasar bebas”. Sayangnya tidak semua referensi keagamaan di pasar bebas tersebut selaras dengan gagasan demokrasi, civic virtue, dan kewarganegaraan dalam konteks negara bangsa modern.</p><p class=\"MsoNormal\" align=\"justify\" style=\"text-align: justify; line-height: 150%;\"><br></p><p class=\"MsoNormal\" align=\"justify\" style=\"text-align: justify; line-height: 150%;\">PusPIDeP berdiri untuk melihat fenomena ini lebih dalam, dan mencoba menggali akar masalah sekaligus mencari solusi yang tepat untuk meredam dan meminimalisir potensi gesekan dalam masyarakat.</p><p class=\"MsoNormal\" align=\"justify\" style=\"text-align: justify; line-height: 150%;\"><br></p><p class=\"MsoNormal\" align=\"justify\" style=\"text-align: justify; line-height: 150%;\">Dalam usianya yang cukup muda, PusPIDeP berupaya keras untuk mengembangkan serta memperdalam fokus penelitian kajian strategis dalam kehidupan sosial keagamaan dan kemasyarakatan sebagai pertimbangan dalam pengambilan kebijakan oleh pihak-pihak berwenang guna menciptakan kehidupan masyarakat yang bernilai dan bermartabat.&nbsp;</p><style>\r\n@font-face{\r\nfont-family:\"Times New Roman\";\r\n}\r\n\r\n@font-face{\r\nfont-family:\"宋体\";\r\n}\r\n\r\n@font-face{\r\nfont-family:\"Cambria\";\r\n}\r\n\r\n@font-face{\r\nfont-family:\"ＭＳ 明朝\";\r\n}\r\n\r\np.MsoNormal{\r\nmso-style-name:Normal;\r\nmso-style-parent:\"\";\r\nmargin:0pt;\r\nmargin-bottom:.0001pt;\r\nfont-family:Cambria;\r\nmso-fareast-font-family:\'ＭＳ 明朝\';\r\nmso-bidi-font-family:\'Times New Roman\';\r\nfont-size:12,0000pt;\r\n}\r\n\r\nspan.msoIns{\r\nmso-style-type:export-only;\r\nmso-style-name:\"\";\r\ntext-decoration:underline;\r\ntext-underline:single;\r\ncolor:blue;\r\n}\r\n\r\nspan.msoDel{\r\nmso-style-type:export-only;\r\nmso-style-name:\"\";\r\ntext-decoration:line-through;\r\ncolor:red;\r\n}\r\n@page{mso-page-border-surround-header:no;\r\n	mso-page-border-surround-footer:no;}@page Section0{\r\n}\r\ndiv.Section0{page:Section0;}</style>');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `do` varchar(100) NOT NULL,
  `level` varchar(1) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id_log`, `do`, `level`, `tgl`) VALUES
(1, '1', 'M', '2018-08-07 16:03:03'),
(2, 'Mengedit Sebuah Project :cek', '2', '2018-08-07 16:04:37'),
(3, 'Mengedit Sebuah Project :cek', '2', '2018-08-07 16:05:19'),
(4, 'Memposting Sebuah Portofolio :mencoba', '1', '2018-08-07 16:15:25'),
(5, 'Mengedit Sebuah Portofolio :mencoba', '2', '2018-08-07 16:15:55'),
(6, 'Mengedit dan Menganti Foto Sebuah Portofolio :mencoba', '2', '2018-08-07 16:16:13'),
(7, 'Menghapus Sebuah Portofolio :mencoba', '3', '2018-08-07 16:16:28'),
(8, 'Mengedit Sebuah Project :cek', '2', '2018-08-07 16:16:43'),
(9, 'Mengedit dan menganti Foto Sebuah Project :cek', '2', '2018-08-07 16:17:02'),
(10, 'Menghapus Sebuah Project :cek', '3', '2018-08-07 16:17:25'),
(11, 'Memposting Sebuah Blog :malma', '1', '2018-08-07 16:17:45'),
(12, 'Mengedit  Sebuah Blog :malma', '2', '2018-08-07 16:17:59'),
(13, 'Mengedit dan menganti Foto Sebuah Blog :malma', '2', '2018-08-07 16:18:19'),
(14, 'Menghapus Sebuah Blog :malma', '3', '2018-08-07 16:18:37'),
(15, 'Memposting Sebuah Blog :amls', '1', '2018-08-07 16:20:23'),
(16, 'Mengedit sebuah slider Dengan judul :Literatur  Keislaman  Millenial                                ', '2', '2018-08-07 16:29:39'),
(17, 'Mengedit settingan di About ', '2', '2018-08-07 16:30:02'),
(18, 'Menghapus Sebuah Portofolio :dsds', '3', '2018-08-07 16:39:24'),
(19, 'Mengedit sebuah slider Dengan judul :Literatur  Keislaman  Millenial                                ', '2', '2018-08-07 16:39:56'),
(20, 'Mengedit settingan di About ', '2', '2018-08-07 16:40:48'),
(21, 'Mengedit settingan di About ', '2', '2018-08-07 16:56:36'),
(22, 'Mengedit settingan di About ', '2', '2018-08-07 16:58:42'),
(23, 'Mengedit settingan di About ', '2', '2018-08-07 16:59:10'),
(24, 'Mengedit settingan di About ', '2', '2018-08-07 16:59:33'),
(25, 'Mengedit settingan di About ', '2', '2018-08-07 16:59:59'),
(26, 'Mengedit settingan di About ', '2', '2018-08-07 17:00:16'),
(27, 'Mengedit settingan di About ', '2', '2018-08-07 17:02:09'),
(28, 'Mengedit settingan di About ', '2', '2018-08-07 17:02:34'),
(29, 'Mengedit settingan di About ', '2', '2018-08-07 17:03:53'),
(30, 'Memposting Sebuah Blog :Tentang Puspidep', '1', '2018-08-07 17:05:32'),
(31, 'Mengedit  Sebuah Blog :Tentang Puspidep', '2', '2018-08-07 17:05:43'),
(32, 'Mengedit  Sebuah Blog :Tentang Puspidep', '2', '2018-08-07 17:06:27'),
(33, 'Menghapus Sebuah Project :Mencoba', '3', '2018-08-07 17:21:45'),
(34, 'admin Menganti Password User lain', '2', '2018-08-07 17:50:47'),
(35, 'Mengedit settingan di About ', '2', '2018-08-07 17:54:16'),
(36, 'Mengedit dan menganti Foto Sebuah Project :WORKSHOP EVALUASI PENELITIAN', '2', '2018-08-07 18:20:37'),
(37, 'Mengedit Sebuah Project :WORKSHOP EVALUASI PENELITIAN', '2', '2018-08-07 18:20:42'),
(38, 'Mengedit Sebuah Project :WORKSHOP EVALUASI PENELITIAN', '2', '2018-08-07 18:21:25'),
(39, 'Mengedit Sebuah Project :WORKSHOP EVALUASI PENELITIAN', '2', '2018-08-07 18:23:49'),
(40, 'Mengedit Sebuah Project :WORKSHOP EVALUASI PENELITIAN', '2', '2018-08-07 18:24:43'),
(41, 'Mengedit Sebuah Project :WORKSHOP EVALUASI PENELITIAN', '2', '2018-08-07 18:25:43'),
(42, 'Mengedit Sebuah Project :WORKSHOP EVALUASI PENELITIAN', '2', '2018-08-07 18:27:09'),
(43, 'Mengedit Sebuah Project :WORKSHOP EVALUASI PENELITIAN', '2', '2018-08-07 18:29:11'),
(44, 'Mengedit Sebuah Project :WORKSHOP EVALUASI PENELITIAN', '2', '2018-08-07 18:29:21'),
(45, 'Memposting Sebuah Kiriman Project :WORKSHOP PERSIAPAN PENELITIAN', '1', '2018-08-07 18:32:13'),
(46, 'Mengedit Sebuah Project :WORKSHOP EVALUASI PENELITIAN', '2', '2018-08-07 18:32:37'),
(47, 'Mengedit Sebuah Project :WORKSHOP PERSIAPAN PENELITIAN', '2', '2018-08-07 18:32:55'),
(48, 'Memposting Sebuah Kiriman Project :RISET (WAWANCARA DAN FGD)', '1', '2018-08-07 18:34:53'),
(49, 'Mengedit dan Menganti Foto Sebuah Portofolio :WORKSHOP EVALUASI PENELITIAN', '2', '2018-08-08 08:24:18'),
(50, 'Menghapus Sebuah Blog :Blog', '3', '2018-08-08 08:25:02'),
(51, 'Menghapus Sebuah Blog :amls', '3', '2018-08-08 08:25:15'),
(52, 'Mengedit settingan di About ', '2', '2018-08-08 08:28:02'),
(53, 'Memposting Sebuah Kiriman Project :Mencoba', '1', '2018-08-09 10:28:47'),
(54, 'Mengedit dan menganti Foto Sebuah Project :Mencoba', '2', '2018-08-09 10:29:02'),
(55, 'Menghapus Sebuah Project :Mencoba', '3', '2018-08-09 10:29:16'),
(56, 'Memposting Sebuah Portofolio :Portofolio', '1', '2018-08-09 10:32:31'),
(57, 'Mengedit Sebuah Portofolio :Portofolio1', '2', '2018-08-09 10:32:46'),
(58, 'Menghapus Sebuah Portofolio :Portofolio1', '3', '2018-08-09 10:32:51'),
(59, 'Mengedit settingan di About ', '2', '2018-08-09 10:33:16'),
(60, 'Mengedit settingan di About ', '2', '2018-08-09 10:33:27'),
(61, 'Mengedit settingan di About ', '2', '2018-08-09 10:33:27'),
(62, 'Mengedit sebuah slider Dengan judul :Literatur  Keislaman  Milenial                                 ', '2', '2018-08-09 14:37:52'),
(63, 'Mengedit sebuah slider Dengan judul :Peta Literatur Keislaman  Milenial: Ideologi dan Jaringan      ', '2', '2018-08-09 14:38:11'),
(64, 'admin Menganti Password User lain', '2', '2018-08-09 14:44:03'),
(65, 'admin Menganti Password User lain', '2', '2018-08-09 14:46:34'),
(66, 'Mengedit dan Menganti Foto Sebuah Portofolio :WORKSHOP EVALUASI PENELITIAN', '2', '2018-08-09 14:48:15'),
(67, 'Mengedit settingan di About ', '2', '2018-08-10 15:58:40'),
(68, 'Mengedit settingan di About ', '2', '2018-09-06 07:27:08'),
(69, 'Mengedit settingan di About ', '2', '2018-09-09 01:23:11'),
(70, 'Mengedit settingan di About ', '2', '2018-09-09 01:23:27'),
(71, 'Mengedit settingan di About ', '2', '2018-09-09 01:23:50'),
(72, 'Mengedit settingan di About ', '2', '2018-09-09 01:27:11'),
(73, 'Mengedit settingan di About ', '2', '2018-09-09 01:28:00'),
(74, 'admin Menganti Password User lain', '2', '2018-10-09 00:15:13'),
(75, 'admin Menganti Password User lain', '2', '2018-10-09 06:16:23'),
(76, 'admin Menganti Password User lain', '2', '2018-10-09 06:17:11'),
(77, 'admin Menganti Password User lain', '2', '2018-10-09 13:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `Judul_portofolio` varchar(40) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `status` varchar(3) NOT NULL,
  `Gambar_portofolio` varchar(100) NOT NULL,
  `isi_portofolio` text NOT NULL,
  `tgl_portofolio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id_portofolio`, `Judul_portofolio`, `deskripsi`, `status`, `Gambar_portofolio`, `isi_portofolio`, `tgl_portofolio`) VALUES
(8, 'WORKSHOP EVALUASI PENELITIAN', '.										.									', '2', '08eb0729b7dc049ebd2fb0703860549a.jpg', '<p><font color=\"#23527c\"><span style=\"background-color: rgb(247, 250, 252); outline-offset: -2px; white-space: nowrap;\">WORKSHOP EVALUASI PENELITIAN</span></font><br></p>', '2018-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `judul_project` varchar(40) NOT NULL,
  `logo_project` varchar(40) NOT NULL,
  `deskripsi_project` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `judul_project`, `logo_project`, `deskripsi_project`) VALUES
(1, 'RISET PENELITIAN', 'flaticon-worker', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(2, 'WORKSHOP', 'flaticon-sketch', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'),
(3, 'FOCUS GROUP DISCCUSION', 'flaticon-engineering', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.\r\n\r\n'),
(4, 'SEMINAR', 'flaticon-crane', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.');

-- --------------------------------------------------------

--
-- Table structure for table `project_post`
--

CREATE TABLE `project_post` (
  `id_project_post` int(4) NOT NULL,
  `judul_project` varchar(150) NOT NULL,
  `status` varchar(5) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `tgl_project` date NOT NULL,
  `gambar_project` varchar(200) NOT NULL,
  `isi_project` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_post`
--

INSERT INTO `project_post` (`id_project_post`, `judul_project`, `status`, `deskripsi`, `tgl_project`, `gambar_project`, `isi_project`) VALUES
(12, 'WORKSHOP EVALUASI PENELITIAN', '2', 'Kegiatan pertama yang dilakukan adalah Overview Riset-riset Keislaman Kontemporer di Indonesia yang ', '2018-08-07', 'e5d948b60326fbb46d0ffff6e372edf8.jpg', '<div style=\"text-align: justify;\"><p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; color: rgba(0, 0, 0, 0.7); font-family: Quicksand, Arial, sans-serif; font-size: 12.75px; text-indent: 36pt; line-height: 19.125px;\"><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Kegiatan pertama yang dilakukan adalah Overview Riset-riset Keislaman Kontemporer di Indonesia yang dimulai dari pukul. 08.25 – 10.30 WIB. Acara pada sesi ini dimoderatori oleh Dr. Nina Mariani Noor, dengan dua Pemateri yaitu Prof. Dr. Noorhaidi, M.Phil dan Dr. Saiful Umam. Masing-masing pemateri dibagi dalam dua pembahsan, meliputi Riset-riset UIN Yogyakarta yang diisi oleh Prof. Dr. Noorhaidi, M.Phil dan dan Riset-riset PPIM UIN Jakarta diisi oleh Dr. Saiful Umam.  Sesi kedua yakni diskusi tentang Salafisme: Dogma, Jaringan dan Gerakan, sesi ini di moderatori oleh Dr. Uzair dengan tiga pemateri, sesi ini dimulai 10.15 – 12.40 WIB. Pemateri pertama oleh Dr. Sunarwoto tentang Salafisme dan dogmanya di Indonesia oleh, dilanjutkan oleh Dr. Din Wahid yang menjelaskan tentang Salafisme dan jaringannya pada Institusi Pendidikan di Indonesia dan Dr. Jajang Jahroni tentang Transmisi dan reproduksi pengetahuan kelompok Salafi. Di akhir sesi, audien dipersilahkan untuk bertanya atau memberikan komentar. </span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Sesi ketiga merupakan sesi terakhir di hari pertama workshop, sesi terkait </span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Strategi dan Pengalaman Riset Lapangan</span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\"> dimoderatori oleh </span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Dr. Ahmad Rafiq. Dalam sesi ini ada dua pemateri yaitu Dr. Martin Slama dan Dr. Hilman Latief, sesi ini dimulai pada 13.40 – 15.30. Pemateri pertama  yaitu Dr. Martin Slama menjelaskan Riset Lapangan tentang public piety: metode dan pendekatan dan Dr. Hilman Latief menjelaskan tentang Riset Lapangan tentang literatur keislaman di perguruan tinggi: sharing pengalaman.<o:p></o:p></span></p><p style=\"margin-bottom: 1.5em; color: rgba(0, 0, 0, 0.7); font-family: Quicksand, Arial, sans-serif; font-size: 12.75px; text-align: left;\"></p><p class=\"MsoNormal\" style=\"margin-bottom: 1.5em; color: rgba(0, 0, 0, 0.7); font-family: Quicksand, Arial, sans-serif; font-size: 12.75px; text-indent: 24.6pt; line-height: 19.125px;\"><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Acara workshop persipan penelitian di hari kedua dimulai pada pukul 08.30 WIB. Sesi pertama membahas tentang</span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\"> Literatur Keislaman, dimulai pada 08.30-10.30 yang dipimpin oleh Dr. Ahmad Rofiq. Pematerinya meliputi Dr. Sunarwoto. Pada sesi ini secara mendalam dibahas tentang </span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Objek riset teks atau literatur  dan Konsep-konsep kunci Islamisme dalam teks atau literatur untuk instrumen penelitian.  Menurut Dr. Ahmad Rofiq, ada beberapa hal yang harus diperhatikan ketika meneliti literatur. Meliputi: Tema, Kata kunci (khilafah, wala’), Dan tokoh dan referensi. Hal ini karena dalam konteks Jogja,  Balai Teknologi Komunikasi Pendidikan yang merupakan penerbit buku digital juga menyatak bahwa control terhadap buku pelajaran khususnya Agama saat ini masih sangat minim. Hal ini semakin menunjukkan pentingnya melihat tiga unsur di atas. Permaslahan yang perlu disoroti juga yakni posisi buku pelajaran PAI, fakta menyebutkan jika buku paket di bawah Diknas tetapi pengelolaannya ada di Kemenag. </span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Sesi Kedua membahas tentang</span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Instrumen Interview, dimulai pada 10.45-12.45 yang diisi oleh Dr. Najib Kailani.  </span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Beiau menyampaikan bahwa akan ada survei sederhana, hal ini untuk mengidentifikasi literatur sekaligus mapping. Hal yang perlu diperhatikan dalam wawancara yakni kejelasan dari judul buku, judul literatur, dan pengarang. Akan tetapi survei ini tidak sampai pada Persepsi. Total literatur yang harus dikumpukan dan dibeli  yaitu 50 buku, akan bisa disesuaikan dengan kondisi di lapangan. Untuk mengantisipasi siswa atau mahasiswa mengenal penulis tetapi tidak tahu judul buku, pemikiran dan karya tokoh terkenal yang direproduksi oleh penulis lokal, survey buku terbuka terutama untuk melacak literatur ekstrakulikuler, antisipasi buku yang dikonsumsi dan dibaca. Untuk mendeteksi literatur harus ada nama atau judul buku, menanyakan proses mendapatkannya. Hal-hal yang harus diperhatikan dalam Survei, apakah ada modul pada kegiatan/halaqah agama yg terintegrasi dengan sekolah/kampus. Dan Untuk melihat pemikiran wanita, diperlukan <i>gender balance</i> dalam survei. </span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Sesi Kedua membahas tentang</span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\"> Instrumen FGD, dimulai pada 13.45-15.45yang diisi oleh Dr. Najib Kailani dan Dr. Nina Mariani Noor. </span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Point yang ingin digali dari interview dan FGD yaitu Tentang bagaima buku sampai ke siswa atau argumentasi pemilihan buku. FGD hanya dilakukan pada murit, sedangkan guru interview.</span></p></div>'),
(15, 'WORKSHOP PERSIAPAN PENELITIAN', '2', '										Kegiatan pertama yang dilakukan adalah Overview Riset-riset Keislaman Kontemporer di Indon', '2018-08-07', '07596cb29f87ff31fff235f4cb4e5471.jpg', '<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; color: rgba(0, 0, 0, 0.7); font-family: Quicksand, Arial, sans-serif; font-size: 12.75px; text-align: justify; text-indent: 36pt; line-height: 19.125px;\"><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Kegiatan pertama yang dilakukan adalah Overview Riset-riset Keislaman Kontemporer di Indonesia yang dimulai dari pukul. 08.25 – 10.30 WIB. Acara pada sesi ini dimoderatori oleh Dr. Nina Mariani Noor, dengan dua Pemateri yaitu Prof. Dr. Noorhaidi, M.Phil dan Dr. Saiful Umam. Masing-masing pemateri dibagi dalam dua pembahsan, meliputi Riset-riset UIN Yogyakarta yang diisi oleh Prof. Dr. Noorhaidi, M.Phil dan dan Riset-riset PPIM UIN Jakarta diisi oleh Dr. Saiful Umam.  Sesi kedua yakni diskusi tentang Salafisme: Dogma, Jaringan dan Gerakan, sesi ini di moderatori oleh Dr. Uzair dengan tiga pemateri, sesi ini dimulai 10.15 – 12.40 WIB. Pemateri pertama oleh Dr. Sunarwoto tentang Salafisme dan dogmanya di Indonesia oleh, dilanjutkan oleh Dr. Din Wahid yang menjelaskan tentang Salafisme dan jaringannya pada Institusi Pendidikan di Indonesia dan Dr. Jajang Jahroni tentang Transmisi dan reproduksi pengetahuan kelompok Salafi. Di akhir sesi, audien dipersilahkan untuk bertanya atau memberikan komentar. </span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Sesi ketiga merupakan sesi terakhir di hari pertama workshop, sesi terkait </span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Strategi dan Pengalaman Riset Lapangan</span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\"> dimoderatori oleh </span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Dr. Ahmad Rafiq. Dalam sesi ini ada dua pemateri yaitu Dr. Martin Slama dan Dr. Hilman Latief, sesi ini dimulai pada 13.40 – 15.30. Pemateri pertama  yaitu Dr. Martin Slama menjelaskan Riset Lapangan tentang public piety: metode dan pendekatan dan Dr. Hilman Latief menjelaskan tentang Riset Lapangan tentang literatur keislaman di perguruan tinggi: sharing pengalaman.<o:p></o:p></span></p><p style=\"margin-bottom: 1.5em; color: rgba(0, 0, 0, 0.7); font-family: Quicksand, Arial, sans-serif; font-size: 12.75px;\"></p><p class=\"MsoNormal\" style=\"margin-bottom: 1.5em; color: rgba(0, 0, 0, 0.7); font-family: Quicksand, Arial, sans-serif; font-size: 12.75px; text-align: justify; text-indent: 24.6pt; line-height: 19.125px;\"><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Acara workshop persipan penelitian di hari kedua dimulai pada pukul 08.30 WIB. Sesi pertama membahas tentang</span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\"> Literatur Keislaman, dimulai pada 08.30-10.30 yang dipimpin oleh Dr. Ahmad Rofiq. Pematerinya meliputi Dr. Sunarwoto. Pada sesi ini secara mendalam dibahas tentang </span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Objek riset teks atau literatur  dan Konsep-konsep kunci Islamisme dalam teks atau literatur untuk instrumen penelitian.  Menurut Dr. Ahmad Rofiq, ada beberapa hal yang harus diperhatikan ketika meneliti literatur. Meliputi: Tema, Kata kunci (khilafah, wala’), Dan tokoh dan referensi. Hal ini karena dalam konteks Jogja,  Balai Teknologi Komunikasi Pendidikan yang merupakan penerbit buku digital juga menyatak bahwa control terhadap buku pelajaran khususnya Agama saat ini masih sangat minim. Hal ini semakin menunjukkan pentingnya melihat tiga unsur di atas. Permaslahan yang perlu disoroti juga yakni posisi buku pelajaran PAI, fakta menyebutkan jika buku paket di bawah Diknas tetapi pengelolaannya ada di Kemenag. </span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Sesi Kedua membahas tentang</span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Instrumen Interview, dimulai pada 10.45-12.45 yang diisi oleh Dr. Najib Kailani.  </span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Beiau menyampaikan bahwa akan ada survei sederhana, hal ini untuk mengidentifikasi literatur sekaligus mapping. Hal yang perlu diperhatikan dalam wawancara yakni kejelasan dari judul buku, judul literatur, dan pengarang. Akan tetapi survei ini tidak sampai pada Persepsi. Total literatur yang harus dikumpukan dan dibeli  yaitu 50 buku, akan bisa disesuaikan dengan kondisi di lapangan. Untuk mengantisipasi siswa atau mahasiswa mengenal penulis tetapi tidak tahu judul buku, pemikiran dan karya tokoh terkenal yang direproduksi oleh penulis lokal, survey buku terbuka terutama untuk melacak literatur ekstrakulikuler, antisipasi buku yang dikonsumsi dan dibaca. Untuk mendeteksi literatur harus ada nama atau judul buku, menanyakan proses mendapatkannya. Hal-hal yang harus diperhatikan dalam Survei, apakah ada modul pada kegiatan/halaqah agama yg terintegrasi dengan sekolah/kampus. Dan Untuk melihat pemikiran wanita, diperlukan <i>gender balance</i> dalam survei. </span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Sesi Kedua membahas tentang</span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\"> Instrumen FGD, dimulai pada 13.45-15.45yang diisi oleh Dr. Najib Kailani dan Dr. Nina Mariani Noor. </span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 24px; font-family: Verdana, sans-serif;\">Point yang ingin digali dari interview dan FGD yaitu Tentang bagaima buku sampai ke siswa atau argumentasi pemilihan buku. FGD hanya dilakukan pada murit, sedangkan guru interview.</span></p>'),
(16, 'RISET (WAWANCARA DAN FGD)', '2', 'Wawancara Dalam penelitian ditujukan untuk menggali informasi mengenai literatur keislaman yang diba', '2018-08-07', '7101e20bbac2bee88bac6dd363e5b9c5.jpg', '<p class=\"MsoNormal\" style=\"margin-bottom: 1.5em; color: rgba(0, 0, 0, 0.7); font-family: Quicksand, Arial, sans-serif; font-size: 12.75px; text-align: justify; text-indent: 36pt; line-height: 12.6225px;\"><span lang=\"IN\" style=\"font-size: 12pt; line-height: 15.84px; font-family: Verdana, sans-serif;\">Wawancara Dalam penelitian ditujukan untuk menggali informasi mengenai literatur keislaman yang dibaca dan beredar (populer) di kalangan siswa dan mahasiswa. Selain itu, tujuan penting lainnya adalah menginvestigasi respon dan persepsi siswa dan mahasiswa terhadap buku pelajaran dan juga bacaan tambahan keislaman yang direkomendasikan baik oleh guru maupun mentor di luar kegiatan PAI di kelas seperi kegiatan Rohis, LDK dan lainnya. Sedangkan wawancara terhadap guru/dosen bertujuan untuk menggali informasi seputar pilihan buku ajar dan penerbit, kebijakan sekolah mengenai PAI, Rohis dan LDK serta lainnya. Selain itu juga untuk menggali informasi mengenai metode evaluasi.<o:p></o:p></span></p><p style=\"margin-bottom: 1.5em; color: rgba(0, 0, 0, 0.7); font-family: Quicksand, Arial, sans-serif; font-size: 12.75px;\"></p><p class=\"MsoNormal\" style=\"margin-bottom: 1.5em; color: rgba(0, 0, 0, 0.7); font-family: Quicksand, Arial, sans-serif; font-size: 12.75px; text-align: justify; text-indent: 36pt; line-height: 12.6225px;\"><span style=\"position: absolute; z-index: -1895819264; left: 0px; margin-left: 151px; margin-top: 2006px; width: 535px; height: 401px;\"><img width=\"357\" height=\"267\" src=\"file:///C:/Users/Muftia/AppData/Local/Temp/msohtmlclip1/01/clip_image002.png\" v:shapes=\"Picture_x0020_1\"></span><span lang=\"IN\" style=\"font-size: 12pt; line-height: 15.84px; font-family: Verdana, sans-serif;\">Wawancara dibuat selentur dan senyaman mungkin agar informan/responden bisa memberikan informasi yang dalam dan luas. Alur wawancara sebaiknya diadaptasi secara kreatif oleh peneliti. Materi yang dipaparkan di bawah hanya menguraikan aspek-aspek yang umum dalam penelitian ini. Wawancara dilakukan antara 90-120 menit dengan jumlah informan total 18. Jumlah informan bisa lebih menyesuaikan kebutuhan di lapangan.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `gambar_slider` varchar(240) NOT NULL,
  `judul` varchar(240) NOT NULL,
  `link` varchar(240) NOT NULL,
  `sub_content` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `gambar_slider`, `judul`, `link`, `sub_content`) VALUES
(1, 'b39751169a586da454dc2fb282bd4c14.jpg', 'Literatur  Keislaman  Milenial                                                                                                                                                                                                                  ', 'http://localhost/Puspidep/Project/Show_project/12/2018-08-08', 'Literatur Keislaman Milenial'),
(2, 'bg2.jpeg', 'Peta Literatur Keislaman  Milenial: Ideologi dan Jaringan                                                                                                                        ', 's', 'Penelitian ini bertujuan untuk memetakan literatur keislaman yang tersebar dan diakses kalangan pelajar SMA dan mahasiswa di Indonesia.                                                                                                                        '),
(3, 'bg3.jpg', 'Diseminasi Jakarta  2018                         ', 's', 'Narasumber dan Pembahas Diseminasi di Jakarta                                        ');

-- --------------------------------------------------------

--
-- Table structure for table `slider_project`
--

CREATE TABLE `slider_project` (
  `id_slider_project` int(5) NOT NULL,
  `Judul` varchar(50) NOT NULL,
  `Gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider_project`
--

INSERT INTO `slider_project` (`id_slider_project`, `Judul`, `Gambar`) VALUES
(1, 'WORKSHOP', 'ab2w.jpg'),
(2, 'FOCUS GROUP DISCUSSION', 'ab3.jpg'),
(3, 'MEDIA CONVEY INDONESIA', 'ab4.jpg'),
(4, 'DISEMINASI JAKARTA', 'ab6.jpg'),
(5, 'DISEMINASI YOGYAKARTA', 'ab5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `project_post`
--
ALTER TABLE `project_post`
  ADD PRIMARY KEY (`id_project_post`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `slider_project`
--
ALTER TABLE `slider_project`
  ADD PRIMARY KEY (`id_slider_project`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_post`
--
ALTER TABLE `project_post`
  MODIFY `id_project_post` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider_project`
--
ALTER TABLE `slider_project`
  MODIFY `id_slider_project` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
