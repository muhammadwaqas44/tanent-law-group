-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 09:47 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telnet_law`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(750) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'What can a landlord use my security deposit for?', 'Although a security deposit may be used “for any purpose,” four are specifically identified: (1) landlord reimbursement for a tenant’s rent default, (2) repair of damages to the rental unit, exclusive of ordinary wear and tear, caused by the tenant or guests, (3) cleaning costs necessary to return the rental unit to the same level of cleanliness it was in at the start of the tenancy, and (4) if authorized by the lease, payment of any tenant default to restore, replace, or return personal property or appurtenances, exclusive of ordinary wear and tear.See <a href=\"https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5\">Cal. Civ. Code § 1950.5(b)(1)–(4)</a>.', '2019-09-06 09:50:55', '2019-09-06 09:50:55'),
(2, 'When I move out, does the law specify what I’m financially responsible for and what my landlord is financially responsible for?', 'Yes.  When you return possession of the rental property to your landlord, you are responsible for returning it in the same condition in which you received it LESS “ordinary wear and tear.”See <a href=\"https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5\">Cal. Civ. Code § 1950.5(b)(2), (e)</a>.In other words, the landlord must pay all costs associated with remedying “ordinary wear and tear.”  Unfortunately, “ordinary wear and tear” is not specified.  The discoloring of paint; wearing down of rugs; minor scratches and nicks on walls and countertops; etc. likely constitute “ordinary wear and tear,” for which the landlord is financially responsible.  A large gaping hole in the wall caused by a rowdy friend at a party or a broken window caused by a toddler throwing a baseball through it likely do not constitute “ordinary wear and tear,” and the tenant will be financially responsible.  Reasonable people can disagree as to what does and does not constitute “ordinary wear and tear,” which in turn determines who is responsible for the repairs.  This is why tenants should always request a final inspection from the landlord before moving out.  (More below.  See also the document, “California Security Deposit Deduction Guidelines,” included with this Toolkit.)', '2019-09-06 09:50:56', '2019-09-06 09:50:56'),
(3, 'Am I required to steam-clean the carpeting?', 'If carpeting had been steam-cleaned prior to the start of your tenancy, probably.  Again, the tenant must return the rental unit to the landlord it in the same condition in which he or she received it LESS “ordinary wear and tear.”See  <a href=\"https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5\">Cal. Civ. Code § 1950.5(b)(2), (e)</a>.Assuming the carpeting had been steam-cleaned prior to the start of the tenancy, holding the tenant financially responsible for the steam-cleaning of the carpeting is consistent with the language of the law. Holding the financially tenant responsible for replacing the carpeting due to ordinary wear and tear is not.', '2019-09-06 09:50:56', '2019-09-06 09:50:56'),
(4, 'Is there a limit as to how much my landlord can charge for a residential security deposit?', 'Yes.  For an unfurnished residential rental unit, a landlord cannot demand a security deposit in an amount in excess of two months’ rent.  See <a href=\"https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5\">Cal. Civ. Code § 1950.5(c)</a>.For a furnished residential rental unit, a landlord cannot demand a security deposit in an amount in excess of three months’ rent.  See id.A landlord may require payment of the first month’s rent separate and apart from the security deposit prior to move-in.', '2019-09-06 09:50:56', '2019-09-06 09:50:56'),
(5, 'Does a landlord have to pay interest on my security deposit?', 'Not under California law.  However, local rent ordinances may require landlords to do so.  For example, landlords of rental units subject to the San Francisco Residential Rent Stabilization and Arbitration Ordinance are required to pay interest on security deposits.See <a href=\"https://sfrb.org/chapter-49-san-francisco-administrative-code-security-deposits-residential-rental-property\">S.F., Cal., Admin. Code § 49.2(a)–(g)</a>.', '2019-09-06 09:50:56', '2019-09-06 09:50:56'),
(6, 'After a tenant has given a landlord notice of an intention to terminate the tenancy, is the landlord required to perform an initial inspection to determine what charges, if any, would be deducted from the tenant’s security deposit?', 'Only if the tenant requests it.  Within a reasonable time after notification of either party’s intention to terminate the tenancy, or before the end of the lease term, the landlord must notify the tenant in writing of the option to request an initial inspection and of the right to be present at the inspection.See <a href=\"https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5\">Cal. Civ. Code § 1950.5(f)(1)</a>.  [Note: This requirement does not apply if the landlord is terminating the tenancy following a three-day notice to pay rent or quit; a three-day notice to perform a lease condition or convent or quit; or a three-day notice to stop committing waste/nuisance or quit.]If the tenant requests an inspection, the landlord or the landlord’s agent must make an initial inspection of the rental property no earlier than two weeks before the termination or the end of lease date.  See id.The purpose of this initial inspection is to allow the tenant an opportunity to fix any identified repairs to avoid deductions from the security deposit.  See id.The landlord and tenant must attempt to schedule the inspection at a mutually acceptable date and time.See id.  The landlord must provide at least forty-eight hours’ prior written notice of the date and time of the inspection.See id.  A landlord can proceed with the inspection whether the tenant is present or not, unless the tenant withdraws the inspection request.See id.', '2019-09-06 09:50:56', '2019-09-06 09:50:56'),
(7, 'Does the landlord have to give the tenant anything after this initial inspection?', 'Yes.  After the inspection, the landlord must give the tenant an itemized statement specifying repairs or cleanings proposed to be the basis of any deductions from the security deposit.  See <a href=\"https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5\">Cal. Civ. Code § 1950.5(f)(2)</a>.This statement, which must also include certain language from California Civil Code section 1950.5, must either be given to the tenant if the tenant is present for the inspection or left inside the rental unit.  See id.The tenant then will have an opportunity during the period between the initial inspection and the final date of the tenancy to remedy these identified repairs to avoid deductions from the security deposit.See § 1950.5(f)(3).', '2019-09-06 09:50:56', '2019-09-06 09:50:56'),
(8, 'When must my landlord return my security deposit?', 'No later than twenty-one calendar days (i.e., three weeks) after the tenant has moved out of the rental unit.  See <a href=\"https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5\">Cal. Civ. Code § 1950.5(g)(1)</a>.On or before this date, the landlord must provide the tenant, by personal delivery, by first-class mail, or by email (if the landlord and tenant agree to email) (1) a copy of an itemized statement indicating the basis for, and the amount of, any security deposit received and the disposition of the security deposit, and (2) any remaining portion of the security deposit.  See id.The itemized statement must also include copies of documents showing charges incurred and deducted by the landlord to repair or clean the premises.  See § 1950.5(g)(2).If the landlord or landlord’s employee did the work, the itemized statement must describe the work performed, including time spent and the reasonable hourly rate charged.  See § 1950.5(g)(2)(A).If the landlord or landlord’s employee did not do the work, the landlord must provide the tenant a copy of the bill, invoice, or receipt supplied by the person or entity performing the work.  See § 1950.5(g)(2)(B).If a deduction is made for materials or supplies, the landlord must provide a copy of the bill, invoice, or receipt.  See § 1950.5(g)(2)(C).The parties can agree to have the landlord deposit any remaining portion of the security deposit electronically to a bank account or other financial institution designated by the tenant.  See § 1950.5(g)(1).Otherwise, the tenant should provide the landlord with a mailing address so that a check can be mailed.  If the tenant has not provided a new mailing address, the landlord must use the address of the vacated rental unit.See § 1950.5(g)(6).', '2019-09-06 09:50:56', '2019-09-06 09:50:56'),
(9, 'Does the law penalize a landlord who fails to return the itemized statement along with the balance of the tenant’s security deposit (if applicable) within twenty-one calendar days?', 'Yes.  The bad faith retention by a landlord of the security interest or any portion thereof can subject the landlord to statutory damages of up to twice the amount of the security deposit, in addition to actual damages (including the portion of any security deposit retained in bad faith).See <a href=\"https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5\">Cal. Civ. Code § 1950.5(l)</a>.', '2019-09-06 09:50:56', '2019-09-06 09:50:56'),
(10, 'How can a tenant prove the existence of a security deposit if the dispute ends up in court?', 'A canceled check, a receipt, a lease indicating the requirement of a security deposit, a statement made under penalty of perjury, or “[a]ny [other] credible evidence.”See <a href=\"https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5\">Cal. Civ. Code § 1950.5(o)</a>.', '2019-09-06 09:50:56', '2019-09-06 09:50:56'),
(11, 'What happens to my security deposit if my landlord sells the building, dies, or otherwise loses a legal interest in the rental unit during my tenancy?', 'The landlord can either (1) transfer to the landlord’s successor in interest (e.g., the new owner) the portion of the tenant’s security deposit remaining after any lawful deductions but only after notifying the tenant of the transfer, of any claims made against the security deposit, of the amount of the security deposited, and of the names of the successors in interest, their addresses, and their telephone numbers; or (2) return the portion of the security deposit remaining after any lawful deductions, together with an accounting.See <a href=\"https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=CIV&amp;sectionNum=1950.5\">Cal. Civ. Code § 1950.5(h)(1)–(2)</a>.', '2019-09-06 09:50:56', '2019-09-06 09:50:56'),
(12, 'In a tenancy with multiple roommates who each contribute to the security deposit, what should we do when one of the roommates moves out?', 'Either the remaining roommates need to reimburse the departing roommate his or her share of the security deposit, or the replacement roommate should write a check directly to the departing roommate for the departing roommate’s share of the security deposit, less any damages to the departing roommate’s room beyond ordinary wear and tear.  The latter is a more common approach.', '2019-09-06 09:50:56', '2019-09-06 09:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `coupon_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `off` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `off`, `created_at`, `updated_at`) VALUES
(1, 'SDT-FREE', '100', '2019-08-29 11:03:04', '2019-08-29 11:03:04'),
(2, 'SDT-PREMIUM', '74.68354430379747', '2019-08-29 11:03:04', '2019-08-29 11:03:04'),
(3, 'SDT-STANDARD', '81.0126582278481', '2019-08-29 11:03:05', '2019-08-29 11:03:05'),
(4, 'SDT-ECONOMY', '87.34177215189873', '2019-08-29 11:03:05', '2019-08-29 11:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `letters`
--

CREATE TABLE `letters` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `json_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_16_092657_create_payment_table', 1),
(4, '2019_05_27_071541_create-letter-table', 1),
(5, '2019_08_22_173119_create_table_coupon_migration', 1),
(6, '2019_08_29_104813_create_blogs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subs_start_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_change_req` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `first_name`, `last_name`, `password`, `password_change_req`, `remember_token`, `status`, `is_paid`, `created_at`, `updated_at`) VALUES
(1, NULL, 'vickyrana4433@gmail.com', NULL, 'Muhammad', 'Waqas', '$2y$10$jKfcqe4C/mN9HtNlLEpuA.65PHa6P6hjrx/xKVszzmNgcj5Q7OHyG', NULL, NULL, NULL, 0, '2019-09-11 00:42:02', '2019-09-11 00:42:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `letters`
--
ALTER TABLE `letters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `letters_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `letters`
--
ALTER TABLE `letters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `letters`
--
ALTER TABLE `letters`
  ADD CONSTRAINT `letters_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
