-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 12:01 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwl_tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `excerpt`, `body`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'Kisah Nyata di Balik Kasur Air dalam The Conjuring 3', 'Sutradara The Conjuring: The Devil Made Me Do It, Michael Chaves mengungkapkan adegan kasur air terinspirasi dari kisah nyata. Ia mengatakan adegan David Glatzel (Julian Hilliard) di atas kasur air termasuk salah satu yang amat berkesan dalam proses syuting.', 'Sutradara The Conjuring: The Devil Made Me Do It, Michael Chaves mengungkapkan adegan kasur air terinspirasi dari kisah nyata. Ia mengatakan adegan David Glatzel (Julian Hilliard) di atas kasur air termasuk salah satu yang amat berkesan dalam proses syuting.\r\n\"Keluarga Glatzel pindah ke rumah itu dan pemilik yang sebelumnya meninggalkan kasur tersebut di sana,\" kata Michael Chaves.\r\nDia meyakini tempat tidur di rumah baru keluarga Glatzel tersebut yang menyebabkan David kerasukan iblis.\r\n\"Ada noda sangat aneh di tempat tidur tersebut dan diyakini itu yang menyebabkan kerasukan,\" tuturnya seperti dilansir Insider.\r\nIa mengungkapkan penulis David Leslie Johnson-McGoldrick memulai kisah dari hal tersebut dan menghasilkan ide di mana Glatzel menemukan kasur tersebut.\r\nDalam film, anak laki-laki bernama David Glatzel menemukan sebuah kasur air. Ia pun tertarik dengan kasur tersebut dan mencoba berjalan di atasnya lalu rebahan di atasnya.\r\nNamun, kisah tak berhenti di situ. David mulai merasakan keanehan dan mencoba turun dari kasur itu. Di saat itu lah, ia bertemu dengan iblis.\r\n\"Saya merasa itu sangat jenius. Kasur air berasal dari waktu tertentu dan saya merasakan penemuan itu dan kesenangannya. Bisa jadi ada sesuatu yang dahsyat dari sana,\" ucap Michael Chaves.\r\nHasilnya pun disebut amat berkesan untuknya dan menjadi penemuan mengerikan oleh David Glatzel.\r\nThe Conjuring 3: The Devil Made Me Do It mengisahkan pasangan Ed (Patrick Wilson) dan Lorraine Warren (Vera Farmiga) diminta untuk mendampingi prosesi eksorsis terhadap seorang anak kecil bernama David Glatzel (Julian Hilliard).\r\nDavid diketahui mengalami serangkaian tanda diincar makhluk gaib setelah ia dan keluarganya pindah ke sebuah rumah baru. Bahkan makhluk jahat yang mengincar David mampu membuat bocah itu melakukan penyerangan kepada orang tuanya.\r\nKetika prosesi eksorsis telah disetujui oleh Vatikan dan seorang pastur diminta melakukan pengusiran, setan yang dihadapi oleh pasangan demonolog ini rupanya jauh lebih kuat. Proses eksorsis berjalan kacau. Poltergeist kencang melanda hingga keselamatan Ed dan Lorraine pun terancam.\r\nDi tengah kekacauan itu, pemuda bernama Arne Johnson (Ruairi O\'Connor) ikut membantu eksorsis dan berusaha menyadarkan David. Ia menyerahkan dirinya pada iblis tersebut. Eksorsis David berakhir begitu saja dan penderitaan Arne dimulai.\r\nThe Conjuring 3: The Devil Made Me Do It tayang mulai Jumat (4/6) dan bisa disaksikan di bioskop.\r\n', 'blog1.jpg', 'published', '2021-06-29 21:11:40', NULL),
(2, 3, '3 Alasan Bisa Jatuh Cinta dengan Ali & Ratu Ratu Queens', 'Film Ali & Ratu Ratu Queens sedang tayang di layanan streaming Netflix sejak Kamis, 17 Juni 2021. Film yang dibintangi oleh Iqbaal Ramadhan itu bakal menghibur dan menghangatkan hati penonton lewat kisah yang digarap oleh sutradara Lucky Kuswandi.', 'Film Ali & Ratu Ratu Queens sedang tayang di layanan streaming Netflix sejak Kamis, 17 Juni 2021. Film yang dibintangi oleh Iqbaal Ramadhan itu bakal menghibur dan menghangatkan hati penonton lewat kisah yang digarap oleh sutradara Lucky Kuswandi. Bercerita tentang banyaknya jalan untuk menemukan arti sebuah keluarga serta perjuangan mengejar mimpi dengan latar di New York. Sebelum menonton, ada baiknya menyimak beberapa alasan mengapa harus jatuh cinta dengan Ali & Ratu Ratu Queens. \r\nMengobati rindu bepergian: Ali & Ratu Ratu Queens akan membawa kita dalam sebuah perjalanan menemukan keluarga, mimpi, dan inspirasi sampai ke Big Apple.\r\nPenikmat traveling dibawa menjelajahi New York di luar sisi glamour-nya kota tersebut saat Ali bertemu dengan Ratu Ratu di Queens.\r\nIqbaal Ramadhan berujar, film ini menggambarkan kota New York secara autentik dan raw. Oleh karena itu, hal tersebut menjadi daya tarik utama film sekaligus alasan Iqbaal Ramadhan mengambil proyek ini. \"Saya rasa Queens adalah tempat yang membuat New York menjadi autentik,\" kata Iqbaal seperti dikutip Kompas.com keterangan resmi, Jumat (18/6/2021).\r\nMusik yang memanjakan telinga: Ketika menyaksikan trailer Ali & Ratu Ratu Queen, musik mulai mengalun sehingga soundtrack film dapat memanjakan telinga. Perasaan yang sama juga dirasakan Tika panggabean. Menurutnya, film ini memiliki cerita yang sangat kuat dan latar musik menunjang film tersebut. \"Pada momen-momen tertentu terasa lebih dramatis karena terdapat berbagai musik yang indah,\" ucapnya. \r\nKisah yang menyentuh hati: Showrunner dan produser Muhammad Zaidy sempat menyebutkan, tujuan utama film ini adalah menyampaikan arti dari sebuah keluarga. \"Keluarga bisa saja menjadi sebuah konsep yang menjelaskan ikatan kita dengan orang-orang terdekat, karena sebenarnya ada banyak jalan untuk mendefinisikan arti keluarga,\" ujarnya. Tidak heran apabila perjuangan Ali dalam bersatu kembali dengan ibunya yang hidup terpisah, serta pertemuannya dengan empat sosok keibuan akan memancing air mata. ', 'blog2.jpg', 'published', '2021-06-23 21:28:53', NULL),
(3, 5, 'The Eight Hundred', 'Di tengah pandemi COVID-19, China telah melampaui Amerika Serikat untuk menjadi box office film terbesar dunia untuk pertama kalinya. Memproduksi lebih dari $ 460 juta dalam penjualan tiket, film perang epik The Eight Hundred adalah film terlaris tahun ini di negara ini.', 'Di tengah pandemi COVID-19, China telah melampaui Amerika Serikat untuk menjadi box office film terbesar dunia untuk pertama kalinya. Memproduksi lebih dari $ 460 juta dalam penjualan tiket, film perang epik The Eight Hundred adalah film terlaris tahun ini di negara ini. Itu adalah pertama kalinya film non-Hollywood mencapai kinerja box office tertinggi tahun ini.\r\n\r\nDisutradarai oleh sutradara generasi keenam Guan Hu, The Eight Hundred adalah film Tiongkok pertama yang mengambil gambar seluruhnya dalam format IMAX. Awalnya dijadwalkan menjadi film pembuka di Festival Film Internasional Shanghai 2019, tetapi diperintahkan untuk dihapus dari program karena alasan politik. Asosiasi Penelitian Budaya Merah Tiongkok menemukan bahwa penggambaran Tentara Nasionalis Tiongkok dalam film tersebut tidak benar, yang membuat perilisan teater film tersebut menjadi limbo sampai sutradara setuju untuk menyunting 13 menit dari film tersebut.\r\n\r\nFilm ini didasarkan pada kisah nyata dari perang Tiongkok-Jepang. Pada tahun 1937, 400 tentara Tiongkok dari Divisi ke-88 Tentara Nasionalis Tiongkok mempertahankan Gudang Si Hang melawan tentara Jepang selama empat hari empat malam. Untuk menipu musuh dan meningkatkan moral warga, komandan divisi mengumumkan bahwa ada 800 tentara yang menjaga gudang. Dengan latar belakang klub malam glamor dan lampu neon Shanghai, film ini merinci bagaimana tentara mengalahkan enam pasukan Jepang sementara ratusan jurnalis Barat dan warga sipil Tiongkok menjadi saksi pertempuran patriotik yang epik. Orang Cina menyebut Delapan Ratus \"Dunkirk Cina\".\r\n\r\nMeskipun pemeran utama film ini terdiri dari aktor Cina papan atas seperti Li Chen, Wang Qianyuan, dan Zheng Kai, tidak ada peran utama dalam film tersebut karena Guan Hu bermaksud menunjukkan 400 tentara sebagai salah satu representasi bangsa, bukan individu. . Lebih dari 1.000 aktor dipilih untuk mengikuti audisi untuk memerankan tentara dan 400 dipilih untuk menjalani 7 bulan pelatihan militer di sebuah gudang agar mereka tetap tenggelam secara fisik dan emosional dalam suasana medan pertempuran yang sebenarnya.\r\n\r\nSinematografer Cao Yu, kolaborator lama dengan sutradara Lu Chuan (Kekexili: Mountain Patrol), dengan sengaja memasukkan film ini dengan warna yang jenuh dan hidup. Closeup ekstrim dan gerakan kamera menyapu meningkatkan realisme film. Memadukan dengan penggambaran pertempuran yang realistis, Guan Hu juga menambahkan serangkaian sentuhan romantis pada cerita dengan adegan simbolis seperti kuda putih berlari kencang di sekitar gudang. Seperti banyak film Cina beranggaran besar lainnya, The Eight Hundred juga merangkul kolaborator internasional yang berspesialisasi dalam efek visual, desain suara, dan komposisi musik. Efek visual film ini diawasi oleh Tim Crosbie (X-Men: Apocalypse) dan skor utamanya ditulis oleh Andrew Kawczynski (Dunkirk).\r\n\r\nGuan Hu, pernah menjadi sutradara termuda di Beijing Film Studio, adalah sosok penting dari generasi keenam. Film-filmnya yang memenangkan penghargaan, seperti Mr. Six, Cow, dan Design of Death, sering memberikan komentar yang blak-blakan tentang transformasi sosial dan perubahan budaya Tiongkok. Menyusul kesuksesannya baru-baru ini dengan The Eight Hundred, film baru Guan Hu Jin Gang Chuan telah dirilis di bioskop pada 25 Oktober untuk menandai peringatan 70 tahun partisipasi tentara Tiongkok dalam Perang Korea.', 'blog3.jpg', 'published', '2021-06-23 21:28:53', NULL),
(4, 1, '63 Film Bersaing di Indonesian Movie Actors Awards 2020', 'Ajang penghargaan Indonesian Movie Actors (IMA) Awards 2020 kembali bergulir. Sejak kehadirannya, ajang ini konsisten memberi apresiasi untuk aktor, aktris, dan film favorit. ', 'Ajang penghargaan Indonesian Movie Actors (IMA) Awards 2020 kembali bergulir. Sejak kehadirannya, ajang ini konsisten memberi apresiasi untuk aktor, aktris, dan film favorit. \"IMA Awards konsisten memberi penghargaan setinggi-tingginya bagi aktor dan aktris pemeran dalam setiap karya film terbaik,\" kata Kanti Mirdiati, CEO RCTI di Kebon Jeruk, Jakarta Barat, Kamis (5/2). Para pemenang dari masing-masing kategori Indonesian Movie Actors Awards 2020 telah ditentukan. Baca Juga: Tara Basro Pamer Foto Tanpa Busana, Ini Reaksi Joko Anwar Jajaran nama aktor dan aktris papan atas Indonesia dari 63 judul film siap memperebutkan 8 kategori terbaik dan 7 kategori terbaik yang telah ditentukan oleh Dewan Juri. \"Para nominator dari film produksi Indonesia yang dirilis baik di dalam maupun luar negeri dengan periode mulai 1 Februari 2019 hingga 31 Januari 2020,\" ujar Marcella Zalianty, Ketua Dewan Juri. Penilaian Indonesian Movie Actors Awards 2020 berdasarkan berbagai aspek penilaian yang dipertimbangkan untuk menentukan karya-karya terbaik yang layak masuk ke daftar penilaian. Judika Dikritik Para juri telah bekerja keras untuk mendapatkan kategori terbaik dan terfavorit. Terdapat 7 kategori kategori terfavorit yang nantinya akan dipilih berdasarkan masyarakat melalui voting, 8 kategori pilihan terbaik yang akan dipilih berdasarkan penilaian dari dewan juri, serta 2 kategori spesial yaitu lifetime achievement yang diberikan setiap tahun dan special awards. Juri pada IMA Awards pada tahun ini terdiri dari tujuh orang. Mereka adalah Marcella Zalianty (Aktor, Produser, Ketua Dewan Juri) kemudian Lukman Sardi (Aktor), Salman Aristo (Penulis dan Produser), Robert Ronny (Produser).\r\nSelain itu, untuk menambah keragaman pandangan melihat wajah baru seperti Fajar Bustomi (Sutradara), Oka Antara (Aktor), dan Prilly Latuconsina (Aktor). “Sistem voting oleh masyarakat tahun ini akan menggunakan sistem voting melalui RCTI+, Instagram, dan Facebook,” ujar Dini Putri selaku Director Programming & Acquisition RCTI. Malam puncak Indonesian Movie Actors Awards 2020 dilaksanakan 26 Maret.', 'blog4.jpg', 'published', '2021-06-23 21:30:42', NULL),
(5, 2, 'Box Office Dunia 11-20 Juni 2021', 'Sebelum F9: The Fast Saga melaju ke balapan box office domestik minggu ini, Ryan Reynolds, Samuel L. Jackson, dan The Hitman\'s Wife\'s Bodyguard karya Salma Hayek menjadi sasaran utama di Amerika Utara dan menjadi nomor satu.', 'Sebelum F9: The Fast Saga melaju ke balapan box office domestik minggu ini, Ryan Reynolds, Samuel L. Jackson, dan The Hitman\'s Wife\'s Bodyguard karya Salma Hayek menjadi sasaran utama di Amerika Utara dan menjadi nomor satu.\r\n\r\nPada akhir pekan Hari Ayah ketika Los Angeles dan New York mengizinkan bioskop untuk dibuka dengan kapasitas 100 persen, Pengawal Istri Hitman – sebuah komedi aksi – menghasilkan $ 11,68 juta. Sekuel sutradara Patrick Hughes untuk hitnya di tahun 2017, The Hitman\'s Bodyguard, juga dibintangi oleh Antonio Banderas, Gary Oldman, dan Morgan Freeman.\r\n\r\nA Quiet Place Bagian II tetap keras dan jelas di box office, menghasilkan $9,4 juta untuk meraih tempat kedua. Sekuel John Krasinski, film Hollywood pertama yang melampaui angka $100 juta di era pandemi virus corona setelah hanya tiga minggu, kini telah meraup $125,26 juta.\r\n\r\nBerbicara tentang tonggak sejarah itu, Godzilla vs. Kong karya Adam Wingard baru saja mencapai tolok ukur $ 100 juta, menjadi film Amerika kedua yang melakukannya di dalam negeri.\r\n\r\nNamun, pada akhir pekan di mana 43 negara bagian telah sepenuhnya membuka pintu bioskop mereka, dan menghilangkan pembatasan kapasitas periode COVID-19, Peter Rabbit 2: The Runaway dari Will Gluck melompat ke tempat ketiga karena menghasilkan $6,1 juta untuk pendapatan kumulatif sejauh ini sebesar $20,33 juta.\r\n\r\nDi tempat keempat dan kelima adalah The Conjuring: The Devil Made Me Do It karya Michael Chaves dan Cruella karya Craig Gillespie dengan masing-masing $5,15 juta dan $5,1 juta.\r\n\r\nTerlepas dari ulasannya yang cemerlang, Jon M. Chu\'s In the Heights turun ke nomor enam dengan $4,21 juta. Meskipun ini adalah jenis film gembira yang paling baik dinikmati di lingkungan komunal sebuah rumah film, In the Heights mungkin ditonton oleh lebih banyak keluarga di rumah karena film ini juga disiarkan di HBO Max.\r\n\r\nMengumpulkan $1,6 juta dan menempati posisi ketujuh adalah petualangan animasi Elaine Bogan dan Ennio Torresan, Spirit Untamed.\r\n\r\nPada akhir pekan keduanya, 12 Mighty Orphans karya Ty Roberts mencetak $870.000, cukup bagus untuk finis kedelapan. Drama olahraga periode, tentang pelatih sepak bola sekolah menengah yang memotivasi tim yatim piatu untuk menjadi juara negara bagian selama Depresi Hebat, menampilkan Luke Wilson, Robert Duvall, Vinessa Shaw, Martin Sheen, dan Treat Williams.\r\n\r\nKomedi-horor Deon Taylor, The House Next Door: Meet the Blacks 2 dengan Mike Epps, Katt Williams, dan Bresha Webb, menarik $604.400 untuk menempati posisi kesembilan.\r\n\r\nMelengkapi sepuluh besar adalah Lebah Ratu Michael Lembeck yang menghasilkan $275.000. Pemeran komedi termasuk Ellen Burstyn, Ann-Margret, Loretta Devine, Jane Curtin, Christopher Lloyd, James Caan, dan Alec Mapa.\r\n\r\nSecara internasional, F9 Justin Lin kembali mendominasi balapan. Angsuran kedua dari belakang untuk waralaba blockbuster Vin Diesel menarik $ 19,08 juta karena mendekati patokan $ 300 juta dalam pendapatan luar negerinya.\r\n\r\nA Quiet Place 2 juga masih membuat banyak suara di tangga lagu lepas pantai dengan $ 15,7 juta, dengan total $ 96,7 juta yang memberikan kesempatan bagi drama horor Emily Blunt untuk juga melewati angka $ 100 juta di luar negeri.\r\n\r\nHit horor lainnya, The Conjuring 3, mengumpulkan $ 12,4 juta untuk penjualan internasional keseluruhan sebesar $ 89,2 juta yang menjadikannya anggota potensial lain dari klub $ 100 juta di pasar luar negeri. Cruella lebih dekat untuk mencapai tanda itu setelah pendapatan $ 12 juta ditambahkan ke penghitungan kumulatif internasional $ 95,2 juta prekuel itu.\r\n\r\nLuca Pixar, yang rilisnya di Amerika Serikat diubah dari teater menjadi streaming hanya melalui Disney Plus, menemukan kehidupan di dalam bioskop di luar negeri. Kisah animasi set Riviera Italia karya Enrico Casarosa tentang persahabatan antara manusia dan monster laut yang menyamar sebagai manusia menghasilkan $5 juta di beberapa wilayah luar negeri.\r\n\r\nDisuarakan oleh Jacob Tremblay, Maya Rudolph, Sacha Baron Cohen, Jack Dylan Grazer, dan Emma Berman, Luca memulai debutnya di puncak di Rusia.', 'blog5.jpg', 'published', '2021-06-23 21:30:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `casts`
--

CREATE TABLE `casts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `movie_id` bigint(20) UNSIGNED NOT NULL,
  `celebrity_id` bigint(20) UNSIGNED NOT NULL,
  `in_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `casts`
--

INSERT INTO `casts` (`id`, `movie_id`, `celebrity_id`, `in_role`, `created_at`, `updated_at`) VALUES
(1, 7, 9, 'Frankie', '2021-04-21 03:00:00', '2021-04-21 03:00:00'),
(11, 1, 1, 'Princess Jasmine', NULL, NULL),
(12, 1, 2, 'Aladdin', NULL, NULL),
(13, 1, 3, 'Genie/Mariner', NULL, NULL),
(14, 1, 4, 'Jafar', NULL, NULL),
(15, 1, 5, 'Dalia', NULL, NULL),
(16, 1, 6, 'Prince Anders', NULL, NULL),
(17, 2, 8, 'Theresa “Tree” Gelbman', NULL, NULL),
(18, 2, 9, 'Carter Davis', NULL, NULL),
(19, 2, 10, 'Lori Spengler', NULL, NULL),
(20, 3, 12, 'Louisa Clark', NULL, NULL),
(21, 3, 13, 'William Traynor', NULL, NULL),
(22, 3, 14, 'Camilla Traynor', NULL, NULL),
(23, 4, 17, 'Alan Turing', NULL, NULL),
(24, 4, 18, 'Joan Clarke', NULL, NULL),
(25, 4, 19, 'Huge Alexander', NULL, NULL),
(26, 5, 21, 'Stephen Hawking', NULL, NULL),
(27, 5, 22, 'Jane Hawking', NULL, NULL),
(28, 5, 23, 'Elaine Mason', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Awards', 'active', '2021-04-21 03:00:00', '2021-04-21 03:00:00'),
(2, 'Box Office', 'active', '2021-04-22 03:00:00', '2021-04-22 03:00:00'),
(3, 'Film Review', 'active', '2021-04-23 03:00:00', '2021-04-23 03:00:00'),
(4, 'News', 'active', '2021-04-24 03:00:00', '2021-04-24 03:00:00'),
(5, 'Global', 'active', '2021-04-25 03:00:00', '2021-04-25 03:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `celebrities`
--

CREATE TABLE `celebrities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `biography` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `death_date` date DEFAULT NULL,
  `category` enum('Actor','Actress','Director','Others') COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `celebrities`
--

INSERT INTO `celebrities` (`id`, `name`, `full_name`, `excerpt`, `biography`, `birth_date`, `death_date`, `category`, `country`, `height`, `image`, `link_facebook`, `link_twitter`, `link_instagram`, `created_at`, `updated_at`) VALUES
(1, 'Benedict Cumberbatch', 'Benedict Timothy Carlton Cumberbatch', 'Benedict Timothy Carlton Cumberbatch lahir dan besar di London, Inggris. Orang tuanya, Wanda Ventham dan Timothy Carlton (lahir Timothy Carlton Congdon Cumberbatch), keduanya aktor. ', 'Benedict Timothy Carlton Cumberbatch lahir dan besar di London, Inggris. Orang tuanya, Wanda Ventham dan Timothy Carlton (lahir Timothy Carlton Congdon Cumberbatch), keduanya aktor. Dia adalah cucu dari komandan kapal selam Henry Carlton Cumberbatch, dan cicit dari diplomat Henry Arnold Cumberbatch CMG. Cumberbatch bersekolah di Brambletye School dan Harrow School. Selama di Harrow, ia mendapat beasiswa seni dan melukis kanvas minyak besar. Itu juga tempat dia mulai berakting. Setelah menyelesaikan sekolah, dia mengambil cuti setahun untuk menjadi sukarelawan sebagai guru bahasa Inggris di sebuah biara Tibet di Darjeeling, India. Sekembalinya, ia belajar drama di Universitas Manchester. Dia melanjutkan pelatihannya sebagai aktor di London Academy of Music and Dramatic Art lulus dengan gelar MA dalam Akting Klasik. Pada saat dia menyelesaikan studinya, dia sudah memiliki agen.\r\n\r\nCumberbatch telah bekerja di teater, televisi, film dan radio. Terobosannya di layar lebar datang pada tahun 2004 ketika ia memerankan Stephen Hawking dalam film televisi Hawking (2004). Pada tahun 2010, ia menjadi nama rumah tangga sebagai Sherlock Holmes di serial televisi Inggris Sherlock (2010). Pada tahun 2011, ia muncul dalam dua film nominasi Oscar - War Horse (2011) dan Tinker Tailor Soldier Spy (2011). Dia mengikuti ini dengan peran yang diakui dalam film fiksi ilmiah Star Trek Into Darkness (2013), drama pemenang Oscar 12 Years a Slave (2013), The Fifth Estate (2013) dan Agustus: Osage County (2013). Pada tahun 2014, ia memerankan Alan Turing dalam The Imitation Game (2014) yang membuatnya mendapatkan Golden Globe, Screen Actors Guild Award, British Academy of Film and Television Arts dan nominasi Academy Award untuk Aktor Terbaik dalam Peran Utama.\r\n\r\nCumberbatch diangkat Commander of the Order of the British Empire (CBE) oleh Ratu Elizabeth II dalam Penghargaan Ulang Tahun 2015 atas jasanya pada seni pertunjukan dan amal.\r\n\r\nPertunangan Cumberbatch dengan sutradara teater dan opera Sophie Hunter, yang telah dikenalnya selama 17 tahun, diumumkan di bagian \"Pernikahan yang Akan Datang\" di surat kabar The Times pada 5 November 2014. Pada 14 Februari 2015, pasangan itu menikah pada abad ke-12. Gereja St. Peter dan St. Paul di Isle of Wight dilanjutkan dengan resepsi di Mottistone Manor. Mereka memiliki dua putra, Christopher Carlton (lahir 2015) dan Hal Auden (lahir 2017).\r\n', '1976-07-19', NULL, 'Actor', 'Inggris', 183, 'BenedictCumberbatch_List.jpg', NULL, 'https://twitter.com/cumberbitches?lang=en', 'https://www.instagram.com/benedictcumberbatch_221b/?hl=en', NULL, NULL),
(2, 'Keira Knightley', 'Keira Christina Knightley', 'Lahir di Inggris, Keira tumbuh sebagai anak dari seorang dramawan dan aktor. Pada usia tiga tahun Keira meminta untuk memiliki agen untuk memulai karir aktingnya;', 'Lahir di Inggris, Keira tumbuh sebagai anak dari seorang dramawan dan aktor. Pada usia tiga tahun Keira meminta untuk memiliki agen untuk memulai karir aktingnya; dan pada usia tiga tahun dia mendapatkan agen pertamanya dan tampil dalam peran pertamanya di televisi. Pada tahun 2001 Keira mendapat peran film pertamanya di Parminder Nagra. Setelah itu dia membintangi film hit kecil berjudul Bend it Like Beckham (2002). Pada tahun 2003 Keira mendapat peran sebagai Juliet dalam film Love Actually.\r\nPada tahun 2003 Keira mendapatkan salah satu perannya yang paling terkenal sebagai Elizabeth Swann di Pirates of the Caribbean: The Curse of the Black Pearl. Peran lain yang Keira dapatkan adalah dalam film seperti Star Wars: Episode 1 - The Phantom Menace (1999), King Arthur (2004), The Jacket (2005), Pride and Prejudice (2005), Pirates of the Caribbean: Dead Man\'s Chest ( 2006), Pirates of the Caribbean: At Worlds End (2007), Domino (2005), Atonement (2007), dll.', '1985-03-26', NULL, 'Actress', 'Inggris', 170, 'KeiraKnightley_List.jpg', NULL, NULL, 'https://www.instagram.com/keiraknightleyofficialpage/?hl=en', NULL, NULL),
(3, 'Matthew Goode', 'Matthew William Goode', 'Matthew William Goode (lahir 3 April 1978) adalah aktor Inggris. ', 'Matthew William Goode (lahir 3 April 1978) adalah aktor Inggris. Film-filmnya termasuk Chasing Liberty (2004), Match Point (2005), Imagine Me and You (2006), Brideshead Revisited (2008), Watchmen (2009), A Single Man (2009), Leap Year (2010), Stoker (2013 ) dan The Imitation Game (2014). Goode juga membintangi musim terakhir Downton Abbey dan dalam drama hukum CBS The Good Wife sebagai Finley \"Finn\" Polmar dari 2014 hingga 2015. Goode lahir di Exeter, Devon. Ayahnya adalah seorang ahli geologi dan ibunya, Jennifer, adalah seorang perawat dan sutradara teater amatir. Goode adalah anak bungsu dari lima bersaudara dengan saudara laki-laki, dua saudara tiri, dan saudara perempuan tiri, pembawa acara televisi Sally Meen, dari pernikahan ibunya sebelumnya. Ia dibesarkan di desa Clyst St. Mary, dekat Exeter.', '1978-03-04', NULL, 'Actor', 'Inggris', 188, 'MatthewGoode_List.jpg', NULL, NULL, NULL, NULL, NULL),
(4, 'James Marsh', 'James Marsh', 'Marsh memulai karir awalnya sebagai penyutradaraan dengan beberapa film dokumenter yang dibuat untuk BBC. ', 'Marsh memulai karir awalnya sebagai penyutradaraan dengan beberapa film dokumenter yang dibuat untuk BBC. Dokumenter TV pertamanya adalah Troubleman 90 menit – Tahun Terakhir Marvin Gaye, dan diikuti oleh film dokumenter 26 menit 1990 The Animator of Prague yang dibintangi Jan vankmajer dan karya-karyanya. Kemudian datang The Burger and the King: The Life and Cuisine of Elvis Presley, yang dibuat pada tahun 1995 dan dirilis pada tahun 1996, dan musisi Welsh John Cale, yang dibuat pada tahun 1998 dan dirilis pada tahun 1999. Hubungannya berlanjut dengan BBC sebagai seorang sutradara dan produser untuk tiga episode seri Arena, termasuk film terkenal Wisconsin Death Trip (1999).\r\n\r\nPada tahun 2005 ia menyutradarai film The King yang diputar di bagian Un Certain Regard di Festival Film Cannes 2005.\r\n\r\nPada tahun 2008 ia membuat film dokumenter Man on Wire, tentang perjalanan Philippe Petit di antara Menara Kembar World Trade Center di New York. Man on Wire berbasis Marsh, sebagian, pada memoar Philippe Petit To Reach the Clouds. Man on Wire memenangkan Academy Award untuk Best Documentary Feature di Oscar tahunan ke-81, BAFTA Award untuk film Inggris Terbaik, Independent Spirit Award, dan banyak lainnya. Film, yang disebut \"menggembirakan\", mendapat tanggapan yang sangat positif dari penonton dan termasuk di antara Sepuluh Film Teratas tahun 2008 dalam daftar banyak kritikus.\r\n\r\nPada tahun 2009, ia menyutradarai episode \"1980\" dari Red Riding, yang ditayangkan di Channel 4 di Inggris.\r\n\r\nDia juga menyutradarai Project Nim pada 2010, yang didasarkan pada buku Nim Chimpsky: The Chimp Who Will Be Human oleh Elizabeth Hess. Ini adalah film dokumenter tentang studi tengara yang dilakukan oleh Herbert S. Terrace tentang subjek akuisisi bahasa hewan dan subjek penelitian ini adalah simpanse bernama Nim Chimpsky. Marsh menonton berbagai film untuk mendapatkan inspirasi sebelum membuat Project Nim. Dia menonton E.T., Primate karya Frederick Wiseman, dan film Bresson Au hasard Balthazar. Ia memperoleh informasi paling banyak dari Au hasard Balthazar yang merupakan kisah fiktif tentang seekor keledai yang melewati berbagai pemilik manusia. Struktur Project Nim mencerminkan banyak hal dari film ini saat kita melihat drama dunia manusia melalui mata simpanse.\r\n\r\nPada 2012, ia menyutradarai Shadow Dancer, sebuah produksi bersama Irlandia/Inggris tentang gerakan republik Irlandia, yang difilmkan di Dublin dan London. Film ini menampilkan Clive Owen, Andrea Riseborough, Gillian Anderson, Domhnall Gleeson dan Aidan Gillen.\r\n\r\nMarsh menyutradarai The Theory of Everything yang dirilis pada tahun 2014, sebuah film biografi tentang Stephen Hawking yang dibintangi oleh Eddie Redmayne dan Felicity Jones. Marsh menerima nominasi BAFTA untuk Sutradara Terbaik dan film tersebut dinominasikan untuk lima Academy Awards termasuk Film Terbaik.', '1963-04-30', NULL, 'Director', 'Inggris', 183, 'JamesMarsh_List.jpg', NULL, 'https://twitter.com/Marshy00?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', NULL, NULL, NULL),
(5, 'Eddie Redmayne', 'Edward John David Redmayne', 'Aktor Inggris Eddie Redmayne memenangkan Academy Award untuk Aktor Terbaik (untuk The Theory of Everything (2014)).', 'Aktor Inggris Eddie Redmayne memenangkan Academy Award untuk Aktor Terbaik (untuk The Theory of Everything (2014)).\r\n\r\nEdward John David Redmayne lahir dan besar di London, Inggris, sebagai putra Patricia (Burke) dan Richard Charles Tunstall Redmayne, seorang pengusaha. Kakek buyutnya adalah Sir Richard Augustine Studdert Redmayne, seorang insinyur sipil dan pertambangan terkenal. Dia memiliki keturunan Inggris, Irlandia, Skotlandia dan Welsh. Redmayne adalah satu-satunya anggota keluarganya yang mengikuti karir akting, dan juga menjadi model selama masa remajanya. Dia dididik di Eton College sebelum melanjutkan ke Trinity College, Cambridge, di mana dia belajar Sejarah Seni. Didorong oleh orang tuanya, Redmayne mengambil pelajaran drama sejak usia muda. Penampilan panggung pertamanya adalah dalam produksi Sam Mendes dari \"Oliver!\", di West End London. Dia berperan sebagai anak pekerja rumahan. Akting berlanjut melalui sekolah dan universitas, termasuk tampil dengan Teater Musik Pemuda Nasional.\r\n\r\nPertunjukan panggung profesional pertama Redmayne datang pada tahun 2002 di Teater Globe Shakespeare di mana ia memainkan Viola di \"Twelfth Night\". Pada tahun 2004, ia memenangkan Evening Standard Outstanding Newcomer Award yang bergengsi untuk karyanya dalam drama Edward Albee \"The Goat\". Kesuksesan panggung selanjutnya menyusul, dan pada 2009, ia membintangi \"Red\" karya John Logan di Donmar Warehouse di London. Dia memenangkan pujian kritis besar untuk perannya, memenangkan Oliver Award untuk Aktor Terbaik dalam Peran Pendukung. Drama tersebut dipindahkan ke Broadway pada tahun 2010, dan Redmayne kemudian memenangkan Tony Award untuk Penampilan Terbaik oleh Aktor Unggulan dalam Drama.\r\n\r\nDi samping karir panggungnya, Redmayne telah bekerja dengan mantap di televisi dan film. Proyek terkenal termasuk The Good Shepherd (2006) karya Robert De Niro, Elizabeth: The Golden Age (2007), Tess of the D\'Urbervilles (2008), The Pillars of the Earth (2010) dan My Week with Marilyn (2011). Dia ikut berperan sebagai Marius Pontmercy dalam musikal Les Misérables (2012). Dia berperan sebagai ilmuwan Stephen Hawking dalam drama biografi The Theory of Everything (2014), berlawanan dengan Felicity Jones, sebagai istri Stephen, Jane Hawking. Untuk penampilannya, Redmayne memenangkan beberapa penghargaan, termasuk Academy Award untuk Aktor Terbaik. Dengan demikian, ia menjadi orang pertama yang lahir pada 1980-an yang memenangkan Oscar akting. Dia menerima pujian kritis lebih lanjut untuk perannya sebagai Lili Elbe, salah satu penerima operasi penggantian kelamin pertama yang diketahui, di The Danish Girl (2015). Untuk penampilannya, ia dinominasikan untuk beberapa penghargaan, termasuk Academy Award untuk Aktor Terbaik.\r\n\r\nPada tahun 2014, Redmayne menikah dengan jurnalis bernama Hannah Bagshawe.', '1982-01-06', NULL, 'Actor', 'Inggris', 184, 'EddieRedmayne_List.jpg', NULL, 'https://twitter.com/eddieronline', NULL, NULL, NULL),
(6, 'Fecility Jones', 'Felicity Rose Hadley Jones', 'Felicity Rose Hadley Jones adalah seorang aktris dan produser Inggris. Jones memulai karir akting profesionalnya sebagai seorang anak, muncul pada usia 12 di The Treasure Seekers (1996). ', 'Felicity Rose Hadley Jones adalah seorang aktris dan produser Inggris. Jones memulai karir akting profesionalnya sebagai seorang anak, muncul pada usia 12 di The Treasure Seekers (1996). Dia melanjutkan untuk bermain Ethel Hallow untuk satu seri di acara televisi The Worst Witch dan sekuelnya Weirdsister College. Setelah Kings Norton Girls School, Jones menghadiri King Edward VI Handsworth School, untuk menyelesaikan A Levels dan melanjutkan untuk mengambil jeda tahun (di mana ia muncul dalam serial BBC Servants (2003)). Dia mengambil cuti dari akting untuk bersekolah selama tahun-tahun pembentukannya, dan telah bekerja dengan mantap sejak dia lulus dengan 2: 1 dari Wadham College, Oxford pada 2006, di mana dia membaca bahasa Inggris. Saat belajar bahasa Inggris, ia muncul dalam drama siswa, termasuk Attis di mana ia memainkan peran judul, dan, pada tahun 2005, \"Komedi Kesalahan\" Shakespeare untuk tur musim panas OUDS ke Jepang, dibintangi bersama Harry Lloyd.', '1983-10-17', NULL, 'Actress', 'Inggris', 160, 'FecilityJones_List.jpg', NULL, NULL, NULL, NULL, NULL),
(7, 'Maxine Peake', 'Maxine Peake', 'Maxine Peake adalah aktris panggung, radio, film dan televisi Inggris, yang membuat namanya sebagai Twinkle dalam sitkom Victoria Wood\'s Dinnerladies. ', 'Maxine Peake adalah aktris panggung, radio, film dan televisi Inggris, yang membuat namanya sebagai Twinkle dalam sitkom Victoria Wood\'s Dinnerladies. Sejak saat itu dia berperan sebagai Veronica dalam serial drama berbasis di Manchester Channel 4 Shameless, pengacara Martha Costello dalam drama hukum BBC Silk dan Grace Middleton di The Village. Dia juga seorang aktris panggung ulung, telah memainkan peran judul di Hamlet, dan memiliki peran dalam film 2014 The Theory of Everything.\r\n\r\nPeake telah muncul di sejumlah produksi televisi dan panggung termasuk Dinnerladies Victoria Wood, Shameless Channel 4, dalam peran utama pengacara Martha Costello dalam drama hukum BBC Silk dan bersama John Simm dalam drama BBC The Village, menggambarkan kehidupan di Derbyshire desa selama Perang Dunia Pertama. Mengikuti saran karir dari Victoria Wood, di antara dua seri Dinnerladies, Peake kehilangan begitu banyak bobot sehingga penjelasan harus ditulis ke dalam naskah untuk karakternya, Twinkle.\r\n\r\nPeake memerankan pembunuh Moor Myra Hindley di See No Evil: The Moors Murders. Disiarkan pada Mei 2006, itu disambut dengan reaksi beragam; segera setelah Peake ini mengumumkan bahwa dia akan meninggalkan Shameless. Januari 2009 Peake muncul dalam peran film fitur utama pertamanya, sebagai Angela, dalam film Clubbed.', '1974-07-14', NULL, 'Actress', 'Inggris', 170, 'MaxinePeake_List.jpg', NULL, 'https://twitter.com/mpeakeofficial', 'https://www.instagram.com/betteblavatsky/', NULL, NULL),
(17, 'Benedict Cumberbatch', 'Benedict Timothy Carlton Cumberbatch', 'Benedict Timothy Carlton Cumberbatch lahir dan besar di London, Inggris. Orang tuanya, Wanda Ventham dan Timothy Carlton (lahir Timothy Carlton Congdon Cumberbatch), keduanya aktor. ', 'Benedict Timothy Carlton Cumberbatch lahir dan besar di London, Inggris. Orang tuanya, Wanda Ventham dan Timothy Carlton (lahir Timothy Carlton Congdon Cumberbatch), keduanya aktor. Dia adalah cucu dari komandan kapal selam Henry Carlton Cumberbatch, dan cicit dari diplomat Henry Arnold Cumberbatch CMG. Cumberbatch bersekolah di Brambletye School dan Harrow School. Selama di Harrow, ia mendapat beasiswa seni dan melukis kanvas minyak besar. Itu juga tempat dia mulai berakting. Setelah menyelesaikan sekolah, dia mengambil cuti setahun untuk menjadi sukarelawan sebagai guru bahasa Inggris di sebuah biara Tibet di Darjeeling, India. Sekembalinya, ia belajar drama di Universitas Manchester. Dia melanjutkan pelatihannya sebagai aktor di London Academy of Music and Dramatic Art lulus dengan gelar MA dalam Akting Klasik. Pada saat dia menyelesaikan studinya, dia sudah memiliki agen.\r\n\r\nCumberbatch telah bekerja di teater, televisi, film dan radio. Terobosannya di layar lebar datang pada tahun 2004 ketika ia memerankan Stephen Hawking dalam film televisi Hawking (2004). Pada tahun 2010, ia menjadi nama rumah tangga sebagai Sherlock Holmes di serial televisi Inggris Sherlock (2010). Pada tahun 2011, ia muncul dalam dua film nominasi Oscar - War Horse (2011) dan Tinker Tailor Soldier Spy (2011). Dia mengikuti ini dengan peran yang diakui dalam film fiksi ilmiah Star Trek Into Darkness (2013), drama pemenang Oscar 12 Years a Slave (2013), The Fifth Estate (2013) dan Agustus: Osage County (2013). Pada tahun 2014, ia memerankan Alan Turing dalam The Imitation Game (2014) yang membuatnya mendapatkan Golden Globe, Screen Actors Guild Award, British Academy of Film and Television Arts dan nominasi Academy Award untuk Aktor Terbaik dalam Peran Utama.\r\n\r\nCumberbatch diangkat Commander of the Order of the British Empire (CBE) oleh Ratu Elizabeth II dalam Penghargaan Ulang Tahun 2015 atas jasanya pada seni pertunjukan dan amal.\r\n\r\nPertunangan Cumberbatch dengan sutradara teater dan opera Sophie Hunter, yang telah dikenalnya selama 17 tahun, diumumkan di bagian \"Pernikahan yang Akan Datang\" di surat kabar The Times pada 5 November 2014. Pada 14 Februari 2015, pasangan itu menikah pada abad ke-12. Gereja St. Peter dan St. Paul di Isle of Wight dilanjutkan dengan resepsi di Mottistone Manor. Mereka memiliki dua putra, Christopher Carlton (lahir 2015) dan Hal Auden (lahir 2017).\r\n', '1976-07-19', NULL, 'Actor', 'Inggris', 183, 'BenedictCumberbatch_List.jpg', NULL, 'https://twitter.com/cumberbitches?lang=en', 'https://www.instagram.com/benedictcumberbatch_221b/?hl=en', NULL, NULL),
(18, 'Keira Knightley', 'Keira Christina Knightley', 'Lahir di Inggris, Keira tumbuh sebagai anak dari seorang dramawan dan aktor. Pada usia tiga tahun Keira meminta untuk memiliki agen untuk memulai karir aktingnya;', 'Lahir di Inggris, Keira tumbuh sebagai anak dari seorang dramawan dan aktor. Pada usia tiga tahun Keira meminta untuk memiliki agen untuk memulai karir aktingnya; dan pada usia tiga tahun dia mendapatkan agen pertamanya dan tampil dalam peran pertamanya di televisi. Pada tahun 2001 Keira mendapat peran film pertamanya di Parminder Nagra. Setelah itu dia membintangi film hit kecil berjudul Bend it Like Beckham (2002). Pada tahun 2003 Keira mendapat peran sebagai Juliet dalam film Love Actually.\r\nPada tahun 2003 Keira mendapatkan salah satu perannya yang paling terkenal sebagai Elizabeth Swann di Pirates of the Caribbean: The Curse of the Black Pearl. Peran lain yang Keira dapatkan adalah dalam film seperti Star Wars: Episode 1 - The Phantom Menace (1999), King Arthur (2004), The Jacket (2005), Pride and Prejudice (2005), Pirates of the Caribbean: Dead Man\'s Chest ( 2006), Pirates of the Caribbean: At Worlds End (2007), Domino (2005), Atonement (2007), dll.', '1985-03-26', NULL, 'Actress', 'Inggris', 170, 'KeiraKnightley_List.jpg', NULL, NULL, 'https://www.instagram.com/keiraknightleyofficialpage/?hl=en', NULL, NULL),
(19, 'Matthew Goode', 'Matthew William Goode', 'Matthew William Goode (lahir 3 April 1978) adalah aktor Inggris. ', 'Matthew William Goode (lahir 3 April 1978) adalah aktor Inggris. Film-filmnya termasuk Chasing Liberty (2004), Match Point (2005), Imagine Me and You (2006), Brideshead Revisited (2008), Watchmen (2009), A Single Man (2009), Leap Year (2010), Stoker (2013 ) dan The Imitation Game (2014). Goode juga membintangi musim terakhir Downton Abbey dan dalam drama hukum CBS The Good Wife sebagai Finley \"Finn\" Polmar dari 2014 hingga 2015. Goode lahir di Exeter, Devon. Ayahnya adalah seorang ahli geologi dan ibunya, Jennifer, adalah seorang perawat dan sutradara teater amatir. Goode adalah anak bungsu dari lima bersaudara dengan saudara laki-laki, dua saudara tiri, dan saudara perempuan tiri, pembawa acara televisi Sally Meen, dari pernikahan ibunya sebelumnya. Ia dibesarkan di desa Clyst St. Mary, dekat Exeter.', '1978-03-04', NULL, 'Actor', 'Inggris', 188, 'MatthewGoode_List.jpg', NULL, NULL, NULL, NULL, NULL),
(20, 'James Marsh', 'James Marsh', 'Marsh memulai karir awalnya sebagai penyutradaraan dengan beberapa film dokumenter yang dibuat untuk BBC. ', 'Marsh memulai karir awalnya sebagai penyutradaraan dengan beberapa film dokumenter yang dibuat untuk BBC. Dokumenter TV pertamanya adalah Troubleman 90 menit – Tahun Terakhir Marvin Gaye, dan diikuti oleh film dokumenter 26 menit 1990 The Animator of Prague yang dibintangi Jan vankmajer dan karya-karyanya. Kemudian datang The Burger and the King: The Life and Cuisine of Elvis Presley, yang dibuat pada tahun 1995 dan dirilis pada tahun 1996, dan musisi Welsh John Cale, yang dibuat pada tahun 1998 dan dirilis pada tahun 1999. Hubungannya berlanjut dengan BBC sebagai seorang sutradara dan produser untuk tiga episode seri Arena, termasuk film terkenal Wisconsin Death Trip (1999).\r\n\r\nPada tahun 2005 ia menyutradarai film The King yang diputar di bagian Un Certain Regard di Festival Film Cannes 2005.\r\n\r\nPada tahun 2008 ia membuat film dokumenter Man on Wire, tentang perjalanan Philippe Petit di antara Menara Kembar World Trade Center di New York. Man on Wire berbasis Marsh, sebagian, pada memoar Philippe Petit To Reach the Clouds. Man on Wire memenangkan Academy Award untuk Best Documentary Feature di Oscar tahunan ke-81, BAFTA Award untuk film Inggris Terbaik, Independent Spirit Award, dan banyak lainnya. Film, yang disebut \"menggembirakan\", mendapat tanggapan yang sangat positif dari penonton dan termasuk di antara Sepuluh Film Teratas tahun 2008 dalam daftar banyak kritikus.\r\n\r\nPada tahun 2009, ia menyutradarai episode \"1980\" dari Red Riding, yang ditayangkan di Channel 4 di Inggris.\r\n\r\nDia juga menyutradarai Project Nim pada 2010, yang didasarkan pada buku Nim Chimpsky: The Chimp Who Will Be Human oleh Elizabeth Hess. Ini adalah film dokumenter tentang studi tengara yang dilakukan oleh Herbert S. Terrace tentang subjek akuisisi bahasa hewan dan subjek penelitian ini adalah simpanse bernama Nim Chimpsky. Marsh menonton berbagai film untuk mendapatkan inspirasi sebelum membuat Project Nim. Dia menonton E.T., Primate karya Frederick Wiseman, dan film Bresson Au hasard Balthazar. Ia memperoleh informasi paling banyak dari Au hasard Balthazar yang merupakan kisah fiktif tentang seekor keledai yang melewati berbagai pemilik manusia. Struktur Project Nim mencerminkan banyak hal dari film ini saat kita melihat drama dunia manusia melalui mata simpanse.\r\n\r\nPada 2012, ia menyutradarai Shadow Dancer, sebuah produksi bersama Irlandia/Inggris tentang gerakan republik Irlandia, yang difilmkan di Dublin dan London. Film ini menampilkan Clive Owen, Andrea Riseborough, Gillian Anderson, Domhnall Gleeson dan Aidan Gillen.\r\n\r\nMarsh menyutradarai The Theory of Everything yang dirilis pada tahun 2014, sebuah film biografi tentang Stephen Hawking yang dibintangi oleh Eddie Redmayne dan Felicity Jones. Marsh menerima nominasi BAFTA untuk Sutradara Terbaik dan film tersebut dinominasikan untuk lima Academy Awards termasuk Film Terbaik.', '1963-04-30', NULL, 'Director', 'Inggris', 183, 'JamesMarsh_List.jpg', NULL, 'https://twitter.com/Marshy00?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', NULL, NULL, NULL),
(21, 'Eddie Redmayne', 'Edward John David Redmayne', 'Aktor Inggris Eddie Redmayne memenangkan Academy Award untuk Aktor Terbaik (untuk The Theory of Everything (2014)).', 'Aktor Inggris Eddie Redmayne memenangkan Academy Award untuk Aktor Terbaik (untuk The Theory of Everything (2014)).\r\n\r\nEdward John David Redmayne lahir dan besar di London, Inggris, sebagai putra Patricia (Burke) dan Richard Charles Tunstall Redmayne, seorang pengusaha. Kakek buyutnya adalah Sir Richard Augustine Studdert Redmayne, seorang insinyur sipil dan pertambangan terkenal. Dia memiliki keturunan Inggris, Irlandia, Skotlandia dan Welsh. Redmayne adalah satu-satunya anggota keluarganya yang mengikuti karir akting, dan juga menjadi model selama masa remajanya. Dia dididik di Eton College sebelum melanjutkan ke Trinity College, Cambridge, di mana dia belajar Sejarah Seni. Didorong oleh orang tuanya, Redmayne mengambil pelajaran drama sejak usia muda. Penampilan panggung pertamanya adalah dalam produksi Sam Mendes dari \"Oliver!\", di West End London. Dia berperan sebagai anak pekerja rumahan. Akting berlanjut melalui sekolah dan universitas, termasuk tampil dengan Teater Musik Pemuda Nasional.\r\n\r\nPertunjukan panggung profesional pertama Redmayne datang pada tahun 2002 di Teater Globe Shakespeare di mana ia memainkan Viola di \"Twelfth Night\". Pada tahun 2004, ia memenangkan Evening Standard Outstanding Newcomer Award yang bergengsi untuk karyanya dalam drama Edward Albee \"The Goat\". Kesuksesan panggung selanjutnya menyusul, dan pada 2009, ia membintangi \"Red\" karya John Logan di Donmar Warehouse di London. Dia memenangkan pujian kritis besar untuk perannya, memenangkan Oliver Award untuk Aktor Terbaik dalam Peran Pendukung. Drama tersebut dipindahkan ke Broadway pada tahun 2010, dan Redmayne kemudian memenangkan Tony Award untuk Penampilan Terbaik oleh Aktor Unggulan dalam Drama.\r\n\r\nDi samping karir panggungnya, Redmayne telah bekerja dengan mantap di televisi dan film. Proyek terkenal termasuk The Good Shepherd (2006) karya Robert De Niro, Elizabeth: The Golden Age (2007), Tess of the D\'Urbervilles (2008), The Pillars of the Earth (2010) dan My Week with Marilyn (2011). Dia ikut berperan sebagai Marius Pontmercy dalam musikal Les Misérables (2012). Dia berperan sebagai ilmuwan Stephen Hawking dalam drama biografi The Theory of Everything (2014), berlawanan dengan Felicity Jones, sebagai istri Stephen, Jane Hawking. Untuk penampilannya, Redmayne memenangkan beberapa penghargaan, termasuk Academy Award untuk Aktor Terbaik. Dengan demikian, ia menjadi orang pertama yang lahir pada 1980-an yang memenangkan Oscar akting. Dia menerima pujian kritis lebih lanjut untuk perannya sebagai Lili Elbe, salah satu penerima operasi penggantian kelamin pertama yang diketahui, di The Danish Girl (2015). Untuk penampilannya, ia dinominasikan untuk beberapa penghargaan, termasuk Academy Award untuk Aktor Terbaik.\r\n\r\nPada tahun 2014, Redmayne menikah dengan jurnalis bernama Hannah Bagshawe.', '1982-01-06', NULL, 'Actor', 'Inggris', 184, 'EddieRedmayne_List.jpg', NULL, 'https://twitter.com/eddieronline', NULL, NULL, NULL),
(22, 'Fecility Jones', 'Felicity Rose Hadley Jones', 'Felicity Rose Hadley Jones adalah seorang aktris dan produser Inggris. Jones memulai karir akting profesionalnya sebagai seorang anak, muncul pada usia 12 di The Treasure Seekers (1996). ', 'Felicity Rose Hadley Jones adalah seorang aktris dan produser Inggris. Jones memulai karir akting profesionalnya sebagai seorang anak, muncul pada usia 12 di The Treasure Seekers (1996). Dia melanjutkan untuk bermain Ethel Hallow untuk satu seri di acara televisi The Worst Witch dan sekuelnya Weirdsister College. Setelah Kings Norton Girls School, Jones menghadiri King Edward VI Handsworth School, untuk menyelesaikan A Levels dan melanjutkan untuk mengambil jeda tahun (di mana ia muncul dalam serial BBC Servants (2003)). Dia mengambil cuti dari akting untuk bersekolah selama tahun-tahun pembentukannya, dan telah bekerja dengan mantap sejak dia lulus dengan 2: 1 dari Wadham College, Oxford pada 2006, di mana dia membaca bahasa Inggris. Saat belajar bahasa Inggris, ia muncul dalam drama siswa, termasuk Attis di mana ia memainkan peran judul, dan, pada tahun 2005, \"Komedi Kesalahan\" Shakespeare untuk tur musim panas OUDS ke Jepang, dibintangi bersama Harry Lloyd.', '1983-10-17', NULL, 'Actress', 'Inggris', 160, 'FecilityJones_List.jpg', NULL, NULL, NULL, NULL, NULL),
(23, 'Maxine Peake', 'Maxine Peake', 'Maxine Peake adalah aktris panggung, radio, film dan televisi Inggris, yang membuat namanya sebagai Twinkle dalam sitkom Victoria Wood\'s Dinnerladies. ', 'Maxine Peake adalah aktris panggung, radio, film dan televisi Inggris, yang membuat namanya sebagai Twinkle dalam sitkom Victoria Wood\'s Dinnerladies. Sejak saat itu dia berperan sebagai Veronica dalam serial drama berbasis di Manchester Channel 4 Shameless, pengacara Martha Costello dalam drama hukum BBC Silk dan Grace Middleton di The Village. Dia juga seorang aktris panggung ulung, telah memainkan peran judul di Hamlet, dan memiliki peran dalam film 2014 The Theory of Everything.\r\n\r\nPeake telah muncul di sejumlah produksi televisi dan panggung termasuk Dinnerladies Victoria Wood, Shameless Channel 4, dalam peran utama pengacara Martha Costello dalam drama hukum BBC Silk dan bersama John Simm dalam drama BBC The Village, menggambarkan kehidupan di Derbyshire desa selama Perang Dunia Pertama. Mengikuti saran karir dari Victoria Wood, di antara dua seri Dinnerladies, Peake kehilangan begitu banyak bobot sehingga penjelasan harus ditulis ke dalam naskah untuk karakternya, Twinkle.\r\n\r\nPeake memerankan pembunuh Moor Myra Hindley di See No Evil: The Moors Murders. Disiarkan pada Mei 2006, itu disambut dengan reaksi beragam; segera setelah Peake ini mengumumkan bahwa dia akan meninggalkan Shameless. Januari 2009 Peake muncul dalam peran film fitur utama pertamanya, sebagai Angela, dalam film Clubbed.', '1974-07-14', NULL, 'Actress', 'Inggris', 170, 'MaxinePeake_List.jpg', NULL, 'https://twitter.com/mpeakeofficial', 'https://www.instagram.com/betteblavatsky/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `user_id`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 3, 'Et quo quidem ut accusamus molestiae qui et. Enim dolores aperiam sint consequuntur voluptatibus dolor fugit praesentium.', 'Quis ut veritatis incidunt fugit.', '2021-04-21 03:00:00', '2021-04-21 03:00:00'),
(2, 4, 9, 'Qui quia laudantium nobis ut repellendus modi qui. Dolorum neque ab ipsa et. Consequuntur qui voluptas similique et.', 'Sequi iure officiis ratione quae.', '2021-04-22 03:00:00', '2021-04-22 03:00:00'),
(3, 4, 4, 'Consequatur impedit magnam ut ipsa. Dolor tenetur et ex rerum voluptatem qui. Dolore sint nesciunt repellendus dolor dicta ipsa vero.', 'Ipsa quaerat est qui.', '2021-04-23 03:00:00', '2021-04-23 03:00:00'),
(4, 4, 8, 'Sed laudantium libero aspernatur. Natus totam aliquam mollitia facere ut itaque laborum. Voluptates odit repellat doloremque ut deleniti exercitationem ut. Velit expedita atque doloremque ipsam.', 'Unde est quis nulla unde.', '2021-04-24 03:00:00', '2021-04-24 03:00:00'),
(5, 7, 7, 'Numquam quibusdam delectus ut qui. Ullam non omnis illum assumenda rerum quas. Eius non perspiciatis molestias dolor optio.', 'Odit maiores ipsa quidem quaerat.', '2021-04-25 03:00:00', '2021-04-25 03:00:00'),
(6, 9, 6, 'Aut nobis quo sed. Ex quia praesentium et est eligendi. Explicabo sunt molestias commodi ipsam atque ea. Autem ratione molestiae amet et consequatur neque rerum.', 'Ipsam qui quia ad non omnis iure.', '2021-04-26 03:00:00', '2021-04-26 03:00:00'),
(7, 10, 1, 'Laborum voluptatem porro aut. Officiis vel in eos soluta magnam culpa ut aliquid. Aliquam ut quo error delectus. Iusto non quibusdam similique rerum.', 'Dicta et vel sed molestiae et.', '2021-04-27 03:00:00', '2021-04-27 03:00:00'),
(8, 1, 3, 'Rem quasi hic assumenda recusandae. Est consequuntur quis architecto harum fuga ex. Omnis natus nihil ratione at aperiam.', 'Est sint vitae iure.', '2021-04-28 03:00:00', '2021-04-28 03:00:00'),
(9, 6, 3, 'Inventore reprehenderit porro maiores ipsa placeat quos sed qui. Vitae natus rerum ad aliquid. Ea voluptas dolores ea ipsam ipsam voluptas. Esse non est quia iusto officia numquam.', 'Labore quia libero aliquid.', '2021-04-29 03:00:00', '2021-04-29 03:00:00'),
(10, 2, 8, 'Praesentium provident repellat sequi rerum. Quis officiis est voluptatibus dolor optio vitae et ratione. Quos eum qui tenetur vel. Officiis sed ut debitis et quo ea cumque alias.', 'Magni qui iusto suscipit ut.', '2021-04-30 03:00:00', '2021-04-30 03:00:00');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `movie_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `movie_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 6, '2021-04-21 03:00:00', '2021-04-21 03:00:00'),
(2, 7, 3, '2021-04-22 03:00:00', '2021-04-22 03:00:00'),
(3, 7, 7, '2021-04-23 03:00:00', '2021-04-23 03:00:00'),
(4, 5, 1, '2021-04-24 03:00:00', '2021-04-24 03:00:00'),
(5, 1, 9, '2021-04-25 03:00:00', '2021-04-25 03:00:00'),
(6, 9, 8, '2021-04-26 03:00:00', '2021-04-26 03:00:00'),
(7, 4, 6, '2021-04-27 03:00:00', '2021-04-27 03:00:00'),
(8, 1, 6, '2021-04-28 03:00:00', '2021-04-28 03:00:00'),
(9, 1, 8, '2021-04-29 03:00:00', '2021-04-29 03:00:00'),
(10, 1, 3, '2021-04-30 03:00:00', '2021-04-30 03:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fantasy', 'active', NULL, NULL),
(2, 'Mystery', 'active', NULL, NULL),
(3, 'Romance', 'active', NULL, NULL),
(4, 'Biography', 'active', NULL, NULL);

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
(4, '2021_05_27_184416_create_genres_table', 1),
(5, '2021_05_27_184420_create_movies_table', 1),
(6, '2021_05_27_190724_create_celebrities_table', 1),
(7, '2021_05_27_193859_create_categories_table', 1),
(8, '2021_05_27_193911_create_blogs_table', 1),
(9, '2021_05_27_194118_create_comments_table', 1),
(10, '2021_05_27_195107_create_casts_table', 1),
(11, '2021_05_27_195301_create_photos_table', 1),
(12, '2021_05_27_195507_create_videos_table', 1),
(13, '2021_05_27_204450_create_favorites_table', 1),
(14, '2021_05_28_030841_create_reviews_table', 1),
(15, '2021_05_29_104007_create_permission_tables', 1),
(85, '2014_10_12_000000_create_users_table', 1),
(86, '2014_10_12_100000_create_password_resets_table', 1),
(87, '2019_08_19_000000_create_failed_jobs_table', 1),
(88, '2021_05_28_105941_create_genres_table', 1),
(89, '2021_05_28_110011_create_movies_table', 1),
(90, '2021_05_28_110026_create_celebrities_table', 1),
(91, '2021_05_28_110044_create_categories_table', 1),
(92, '2021_05_28_110058_create_blogs_table', 1),
(93, '2021_05_28_110111_create_comments_table', 1),
(94, '2021_05_28_110122_create_casts_table', 1),
(95, '2021_05_28_110135_create_photos_table', 1),
(96, '2021_05_28_110200_create_videos_table', 1),
(97, '2021_05_28_110238_create_favorites_table', 1),
(98, '2021_05_28_110252_create_reviews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 10),
(2, 'App\\Models\\User', 11);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `run_time` int(10) UNSIGNED NOT NULL,
  `mmpa_ratings` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` double(2,1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `genre_id`, `title`, `excerpt`, `body`, `image`, `trailer`, `status`, `release_date`, `country`, `run_time`, `mmpa_ratings`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 'Aladdin', 'Cerita Aladdin versi live-action masih tetap sama dengan Aladdin terdahulu, mengisahkan seorang yatim piatu bernama Aladdin (Mena Massoud) yang bertahan hidup menjadi seorang pencuri di pasar. ', 'Cerita Aladdin versi live-action masih tetap sama dengan Aladdin terdahulu, mengisahkan seorang yatim piatu bernama Aladdin (Mena Massoud) yang bertahan hidup menjadi seorang pencuri di pasar. Ia jatuh cinta dengan seorang putri dari Agrabah bernama Jasmine (Naomi Scott). Ketahuan memiliki kemampuan mencuri, Jafar (Marwan Kenzari) yang merupakan Perdana Mentri Agrabah kemudian membawa Aladdin ke suatu gua berisikan emas. Aladdin diperintahkan mencari lampu ajaib berisi jin bernama Genie (Will Smith). Setelah berhasil ditemukan, Genie akan memenuhi tiga permintaan Aladdin.  Membangun Sirkus Satu di antara permintaan Aladdin adalah menjadi seorang pangeran. Kisah cinta Aladdin dan Jasmine tentunya dipenuhi banyak hal ajaib. Akan tetapi, Aladdin dan monyetnya, Abu, harus melindungi lampu Genie dari niat jahat Jafar dan sang burung beo yang ingin memerintah Agrabah lewat perantara jin. Berhasilkah usaha Aladdin melindungi lampu ajaib Genie? Lalu, apa saja dua permintaan terakhir Aladdin pada Genie?', 'mvsingle1.jpg', 'https://www.youtube.com/embed/foyufD52aog', 'published', '2021-06-24', 'Amerika Serikat', 128, 'PG', 8.0, NULL, NULL),
(2, 2, 'Happy Death Day', 'Theresa ”Tree” Gelbman merupakan mahasiswi yang memiliki karakter angkuh, sombong dan tidak memiliki rasa empati. Suatu pagi, Tree terbangun di kamar asrama yang dihuni oleh Carter setelah di malam sebelumnya dirinya terlalu banyak minum.', 'Theresa ”Tree” Gelbman merupakan mahasiswi yang memiliki karakter angkuh, sombong dan tidak memiliki rasa empati. Suatu pagi, Tree terbangun di kamar asrama yang dihuni oleh Carter setelah di malam sebelumnya dirinya terlalu banyak minum. Tree kemudian kembali ke asramanya dan sesampainya di kamarnya Tree mendapatkan sebuah kue mangkuk cupcake) dari teman satu kamarnya, Lori sebagai hadiah ulangtahun. Ini adalah hari ulang tahun Tree. Malamnya, Tree pergi ke sebuah pesta dan di tengah jalan, dia bertemu rombongan pendukung tim olahraga kampusnya, Universitas Bayley.Salah satu pendukung tim itu mengenakan topeng dan terus mengawasinya.', 'mvsingle2.jpg', 'https://www.youtube.com/embed/wiPD9X43knU', 'published', '2021-06-24', 'Amerika Serikat', 96, 'PG-13', 7.0, NULL, NULL),
(3, 2, 'Me Before You', 'Louisa \"Lou\" Clark (Emilia Clarke) yang muda dan unik berpindah dari satu pekerjaan ke pekerjaan berikutnya untuk membantu keluarganya memenuhi kebutuhan. ', 'Louisa \"Lou\" Clark (Emilia Clarke) yang muda dan unik berpindah dari satu pekerjaan ke pekerjaan berikutnya untuk membantu keluarganya memenuhi kebutuhan. Sikap cerianya diuji ketika dia menjadi pengasuh Will Traynor (Sam Claflin), seorang bankir muda kaya yang lumpuh karena kecelakaan dua tahun sebelumnya. Pandangan sinis Will mulai berubah ketika Louisa menunjukkan kepadanya bahwa hidup itu layak dijalani. Saat ikatan mereka semakin dalam, hidup dan hati mereka berubah dengan cara yang tidak dapat dibayangkan oleh siapa pun.', 'mvsingle3.jpg', 'https://www.youtube.com/embed/Eh993__rOxA', 'published', '2016-08-27', 'Inggris', 106, 'PG-13', 7.5, NULL, NULL),
(4, 4, 'The Imitation Game', 'Pada tahun 1939, badan intelijen Inggris yang baru dibentuk MI6 merekrut alumnus matematika Cambridge Alan Turing (Benedict Cumberbatch) untuk memecahkan kode Nazi,', 'Pada tahun 1939, badan intelijen Inggris yang baru dibentuk MI6 merekrut alumnus matematika Cambridge Alan Turing (Benedict Cumberbatch) untuk memecahkan kode Nazi, termasuk Enigma -- yang menurut para cryptanalyst tidak dapat dipecahkan. Tim Turing, termasuk Joan Clarke (Keira Knightley), menganalisis pesan Enigma saat dia membangun mesin untuk menguraikannya. Turing dan tim akhirnya berhasil dan menjadi pahlawan, tetapi pada tahun 1952, si jenius yang pendiam menghadapi aib ketika pihak berwenang mengungkapkan bahwa dia gay dan mengirimnya ke penjara.', 'mvsingle4.jpg', 'https://www.youtube.com/embed/nuPZUUED5uk', 'published', '2014-08-29', 'Inggris', 114, 'PG-13', 6.0, NULL, NULL),
(5, 4, 'The Theory of Everything', 'Pada 1960-an, mahasiswa Universitas Cambridge dan fisikawan masa depan Stephen Hawking (Eddie Redmayne) jatuh cinta dengan rekan kuliahnya Jane Wilde (Felicity Jones).', 'Pada 1960-an, mahasiswa Universitas Cambridge dan fisikawan masa depan Stephen Hawking (Eddie Redmayne) jatuh cinta dengan rekan kuliahnya Jane Wilde (Felicity Jones). Pada usia 21, Hawking mengetahui bahwa ia memiliki penyakit neuron motorik. Meskipun demikian - dan dengan Jane di sisinya - dia memulai studi waktu yang ambisius, yang hanya tersisa sedikit, menurut dokternya. Dia dan Jane menentang rintangan yang mengerikan dan membuka jalan baru di bidang kedokteran dan sains, mencapai lebih dari yang bisa diharapkan untuk dibayangkan.', 'mvsingle5.jpg', 'https://www.youtube.com/embed/Salz7uGp72c', 'published', '2014-09-07', 'Inggris', 123, 'PG-13', 8.5, NULL, NULL);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_nml` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_id` bigint(20) UNSIGNED NOT NULL,
  `celebrity_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image_nml`, `movie_id`, `celebrity_id`, `created_at`, `updated_at`) VALUES
(1, 'image150jpg', 5, 8, '2021-04-21 03:00:00', '2021-04-21 03:00:00'),
(2, 'image152jpg', 4, 1, '2021-04-22 03:00:00', '2021-04-22 03:00:00'),
(3, 'image145jpg', 8, 10, '2021-04-23 03:00:00', '2021-04-23 03:00:00'),
(4, 'image130jpg', 9, 10, '2021-04-24 03:00:00', '2021-04-24 03:00:00'),
(5, 'image153jpg', 9, 5, '2021-04-25 03:00:00', '2021-04-25 03:00:00'),
(6, 'image125jpg', 9, 3, '2021-04-26 03:00:00', '2021-04-26 03:00:00'),
(7, 'image196jpg', 6, 8, '2021-04-27 03:00:00', '2021-04-27 03:00:00'),
(8, 'image133jpg', 9, 9, '2021-04-28 03:00:00', '2021-04-28 03:00:00'),
(9, 'image155jpg', 6, 2, '2021-04-29 03:00:00', '2021-04-29 03:00:00'),
(10, 'image133jpg', 6, 9, '2021-04-30 03:00:00', '2021-04-30 03:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `movie_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating` double(2,1) NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `movie_id`, `user_id`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 4.0, 'Perspiciatis qui et quia dolores quas.', '2021-04-21 03:00:00', '2021-04-21 03:00:00'),
(2, 3, 5, 5.0, 'Ratione dolores consectetur rerum qui.', '2021-04-22 03:00:00', '2021-04-22 03:00:00'),
(3, 7, 4, 8.0, 'Repudiandae unde aut similique molestiae minus.', '2021-04-23 03:00:00', '2021-04-23 03:00:00'),
(4, 9, 1, 5.0, 'Commodi incidunt aut et cum odio at.', '2021-04-24 03:00:00', '2021-04-24 03:00:00'),
(5, 1, 6, 9.0, 'Fugit ducimus tenetur molestias dicta.', '2021-04-25 03:00:00', '2021-04-25 03:00:00'),
(6, 10, 7, 4.0, 'Omnis eligendi tempore cupiditate ullam odit.', '2021-04-26 03:00:00', '2021-04-26 03:00:00'),
(7, 1, 10, 6.0, 'Beatae velit animi molestias nulla inventore.', '2021-04-27 03:00:00', '2021-04-27 03:00:00'),
(8, 10, 9, 3.0, 'Dolore sit eius saepe dolorum nihil perferendis numquam.', '2021-04-28 03:00:00', '2021-04-28 03:00:00'),
(9, 10, 1, 7.0, 'Sed vitae aut voluptas voluptatem nam.', '2021-04-29 03:00:00', '2021-04-29 03:00:00'),
(10, 10, 1, 6.0, 'At placeat ipsam aperiam. Eum eaque velit et quam est ad aut.', '2021-04-30 03:00:00', '2021-04-30 03:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-06-23 13:58:17', '2021-06-23 13:58:17'),
(2, 'user', 'web', '2021-06-23 13:58:17', '2021-06-23 13:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `country`, `state`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Admin', 'admin', 'Indonesia', 'Sumatera Utara', 'admin@filmrecenzo.com', NULL, '$2y$10$D93iMru8m02HS0kkXBBw2epM3ax2nuP3MOtXdcxhtiSwtxB5/jvxa', NULL, '2021-06-23 13:59:16', '2021-06-23 13:59:16', 'active'),
(2, 'Godfrey Blick', 'emery02', 'Kuwait', 'Illinois', 'fhansen@kunde.org', NULL, '$2y$10$fyQRR0NjGaO2Zkvle12pAOVjjtNsgAUtgre1BPoI3KV5OZMtap/Je', NULL, '2021-06-23 13:59:19', '2021-06-23 13:59:19', 'active'),
(3, 'Antoinette Cummings', 'kiara.towne', 'Zimbabwe', 'Delaware', 'jaskolski.citlalli@gmail.com', NULL, '$2y$10$ZLpn7ACBVLFqL4FjPwzsF.7Xrx65ctCc6me5p1r9P8.cOZ7zSDayq', NULL, '2021-06-23 13:59:19', '2021-06-23 13:59:19', 'active'),
(4, 'Valentine Lemke', 'emily.torphy', 'Mayotte', 'North Carolina', 'yziemann@yahoo.com', NULL, '$2y$10$JCPulGmRV9T9KQnU2/aUoO.2bNhguNXwwpNN5Tl06I0GbE3KpobTW', NULL, '2021-06-23 13:59:19', '2021-06-23 13:59:19', 'active'),
(5, 'Miss Ruthie Schroeder', 'qwilliamson', 'Seychelles', 'Washington', 'pbraun@yahoo.com', NULL, '$2y$10$8KalYD2uHqdMh5JLzjJxfOgQr4KaGKEO40wwohRu4cMl5IfcJCxAm', NULL, '2021-06-23 13:59:20', '2021-06-23 13:59:20', 'active'),
(6, 'Nathaniel Sauer', 'xhansen', 'Mauritania', 'South Dakota', 'franecki.esmeralda@breitenberg.com', NULL, '$2y$10$KDbBK/S1zLVelGBAuZh/NeROakSIbHA6kIDnkeeHaQWGnxw3KkIpm', NULL, '2021-06-23 13:59:20', '2021-06-23 13:59:20', 'active'),
(7, 'Ada Schoen', 'vjacobs', 'Slovakia (Slovak Republic)', 'Idaho', 'ike.larkin@hotmail.com', NULL, '$2y$10$rYy0AS32vPZeTanJKib7juJP4OklKlzNjzxAvmNUQLAm1hN3apTme', NULL, '2021-06-23 13:59:21', '2021-06-23 13:59:21', 'active'),
(8, 'Mr. Ferne Satterfield PhD', 'zane95', 'Fiji', 'Virginia', 'pacocha.eden@hotmail.com', NULL, '$2y$10$jUOA4Fehjb3.IcbB7GwiwOMA2sfL1TmChN/tl7xiW3/MnzgvHLYiC', NULL, '2021-06-23 13:59:21', '2021-06-23 13:59:21', 'active'),
(9, 'Mr. Sydney Schmeler IV', 'jschamberger', 'Korea', 'Minnesota', 'justen.fahey@stark.com', NULL, '$2y$10$KWBrTS7mfr59rJXP1BNqb.Rz0dfRgwv6FY0AB4jYr2MHN.1gprRUa', NULL, '2021-06-23 13:59:22', '2021-06-23 13:59:22', 'active'),
(10, 'Chasity Boyer', 'graciela43', 'Norfolk Island', 'North Carolina', 'kreiger.kari@mckenzie.com', NULL, '$2y$10$ohHtK5Uz7IzTNSM49q3ELOan6CvYMPHGsyUGAZ3gvtChMwWfd6yma', NULL, '2021-06-23 13:59:22', '2021-06-23 13:59:22', 'active'),
(11, 'Amara Weissnat', 'francis00', 'Benin', 'Alabama', 'kuhlman.collin@berge.com', NULL, '$2y$10$1emuQuqDtbj1hrIMIGf/auvWWhb1rr1B9ltRX04PG3ewldlwVJSSO', NULL, '2021-06-23 13:59:22', '2021-06-23 13:59:22', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_id` bigint(20) UNSIGNED NOT NULL,
  `celebrity_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_link`, `movie_id`, `celebrity_id`, `created_at`, `updated_at`) VALUES
(1, 'http://fahey.com/', 9, 6, '2021-04-21 03:00:00', '2021-04-21 03:00:00'),
(2, 'http://mertz.com/', 10, 5, '2021-04-22 03:00:00', '2021-04-22 03:00:00'),
(3, 'http://treutel.com/ullam-dolorum-pariatur-odit-est-velit-sit-dolores', 10, 6, '2021-04-23 03:00:00', '2021-04-23 03:00:00'),
(4, 'http://www.hirthe.com/cum-eveniet-explicabo-officiis-vero', 10, 4, '2021-04-24 03:00:00', '2021-04-24 03:00:00'),
(5, 'http://www.feest.com/', 1, 3, '2021-04-25 03:00:00', '2021-04-25 03:00:00'),
(6, 'http://collier.com/voluptas-neque-veritatis-molestiae-incidunt.html', 8, 2, '2021-04-26 03:00:00', '2021-04-26 03:00:00'),
(7, 'https://hoeger.com/culpa-quis-accusamus-voluptatem-doloremque-voluptatem-repellat-ad-maxime.html', 2, 2, '2021-04-27 03:00:00', '2021-04-27 03:00:00'),
(8, 'http://cruickshank.com/omnis-molestiae-atque-porro-velit-pariatur-aperiam-facilis.html', 1, 10, '2021-04-28 03:00:00', '2021-04-28 03:00:00'),
(9, 'http://www.rutherford.com/', 9, 5, '2021-04-29 03:00:00', '2021-04-29 03:00:00'),
(10, 'http://www.durgan.com/', 3, 5, '2021-04-30 03:00:00', '2021-04-30 03:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_category_id_foreign` (`category_id`);

--
-- Indexes for table `casts`
--
ALTER TABLE `casts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `casts_movie_id_foreign` (`movie_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `celebrities`
--
ALTER TABLE `celebrities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_movie_id_foreign` (`movie_id`),
  ADD KEY `favorites_user_id_foreign` (`user_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movies_genre_id_foreign` (`genre_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photos_movie_id_foreign` (`movie_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_movie_id_foreign` (`movie_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_movie_id_foreign` (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `casts`
--
ALTER TABLE `casts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `celebrities`
--
ALTER TABLE `celebrities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `casts`
--
ALTER TABLE `casts`
  ADD CONSTRAINT `casts_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`);

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
