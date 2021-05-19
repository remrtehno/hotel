-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 09, 2021 at 01:19 PM
-- Server version: 5.7.29-log-cll-lve
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urobotic_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `anonce` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `content`, `anonce`, `img`, `created_at`, `updated_at`) VALUES
(1, 'title', '<h2>U-robotics - учить и вдохновлять!</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>U-robotics &mdash; симуляционное оборудование в медицине</h2>\r\n\r\n<p>С течением многих веков концепция медицинского образования не претерпевала значительных изменений. Как и в древние времена молодой врач наблюдал за действиями наставника, а затем пытался повторить его манипуляции. Накопление опыта занимало многие годы и сопровождалось фатальными ошибками.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Изменения произошли во второй половине ХХ века - длительное, малоэффективное обучение, связанное с риском для пациента привела к созданию принципиально медицинского образования - большинство базовых практических навыков и многие сложные клинические умения стали отрабатываться не на живых людях, и даже не на лабораторных животных, а на достоверной, реалистичной имитации пациента. При помощи современных компьютерных технологий стало возможным воспроизводить на роботе-пациенте или на экране монитора самые разнообразные клинические ситуации, манипуляции и даже хирургические операции.</p>\r\n\r\n<p>Медицинское образование впервые в истории стало для пациента. И при этом не только не пострадало качество &mdash; наоборот, освоение практических навыков и приобретение знаний стало более быстрым и эффективным.</p>\r\n\r\n<p>В наши дни медицинское учебное заведение немыслимо без Симуляционного медицинского центра, где было бы сконцентрировано оборудование, виртуальные тренажеры, роботы-пациенты и современные методики их эффективного использования. Группа компаний U-ROBOTICS &mdash; это интегратор подобных образовательных решений.</p>\r\n\r\n<p>U-ROBOTICS &mdash; это поставка &laquo;из одних рук&raquo; самого современного симуляционного оборудования:</p>\r\n\r\n<ul>\r\n	<li>виртуальные тренажеры-симуляторы;</li>\r\n	<li>роботы-симуляторы пациента;</li>\r\n	<li>компьютеризированные манекены;</li>\r\n	<li>интерактивные электронные фантомы;</li>\r\n	<li>тренажеры и муляжи.</li>\r\n</ul>\r\n\r\n<h2>Партнёры-поставщики симуляционного оборудования</h2>\r\n\r\n<p>Медкомплекс, Россия.&nbsp;Мобильные симуляционные центры, Решения менеджмента учебных центров</p>\r\n\r\n<p>Синтомед, Россия.&nbsp;Интегратор симуляционного обучения</p>\r\n\r\n<p>Интермедика, Россия.&nbsp;Виртуальные симуляторы</p>\r\n\r\n<p>САЕ Хелскеа, Канада-США.&nbsp;Виртуальные симуляторы по хирургии и диагностике. Роботы-симуляторы пациента. Системы менеджмента симуляционного центра</p>\r\n\r\n<p>Эрлер Циммер, Германия.&nbsp;Анатомические модели, муляжи, тренажеры и фантомы</p>\r\n\r\n<p>Седжикал Сайенс, Швеция.&nbsp;Виртуальные симуляторы лапароскопии, роботохирургии, эндоскопии</p>\r\n\r\n<p>Наско, США.&nbsp;Манекены, муляжи и фантомы</p>\r\n\r\n<p>ВиртаМед, Швейцария.&nbsp;Виртуальные симуляторы</p>\r\n\r\n<p>ВокселМан, Германия.&nbsp;Виртуальные симуляторы</p>\r\n\r\n<p>Свемак, Швеция.&nbsp;Виртуальные симуляторы</p>\r\n\r\n<p>Сектра, Швеция.&nbsp;Виртуальный тренинг по анатомии</p>\r\n\r\n<p>3Д-мед, США.&nbsp;Видеосистемы хирургического тренинга</p>\r\n\r\n<p>Симулаб, США.&nbsp;Тренажеры, фантомы и муляжи по неотложной и общей хирургии, травме, лапароскопии</p>\r\n\r\n<p>Кёто Кагаку, Япония.&nbsp;Манекены, муляжи и фантомы</p>\r\n\r\n<p>Кокэн, Япония.&nbsp;Манекены, муляжи и фантомы</p>\r\n\r\n<p>Ингмар, США.&nbsp;Виртуальный симулятор респираторной терапии</p>\r\n\r\n<p>ПроДельфус, Бразилия.&nbsp;Муляжи, фантомы, тренажеры</p>\r\n\r\n<p>Мимик, США.&nbsp;Виртуальный симулятор роботохирургии</p>\r\n\r\n<p>Ментис, Швеция.&nbsp;Виртуальный симулятор ангиографии</p>\r\n\r\n<p>Самед, Германия.&nbsp;Тренажеры и симуляторы по урологии, лапароскопии и УЗД</p>\r\n\r\n<p>ТейкВинд, Португалия.&nbsp;Виртуальный пациент</p>\r\n\r\n<p>УМГ Групп, Китай.&nbsp;Стоматологический симулятор</p>\r\n\r\n<p>СимКэрэктерс, Австрия.&nbsp;Робот-симулятор недоношенного новорожденного</p>\r\n\r\n<p>Симджери, Канада.&nbsp;Виртуальный симулятор ортопедии</p>\r\n\r\n<p>Бионико, США.&nbsp;Пособия для офтальмологического тренинга</p>\r\n\r\n<p>Симулэр Медикал, Канада.&nbsp;Высокореалистичные хирургические муляжи</p>\r\n\r\n<p>Инносониан, Великобритания.&nbsp;Манекены для СЛР</p>\r\n\r\n<p><img alt=\"\" src=\"img/body-interact.jpg\" /></p>', NULL, NULL, NULL, '2021-04-24 13:51:35');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `phone`, `address`, `map`, `created_at`, `updated_at`) VALUES
(1, '<p>E-Mail: <a href=\"mailto:alan-tailor@inbox.ru\"> <strong> </strong></a><a href=\"mailto:info@urobotics.uz\">info@u-robotics.uz</a><a href=\"mailto:alan-tailor@inbox.ru\"><strong> </strong> </a></p>', '<p>+99899 305 66 68</p>\r\n\r\n<p>+99899 902 67 68</p>', '<p>100115, Республика Узбекистан,г,Ташкент, Чиланзарский р-н, ул, Чупонота 8.</p>', '{\"id\":\"1\",\"lat\":41.27600399641173,\"lng\":69.22133012340393}', NULL, '2021-05-04 07:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `downloaded_files`
--

CREATE TABLE `downloaded_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloaded_files`
--

INSERT INTO `downloaded_files` (`id`, `file`, `img`, `title`, `created_at`, `updated_at`) VALUES
(5, 'E5ZwNUo5bw.pdf', 'hxNHvtoOUD.png', 'Banner 2e', '2021-05-04 14:30:41', '2021-05-04 14:32:00'),
(6, 'eSSigEXdkW.pdf', 'j2FJrnHIK0.jpeg', 'файл 123', '2021-05-04 14:56:56', '2021-05-04 14:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anonce` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `img`, `created_at`, `updated_at`) VALUES
(1, 'logo.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_23_110551_create_slider_table', 1),
(4, '2020_03_06_181157_create_userwrap_table', 1),
(5, '2020_03_06_184210_create_abouts_table', 1),
(6, '2020_03_07_092231_create_galleries_table', 1),
(7, '2020_03_07_192300_create_news_table', 1),
(8, '2020_03_09_065916_create_products_table', 1),
(9, '2020_03_09_075754_create_prod_cats_table', 1),
(10, '2020_03_11_082526_create_videos_table', 1),
(11, '2020_03_11_120158_create_contacts_table', 1),
(12, '2020_03_11_130817_create_logos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anonce` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `anonce`, `text`, `cat_id`, `img`, `created_at`, `updated_at`, `meta_key`, `meta_desc`, `slug`) VALUES
(5, 'РеспиСим - новая версия программного обеспечения', '<p>Совсем скоро будет доступна версия 4.0 для симулятора РеспиСим</p>', '<p>Главные проблемы и направления современной хирургии прямо и непосредственно связаны с хирургией сосудов</p>\r\n\r\n<p>Компания Виртумед пополнила свой ассортимент широким спектром фантомов и муляжей, на которых вы легко отработаете навыки кардиохирургии без риска для пациента.</p>\r\n\r\n<p>Максимально реалистичный тренинг шунтирования, открытых операций на сердце предложен на</p>\r\n\r\n<p><strong><a href=\"fantomy-simulyatory/fantomy-dlya-serdechno-sosudistoj-hirurgii/fantom-dlya-provedeniya-vmeshatelstv-na-otkrytom-serdce.html\">Фантоме для проведения вмешательств на открытом сердце</a></strong><strong>,&nbsp;</strong>а также на</p>\r\n\r\n<p><strong><a href=\"fantomy-simulyatory/fantomy-dlya-serdechno-sosudistoj-hirurgii/fantom-grudnoj-kletki-dlya-otrabotki-navykov-kardiohirurgii.html\">Фантоме грудной клетки для отработки навыков кардиохирургии</a>&nbsp;</strong></p>\r\n\r\n<p>Вы отработаете:</p>\r\n\r\n<ul>\r\n	<li>Коронарное шунтирование, проксимальные и дистальные анастомозы</li>\r\n	<li>Имплантацию аортального клапана</li>\r\n	<li>Аортальную канюляцию</li>\r\n	<li>Сквозной анастомоз на мелких сосудах</li>\r\n	<li>Процедуры на митральном клапане</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>На&nbsp;<a href=\"fantomy-simulyatory/fantomy-dlya-serdechno-sosudistoj-hirurgii/fantom-dlya-otrabotki-navykov-provedeniya-ekmo-i-perfuzii.html\">Фантоме для отработки навыков проведения ЭКМО и перфузии</a>&nbsp;</strong>вы изучите:</p>\r\n\r\n<ul>\r\n	<li>Интубацию</li>\r\n	<li>ИВЛ</li>\r\n	<li>Канюляцию правого предсердия аорты и прошивание</li>\r\n	<li>Заполнение перфузионного контура</li>\r\n	<li>Мониторинг давления на внутриартериальном катетере</li>\r\n	<li>Антеградную кардиоплегию</li>\r\n	<li>Аортокоронарное шунтирование</li>\r\n	<li>Вено-Артериальную (ВА) ЭКМО и</li>\r\n	<li>Вено-Венозную (ВВ) ЭКМО</li>\r\n</ul>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p>Мы подготовили для вас большой ассортимент современных&nbsp;<strong><a href=\"fantomy-simulyatory/fantomy-dlya-serdechno-sosudistoj-hirurgii/fantom-grudnoj-kletki-dlya-otrabotki-navykov-kardiohirurgii.html\">муляжей сердца</a></strong>&nbsp;для фантомов кардиохирургии с отличными характеристиками<strong>:</strong></p>\r\n\r\n<ul>\r\n	<li>натуральная величина со всеми анатомическими ориентирами, окрашенными в соответствующие цвета</li>\r\n	<li>детализированный внешний вид</li>\r\n	<li>по тактильным ощущениям напоминает реальное сердце</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Мы обеспечим вас полным спектром расходных материалов.</p>\r\n\r\n<p>Задавайте любые вопросы по новым продуктам, мы всегда рады помочь!</p>\r\n\r\n<p>учить и вдохновлять!</p>', NULL, 'LZK986KLHv.png', '2021-04-24 02:34:44', '2021-04-24 02:34:44', NULL, NULL, 'respirm'),
(6, 'Уникальные продукты для отработки навыков сердечно-сосудистой хирургии теперь в нашей линейке', NULL, '<h1>Уникальные продукты для отработки навыков сердечно-сосудистой хирургии теперь в нашей линейке</h1>\r\n\r\n<p>Главные проблемы и направления современной хирургии прямо и непосредственно связаны с хирургией сосудов</p>\r\n\r\n<p>Компания Виртумед пополнила свой ассортимент широким спектром фантомов и муляжей, на которых вы легко отработаете навыки кардиохирургии без риска для пациента.</p>\r\n\r\n<p>Максимально реалистичный тренинг шунтирования, открытых операций на сердце предложен на</p>\r\n\r\n<p><strong><a href=\"fantomy-simulyatory/fantomy-dlya-serdechno-sosudistoj-hirurgii/fantom-dlya-provedeniya-vmeshatelstv-na-otkrytom-serdce.html\">Фантоме для проведения вмешательств на открытом сердце</a></strong><strong>,&nbsp;</strong>а также на</p>\r\n\r\n<p><strong><a href=\"fantomy-simulyatory/fantomy-dlya-serdechno-sosudistoj-hirurgii/fantom-grudnoj-kletki-dlya-otrabotki-navykov-kardiohirurgii.html\">Фантоме грудной клетки для отработки навыков кардиохирургии</a>&nbsp;</strong></p>\r\n\r\n<p>Вы отработаете:</p>\r\n\r\n<ul>\r\n	<li>Коронарное шунтирование, проксимальные и дистальные анастомозы</li>\r\n	<li>Имплантацию аортального клапана</li>\r\n	<li>Аортальную канюляцию</li>\r\n	<li>Сквозной анастомоз на мелких сосудах</li>\r\n	<li>Процедуры на митральном клапане</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>На&nbsp;<a href=\"fantomy-simulyatory/fantomy-dlya-serdechno-sosudistoj-hirurgii/fantom-dlya-otrabotki-navykov-provedeniya-ekmo-i-perfuzii.html\">Фантоме для отработки навыков проведения ЭКМО и перфузии</a>&nbsp;</strong>вы изучите:</p>\r\n\r\n<ul>\r\n	<li>Интубацию</li>\r\n	<li>ИВЛ</li>\r\n	<li>Канюляцию правого предсердия аорты и прошивание</li>\r\n	<li>Заполнение перфузионного контура</li>\r\n	<li>Мониторинг давления на внутриартериальном катетере</li>\r\n	<li>Антеградную кардиоплегию</li>\r\n	<li>Аортокоронарное шунтирование</li>\r\n	<li>Вено-Артериальную (ВА) ЭКМО и</li>\r\n	<li>Вено-Венозную (ВВ) ЭКМО</li>\r\n</ul>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p>Мы подготовили для вас большой ассортимент современных&nbsp;<strong><a href=\"fantomy-simulyatory/fantomy-dlya-serdechno-sosudistoj-hirurgii/fantom-grudnoj-kletki-dlya-otrabotki-navykov-kardiohirurgii.html\">муляжей сердца</a></strong>&nbsp;для фантомов кардиохирургии с отличными характеристиками<strong>:</strong></p>\r\n\r\n<ul>\r\n	<li>натуральная величина со всеми анатомическими ориентирами, окрашенными в соответствующие цвета</li>\r\n	<li>детализированный внешний вид</li>\r\n	<li>по тактильным ощущениям напоминает реальное сердце</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Мы обеспечим вас полным спектром расходных материалов.</p>\r\n\r\n<p>Задавайте любые вопросы по новым продуктам, мы всегда рады помочь!</p>', NULL, 'LjfeLb8QE4.png', '2021-04-24 02:43:59', '2021-04-24 02:43:59', NULL, NULL, 'uniq');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anonce` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `spec_id` int(11) DEFAULT NULL,
  `skill_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci,
  `meta_key` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `anonce`, `text`, `cat_id`, `spec_id`, `skill_id`, `slug`, `img`, `created_at`, `updated_at`, `meta_desc`, `meta_key`) VALUES
(195, 'Цезарь', '<p>описание</p>', '<div class=\"product__txt\">\r\n<p>Беспроводное управление позволит использовать робот-симулятор Афина как в учебной аудитории, так и за ее пределами. Модель физиологии Афины разработана с учетом особенностей женского организма. За счет улучшенной модели дыхательной системы Афина может автоматически реагировать на механическую вентиляцию легких, триггер аппарата ИВЛ и демонстрировать повышенный пик давления на вдохе. В программу также встроены метрики проведения СЛР, которые позволят оценить правильность и эффективность реанимационных мероприятий.<img alt=\"\" src=\"/img/athenabeautyprint.jpeg\" style=\"height:325px; width:600px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n\r\n<h3>Функциональные особенности</h3>\r\n\r\n<div class=\"product__txt product__txt--two\">\r\n<h4>Дыхательная система:</h4>\r\n\r\n<ul>\r\n	<li>Спонтанное дыхание</li>\r\n	<li>Артикуляция шеи</li>\r\n	<li>Артикулируемая нижняя челюсть</li>\r\n	<li>Односторонние и двусторонние экскурсии грудной клетки, синхронизированные с вентиляцией (спонтанной и механической)</li>\r\n	<li>Анатомически верные верхние дыхательные пути</li>\r\n	<li>Ларингоскопия и оральная интубация (ларингеальные маски, ЭТТ, орофарингеальные воздуховоды)</li>\r\n	<li>Вентиляция дыхательным мешком</li>\r\n	<li>Симметричная и асимметричная вентиляция легких</li>\r\n	<li>Механическая вентиляция и различные режимы вентиляции (CMV, SIMV)</li>\r\n	<li>Эффективность вентиляции отражается в концентрациях альвеолярных и артериальных газов</li>\r\n</ul>\r\n\r\n<h4>Сердечно-сосудистая система:</h4>\r\n\r\n<ul>\r\n	<li>Билатеральный пульс на сонных, лучевых, радиальных и артериях стоп синхронизирован с сердечным циклом</li>\r\n	<li>Измерение АД билатерально путем аускультации и пальпации</li>\r\n	<li>Кардиостимуляция и дефибрилляция</li>\r\n	<li>ЭКГ по 12 отведениям</li>\r\n	<li>Использование реального ЭКГ монитора</li>\r\n	<li>В/в инъекции билатерально</li>\r\n</ul>\r\n\r\n<h4>СЛР:</h4>\r\n\r\n<ul>\r\n	<li>Детектор правильности положения рук</li>\r\n	<li>Анализ СЛР</li>\r\n</ul>\r\n\r\n<h4>Нервная система:</h4>\r\n\r\n<ul>\r\n	<li>Реакция зрачков на свет</li>\r\n	<li>Моргание и закрывание век</li>\r\n	<li>Судороги ассоциированы с учащенным морганием и сотрясанием рук</li>\r\n</ul>\r\n\r\n<h4>Выделительная система:</h4>\r\n\r\n<ul>\r\n	<li>Катетеризация мочевого пузыря</li>\r\n	<li>Выделение мочи</li>\r\n</ul>\r\n\r\n<h4>Звуки:</h4>\r\n\r\n<ul>\r\n	<li>Записанные звуки и речь, использование собственных звуков по беспроводному микрофону</li>\r\n	<li>Звуки сердца, кишечника и дыхания (спереди и сзади) управляются независимо (тип и громкость)</li>\r\n	<li>Звуки дыхания (свистящее и затрудненное) слышны</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>Базовые клинические сценарии</h3>\r\n\r\n<div class=\"product__txt\">\r\n<ol>\r\n	<li>Обострение хронической сердечной недостаточности</li>\r\n	<li>Острый респираторный дистресс-синдром</li>\r\n	<li>Поражение мозга с тромболитической терапией</li>\r\n	<li>Сепсис с гипотонией</li>\r\n	<li>Автомобильная авария и гиповолемический шок</li>\r\n</ol>\r\n\r\n<h4>&nbsp;</h4>\r\n</div>\r\n\r\n<h3>Дополнительная информация</h3>\r\n\r\n<div class=\"product__txt\">\r\n<p><a href=\"assets/files/roboty-simulyatory/afina/afina.pdf\">Презентация &quot;Афина, робот-симулятор женщины VI класса реалистичности&quot;</a></p>\r\n</div>', 12, NULL, NULL, 'cezar', 'wP4QEi3eRV.jpeg', '2021-04-23 09:49:09', '2021-04-23 10:42:58', NULL, NULL),
(197, 'Аполлон', '<p>Отработка навыков оказания неотложной помощи в команде</p>', '<p>Полный текст</p>', 11, NULL, NULL, 'apollon', 'PQxkRKZvLn.jpeg', '2021-04-23 09:49:52', '2021-04-23 10:15:41', NULL, NULL),
(198, 'Арес', '<p>Оказание экстренной помощи</p>', '<p>Полный текст</p>', 16, NULL, NULL, 'ares', 'f09aWBqY9e.png', '2021-04-23 09:50:10', '2021-04-23 10:15:56', NULL, NULL),
(199, 'Афина', '<p>Полностью повторяет анатомию и физиологию пациента женского пола</p>', '<p>Полный текст</p>', 19, NULL, NULL, 'afina', 'pN6y28jNBW.jpeg', '2021-04-23 09:50:30', '2021-04-23 10:16:29', NULL, NULL),
(200, 'Люсина', '<p>Обучение приемам родовспоможения, включая предродовый и послеродовый периоды</p>', '<p>Полный текст</p>', 20, NULL, NULL, 'lyusina', 'eW07WMajle.jpeg', '2021-04-23 09:51:21', '2021-04-23 09:51:42', NULL, NULL),
(201, 'Тест', '<p>описание</p>', '<p>Полный текст</p>', 11, NULL, NULL, 'test', NULL, '2021-05-05 03:10:15', '2021-05-05 03:10:15', NULL, NULL),
(202, 'Тест', '<p>описание</p>', '<p>Полный текст</p>', 11, 28, 27, 'test-1', NULL, '2021-05-05 03:10:26', '2021-05-05 03:12:35', NULL, NULL),
(203, 'Test2', '<p>описание</p>', '<p>Полный текст</p>', 14, 25, 31, 'test2', NULL, '2021-05-05 03:13:24', '2021-05-05 03:18:36', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prod_cats`
--

CREATE TABLE `prod_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prod_cats`
--

INSERT INTO `prod_cats` (`id`, `title`, `description`, `slug`, `img`, `created_at`, `updated_at`) VALUES
(11, 'Педиатрия и неонатология', 'Устройства симуляционного тренинга манипуляций', 'pediatriya-i-neonatologiya', 'bHttbdCGXs.jpeg', '2021-04-23 09:37:29', '2021-04-25 06:22:41'),
(12, 'Терапия, кардиология', 'Отработка манипуляций на тренажерах в виртуальной среде', 'terapiya-kardiologiya', '9uSVAquh1c.jpeg', '2021-04-23 09:37:34', '2021-04-25 06:23:09'),
(13, 'Акушерство и гинекология', 'Симуляторы в очках виртуальной реальности', 'akusherstvo-i-ginekologiya', 'jF5b13Czh1.jpeg', '2021-04-23 09:37:42', '2021-04-25 06:23:27'),
(14, 'Анестезиология-реаниматология', 'Управление учебным центром и учебным процессом', 'anesteziologiya-reanimatologiya', 'callUKgj8K.jpeg', '2021-04-23 09:37:50', '2021-04-25 06:24:02'),
(15, 'Скорая помощь, военная медицина, МЧС', 'Медицинские манекены взрослых пациентов, рожениц и детей', 'skoraya-pomoshch-voennaya-medicina-mchs', 'oCOdK18V3r.jpeg', '2021-04-23 09:37:57', '2021-04-25 06:24:13'),
(16, 'Сестринское дело', 'Анатомические модели органов и тканей', 'sestrinskoe-delo', 'NgLumstyjt.jpeg', '2021-04-23 09:38:04', '2021-04-25 05:44:42'),
(18, 'Уход за больными', 'Фантомы органов и тканей', 'uhod-za-bolnymi', 'TtBiti0xoS.jpeg', '2021-04-23 09:38:20', '2021-04-25 06:26:40'),
(19, 'Спасение жизни, СЛР', 'Устройства, имитирующие реальное медицинское оборудование', 'spasenie-zhizni-slr', '4bxGdBApvM.jpeg', '2021-04-23 09:38:26', '2021-04-25 06:27:41'),
(20, 'Роды', 'Отработка манипуляций на тренажерах в виртуальной среде', 'rody', 'q3GVwx12QT.png', '2021-04-23 09:38:38', '2021-04-25 06:29:36'),
(21, 'Клиническое мышление', NULL, 'klinicheskoe-myshlenie', NULL, '2021-04-23 09:38:45', '2021-04-23 09:38:45'),
(22, 'Инъекции и пункции', NULL, 'inekcii-i-punkcii', NULL, '2021-04-23 09:38:52', '2021-04-23 09:38:52'),
(23, 'Интубация, вентиляция', NULL, 'intubaciya-ventilyaciya', NULL, '2021-04-23 09:39:00', '2021-04-23 09:39:00'),
(24, 'Объективные исследования', NULL, 'obektivnye-issledovaniya', NULL, '2021-04-23 09:39:07', '2021-04-23 09:39:07'),
(25, 'Ангиография', NULL, 'angiografiya', NULL, '2021-05-05 02:16:12', '2021-05-05 02:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `prod_cats_skills`
--

CREATE TABLE `prod_cats_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prod_cats_skills`
--

INSERT INTO `prod_cats_skills` (`id`, `title`, `description`, `slug`, `img`, `created_at`, `updated_at`) VALUES
(25, 'Ангиография.', NULL, 'angiografiya', NULL, '2021-05-05 02:19:24', '2021-05-05 02:19:51'),
(27, 'Анестезиология-реаниматология', NULL, 'anesteziologiya-reanimatologiya', NULL, '2021-05-05 02:20:03', '2021-05-05 02:20:03'),
(28, 'Акушерство и гинекология', NULL, 'akusherstvo-i-ginekologiya', NULL, '2021-05-05 02:20:14', '2021-05-05 02:20:14'),
(32, 'Офтальмология', NULL, 'oftalmologiya', NULL, '2021-05-05 03:54:48', '2021-05-05 03:54:48'),
(33, 'Терапия, кардиология', NULL, 'terapiya-kardiologiya', NULL, '2021-05-05 03:55:22', '2021-05-05 03:55:22'),
(34, 'Нейрохирургия', NULL, 'neyrohirurgiya', NULL, '2021-05-05 03:55:56', '2021-05-05 03:55:56'),
(35, 'Оториноларингология (ЛОР)', NULL, 'otorinolaringologiya-lor', NULL, '2021-05-05 03:56:12', '2021-05-05 03:56:12'),
(36, 'Педиатрия и неонатология', NULL, 'pediatriya-i-neonatologiya', NULL, '2021-05-05 03:56:23', '2021-05-05 03:56:23'),
(37, 'Радиология (УЗИ, рентген)', NULL, 'radiologiya-uzi-rentgen', NULL, '2021-05-05 03:56:34', '2021-05-05 03:56:34'),
(38, 'Сестринское дело', NULL, 'sestrinskoe-delo', NULL, '2021-05-05 03:56:50', '2021-05-05 03:56:50'),
(39, 'Скорая помощь, военная медицина, МЧС', NULL, 'skoraya-pomoshch-voennaya-medicina-mchs', NULL, '2021-05-05 03:57:05', '2021-05-05 03:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `prod_cats_spec`
--

CREATE TABLE `prod_cats_spec` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prod_cats_spec`
--

INSERT INTO `prod_cats_spec` (`id`, `title`, `description`, `slug`, `img`, `created_at`, `updated_at`) VALUES
(29, 'Терапия, кардиология', NULL, 'terapiya-kardiologiya', NULL, '2021-05-05 03:53:17', '2021-05-05 03:53:17'),
(30, 'Офтальмология', NULL, 'oftalmologiya', NULL, '2021-05-05 03:54:01', '2021-05-05 03:54:01'),
(32, 'Хирургический шов', NULL, 'hirurgicheskiy-shov', NULL, '2021-05-05 04:01:17', '2021-05-05 04:01:17'),
(33, 'Уход за детьми', NULL, 'uhod-za-detmi', NULL, '2021-05-05 04:01:25', '2021-05-05 04:01:25'),
(34, 'Уход за больными', NULL, 'uhod-za-bolnymi', NULL, '2021-05-05 04:01:35', '2021-05-05 04:01:35'),
(35, 'Спасение жизни, СЛР', NULL, 'spasenie-zhizni-slr', NULL, '2021-05-05 04:01:46', '2021-05-05 04:01:46'),
(36, 'Объективные исследования', NULL, 'obektivnye-issledovaniya-1', NULL, '2021-05-05 04:02:07', '2021-05-05 04:02:07'),
(37, 'Интубация, вентиляция', NULL, 'intubaciya-ventilyaciya', NULL, '2021-05-05 04:02:17', '2021-05-05 04:02:17'),
(38, 'Инъекции и пункции', NULL, 'inekcii-i-punkcii', NULL, '2021-05-05 04:02:39', '2021-05-05 04:02:39'),
(39, 'Инструментальная диагностика', NULL, 'instrumentalnaya-diagnostika', NULL, '2021-05-05 04:02:58', '2021-05-05 04:02:58'),
(40, 'Клиническое мышление', NULL, 'klinicheskoe-myshlenie', NULL, '2021-05-05 04:03:12', '2021-05-05 04:03:12');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anonce` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `anonce`, `text`, `img`, `created_at`, `updated_at`) VALUES
(3, 'Услуга 2', NULL, NULL, 'vaOalLH3Po.jpeg', '2020-09-13 03:10:56', '2020-09-13 03:10:56'),
(9, '1', NULL, NULL, 'wLNyM6pEyd.jpeg', '2021-04-30 02:04:42', '2021-04-30 02:04:42'),
(10, '2', NULL, NULL, 'QkLiDJ2u4N.jpeg', '2021-04-30 02:04:54', '2021-04-30 02:04:54'),
(11, '3', NULL, NULL, 'NC9azlsSvy.jpeg', '2021-04-30 02:05:06', '2021-04-30 02:05:06'),
(12, '4', NULL, NULL, '5MDYdX8xj8.jpeg', '2021-04-30 02:05:20', '2021-04-30 02:05:20'),
(13, '5', NULL, NULL, 'PFJs6WYPec.jpeg', '2021-04-30 02:05:35', '2021-04-30 02:05:35'),
(14, '7', NULL, NULL, 'Xo113OqWmN.jpeg', '2021-04-30 02:05:52', '2021-04-30 02:05:52'),
(15, '77', NULL, NULL, '7zRLKt9ssQ.jpeg', '2021-04-30 02:06:26', '2021-04-30 02:06:27'),
(39, '1', NULL, NULL, 'wLNyM6pEyd.jpeg', '2021-04-30 02:04:42', '2021-04-30 02:04:42'),
(310, '2', NULL, NULL, 'QkLiDJ2u4N.jpeg', '2021-04-30 02:04:54', '2021-04-30 02:04:54'),
(312, '4', NULL, NULL, '5MDYdX8xj8.jpeg', '2021-04-30 02:05:20', '2021-04-30 02:05:20'),
(313, '5', NULL, NULL, 'PFJs6WYPec.jpeg', '2021-04-30 02:05:35', '2021-04-30 02:05:35'),
(314, '7', NULL, NULL, 'Xo113OqWmN.jpeg', '2021-04-30 02:05:52', '2021-04-30 02:05:52'),
(315, '77', NULL, NULL, '7zRLKt9ssQ.jpeg', '2021-04-30 02:06:26', '2021-04-30 02:06:27'),
(3311, '3', NULL, NULL, 'NC9azlsSvy.jpeg', '2021-04-30 02:05:06', '2021-04-30 02:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anonce` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `anonce`, `img`, `created_at`, `updated_at`) VALUES
(6, 'Banner 1', 'Полный спектр оборудования для симуляционных центров', 'tFwrtPgEWB.jpeg', '2020-09-12 02:44:31', '2021-04-24 13:39:59'),
(7, 'Banner 2', 'Полный спектр оборудования для симуляционных центров', 'NpvkpXmv8l.jpeg', '2021-04-24 13:30:14', '2021-04-24 13:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `anonce` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `title`, `content`, `anonce`, `img`, `created_at`, `updated_at`) VALUES
(1, 'title', '<p>&nbsp;Тест 2</p>', NULL, NULL, NULL, '2020-09-13 02:18:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'remrtehno@mail.ru', NULL, '$2y$10$oFZNtS77z/96NmV/Inttgem378WF9Ao4nQU/PyGlqkV7bKaXe3b6a', 'Pt2sfaOCc2rzCl2gHSmZfPQ1u7q6OhFlXGLd4A5DYPapSzDDlmgGCm8DHrPr', '2020-09-12 02:04:14', '2020-09-12 02:04:14'),
(4, 'admin@site.uz', 'admin@site.uz', NULL, '$2y$10$5nc4BxlXZZQf6OUgqNePcOzosX05TywxWHQw8nQ8bT4Xy59qPGp96', '3qvucbAAbSzfhdus4Eru7G3VFhr9vobsq3gLhq1JRAgjc0xJSHZml6Hj6jRM', '2021-04-23 09:16:53', '2021-04-23 09:16:53');

-- --------------------------------------------------------

--
-- Table structure for table `userwrap`
--

CREATE TABLE `userwrap` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anonce` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `file`, `title`, `created_at`, `updated_at`) VALUES
(25, '3GbYQbh7dS.mp4', 'стабилизатор', '2021-05-04 12:45:00', '2021-05-04 12:49:14'),
(26, 'GxNXlBoNjQ.mp4', 'Лента', '2021-05-04 12:54:35', '2021-05-04 12:54:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloaded_files`
--
ALTER TABLE `downloaded_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `prod_cats`
--
ALTER TABLE `prod_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod_cats_skills`
--
ALTER TABLE `prod_cats_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod_cats_spec`
--
ALTER TABLE `prod_cats_spec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `userwrap`
--
ALTER TABLE `userwrap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `downloaded_files`
--
ALTER TABLE `downloaded_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `prod_cats`
--
ALTER TABLE `prod_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `prod_cats_skills`
--
ALTER TABLE `prod_cats_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `prod_cats_spec`
--
ALTER TABLE `prod_cats_spec`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3312;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userwrap`
--
ALTER TABLE `userwrap`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
