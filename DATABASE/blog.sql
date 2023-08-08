-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2023 at 05:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uid` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `aname` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `aImage` varchar(300) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `birth_year` int(50) DEFAULT NULL,
  `amnum` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `FullName`, `aname`, `password`, `aImage`, `gender`, `birth_year`, `amnum`) VALUES
(3, 'Shardul Mishra', 'adminshardul', 'shardul1', 'tom1.jpg', 'male', 2000, '1234509876');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `bid` int(11) NOT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `b_title` varchar(250) DEFAULT NULL,
  `b_description` text DEFAULT NULL,
  `b_image` varchar(300) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='table for storing blogs';

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`bid`, `uname`, `b_title`, `b_description`, `b_image`, `created_time`, `updated_time`) VALUES
(15, 'shardul', 'Majestic Tigers: A Closer Look at the Iconic Big Cat', '<p><span style=\"text-decoration: underline;\"><strong>Introduction</strong>:</span></p>\r\n<p>Tigers, with their striking appearance and awe-inspiring grace, have captivated human imagination for centuries. As one of the world\'s most magnificent creatures, the tiger is a symbol of power, beauty, and fearlessness. In this blog, we delve into the captivating world of tigers, exploring their habitat, behavior, conservation status, and their significance in various cultures worldwide.</p>\r\n<ol>\r\n<li>The Royal Appearance: Tigers are the largest members of the cat family, and their appearance is nothing short of regal. Their striking orange fur, adorned with dark stripes, acts as perfect camouflage in the dense vegetation of their native habitats. A muscular body, sharp teeth, and keen senses make them highly skilled predators, capable of stealthy hunting and remarkable agility.</li>\r\n<li>Habitat and Range: Tigers primarily inhabit the dense forests, grasslands, and mangrove swamps of Asia. Their range once stretched from Turkey in the west to eastern Russia in the east. However, due to human activities and habitat destruction, tigers have experienced a significant reduction in their natural range.</li>\r\n<li>Behavior and Social Structure: Tigers are solitary animals, preferring to roam and hunt alone. Their territories can span vast areas, and they are known to be territorial, protecting their hunting grounds from other tigers. Male tigers usually have larger territories that overlap with the territories of multiple females. Despite their solitary nature, tigers exhibit caring behavior towards their cubs, ensuring their survival and teaching them essential hunting skills.</li>\r\n<li>Diet and Hunting:As apex predators, tigers are carnivores and mainly feed on ungulates such as deer, wild boar, and buffalo. They are stealthy hunters, relying on their exceptional camouflage and keen sense of sight and hearing to ambush their prey. Tigers are known for their powerful bite and ability to take down large animals with ease.</li>\r\n<li>Conservation Status:Tigers have faced significant threats to their survival, primarily due to habitat loss and poaching. Over the years, their numbers have drastically declined, leading to their classification as an endangered species. Various conservation efforts have been initiated to protect these majestic animals, including establishing protected reserves, anti-poaching measures, and raising awareness about the importance of tiger conservation.</li>\r\n<li>Cultural Significance:Tigers hold immense cultural significance in various societies around the world. In many Asian cultures, tigers are revered as symbols of strength, courage, and protection. They often feature in folklore, myths, and religious beliefs. For some indigenous communities, the tiger is considered a spirit animal or a guardian deity.</li>\r\n</ol>\r\n<p><span style=\"text-decoration: underline;\"><strong>Conclusion:</strong></span></p>\r\n<p>The tiger\'s existence has become an emblem of the delicate balance between wildlife and human progress. Their charisma and fierce presence inspire awe and admiration, reminding us of the importance of conserving the world\'s diverse ecosystems. As we strive to protect these magnificent creatures, let us also reflect on the broader significance of preserving nature and fostering coexistence with the precious wildlife that shares our planet. Only through collective efforts and global cooperation can we secure the future of the majestic tigers for generations to come.</p>', 'tiger.jpg', '2023-08-07 17:05:50', '2023-08-07 17:05:50'),
(16, 'jack', 'Roaring Majesty: Unraveling the Enigma of Lions', '<p><span style=\"text-decoration: underline;\"><strong>Introduction:</strong></span></p>\r\n<p>Lions, the iconic rulers of the African savannas, have been immortalized in literature, folklore, and popular culture as symbols of strength, pride, and nobility. These majestic big cats stand at the pinnacle of the food chain, commanding respect and admiration from humans and animals alike. In this blog, we embark on a fascinating journey into the world of lions, exploring their habitat, social structure, hunting prowess, and the challenges they face in the modern world. The</p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li>King of the Savanna: Lions, scientifically known as Panthera leo, are one of the four big cat species and the only social members of the cat family. With their golden-brown fur, impressive mane (in males), and muscular build, lions possess a regal appearance that befits their moniker \"King of the Jungle.\"</li>\r\n<li>Habitat and Distribution: Lions predominantly inhabit the vast grasslands, open woodlands, and savannas of sub-Saharan Africa. Historically, they also roamed across parts of Asia and Europe, but due to human encroachment and hunting, their distribution has been limited to certain regions in Africa.</li>\r\n<li>Social Structure: One of the most captivating aspects of lions is their unique social structure. Unlike other big cats, lions live in family groups called prides. A pride typically consists of related females, their cubs, and a few resident males. The lionesses collaboratively hunt for their pride, displaying an extraordinary level of teamwork and communication.</li>\r\n<li>Hunting and Diet: Lions are powerful predators and are primarily nocturnal hunters. Working together in a coordinated manner, they employ stealth and strategy to bring down large herbivores such as zebras, wildebeests, and buffalo. Their strength and sharp hunting skills make them formidable apex predators in their ecosystems.</li>\r\n<li>Conservation Challenges: Despite their status as symbols of strength, lions face several challenges in the modern world. Habitat loss due to human expansion, illegal poaching, and conflicts with local communities have led to a decline in their population. The International Union for Conservation of Nature (IUCN) lists lions as \"Vulnerable,\" urging concerted efforts to protect and conserve these magnificent creatures.</li>\r\n<li>Cultural Significance: Lions have been deeply intertwined with human culture throughout history. In many African societies, they hold spiritual and cultural significance, symbolizing bravery, leadership, and royalty. Lions feature prominently in various folklore, tales, and traditional art, passing down their legacy from generation to generation.</li>\r\n</ul>\r\n<p><span style=\"text-decoration: underline;\"><strong>Conclusion: </strong></span></p>\r\n<p>Lions, with their awe-inspiring presence and captivating behavior, are living embodiments of power and grace. As guardians of the African savannas, they play an indispensable role in maintaining the delicate balance of their ecosystems. As we confront the challenges of conservation, let us strive to protect these regal creatures and preserve their natural habitats. By doing so, we ensure that future generations can continue to marvel at the roaring majesty of the extraordinary lion, an enduring symbol of strength, resilience, and the wild beauty of our natural world.</p>', 'lion.jpg', '2023-08-07 17:12:42', '2023-08-07 17:12:42'),
(17, 'shardul', 'The Enigmatic Elegance of the Leopard: Unveiling Nature\'s Most Mystifying Cat', '<p><span style=\"text-decoration: underline;\"><strong>Introduction </strong></span></p>\r\n<p>In the realm of the animal kingdom, few creatures command the same sense of awe and admiration as the leopard. With its unmatched grace, striking coat, and enigmatic behavior, the leopard is a living testament to the beauty and complexity of nature. Join us as we embark on a journey to unravel the mysteries surrounding this majestic big cat and gain a deeper understanding of its significance in the wild.</p>\r\n<ul>\r\n<li>The Leopard\'s Striking Appearance</li>\r\n</ul>\r\n<p>One cannot help but be captivated by the leopard\'s stunning appearance. Its golden-yellow coat, adorned with distinctive dark rosettes, not only serves as excellent camouflage in its natural habitat but also grants it a unique and alluring beauty. Each leopard\'s pattern is as individual as a fingerprint, allowing researchers to identify and track these elusive creatures for conservation efforts.</p>\r\n<ul>\r\n<li>Habitat and Distribution</li>\r\n</ul>\r\n<p>Leopards are remarkably adaptable, found in a wide range of habitats across Africa and Asia, from dense rainforests to arid deserts. This adaptability has earned them the reputation of being the most widespread of all big cat species. Their stealthy and solitary nature enables them to thrive in a variety of ecosystems, from the savannas of Africa to the mountains of Nepal.</p>\r\n<ul>\r\n<li>Elusive Behavior and Exceptional Skills</li>\r\n</ul>\r\n<p>Leopards are known for their remarkable agility, strength, and adaptability. Their ability to climb trees with ease and carry prey that may be heavier than themselves up into the branches is a testament to their incredible power. Unlike other big cats, leopards often store their kills in trees, a behavior that is thought to protect their meal from scavengers and rival predators.</p>\r\n<ul>\r\n<li>The Quiet Hunters</li>\r\n</ul>\r\n<p>In the world of predators, leopards stand out as stealthy hunters. Their ability to silently stalk their prey, combined with their exceptional night vision, makes them one of the most effective nighttime predators. While their diet primarily consists of small to medium-sized ungulates, leopards are known for their varied palate, often preying on animals as diverse as monkeys, birds, and even fish.</p>\r\n<ul>\r\n<li>Conservation Challenges</li>\r\n</ul>\r\n<p>Despite their adaptability, leopards face numerous challenges that threaten their survival. Habitat loss due to human encroachment, poaching for their beautiful coats and body parts, and conflicts with humans are some of the pressing issues endangering their populations. Conservation efforts, including protected areas and community engagement, play a crucial role in ensuring the leopard\'s continued existence in the wild.</p>\r\n<ul>\r\n<li>Cultural Significance</li>\r\n</ul>\r\n<p>The leopard has held a special place in human culture and mythology for centuries. Revered for its strength and beauty, leopards often symbolize qualities such as courage, power, and independence in various cultures around the world. Their presence in folklore, art, and literature has left an indelible mark on human society, contributing to their aura of mystery and allure.</p>\r\n<p><span style=\"text-decoration: underline;\"><strong>Conclusion </strong></span></p>\r\n<p>The leopard, with its exquisite appearance and mysterious demeanor, continues to captivate the imagination of people worldwide. Its resilience, adaptability, and remarkable hunting skills showcase the magnificence of nature\'s design. As we navigate an ever-changing world, it is imperative that we work collectively to protect and preserve these elegant creatures and the ecosystems they inhabit, ensuring that the enigma of the leopard remains a cherished part of our planet\'s rich biodiversity.</p>', 'leopard.jpg', '2023-08-08 06:49:48', '2023-08-08 06:49:48'),
(18, 'jack', 'Unveiling the Speed Demon: Exploring the Fascinating World of the Cheetah', '<p><span style=\"text-decoration: underline;\"><strong>Introduction </strong></span></p>\r\n<p>In the vast tapestry of the animal kingdom, one creature stands out as a living embodiment of speed and grace: the cheetah. Renowned for its unparalleled agility and breathtaking acceleration, the cheetah is an apex predator that has captured the imagination of humans for centuries. Join us on a journey to discover the remarkable world of the cheetah, as we delve into its distinctive characteristics, behaviors, and the challenges it faces in the modern world.</p>\r\n<ul>\r\n<li>The Need for Speed</li>\r\n</ul>\r\n<p>The cheetah\'s most iconic feature is its unmatched speed. With the ability to accelerate from 0 to 60 miles per hour in just a few seconds, the cheetah is undoubtedly the fastest land animal on Earth. This incredible burst of speed is a result of the cheetah\'s lightweight build, specialized leg muscles, and enlarged adrenal glands that produce adrenaline for quick energy. The cheetah\'s spine acts like a coiled spring, helping it stretch and contract with each stride, maximizing its velocity.</p>\r\n<ul>\r\n<li>Adaptations for Speed</li>\r\n</ul>\r\n<p>Beyond its impressive speed, the cheetah boasts a range of adaptations that make it a formidable predator. Its distinctive black \"tear marks\" running from the inner corners of its eyes down to the sides of its mouth serve to reduce glare from the sun, aiding its focus on prey during high-speed chases. Its semi-retractable claws provide excellent traction, and its tail acts as a rudder to maintain balance during rapid maneuvers.</p>\r\n<ul>\r\n<li>Habitat and Range</li>\r\n</ul>\r\n<p>Cheetahs are native to a variety of open habitats in Africa, including grasslands, savannas, and semi-arid regions. Their vast home ranges allow them to roam freely in search of prey, which primarily includes gazelles and other small to medium-sized ungulates. Unlike other big cats, cheetahs are less aggressive and prefer to avoid confrontations with larger predators, as their slender build and specialization for speed make them vulnerable in direct combat.</p>\r\n<ul>\r\n<li>Social Structure and Reproduction</li>\r\n</ul>\r\n<p>Cheetahs are relatively solitary animals, with males and females coming together only during mating. Females raise their cubs alone, teaching them essential hunting skills until they are independent enough to venture on their own. The cheetah\'s low reproductive rate, combined with habitat loss and human conflict, has contributed to its vulnerable status in the wild.</p>\r\n<ul>\r\n<li>Conservation Concerns</li>\r\n</ul>\r\n<p>The cheetah faces a multitude of challenges that threaten its survival. Habitat loss due to human activities, conflict with farmers, and the illegal pet trade are among the primary concerns. Conservation efforts are crucial to protect these majestic animals, with organizations focusing on creating protected areas, mitigating human-wildlife conflict, and raising awareness about the cheetah\'s plight.</p>\r\n<ul>\r\n<li>Inspiration and Symbolism</li>\r\n</ul>\r\n<p>Cheetahs have left an indelible mark on human culture and history. They have been admired for their speed, grace, and beauty, often symbolizing attributes such as agility, focus, and determination. Cheetah-inspired artwork, literature, and even sports teams continue to highlight the allure of this magnificent creature.</p>\r\n<p><span style=\"text-decoration: underline;\"><strong>Conclusion </strong></span></p>\r\n<p>The cheetah\'s extraordinary speed and graceful presence have earned it a special place in both the natural world and human consciousness. As we strive to protect the biodiversity of our planet, it is imperative that we continue to work together to ensure the survival of these awe-inspiring animals. By championing conservation efforts, supporting local communities, and raising awareness, we can help secure a future where the cheetah can continue to roam the savannas, embodying the essence of swiftness and vitality.</p>', 'cheetah.jpg', '2023-08-08 06:52:29', '2023-08-08 06:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `uImage` varchar(300) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `birth_year` int(50) DEFAULT NULL,
  `mnum` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `uname`, `Password`, `uImage`, `gender`, `birth_year`, `mnum`) VALUES
(42, 'Shardul Mishra', 'shardul', 'shardul1', 'tom1.jpg', 'male', 2000, '1234567890'),
(43, 'Jack Gyllenhall', 'jack1', 'jack1234', 'jack.jpg', 'male', 1977, '0987654321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uname` (`aname`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `mnum` (`mnum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
