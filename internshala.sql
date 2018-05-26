-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 02:11 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_internship`
--

CREATE TABLE `apply_internship` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `internship_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_internship`
--

INSERT INTO `apply_internship` (`id`, `user_id`, `internship_id`, `company_id`, `date`) VALUES
(11, 5, 20, 5, '2018-05-23'),
(12, 7, 20, 5, '2018-05-23'),
(13, 7, 21, 5, '2018-05-23'),
(14, 7, 22, 7, '2018-05-23'),
(15, 8, 21, 5, '2018-05-23'),
(16, 9, 24, 7, '2018-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `employer_login`
--

CREATE TABLE `employer_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer_login`
--

INSERT INTO `employer_login` (`id`, `username`, `password`, `email`, `company`) VALUES
(5, 'ishikka', '$2y$10$aOUj/f8JwIYBp3qbhn73xuG4kondGM5b4CmaT4vkY709yQRTT9Xje', 'eshicagupta3@gmail.com', 'Green Go'),
(7, 'muskan', '$2y$10$Gqej/9m9LLOGiQuEogo3yOG.Eo.y4btMnPNvigURfM3wlwBuKX.Ya', 'muskan@gmail.com', 'Goibo');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `stipend` varchar(100) NOT NULL,
  `posted_on` date NOT NULL,
  `apply_by` date NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `description` varchar(60000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`id`, `company_id`, `category`, `location`, `duration`, `stipend`, `posted_on`, `apply_by`, `start_date`, `description`) VALUES
(20, 5, 'Web Development', 'Noida', '2`', '2000', '2018-05-23', '2018-05-30', 'immidiately', '<p><strong>About Green Factor:</strong></p><p>Green Factor is into manufacturing and sales of eco-friendly products. Our current focus area is Jute and cloth bags.</p><p>About the Internship:</p><p>Selected intern&#39;s day-to-day responsibilities include working on web page design and support for hosting.</p><p><strong># of Internships available:&nbsp;1</strong></p><p><strong>Skill(s) required:&nbsp;Adobe Photoshop</strong></p><p><strong>Who can apply:</strong></p><p><strong>Only those candidates can apply wh</strong>o:</p><ol><li><p>are available for work from home internship</p></li><li><p>can start the internship between 9th May&#39;18 and 8th Jun&#39;18</p></li><li><p>are available for duration of 1 month</p></li><li><p>have relevant skills and interests</p></li></ol><p>** Women willing to start/restart their career can also apply.</p><p><strong>Perks:</strong></p><p>Certificate, Flexible work hours.</p>'),
(21, 5, 'Android', 'Delho', '2', '1000', '2018-05-23', '2018-06-04', 'immidiately', '<p><strong>About ATG (<a target=\"_blank\" href=\"http://www.atg.world/\">http://www.atg.world</a>):</strong></p><p>ATG connects students and professionals around the globe. We are a startup based in Bangalore and our values are to help people excel in their careers, professional, and personal lives. We have a unique product which can help millions of people excel in their careers and hobbies. The product is the need of the hour and worth a billion dollars and may help millions of people excel in their careers and help struggling people get a better job/direction/network. We thrive to provide support to people to achieve higher goals in pursuing success in their career.</p><p><strong>About the Internship:</strong></p><p>Selected intern&#39;s day-to-day responsibilities include:<br /><br />1. Traversing HTML pages and its elements<br />2. Using regex to extract specific data from a webpage<br />3. Ensuring quality assurance through testing process</p><p># of Internships available:&nbsp;5</p><p><strong>Skill(s) required:&nbsp;HTML (<a target=\"_blank\" href=\"https://trainings.internshala.com/web-development?utm_source=internshala_details_page_skills_section\">Learn HTML</a>)</strong></p><p><strong>Who can apply:</strong></p><p><strong>Only those candidates can apply who:</strong></p><ol><li><p>are available for work from home internship</p></li><li><p>can start the internship between 19th May&#39;18 and 18th Jun&#39;18</p></li><li><p>are available for duration of 1 month</p></li><li><p>have relevant skills and interests</p></li></ol><p>** Women willing to start/restart their career can also apply.</p><p><strong>Perks:</strong></p><p>Certificate, Flexible work hours, 5 days a week.</p>'),
(22, 7, 'Machine Learning', 'work from home', '2', '2000', '2018-05-23', '2018-02-12', 'immidiately', '<p><strong>About ATG (<a target=\"_blank\" href=\"http://www.atg.world/\">http://www.atg.world</a>):</strong></p><p>ATG connects students and professionals around the globe. We are a startup based in Bangalore and our values are to help people excel in their careers, professional, and personal lives. We have a unique product which can help millions of people excel in their careers and hobbies. The product is the need of the hour and worth a billion dollars and may help millions of people excel in their careers and help struggling people get a better job/direction/network. We thrive to provide support to people to achieve higher goals in pursuing success in their career.</p><p><strong>About the Internship:</strong></p><p><strong>Selected intern&#39;s day-to-day responsibilities include:</strong><br /><br />1. Traversing HTML pages and its elements<br />2. Using regex to extract specific data from a webpage<br />3. Ensuring quality assurance through testing process</p><p><strong># of Internships available:&nbsp;5</strong></p><p><strong>Skill(s) required:&nbsp;HTML (<a target=\"_blank\" href=\"https://trainings.internshala.com/web-development?utm_source=internshala_details_page_skills_section\">Learn HTML</a>)</strong></p><p>Who can apply:</p><p>Only those candidates can apply who:</p><ol><li><p>are available for work from home internship</p></li><li><p>can start the internship between 19th May&#39;18 and 18th Jun&#39;18</p></li><li><p>are available for duration of 1 month</p></li><li><p>have relevant skills and interests</p></li></ol><p>** Women willing to start/restart their career can also apply.</p><p><strong>Perks:</strong></p><p>Certificate, Flexible work hours, 5 days a week.</p>'),
(23, 7, 'Cryptography', 'work from home', '2', '2000', '2018-05-23', '2018-04-04', '22-12-2018', '<p><strong>About BuyersGoHappy.com (<a target=\"_blank\" href=\"https://www.buyersgohappy.com/\">https://www.buyersgohappy.com</a>):</strong></p><p>BuyersGoHappy.com is an e-commerce platform of BuyersGoHappy Marketing Private Limited, designed to enhance your shopping experience. At BuyersGoHappy.com, you find a comprehensive list of e-commerce websites, latest coupons, deals, offers and on top of that, you earn cashback every time you shop through us. That&#39;s why we call ourselves your online piggy bank. We understand your needs and bring to you a plethora of websites to choose from. We have tailored our services in 14 categories including fashion, household, travel, sports &amp; fitness, home, living &amp; furniture, personal care, baby &amp; kids, etc.</p><p><strong>About the Internship:</strong></p><p><strong>Selected intern&#39;s day-to-day responsibilities include:</strong>&nbsp;<br /><br />1. Work on technologies including HTML, PHP, MySQL, and CSS<br />2. Develop, host and manage web resources<br />3. Create pages that appeal to the taste of the sites&#39; users<br />4. Stay plugged into emerging technologies/industry trends and apply them to operations and activities<br />5. Improve and maintain the design of existing website<br />6. Work on new product features for both existing and new users<br />7. Test site functionality, identify problems or bugs and fix errors</p><p># of Internships available:&nbsp;3</p><p>Skill(s) required:&nbsp;PHP (<a target=\"_blank\" href=\"https://trainings.internshala.com/web-development?utm_source=internshala_details_page_skills_section\">Learn PHP</a>), HTML (<a target=\"_blank\" href=\"https://trainings.internshala.com/web-development?utm_source=internshala_details_page_skills_section\">Learn HTML</a>), JavaScript, jQuery and SQL</p><p><strong>Who can apply:</strong></p><p><strong>Only those candidates can apply who:</strong></p><ol><li><p>are available for work from home internship</p></li><li><p>can start the internship between 21st May&#39;18 and 20th Jun&#39;18</p></li><li><p>are available for duration of 2 months</p></li><li><p>have relevant skills and interests</p></li></ol><p><strong>Perks:</strong></p><p>Certificate, Letter of recommendation, Flexible work hours.</p>'),
(24, 7, 'Web Development', 'work from home', '3', '2000', '2018-05-23', '2018-05-29', 'immidiately', '<p><strong>About Sanatan Digitizers Private Limited (<a target=\"_blank\" href=\"http://www.sanatandigitizers.com/\">http://www.sanatandigitizers.com</a>):</strong></p><p>Sanatan Digitizers Private Limited is a company that provides IT services &amp; solutions like software &amp; application development, website design &amp; development, custom software development in Guwahati, Assam. We believe in delivering results, we make sure that you own a product exactly the same you are looking for. We take every project as a unique &amp; important assignment.</p><p><strong>About the Internship:</strong></p><p>Selected intern&#39;s day-to-day responsibilities include:<br /><br />1. Work with material design and design great looking UI following material design principles<br />2. Work on GitHub/Bitbucket<br />3. Work with Android services and notifications<br />4. Design and develop features on the app to promote user acquisition, retention, and satisfaction<br />5. Understand the existing Android codebase and work on it</p><p># of Internships available:&nbsp;10</p><p><strong>Skill(s) required:&nbsp;Java (<a target=\"_blank\" href=\"https://trainings.internshala.com/java?utm_source=internshala_details_page_skills_section\">Learn Java</a>), PHP (<a target=\"_blank\" href=\"https://trainings.internshala.com/web-development?utm_source=internshala_details_page_skills_section\">Learn PHP</a>), MySQL, User Interface (UI) Development, UI &amp; UX Design, JSON, SQLite, REST API and Android (<a target=\"_blank\" href=\"https://trainings.internshala.com/android?utm_source=internshala_details_page_skills_section\">Learn Android</a>)</strong></p><p><strong>Who can apply:</strong></p><p><strong>Only those candidates can apply who:</strong></p><ol><li><p>are available for work from home internship</p></li><li><p>can start the internship between 20th May&#39;18 and 19th Jun&#39;18</p></li><li><p>are available for duration of 2 months</p></li><li><p>have relevant skills and interests</p></li></ol><p>** Women willing to start/restart their career can also apply.</p><p><strong>Perks:</strong></p><p>Certificate, Letter of recommendation, Flexible work hours.</p>'),
(25, 5, 'Machine Learning', 'agra', '2', '6000', '2018-05-23', '2018-06-04', 'immidiately', '<p>About Srimayi Innovations Private Limited (<a target=\"_blank\" href=\"https://vihik.com/\">https://vihik.com/</a>):</p><p>Srimayi Innovations Private Limited is the first company to innovate cab market industry and self-driven car rentals. We are a technology-focused company that is taking giant leaps in making transportation sustainable and accessible.</p><p>About the Internship:</p><p>Selected intern&#39;s day-to-day responsibilities include:&nbsp;<br />1.Will be working in Java,Spring,Hibernate and learn J2EE.<br />2.Will be writing SQL queries and learning SQL.<br />3.Will be deploying code on AWS server and learn AWS.</p><p># of Internships available:&nbsp;1</p><p>Skill(s) required:&nbsp;Java (<a target=\"_blank\" href=\"https://trainings.internshala.com/java?utm_source=internshala_details_page_skills_section\">Learn Java</a>), MySQL, J2EE, Hibernate (Java) and Spring MVC</p><p>Who can apply:</p><p>Only those candidates can apply who:</p><ol><li><p>are available for work from home internship</p></li><li><p>can start the internship between 21st May&#39;18 and 20th Jun&#39;18</p></li><li><p>are available for duration of 3 months</p></li><li><p>have relevant skills and interests</p></li></ol><p>** Women willing to start/restart their career can also apply.</p><p>Perks:</p><p>Certificate.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `email`, `password`) VALUES
(4, 'Rachit agrawal', 'rachit@gmail.com', '$2y$10$Q8hvnxInetUuFFl0d0znRe5TKITGXJHnTnF0nq9Ij1sDXusI9X2lC'),
(5, 'isha', 'ishika@gmail.com', '$2y$10$y7Fq6hKYgyKnzRZj7.vS.eJEHPc4KJxUJfOLZzEKSrzDhXDbtSRDe'),
(7, 'ishika', 'ishi@gmail.com', '$2y$10$JqxPrXN4gaH7J2D5o7OFfOduhKxrVdzhzxW8tFwrqzqr0Iuoo44qS'),
(8, 'aditi', 'aditi@gmail.com', '$2y$10$hop6kTjGit64ERy3POXUdOqpDbYQB9g6zqUwdnpmmb02/6j6.ZE6W'),
(9, 'divya', 'divya@gmail.com', '$2y$10$Y6G6PgUfDdtpwUIHaBi9vuyDCRvlZuMpGBfsRYjvAtZ/C6PgPru4e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_internship`
--
ALTER TABLE `apply_internship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_login`
--
ALTER TABLE `employer_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_internship`
--
ALTER TABLE `apply_internship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `employer_login`
--
ALTER TABLE `employer_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
