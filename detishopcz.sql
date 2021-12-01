-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost:8889
-- Vytvořeno: Stř 01. pro 2021, 11:08
-- Verze serveru: 5.7.34
-- Verze PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `detishopcz`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(1, 'Jh-design.cz', 'info@jh-design.cz', 'admin', 'logo.PNG', 'ČR', '  Tato aplikace je vytvořena společností jh-design.cz, pokud mě chcete kontaktovat, klikněte na tento odkaz', '+420 773 381 467', 'Web developer');

-- --------------------------------------------------------

--
-- Struktura tabulky `boxes_section`
--

CREATE TABLE `boxes_section` (
  `box_id` int(10) NOT NULL,
  `box_title` text NOT NULL,
  `box_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `boxes_section`
--

INSERT INTO `boxes_section` (`box_id`, `box_title`, `box_desc`) VALUES
(1, 'Milujeme slevy', 'Toto je testovací text'),
(2, 'Originál zboží', 'kvalita především'),
(3, ' Turecko ', 'Dovoz z turecka, kvalitní nejlepší zboží');

-- --------------------------------------------------------

--
-- Struktura tabulky `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabulky `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_top` text NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_top`, `cat_image`) VALUES
(2, 'Akční nabídka', 'ano', 'akce.png'),
(3, 'Pro chlapce', 'ne', 'kluci.png'),
(4, ' Pro dívky ', 'ano', 'holky.png'),
(5, ' Pro miminka ', 'ano', 'mimi.png'),
(6, ' Módní doplňky ', 'ano', 'doplnky.png'),
(7, '  Obuv  ', 'ano', 'obuv.png'),
(8, ' Hračky ', 'ano', 'hry.png'),
(9, ' Bazar ', 'ne', 'bazar.png');

-- --------------------------------------------------------

--
-- Struktura tabulky `coupons`
--

CREATE TABLE `coupons` (
  `coupon_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `coupon_title` varchar(255) NOT NULL,
  `coupon_price` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_limit` int(100) NOT NULL,
  `coupon_used` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `coupons`
--

INSERT INTO `coupons` (`coupon_id`, `product_id`, `coupon_title`, `coupon_price`, `coupon_code`, `coupon_limit`, `coupon_used`) VALUES
(1, 19, 'Kupón', '1000', '223344', 3, 2);

-- --------------------------------------------------------

--
-- Struktura tabulky `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_city` varchar(255) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_city`, `customer_contact`, `customer_address`, `customer_ip`) VALUES
(10, ' Uživatel', 'test@test.cz', 'testik', 'Test', '+420 123 456 789', 'Testovani 32', '::1');

-- --------------------------------------------------------

--
-- Struktura tabulky `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(1, 10, 200, 1440908889, 1, 'S', '2021-11-25', 'čeká na vyřízení'),
(2, 10, 399, 6961851, 1, 'M', '2021-11-26', 'čeká na vyřízení');

-- --------------------------------------------------------

--
-- Struktura tabulky `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(10) NOT NULL,
  `manufacturer_title` text NOT NULL,
  `manufacturer_top` text NOT NULL,
  `manufacturer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `manufacturers`
--

INSERT INTO `manufacturers` (`manufacturer_id`, `manufacturer_title`, `manufacturer_top`, `manufacturer_image`) VALUES
(1, 'Adidas', 'ano', 'ad.jpg'),
(2, 'Disney', 'ano', 'disney.jpg'),
(3, 'Guess', 'ano', 'gue.png'),
(4, 'Hello Kitty', 'ano', 'hk.png'),
(5, 'Nike', 'ano', 'nik.jpg');

-- --------------------------------------------------------

--
-- Struktura tabulky `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabulky `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(1, 10, 1440908889, '22', 1, 'S', 'čeká na vyřízení'),
(2, 10, 6961851, '16', 1, 'M', 'čeká na vyřízení');

-- --------------------------------------------------------

--
-- Struktura tabulky `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `manufacturer_id` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_url` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_features` text NOT NULL,
  `product_video` text NOT NULL,
  `product_label` text NOT NULL,
  `product_sale` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `p_cat_id`, `manufacturer_id`, `date`, `product_title`, `product_url`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`, `product_features`, `product_video`, `product_label`, `product_sale`) VALUES
(1, 5, 12, 1, '2021-11-25 15:08:33', 'Vánoční komplet', 'komplet', 'vanoce-1.jpg', 'vanoce-1a.jpg', 'vanoce-1.jpg', 399, 'Komplety, miminka, vánoční, vánoční komplet', '<p>Kr&aacute;sn&yacute; v&aacute;nočn&iacute; komplet pro miminka, ve velikosti 62. Už&iacute;jte si kr&aacute;sn&eacute; v&aacute;noce.</p>', '<p>* jemn&eacute;</p>\r\n<p>* v&aacute;nočn&iacute;</p>\r\n<p>* to chce&scaron;</p>', '                                    <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/fZWjyQ3AxsE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>                                ', 'sleva', 350),
(2, 5, 12, 4, '2021-11-18 11:50:24', 'Komplet pro miminko', 'komplet-2', 'komplet-2.jpg', 'komplet-2a.jpg', 'komplet-2.jpg', 199, 'komplet, pro miminko, pro holky, pro kluky', ' <p>Komplet se skl&aacute;d&aacute; s trička, tepl&aacute;ků, čepice, rukavic a brynd&aacute;ku. Vyrobeno ze 100% bavlny.</p>', '', '', 'sleva', 119),
(3, 3, 8, 3, '2021-11-18 11:50:18', 'Tričko', 'tricko', 'komplet-2.jpg', 'komplet-2a.jpg', 'komplet-2.jpg', 300, 'tricko', ' <p>nbldancldanldnncadkl</p>', '', '', 'novinka', 0),
(4, 3, 13, 2, '2021-11-18 11:50:13', 'Chlapecká bunda', 'bunda', 'chlapecka-bunda1a.jpg', 'chlapecka-bunda1b.jpg', 'chlapecka-bunda1c.jpg', 586, 'chlapecká, zimní, bunda', ' <p>Blallllllaaaaaaaaaa</p>', '', '', 'sleva', 500),
(5, 4, 8, 1, '2021-11-18 11:50:08', 'Tričko', 'tricko-2', 'g-polos-tshirt-1.jpg', 'g-polos-tshirt-2.jpg', 'g-polos-tshirt-1.jpg', 199, 'tricko', ' <p>Tričko. aaaaaa</p>', '', '', 'novinka', 0),
(6, 7, 17, 5, '2021-11-18 11:50:03', 'Lodičky', 'lodicky', 'High Heels Women Pantofel Brukat-1.jpg', 'High Heels Women Pantofel Brukat-2.jpg', 'High Heels Women Pantofel Brukat-3.jpg', 999, 'lodicky', ' <p>lodickay alakdak</p>', '', '', 'novinka', 0),
(7, 7, 17, 4, '2021-11-18 11:49:58', 'Boty', 'boty', 'Man-Adidas-Suarez-Slop-On-1.jpg', 'Man-Adidas-Suarez-Slop-On-2.jpg', 'Man-Adidas-Suarez-Slop-On-3.jpg', 1299, 'boty', ' <p>sahlshlaskalnxaklsnxa</p>', '', '', 'novinka', 0),
(8, 3, 8, 3, '2021-11-18 11:49:53', 'Košile', 'kosile', 'Man-Geox-Winter-jacket-1.jpg', 'Man-Geox-Winter-jacket-2.jpg', 'Man-Geox-Winter-jacket-3.jpg', 799, 'košile', ' <p>jdkabcnaklcadn</p>', '', '', 'novinka', 0),
(9, 6, 16, 2, '2021-11-18 11:49:46', 'Opasek', 'opasek', 'Mont-Blanc-Belt-man-1.jpg', 'Mont-Blanc-Belt-man-2.jpg', 'Mont-Blanc-Belt-man-3.jpg', 566, 'opasek', ' <p>dlancdalda</p>', '', '', 'novinka', 0),
(10, 3, 8, 1, '2021-11-18 11:49:41', 'Tričko', 'tricko-3', 'Man-Polo-1.jpg', 'Man-Polo-2.jpg', 'Man-Polo-3.jpg', 598, 'tričko', ' <p>blaaaaaaaaaaa</p>', '', '', 'novinka', 0),
(11, 4, 13, 5, '2021-11-18 11:49:35', 'Bunda', 'bunda-2', 'Red-Winter-jacket-1.jpg', 'Red-Winter-jacket-2.jpg', 'Red-Winter-jacket-3.jpg', 2999, 'bunda', ' <p>casnalknxaslkmxals</p>', '', '', 'sleva', 30),
(12, 4, 13, 4, '2021-11-18 11:49:26', 'Kabát', 'kabat', 'waxed-cotton-coat-woman-1.jpg', 'waxed-cotton-coat-woman-2.jpg', 'waxed-cotton-coat-woman-3.jpg', 999, 'kabát', ' <p>jcladlckalckadnoida</p>', '', '', 'sleva', 640),
(14, 3, 9, 3, '2021-11-18 10:02:47', 'Test -prsten', 'test', '2.png', '', '', 199, ' #prsten, #dámský, #srdce', '<p>Tako jako popis k hovnu.</p>', '', '', 'sleva', 25),
(16, 4, 8, 3, '2021-11-25 14:55:08', 'Dívčí tričko Guess', 'tricko-guess', 'g1.jpg', 'g2.jpg', 'g3.jpg', 399, '#guess, #tričko, #dívčí tričko, #růžové tričko, #tričko s nápisem', '<h3><code><strong>N&aacute;vod na &uacute;držbu:</strong></code></h3>\r\n<p>* nečistit chemicky</p>\r\n<p>* nen&iacute; vhodn&eacute; do su&scaron;ičky</p>\r\n<p>* nebělit</p>\r\n<p>* nežd&iacute;mat</p>\r\n<p>* pr&aacute;t v ruce nebo v pračce na jemn&yacute; program</p>\r\n<p>* žehlit na niž&scaron;&iacute; teplotu</p>\r\n<p>&nbsp;</p>', '', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/fZWjyQ3AxsE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'novinka', 0),
(19, 3, 12, 2, '2021-11-18 11:49:13', 'Testování', 'testovani', '1.png', '1.png', '1.png', 900, '#test #test', ' <p>blalalblcdablkdalkdlajkl</p>', '', '', 'sleva', 750),
(20, 3, 8, 1, '2021-11-23 08:24:34', 'Oprava', 'oprava', '2.png', '2.png', '2.png', 190, 'oprava, oprava', '<p>aaa</p>', '', '', 'novinka', 150),
(22, 4, 11, 2, '2021-11-25 15:05:58', 'Test-3', 'test-3', 'jedno.jpg', 'jedno.jpg', 'jedno.jpg', 223, 'to chces', '<p>test spojen&iacute;</p>', '<p>- jedna</p>\r\n<p>- dva&nbsp;</p>\r\n<p>- tři</p>', '<p><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/fZWjyQ3AxsE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe></p>                                ', 'sleva', 200);

-- --------------------------------------------------------

--
-- Struktura tabulky `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_top` text NOT NULL,
  `p_cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_top`, `p_cat_image`) VALUES
(7, ' Sukně, šaty ', 'ano', 'saty.png'),
(8, ' Trička, košile ', 'ano', 'tricka.png'),
(9, ' Kalhoty, kraťasy ', 'ne', 'kalhoty.png'),
(11, ' Svetry, mikiny ', 'ano', 'svetry.png'),
(12, ' Soupravy ', 'ano', 'komplety.png'),
(13, ' Bundy, vesty ', 'ne', 'budy.png'),
(14, ' Plavky,prádlo ', 'ano', 'spodni.png'),
(15, ' Bodyčka, overaly ', 'ano', 'body.png');

-- --------------------------------------------------------

--
-- Struktura tabulky `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_url` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_url`, `slide_image`) VALUES
(1, 'Slide number 1', '', 'slide-1.jpg'),
(2, 'Vánoce', '', 'slide-2.jpg'),
(3, 'Slide number 3', '', 'slide-3.jpg'),
(6, 'vánoce', 'shop.php', 'slide-4.jpg');

-- --------------------------------------------------------

--
-- Struktura tabulky `terms`
--

CREATE TABLE `terms` (
  `term_id` int(10) NOT NULL,
  `term_title` varchar(100) NOT NULL,
  `term_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `terms`
--

INSERT INTO `terms` (`term_id`, `term_title`, `term_desc`) VALUES
(1, '     Obchodní podmínky     ', '<h3>VŠEOBECNÉ OBCHODNÍ PODMÍNKY PRO E-SHOPY</h3> <br>\r\nTyto všeobecné obchodní podmínky (“Podmínky”) upravují práva a povinnosti Vás, jakožto kupujících a Nás jakožto prodávajících v rámci smluvních vztahů uzavřených prostřednictvím E-shopu na webových stránkách [BUDE DOPLNĚNO]. <br>\r\nVšechny informace o zpracování Vašich osobních údajů jsou obsaženy v Zásadách zpracování osobních údajů, která naleznete zde [BUDE DOPLNĚNO].<br>\r\nJak jistě víte, tak komunikujeme primárně na dálku. Proto i pro naši Smlouvu platí, že jsou použity prostředky komunikace na dálku, které umožňují, abychom se spolu dohodli bez současné fyzické přítomnosti Nás a Vás.\r\nPokud některá část Podmínek odporuje tomu, co jsme si společně schválili v rámci procesu Vašeho nákupu na Našem E-shopu, bude mít tato konkrétní dohoda před Podmínkami přednost.<br>\r\n1.<h3>NĚKTERÉ DEFINICE</h3> <br>\r\n1.1.	Cena je finanční částka, kterou budete hradit za Zboží;<br>\r\n1.2.	Cena za dopravu je finanční částka, kterou budete hradit za doručení Zboží a to včetně ceny za jeho zabalení;<br>\r\n1.3.	Celková cena je součet Ceny a Ceny za dopravu;<br>\r\n1.4.	DPH je daň z přidané hodnoty dle platných právních předpisů;<br> \r\n1.5.	E-shop je internetový obchod provozovaný Námi na adrese [BUDE DOPLNĚNO], na kterém bude probíhat nákup Zboží;<br>\r\n1.6.	Faktura je daňový doklad vystavený v souladu se zákonem o dani z přidané hodnoty na Celkovou cenu;<br>\r\n1.7.	My jsme společnost [BUDE DOPLNĚNO], se sídlem [BUDE DOPLNĚNO], IČO [BUDE DOPLNĚNO], zapsaná v obchodním rejstříku pod sp. zn. [BUDE DOPLNĚNO] vedeném u [BUDE DOPLNĚNO], e-mail [BUDE DOPLNĚNO], telefonní číslo [BUDE DOPLNĚNO], právními předpisy označovaná jako prodávající;<br>\r\n1.8.	Objednávka je Váš neodvolatelný návrh na uzavření Smlouvy o koupi Zboží s Námi;<br>\r\n1.9.	Smlouva je kupní smlouva sjednaná na základě řádně vyplněné Objednávky zaslané prostřednictvím E-shopu, a je uzavřena ve chvíli, kdy od Nás obdržíte potvrzení Objednávky;<br>\r\n1.10.	Uživatelský účet je účet zřízený na základě Vámi sdělených údajů, jež umožňuje uchování zadaných údajů a uchovávání historie objednaného Zboží a uzavřených Smluv;<br>\r\n1.11.	Vy jste osoba nakupující na Našem E-shopu, právními předpisy označovaná jako kupující;<br>\r\n1.12.	Zboží je vše, co můžete nakoupit na E-shopu. <br>\r\n2.	<h3>OBECNÁ USTANOVENÍ A POUČENÍ</h3> \r\n2.1.	Koupě Zboží je možná jen přes webové rozhraní E-shopu.<br>\r\n2.2.	Při nákupu Zboží je Vaše povinnost poskytnout Nám všechny informace správně a pravdivě. Informace, které jste Nám poskytli při objednání Zboží budeme tedy považovat za správné a pravdivé. <br>\r\n3.	<h3>UZAVŘENÍ SMLOUVY</h3>\r\n3.1.	Smlouvu s Námi je možné uzavřít pouze v českém jazyce.<br>\r\n3.2.	Smlouva je uzavírána na dálku prostřednictvím E-shopu, přičemž náklady na použití komunikačních prostředků na dálku hradíte Vy. Tyto náklady se však nijak neliší od základní sazby, kterou hradíte za používání těchto prostředků (tedy zejména za přístup k internetu), žádné další náklady účtované Námi tedy nad rámec Celkové ceny nemusíte očekávat. Odesláním Objednávky souhlasíte s tím, že prostředky komunikace na dálku využíváme. <br>\r\n3.3.	K tomu, abychom mohli Smlouvu uzavřít, je třeba, abyste na E-shopu vytvořili návrh Objednávky. V tomto návrhu musí být uvedeny následující údaje:<br>\r\na)	Informace o nakupovaném Zboží (na E-shopu označujete Zboží, o jehož nákup máte zájem, tlačítkem „Přidat do košíku“);<br>\r\nb)	Informace o Ceně, Ceně za dopravu, způsobu platby Celkové ceny a požadovaném způsobu doručení Zboží; tyto informace budou zadány v rámci tvorby návrhu Objednávky v rámci uživatelského prostředí E-shopu, přičemž informace o Ceně, Ceně za dopravu a Celkové ceně budou uvedeny automaticky na základě Vámi zvolného Zboží a způsobu jeho doručení;<br>\r\nc)	Své identifikační údaje sloužící k tomu, abychom mohli doručit Zboží, zejména tedy jméno, příjmení, doručovací adresu, telefonní číslo a e-mailovou adresu;<br>\r\nd)	V případě Smlouvy, na základě které Vám budeme Zboží dodávat pravidelně a opakovaně, též informaci, jak dlouho Vám budeme Zboží dodávat.<br>\r\n3.4.	V průběhu tvorby návrhu Objednávky může až do doby jejího vytvoření údaje měnit a kontrolovat. Po provedení kontroly prostřednictvím stisku tlačítka „Objednávka zavazující k platbě“ Objednávku vytvoříte. Před stiskem tlačítka musíte ale ještě potvrdit Vaše seznámení se a souhlas s těmito Podmínkami, v opačném případě nebude možné Objednávku vytvořit. K potvrzení a souhlasu slouží zatrhávací políčko. Po stisku tlačítka „Objednávka zavazující k platbě“ budou všechny vyplněné informace odeslány přímo Nám.<br>\r\n3.5.	Vaši Objednávku Vám v co nejkratší době poté, kdy Nám bude doručena, potvrdíme zprávou odeslanou na Vaši e-mailovou adresu zadanou v Objednávce. Součástí potvrzení bude shrnutí Objednávky a tyto Podmínky. Potvrzením Objednávky z naší strany dochází k uzavření Smlouvy mezi Námi a Vámi. Podmínky ve znění účinném ke dni Objednávky tvoří nedílnou součást Smlouvy.<br>\r\n3.6.	Mohou nastat i případy, kdy Vám nebudeme moci Objednávku potvrdit. Jedná se zejména o situace, kdy Zboží není dostupné nebo případy, kdy objednáte větší počet kusů Zboží, než kolik je z naší strany umožněno. Informaci o maximálním počtu Zboží Vám však vždy v rámci E-shopu předem poskytneme a neměla by pro Vás být tedy překvapivá. V případě, že nastane jakýkoli důvod, pro který nemůžeme Objednávku potvrdit, budeme Vás kontaktovat a zašleme Vám nabídku na uzavření Smlouvy v pozměněné podobě oproti Objednávce. Smlouva je v takovém případě uzavřena ve chvíli, kdy Naši nabídku potvrdíte. <br>\r\n3.7.	V případě, že v rámci E-shopu nebo v návrhu Objednávky bude uvedena zjevně chybná Cena, nejsme povinni Vám Zboží za tuto Cenu dodat ani v případě, kdy jste obdrželi potvrzení Objednávky, a tedy došlo k uzavření Smlouvy. V takové situaci Vás budeme bezodkladně kontaktovat a zašleme Vám nabídku na uzavření nové Smlouvy v pozměněné podobě oproti Objednávce. Nová Smlouva je v takovém případě uzavřena ve chvíli, kdy Naši nabídku potvrdíte. V případě, že Naši nabídku nepotvrdíte ani ve lhůtě 3 dnů od jejího odeslání, jsme oprávněni od uzavřené Smlouvy odstoupit. Za zjevnou chybu v Ceně se považuje například situace, kdy Cena neodpovídá obvyklé ceně u jiných prodejců nebo chybí či přebývá cifra.<br>\r\n3.8.	V případě, kdy dojde k uzavření Smlouvy, Vám vzniká závazek k zaplacení Celkové ceny.<br>\r\n3.9.	V případě, že máte zřízen Uživatelský účet, můžete učinit Objednávku jeho prostřednictvím. I v takovém případě máte ale povinnost zkontrolovat správnost, pravdivost a úplnost předvyplněných údajů. Způsob tvorby Objednávky je však totožný, jako v případě kupujícího bez Uživatelského účtu, výhodou však je, že není třeba opakovaně vyplňovat Vaše identifikační údaje.<br>\r\n3.10.	V některých případech umožňujeme na nákup Zboží využít slevu. Pro poskytnutí slevy je třeba, abyste v rámci návrhu Objednávky vyplnili údaje o této slevě do předem určeného pole. Pokud tak učiníte, bude Vám Zboží poskytnuto se slevou.<br>\r\n4.	<h3>UŽIVATELSKÝ ÚČET</h3><br>\r\n4.1.	Na základě Vaší registrace v rámci E-shopu můžete přistupovat do svého Uživatelského účtu. <br>\r\n4.2.	Při registraci Uživatelského účtu je Vaše povinnost uvést správně a pravdivě všechny zadávané údaje a v případě změny je aktualizovat. <br>\r\n4.3.	Přístup k Uživatelskému účtu je zabezpečen uživatelským jménem a heslem. Ohledně těchto přístupových je Vaší povinností zachovávat mlčenlivost a nikomu tyto údaje neposkytovat. V případě, že dojde k jejich zneužití, neneseme za to žádnou odpovědnost. <br>\r\n4.4.	Uživatelský účet je osobní a nejste tedy oprávněni umožnit jeho využívání třetími osobami.<br>\r\n4.5.	Váš Uživatelský účet můžeme zrušit, a to zejména v případě, když jej více, než [BUDE DOPLNĚNO] nevyužíváte, či v případě, kdy porušíte své povinnosti dle Smlouvy.<br>\r\n4.6.	Uživatelský účet nemusí být dostupný nepřetržitě, a to zejména s ohledem na nutnou údržbu hardwarového a softwarového vybavení.<br>\r\n5.	<h3>CENOVÉ A PLATEBNÍ PODMÍNKY, VÝHRADA VLASTNICKÉHO PRÁVA</h3><br>\r\n5.1.	Cena je vždy uvedena v rámci E-shopu, v návrhu Objednávky a samozřejmě ve Smlouvě. V případě rozporu mezi Cenou uvedenou u Zboží v rámci E-shopu a Cenou uvedenou v návrhu Objednávky se uplatní Cena uvedená v návrhu Objednávky, která bude vždy totožná s cenou ve Smlouvě. V rámci návrhu Objednávky je též uvedena Cena za dopravu, případně podmínky, kdy je doprava zdarma. <br>\r\n5.2.	Celková cena je uvedena včetně DPH včetně veškerých poplatků stanovených zákonem. <br>\r\n5.3.	Platbu Celkové ceny po Vás budeme požadovat po uzavření Smlouvy a před předáním Zboží. Úhradu Celkové ceny můžete provést následujícími způsoby:<br>\r\na)	Bankovním převodem. Informace pro provedení platby Vám zašleme v rámci potvrzení Objednávky. V případě platby bankovním převodem je Celková cena splatná do [BUDE DOPLNĚNO]<br>\r\nb)	Kartou online. V takovém případě probíhá platba přes platební bránu [BUDE DOPLNĚNO], přičemž platba se řídí podmínkami této platební brány, které jsou dostupné na adrese: [BUDE DOPLNĚNO]. V případě platby kartou online je Celková cena splatná do [BUDE DOPLNĚNO]<br>\r\nc)	Dobírkou. V takovém případě dojde k platbě při doručení Zboží oproti předání Zboží. V případě platby dobírkou je Celková cena splatná při převzetí Zboží.<br>\r\nd)	Hotově při osobním odběru. Hotově lze hradit Zboží v případě převzetí v Naší provozovně. V případě platby hotově při osobním odběru je Celková cena splatná při převzetí Zboží.<br>\r\n5.4.	Faktura bude vystavena v elektronické podobě po uhrazení Celkové ceny a bude zaslána na Vaši e-mailovou adresu. Faktura bude též fyzicky přiložena ke Zboží a dostupná v Uživatelském úču.<br>\r\n5.5.	Vlastnické právo ke Zboží na Vás přechází až poté, co zaplatíte Celkovou cenu a Zboží převezmete. V případě platby bankovním převodem je Celková cena zaplacena připsáním na Náš účet, v ostatních případech je zaplacena v okamžik provedení platby.<br>\r\n6.	<h3>DORUČENÍ ZBOŽÍ, PŘECHOD NEBEZPEČÍ ŠKODY NA VĚCI	</h3><br>\r\n6.1.	Zboží Vám bude doručeno způsobem dle Vaší volby, přičemž můžete vybírat z následujících možností:<br>\r\na)	Osobní odběr na Naší provozovně uvedené v seznamu provozoven;<br>\r\nb)	Osobní odběr na výdejních místech společnosti Zásilkovna, Uloženka;<br>\r\nc)	Doručení prostřednictvím dopravních společností Česká pošta, PPL CZ, DHL, Zásilkovna;<br>\r\n6.2.	Zboží je možné doručit pouze v rámci České republiky.<br>\r\n6.3.	Doba doručení Zboží vždy závisí na jeho dostupnosti a na zvoleném způsobu doručení a platby. Předpokládaná doba doručení Zboží Vám bude sdělena v potvrzení Objednávky. Doba uvedená na E-shopu je pouze orientační a může se lišit od skutečné doby dodání. V případě osobního odběru na provozovně Vás vždy o možnosti vyzvednutí Zboží budeme informovat prostřednictvím e-mailu. <br>\r\n6.4.	Po převzetí Zboží od dopravce je Vaše povinnost zkontrolovat neporušenost obalu Zboží a v případě jakýchkoli závad tuto skutečnost neprodleně oznámit dopravci a Nám. V případě, že došlo k závadě na obalu, která svědčí o neoprávněné manipulaci a vstupu do zásilky, není Vaší povinností Zboží od dopravce převzít. <br>\r\n6.5.	V případě, kdy porušíte svoji povinnost převzít Zboží, s výjimkou případů dle čl. 6.4 Podmínek, nemá to za následek porušení Naší povinnosti Vám Zboží doručit. Zároveň to, že Zboží nepřevezmete, není odstoupení od Smlouvy mezi Námi a Vámi. Nám ale v takovém případě vzniká právo od Smlouvy odstoupit z důvodu Vašeho podstatného porušení Smlouvy. Pokud se rozhodneme tohoto práva využít, je odstoupení účinné v den, kdy Vám toto odstoupení doručíme. Odstoupení od Smlouvy nemá vliv na nárok na uhrazení Ceny za dopravu, případně na nárok na náhradu škody, pokud vznikla.<br>\r\n6.6.	Pokud je z důvodů vzniklých na Vaší straně Zboží doručováno opakovaně nebo jiným způsobem, než bylo ve Smlouvě dohodnuto, je Vaší povinností nahradit Nám náklady s tímto opakovaným doručením spojené. Platební údaje pro zaplacení těchto nákladů Vám zašleme na Vaši e-mailovou adresu uvedenou ve Smlouvě a jsou splatné 14 dnů od doručení e-mailu.<br>\r\n6.7.	Nebezpeční škody na Zboží na Vás přechází v okamžiku, kdy ho převezmete. V případě, kdy Zboží nepřevezmete, s výjimkou případů dle čl. 6.4 Podmínek, na Vás nebezpečí škody na Zboží přechází v okamžiku, kdy jste měli možnost ho převzít, ale z důvodů na Vaší straně k převzetí nedošlo. Přechod nebezpečí škody na Zboží pro Vás znamená, že od tohoto okamžiku nesete veškeré důsledky spojené se ztrátou, zničením, poškozením či jakýmkoli znehodnocením Zboží.<br>\r\n6.8.	V případě, že Zboží nebylo v E-shopu uvedeno jako skladem a byla uvedena orientační doba dostupnosti Vás budeme vždy informovat v případě:<br>\r\na)	mimořádného výpadku výroby Zboží, přičemž Vám vždy sdělíme novou očekávanou dobu dostupnosti nebo informace o tom, že nebude možné Zboží dodat;<br>\r\nb)	prodlení s dodáním Zboží od Našeho dodavatele, přičemž Vám vždy sdělíme novou očekávanou dobu dodání.<br>\r\n6.9.	V případě, že nebudeme schopni Vám Zboží dodat ani do 30 dnů od uplynutí doby doručení Zboží uvedené v potvrzení Objednávky, a to z jakéhokoli důvodu, jsme My i Vy oprávněni od Smlouvy odstoupit.<br>\r\n7.	<h3>PRÁVA Z VADNÉHO PLNĚNÍ</h3><br>\r\n7.1.	Zaručujeme, že v době přechodu nebezpečí škody na Zboží podle čl. 6.7 Podmínek je Zboží bez vad, zejména pak, že:<br>\r\na)	má vlastnosti, které jsme si s Vámi dohodnuli, a pokud nebyly výslovně dohodnuty, pak takové, které jsme u popisu Zboží uvedli, případně takové, které lze s ohledem na povahu Zboží očekávat;<br>\r\nb)	je vhodné pro účely, které jsme uvedli nebo pro účely, které jsou pro Zboží tohoto typu obvyklé;<br>\r\nc)	odpovídá jakosti nebo provedení dohodnutého vzorku, pakliže byla jakost nebo provedení stanovena podle vzorku;<br>\r\nd)	je v odpovídajícím množství a hmotnosti;<br>\r\ne)	splňuje požadavky na něj kladené právními předpisy;<br>\r\nf)	není zatíženo právy třetích stran.<br>\r\n7.2.	V případě, že bude mít Zboží vadu, tedy zejména pokud nebude splněna některá z podmínek dle čl. 7.1, můžete Nám takovou vadu oznámit a uplatnit práva z vadného plnění (tedy Zboží reklamovat) zasláním e-mailu či dopisu na Naše adresy uvedené u Našich identifikačních údajů. Pro reklamaci můžete využít také vzorový formulář poskytovaný z Naší strany, který tvoří přílohu č. 1 Podmínek. V uplatnění práva z vadného plnění je třeba zvolit, jak chcete vadu vyřešit, přičemž tuto volbu nemůžete následně, s výjimkou případů dle čl. 7.3, bez Našeho souhlasu změnit. Reklamaci vyřídíme v souladu s Vámi uplatněným právem z vadného plnění. V případě, že si nezvolíte řešení vady, máte práva uvedená v čl. 7.4 i v situacích, kdy vadné plnění bylo podstatným porušením Smlouvy. <br>\r\n7.3.	Je-li vadné plnění podstatným porušením Smlouvy, máte následující práva:<br>\r\na)	na odstranění vady dodáním nového Zboží bez vady, nebo dodáním chybějící části Zboží;<br>\r\nb)	na odstranění vady opravou Zboží;<br>\r\nc)	na přiměřenou slevu z Ceny;<br>\r\nd)	na odstoupení od Smlouvy.<br>\r\nV případě, že zvolíte vyřešení dle bodů a) nebo b) a My vadu takto neodstraníme v přiměřené lhůtě, kterou jsme uvedli, nebo Vám sdělíme, že tímto způsobem vadu neodstraníme vůbec, máte práva dle bodů c) a d), i když jste je v rámci reklamace původně nepožadovali. Zároveň pokud si zvolíte odstranění vady opravou Zboží a My zjistíme, že je vada neopravitelná, oznámíme Vám to a můžete si zvolit jiný způsob odstranění vady.<br>\r\n7.4.	Je-li vadné plnění nepodstatným porušením Smlouvy, máte následující práva:<br>\r\na)	na odstranění vady dodáním nového Zboží bez vady, nebo dodáním chybějící části Zboží;<br>\r\nb)	na odstranění vady opravou Zboží; <br>\r\nc)	na přiměřenou slevu z Ceny. \r\nPokud však vadu neodstraníme včas nebo odmítneme vadu odstranit, vzniká Vám právo od Smlouvy odstoupit. Odstoupit můžete také v případě, kdy nemůžete Zboží řádně užívat pro opakovaný výskyt vad po opravě Zboží nebo při větším počtu vad Zboží.<br>\r\n7.5.	V případě podstatného i nepodstatného porušení nemůžete odstoupit od Smlouvy, ani požadovat dodání nové věci, pokud nemůžete vrátit Zboží ve stavu, v jakém jste ho obdrželi. To ale neplatí v následujících případech:<br>\r\na)	došlo-li ke změně stavu Zboží v důsledku prohlídky za účelem zjištění vady;<br>\r\nb)	bylo-li Zboží použito ještě před objevením vady;<br>\r\nc)	nebyla-li nemožnost vrácení Zboží v nezměněném stavu způsobena Vaším jednáním anebo Vaším opomenutím.<br>\r\nd)	došlo-li z Vaší strany před objevením vady k prodeji, spotřebování nebo pozměnění Zboží při obvyklém použití; pokud k tomu však došlo jen částečně, je Vaší povinností tu část Zboží, kterou vrátit lze a v takovém případě Vám nebude vrácena část Cen odpovídající Vašemu prospěchu z užití části Zboží.<br>\r\n7.6.	Do tří dnů od obdržení reklamace Vám na e-mailovou adresu potvrdíme, že jsme reklamaci obdrželi, kdy jsme ji obdrželi a předpokládanou dobu trvání vyřízení reklamace. Reklamaci vyřídíme bez zbytečného odkladu, nejpozději však do 30 dnů od jejího obdržení. Lhůta může být po naší vzájemné dohodě prodloužena. Pokud lhůta marně uplyne, můžete odstoupit od Smlouvy.<br>\r\n7.7.	O vyřízení reklamace Vás budeme informovat e-mailem. Pokud je reklamace oprávněná, náleží Vám náhrada účelně vynaložených nákladů. Tyto náklady jste povinni prokázat, např. účtenkami či potvrzeními o ceně za dopravu. V případě, že došlo k odstranění vady dodáním nového Zboží, je Vaší povinností Nám původní Zboží vrátit, náklady na toto vrácení však hradíme My.<br>\r\n7.8.	Uplatnění práv z vadného plnění a reklamace akce se řídí ustanovením §1810 a násl., §1820 a násl. a §2099 a násl. občanského zákoníku a zákonem o ochraně spotřebitele.<br>\r\n7.9.	V případě, že jste podnikateli, je Vaší povinností oznámit a vytknout vadu bez zbytečného odkladu poté, co jste ji mohli zjistit, nejpozději však do tří dnů od převzetí Zboží.<br>\r\n7.10.	V případě, že jste spotřebitel, máte právo uplatit práva z vadného plnění u vady, která se vyskytne u spotřebního Zboží ve lhůtě 24 měsíců od převzetí Zboží. <br>\r\n7.11.	Ustanovení ohledně práva z vad se nepoužijí v případě:<br>\r\na)	Zboží, které je prodávané za nižší Cenu, na vadu, pro kterou byla nižší Cena ujednána;<br>\r\nb)	opotřebení Zboží způsobeného jeho obvyklým užíváním;<br>\r\nc)	použitého Zboží na vadu odpovídající míře používání nebo opotřebení, kterou Zboží mělo, když jste jej převzali;<br>\r\nd)	kdy to vyplývá z povahy Zboží.<br>\r\n8.	<h3>ODSTOUPENÍ OD SMLOUVY</h3><br>\r\n8.1.	K odstoupení od Smlouvy, tedy k ukončení smluvního vztahu mezi Námi a Vámi od jeho počátku, může dojít z důvodů a způsoby uvedenými v tomto článku, případně v dalších ustanoveních Podmínek, ve kterých je možnost odstoupení výslovně uvedena.<br>\r\n8.2.	V případě, že jste spotřebitel, tedy osoba kupující Zboží mimo rámec své podnikatelské činnosti, máte v souladu s ustanovením §1829 občanského zákoníku právo odstoupit od Smlouvy bez udání důvodu ve lhůtě 14 dnů ode dne doručení Zboží. V případě, že jsme uzavřeli Smlouvu, jejímž předmětem je několik druhů Zboží nebo dodání několika částí Zboží, začíná tato lhůta běžet až dnem dodání poslední části Zboží, a v případě, že jsme uzavřeli Smlouvu, na základě které Vám budeme Zboží dodávat pravidelně a opakovaně, začíná běžet dnem dodání první dodávky. Od Smlouvy můžete odstoupit jakýmkoliv prokazatelným způsobem (zejména zasláním e-mailu nebo dopisu na Naše adresy uvedené u Našich identifikačních údajů). Pro odstoupení můžete využít také vzorový formulář poskytovaný z Naší strany, který tvoří přílohu č. 2 Podmínek.<br>\r\n8.3.	Ani jako spotřebitel však nemůžete od Smlouvy odstoupit v případech, kdy je předmětem Smlouvy:<br>\r\na)	Zboží, jehož Cena závisí na výchylkách finančního trhu nezávisle na Naší vůli a může k nim dojít během lhůty pro odstoupení od Smlouvy;<br>\r\nb)	dodání alkoholických nápojů, které mohou být dodány až po uplynutí třiceti dnů a jejich Cena závisí na výchylkách finančního trhu nezávislých na Naší vůli;<br>\r\nc)	Zboží, které bylo upraveno podle Vašeho přání nebo pro Vaši osobu;<br>\r\nd)	Zboží, které podléhá rychlé zkáze a Zboží, které bylo po dodání nenávratně smíseno s jiným;<br>\r\ne)	Zboží v uzavřeném obalu, které bylo z obalu vyňato a z hygienických důvodů jej není možné vrátit;<br>\r\nf)	dodávka zvukové nebo obrazové nahrávky nebo počítačového programu, pokud došlo k porušení původního obalu;<br>\r\ng)	dodávka novin, periodik nebo časopisů;<br>\r\nh)	dodání digitálního obsahu, pokud nebyl dodán na hmotném nosiči a byl dodán s Vaším předchozím výslovným souhlasem před uplynutím lhůty pro odstoupení od Smlouvy a My jsme Vám sdělili, že nemáte právo na odstoupení od Smlouvy.<br>\r\n8.4.	Lhůta k odstoupení dle čl. 8.2 Podmínek se považuje za zachovanou, pokud Nám v jejím průběhu odešlete oznámení, že od Smlouvy odstupujete.<br>\r\n8.5.	V případě odstoupení od Smlouvy Vám bude Cena vrácena do 14 dnů ode dne účinnosti odstoupení na účet, ze kterého byla připsána, případně na účet zvolený odstoupení od Smlouvy. Částka však nebude vrácena dříve, než Nám Zboží vrátíte či než prokážete, že došlo k jeho zaslání zpět Nám. Zboží Nám prosím vracejte čisté, pokud možno včetně originálního obalu.<br>\r\n8.6.	V případě odstoupení od Smlouvy dle čl. 8.2 Podmínek jste povinní Nám Zboží zaslat do 14 dnů od odstoupení a nesete náklady spojené s navrácením zboží k Nám. Vy máte naopak nárok na to, abychom Vám vrátili Cenu za dopravu, avšak pouze ve výši odpovídající nejlevnějšímu nabízenému způsobu dodání Zboží, který jsme pro dodání Zboží nabízeli. V případě odstoupení z důvodu, že My porušíme uzavřenou Smlouvu, hradíme i náklady spojené s navrácením zboží k Nám, ovšem opět pouze do výše Ceny za dopravu ve výši odpovídající nejlevnějšímu nabízenému způsobu dodání Zboží, který jsme při dodání Zboží nabízeli.<br>\r\n8.7.	Odpovídáte Nám škodu v případech, kdy bude Zboží poškozeno v důsledku Vašeho nakládání s ním jinak, než je nutné s ním nakládat s ohledem na jeho povahu a vlastnosti. Způsobenou škodu Vám v takovém případě vyúčtujeme poté, co Nám Zboží bude vráceno a splatnost vyúčtované částky je 14 dní. V případě, že jsme Vám ještě nevrátili Cenu, jsme oprávněni pohledávku z titulu nákladů započíst na Vaši pohledávku na vrácení Ceny.<br>\r\n8.8.	My jsme oprávněni odstoupit od Smlouvy kdykoliv před tím, než Vám dodáme Zboží, pokud existují objektivní důvody, proč není možné Zboží dodat (zejména důvody na straně třetích osob nebo důvody spočívající v povaze Zboží), a to i před uplynutím doby uvedené v čl. 6.9. Podmínek. Můžeme také od Smlouvy odstoupit, pokud je zjevné, že jste uvedli v Objednávce záměrně nesprávné informace. V případě, že nakupujete zboží v rámci své podnikatelské činnosti, tedy jako podnikatel, jsme oprávněni od Smlouvy odstoupit kdykoli, i bez udání důvodu.<br>\r\n9.	<h3>ŘEŠENÍ SPORŮ SE SPOTŘEBITELI</h3><br>\r\n9.1.	Pokud jste spotřebitel, dle zákona o ochraně spotřebitele máte právo na mimosoudní řešení spotřebitelského sporu plynoucího ze Smlouvy. V takovém případě jste oprávněni obrátit se na Českou obchodní inspekci, Ústřední inspektorát – oddělení ADR, Štěpánská 15, 120 00 Praha 2, e-mail: adr@coi.cz,web: adr.coi.cz. Mimosoudní řešení spotřebitelského sporu se zahajuje výlučně na Váš návrh, a to v případě, že se spor nepodařilo s Námi vyřešit přímo. Návrh lze podat nejpozději do 1 roku ode dne, kdy jste uplatnili své právo, které je předmětem sporu, u Nás poprvé. <br>\r\n9.2.	Máte dále právo zahájit mimosoudní řešení sporu online prostřednictvím platformy ODR dostupné na webové stránce ec.europa.eu/consumers/odr/.<br>\r\n10.	<h3>ZÁVĚREČNÁ USTANOVENÍ</h3><br>\r\n10.1.	Pokud Náš a Váš právní vztah obsahuje mezinárodní prvek (tedy například budeme zasílat zboží mimo území České republiky), bude se vztah vždy řádit právem České republiky. Pokud jste však spotřebitelé, nejsou tímto ujednáním dotčena Vaše práva plynoucí z právních předpisů.<br>\r\n10.2.	Veškerou písemnou korespondenci si s Vámi budeme doručovat elektronickou poštou. Naše e-mailová adresa je uvedena u Našich identifikačních údajů. My budeme doručovat korespondenci na Vaši e-mailovou adresu uvedenou ve Smlouvě, v Uživatelském účtu nebo přes kterou jste nás kontaktovali.<br>\r\n10.3.	Smlouvu je možné měnit pouze na základě naší písemné dohody. My jsme však oprávněni změnit a doplnit tyto Podmínky, tato změna se však nedotkne již uzavřených Smluv, ale pouze Smluv, které budou uzavřeny po účinnosti této změny. O změně Vás však budeme informovat pouze v případě, že máte vytvořený Uživatelský účet (abyste tuto informaci měli v případě, že budete objednávat nové Zboží, změna však nezakládá právo výpovědi, jelikož nemáme uzavřenou Smlouvu, kterou by bylo možné vypovědět), nebo Vám na základě Smlouvy máme dodávat Zboží pravidelně a opakovaně. Informace o změně Vám zašleme na Vaši e-mailovou adresu nejméně 14 dní před účinností této změny. Pokud od Vás do 14 dnů od zaslání informace o změně neobdržíme výpověď uzavřené Smlouvy na pravidelné a opakované dodávky Zboží, stávají se nové podmínky součástí naší Smlouvy a uplatní se na další dodávku Zboží následující po účinnosti změny. Výpovědní doba v případě, že výpověď podáte, činí 2 měsíce.<br>\r\n10.4.	V případě vyšší moci nebo událostí, které nelze předvídat (přírodní katastrofa, pandemie, provozní poruchy, výpadky subdodavatelů apod.), neneseme odpovědnost za škodu způsobenou v důsledku nebo souvislosti s případy vyšší moci, a pokud stav vyšší moci trvá po dobu delší než 10 dnů, máme My i Vy právo od Smlouvy odstoupit.<br>\r\n10.5.	Přílohou Podmínek je vzorový formulář pro reklamaci a vzorový formulář pro odstoupení od Smlouvy.<br>\r\n10.6.	Smlouva včetně Podmínek je archivována v elektronické podobě u Nás, ale není Vám přístupná. Vždy však tyto Podmínky a potvrzení Objednávky se shrnutím Objednávky obdržíte e-mailem a budete tedy mít vždy přístup ke Smlouvě i bez Naší součinnosti. Doporučujeme vždy potvrzení Objednávky a Podmínky uložit.<br>\r\n10.7.	Na Naši činnost nedopadají žádné kodexy chování dle §1826 odst. 1 písm. g) občanského zákoníku.<br>\r\n10.8.	Tyto Podmínky nabývají účinnosti [BUDE DOPLNĚNO].\r\n \r\n'),
(2, '    GDPR    ', '<h5>Z&aacute;sady pr&aacute;ce s va&scaron;imi &uacute;daji</h5>\r\n<p><br />Jsme společnost <em>detishop.cz</em><br />Provozujeme e-shop na webov&yacute;ch str&aacute;nk&aacute;ch &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;. <br />Pro poskytov&aacute;n&iacute; na&scaron;ich služeb, prodej zbož&iacute; a provoz na&scaron;ich webov&yacute;ch str&aacute;nek zpracov&aacute;v&aacute;me někter&eacute; osobn&iacute; &uacute;daje.<br />Zpracov&aacute;n&iacute; osobn&iacute;ch &uacute;dajů upravuje zejm&eacute;na nař&iacute;zen&iacute; Evropsk&eacute;ho parlamentu a Rady (EU) 2016/679 ze dne 27. dubna 2016 o ochraně fyzick&yacute;ch sobo v souvislosti se zpracov&aacute;n&iacute;m osobn&iacute;ch &uacute;dajů a o voln&eacute;m pohybu těchto &uacute;dajů a o zru&scaron;en&iacute; směrnice 95/46/ES (obecn&eacute; nař&iacute;zen&iacute; o ochraně osobn&iacute;ch &uacute;dajů) (&bdquo;GDPR&ldquo;)<br />I.</p>\r\n<h5>Zpracov&aacute;n&iacute; osobn&iacute;ch &uacute;dajů</h5>\r\n<p><br />A. Zpracov&aacute;n&iacute; osobn&iacute;ch &uacute;dajů v př&iacute;padě použit&iacute; kontaktn&iacute;ho formul&aacute;ře Pokud popt&aacute;v&aacute;te na&scaron;e produkty a služby, budeme pracovat s va&scaron;imi kontaktn&iacute;mi &uacute;daji, kter&eacute; n&aacute;m sděl&iacute;te, hlavně prostřednictv&iacute;m popt&aacute;vkov&eacute;ho formul&aacute;ře. Jsou to: &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;. <br />Z jak&eacute;ho důvodu?<br />Kontaktujeme v&aacute;s přes ně pro dal&scaron;&iacute; domluvu ohledně zbož&iacute; a služeb. <br />Na z&aacute;kladě jak&eacute;ho pr&aacute;vn&iacute;ho důvodu?<br />Jedn&aacute; se o zpracov&aacute;n&iacute; na z&aacute;kladě čl. 6 odst. 1 p&iacute;sm. b) GDPR &ndash; jedn&aacute;n&iacute; o smlouvě, resp. proveden&iacute; opatřen&iacute; před uzavřen&iacute;m smlouvy na va&scaron;i ž&aacute;dost.<br />Jak dlouho budeme osobn&iacute; &uacute;daje zpracov&aacute;vat?<br />Pokud nenav&aacute;žeme dal&scaron;&iacute; spolupr&aacute;ci, va&scaron;e data budeme zpracov&aacute;vat nejd&eacute;le &hellip;&hellip;&hellip;. od na&scaron;&iacute; posledn&iacute; komunikace. <br />B. Zpracov&aacute;n&iacute; osobn&iacute;ch &uacute;dajů v př&iacute;padě n&aacute;kupu <br />Pokud u n&aacute;s nakoup&iacute;te, budeme pracovat s &uacute;daji, kter&eacute; n&aacute;m vypln&iacute;te. Jsou to hlavně fakturačn&iacute; &uacute;daje: jm&eacute;no, př&iacute;jmen&iacute;, adresa, &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;... <br />Z jak&eacute;ho důvodu?<br />Osobn&iacute; &uacute;daje potřebujeme zpracovat, abychom splnili na&scaron;i smlouvu &ndash; dodali v&aacute;m na&scaron;e zbož&iacute; nebo služby . Přes kontaktn&iacute; &uacute;daje s v&aacute;mi budeme tak&eacute; komunikovat ohledně stavu va&scaron;&iacute; objedn&aacute;vky, př&iacute;padně ohledně reklamac&iacute; nebo va&scaron;ich dotazů. <br />Osobn&iacute; &uacute;daje budeme d&aacute;le zpracov&aacute;vat pro splněn&iacute; na&scaron;ich povinnost&iacute;, kter&eacute; n&aacute;m plynou ze z&aacute;kona (hlavně pro &uacute;četn&iacute; a daňov&eacute; &uacute;čely, př&iacute;padně pro vyř&iacute;zen&iacute; reklamac&iacute; a jin&eacute; ).<br />Na z&aacute;kladě jak&eacute;ho pr&aacute;vn&iacute;ho důvodu osobn&iacute; &uacute;daje zpracov&aacute;v&aacute;me?<br />Jedn&aacute; se o zpracov&aacute;n&iacute; na z&aacute;kladě čl. 6 odst. 1 p&iacute;sm. b) GDPR &ndash; plněn&iacute; smlouvy a čl. 6 odst. 1 p&iacute;sm. c) GDPR &ndash; plněn&iacute; na&scaron;&iacute; pr&aacute;vn&iacute; povinnosti.<br />Jak dlouho budeme osobn&iacute; &uacute;daje zpracov&aacute;vat?<br />Po dobu plněn&iacute; na&scaron;&iacute; služby a pot&eacute; &hellip;&hellip;&hellip; od posledn&iacute;ho poskytnut&iacute; takov&eacute; služby nebo dod&aacute;n&iacute; zbož&iacute;. C. Newslettery (obchodn&iacute; sdělen&iacute;) Pokud jste nakupuj&iacute;c&iacute; z&aacute;kazn&iacute;k a nezak&aacute;zali jste n&aacute;m to při n&aacute;kupu, použijeme va&scaron;i e-mailovou adresu pro rozes&iacute;lku na&scaron;ich novinek.<br />Na z&aacute;kladě jak&eacute;ho pr&aacute;vn&iacute;ho důvodu?<br />Umožňuje n&aacute;m to ust. &sect; 7 odst. 3 z&aacute;kona č. 480/2004 Sb., o někter&yacute;ch služb&aacute;ch informačn&iacute; společnosti, pokud jste n&aacute;m to při n&aacute;kupu nezak&aacute;zali.<br />Jak dlouho budeme osobn&iacute; &uacute;daje zpracov&aacute;vat?<br />&hellip;&hellip;.. rok/let od va&scaron;eho posledn&iacute;ho n&aacute;kupu. Z rozes&iacute;lky se můžete kdykoliv odhl&aacute;sit prostřednictv&iacute;m e-mailu nebo n&aacute;s kontaktujte na e-mailu: &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip; <br />II.</p>\r\n<h5>Kdo se k datům dostane?</h5>\r\n<p><br />Va&scaron;e data zůstanou u n&aacute;s. Přesto pro n&aacute;s pracuj&iacute; někter&eacute; společnosti nebo jin&eacute; osoby, kter&eacute; se k datům dostanou proto, že n&aacute;m pom&aacute;haj&iacute; s chodem na&scaron;eho e-shopu. Jsou to:<br />- provozovatel e-shopov&eacute; platformy Shoptet (společnost Shoptet a.s., se s&iacute;dlem Dvořeck&eacute;ho 628/8, Břevnov, 169 00, Praha 6, IČ 289 35 675, společnost je zapsan&aacute; u Městsk&eacute;ho soudu v Praze, odd&iacute;l B vložka 25 395)<br />- společnosti pod&iacute;lej&iacute;c&iacute; se na expedici zbož&iacute; (&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;)<br />- společnosti pod&iacute;lej&iacute;c&iacute; se na expedici plateb (&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;)<br />- poskytovatel e-mailingov&eacute; služby (&hellip;&hellip;&hellip;&hellip;&hellip;..)<br />- marketingov&aacute; agentura ((&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;) - &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;. <br />Va&scaron;e osobn&iacute; &uacute;daje se d&aacute;le mohou dostat k těmto dal&scaron;&iacute;m subjektům:<br />- &hellip;&hellip;&hellip;&hellip;.. <br />Osobn&iacute; &uacute;daje zpracov&aacute;v&aacute;me pouze na &uacute;zem&iacute; Evropsk&eacute; unie. <br />III.</p>\r\n<h5>Co byste d&aacute;l měli vědět</h5>\r\n<p><br />V na&scaron;&iacute; společnosti ne/m&aacute;me jmenovan&eacute;ho pověřence pro ochranu osobn&iacute;ch &uacute;dajů. V na&scaron;&iacute; společnosti ne/doch&aacute;z&iacute; k rozhodov&aacute;n&iacute; na z&aacute;kladě automatick&eacute;ho zpracov&aacute;n&iacute; či profilov&aacute;n&iacute;.<br />Pokud byste měli k osobn&iacute;m &uacute;dajům ot&aacute;zky, kontaktujte n&aacute;s na e-mailov&eacute; adrese &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip; nebo zavolejte na tel. č. &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;. <br />IV.</p>\r\n<h5>Va&scaron;e pr&aacute;va v souvislosti se zpracov&aacute;n&iacute;m osobn&iacute;ch &uacute;dajů</h5>\r\n<p><br />Nař&iacute;zen&iacute; GDPR v&aacute;m d&aacute;v&aacute; mimo jin&eacute; pr&aacute;vo obr&aacute;tit se na n&aacute;s a cht&iacute;t informace, jak&eacute; va&scaron;e osobn&iacute; &uacute;daje zpracov&aacute;v&aacute;me, vyž&aacute;dat si u n&aacute;s př&iacute;stup k těmto &uacute;dajům a nechat je aktualizovat nebo opravit, popř&iacute;padě požadovat omezen&iacute; zpracov&aacute;n&iacute;, můžete požadovat kopii zpracov&aacute;van&yacute;ch osobn&iacute;ch &uacute;dajů, požadovat po n&aacute;s v určit&yacute;ch situac&iacute;ch v&yacute;maz osobn&iacute;ch &uacute;dajů a v určit&yacute;ch př&iacute;padech m&aacute;te pr&aacute;vo na jejich přenositelnost. Proti zpracov&aacute;n&iacute; na z&aacute;kladě opr&aacute;vněn&eacute;ho z&aacute;jmu lze vzn&eacute;st n&aacute;mitku. <br />Pokud si mysl&iacute;te, že s daty nenakl&aacute;d&aacute;me spr&aacute;vně, m&aacute;te pr&aacute;vo podat st&iacute;žnost u &Uacute;řadu pro ochranu osobn&iacute;ch &uacute;dajů, př&iacute;padně se se sv&yacute;mi n&aacute;roky obr&aacute;tit na soud.<br />Tyto podm&iacute;nky jsou &uacute;činn&eacute; od &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;</p>'),
(3, ' Jak nakupovat ', '* Zboží vybrané v katalogu zákazník vloží do košíku. Pokud si ještě nepřejete platit, ale chcete vybírat další zboží, stačí poté jen dále vybírat v katalogu.<br> * Aktuální stav Vaší objednávky vždy zjistíte kliknutím na ikonu košík. Zde může nákup modifikovat a následně objednat. Veškeré ceny uváděné na stránkách jsou včetně 21% DPH.<br>\r\n* Pokud v nákupu již pokračovat nechcete a chcete přejít přím k pokladně, stačí jen vyplnit nabídnutý formulář a odeslat objednávku.<br>\r\n* Pokud chcete již odeslanou objednávku stornovat, lze to provést emailem na adresu info@detishop.cz.<br>\r\n* Po objednání bude zboží vyexpedováno a doručeno na Vámi udanou adresu během 2 -3 pracovních dnů.'),
(4, 'Doprava a platba', '<h3>Platební metody</h3><br>\r\n\r\nZákazníci mají možnost si vybrat z následujících platebních možností:<br>\r\na)      Platba předem bankovním převodem, nebo poštovní složenkou v CZK na účet vedený u České spořitelny a.s .<br>\r\nb)      Platba platební kartou prostřednictvím internetového platebního systému PayPal, který umožňuje přesuny peněz mezi účty. Ty nejsou vedeny číslem účtu, jak jsme u nás zvyklí z klasických bank, ale jsou vedeny pod e-mailovými adresami. PayPal dnes patří k nejrozšířenějším a nejbezpečnějším online platebním systémům na internetu vůbec. Jeho služeb využívá přes 100 milionů lidí po celém světě ve 103 zemích.<br>\r\nc)       Platba na dobírku -zákazník zaplatí v hotovosti dopravci při převzetí zboží.  Tento způsob platby je možný pouze pro zákazníky z České a Slovenské Republiky.<br>\r\n \r\n<h3>Dodání</h3><br>\r\n\r\nZboží je dodáváno prostřednictvím přepravních společností. Nejčastěji PPL, UPS a DHL. Nelze je dodávat na adresy P.O. boxů. Zákazníci z České a Slovenské republiky neplatí dopravu, pokud objednají zboží za více jak 5 000 CZK (vč. DPH). U menších objednávek bude účtováno 99 Kč za dodávku na jedno místo. Termín dodání je 2 – 3 pracovní dny.<br>\r\nNení- li dodávka provedena řádně, například dojde k záměně zboží, nebo je dodán špatný počet zboží apod., kontaktujte nás neprodleně na níže uvedených kontaktech, nejpozději však do dvou dnů od obdržení zboží. Na pozdější reklamace nebude brán zřetel.<br> Je-li dodané zboží poškozeno přepravou, je nutno toto nahlásit přepravci  i nám ihned po převzetí balíku. Poškození skrytá, vzniklá při přepravě, je nutno nahlásit přepravci i nám ihned, jakmile je poškození odhaleno.<br>\r\n');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexy pro tabulku `boxes_section`
--
ALTER TABLE `boxes_section`
  ADD PRIMARY KEY (`box_id`);

--
-- Indexy pro tabulku `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexy pro tabulku `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexy pro tabulku `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexy pro tabulku `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexy pro tabulku `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexy pro tabulku `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexy pro tabulku `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexy pro tabulku `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexy pro tabulku `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexy pro tabulku `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexy pro tabulku `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexy pro tabulku `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pro tabulku `boxes_section`
--
ALTER TABLE `boxes_section`
  MODIFY `box_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pro tabulku `cart`
--
ALTER TABLE `cart`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pro tabulku `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pro tabulku `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupon_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pro tabulku `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pro tabulku `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pro tabulku `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pro tabulku `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pro tabulku `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pro tabulku `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pro tabulku `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pro tabulku `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pro tabulku `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
