-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 11 2020 г., 16:34
-- Версия сервера: 5.7.25
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `psychologist`
--

-- --------------------------------------------------------

--
-- Структура таблицы `colleagues`
--

CREATE TABLE `colleagues` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `specialization` varchar(255) DEFAULT NULL,
  `degree` varchar(255) NOT NULL,
  `listMethods` varchar(1000) DEFAULT NULL,
  `descriptionMethods` varchar(8000) NOT NULL,
  `education` text,
  `hobbies` varchar(255) DEFAULT NULL,
  `titleAdditional` varchar(1000) NOT NULL,
  `descriptionAdditional` varchar(8000) NOT NULL,
  `certificates` varchar(512) NOT NULL,
  `notes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `colleagues`
--

INSERT INTO `colleagues` (`id`, `name`, `photo`, `specialization`, `degree`, `listMethods`, `descriptionMethods`, `education`, `hobbies`, `titleAdditional`, `descriptionAdditional`, `certificates`, `notes`) VALUES
(1, 'Джулай Надежда Мироновна', '/photo/colleague/psiholog1.jpg', 'психиатр, психотерапевт', '', 'неизвестно', '', 'Ранние годы.\r\nВирджиния родилась в Спрингфилде, Миссури. Была одарённым ребенком, на 2 года раньше окончила школу и уже в 16 лет поступила в Друри колледж (англ. Drury College), чтобы учиться музыке, но отказалась от обучения в пользу работы в государственной страховой компании. Там она провела 4 года, однако любовь к музыке подтолкнула её к продолжению образования[2] в Миссурийском университете (англ. University of Missouri) и Музыкальной консерватории Канзаса (англ. Kansas City Conservatory of Music). Во время Второй мировой войны Джонсон выступала с музыкальной группой в качестве певицы.', 'неизвестно', '', '', '/photo/certificates/id1_1.jpg,/photo/certificates/id1_2.jpg,/photo/certificates/id1_3.jpg,/photo/certificates/id1_4.jpg,/photo/certificates/id1_5.jpg,/photo/certificates/id1_6.jpg', NULL),
(2, 'Каплина Лада Юриевна', '/photo/colleague/psiholog2.jpg', 'психиатр, психотерапевт', '', 'психодинамическя психотерапия с использованием гипнотехник эриксоновского гипноза, очные и онлайн консультации', '', 'Когда мальчику было шесть месяцев, его отца назначили в более престижный приход в Лауффене. Однако, родители Карла не могли найти общий язык. Эмили Юнг была эксцентричной и депрессивной женщиной. Большую часть времени она проводила в спальне, где, по её словам, общалась по ночам с духами. Юнг больше общался с отцом. Хотя, днём всё было нормально. Юнг рассказывал, что ночью его мать становилась странной и загадочной. Он утверждает, что однажды ночью увидел слегка светящуюся неясную фигуру, выходящую из комнаты матери, голова фигуры была расположена отдельно от шеи и парила в воздухе перед телом.\r\n\r\nМать Юнга покинула Лауффен на несколько месяцев по причине госпитализации под Базелем из-за неопознанной болезни. Отец взял с собой Карла, чтобы увидеться с незамужней сестрой Эмили в Базеле, но позже снова вернулся домой. Продолжающиеся эпизоды депрессии и подавленного настроения Эмили Юнг повлияли на отношение Карла к женщинам: он чувствовал «присущую ненадёжность» среди женщин. Позже он это описывает, как «гандикап, с которого всё началось». Он полагал, что это поспособствовало его патриархальному отношению к женщинам. В 1879 Юнга отправили в Клингхондинген недалеко от Базеля. Перемена места жительства принудила Эмили Юнг к более тесному контакту с семьёй. Это вызвало у неё тоску.\r\n\r\nЮнг был одиноким и замкнутым ребёнком. С самого детства он, как и его мать, верил, что у него есть две личности — современный швейцарский гражданин и личность, которая, скорее всего, относится к 18-му веку. «Личность № 1», как он это называл, была типичным учеником, живущим в нынешнем веке. Личность № 2 была гордым, авторитетным и влиятельным человеком прошлого. Хотя Юнг был близок к обоим родителям, он был разочарован академическим подходом отца к вере.', 'неизвестно', '', '', '', NULL),
(3, 'Сулима Николай Анатольевич', '/photo/colleague/psiholog3.jpg', 'православный психотерапевт', '', 'логотерапия, экзистенцияльная терапия, групповая терапия', '', 'Ранние годы.\r\nВирджиния родилась в Спрингфилде, Миссури. Была одарённым ребенком, на 2 года раньше окончила школу и уже в 16 лет поступила в Друри колледж (англ. Drury College), чтобы учиться музыке, но отказалась от обучения в пользу работы в государственной страховой компании. Там она провела 4 года, однако любовь к музыке подтолкнула её к продолжению образования[2] в Миссурийском университете (англ. University of Missouri) и Музыкальной консерватории Канзаса (англ. Kansas City Conservatory of Music). Во время Второй мировой войны Джонсон выступала с музыкальной группой в качестве певицы.', 'неизвестно', '', '', '/photo/certificates/id3_1.jpg,/photo/certificates/id3_2.jpg,/photo/certificates/id3_3.jpg,/photo/certificates/id3_4.jpg', NULL),
(4, 'Демьяненко Елена Игоревна', '/photo/colleague/psiholog4.jpg', 'психолог', 'практикующий психолог высшей категории', '- ЛИЧНОСТНО-ОРИЕНТИРОВАННОЙ психотерапии,\\n\r\n- ПОВЕДЕНЧЕСКОЙ психотерапии,\\n\r\n- МОТИВАЦИОННО-ПОВЕДЕНЧЕСКОЙ психотерапии,\\n\r\n- РАЦИОНАЛЬНОЙ психотерапии,\\n\r\n- КОГНИТИВНОЙ психотерапии.\\n\r\n', '-  ЛИЧНОСТНО-ОРИЕНТИРОВАННОЙ психотерапии. Основной целью которой является достижение позитивных личностных изменений (коррекция нарушенной системы отношений, неадекватных когнитивных и поведенческих стереотипов), что ведет как к улучшению субъективного самочувствия пациента и устранению симптоматики, так и к восстановлению полноценного функционирования личности. \\n\r\n-  ПОВЕДЕНЧЕСКОЙ  психотерапии. Основной целью которой является коррекция неправильных, неадаптивных форм поведения и обучение новым, более эффективным и здоровым формам поведения. \\n\r\n-  МОТИВАЦИОННО-ПОВЕДЕНЧЕСКОЙ психотерапии. \\n\r\n-  РАЦИОНАЛЬНОЙ психотерапии. Основной целью которой является объяснение, убеждение, переориентация неправильных представлений, основанное на логической аргументации.\r\nКОГНИТИВНОЙ психотерапии. Основной целью которой является изменение дезадаптивных убеждений, коррекция когнитивных ошибок, изменение дисфункционального поведения. \\n', '1983-1988г - Университет им.Т.Г.Шевченко Специальность: \"Психология\". \\n\r\n1999г – повышение квалификации- Харьковская медицинская академия последипломного образования. Специализация «Психодиагностика и психокоррекция в клинике». \\n\r\n2009г – повышение квалификации – Национальная медицинская академия последипломного образования им. Шупика. Специализация “Пропедевтика психических заболеваний”. \\n\r\n2012г – предаттестационный цикл « Практическая психология». Институт последипломного педагогического образования Киевского университета им. Б.Гринченко. \\n\r\n2012г – Присвоена квалификационная категория «Специалист Первой категории». \\n\r\n2017г – Присвоена квалификационная категория «Специалист Высшей категории». \\n\r\n', 'курение сигар', 'В психокоррекционной работе использую техники:', '- ЛИЧНОСТНО-ОРИЕНТИРОВАННОЙ психотерапии. Основной целью которой является достижение позитивных личностных изменений (коррекция нарушенной системы отношений, неадекватных когнитивных и поведенческих стереотипов), что ведет как к улучшению субъективного самочувствия пациента и устранению симптоматики, так и к восстановлению полноценного функционирования личности.\\n\r\n- ПОВЕДЕНЧЕСКОЙ  психотерапии. Основной целью которой является коррекция неправильных, неадаптивных форм поведения и обучение новым, более эффективным и здоровым формам поведения.\\n\r\n- МОТИВАЦИОННО-ПОВЕДЕНЧЕСКОЙ психотерапии.\\n\r\n- РАЦИОНАЛЬНОЙ психотерапии. Основной целью которой является объяснение, убеждение, переориентация неправильных представлений, основанное на логической аргументации.\r\n- КОГНИТИВНОЙ психотерапии. Основной целью которой является изменение дезадаптивных убеждений, коррекция когнитивных ошибок, изменение дисфункционального поведения.\\n\r\n', '', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `directions`
--

CREATE TABLE `directions` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `notes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `directions`
--

INSERT INTO `directions` (`id`, `photo`, `content`, `price`, `notes`) VALUES
(1, '/photo/offers/psychiatryDirection1.jpg', 'Логотерапия и экзистенциальный анализ', '1500', NULL),
(2, '/photo/offers/psychiatryDirection2.jpg', 'Психоаналитическая терапия', '1500', NULL),
(3, '/photo/offers/psychiatryDirection3.jpg', 'Групповая терапия', '1500', NULL),
(4, '/photo/offers/psychiatryDirection4.jpg', 'Эриксоновский гипноз', '1500', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `photoAddress` varchar(512) DEFAULT NULL,
  `title` varchar(256) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `notes` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `photoAddress`, `title`, `description`, `notes`) VALUES
(1, '/photo/gallery/groop/groopPhoto1.jpg,/photo/gallery/groop/groopPhoto2.jpg,/photo/gallery/groop/groopPhoto3.jpg', 'Групповая терапия', NULL, NULL),
(2, '/photo/gallery/cabinet/cabinetPhoto1.jpg,/photo/gallery/cabinet/cabinetPhoto2.jpg', 'Приемный кабинет', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1597324769),
('m200813_131256_colleagues', 1597324820),
('m200826_145517_services', 1598453961),
('m200827_125503_psychiatryDirections', 1598533426),
('m200827_130437_offers', 1598533589),
('m200909_122130_gallery', 1599654322);

-- --------------------------------------------------------

--
-- Структура таблицы `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `notes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `offers`
--

INSERT INTO `offers` (`id`, `photo`, `content`, `price`, `notes`) VALUES
(1, '/photo/offers/offers1.jpg', 'Врачебная консультация', '1600', NULL),
(2, '/photo/offers/offers2.jpg', 'Онлайн консультирование', '1600', NULL),
(3, '/photo/offers/offers3.jpg', 'Выезд на дом', '1600', NULL),
(4, '/photo/offers/offers2.jpg', 'Диагностический осмотр психолога', '1600', NULL),
(5, '/photo/offers/offers5.jpg', 'Назначение медикаментозного лечения', '1600', NULL),
(6, '/photo/offers/offers6.jpg', 'Стационарное лечение', '1600', NULL),
(7, '/photo/offers/offers7.jpg', 'Рефлексотерапия (акупунктура)', '1600', NULL),
(8, '/photo/offers/psychiatryDirection1.jpg', 'Логотерапия и экзистенциальный анализ', '1600', NULL),
(9, '/photo/offers/psychiatryDirection2.jpg', 'Психоаналитическая терапия', '1600', NULL),
(10, '/photo/offers/psychiatryDirection3.jpg', 'Групповая терапия', '1600', NULL),
(11, '/photo/offers/psychiatryDirection4.jpg', 'Эриксоновский гипнозз', '1600', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `colleagues`
--
ALTER TABLE `colleagues`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `directions`
--
ALTER TABLE `directions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `colleagues`
--
ALTER TABLE `colleagues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `directions`
--
ALTER TABLE `directions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
