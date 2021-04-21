--
-- Database: `business_service`
--

CREATE DATABASE IF NOT EXISTS `business_service`;

-- --------------------------------------------------------

USE `business_service`;

--
-- Table structure for table `biz_categories`
--

CREATE TABLE `biz_categories` (
  `business_id` int(6) UNSIGNED NOT NULL,
  `category_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
);


-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `business_id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
);

--
-- Indexes for table `biz_categories`
--
ALTER TABLE `biz_categories`
  ADD PRIMARY KEY (`business_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`business_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- AUTO_INCREMENT for table `biz_categories`
--
ALTER TABLE `biz_categories`
  MODIFY `business_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `business_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for table `biz_categories`
--
ALTER TABLE `biz_categories`
  ADD CONSTRAINT `biz_categories_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `biz_categories_ibfk_3` FOREIGN KEY (`business_id`) REFERENCES `businesses` (`business_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

