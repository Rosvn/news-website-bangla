CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert Bengali Dummy Data
INSERT INTO `articles` (`title`, `category`, `author`, `publish_date`, `image_url`, `content`) VALUES
('ময়মনসিংহে ব্রহ্মপুত্র নদের পাড় রক্ষায় নতুন প্রকল্প শুরু', 'স্থানিয় সংবাদ', 'আরিফুল ইসলাম', '2024-01-17', 'https://images.unsplash.com/photo-1589923188900-85dae523342b?w=800', 'ময়মনসিংহ শহরের বুক চিরে বয়ে যাওয়া ব্রহ্মপুত্র নদের তীর রক্ষায় সরকার একটি বড় প্রকল্প হাতে নিয়েছে...'),
('কৃষি বিশ্ববিদ্যালয়ে টেকসই চাষাবাদ নিয়ে নতুন গবেষণা', 'শিক্ষা', 'সুলতানা আহমেদ', '2024-01-17', 'https://images.unsplash.com/photo-1523050853063-915894b924a3?w=800', 'জলবায়ু পরিবর্তনের চ্যালেঞ্জ মোকাবিলায় নতুন জাতের ধান উদ্ভাবন করেছেন কৃষি বিশ্ববিদ্যালয়ের গবেষকরা...'),
('শহর জুড়ে তীব্র যানজট: ভোগান্তিতে সাধারণ মানুষ', 'স্থানিয়', 'নিজস্ব প্রতিবেদক', '2024-01-16', 'https://images.unsplash.com/photo-1590059530495-23c72b274296?w=800', 'স্টেশন রোড এবং টাউন হল মোড়ে সকাল থেকেই তীব্র যানজট দেখা দেয়। ট্রাফিক পুলিশ বলছে কাজ চলছে...');