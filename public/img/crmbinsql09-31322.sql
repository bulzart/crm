-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2021 at 03:28 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` int(11) NOT NULL DEFAULT '0',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `online` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`, `role`, `pin`, `confirmed`, `online`, `remember_token`) VALUES
(1, 'Bulzart', 'bulzarti@gmail.com', NULL, '$2y$10$/zrkqp456yzkwFkJ2atsjOi5ypfrC5J6hgO.0.HVlx6WCUpqCFHZi', '2021-11-25 11:42:43', '2021-12-15 12:47:01', 'admin', 4696, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'instagram', NULL, NULL),
(2, 'facebook', NULL, NULL),
(5, 'google', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `costumer_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `chat` json DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `costumer_id`, `admin_id`, `chat`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 'Nice', '2021-12-01 10:22:38', '2021-12-01 10:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `csapp`
--

CREATE TABLE `csapp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_id` int(11) NOT NULL,
  `family` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed` tinyint(1) DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'in progress',
  `data` json DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `csapp`
--

INSERT INTO `csapp` (`id`, `name`, `lead_id`, `family`, `created_at`, `updated_at`, `lname`, `birthday`, `completed`, `status`, `data`) VALUES
(5, 'bulzart', 1, '[{\"fname\": \"bulzart\", \"lname\": \"aliu\", \"birthday\": \"2021-12-21\"}, {\"fname\": \"aswqewq\", \"lname\": \"aqwqwe\", \"birthday\": \"2021-12-08\"}, {\"fname\": \"basss\", \"lname\": \"ewqe\", \"birthday\": \"2021-12-21\"}]', '2021-12-06 15:10:29', '2021-12-15 12:50:26', 'aliu', '1974-12-13', 0, 'in progress', '{\"job\": null, \"email\": \"albeniti@gmail.com\", \"phone\": \"44\", \"_token\": \"HXh0QcKPtTA1XAyUkMT5fmf0DFdRpVhwAcWCEqsm\", \"kanton\": \"Zürich\", \"lenker\": \"Yes\", \"comment\": null, \"kmstand\": null, \"society\": null, \"insurance\": \"300\", \"carcomment\": null, \"preinsurer\": \"img/Screenshot_1pngpng13-50685.png\", \"leasingname\": null, \"nationality\": null, \"yearpurchase\": \"2021\", \"deductionpart\": \"1000\", \"martialstatus\": \"Married\", \"numberofrooms\": \"1\", \"paymentrhythm\": \"Weekly\", \"thingscarried\": null, \"amountpermonth\": null, \"numberofpeople\": \"1\", \"startinsurance\": null, \"commentatpolice\": null, \"insuranceamount\": null, \"residencepermit\": null, \"contractstartdate\": null, \"firstcommissioning\": null, \"nationalityfinance\": null, \"employmentrelationship\": \"Coworkers\", \"wishedadditionalthings\": null, \"numberofpeopleinsurance\": \"1\", \"dateofissueofdriverslicense\": null, \"whichcompaniesshouldmakeanoffer\": null}'),
(6, 'albenit', 1, NULL, '2021-12-07 11:18:49', '2021-12-13 15:49:29', NULL, '1974-12-09', 0, 'in progress', '{\"job\": null, \"email\": null, \"phone\": \"44\", \"_token\": \"vi7OBDGLTlF9DOPUv2eovCo2ojYf7UGM7LFmw0pK\", \"kanton\": \"Zürich\", \"lenker\": \"Yes\", \"comment\": null, \"kmstand\": null, \"society\": null, \"insurance\": \"300\", \"carcomment\": null, \"preinsurer\": \"img/logopngpng16-49429.png\", \"leasingname\": null, \"nationality\": null, \"yearpurchase\": \"2021\", \"deductionpart\": \"1000\", \"martialstatus\": \"Married\", \"numberofrooms\": \"1\", \"paymentrhythm\": \"Weekly\", \"thingscarried\": null, \"amountpermonth\": null, \"numberofpeople\": \"1\", \"startinsurance\": null, \"commentatpolice\": null, \"insuranceamount\": null, \"residencepermit\": null, \"contractstartdate\": null, \"firstcommissioning\": null, \"nationalityfinance\": null, \"employmentrelationship\": \"Coworkers\", \"wishedadditionalthings\": null, \"numberofpeopleinsurance\": \"1\", \"dateofissueofdriverslicense\": null, \"whichcompaniesshouldmakeanoffer\": null}'),
(7, 'jasin', 1, NULL, '2021-12-10 11:59:05', '2021-12-10 11:59:05', 'qweqwe', '1974-12-09', 0, 'in progress', '{\"job\": null, \"email\": null, \"_token\": \"wSHH5fgWWxtiKRw7grnKP4QRphZ98Odt8IVk0lQG\", \"kanton\": \"Zürich\", \"lenker\": \"Yes\", \"comment\": null, \"kmstand\": null, \"society\": null, \"insurance\": \"Example1\", \"carcomment\": null, \"preinsurer\": {}, \"countryCode\": \"44\", \"leasingname\": null, \"nationality\": null, \"phonenumber\": null, \"yearpurchase\": \"2021\", \"deductionpart\": null, \"martialstatus\": \"Married\", \"numberofrooms\": \"1\", \"paymentrhythm\": \"Weekly\", \"thingscarried\": null, \"amountpermonth\": null, \"numberofpeople\": \"1\", \"startinsurance\": null, \"commentatpolice\": null, \"insuranceamount\": null, \"residencepermit\": null, \"contractstartdate\": null, \"firstcommissioning\": null, \"nationalityfinance\": null, \"employmentrelationship\": \"Coworkers\", \"wishedadditionalthings\": null, \"numberofpeopleinsurance\": \"1\", \"dateofissueofdriverslicense\": null, \"whichcompaniesshouldmakeanoffer\": null}'),
(8, 'bleron', 1, NULL, '2021-12-10 12:00:19', '2021-12-10 12:00:19', 'qweqwe', '1974-12-09', 0, 'in progress', '{\"job\": null, \"email\": null, \"_token\": \"wSHH5fgWWxtiKRw7grnKP4QRphZ98Odt8IVk0lQG\", \"kanton\": \"Zürich\", \"lenker\": \"Yes\", \"comment\": null, \"kmstand\": null, \"society\": null, \"insurance\": \"Example1\", \"carcomment\": null, \"preinsurer\": {}, \"countryCode\": \"44\", \"leasingname\": null, \"nationality\": null, \"phonenumber\": null, \"yearpurchase\": \"2021\", \"deductionpart\": null, \"martialstatus\": \"Married\", \"numberofrooms\": \"1\", \"paymentrhythm\": \"Weekly\", \"thingscarried\": null, \"amountpermonth\": null, \"numberofpeople\": \"1\", \"startinsurance\": null, \"commentatpolice\": null, \"insuranceamount\": null, \"residencepermit\": null, \"contractstartdate\": null, \"firstcommissioning\": null, \"nationalityfinance\": null, \"employmentrelationship\": \"Coworkers\", \"wishedadditionalthings\": null, \"numberofpeopleinsurance\": \"1\", \"dateofissueofdriverslicense\": null, \"whichcompaniesshouldmakeanoffer\": null}'),
(9, 'aslkqlwe', 1, NULL, '2021-12-10 12:01:49', '2021-12-10 12:01:49', 'qweqwe', '1974-12-09', 0, 'in progress', '{\"job\": null, \"email\": null, \"_token\": \"wSHH5fgWWxtiKRw7grnKP4QRphZ98Odt8IVk0lQG\", \"kanton\": \"Zürich\", \"lenker\": \"Yes\", \"comment\": null, \"kmstand\": null, \"society\": null, \"insurance\": \"Example1\", \"carcomment\": null, \"preinsurer\": {}, \"countryCode\": \"44\", \"leasingname\": null, \"nationality\": null, \"phonenumber\": null, \"yearpurchase\": \"2021\", \"deductionpart\": null, \"martialstatus\": \"Married\", \"numberofrooms\": \"1\", \"paymentrhythm\": \"Weekly\", \"thingscarried\": null, \"amountpermonth\": null, \"numberofpeople\": \"1\", \"startinsurance\": null, \"commentatpolice\": null, \"insuranceamount\": null, \"residencepermit\": null, \"contractstartdate\": null, \"firstcommissioning\": null, \"nationalityfinance\": null, \"employmentrelationship\": \"Coworkers\", \"wishedadditionalthings\": null, \"numberofpeopleinsurance\": \"1\", \"dateofissueofdriverslicense\": null, \"whichcompaniesshouldmakeanoffer\": null}'),
(10, 'art', 1, NULL, '2021-12-10 12:07:11', '2021-12-10 12:07:11', 'qweqwe', '1974-12-09', 0, 'in progress', '{\"job\": null, \"email\": null, \"_token\": \"wSHH5fgWWxtiKRw7grnKP4QRphZ98Odt8IVk0lQG\", \"kanton\": \"Zürich\", \"lenker\": \"Yes\", \"comment\": null, \"kmstand\": null, \"society\": null, \"insurance\": \"Example1\", \"carcomment\": null, \"preinsurer\": {}, \"countryCode\": \"44\", \"leasingname\": null, \"nationality\": null, \"phonenumber\": null, \"yearpurchase\": \"2021\", \"deductionpart\": null, \"martialstatus\": \"Married\", \"numberofrooms\": \"1\", \"paymentrhythm\": \"Weekly\", \"thingscarried\": null, \"amountpermonth\": null, \"numberofpeople\": \"1\", \"startinsurance\": null, \"commentatpolice\": null, \"insuranceamount\": null, \"residencepermit\": null, \"contractstartdate\": null, \"firstcommissioning\": null, \"nationalityfinance\": null, \"employmentrelationship\": \"Coworkers\", \"wishedadditionalthings\": null, \"numberofpeopleinsurance\": \"1\", \"dateofissueofdriverslicense\": null, \"whichcompaniesshouldmakeanoffer\": null}'),
(11, 'bulzart', 1, NULL, '2021-12-10 12:11:05', '2021-12-10 12:11:05', 'qweqwe', '1974-12-09', 0, 'in progress', '{\"job\": null, \"email\": null, \"_token\": \"wSHH5fgWWxtiKRw7grnKP4QRphZ98Odt8IVk0lQG\", \"kanton\": \"Zürich\", \"lenker\": \"Yes\", \"comment\": null, \"kmstand\": null, \"society\": null, \"insurance\": \"Example1\", \"carcomment\": null, \"preinsurer\": {}, \"countryCode\": \"44\", \"leasingname\": null, \"nationality\": null, \"phonenumber\": null, \"yearpurchase\": \"2021\", \"deductionpart\": null, \"martialstatus\": \"Married\", \"numberofrooms\": \"1\", \"paymentrhythm\": \"Weekly\", \"thingscarried\": null, \"amountpermonth\": null, \"numberofpeople\": \"1\", \"startinsurance\": null, \"commentatpolice\": null, \"insuranceamount\": null, \"residencepermit\": null, \"contractstartdate\": null, \"firstcommissioning\": null, \"nationalityfinance\": null, \"employmentrelationship\": \"Coworkers\", \"wishedadditionalthings\": null, \"numberofpeopleinsurance\": \"1\", \"dateofissueofdriverslicense\": null, \"whichcompaniesshouldmakeanoffer\": null}'),
(12, 'aslkqlwe', 1, NULL, '2021-12-10 12:11:53', '2021-12-10 12:11:53', 'qweqwe', '1974-12-09', 0, 'in progress', '{\"job\": null, \"email\": null, \"_token\": \"wSHH5fgWWxtiKRw7grnKP4QRphZ98Odt8IVk0lQG\", \"kanton\": \"Zürich\", \"lenker\": \"Yes\", \"comment\": null, \"kmstand\": null, \"society\": null, \"insurance\": \"Example1\", \"carcomment\": null, \"preinsurer\": {}, \"countryCode\": \"44\", \"leasingname\": null, \"nationality\": null, \"phonenumber\": null, \"yearpurchase\": \"2021\", \"deductionpart\": null, \"martialstatus\": \"Married\", \"numberofrooms\": \"1\", \"paymentrhythm\": \"Weekly\", \"thingscarried\": null, \"amountpermonth\": null, \"numberofpeople\": \"1\", \"startinsurance\": null, \"commentatpolice\": null, \"insuranceamount\": null, \"residencepermit\": null, \"contractstartdate\": null, \"firstcommissioning\": null, \"nationalityfinance\": null, \"employmentrelationship\": \"Coworkers\", \"wishedadditionalthings\": null, \"numberofpeopleinsurance\": \"1\", \"dateofissueofdriverslicense\": null, \"whichcompaniesshouldmakeanoffer\": null}'),
(13, 'aslkqlwe', 1, NULL, '2021-12-10 12:18:18', '2021-12-10 12:18:18', 'qweqwe', '1974-12-09', 0, 'in progress', '{\"job\": null, \"email\": null, \"_token\": \"wSHH5fgWWxtiKRw7grnKP4QRphZ98Odt8IVk0lQG\", \"kanton\": \"Zürich\", \"lenker\": \"Yes\", \"comment\": null, \"kmstand\": null, \"society\": null, \"insurance\": \"Example1\", \"carcomment\": null, \"preinsurer\": {}, \"countryCode\": \"44\", \"leasingname\": null, \"nationality\": null, \"phonenumber\": null, \"yearpurchase\": \"2021\", \"deductionpart\": null, \"martialstatus\": \"Married\", \"numberofrooms\": \"1\", \"paymentrhythm\": \"Weekly\", \"thingscarried\": null, \"amountpermonth\": null, \"numberofpeople\": \"1\", \"startinsurance\": null, \"commentatpolice\": null, \"insuranceamount\": null, \"residencepermit\": null, \"contractstartdate\": null, \"firstcommissioning\": null, \"nationalityfinance\": null, \"employmentrelationship\": \"Coworkers\", \"wishedadditionalthings\": null, \"numberofpeopleinsurance\": \"1\", \"dateofissueofdriverslicense\": null, \"whichcompaniesshouldmakeanoffer\": null}'),
(14, 'aslkqlwe', 1, NULL, '2021-12-10 12:18:31', '2021-12-10 12:18:31', 'qweqwe', '1974-12-09', 0, 'in progress', '{\"job\": null, \"email\": null, \"_token\": \"wSHH5fgWWxtiKRw7grnKP4QRphZ98Odt8IVk0lQG\", \"kanton\": \"Zürich\", \"lenker\": \"Yes\", \"comment\": null, \"kmstand\": null, \"society\": null, \"insurance\": \"Example1\", \"carcomment\": null, \"preinsurer\": {}, \"countryCode\": \"44\", \"leasingname\": null, \"nationality\": null, \"phonenumber\": null, \"yearpurchase\": \"2021\", \"deductionpart\": null, \"martialstatus\": \"Married\", \"numberofrooms\": \"1\", \"paymentrhythm\": \"Weekly\", \"thingscarried\": null, \"amountpermonth\": null, \"numberofpeople\": \"1\", \"startinsurance\": null, \"commentatpolice\": null, \"insuranceamount\": null, \"residencepermit\": null, \"contractstartdate\": null, \"firstcommissioning\": null, \"nationalityfinance\": null, \"employmentrelationship\": \"Coworkers\", \"wishedadditionalthings\": null, \"numberofpeopleinsurance\": \"1\", \"dateofissueofdriverslicense\": null, \"whichcompaniesshouldmakeanoffer\": null}'),
(15, 'aslkqlwe', 1, NULL, '2021-12-10 12:22:23', '2021-12-10 12:22:23', 'qweqwe', '1974-12-09', 0, 'in progress', '{\"job\": null, \"email\": null, \"_token\": \"wSHH5fgWWxtiKRw7grnKP4QRphZ98Odt8IVk0lQG\", \"kanton\": \"Zürich\", \"lenker\": \"Yes\", \"comment\": null, \"kmstand\": null, \"society\": null, \"insurance\": \"Example1\", \"carcomment\": null, \"preinsurer\": {}, \"countryCode\": \"44\", \"leasingname\": null, \"nationality\": null, \"phonenumber\": null, \"yearpurchase\": \"2021\", \"deductionpart\": null, \"martialstatus\": \"Married\", \"numberofrooms\": \"1\", \"paymentrhythm\": \"Weekly\", \"thingscarried\": null, \"amountpermonth\": null, \"numberofpeople\": \"1\", \"startinsurance\": null, \"commentatpolice\": null, \"insuranceamount\": null, \"residencepermit\": null, \"contractstartdate\": null, \"firstcommissioning\": null, \"nationalityfinance\": null, \"employmentrelationship\": \"Coworkers\", \"wishedadditionalthings\": null, \"numberofpeopleinsurance\": \"1\", \"dateofissueofdriverslicense\": null, \"whichcompaniesshouldmakeanoffer\": null}'),
(16, 'aslkqlwe', 1, NULL, '2021-12-10 12:27:57', '2021-12-10 12:27:57', 'qweqwe', '1974-12-09', 0, 'in progress', '{\"job\": null, \"email\": null, \"_token\": \"wSHH5fgWWxtiKRw7grnKP4QRphZ98Odt8IVk0lQG\", \"kanton\": \"Zürich\", \"lenker\": \"Yes\", \"comment\": null, \"kmstand\": null, \"society\": null, \"insurance\": \"Example1\", \"carcomment\": null, \"preinsurer\": {}, \"countryCode\": \"44\", \"leasingname\": null, \"nationality\": null, \"phonenumber\": null, \"yearpurchase\": \"2021\", \"deductionpart\": null, \"martialstatus\": \"Married\", \"numberofrooms\": \"1\", \"paymentrhythm\": \"Weekly\", \"thingscarried\": null, \"amountpermonth\": null, \"numberofpeople\": \"1\", \"startinsurance\": null, \"commentatpolice\": null, \"insuranceamount\": null, \"residencepermit\": null, \"contractstartdate\": null, \"firstcommissioning\": null, \"nationalityfinance\": null, \"employmentrelationship\": \"Coworkers\", \"wishedadditionalthings\": null, \"numberofpeopleinsurance\": \"1\", \"dateofissueofdriverslicense\": null, \"whichcompaniesshouldmakeanoffer\": null}'),
(17, 'aslkqlwe', 1, NULL, '2021-12-10 12:29:10', '2021-12-10 12:29:10', 'qweqwe', '1974-12-09', 0, 'in progress', '{\"job\": null, \"email\": null, \"_token\": \"wSHH5fgWWxtiKRw7grnKP4QRphZ98Odt8IVk0lQG\", \"kanton\": \"Zürich\", \"lenker\": \"Yes\", \"comment\": null, \"kmstand\": null, \"society\": null, \"insurance\": \"Example1\", \"carcomment\": null, \"preinsurer\": {}, \"countryCode\": \"44\", \"leasingname\": null, \"nationality\": null, \"phonenumber\": null, \"yearpurchase\": \"2021\", \"deductionpart\": null, \"martialstatus\": \"Married\", \"numberofrooms\": \"1\", \"paymentrhythm\": \"Weekly\", \"thingscarried\": null, \"amountpermonth\": null, \"numberofpeople\": \"1\", \"startinsurance\": null, \"commentatpolice\": null, \"insuranceamount\": null, \"residencepermit\": null, \"contractstartdate\": null, \"firstcommissioning\": null, \"nationalityfinance\": null, \"employmentrelationship\": \"Coworkers\", \"wishedadditionalthings\": null, \"numberofpeopleinsurance\": \"1\", \"dateofissueofdriverslicense\": null, \"whichcompaniesshouldmakeanoffer\": null}'),
(18, 'aslkqlwe', 1, NULL, '2021-12-10 12:41:34', '2021-12-10 12:41:34', 'qweqwe', '1974-12-09', 0, 'in progress', '{\"job\": null, \"email\": null, \"_token\": \"wSHH5fgWWxtiKRw7grnKP4QRphZ98Odt8IVk0lQG\", \"kanton\": \"Zürich\", \"lenker\": \"Yes\", \"comment\": null, \"kmstand\": null, \"society\": null, \"insurance\": \"Example1\", \"carcomment\": null, \"preinsurer\": {}, \"countryCode\": \"44\", \"leasingname\": null, \"nationality\": null, \"phonenumber\": null, \"yearpurchase\": \"2021\", \"deductionpart\": null, \"martialstatus\": \"Married\", \"numberofrooms\": \"1\", \"paymentrhythm\": \"Weekly\", \"thingscarried\": null, \"amountpermonth\": null, \"numberofpeople\": \"1\", \"startinsurance\": null, \"commentatpolice\": null, \"insuranceamount\": null, \"residencepermit\": null, \"contractstartdate\": null, \"firstcommissioning\": null, \"nationalityfinance\": null, \"employmentrelationship\": \"Coworkers\", \"wishedadditionalthings\": null, \"numberofpeopleinsurance\": \"1\", \"dateofissueofdriverslicense\": null, \"whichcompaniesshouldmakeanoffer\": null}'),
(19, 'kasl', 1, '[{\"fname\": \"qweqw\", \"lname\": \"wqeqwe\", \"birthday\": \"2021-12-16\"}, {\"fname\": \"wqewqe\", \"lname\": \"qweqwe\", \"birthday\": \"2021-12-16\"}, {\"fname\": \"qweqwe\", \"lname\": \"wqewqe\", \"birthday\": \"2021-12-09\"}]', '2021-12-10 15:56:36', '2021-12-10 15:56:36', 'qwewq', '2021-12-02', 0, 'in progress', NULL),
(20, 'buli', 1, NULL, NULL, NULL, 'aliu', '2000-08-26', 0, 'in progress', NULL),
(21, 'buli', 1, NULL, NULL, NULL, 'aliu', '2000-08-26', 0, 'in progress', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `campaign_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `assigned` tinyint(1) NOT NULL DEFAULT '0',
  `completed` int(11) NOT NULL DEFAULT '0',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advisor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telprivat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointmentdate` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wantsonline` tinyint(1) NOT NULL DEFAULT '0',
  `app` tinyint(1) DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `name`, `count`, `created_at`, `updated_at`, `campaign_id`, `admin_id`, `assigned`, `completed`, `address`, `advisor`, `day`, `language`, `nationality`, `postcode`, `location`, `telprivat`, `appointmentdate`, `lname`, `wantsonline`, `app`, `time`, `slug`) VALUES
(1, 'Adrienne', 4, '2021-11-27 14:23:49', '2021-11-29 14:24:08', 5, 1, 1, 1, 'Kuvendi i Ferizajt', NULL, NULL, NULL, NULL, NULL, 'ferizaj', NULL, '2021-12-13', 'Funk', 0, NULL, '18:43', 'adrienne-4'),
(4, 'Cristoba', 9, '2021-11-27 14:23:49', '2021-11-29 14:24:13', 5, 1, 1, 0, 'Vellezerit Gervala', NULL, NULL, NULL, NULL, NULL, 'ferizaj', NULL, '2021-12-13', 'Dooley', 0, NULL, '16:44', 'cristoba-5'),
(5, 'Violet Runte', 10, '2021-11-27 14:23:49', '2021-12-13 10:26:15', 5, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-13', '', 0, NULL, '14:26', ''),
(6, 'Kenny Armstrong Sr.', 8, '2021-11-27 14:23:49', '2021-11-27 14:23:49', 1, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-13', '', 1, NULL, NULL, ''),
(7, 'Zula Reichert', 10, '2021-11-27 14:23:49', '2021-11-27 14:23:49', 1, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 1, NULL, NULL, ''),
(8, 'Laila Hayes', 2, '2021-11-27 14:23:49', '2021-11-27 14:23:49', 1, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 1, NULL, NULL, ''),
(9, 'Bulzart', 4, '2021-11-30 13:27:20', '2021-11-30 13:27:20', 2, 1, 0, 0, 'Kuvendi i Ferizajt', NULL, '2', NULL, 'Kosovo', 70000, 'Ferizaj', '045917726', NULL, 'Aliu', 0, NULL, NULL, ''),
(10, 'Bulzart', 3, '2021-11-30 13:35:52', '2021-12-13 10:28:54', 2, 1, 1, 0, 'vllezerit gervalla', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '048266616', '2021-12-13', 'Aliu', 0, NULL, '16:28', ''),
(11, 'Bulzart', 3, '2021-11-30 13:36:43', '2021-11-30 13:36:43', 2, 1, 0, 0, 'vllezerit gervalla', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '048266616', NULL, 'Aliu', 0, NULL, NULL, ''),
(12, 'Bulzart', 3, '2021-11-30 13:36:57', '2021-11-30 13:36:57', 2, NULL, 0, 0, 'vllezerit gervalla', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '048266616', NULL, 'Aliu', 0, NULL, NULL, ''),
(13, 'Bulzart', 3, '2021-11-30 13:37:19', '2021-11-30 13:37:19', 2, NULL, 0, 0, 'vllezerit gervalla', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '048266616', NULL, 'Aliu', 0, NULL, NULL, ''),
(14, 'Bulzart', 3, '2021-11-30 13:38:18', '2021-11-30 13:38:18', 2, NULL, 0, 0, 'vllezerit gervalla', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '048266616', NULL, 'Aliu', 0, NULL, NULL, ''),
(15, 'Bulzart', 3, '2021-11-30 13:38:44', '2021-11-30 13:38:44', 2, NULL, 0, 0, 'vllezerit gervalla', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '048266616', NULL, 'Aliu', 0, NULL, NULL, ''),
(16, 'Bulzart', 3, '2021-11-30 13:39:16', '2021-11-30 13:39:16', 2, NULL, 0, 0, 'vllezerit gervalla', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '048266616', NULL, 'Aliu', 0, NULL, NULL, ''),
(17, 'Bulzart', 3, '2021-11-30 13:39:46', '2021-11-30 13:39:46', 2, NULL, 0, 0, 'vllezerit gervalla', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '048266616', NULL, 'Aliu', 0, NULL, NULL, ''),
(18, 'Bulzart', 3, '2021-11-30 13:52:17', '2021-11-30 13:52:17', 2, NULL, 0, 0, 'Kuvendi i Ferizajt', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '045405629', NULL, 'Aliu', 0, NULL, NULL, ''),
(19, 'Bulzart', 3, '2021-11-30 13:53:01', '2021-11-30 13:53:01', 2, NULL, 0, 0, 'qwewqewq', NULL, 'Tuesday', NULL, 'ferizaj', 72255, 'qwewqewq', '55465456', NULL, 'Aliu', 0, NULL, NULL, ''),
(20, 'Bulzart', 9, '2021-11-30 13:54:56', '2021-11-30 13:54:56', 2, NULL, 0, 0, 'fewqewq', NULL, 'Tuesday', NULL, 'qwqwwq', 51111, 'Ferizaj', '5454545', NULL, 'Aliu', 0, NULL, NULL, ''),
(21, 'Bulzart', 4, '2021-11-30 13:55:20', '2021-11-30 13:55:20', 2, NULL, 0, 0, 'vllezerit gervalla', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '55465456', NULL, 'Aliu', 0, NULL, NULL, ''),
(22, 'Bleron', 4, '2021-12-01 12:23:30', '2021-12-01 12:23:30', 0, NULL, 0, 0, 'FusheKosove', NULL, 'Wednesday', NULL, 'Kosove', 10000, 'Prishtine', '455444564', NULL, 'Maxhuani', 0, NULL, NULL, ''),
(23, 'Bleron', 4, '2021-12-01 12:32:55', '2021-12-01 12:32:55', 0, NULL, 0, 0, 'FusheKosove', NULL, 'Wednesday', NULL, 'Kosove', 10000, 'Prishtine', '455444564', NULL, 'Maxhuani', 0, NULL, NULL, ''),
(25, 'Jasin', 3, '2021-12-01 12:53:47', '2021-12-01 12:53:47', 0, 1, 1, 0, 'Rruga b mati 1', NULL, 'Wednesday', NULL, 'Kosovo', 10000, 'Prishtine', '45444444', '2021-12-04', 'Bilalli', 0, NULL, '17:00', 'jasin-bilalli'),
(26, 'Bulzart', 9, '2021-12-01 12:55:18', '2021-12-01 12:55:18', 0, NULL, 1, 0, 'vllezerit gervalla', NULL, 'Wednesday', NULL, 'Kosovo', 70000, 'Ferizaj', '55465456', NULL, 'Aliu', 1, NULL, NULL, ''),
(27, 'Bulzart', 5, '2021-12-01 13:29:34', '2021-12-01 13:29:34', 0, NULL, 1, 0, 'Kuvendi i Ferizajt', NULL, 'Wednesday', NULL, 'Kosovo', 70000, 'Ferizaj', '45917726', '', 'Aliu', 1, NULL, NULL, ''),
(28, 'Miranda Lindsay', 4, '2021-12-04 12:06:14', '2021-12-04 12:06:14', NULL, NULL, 1, 0, 'Aliqua Tenetur fugi', NULL, 'Saturday', NULL, 'Dolores tempore sed', 3000, 'Harum rem ea qui fug', '+1 (921) 327-1461', '1987-11-23', 'Chadwick Knapp', 1, NULL, NULL, ''),
(29, 'Lewis', 2, '2021-12-04 12:10:20', '2021-12-04 12:10:20', NULL, 1, 0, 0, 'Facilis quidem fugia', NULL, 'Saturday', NULL, 'Provident labore ex', 3000, 'Consectetur quis imp', '+1 (553) 412-3652', '2009-09-11', 'Farmer', 0, NULL, NULL, ''),
(30, 'Kelsey Rowland', 91, '2021-12-04 12:16:34', '2021-12-04 12:16:34', NULL, NULL, 1, 0, 'Aliquam elit libero', NULL, 'Saturday', NULL, 'Dolor vel sint nobi', 21, 'Et a enim nostrum no', '+1 (845) 597-4703', '1984-10-12', 'Judith Pennington', 1, NULL, NULL, ''),
(31, 'Kamal Vazquez', 72, '2021-12-04 12:18:13', '2021-12-04 12:18:13', NULL, NULL, 1, 0, 'Expedita ea sed occa', NULL, 'Saturday', NULL, 'Officia adipisicing', 60, 'Quia sint aliquam ci', '+1 (173) 517-1584', '1990-12-12', 'Angelica Allison', 1, NULL, NULL, ''),
(32, 'Kamal Vazquez', 72, '2021-12-04 12:18:53', '2021-12-04 12:18:53', NULL, NULL, 1, 0, 'Expedita ea sed occa', NULL, 'Saturday', NULL, 'Officia adipisicing', 60, 'Quia sint aliquam ci', '+1 (173) 517-1584', '1990-12-12', 'Angelica Allison', 1, NULL, NULL, ''),
(33, 'Georgia Collier', 72, '2021-12-08 10:58:35', '2021-12-08 10:58:35', NULL, 1, 0, 0, 'Explicabo Minima se', NULL, 'Wednesday', NULL, 'Ducimus expedita la', 16, 'Eos temporibus labo', '+1 (872) 973-7538', '1987-02-24', 'Kylie Sanchez', 0, NULL, NULL, 'georgia-collier-33'),
(34, 'Ivor Morales', 48, '2021-12-08 10:58:48', '2021-12-08 10:58:48', NULL, 1, 0, 0, 'Magna placeat ut re', NULL, 'Wednesday', NULL, 'Ad cupiditate sequi', 56, 'Sint reiciendis fug', '+1 (692) 259-4703', '1992-08-22', 'Oscar Espinoza', 0, NULL, NULL, 'ivor-morales-34'),
(35, '1111', 4, '2021-12-08 11:03:27', '2021-12-08 11:03:27', NULL, 1, 0, 0, 'koso', NULL, 'Wednesday', NULL, 'kosk', 75555, 'ksok', '12321123', '2021-12-16', '222222', 0, NULL, NULL, '1111-35'),
(36, 'kaaaaa', 2, '2021-12-08 11:06:38', '2021-12-08 11:06:38', NULL, 1, 0, 0, 'kakkakak', NULL, 'Wednesday', NULL, 'kaskkw', 54555, 'aswwqq', '545444', '2021-12-08', 'kaaaaaa', 0, NULL, NULL, 'kaaaaa-36'),
(37, 'Bulzart', 3, '2021-12-08 11:08:45', '2021-12-08 11:08:45', NULL, 1, 0, 0, 'vllezerit gervalla', NULL, 'Wednesday', NULL, 'Kosove', 70000, 'ferizaj', '55465456', '2021-12-23', 'Aliu', 0, NULL, NULL, NULL),
(38, 'Bulzart', 3, '2021-12-08 11:09:04', '2021-12-08 11:09:04', NULL, 1, 0, 0, 'vllezerit gervalla', NULL, 'Wednesday', NULL, 'Kosove', 70000, 'ferizaj', '55465456', '2021-12-23', 'Aliu', 0, NULL, NULL, NULL),
(39, 'Ainsley Aguilar', 36, '2021-12-08 11:09:37', '2021-12-08 11:09:37', NULL, NULL, 1, 0, 'Dolor non minima ea', NULL, 'Wednesday', NULL, 'Maiores dicta ad ali', 4, 'Molestias cupidatat', '+1 (263) 377-4613', '1998-11-24', 'Isadora Floyd', 1, NULL, NULL, NULL),
(40, 'Rebecca Bradshaw', 14, '2021-12-08 11:10:53', '2021-12-08 11:10:53', NULL, NULL, 1, 0, 'Quidem repellendus', NULL, 'Wednesday', NULL, 'Quaerat nisi et nihi', 45, 'Rem voluptatem liber', '+1 (634) 125-4582', '2004-08-01', 'Ulysses Maynard', 1, NULL, NULL, 'rebecca-bradshaw-40'),
(41, 'Troy Tyson', 53, '2021-12-08 11:11:28', '2021-12-08 11:11:28', NULL, 1, 0, 0, 'Veritatis voluptates', NULL, 'Wednesday', NULL, 'Ut doloribus fugiat', 33, 'Nisi eveniet deseru', '+1 (411) 349-1228', '2010-09-17', 'Ila Reynolds', 0, NULL, NULL, 'troy-tyson-41'),
(42, 'Ulric Campos', 47, '2021-12-08 11:15:14', '2021-12-08 11:15:14', NULL, 1, 0, 0, 'Voluptatem amet iru', NULL, 'Wednesday', NULL, 'Voluptas omnis ut om', 32, 'Esse natus non eu n', '+1 (347) 907-7373', '1991-12-09', 'Christopher Conner', 0, NULL, NULL, NULL),
(43, 'Jade Alexander', 34, '2021-12-08 11:16:16', '2021-12-08 11:16:16', NULL, 1, 0, 0, 'Consequatur blanditi', NULL, 'Wednesday', NULL, 'Illo est velit imped', 49, 'Alias magni aspernat', '+1 (221) 835-2924', '2016-06-26', 'Kiona Banks', 0, NULL, NULL, 'jade-alexander43'),
(44, 'Jade Alexander', 34, '2021-12-08 11:24:16', '2021-12-08 11:24:16', NULL, 1, 0, 0, 'Consequatur blanditi', NULL, 'Wednesday', NULL, 'Illo est velit imped', 49, 'Alias magni aspernat', '+1 (221) 835-2924', '2016-06-26', 'Kiona Banks', 0, NULL, NULL, NULL),
(45, 'Zeph Pearson', 75, '2021-12-08 11:24:36', '2021-12-08 11:24:36', NULL, 1, 0, 0, 'Exercitation tempor', NULL, 'Wednesday', NULL, 'Ullamco esse vitae', 28, 'Voluptas delectus t', '+1 (438) 671-8827', '2012-01-02', 'Tyrone Gilliam', 0, NULL, NULL, NULL),
(46, 'Anjolie Donovan', 77, '2021-12-08 11:25:56', '2021-12-08 11:25:56', NULL, NULL, 1, 0, 'Dolor perspiciatis', NULL, 'Wednesday', NULL, 'Minus est sequi sit', 52, 'Duis laboriosam iru', '+1 (937) 953-2615', '2009-02-28', 'Katell Vinson', 1, NULL, NULL, NULL),
(47, 'Adrienne Vazquez', 48, '2021-12-08 11:27:25', '2021-12-08 11:27:25', NULL, NULL, 1, 0, 'Aspernatur eum dolor', NULL, 'Wednesday', NULL, 'Fugit nostrud duis', 27, 'Ex est accusantium', '+1 (853) 476-9136', '1993-09-11', 'Martin Bird', 1, NULL, NULL, NULL),
(48, 'Adrienne Franks', 13, '2021-12-08 11:27:45', '2021-12-08 11:27:45', NULL, 1, 0, 0, 'Quas dolores placeat', NULL, 'Wednesday', NULL, 'Accusamus repellendu', 43, 'Officiis facilis dui', '+1 (276) 111-1639', '1984-01-20', 'Thor Bray', 0, NULL, NULL, NULL),
(49, 'Theodore Vega', 3, '2021-12-08 11:28:50', '2021-12-08 11:28:50', NULL, 1, 0, 0, 'Sequi voluptatibus r', NULL, 'Wednesday', NULL, 'Illo nostrum reprehe', 6, 'Sed est nulla magni', '+1 (168) 831-4496', '2020-08-09', 'Amber Lynn', 0, NULL, NULL, NULL),
(50, 'Jasmine Rodriquez', 38, '2021-12-08 11:29:21', '2021-12-08 11:29:21', NULL, 1, 0, 0, 'Non dolorem labore q', NULL, 'Wednesday', NULL, 'Ipsa repellendus E', 22, 'Reprehenderit et eum', '+1 (481) 299-3008', '1999-11-13', 'Trevor Russo', 0, NULL, NULL, NULL),
(51, 'Jasmine Rodriquez', 38, '2021-12-08 11:30:04', '2021-12-08 11:30:04', NULL, 1, 0, 0, 'Non dolorem labore q', NULL, 'Wednesday', NULL, 'Ipsa repellendus E', 22, 'Reprehenderit et eum', '+1 (481) 299-3008', '1999-11-13', 'Trevor Russo', 0, NULL, NULL, NULL),
(52, 'Maryam Lindsey', 77, '2021-12-08 11:30:09', '2021-12-08 11:30:09', NULL, NULL, 1, 0, 'Voluptate sed et ani', NULL, 'Wednesday', NULL, 'Possimus et id adip', 20, 'Placeat nihil possi', '+1 (261) 942-2496', '2021-05-08', 'Forrest Reid', 1, NULL, NULL, NULL),
(53, 'McKenzie Oliver', 64, '2021-12-08 11:30:44', '2021-12-08 11:30:44', NULL, 1, 0, 0, 'Dolorem porro magna', NULL, 'Wednesday', NULL, 'Aute in sint totam', 61, 'Cumque pariatur Fac', '+1 (726) 271-6102', '2016-01-27', 'Neville Brooks', 0, NULL, NULL, NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_25_100748_changeuser', 1),
(6, '2021_11_25_103611_create_roles_table', 2),
(7, '2021_11_25_104229_costumers_table_migration', 2),
(8, '2021_11_25_105731_costumer_add_field', 3),
(10, '2021_11_25_121655_change_user_fields_pin', 4),
(11, '2021_11_25_122936_create_admins_table', 5),
(12, '2021_11_25_123543_admins_pin_column', 6),
(13, '2021_11_25_124108_admins_confirmed_field', 7),
(14, '2021_11_25_152405_add_online_admins', 8),
(15, '2021_11_26_124724_create_costumers_table', 9),
(22, '2021_11_27_132304_create_leads_table', 10),
(23, '2021_11_27_142414_change_campaign_leads', 10),
(24, '2021_11_27_150841_add_token_admins', 11),
(25, '2021_11_27_152057_add_unsigned_leads', 12),
(26, '2021_11_29_105505_add_completed_leads', 12),
(28, '2021_11_29_114109_add_details_costumer', 13),
(29, '2021_11_29_130943_add_actions_costumer', 14),
(30, '2021_11_29_150416_add_address_leads', 15),
(32, '2021_11_30_105617_lead_add_fields', 16),
(33, '2021_11_30_111015_add_fields_costumers', 17),
(34, '2021_11_30_135639_create_campaigns_table', 18),
(35, '2021_11_30_151111_add_lead_online', 19),
(36, '2021_12_01_095352_create_chats_table', 20),
(37, '2021_12_01_153328_add_app_field', 21),
(38, '2021_12_04_113832_appointment_add_time', 22),
(39, '2021_12_04_132939_add_slug_leads', 23),
(40, '2021_12_06_144011_create_appointments_table', 24),
(41, '2021_12_06_152927_add_birthday_lname_appointments', 25),
(42, '2021_12_07_133128_rejected_leads', 26),
(43, '2021_12_08_134715_add_status_app', 27),
(45, '2021_12_09_122641_create_notifications_table', 28),
(46, '2021_12_10_121024_add_data_csapp', 29);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `done` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `receiver_id`, `text`, `done`, `created_at`, `updated_at`) VALUES
(1, 1, 'You were appointed for the lead', 1, NULL, '2021-12-09 13:47:38');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rejectedleads`
--

CREATE TABLE `rejectedleads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `leads_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rejectedleads`
--

INSERT INTO `rejectedleads` (`id`, `leads_id`, `admin_id`, `reason`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'wewq', 'wweqqwe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` int(11) NOT NULL,
  `confirmed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `pin`, `confirmed`) VALUES
(1, 'Bulzart', 'bulzarti@gmail.com', NULL, '$2y$10$2QWY1.0Hayb3nfdBHgV.PuaH0k/Pv44ze9Nar3gpKg/j0FR.hwIyO', NULL, '2021-11-25 11:07:57', '2021-11-25 11:07:57', 'sm', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admins_role_index` (`role`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chats_costumer_id_index` (`costumer_id`),
  ADD KEY `chats_admin_id_index` (`admin_id`),
  ADD KEY `chats_rating_index` (`rating`);

--
-- Indexes for table `csapp`
--
ALTER TABLE `csapp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leads_campaign_id_index` (`campaign_id`),
  ADD KEY `leads_address_index` (`address`),
  ADD KEY `leads_advisor_index` (`advisor`),
  ADD KEY `leads_nationality_index` (`nationality`),
  ADD KEY `leads_location_index` (`location`),
  ADD KEY `leads_telprivat_index` (`telprivat`),
  ADD KEY `leads_slug_index` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rejectedleads`
--
ALTER TABLE `rejectedleads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_role_index` (`role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_index` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `csapp`
--
ALTER TABLE `csapp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rejectedleads`
--
ALTER TABLE `rejectedleads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
