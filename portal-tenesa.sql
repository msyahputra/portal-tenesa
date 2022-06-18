-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 06 Apr 2022 pada 09.17
-- Versi server: 10.5.13-MariaDB-cll-lve
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1728725_portal-tenesa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` int(255) NOT NULL,
  `id_parner` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `id_parner`, `title`, `slug`, `tanggal`, `description`, `image`) VALUES
(1, 0, 'Semarak 17-an Tenesa', 'semarak-17-an-tenesa', '2021-08-17', 'dirgahayu ', 'event-2.jpeg'),
(2, 0, 'Event Futsal HUT Tenesa', 'event-hut-tenesa', '2021-09-01', 'dalam rangka', 'event-1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kat_katprod`
--

CREATE TABLE `kat_katprod` (
  `id_katprod` int(11) NOT NULL,
  `kategori_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kat_katprod`
--

INSERT INTO `kat_katprod` (`id_katprod`, `kategori_name`) VALUES
(1, 'Job Desk '),
(2, 'Tenesa'),
(3, 'Mukadimah'),
(4, 'Telephony'),
(5, 'Indihome'),
(6, 'Datin'),
(7, 'Fault Handling'),
(8, 'Panduan Solusi'),
(9, 'Panduan Aplikasi'),
(10, 'Interuksi Kerja'),
(11, 'Performasi'),
(12, 'SOP'),
(13, 'Standar'),
(14, 'Form'),
(16, 'Mom'),
(17, 'Imes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `id_parner` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `file_document` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id_news`, `id_parner`, `title`, `slug`, `tanggal`, `description`, `image`, `file_document`, `created_at`, `updated_at`) VALUES
(1, 581000, 'Grand Launching TENESA Semarang', 'grand-launching-tenesa-semarang', '2021-01-21', 'Menindaklanjuti program Digital BPO Academy (DBA) sebagai pilot project, Infomedia beserta Telkom melaksanakan migrasi Telkom Enhanced Enterprise Solution Assurance (TENESA) yang dikelola di Jakarta ke Kota Semarang. Launching new site TENESA tersebut dilaksanakan Kamis 21 Januari 2021 bertempat di Gedung Telkom Jl. Pahlawan Semarang. Acara dihadiri oleh CEO CFU Enterprise Telkom Group – Edi Witjara, didampingi oleh EGM Solution Delivery & Assurance Telkom – Rosyidul Umam Aly beserta EVP Telkom Regional 4 – Djatmiko dan disambut oleh Direktur Utama Infomedia – Agus Winarno (Awin) dan Direktur Marketing & Sales Infomedia – Yusron Hariadi. \r\n<br>\r\n<br>\r\nAwin menyampaikan terdapat 2 site TENESA yang beroperasi saat ini yakni site Bandung dan Semarang, dengan total 935 SDM. Hal ini sekaligus memperluas cakupan pelayanan bukan hanya untuk Telkom EBIS, namun bisa sampai anak perusahaan di bawah CFUE. Kedepannya, operasional akan didukung dengan hadirnya Digital BPO Academy (DBA) yang membuat model operasional BPO menjadi lebih lean. “DBA akan menghadirkan BPO Training Center dan BPO Bootcamp yang dapat meningkatkan skill para agent. Dengan begini, diharapkan agar operasional menjadi lebih efisien, lean, dan fleksibel,” jelas Awin dalam persentasinya.\r\n<br>\r\nPada sesi Fire Briefing di acara tersebut, Edi menilai program digitalisasi pengelolaan CX ini sesuai dengan program transformasi digital telkom group. Beliau juga cukup antusias dengan program DBA Infomedia yang diproyeksikan dapat mengkonsolidasi site Infomedia sehingga tujuan akhir melalui prinsip efisiensi operasional dapat tercapai. Dilanjutkan oleh beliau, bisnis infomedia lebih dari 80 % berasal dari recurring dan merupakan legacy bisnis. Di masa window time untuk bisnis legacy (call center) Infomedia harus membesarkan pendapatan dari new business (digital) mengingat kedepannya bisnis CX mengarah digital serta Infomedia diharapkan dapat bersaing ke lingkup global. Pengelolaan customer seperti Shopee yang direncanakan untuk dikembangkan di wilayah asia tenggara merupakan milestone yg bagus sebagai awal go global.\r\n<br>\r\n<br>\r\nDigital BPO Academy yang dibangun Infomedia diharapkan dapat mencapai ultimate plan melalui efisiensi dari 20 menjadi 4 site dengan mengedepankan seamless omnichannel, Robotic Process Automation, Omnichannel Analytics serta Next based Action and Offering. Digital BPO Academy merupakan sebuah terobosan Infomedia dalam upaya menciptakan Lean, Flexible and efficient BPO Operation dalam rangka menyesuaikan model operasional site dan new normal adoption. Didalamnya direncanakan juga sebagai Digital BPO Center of Excellence, Showcase, Training Center, serta BootCamp.\r\n<br>\r\n<br>\r\nDengan hadirnya TENESA, Edi menekankan agar proses digitalisasi terus dijalankan. Mengingat dengan dinamika teknologi yang terus bergerak, dan potensi yang ada di Indonesia masih besar. “Semoga dengan pelaksanaan launching ini, kita bisa terus berkontribusi untuk Indonesia yang lebih baik,” tutup Edi..', 'news-1.jpg', '', '2021-07-19 05:32:20', '2021-07-19 05:32:20'),
(2, 0, 'Kunjungan BPH Migas ke TENESA Bandung\r\n', 'kunjungan-bph-migas-ke-tenesa-bandung', '2021-03-23', 'Sejalan dengan komitmen BUMN dalam melakukan digitalisasi dan inovasi, Global Shared Service (GSS) dan Telkom, bersama Infomedia, menggelar Webinar dengan tema “Introducing Learning 5.1” pada hari Rabu, 3 Maret 2021. Webinar yang digelar secara online melalui aplikasi Zoom dan Youtube Live ini, menghadirkan Alex Denni – The Author of Learning 5.1 Book sebagai pembicara. Acara dihadiri secara virtual oleh Andus Winarno – Asisten Deputi MSDM Kementerian BUMN, Imam Bustomi – Asisten Deputi Teknologi Informasi Kementerian BUMN, Agus Winarno – Direktur Utama Infomedia beserta jajaran, Jajaran Direktur BUMN Cluster Farmasi dan Asuransi, Senior Leader Telkom serta undangan dengan total 750 partisipan.\r\n<br>\r\n<br>\r\nDemi terciptanya daya saing yang lebih baik dari segi bisnis dan kompetensi SDM, Alex memperkenalkan Transformasi Learning 5.1. “Learning 5.1 adalah tentang menembus batas pemikiran, menerobos konvensi dan kesepakatan, mengubah kebiasaan, dan mentransformasi cara belajar yang telah ketinggalan zaman”, terang Alex. Mindset learner as the center of learning dan learn how to learn menjadi tema sentral dari Learning 5.1.\r\n<br>\r\n<br>\r\nLanjutnya, saat ini kita sebagai insan revolusi industri ditantang untuk menjadi Agile (gesit). Karena cepat atau lambat, pekerja akan menghadapi terjadinya job shifting yang menyebabkan banyak pekerjaan akan hilang karena tegantikan oleh teknologi. Penerapan Agile pada diri tentu harus disertai dengan pengembangan kemampuan (skill). Alex pun memperkirakan beberapa skill yang semakin berkembang di tahun 2022, yakni:\r\n<br>\r\n<br>\r\nAnalytical thinking and innovation\r\nActive Learning and learning strategies\r\nCreativity, originality, and initiative\r\nTechnology design and programming\r\nCritical thinking and analysis\r\nComplex problem-solving\r\nLeadership and social influence\r\nEmotional intelligence\r\nReasoning, problem-solving, and ideation\r\nSystems analysis and evaluation\r\nSkill dapat diperoleh dengan proses belajar yang terus menerus. Menurutnya, proses belajar bisa menjadi lebih efektif dengan 70% Experiential Learning, 20% Social Learning, dan 10% Formal Learning. Manajemen perusahaan dirasa perlu untuk membantu karyawan dalam mengembangkan skill. Berikut konsep yang dapat mengajak karyawan untuk belajar, menurut Alex:\r\n<br>\r\n<br>\r\nLearning Wallet, anggaran yang didistribusikan untuk seluruh karyawan\r\nDaily Quiz, memberikan soal atau pertanyaan seputar bidang pekerjaannya\r\nCollaborative Adult Learning, mencari jawaban dari pertanyaan atau soal yang tidak dimengerti oleh karyawan\r\n4, Digital Platform, menyediakan platform untuk karyawan belajar dan mencari jawaban dari soal yang diberikan dengan tujuan mempercepat proses pembelajarannya\r\n<br>\r\n<br>\r\nDari konsep tersebut, nantinya bisa menimbulkan dampak yang positif seperti meningkatnya engagement, meningkatnya employer branding, menurunnya turn over rate, serta meningkatnya produktifitas.\r\n<br>\r\n<br>\r\nDengan digelarnya webinar ini, diharapkan dapat membuka wawasan insan BUMN dalam memahami cara belajar dan mengetahui metode pembelajaran di era new normal. Tujuan utama dari metode  dapat menciptakan dan mengembangkan kompetensi insan BUMN yang memiliki talenta unggul dan berdaya saing global.\r\n<br>\r\n<br>\r\n#BUMNuntukIndonesia\r\n<br>\r\n<br>\r\n#JayalahIndonesia', 'news-2.jpg', '', '2021-07-19 05:32:20', '2021-07-19 05:32:20'),
(3, 0, 'Kunjungan Direktur Perumda Tarakan Aneka Usaha\r\nKe TENESA Bandung', 'kunjungan-direktur-permuda-tarakan-aneka-usaha-ke-tenesa-bandung', '2021-03-26', 'Komitmen Infomedia dalam mengimplementasikan Shared Service Operation di Telkom Group dilanjutkan dengan pelaksanaan Kick Off Observasi Onsite Shared Service Operation (SSO) di Telkom Regional pada hari Senin, 15 Maret 2021. Pada kesempatan tersebut hadir, SVP Group Corporate Transformation (GCT) – Ikhsan, EVP Telkom Regional (T-Reg) 1 – Machsus Kusuma Apriyono, Direktur Marketing and Sales Infomedia – Yusron Hariyadi, serta Sekjen Sekar Telkom – Imam Budi Santoso.\r\n<br>\r\n<br>\r\nTransformasi Telkom Regional di era digital saat ini dirasa tepat menurut Machsus. Ia yakin langkah Telkom Group ini dilaksanakan menuju ke arah perbaikan. “Mengingat pertimbangan perubahan bisnis akibat covid yang masih terjadi, perlu adanya dukungan khusus di masa WFH,” jelas Machsus.\r\n<br>\r\n<br>\r\nHal ini disambut dengan semangat oleh Imam. Sekar bersama GCT siap mengawal Transformasi Organisasi Digital Telkom, termasuk implementasi SSO yang saat ini memasuki tahapan observasi on site, hingga nanti saat telah di running nya SSO di lingkup T-Reg. “Semoga observasi on site berjalan lancar dan mampu memotret kegiatan Witel dan TREG sehingga dapat membawa perbaikan,” ungkap Imam.\r\n<br>\r\n<br>\r\nDari 10 Program Strategic Initiative Telkom 2021 – 2025, saat ini observasi berfokus pada ‘Gear up for Streamlined Lean Digital – Ready Organization’. Di mana di dalamnya terdapat program ‘Achieve Lean Corporate Function and Establish National Leading SSO’. Lingkup program observasi dilakukan secara paralel di TReg 1,5 dan 7 untuk fungsi Human Capital, Finance, Procurement dan IT. Sejalan dengan itu, program tersebut akan menghadirkan Telkom Shared Service Center dimana Infomedia sedang dalam tahap mendeliver Global Shared Service untuk seluruh BUMN di Indonesia.\r\n<br>\r\n<br>\r\nProses observasi dari Infomedia dipastikan tidak akan mengganggu kegiatan operasional. “Nantinya, hasil dari observasi akan diformulasikan, sebagai input dalam piloting (uji coba) program di bulan April”, terang Eka dalam paparannya. Selanjutnya akan dilakukan evaluasi efektifitas program sebelum diimplementasikan secara menyeluruh dalam transformasi regional yang direncanakan berjalan di bulan Juni.\r\n<br>\r\n<br>\r\nInfomedia saat ini ditugaskan dan dipercaya oleh kementrian BUMN sebagai entitas pelaksana untuk Global Shared Service (GSS) BUMN. Di lingkup Telkom, salah satu implementasi SSO diwujudkan dalam bentuk transformasi regional. Saat ini transformasi dimaksud akanmemasuki tahap observasi yang difokuskan pada fungsi Human Capital dan Finance. “Ini dilakukan untuk memetakan keseluruhan proses dari 2 pilar tersebut sehingga nantinya dapat menjadi referensi dan pedoman saat implementasi transformasi organisasi di lingkup Telkom Regional”, jelas Yusron. Observasi dilakukan melalui 3 tahap yaitu melalui mekanisme Pengisian Questioner Observasi, Study on desk, dan In depth Observasi.\r\n<br>\r\n<br>\r\nIkhsan sendiri menilai perlunya dilakukan transformasi bisnis agarr kita tetap bisa bersaing di era digital saat ini. Keberhasilan transformasi bisnis dapat tercapai dengan cara transformasi organisasi, teknologi dan pemenuhan kompetensi. “Penguatan fondasi pada digital platform dan digital service diperlukan untuk pembenahan tata kelola network access”, ungkap Ikhsan. Penguatan B2B di regional dan penguatan teritori juga diharapkan bisa dicapai melalui implementasi SSO.\r\n<br>\r\n<br>\r\nKegiatan yang diikuti oleh 96 partisipan zoom dari GCT, Sekar, Infomedia, Treg 1,5 dan 7 kemudian diakhiri dengan pengesahan Kick Off Observasi Onsite Shared Service Operation oleh Ikhsan. Dengan begitu diharapkan agar seluruh lapisan Telkom dapat segera bertransformasi dan menjadi lebih baik untuk terus berkontribusi bagi Indonesia.', 'news-3.jpg', '', '2021-07-19 05:41:25', '2021-07-19 05:41:25'),
(4, 0, 'Kunjungan Direktur PT Pos Indonesia ke TENESA Bandung', 'kunjungan-direktur-pt-pos-indonesia-ke-tenesa-bandung', '2021-04-05', '117 sebagai pusat layanan tanggap bencana yang dikelola oleh BNPB Kembali diperluas melalui Kerjasama Telkom, Satgas Penanganan Covid19, BNPB dan Palang Merah Indonesia (PMI). Layanan dengan nomor kontak 117 ext 5 ditetapkan sebagai call center Plasma Konvalesen melalui program Plasma BUMN untuk Indonesia.\r\n<br>\r\n<br>\r\nSebagai bagian dari Telkom Group, Infomedia dipercaya untuk mengelola Call center tersebut dengan kapasitas 2 inbound dan 5 Outbound dan berlokasi di Jakarta, tepatnya di Kantor BNPB Jalan Pramuka, Jakarta Timur. Call Center Plasma Konvalesen ini telah aktif beroperasi sejak 8 Februari 2021.\r\n<br>\r\n<br>\r\n“Hingga kini penanganan Covid-19 dan pemulihan ekonomi nasional menjadi fokus pemerintah yang terus diupayakan dengan berbagai cara. Salah satunya menyediakan layanan call center ini,” kata Direktur Enterprise & Business Service Telkom Edi Witjara, dikutip dari Antara, Selasa (9/2/2021). Menurut Edi, call center 117 ext 5 ini akan memudahkan masyarakat untuk mengetahui lebih dalam mengenai plasma konvalesen dan mendaftar jika ingin menjadi pendonor. Selanjutnya, masyarakat akan dipandu hingga proses donor di UDD (Unit Donor Darah) PMI yang tersebar di berbagai kota di Indonesia.\r\n<br>\r\n<br>\r\nKehadiran call center ini diharapkan dapat mempercepat proses pengumpulan donor plasma konvalesen yang dapat menolong masyarakat yang terdampak Covid-19. Call center plasma konvalesen memiliki operator dan verifikator yang telah dibekali pelatihan soft skill dari Infomedia selaku anak usaha Telkom dan hard skill dari PMI dan BNPB.', 'news-4.jpg', '', '2021-07-19 05:41:25', '2021-07-19 05:41:25'),
(5, 0, 'Kunjungan Tim Ops. PT Pos Indonesia ke TENESA Bandung', 'kunjungan-tim-ops.pt-pos-indonesia-ke-tenesa-bandung', '2021-04-06', '', 'news-5.jpg', '', '2021-07-27 17:01:05', '2021-07-27 17:01:05'),
(6, 0, 'Kunjungan Tim RS DR Sardjito Yogyakarta ke TENESA Semarang', 'kunjungan-tim-rs-dr-sardjito-yogyakarta-ke-tenesa-semarang', '2021-04-08', '', 'news-6.jpg', '', '2021-07-27 17:07:04', '2021-07-27 17:07:04'),
(7, 0, 'Kunjungan BPJS Kesehatan ke TENESA Bandung', 'kunjungan-bpjs-kesehatan-ke-tenesa-bandung', '2021-04-09', '', 'news-7.jpg', '', '2021-08-06 16:00:08', '2021-08-06 16:00:08'),
(8, 0, 'Kunjungan EGM SDA ke TENESA Semarang & Manajemen SDA ke TENESA Bandung', 'kunjungan-egm-sda-ke-tenesa-semarang-&-manajemen-sda-ke-tenesa-bandung', '2021-05-05', '', 'news-8.jpg', '', '2021-08-06 16:06:33', '2021-08-06 16:06:33'),
(9, 0, 'Kunjungan Manajemen Jasa Marga ke TENESA Bandung', 'kunjungan-manajemen-jasa-marga-ke-tenesa-bandung', '2021-06-02', '', 'news-9.jpg', '', '2021-08-06 16:10:47', '2021-08-06 16:10:47'),
(10, 0, 'Kunjungan Ibu Naning Hastining Bagyo Astuti (Director Solution and Business Development - Infomedia) ke TENESA Semarang. ', 'Kunjungan-ibu-naning-hastining-bagyo-astuti-director-solution-and-business-development-infomedia-ke-tenesa-semarang.', '2021-08-20', '', 'news-10.jpeg', '', '2021-08-20 12:20:56', '2021-08-20 12:20:56'),
(16, 581000, 'Sosialisasi UHOSS Terkait Penggantian Disney dan FOX', 'sosialisasi-uhoss-terkait-penggantian-disney-dan-fox', '2021-09-30', 'Sosialisasi UHOSS Terkait Penggantian Disney dan FOX', '1634145807_b75722904cf8ba803f05.jpg', '1634145807_98fa683ee031f1153afd.pdf', NULL, NULL),
(17, 0, 'Jadwal PNP TENESA Oktober 2021', 'jadwal-pnp-tenesa-oktober-2021', '2021-10-14', 'Jadwal PNP TENESA Oktober 2021', 'news-13.jpeg', '', '2021-10-14 14:10:44', '2021-10-14 14:10:44'),
(19, 0, 'TENESA Enhanced', 'tenesa-enhanced', '2021-12-13', 'TENESA Enhanced', 'News-20.jpeg', '', '2021-12-15 17:16:05', '2021-12-15 17:16:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `id_katprod` int(11) NOT NULL,
  `id_subproduct` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `file_document` varchar(255) NOT NULL,
  `file_document_1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id_product`, `id_katprod`, `id_subproduct`, `title`, `slug`, `description`, `file_document`, `file_document_1`) VALUES
(1, 1, 0, 'Job Description Administrator Operation', 'job-description-administrator-operation', '', 'Job Description Administrator Operation.pdf', ''),
(2, 1, 0, 'Job Description Supervisor', 'job-description-supervisor', '', 'Job Description Supervisor.pdf', ''),
(3, 1, 0, 'Job Description Trainer', 'job-description-trainer', '', 'Job Description Trainer.pdf', ''),
(4, 1, 0, 'Job Description Administrator Roster', 'job-description-administrator-roster', '', 'Job Description Administrator Roster.pdf', ''),
(5, 1, 0, 'Job Description Quality Control Officer', 'job-description-quality-control-officer', '', 'Job Description Quality Control Officer.pdf', ''),
(6, 1, 0, 'Job Description Document Control', 'job-description-document-control', '', 'Job Description Document Control.pdf', ''),
(7, 1, 0, 'Job Description Desk Control', 'job-description-desk-control', '', 'Job Description Desk Control.pdf', ''),
(8, 1, 0, 'Job Description Agent Global', 'job-description-agent-global', '', 'Job Description Agent Global.pdf', ''),
(9, 1, 0, 'Job Description Agent Tier 2 Datin', 'job-description-agent-tier-2-datin', '', 'Job Description Agent Tier 2 Datin.pdf', ''),
(10, 1, 0, 'Job Description Agent Tier 2 IMES', 'job-description-agent-tier-2-imes', '', 'Job Description Agent Tier 2 IMES.pdf', ''),
(11, 1, 0, 'Job Description Agent Tier 2 Indihome', 'job-description-agent-tier-2-indihome', '', 'Job Description Agent Tier 2 Indihome.pdf', ''),
(12, 1, 0, 'Job Description Agent Tier 2 NMS', 'job-description-agent-tier-2-nms', '', 'Job Description Agent Tier 2 NMS.pdf', ''),
(13, 1, 0, 'Job Description Agent Tier 2 Outbond Omni', 'job-description-agent-tier-2-outbond-omni', '', 'Job Description Agent Tier 2 Outbond Omni.pdf', ''),
(14, 1, 0, 'Job Description Agent Tier 1 Email', 'job-description-agent-tier-1-email', '', 'Job Description Agent Tier 1 Email.pdf', ''),
(15, 1, 0, 'Job Description Agent Tier 1 Social Media', 'job-description-agent-tier-1-social-media', '', 'Job Description Agent Tier 1 Social Media.pdf', ''),
(16, 1, 0, 'Job Description Agent Tier 1 Voice', 'job-description-agent-tier-1-voice', '', 'Job Description Agent Tier 1 Voice.pdf', ''),
(17, 2, 0, 'Profil Tenesa', 'profil-tenesa', '<p style=\"text-indent: 30px; text-align: justify\">Telkom Enhanced Enterprise Solution Assurance atau yang disingkat dengan TENESA adalah salah satu contact center Telkom yang dikelola oleh PT. Infomedia Nusantara, khusus untuk pelanggan dengan segmentasi korporasi (perusahaan) pemerintahan dan usaha menengah (bisnis). </p>\r\n<p style=\"text-align: justify\">TENESA diresmikan dan berdiri pada tanggal 27 Juli 2021 merupakan contact center yang berlokasi di 2 site, Bandung dan Semarang. \r\nSegmentasi pelanggan yang dihandle oleh TENESA dibagi menjadi 3 segment:</p>\r\n<p style=\"text-indent: 30px;\">1.Segment Enterprise: 1.917 customer</p>\r\n<p style=\"text-indent: 30px;\">2.Segment Government: 975 customer</p>\r\n<p style=\"text-indent: 30px;\">3.Segment Business: 286.866 customer</p>\r\n<p style=\"text-align: justify\">Saat ini, TENESA menggunakan metode kerja Flexi Working Arrangement. Jumlah karyawan yang bekerja dengan system WFO 50% dan WFH 50%. Sebelumnya, TENESA menggunakan metode full WFH dengan menggunakan aplikasi Omni-Channel untuk proses kelancaran operasional.\r\nSebagai contact center yang dikelola Infomedia, TENESA pernah mengikuti ajang kompetisi contact center baik lokal maupun internasional. Prestasi yang pernah diraih TENESA dari ajang contact center se-Indonesia (yang diselenggarakan oleh Indonesia Contact Center Award) pada tahun 2016-2017 dan ajang CCW Award 2016 (yang diselenggarakan oleh Contact Center World) dengan kategori Best IT, Best Outsourcing Partnership, Best Help Desk & Best Quality Auditor Category.</p>\r\n<br>\r\n<br>', 'Overview TENESA 2021.pdf', ''),
(18, 2, 0, 'SLA Tenesa', 'sla-Tenesa', '', 'sla-tenesa-2021.pdf', ''),
(21, 3, 0, 'Struktur Organisasi Telkom SDA\r\n', 'struktur-organisasi-telkom-sda', '', 'struktur-sda.pdf', ''),
(22, 3, 0, 'Struktur Organisasi TENESA\r\n', 'struktur-organisasi-tenesa', '', 'struktur-tenesa.pdf', ''),
(28, 3, 0, 'Plasa Telkom\r\n', 'plasa_telkom', '', 'plasa-telkom.pdf', ''),
(29, 3, 0, 'Top 20 DES\r\n', 'top_20_des', '', 'Top-20-DES.pdf', ''),
(30, 3, 0, 'Top 20 DGS\r\n', 'top_20_dgs', '', 'Top-20-DGS.pdf', ''),
(31, 4, 0, 'POTS\r\n', 'pots', '', 'pots.pdf', ''),
(32, 4, 0, 'PTSN\r\n', 'ptsn', '', 'ptsn.pdf', ''),
(33, 4, 0, 'ISDN\r\n', 'isdn', '', 'isdn.pdf', ''),
(34, 4, 0, 'SIP Trunk\r\n', 'sip_trunk', '', 'sip-trunk.pdf', ''),
(35, 4, 0, 'Fitur Telephony\r\n', 'fitur_telephony', '', 'fiturtelephony.pdf', ''),
(36, 5, 0, 'HSI/IndiHome\r\n', 'hsi_IndiHome', '', 'HSIIndihome.pdf', ''),
(37, 5, 0, 'WiFi ID\r\n', 'wifi_id', '', 'wifi-id.pdf', ''),
(38, 5, 0, 'WMS Lite\r\n', 'wms_lite', '', 'wms-lite.pdf', ''),
(39, 5, 0, 'Wifi Station\r\n', 'wifi_station', '', 'WiFi Station.pdf', ''),
(40, 5, 0, 'Wifi Corner\r\n', 'wifi_corner', '', 'WICO.pdf', ''),
(41, 6, 0, 'Metro -E\r\n', 'metro_e', '', 'metro-e.pdf', ''),
(42, 6, 0, 'VPN IP\r\n', 'vpn_ip', '', 'vpn-ip.pdf', ''),
(43, 6, 0, 'VSAT IP\r\n', 'vsat-ip', '', 'vsat-ip.pdf', ''),
(44, 6, 0, 'Astinet\r\n', 'astinet', '', 'astinet.pdf', ''),
(45, 6, 0, 'IP Transit\r\n', 'ip-transit', '', 'ip-transit.pdf', ''),
(46, 7, 1, 'Perbedaan PABX dan PBX\r\n', 'perbedaan-pabx-dan-pbx', '', 'perbedaan-pabx-dan-pbx.pdf', ''),
(47, 7, 2, 'Pengecekan IPTV\r\n', 'pengecekan-iptv', '', 'pengecekan-iptv.pdf', ''),
(48, 7, 2, 'SNR margin and Line Attunation\r\n', 'snr-margin-and-line-Aattunation', '', 'snr-margin-and-line-attunation.pdf', ''),
(49, 7, 2, 'Setting Modem Internet\r\n', 'setting-modem-internet', '', 'setting-modem-intrnet.pdf', ''),
(50, 7, 2, 'Error Code\r\n', 'error-code', '', 'error-code.pdf', ''),
(51, 7, 2, 'Setting-SMTP-Outlook\r\n', 'setting-smtp-outlook', '', 'settingSMTP.pdf', ''),
(52, 7, 2, 'Reset Modem Internet\r\n', 'reset-modem-internet', '', 'reset-modem-internet.pdf', ''),
(53, 7, 2, 'Gangguan OTT di STB\r\n', 'gangguan-ott-di-stb', '', 'gangguanSTB.pdf', ''),
(54, 7, 3, 'Pengecekan Datek SBC\r\n', 'pengecekan-datek-sbc', '', 'cek-datek-sbc.pdf', ''),
(55, 7, 3, 'Pengecekan MCE\r\n', 'pengecekan-mce', '', 'pengecekan-mce.pdf', ''),
(56, 7, 3, 'List PE VPN\r\n', 'list-pe-vpn', '', 'pe-vpn.pdf', ''),
(57, 7, 3, 'List PE Transit\r\n', 'list-pe-transit', '', 'pe-transit.pdf', ''),
(58, 7, 3, 'IMES Manage Service\r\n', 'imes-manage-service', '', 'imes-manage-service.pdf', ''),
(59, 7, 3, 'IMES Manage Solution\r\n', 'imes-manage-solution', '', 'imes-manage-solution.pdf', ''),
(60, 7, 3, 'Bypass Modem\r\n', 'bypass-modem', '', 'bypass-modem.pdf', ''),
(61, 7, 3, 'Subnetting\r\n', 'subnetting', '', 'subnetting.pdf', ''),
(62, 8, 4, 'Telepon Matot/Tidak ada Nada\r\n', 'telepon-matot-tidak-ada-nada', '', 'Telepon Matot.pdf', ''),
(63, 8, 4, 'Tidak Bisa Memanggil\r\n', 'tidak-bisa-memanggil', '', 'Telephony-TIDAK BISA MEMANGGIL.pdf', ''),
(64, 8, 4, 'Tidak Dapat Dipanggil\r\n', 'tidak-dapat-dipanggil', '', 'TIDAK DAPAT DIPANGGIL.pdf', ''),
(65, 8, 4, 'Tidak Bisa ke Nomor Tertentu\r\n', 'tidak-bisa-ke-nomor-tertentu', '', 'TIDAK BISA NOMOR TERTENTU.pdf', ''),
(66, 8, 4, 'Tidak Bisa SLI\r\n', 'tidak-bisa-sli', '', 'TIDAK BISA SLI.pdf', ''),
(67, 8, 4, 'Tidak Bisa SLJJ\r\n', 'tidak-bisa-sljj', '', 'TIDAK BISA SLJJ.pdf', ''),
(68, 8, 4, 'Suara Lemah/Robot/Dengung\r\n', 'suara-lemah-robot-dengung', '', 'SUARA LEMAH.pdf', ''),
(69, 8, 4, 'Suara Putus-putus\r\n', 'suara-putus-putus', '', 'SUARA PUTUS.pdf', ''),
(70, 8, 4, 'Tidak Bisa Faximile\r\n', 'tidak-bisa-faximile', '', 'TIDAK BISA FAXIMILE.pdf', ''),
(71, 8, 4, 'Gangguan Japati/IN/ISDN/Jasnita\r\n', 'gangguan-japati-in-isdn-jasnita', '', 'Gangguan Japati.pdf', ''),
(72, 8, 4, 'Cross Talk Induksi\r\n', 'cross-talk-induksi', '', 'Cross Talk Induksi.pdf', ''),
(73, 8, 4, 'Gangguan EDC\r\n', 'gangguan-edc', '', 'Gangguan EDC.pdf', ''),
(74, 8, 4, 'Gangguan VPN Dial\r\n', 'gangguan-vpn-dial', '', 'Gangguan VPN DIAL.pdf', ''),
(75, 8, 4, 'Gangguan Fitur\r\n', 'gangguan-fitur', '', 'GANGGUAN FITUR.pdf', ''),
(76, 8, 4, 'Gangguan Hunting\r\n', 'gangguan-hunting', '', 'Gangguan Hunting.pdf', ''),
(77, 8, 4, 'Salah Sambung\r\n', 'salah-sambung', '', 'Salah Sambung.pdf', ''),
(78, 8, 4, 'Suara Lawan Tidak Terdengar\r\n', 'suara-lawan-tidak-terdengar', '', 'Suara Lawan Tidak Terdengar.pdf', ''),
(79, 8, 5, 'Gagal Koneksi Ke Wifi\r\n', 'gagal-koneksi-ke-wifi', '', 'GAGAL KONEKSI KE WIFI.pdf', ''),
(80, 8, 5, 'Gagal Login Menu ONT/Modem\r\n', 'gagal-login-menu-ont-modem', '', 'GAGAL LOGIN MENU ONT.pdf', ''),
(81, 8, 5, 'Gangguan Game Online\r\n', 'gangguan-game-online', '', 'GANGGUAN GAME ONLINE.pdf', ''),
(82, 8, 5, 'Intermitten\r\n', 'intermitten', '', 'INTERMITEN.pdf', ''),
(83, 8, 5, 'IP Public\r\n', 'ip-public', '', 'IP PUBLIC.pdf', ''),
(84, 8, 5, 'Kabel Terjuntai/Tiang Roboh atau Pindah/Box Ditabrak\r\n', 'kabel-terjuntai-tiang-roboh-atau-pindah-box-ditabrak', '', 'KABEL TERJUNTAI.pdf', ''),
(85, 8, 5, 'Lambat\r\n', 'lambat', '', 'LAMBAT.pdf', ''),
(86, 8, 5, 'Modem Hang\r\n', 'modem-hang', '', 'Modem HANG.pdf', ''),
(87, 8, 5, 'Push Advertise\r\n', 'push-advertise', '', 'PUSH ADVERTISING.pdf', ''),
(88, 8, 5, 'Gangguan VICON\r\n', 'gangguan-vicon', '', 'Gangguan VICON.pdf', ''),
(89, 8, 5, 'Gangguan Streaming\r\n', 'gangguan-streaming', '', 'Gangguan STREAMING.pdf', ''),
(90, 8, 5, 'Setting SSID/Wifi\r\n', 'setting-ssid-wifi', '', 'SETTING SSID.pdf', ''),
(92, 8, 5, 'SSID Tidak Muncul\r\n', 'ssid-tidak-muncul', '', 'SSID WIFI TIDAK MUNCUL.pdf', ''),
(93, 8, 5, 'Tidak Bisa Email\r\n', 'tidak-bisa-email', '', 'TIDAK BISA EMAIL.pdf', ''),
(94, 8, 5, 'Tidak Bisa Koneksi\r\n', 'tidak-bisa-koneksi', '', 'Tidak bisa koneksi.pdf', ''),
(95, 8, 5, 'Tidak Bisa Web Tertentu\r\n', 'tidak-bisa-web-tertentu', '', 'TIDAK BISA WEB TERTENTU.pdf', ''),
(96, 8, 5, 'Kendala Zoom Terputus-putus/Logout\r\n', 'kendala-zoom-terputus-putus-logout', '', 'KENDALA ZOOM TERPUTUS-PUTUS.pdf', ''),
(97, 8, 5, 'Gangguan Pasca PSB <60 Hr\r\n', 'gangguan-pasca-psb-kurang-60-hari', '', 'Gangguan Pasca PSB.pdf', ''),
(101, 8, 6, 'Gangguan Lainnya\r\n', 'gangguan-lainnya', '', 'Gangguan Lainnya.pdf', ''),
(102, 8, 7, 'AP Down/Mati\r\n', 'ap-down-mati', '', 'AP Down.pdf', ''),
(103, 8, 7, 'AP Blinking\r\n', 'ap-blinking', '', 'AP Blinking.pdf', ''),
(104, 8, 7, 'AP Hijau (Isolir)\r\n', 'ap-hijau-isolir', '', 'AP Hijau (Isolir).pdf', ''),
(105, 8, 7, 'AP Berwarna Biru Stabil\r\n', 'ap-berwarna-biru-stabil', '', 'AP Berwarna Biru Stabil.pdf', ''),
(106, 8, 7, 'AP Mati Total\r\n', 'ap-mati-total', '', 'AP MATI TOTAL.pdf', ''),
(107, 8, 7, 'Akses Lambat\r\n', 'akses-lambat', '', 'AKSES LAMBAT.pdf', ''),
(108, 8, 8, 'Mati Total Logic\r\n', 'mati-total-logic', '', 'Mati Total Logic.pdf', ''),
(109, 8, 8, 'Mati Total Fisik\r\n', 'mati-total-fisik', '', 'Mati Total Fisik.pdf', ''),
(110, 8, 8, 'Layanan Lambat / Intermitten\r\n', 'layanan-lambat-intermitten', '', 'Datin - Layanan Lambat atau Intermiten.pdf', ''),
(112, 8, 8, 'Tidak bisa Akses IP / Web tertentu\r\n', 'tidak-bisa-akses-ip-web-tertentu', '', 'Tidak bisa ke Web tertentu.pdf', ''),
(113, 8, 8, 'Bandwidth Tidak Sesuai\r\n', 'bandwidth-tidak-sesuai', '', 'BANDWIDTH TIDAK SESUAI.pdf', ''),
(114, 9, 0, 'Aplikasi NCX', 'aplikasi-ncx', '', 'aplikasi-ncx.pdf', ''),
(115, 9, 0, 'Aplikasi Enterprise Dashboard', 'aplikasi-enterprise-dashboard', '', 'enterprise-dashboard.pdf', ''),
(116, 9, 0, 'Aplikasi IDEAS', 'aplikasi-ideas', '', 'ideas.pdf', ''),
(117, 9, 0, 'Aplikasi TiBS', 'aplikasi-tibs', '', 'tibs.pdf', ''),
(118, 9, 0, 'Aplikasi Nossa', 'aplikasi-nossa', '', 'panduan-nossa.pdf', ''),
(119, 9, 0, 'Aplikasi DBS Support System', 'aplikasi-dbs-support-system', '', 'dbs-support-sytem.pdf', ''),
(120, 9, 0, 'Aplikasi APoSE', 'aplikasi-apose', '', 'panduan-app-apose.pdf', ''),
(121, 9, 0, 'Aplikasi E-Payment', 'aplikasi-e-payment', '', 'panduan-e-payment.pdf', ''),
(122, 9, 0, 'Aplikasi Gladius', 'aplikasi-gladius', '', 'gladius.pdf', ''),
(123, 9, 0, 'Aplikasi Telkom Center', 'aplikasi-telkom-center', '', 'telkom-center.pdf', ''),
(124, 9, 0, 'Aplikasi Netcare', 'aplikasi-netcare', '', 'netcare.pdf', ''),
(125, 9, 0, 'Open Tiket Aplikasi Nossa', 'open-tiket-aplikasi-nossa', '', 'panduan-open-tiket-nossa.pdf', ''),
(126, 9, 0, 'Open TIket Aplikasi MyCX', 'open-tiket-aplikasi-mycx', '', 'panduan-open-tiket-mycx.pdf', ''),
(127, 9, 0, 'Pengecekan Password Usee Tv', 'pengecekan-password-usee-tv', '', 'cek-pass-usetv.pdf', ''),
(128, 9, 0, 'Aplikasi Telkom Care', 'aplikasi-telkom-care', '', 'telkom-center.pdf', ''),
(129, 10, 0, 'Instruksi Kerja Panduan Pembinaan SDM', 'instruksi-kerja-panduan-pembinaan-sdm', '', 'IN.HSC.TENESA.W-01 Instruksi Kerja Panduan Pembinaan SDM.pdf', ''),
(130, 10, 0, 'Instruksi Kerja Opening Tiket', 'instruksi-kerja-opening-tiket', '', 'IN.OCC.TENESA.W-01 Instruksi Kerja Opening Tiket.pdf', ''),
(131, 10, 0, 'Instruksi Kerja Pending Tiket', 'instruksi-kerja-pending-tiket', '', 'IN.OCC.TENESA.W-02 Instruksi Kerja Pending Tiket.pdf', ''),
(132, 10, 0, 'Instruksi Kerja Closing Tiket', 'instruksi-kerja-closing-tiket', '', 'IN.OCC.TENESA.W-03 Instruksi Kerja Closing Tiket.pdf', ''),
(133, 10, 0, 'Instruksi Kerja Agent Voice', 'instruksi-kerja-agent-voice', '', 'IN.OCC.TENESA.W-04 Instruksi Kerja Agent Voice.pdf', ''),
(134, 10, 0, 'Instruksi Kerja Agent Email', 'instruksi-kerja-agent-email', '', 'IN.OCC.TENESA.W-05 Instruksi Kerja Agent Email.pdf', ''),
(135, 10, 0, 'Instruksi Kerja Agent Sosial Media', 'instruksi-kerja-agent-sosial-media', '', 'IN.OCC.TENESA.W-06 Instruksi Kerja Agent Sosial Media.pdf', ''),
(136, 10, 0, 'Instruksi Kerja Agent NMS\r\n', 'instruksi-kerja-agent-nms', '', 'IN.OCC.TENESA.W-07 Instruksi Kerja Agent NMS.pdf', ''),
(137, 10, 0, 'Instruksi Kerja Agent Email (Customer Beda Segmentasi)', 'instruksi-kerja-agent-email-customer-beda-segmentasi)', '', 'IN.OCC.TDSCC.W-89 Instruksi Kerja Agent Email (Customer Beda Segmentasi).pdf', ''),
(138, 10, 0, 'Instruksi Kerja Agent Voice (Warm Transfer)', 'instruksi-kerja-agent-voice-warm-transfer', '', 'IN.OCC.TDSCC.W-90 Instruksi Kerja Agent Voice (Warm Transfer).pdf', ''),
(139, 10, 0, 'Instruksi Kerja Penanganan Gangguan Datin - Suspend', 'instruksi-kerja-penanganan-gangguan-datin-suspend', '', 'IN.OCC.TDSCC.W-95 Instruksi Kerja Penanganan Gangguan Datin - Suspend.pdf', ''),
(140, 10, 0, 'Instruksi Kerja Agent Email - Link Suspend', 'instruksi-kerja-agent-email-link-suspend', '', 'IN.OCC.TDSCC.W-96 Instruksi Kerja Agent Email - Link Suspend.pdf', ''),
(141, 10, 0, 'Instruksi Kerja Penanganan Permintaan Pelanggan', 'instruksi-kerja-penanganan-permintaan-pelanggan', '', 'IN.OCC.TDSCC.W-97 Instruksi Kerja Penanganan Permintaan Pelanggan.pdf', ''),
(142, 11, 9, 'Rekapitulasi Monitoring Periodik', 'rekapitulasi-monitoring-periodik', '', 'Mapping Agent Per QCO & Rekapitulasi Periodik Monitoring Agent Bulan Juni 2021.xlsx.pdf', ''),
(143, 11, 9, 'Real Time QM Score', 'real-time-qm-score', '', 'Real Time QM Score Juni 2021.xlsx - JUNI 2021.pdf', ''),
(144, 11, 9, 'Mystery Omni Channel Voice', 'mystery-omni-channel-voice', '', 'Mysteri Omni Channel Voice- JUNI 2021.pdf', ''),
(145, 11, 9, 'Mystery Omni Channel e-Mail', 'mystery-omni-channel-e-mail', '', 'Mysteri Omni Channel Email- JUNI 2021.pdf', ''),
(146, 11, 9, 'Mystery Omni Channel SocMed', 'mystery-omni-channel-socmed', '', 'Mysteri Omni Channel SocMed- JUNI 2021.pdf', ''),
(147, 11, 10, 'Rekapitulasi Monitoring Periodik', 'rekapitulasi-monitoring-periodik', '', 'Mapping Agent Per QCO & Rekapitulasi Periodik Monitoring Agent Bulan Juli 2021.xlsx.pdf', ''),
(148, 11, 10, 'Real Time QM Score', 'real-time-qm-score', '', 'Real Time QM Score Juli 2021.xlsx - JULI 2021.pdf', ''),
(149, 11, 10, 'Mystery Omni Channel Voice', 'mystery-omni-channel-voice', '', 'Mysteri Omni Channel Voice- JULI 2021.pdf', ''),
(150, 11, 10, 'Mystery Omni Channel e-Mail', 'mystery-omni-channel-e-mail', '', 'Mysteri Omni Channel Email- JULI 2021.pdf', ''),
(151, 11, 10, 'Mystery Omni Channel SocMed', 'mystery-omni-channel-socmed', '', 'Mysteri Omni Channel SocMed- JULI 2021.pdf', ''),
(152, 11, 11, 'Rekapitulasi Monitoring Periodik', 'rekapitulasi-monitoring-periodik', '', 'Mapping Agent Per QCO & Rekapitulasi Periodik Monitoring Agent Bulan Agustus 2021.xlsx.pdf', ''),
(153, 11, 11, 'Real Time QM Score', 'real-time-qm-score', '', 'Real Time QM Score Agustus 2021.xlsx - AGUSTUS 2021.pdf', ''),
(154, 11, 11, 'Mystery Omni Channel Voice', 'mystery-omni-channel-voice', '', 'Mysteri Omni Channel Voice- AGUSTUS 2021.pdf', ''),
(155, 11, 11, 'Mystery Omni Channel e-Mail', 'mystery-omni-channel-e-mail', '', 'Mysteri Omni Channel Email- AGUSTUS 2021.pdf', ''),
(156, 11, 11, 'Mystery Omni Channel SocMed', 'mystery-omni-channel-socmed', '', 'Mysteri Omni Channel Socmed- AGUSTUS 2021.pdf', ''),
(157, 11, 12, 'Rekapitulasi Monitoring Periodik', 'rekapitulasi-monitoring-periodik', '', 'Mapping Agent Per QCO & Rekapitulasi Periodik Monitoring Agent Bulan September 2021.xlsx.pdf', ''),
(158, 11, 12, 'Real Time QM Score', 'real-time-qm-score', '', 'Real Time QM Score September 2021.xlsx - SEPTEMBER 2021.pdf', ''),
(159, 11, 12, 'Mystery Omni Channel Voice', 'mystery-omni-channel-voice', '', 'Mysteri Omni Channel Voice- SEPTEMBER 2021.pdf', ''),
(160, 11, 12, 'Mystery Omni Channel e-Mail', 'mystery-omni-channel-e-mail', '', 'Mysteri Omni Channel Email- SEPTEMBER 2021.pdf', ''),
(161, 11, 12, 'Mystery Omni Channel SocMed', 'mystery-omni-channel-socmed', '', 'Mysteri Omni Channel Socmed- SEPTEMBER 2021.pdf', ''),
(162, 12, 0, 'Pengunduran Diri Karyawan', 'pengunduran-diri-karyawan', '', 'IN.HSC.TDSCC.P-01 Rev.01 Prosedur Pengunduran Diri Karyawan.pdf', ''),
(163, 12, 0, 'Operasi Standar Agent Email', 'operasi-standar-agent-email', '', 'IN.OCC.TENESA.P-05 Prosedur Operasi Standar Agent Email.pdf', ''),
(164, 12, 0, 'Operasi Standar Agent Tier 1 Voice', 'operasi-standar-agent-tier-1-voice', '', 'IN.OCC.TENESA.P-10 Prosedur Operasi Standar Agent Tier 1 Voice.pdf', ''),
(165, 12, 0, 'Operasi Standar Agent Sosial Media', 'operasi-standar-agent-sosial-media', '', 'IN.OCC.TENESA.P-08 Prosedur Operasi Standar Agent Sosial Media.pdf', ''),
(166, 12, 0, 'Evaluasi, Analisa dan Monitoring Performansi Layanan', 'evaluasi-analisa-dan-monitoring-performansi-layanan', '', 'IN.QCC.TDSCC.P-02 REV.02 Prosedur Evaluasi, Analisa dan Monitoring Performansi Layanan.pdf', ''),
(167, 12, 0, 'Pelaksanaan Tapping, Tabbing & Kalibrasi Panggilan', 'pelaksanaan-tapping-tabbing-&-kalibrasi-panggilan', '', 'IN.QCC.TDSCC.P-03 REV.02 Prosedur Pelaksanaan Tapping, Tabbing & Kalibrasi Panggilan.pdf', ''),
(168, 12, 0, 'Prosedur Mystery Calling', 'prosedur-mystery-calling', '', 'IN.QCC.TDSCC.P-01 REV.02 Prosedur Mystery Calling.pdf', ''),
(169, 13, 0, 'Kriteria Penilaian Kinerja Agent Level 0', 'kriteria-penilaian-kinerja-agent-level 0', '', 'IN.HSC.TDSCC.S-01 REV.02 Standar Kriteria Penilaian Kinerja Agent Level 0.pdf', ''),
(170, 13, 0, 'Kriteria Penilaian Kinerja Agent Level 1', 'kriteria-penilaian-kinerja-agent-level-1', '', 'IN.HSC.TDSCC.S-02 REV.02 Standar Kriteria Penilaian Kinerja Agent Level 1.pdf', ''),
(171, 13, 0, 'Kriteria Penilaian Agent Violet', 'kriteria-penilaian-agent-violet', '', 'IN.HSC.TDSCC.S-03 REV.02 Standar Kriteria Penilaian Agent Violet.pdf', ''),
(172, 13, 0, 'Kriteria Penilaian Agent NMS', 'kriteria-penilaian-agent-nms', '', 'IN.HSC.TDSCC.S-06 REV.02 Standar Kriteria Penilaian Agent NMS.pdf', ''),
(173, 13, 0, 'Kriteria Penilaian Kinerja Agent IMES', 'kriteria-penilaian-kinerja-agent-imes', '', 'IN.HSC.TDSCC.S-07 REV.02 Standar Kriteria Penilaian Kinerja Agent IMES.pdf', ''),
(174, 13, 0, 'Kriteria Penilaian Agent Global', 'kriteria-penilaian-agent-global', '', 'IN.HSC.TDSCC.S-08 REV.02 Standar Kriteria Penilaian Agent Global.pdf', ''),
(175, 13, 0, 'Kriteria Penilaian Kinerja Agent Info Produk', 'kriteria-penilaian-kinerja-agent-info-produk', '', 'IN.HSC.TDSCC.S-09 REV.02 Standar Kriteria Penilaian Kinerja Agent Info Produk.pdf', ''),
(176, 13, 0, 'Kriteria Penilaian Agent For Improvement', 'kriteria-penilaian-agent-for-improvement', '', 'IN.HSC.TDSCC.S-10 REV.02 Standar Kriteria Penilaian Agent For Improvement.pdf', ''),
(177, 13, 0, 'Kriteria Penilaian Rotasi - Promosi SDM', 'kriteria-penilaian-rotasi-promosi-sdm', '', 'IN.HSC.TDSCC.S-11 REV.02 Standar Kriteria Penilaian Rotasi - Promosi SDM.pdf', ''),
(178, 13, 0, 'Kriteria Penilaian Kinerja Agent Email', 'kriteria-penilaian-kinerja-agent-email', '', 'IN.HSC.TDSCC.S-12 REV.01 Standar Kriteria Penilaian Kinerja Agent Email.pdf', ''),
(179, 13, 0, 'Call Script - Info Produk', 'call-script-info-produk', '', 'IN.OCC.TDSCC.S-05 REV.02 Standar Call Script - Info Produk.pdf', ''),
(180, 13, 0, 'Call Script - Open Tiket', 'call-script-open-tiket', '', 'IN.OCC.TDSCC.S-05 REV.02 Standar Call Script - Open Tiket.pdf', ''),
(181, 13, 0, 'Call Script - Tanya Progress', 'call-script-tanya-progress', '', 'IN.OCC.TDSCC.S-05 REV.02 Standar Call Script - Tanya Progress.pdf', ''),
(182, 13, 0, 'Call Script - Transfer', 'call-script-transfer', '', 'IN.OCC.TDSCC.S-05 REV.02 Standar Call Script - Transfer.pdf', ''),
(183, 13, 0, 'Template Work Log Close Ticket', 'template-work-log-close-ticket', '', 'IN.OCC.TDSCC.S-06 REV.02 Standar Template Work Log Close Ticket.pdf', ''),
(184, 13, 0, 'Template Work Log Email by Nossa', 'template-work-log-email-by-nossa', '', 'IN.OCC.TDSCC.S-06 REV.02 Standar Template Work Log Email by Nossa.pdf', ''),
(185, 13, 0, 'Template Work Log Open Ticket', 'template-work-log-open-ticket', '', 'IN.OCC.TDSCC.S-06 REV.02 Standar Template Work Log Open Ticket.pdf', ''),
(186, 13, 0, 'Template Work Log Ticket', 'template-work-log-ticket', '', 'IN.OCC.TDSCC.S-06 REV.02 Standar Template Work Log Ticket.pdf', ''),
(187, 13, 0, 'Template Work Log Update Ticket', 'template-work-log-update-ticket', '', 'IN.OCC.TDSCC.S-06 REV.02 Standar Template Work Log Update Ticket.pdf', ''),
(188, 13, 0, 'Penggunaan Jawaban - Gangguan Masal', 'ppenggunaan-jawaban-gangguan-masal', '', 'IN.OCC.TDSCC.S-07 REV.01 Standar Penggunaan Jawaban - Gangguan Masal.pdf', ''),
(189, 13, 0, 'Penggunaan Jawaban - Informasi Khusus', 'penggunaan-jawaban-informasi-khusus', '', 'IN.OCC.TDSCC.S-07 REV.01 Standar Penggunaan Jawaban - Informasi Khusus.pdf', ''),
(190, 13, 0, 'Penggunaan Jawaban - Maintenance Aplikasi', 'penggunaan-jawaban-maintenance-aplikasi', '', 'IN.OCC.TDSCC.S-07 REV.01 Standar Penggunaan Jawaban - Maintenance Aplikasi.pdf', ''),
(191, 13, 0, 'Penilaian Parameter Agent Level 0', 'penilaian-parameter-agent-evel-0', '', 'IN.QCC.TDSCC.S-01 REV.02 Standar Penilaian Parameter Agent Level 0.pdf', ''),
(192, 13, 0, 'Penilaian Parameter Agent Level 1', 'penilaian-parameter-agent-level-1', '', 'IN.QCC.TDSCC.S-02 REV.02 Standar Penilaian Parameter Agent Level 1.pdf', ''),
(193, 13, 0, 'Penilaian Parameter Agent Email', 'penilaian-parameter-agent-email', '', 'IN.QCC.TDSCC.S-03 REV.02 Standar Penilaian Parameter Agent Email.pdf', ''),
(194, 13, 0, 'Penilaian Parameter Agent Violet', 'penilaian-parameter-agent-violet', '', 'IN.QCC.TDSCC.S-04 REV.01 Standar Penilaian Parameter Agent Violet.pdf', ''),
(195, 13, 0, 'Penilaian Parameter Agent Global', 'penilaian-parameter-agent-global', '', 'IN.QCC.TDSCC.S-05 REV.01 Standar Penilaian Parameter Agent Global.pdf', ''),
(196, 13, 0, 'Penilaian Parameter Agent IMES', 'penilaian-parameter-agent-imes', '', 'IN.QCC.TDSCC.S-06 REV.01 Standar Penilaian Parameter Agent IMES.pdf', ''),
(197, 14, 0, 'Coaching For Improvement', 'coaching-for-improvement', '', 'IN.HSC.TDSCC.F-03 REV.02 Form Coaching For Improvement.pdf', ''),
(198, 14, 0, 'Daftar Hadir', 'daftar-hadir', '', 'IN.HSC.TDSCC.F-04 REV.02 Form Daftar Hadir.pdf', ''),
(199, 14, 0, 'Izin Cuti Khusus', 'izin-cuti-khusus', '', 'IN.HSC.TDSCC.F-05 REV.03 Form Izin Cuti Khusus.pdf', ''),
(200, 14, 0, 'Kronologis', 'kronologis', '', 'IN.HSC.TDSCC.F-14 REV.02 Form Kronologis.pdf', ''),
(201, 14, 0, 'Coaching For Success', 'coaching-for-success', '', 'IN.HSC.TDSCC.F-21 REV.02 Form Coaching For Success.pdf', ''),
(202, 14, 0, 'Permohonan Cuti', 'permohonan-cuti', '', 'IN.HSC.TDSCC.F-23 REV.03 Form Permohonan Cuti.pdf', ''),
(203, 14, 0, 'Perintah Kerja Lembur (FPKL)', 'perintah-kerja-lembur-fpkl', '', 'IN.HSC.TDSCC.F-24 REV.03 Form Perintah Kerja Lembur (FPKL).pdf', ''),
(204, 14, 0, 'Pengunduran Diri Karyawan', 'pengunduran-diri-karyawan', '', 'IN.HSC.TDSCC.F-30 REV.01 Form Pengunduran Diri Karyawan.pdf', ''),
(205, 14, 0, 'Resume Bedah Tiket', 'resume-beda-tiket', '', 'IN.OCC.TDSCC.F-17 REV.02 Form Resume Bedah Tiket.pdf', ''),
(206, 14, 0, 'Rekap Ijin Keluar Kantor', 'rekap-ijin-keluar-kantor', '', 'IN.OCC.TDSCC.F-26 REV.02 Form Rekap Ijin Keluar Kantor.pdf', ''),
(207, 14, 0, 'Rekap Data Prospek Calon Pelanggan', 'rekap-data-prospek-calon-pelanggan', '', 'IN.OCC.TDSCC.F-28 REV.01 Form Rekap Data Prospek Calon Pelanggan.pdf', ''),
(208, 14, 0, 'Penilaian Kinerja Agent Level 0', 'penilaian-kinerja-agent-level-0', '', 'IN.SUP.TDSCC.F-05 REV.02 Form Penilaian Kinerja Agent Level 0.pdf', ''),
(209, 14, 0, 'Penilaian Kinerja Agent Level 1', 'penilaian-kinerja-agent-level-1', '', 'IN.SUP.TDSCC.F-06 REV.02 Form Penilaian Kinerja Agent Level 1.pdf', ''),
(210, 14, 0, 'Penilaian Kinerja Agent Violet', 'penilaian-kinerja-agent-violet', '', 'IN.SUP.TDSCC.F-07 REV.02 Form Penilaian Kinerja Agent Violet.pdf', ''),
(211, 14, 0, 'Penilaian Kinerja Agent NMS', 'penilaian-kinerja-agent-nms', '', 'IN.SUP.TDSCC.F-10 REV.02 Form Penilaian Kinerja Agent NMS.pdf', ''),
(212, 14, 0, 'Penilaian Kinerja Agent IMES', 'penilaian-kinerja-agent-imes', '', 'IN.SUP.TDSCC.F-11 REV.02 Form Penilaian Kinerja Agent IMES.pdf', ''),
(213, 14, 0, 'Penilaian Kinerja Agent Global', 'penilaian-kinerja-agent-global', '', 'IN.SUP.TDSCC.F-12 REV.02 Form Penilaian Kinerja Agent Global.pdf', ''),
(214, 14, 0, 'Penilaian Kinerja Agent Info Produk', 'penilaian-kinerja-agent-info-produk', '', 'IN.SUP.TDSCC.F-13 REV.02 Form Penilaian Kinerja Agent Info Produk.pdf', ''),
(215, 14, 0, 'Penilaian Kinerja Agent Email', 'penilaian-kinerja-agent-email', '', 'IN.SUP.TDSCC.F-14 REV.01 Form Penilaian Kinerja Agent Email.pdf', ''),
(216, 13, 0, 'Standar Template Email-Interaksi Gangguan', 'standar-template-email-interaksi-gangguan', '', 'IN.OCC.TENESA.S-04 Rev.01 Standar Template Email-Interaksi Gangguan.pdf', ''),
(217, 13, 0, 'Standar Template Email-Interaksi Informasi', 'standar-template-email-interaksi-informasi', '', 'IN.OCC.TENESA.S-04 Rev.01 Standar Template Email-Interaksi Informasi.pdf', ''),
(218, 13, 0, 'Standar Template Email-Interaksi Permintaan', 'standar-template-email-interaksi-permintaan', '', 'IN.OCC.TENESA.S-04 Rev.01 Standar Template Email-Interaksi Permintaan.pdf', ''),
(219, 11, 13, 'Rekapitulasi Monitoring Periodik ', 'rekapitulasi-onitoring-periodik ', '', 'Mapping Agent & Rekapitulasi Periodik Monitoring Agent Bulan November 2021.xlsx.pdf', ''),
(220, 11, 13, 'Real Time QM Score', 'real-time-qm-score', '', 'Real Time QM Score November 2021.xlsx - NOVEMBER 2021.pdf', ''),
(221, 11, 13, 'Rekap Temuan Kualitas Suara WFH ', 'rekap-temuan-kualitas-suara-wfh', '', 'Rekap Temuan Kualitas Suara WFH - November 2021.xlsx.pdf', ''),
(222, 11, 13, 'Achievement Periodik', 'achievement-periodik', '', 'Achievement Periodik November 2021.xlsx.pdf', ''),
(223, 11, 13, 'Mysteri Omni Channel Voice', 'mysteri-omni-channel-voice', '', 'Mysteri Omni Channel Voice- NOVEMBER 2021.pdf', ''),
(224, 11, 13, 'Mysteri Omni Channel Email', 'mysteri-omni-channel-email', '', 'Mysteri Omni Channel Email- NOVEMBER 2021.pdf', ''),
(225, 11, 13, 'Mysteri Omni Channel Socmed', 'mysteri-omni-channel-socmed', '', 'Mysteri Omni Channel Socmed- NOVEMBER 2021.pdf', ''),
(226, 10, 0, 'Instruksi Kerja Agent Global', 'instruksi-kerja-agent-global', '', 'IN.OCC.TENESA.W-08 Instruksi Kerja Agent Global.pdf', ''),
(228, 10, 0, 'Instruksi Kerja Permintaan Registrasi & Pengiriman EBS', 'instruksi-kerja-permintaan-registrasi-pengiriman-ebs', 'Instruksi Kerja Permintaan Registrasi & Pengiriman EBS', '1640359203_f03e8114d595b97f05d5.pdf', ''),
(229, 9, 0, 'Panduan Aplikasi ACS-ibooster via SN dan Mac Address', 'panduan-aplikasi-acs-ibooster-via-sn-dan-mac-address', 'Panduan Aplikasi ACS-ibooster via SN dan Mac Address', '1640572953_fb4cb7d2f0a406d5299a.pdf', ''),
(235, 8, 6, 'Pansol IPTV', 'pansol-iptv', 'Pansol IPTV', '1641367870_0d00edd6e631eabe4146.pdf', ''),
(236, 8, 4, 'Pengecekan Hunting', 'pengecekan-hunting', 'Pengecekan Nomor Hunting', '1641367924_04b5e7e7d794c6600ace.pdf', ''),
(237, 9, 2, 'Registrasi EBS', 'registrasi-ebs', 'Cara Registrasi EBS', '1641862701_2f5cdc2ebd55ca80fb44.pdf', ''),
(238, 8, 5, 'Pansol EBS Tidak Sampai', 'pansol-ebs-tidak-sampai', 'Pansol EBS Tidak Sampai', '1641862754_3816bba3247a03aaca31.pdf', ''),
(239, 8, 5, 'Pansol tidak bisa bayar tagihan', 'pansol-tidak-bisa-bayar-tagihan', 'Pansol tidak bisa bayar tagihan', '1641862787_b72f27a1c51c4e24be11.pdf', ''),
(241, 17, 0, 'Produk Antares IOT Platform', 'produk-antares-iot-platform', 'Produk Knowledge Antares', '1644941126_a1eb7931bfd7ab9ea1c6.pdf', ''),
(242, 17, 0, 'Produk ANTARES', 'produk-antares', 'Produk ANTARES', '1644941791_3d8ea713b66e43766a8b.pdf', ''),
(243, 17, 0, 'Produk BigBox', 'produk-bigbox', 'Produk BigBox', '1644941839_5ece22eb4df543184184.pdf', ''),
(244, 17, 0, 'Produk GameQoo', 'produk-gameqoo', 'Produk GameQoo', '1644941882_43137d30e0604e2f5056.pdf', ''),
(245, 17, 0, 'Produk IDGS', 'produk-idgs', 'Produk IDGS', '1644941917_289d0af01344600dab56.pdf', ''),
(246, 17, 0, 'Produk Knowledge IMES', 'produk-knowledge-imes', 'Produk Knowledge IMES', '1644941968_93e79a4965c92dfd4f37.pdf', ''),
(247, 17, 0, 'Produk Nadeefa Tomps', 'produk-nadeefa-tomps', 'Produk Nadeefa Tomps', '1644942011_1535c4a64e9061e42968.pdf', ''),
(248, 17, 0, 'Produk PICASO E-KYC', 'produk-picaso-e-kyc', 'Produk PICASO E-KYC', '1644942075_72c37266a630952e5477.pdf', ''),
(249, 17, 0, 'Produk Pijar Kampus', 'produk-pijar-kampus', 'Produk Pijar Kampus', '1644942134_c00513d830d7a3f10b9a.pdf', ''),
(250, 17, 0, 'Produk Worki', 'produk-worki', 'Produk Worki', '1644942181_b32109f6871a3bee43c7.pdf', ''),
(252, 16, 0, 'Diskusi Improvement Operasional TENESA (One on One SPV Email dan Sosial Media)', 'diskusi-improvement-operasional-tenesa-one-on-one-spv-email-dan-sosial-media', 'Diskusi Improvement Operasional TENESA (One on One SPV Email dan Sosial Media)', '1645179771_e36219a8026029466195.pdf', ''),
(253, 16, 0, 'MOM Diskusi Improvement Operasional TENESA (One on One SPV Trainer)', 'mom-diskusi-improvement-operasional-tenesa-one-on-one-spv-trainer', 'MOM Diskusi Improvement Operasional TENESA (One on One SPV Trainer)', '1645179886_6c1e7f617868f0b63918.pdf', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roster`
--

CREATE TABLE `roster` (
  `id_roster` int(11) NOT NULL,
  `name_file` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `file_document` varchar(255) NOT NULL,
  `file_drive` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `roster`
--

INSERT INTO `roster` (`id_roster`, `name_file`, `slug`, `file_document`, `file_drive`) VALUES
(1, 'Roster All Site 1 Juli 2021', 'roster-all-site-1-juli-2021', 'roster-1-juli-2021.xlsx', 'https://docs.google.com/spreadsheets/d/1E4J-28geqRbA49LSkzjGZE04j0Bycclp/edit#gid=1000967147'),
(2, 'Roster All Site 2 Juli 2021', 'roster-all-site-2-juli-2021', 'roster-2-juli-2021.xlsx', 'https://docs.google.com/spreadsheets/d/1ikixTCpwCQ_sMvIP8hrHKYIiSguhDe93/edit#gid=1640234183'),
(3, 'Roster All Site 3 Juli 2021', 'roster-all-site-3-juli-2021', 'roster-3-juli-2021.xlsx', 'https://docs.google.com/spreadsheets/d/1SQSW-XtyXZC4iGUoeABhSh-Y3Vhe3Gy-/edit#gid=1466994080'),
(4, 'Roster All Site 4 Juli 2021', 'roster-all-site-4-juli-2021', 'roster-4-juli-2021.xlsx', 'https://docs.google.com/spreadsheets/d/1xgsEK8DEX8ffi400Z0mzOvN5tXSqSq2L/edit#gid=870604698'),
(5, 'Roster All Site 5 Juli 2021', 'roster-all-site-5-juli-2021', 'roster-5-juli-2021.xlsx', 'https://docs.google.com/spreadsheets/d/11eu5k6y3plrOw7XIyMKaC4YDHdGa_14w/edit#gid=1615528866'),
(6, 'Roster All Site 6 Juli 2021', 'roster-all-site-6-juli-2021', 'roster-6-juli-2021.xlsx', 'https://docs.google.com/spreadsheets/d/1sd2bEMirNyOfS8R6ObKQYw4tKT2NhHJu/edit#gid=2070618808'),
(7, 'Roster All Site 7 Juli 2021', 'roster-all-site-7-juli-2021', 'roster-7-juli-2021.xlsx', 'https://docs.google.com/spreadsheets/d/1oLtLjoxERMUYoT4eEY4-3NCqw9NzqwZS/edit#gid=1015643138'),
(8, 'Roster All Site 8 Juli 2021', 'roster-all-site-8-juli-2021', 'roster-8-juli-2021.xlsx', 'https://docs.google.com/spreadsheets/d/1DT4dAo5MrtFzSvrUBJoma9EHoQGaCSj7/edit#gid=12256097'),
(9, 'Roster All Site 9 Juli 2021', 'roster-all-site-9-juli-2021', 'roster-9-juli-2021.xlsx', 'https://docs.google.com/spreadsheets/d/1AcVp0gApxs2bII3N-wTj-9wOA4pWqJWI/edit#gid=1039357052'),
(10, 'Roster All Site 10 Juli 2021', 'roster-all-site-10-juli-2021', 'roster-10-juli-2021.xlsx', 'https://docs.google.com/spreadsheets/d/1OhkqtO_xEIl_jWLNrJHbhyYm1cB6amzX/edit#gid=635224385'),
(11, 'Roster All Site 11 Juli 2021', 'roster-all-site-11-juli-2021', 'roster-11-juli-2021.xlsx', 'https://docs.google.com/spreadsheets/d/1K1sGui6z5wWa82eqNVOdeV4L9NzQYqro/edit#gid=2107664679'),
(12, 'Roster All Site 12 Juli 2021', 'roster-all-site-12-juli-2021', 'roster-12-juli-2021.xlsx', 'https://docs.google.com/spreadsheets/d/1w9PmULvlTLf_wDVpXlamzFd4Qh_hNuK2/edit#gid=597539779');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_product`
--

CREATE TABLE `sub_product` (
  `id_subproduct` int(11) NOT NULL,
  `id_katprod` int(255) NOT NULL,
  `name_subproduct` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sub_product`
--

INSERT INTO `sub_product` (`id_subproduct`, `id_katprod`, `name_subproduct`, `status`) VALUES
(1, 7, 'Telephony', 7),
(2, 7, 'IndiHome', 7),
(3, 7, 'Datin', 7),
(4, 8, 'Gangguan Telephony', 8),
(5, 8, 'Gangguan Internet', 8),
(6, 8, 'Gangguan Indihome TV', 8),
(7, 8, 'Gangguan Wifi.ID', 8),
(8, 8, 'Gangguan Datin', 8),
(9, 11, 'Juni', 11),
(10, 11, 'Juli', 11),
(11, 11, 'Agustus', 11),
(12, 11, 'September', 11),
(13, 11, 'November', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `user_parner` int(11) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` text NOT NULL,
  `no_hp` int(13) NOT NULL,
  `level` int(2) NOT NULL,
  `password` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `user_parner`, `jabatan`, `full_name`, `email`, `no_hp`, `level`, `password`, `image`) VALUES
(1, 581000, 'Administrasi', 'Admin', 'admin@gmail.com', 2147483647, 1, '0192023a7bbd73250516f069df18b500', 'admin.png'),
(2, 176920, 'Agent SPBU', 'Muhammad Syahputra', 'syahputram03@gmail.com', 2147483647, 2, '8a39ce3627030de9482aa7287371e90f', 'user.png'),
(3, 176932, 'Agent SPBU', 'Agus Yuliatin', 'ale.tlk21@gmail.com', 2147483647, 1, 'f13102f689df47c035daed89ee85ab2f', 'default.png'),
(4, 7, 'Guest', 'Moyo', 'ismoyo.jati.c4@gmail.com', 2147483647, 1, '4a6f9d501fab79417fd019ce939e8c82', 'default.png'),
(5, 1234567, 'DM', 'Dummy', 'abcd@gmail.com', 1234567, 1, 'bf8002d708225b093cee1fa1d1225b8c', 'default.png'),
(6, 7654321, 'DM', 'Dummy2', '6789@gmail.com', 98764, 2, '867655042e2554c6d864fd9b7b2989ca', 'default.png'),
(7, 26027, 'SPV VOICE-INDIHOME', 'HALIMAH LUBIS', 'halima@gmail.com', 0, 1, 'e4952978c46b17509cab03779bee0447', 'default.png'),
(8, 3415, 'SPV SPBU - NMS - IMES', 'DIMAS PRASETYO', 'dimas@gmail.com', 0, 1, '6abea069f7c565d7af58aaf2abbea5a1', 'default.png'),
(9, 3413, 'SPV OMNI - SPBU - NMS - IMES', 'IRMA MUTIA', '123', 123, 1, 'ca64fcf4a029bad1aba33eea573b29d1', 'default.png'),
(10, 3423, 'SPV DATIN - OMNI', 'NANDA KHOERUL FADLI', 'nanda@gmail.com', 0, 1, '642906f20368cb28ba5d8d3eb1e8f56e', 'default.png'),
(11, 3436, 'AGENT e-MAIL', 'DESI SAMSIAH', '123', 123, 2, 'facc003bd68af7c941a5cca48e292338', 'default.png'),
(12, 3438, 'AGENT DATIN', 'FITRI ARIYANI', '123', 123, 2, '96995a102df744453fa0bb674ad5a1b6', 'default.png'),
(13, 3454, 'SPV e-MAIL - SOCMED', 'YUDIYANTO', 'yudianto@gmail.com', 0, 1, '3ef5906f0fb5441e0c1e390c3f607b21', 'default.png'),
(14, 11874, 'AGENT IMES', 'WULANDARI', '123', 123, 2, '2880b2d6b91c5e64c24d9dde60fb2471', 'default.png'),
(15, 92601, 'WULANDARI11874', 'RIKY NUGRAHA', 'riki@gmail.com', 0, 2, '018e3b88551a5a0a377636f4f74a8787', 'default.png'),
(16, 11876, 'AGENT INDIHOME', 'HERUL SURYA KENCANA', '123', 123, 2, '786eb75568ef9cc52ec3bd7583b89a70', 'default.png'),
(17, 12361, 'AGENT INDIHOME', 'DWI ENARWATI', '123', 123, 2, '95554bcc5b3a030f955a8ec8cf002d33', 'default.png'),
(18, 98793, 'TL VOICE - INDIHOME', 'FAIQ AHMED ARYANA', 'faiq@gmail.com', 0, 2, '2f0062bbeb792cd3be417e0f94d3cb97', 'default.png'),
(19, 12381, 'AGENT INDIHOME', 'MARTINA LASTIANI ANGGI', '123', 123, 2, 'f1d75e4ecc719dd8c7f115b612364015', 'default.png'),
(20, 66071, 'TL VOICE - INDIHOME', 'YUSUF NURDIANSYAH', 'yusuf@gmail.com', 0, 2, '59b642d232927151496db05e91aeaa80', 'default.png'),
(21, 3416, 'TL e-MAIL - SOCMED', 'EKA MUSTIKA', 'eka@gmail.com', 0, 2, '4de01f15ed2ceea69e65927b224e36a3', 'default.png'),
(22, 27996, 'AGENT INDIHOME', 'SIDIK PAMUNGKAS', '123', 123, 2, '6ec4478311d6cb93015777a70aaabc4f', 'default.png'),
(23, 73831, 'TL DATIN - OMNI', 'RENDRA LUTFI MURASTRA', 'rendra@gmail.com', 0, 2, 'cab4372f76c3ea44293264ede5b66bf9', 'default.png'),
(24, 27998, 'SPV VOICE - INDIHOME - SocMeD', 'BAYU FIRMANSYAH', '123', 123, 1, '4bab43ddae0c3e04fdd021cc97ba562e', 'default.png'),
(25, 65017, 'TL DATIN - OMNI', 'EKO SISWOYO', 'eko@gmail.com', 0, 2, 'f9ab1b8a1abfb4c75dc0aaba8be1088d', 'default.png'),
(26, 3420, 'TL DATIN - OMNI', 'MUHAMAD FAUZI', 'fauzi@gmail.com', 0, 2, 'ddbe99c7b4e2a4c77f011f0d9ffc6640', 'default.png'),
(27, 31107, 'TL GLOBAL', 'RIZA RACHMAN', '123', 123, 2, '8634362241c6b86b93e2e4b064aba587', 'default.png'),
(28, 39132, 'AGENT INDIHOME', 'YOGA RAKHMAT SUBARKAH', '123', 123, 2, 'f6a6606319913f1073117abaedc81e50', 'default.png'),
(29, 31109, 'TL SPBU - NMS - IMES', 'AHMAD SALMAN TOHAERI', 'ahmad@gmail.com', 0, 2, '3404e7bc706428e5bb37c3dea4c6916f', 'default.png'),
(30, 51375, 'AGENT VOICE', 'ESTI WIJAYANTI', '123', 123, 2, 'c73f2d30042d12cc2e9803f73eda3d30', 'default.png'),
(31, 81838, 'TL SPBU - NMS - IMES', 'ARMAN PERMANA', 'arman@gmail.com', 0, 2, 'f4b2a459696b3289e88753257d406c4f', 'default.png'),
(32, 51460, 'SPV DATIN - e-MAIL', 'MOCH RIDWAN GUNAWAN', '123', 123, 1, 'f8eec80b598cc5f66f46d8e5782a8bcf', 'default.png'),
(33, 54145, 'TL SPBU - NMS - IMES', 'DIRGA VIRIAN', 'dirga@gmail.com', 0, 2, 'fed5fdd1ad1791339758e40b5e84bdc9', 'default.png'),
(34, 61070, 'AGENT VOICE', 'ELSA TARADHITA', '123', 123, 2, 'cbe526042cf4f31051abefa4393a06e4', 'default.png'),
(35, 62266, 'AGENT VOICE', 'DARJAT SUDARJAT', '123', 123, 2, '757708bb663baea65b18c1ea74cf4436', 'default.png'),
(36, 61603, 'DC', 'ALDY DWISEPTIKA', 'aldy@gmail.com', 0, 2, '550210eba706eb406406f05f5e981313', 'default.png'),
(37, 62381, 'AGENT DATIN', 'DWI ASTRI GUSTINA', '123', 123, 2, 'b7e36b864be3d0e1a25d627ebdfd2131', 'default.png'),
(38, 3427, 'DC', 'PUTRA PANJAITAN', 'putra@gmail.com', 0, 2, '922461fb0dcbae42b5e90d4d69c3dcf7', 'default.png'),
(39, 62384, 'AGENT IMES', 'RIDA WAHYU SAPUTRA', '123', 123, 2, '3f2559078580ece8c6683000bdb0b5ed', 'default.png'),
(40, 63482, 'AGENT e-MAIL', 'AYU ISMI WULAN', '123', 123, 2, '42e64a23f338fc6069ca95762932ed86', 'default.png'),
(41, 3409, 'SPV TRAINER', 'ISMOYO JATI', 'ismoyo@gmail.com', 0, 1, 'f1247857ab446a83857c982d9a2ad4dc', 'default.png'),
(42, 63762, 'AGENT DATIN', 'REGZI SERDIYANTI', '123', 123, 2, '1bee4697165e7e71b6b2c3c038fc7f6c', 'default.png'),
(43, 84160, 'TRAINER', 'ADITYA MAHMUD FAZA', 'fazaaditya1@gmail.com', 2147483647, 1, '73883efdc337e868125fbac84461161c', 'default.png'),
(44, 64478, 'TL DATIN - OMNI', 'INDHIKA ADRIANSHAH WIBOWO', '123', 123, 2, '1be3674e6722d0da23f2d22cfcef67b9', 'default.png'),
(45, 88243, 'TRAINER', 'BAMBANG SEPTIADI', 'bambang@gmail.com', 0, 1, '2c71f2beaf1b464e2595f91d42161780', 'default.png'),
(46, 70070, 'AGENT NMS', 'EDWINA CAROLIN PIETERSZ', '123', 123, 2, '41cf42cb173d9d2312033c04997defff', 'default.png'),
(47, 72656, 'AGENT IMES', 'SA\'ADIA TALAOHU', '123', 123, 2, 'b658e50d2c887c953e164b73178b6b7e', 'default.png'),
(48, 26028, 'SPV TRAINER', 'INDRA ARMANDA PUTRA', 'indra@gmail.com', 0, 1, '89903d4b642a75af658f152055aad9f6', 'default.png'),
(49, 73821, 'AGENT DATIN', 'ADITYA PUTRA PATRIA', '123', 123, 2, 'aee8e054f54b54e8e411825cd904fbf5', 'default.png'),
(50, 28890, 'QA SPV', 'RAHMAWATI ANHAR', 'rahmawati@gmail.com', 0, 1, 'f7131ffd62d09ab39d36e5a9caa25b65', 'default.png'),
(51, 76087, 'QCO SDA', 'CHOIRUNNISA', '123', 123, 2, '66c32cbdcc819e9db6fd343484159912', 'default.png'),
(52, 171981, 'DOCUMENT CONTROL', 'AUDINA RAHMANDA', 'audinar@gmail.com', 0, 2, '64789da244e29e012f1f608e4c1aaaf6', 'default.png'),
(53, 77611, 'TL SPBU - NMS - IMES', 'DWI CAHYANTO WIBOWO', '123', 123, 2, '567e1ab94f1dc1bf4605fb3d4972b31e', 'default.png'),
(54, 78101, 'AGENT DATIN', 'FACRHAT', '123', 123, 2, 'a7c07901c129adfd8b35187f089ba107', 'default.png'),
(55, 75068, 'QCO SDA', 'BIQI MUHAMAD RIZAL', 'biqi@gmail.com', 0, 2, '2dad88ebf2baad378680ce77c604b86b', 'default.png'),
(56, 78875, 'AGENT DATIN', 'TAUFIK HIDAYAT', '123', 123, 2, 'e9bafd69bb6e430a4f78646774f04084', 'default.png'),
(57, 78880, 'TL DATIN - OMNI', 'FADLY HIDAYAT', '123', 123, 2, '11e17eb89267032db7c3dcb95e3bd66f', 'default.png'),
(58, 79430, 'TL SPBU - NMS - IMES', 'EMIA EDUINA BR SEMBIRING', '123', 123, 2, 'a4bc2be2f84acae11d348ccb1dd600cc', 'default.png'),
(59, 99253, 'QCO SDA', 'EKA PURNAMA SARI', 'eka@gmail.com', 0, 2, '463752b05249c955296051f860a5a2a7', 'default.png'),
(60, 79432, 'AGENT VOICE', 'SATRIANI BR KARO SEKALI', '123', 123, 2, '74d0a665b8b66e6a1bf95981793fafa0', 'default.png'),
(61, 3344, 'QCO SDA', 'KANIA FITRIANI SUMINAR', 'kania@gmail.com', 0, 2, '066c5e0da8de54ef942aaec490dd5e11', 'default.png'),
(62, 79439, 'AGENT NMS', 'REZA ALIANI PUTRA', '123', 123, 2, 'df22f96ee1afeebe7e8f0e4877ea78d9', 'default.png'),
(63, 11828, 'QCO SDA', 'KURNIAWATI', 'kru@gmail.com', 0, 2, '1ceab394fb520f6945ae3c3c9e61ed89', 'default.png'),
(64, 80821, 'TL SPBU - NMS - IMES', 'SRI YUDHO PINILIEH', '123', 123, 2, '9d2ae5c2016b994d0e1f06bb3d05e667', 'default.png'),
(65, 11713, 'QCO SDA', 'NURLAILY', 'nur@gmail.com', 0, 2, 'd9e6bb16bd8f74a7ece393bd0a05a952', 'default.png'),
(66, 80828, 'TL SocMed -  e-MAIL', 'MUHAMMAD HANIF', '123', 123, 2, '47cb29ded0878edfcbf1f44a4b0ff3f0', 'default.png'),
(67, 35590, 'QCO SDA', 'RIZKY ADI PURNAMA', 'rizky@gmail.com', 0, 2, 'a408e99744413e9d2ea35e2e304fcdd9', 'default.png'),
(68, 80830, 'AGENT IMES', 'PANJI SATRIA BUNDA', '123', 1123, 2, 'db6af7aacded5e4edf537b4c23c652ec', 'default.png'),
(69, 87929, 'QCO SDA', 'WINDI SITI HAJRIANI', 'windi@gmail.com', 0, 2, '40e4ab4718da55cb30ca8d1dbf02f73b', 'default.png'),
(70, 81351, 'TL VOICE - INDIHOME', 'MUAMAR NOVALNOH IDRUS', '112', 123, 2, '4c4722a1b9a0dfff59ab251b6360fb04', 'default.png'),
(71, 81353, 'TL VOICE - INDIHOME', 'IQBAL PURNOMO', '123', 123, 2, 'eb4259e65acf3f506fa14b44192250fa', 'default.png'),
(72, 12222, 'QCO EOS', 'ANDHY', 'andhy@gmail.com', 0, 2, 'c4687638563a3d48106a52e816122920', 'default.png'),
(73, 82266, 'QCO SDA', 'ANGGI PUTRIANI PRASETYO', '123', 123, 2, 'acd4f8d4174cc09cc842cde1abe23854', 'default.png'),
(74, 78884, 'QCO EOS', 'ANGGRAINI RAHMAWATI LUBIS', 'ang@gmail.com', 0, 2, 'd87e58e48df000a5453835bc50f38711', 'default.png'),
(75, 63779, 'QCO EOS', 'FATAH PAMUNGKAS', 'fatah@gmail.com', 0, 2, '00de8216fdb154c1d0207039b11c343e', 'default.png'),
(76, 82279, 'TL DATIN - OMNI', 'RUDI HARTONO', '123', 123, 2, '6873f74ce4d85be0177111d535a371af', 'default.png'),
(77, 68828, 'QCO EOS', 'RIZKY PRASETYO', 'rizky@gmail.com', 0, 2, '1125f59069b70a4ed0f157b405655b43', 'default.png'),
(78, 82281, 'AGENT IMES', 'FATMA SYIFA MAFTUCHA', '113', 123, 2, '0090ed12134deed2bdbec549ee851c0f', 'default.png'),
(79, 95495, 'QCO EOS', 'VANYA RAHMA PUTRI', 'vanya@gmail.com', 0, 2, '044534f0da361a3d8c9750ad9ba3eb4b', 'default.png'),
(80, 82284, 'TL SocMed -  e-MAIL', 'ADI MIFTAHUL FAUZI NUR ROHIM', '123', 123, 2, '99d120f3233b9c0aa2b6cd80364163c7', 'default.png'),
(81, 12282, 'OPERATION PLAN', 'LERTINA MANULLANG', 'lertina@gmail.com', 0, 2, '7a8227acd9cf691c16ad68700ac7d100', 'default.png'),
(82, 95494, 'ADMIN OPS', 'DUSTIN YUDA PURBAYA', 'dustin@gmail.com', 0, 2, '9bba86d292ac144344da3f0381ea578c', 'default.png'),
(83, 82286, 'TL VOICE - INDIHOME', 'ALIZZA NAUFAL A', '123', 123, 2, 'c555dc4c0e77b50e9f8a6dccaa8b8d1d', 'default.png'),
(84, 82287, 'AGENT NMS', 'JEMI JAENUDIN ALPIAN', '123', 123, 2, '81cd697faccdd99f7fe0cce012a7c0b6', 'default.png'),
(85, 82288, 'AGENT INDIHOME', 'JIMMY ANDRIE COMMANDO', '123', 123, 2, '1070b8cbacb02966787fec5bf5ef2fb8', 'default.png'),
(86, 82607, 'AGENT VOICE', 'YURISTIAN RIZALNI', '123', 123, 2, '0044227fa3a1740c0645a52a994eba3f', 'default.png'),
(87, 84161, 'AGENT INDIHOME', 'ERRY NUR ARIFIN', '123', 123, 2, '1ab88fcfd5e4c913f2314d579277eebd', 'default.png'),
(88, 92593, 'AGENT DATIN', 'DUWI SEPTIANI', 'duwi@gmail.com', 0, 2, '56b6470ede1ffd4b37e624160db6086e', 'default.png'),
(89, 89259, 'AGENT e-MAIL', 'RINA WIJAYANTI', '123', 123, 2, '311c59450be0d0bd5e1e0e3e76935fcb', 'default.png'),
(90, 92600, 'AGENT DATIN', 'RATNA DEWI PUSPITASARI', 'ratna@gmail.com', 0, 2, '7f515ce5951cc3375a1381d572c7ebee', 'default.png'),
(91, 92605, 'AGENT DATIN', 'RUQI ANTIKA', 'ruqi@gmail.com', 0, 2, '817caf1d7d5060f4b7baeca3ce1b93a0', 'default.png'),
(92, 95422, 'AGENT VOICE', 'NURFITRIANA', '123', 123, 2, 'e862021cef5b82689bfb73de4cf5c215', 'default.png'),
(93, 98673, 'AGENT INDIHOME', 'ANDI ANDRIANTO', '123', 12, 2, '958315bec3d87044155882c9e002b720', 'default.png'),
(94, 91681, 'AGENT DATIN', 'WULAN PURWANTI', 'wulan@gmail.com', 0, 2, '8ccabb203bd6fdff9077e1281cf4a6bc', 'default.png'),
(95, 101521, 'AGENT DATIN', 'ACHMAD ALFIAN R', 'achmad@gmail.com', 0, 2, 'a5ee6ddc89d20bad5a6014f29427827e', 'default.png'),
(96, 99239, 'TL SPBU - NMS - IMES', 'CATUR WAHYU WIRAWAN', '12', 12, 2, '84983fb13bb08dbb653bac81992c07e0', 'default.png'),
(97, 105370, 'AGENT DATIN', 'ADITYO NUGROHO', 'adityo@gmail.com', 0, 2, 'c30e8ad88d19f25456c9eb2fbdf79f99', 'default.png'),
(98, 99751, 'AGENT DATIN', 'AGI FAKHRU WILDAN', 'agi@gmail.com', 0, 2, 'c49eaa4485f273177ba0b58c25771907', 'default.png'),
(99, 96312, 'AGENT DATIN', 'BAMBANG NURDIANSYAH', 'bambang@gmail.com', 0, 2, '856b346dadecc752d999c5eb319374f9', 'default.png'),
(100, 105371, 'AGENT DATIN', 'BOBY INDRA SETIAWAN', 'boby@gmail.com', 0, 2, '6ba2039594ca3aa03dc2ebecec097fce', 'default.png'),
(101, 150668, 'AGENT DATIN', 'DADAN ABDUL JABAR', 'dandan@gmail.com', 0, 2, '6629099bdd2848274cbaec8bcc2cbeea', 'default.png'),
(102, 91670, 'AGENT DATIN', 'DERA FADLY HAMDANI', 'dera@gmail.com', 0, 2, 'c572f7a1fb59f59231db033925ddc534', 'default.png'),
(103, 104235, 'AGENT DATIN VIOLET', 'FERNANDO SIHOLE', 'fe@gmail.com', 0, 2, 'f55224edf496069910beebe8e93dbf11', 'default.png'),
(104, 98806, 'AGENT DATIN', 'INDRA APRIYADI', 'indra@gmail.com', 0, 2, '92c11ae1ee03073b54b3c964aeac21a9', 'default.png'),
(105, 87153, 'AGENT DATIN', 'INDRA PERMANA', 'indra@gmail.com', 0, 2, '3b2dd38e8f607bf7271e14f86be44148', 'default.png'),
(106, 90995, 'AGENT DATIN', 'KIKI ANGGARA', 'kiki@gmail.com', 0, 2, 'c886ee942737d5142523ed376242b762', 'default.png'),
(107, 91662, 'AGENT OMNI', 'M RUDI KUSUMAH S', 'rudi@gmail.com', 0, 2, 'ec7cb196dc4f8c0cbf9684758da6017d', 'default.png'),
(108, 101527, 'AGENT DATIN', 'MUHAMMAD FAIZ BILLAH', 'muhammad@gmail.com', 0, 2, '742b06860b54c726d8e5000270412d81', 'default.png'),
(109, 150628, 'AGENT DATIN', 'NUR SYAWAL', 'syawal@gmail.com', 0, 2, '01f12898798057d221d2756d065bc3ee', 'default.png'),
(110, 104241, 'AGENT DATIN', 'SOPYAN', 'SOPYAN@GMAIL.COM', 0, 2, '547e5d20e35171e495668e39d9894994', 'default.png'),
(111, 11866, 'AGENT DATIN', 'SUHERMAN', 'suherman@gmail.com', 0, 2, '63c5ca511da90b8790605e885dba2d0a', 'default.png'),
(112, 91742, 'AGENT DATIN VIOLET', 'MEDI ARI COEBITI', 'medi@gmail.com', 0, 2, '0ead5d81e7b2e50143580558bb031d17', 'default.png'),
(113, 94176, 'AGENT DATIN VIOLET', 'ALDI HANDIAN SURYANA', 'aldi@gmail.com', 0, 2, '079864385345e298c8f0b0f5c9672356', 'default.png'),
(114, 92563, 'AGENT DATIN VIOLET', 'ANDHIKA SANDI ZATMIKA', 'andhika@gmail.com', 0, 2, 'ec76e89bef18d2475fbfba6caf8811f8', 'default.png'),
(115, 99244, 'AGENT INDIHOME', 'EKA NOVIYANTI', '123', 123, 2, 'bd17e40316cf17083d046af813dae9f9', 'default.png'),
(116, 98792, 'AGENT DATIN VIOLET', 'ARIF HIDAYAT SUMARNA', 'arif@gmail.com', 0, 2, '3ad421b29ccf242660ab0f14a4549128', 'default.png'),
(117, 110864, 'QCO SDA', 'FITRI ANI SIHALOHO', '123', 123, 2, '7ad55787a66dccff15c57c1cd7579602', 'default.png'),
(118, 105375, 'AGENT DATIN VIOLET', 'ERY GUSTIAN', 'ery@gmail.com', 0, 2, 'c8eb0f0c48dff5aaa241aebbdf909824', 'default.png'),
(119, 126165, 'QCO SDA', 'SONDANG BR SAGALA', '123', 123, 2, '1c21e30969aae89ec2a320c94ca1d2f2', 'default.png'),
(120, 105377, 'AGENT DATIN VIOLET', 'INDRA PIGUNA', 'indra@gmail.com', 0, 2, '6cc142ac0379602e470debf884937bad', 'default.png'),
(121, 150076, 'TL VOICE - INDIHOME', 'MUHAMMAD ALIQ AULIA', '13', 23, 2, 'e89f4ad631d9201dcc03cb693fea6a0c', 'default.png'),
(122, 105379, 'AGENT DATIN VIOLET', 'MUHAMMAD IKHSAN', 'muhammad@gmail.com', 0, 2, '52e102fb8db73180a44719f8cf806b42', 'default.png'),
(123, 150077, 'TL VOICE - INDIHOME', 'RIZKY MAYNARDA', '123', 123, 2, 'd9dee86a091e036245987d0b595727ff', 'default.png'),
(124, 92603, 'AGENT IMES', 'RIZKI RAHMAT RIANSYAH', 'rizki@gmail.com', 0, 2, 'b93645bc283760d47894f208ab92bf2f', 'default.png'),
(125, 152391, 'ADMIN OPS', 'NOVIKA RATIH EKA KUMALA', '123', 123, 1, '3bf0b984e227af512e0b29a5db32b5ee', 'default.png'),
(126, 98796, 'AGENT DATIN VIOLET', 'ROMY YUDISTIRA', 'romy@gmail.com', 0, 2, 'ad0b851f606f16481dc8ba5993124a91', 'default.png'),
(127, 153911, 'AGENT IMES', 'AHMAD BAIHAQI ANNAZILY', '123', 123, 2, 'fa65bab8cca7783c4a2f741006c4fce6', 'default.png'),
(128, 98797, 'AGENT DATIN VIOLET', 'RYAN RUHIMAT', 'ryan@gmail.com', 0, 2, '994c9eb633cd8ab5c071fbfec087f371', 'default.png'),
(129, 92582, 'AGENT DATIN VIOLET', 'SATRIA MUKTI AJI', 'satria@gmail.com', 0, 2, 'b6c23d9aaae630650e0702d493d304e6', 'default.png'),
(130, 155159, 'AGENT e-MAIL', 'AZIZA DWI SAPUTRI', '123', 123, 2, '8584019decc23e3d23c188ecb362e51e', 'default.png'),
(131, 92584, 'AGENT DATIN VIOLET', 'TAUFIQ NURROHMAN', 'taufiq@gmail.com', 0, 2, '7c193b78358f6438f3d9bfe14b503c39', 'default.png'),
(132, 155163, 'AGENT e-MAIL', 'JAN FERY HAISMA SINAGA', '13', 12, 2, 'cafd8942abf949f258ba3e1d6ba6db84', 'default.png'),
(133, 92609, 'AGENT e-MAIL', 'ZHARIF HIDAYAT', 'zharif@gmail.com', 0, 2, '26040cda66a57dbdcc2c8446dc79fa4c', 'default.png'),
(134, 155896, 'AGENT DATIN', 'AWAL BAYU HARIYANTO', '123123', 123, 2, '8d3e03cb8fba86fb4e9f08ceee1c86b0', 'default.png'),
(135, 158246, 'AGENT GLOBAL', 'ELIS MELANI', 'elis@gmail.com', 0, 2, '61f9b353b10a542969fba1684438a368', 'default.png'),
(136, 91659, 'AGENT GLOBAL', 'BAYU RAMADAN', 'bayu@gmail.com', 0, 2, '032c55e2f1461f7ea2fb7b60efe1aabf', 'default.png'),
(137, 157534, 'DC', 'IRFANSHAH KARIM', '12', 12, 2, '3aea60ff2b4d780da5e99740ad64e426', 'default.png'),
(138, 62818, 'AGENT GLOBAL', 'MUHAMMAD WAHID SOFYAN', 'muhammad@gmail.com', 0, 2, '84b25bc3220f1d20062d48b35af60b65', 'default.png'),
(139, 84163, 'AGENT GLOBAL', 'MUHAMAD HASAN BASRI', 'muhammad@mail.com', 0, 2, 'ac09bd5ba9f66638ce7a78d2b1ab89f1', 'default.png'),
(140, 157538, 'AGENT IMES', 'QADRYANSYAH NOOR', '23', 23, 2, '75a5ea7e8d28ed8ac49cb6b5ec13e76b', 'default.png'),
(141, 92608, 'AGENT GLOBAL', 'WILDAN SEPTAMA', 'wildan@gmail.com', 0, 2, '58a125b2b199aaae283b2b39bfb19a15', 'default.png'),
(142, 92585, 'AGENT GLOBAL', 'YORIS ORLANDO', 'yoris@gmail.com', 0, 2, 'b7c6c8a18820cc1f675d32de51dcd579', 'default.png'),
(143, 91657, 'AGENT e-MAIL', 'ANDINI PRAMUDITA', 'andin@gmail.com', 0, 2, 'd2cdf7098694db8242b2c69273d8eac5', 'default.png'),
(144, 157542, 'QCO SDA', 'YOLANDA ERZIANA', '34', 256, 2, 'a1a328c12146dc2a30f4b5e44475e997', 'default.png'),
(145, 96316, 'AGENT e-MAIL', 'DWI WINDA WIDIYANINGSIH', 'dwi@gmail.com', 0, 2, 'e146f00b3133a78a503d311f029d55a3', 'default.png'),
(146, 92567, 'AGENT e-MAIL', 'ANDI RIZKY KOSASIH', 'andi@gmail.com', 0, 2, '67c1e20d125d835836031362476e0597', 'default.png'),
(147, 157544, 'AGENT IMES', 'MAULANA ADITYA KHANDALAWI', '23', 23, 2, '4413557de60d37e5f51297eec58f207c', 'default.png'),
(148, 91667, 'AGENT e-MAIL', 'ASTA TRI FAUZI', 'astra@gmail.com', 0, 2, '60dfce8951a9484cf386421523efde52', 'default.png'),
(149, 90990, 'AGENT e-MAIL', 'AZIS IMANSYAH', 'azis@gmail.com', 0, 2, 'c1064a3ec2bf8729889577ff5f78ae5c', 'default.png'),
(150, 157546, 'DC', 'MUHAMAD RIVALDI', '12', 12, 2, '2dcbe932bc9c509ef4ce31cd776b4223', 'default.png'),
(151, 92569, 'AGENT e-MAIL', 'DADAN MUHAMAD RAMDAN', 'dadan@gmail.com', 0, 2, '89d0831725dc2061723a0dc09845de65', 'default.png'),
(152, 159046, 'TRAINER', 'HERLINA', '12', 12, 1, '0b5bfebd296b9e16e24801c8bf2c854b', 'default.png'),
(153, 160120, 'AGENT OUTBOUND OMNI', 'MUHAMMAD RIZKI HIDAYAH', '12', 12, 2, 'c3531c2c89db52e85fdc3e01572aebe2', 'default.png'),
(154, 92590, 'AGENT e-MAIL', 'DANY SANTARA GUMILAR', 'DANY@GMAIL.COM', 0, 2, '9d4b3d59b699d17491f01bf84025e2c2', 'default.png'),
(155, 160538, 'TL SocMed - e-MAIL', 'EGI IHSAN', '12', 12, 2, '1f797ff7f3ab8b9793fffaa3e0380b09', 'default.png'),
(156, 94180, 'AGENT e-MAIL', 'DIAN ANGGARDA PUTRA', 'dian@gmail.com', 0, 2, '5ea548741ebe100b3e64dda698fa23a5', 'default.png'),
(157, 160545, 'AGENT INDIHOME', 'MUHAMAD NUR AZIIZ', '12', 12, 2, 'd30b065ecc0b2d7a983daa1fa9af4b99', 'default.png'),
(158, 150669, 'AGENT e-MAIL', 'DONI PARASIAN HUTASOIT', 'doni@gmail.com', 0, 2, '13ae8c1592283da5dd218e176c9689de', 'default.png'),
(159, 160548, 'AGENT INDIHOME', 'TOPAN BUNGARAN', '12', 12, 2, '456ac9897253ed2533b482456cbb611d', 'default.png'),
(160, 105374, 'AGENT e-MAIL', 'DWIKI YULIAWAN', 'dwiki@gmail.com', 0, 2, '536ae15b225f8f22a9d10c87c9ffb118', 'default.png'),
(161, 160782, 'AGENT DATIN', 'KAHFI MUNAJAT', '12', 12, 2, '985fec81bd5f181cd98a0d38b694ade9', 'default.png'),
(162, 92578, 'AGENT e-MAIL', 'FAJAR AWALUDIN', 'fajar@gmail.com', 0, 2, '2359edd02d9ef4ad6e65c8fdbaf45aef', 'default.png'),
(163, 161252, 'AGENT INDIHOME', 'MUHAMAD IQBAL PURNAMA YUSUF', '12', 12, 2, 'd4eed7c9dd2edf008299420733517e33', 'default.png'),
(164, 98803, 'AGENT e-MAIL', 'FADJAR INDRAWAN FIRDAUS', 'fadjar@gmail.com', 0, 2, '2fb537d637fd5727ddcba39f500948cd', 'default.png'),
(165, 161668, 'AGENT INDIHOME', 'NIMA PAGAR INTAN DAMANIK', '12', 12, 2, 'abf8e13785dad4a3b8112d639bc4c79a', 'default.png'),
(166, 99754, 'AGENT e-MAIL', 'HILMAN FUADI', 'hilman@gmail.com', 0, 2, '295c2ba4d42aa62a8fd2606255e6a33c', 'default.png'),
(167, 161682, 'TL DATIN - OMNI', 'FERNANDES OCTO BANDAR', '12', 12, 2, '20518fadc597ed00a885d02acaef99a5', 'default.png'),
(168, 161685, 'AGENT INDIHOME', 'ASIH YUNENGSIH', '23', 34, 2, '10d3d356a93332399abf02aaf17dbb71', 'default.png'),
(169, 96306, 'AGENT e-MAIL', 'IQBAL BAHARI', 'iqbal@gmail.com', 0, 2, '82e46e41945aee3064a87557ded40527', 'default.png'),
(170, 161694, 'AGENT INDIHOME', 'M. ALDO NOVIARSAN P', '13', 45, 2, '44300db069ac8e844298d161716eda1f', 'default.png'),
(171, 92598, 'AGENT e-MAIL', 'LUTHFI FICKRUL ISLAMI MANOOR', 'lutfhi@gmail.com', 0, 2, 'fdeb255eee64de20ce7b8b1cdab298b1', 'default.png'),
(172, 161696, 'AGENT INDIHOME', 'IYANG YUDA PURNAMA', '12', 12, 2, 'e08843a065867d4705f2d43d6eef0f15', 'default.png'),
(173, 101528, 'AGENT e-MAIL', 'PERY KURNIAWAN', 'pery@gmail.com', 0, 2, '43de9aa79ae2bdd7e6957ee6664aa5fc', 'default.png'),
(174, 91679, 'AGENT e-MAIL', 'RIZAL MUSTOPA', 'rizal@gmail.com', 0, 2, '3fb19b5c7b91246214f214948795ff2f', 'default.png'),
(175, 170113, 'AGENT VOICE', 'MUHAMMAD IHSAN PRABAWA', '134', 245, 2, '2475d1f7f20516a520165657dc76eb88', 'default.png'),
(176, 92607, 'AGENT e-MAIL', 'TRIYONO KROMO', 'triyono@gmail.com', 0, 2, '6b5df0a5075a136fd3ebbc534f7f5bae', 'default.png'),
(177, 170114, 'AGENT VOICE', 'FIRMAN ARDIANSYAH', '12', 453, 2, 'b21fe66eae7e39c631f627b76cbe1d21', 'default.png'),
(178, 177387, 'AGENT VOICE', 'PRADHITA SASABILA PUTRI', 'pradhita@gmail.com', 0, 2, 'bc8941669183654aeda4221e4fb10b1e', 'default.png'),
(179, 170640, 'AGENT OUTBOUND OMNI', 'DHEVI LARASATI', 'WE', 334, 2, '73c734edf004085b23255ac8c577d7d8', 'default.png'),
(180, 158251, 'AGENT VOICE', 'SARAH KYLA YASMIN GUMILAR', 'sarah@gmail.com', 0, 2, '8b75dbf094df4940a0ef5afb9ea73a0d', 'default.png'),
(181, 170641, 'AGENT INDIHOME', 'RUMBAR DEWI RIANAWATI', '23', 34, 2, 'c73206bae346f91fbca0609f0ca72ceb', 'default.png'),
(182, 170642, 'AGENT INDIHOME', 'FARIDATUZZAHRO\'', '12', 12, 2, '83d7909c490bb7426dab9a4ccd34e6b4', 'default.png'),
(183, 170643, 'AGENT INDIHOME', 'RISTI YULIANA', '12', 12, 2, 'a4c4e1f3fd5129446c33ed8c6705355b', 'default.png'),
(184, 161281, 'AGENT VOICE', 'TESSA RINDIYANI', 'tessa@gmail.com', 0, 2, '8b4bcbe767e8c4c5898801ecebbbff03', 'default.png'),
(185, 170644, 'AGENT DATIN', 'FIRNANDA NOVITASARI', '12', 34, 2, '05a2321f7260eed1ac0360d0451e3865', 'default.png'),
(186, 105384, 'AGENT VOICE', 'TIARA ANDINI JUHENDI', 'tiara@gmail.com', 0, 2, '0e3447278ce87a93806a6da18e432e7c', 'default.png'),
(187, 170645, 'AGENT INDIHOME', 'ANWAR LUDFIANTO', '12', 12, 2, '25e3ac656592cc5832f957c9c1be27d8', 'default.png'),
(188, 164169, 'AGENT VOICE', 'WULAN HARISMAYANINGSIH', 'wulan@gmail.com', 0, 2, '3202bf149c18601fa0a4f65c67bcffb0', 'default.png'),
(189, 170646, 'AGENT IMES', 'MUJAHID BASYIRUDDIN', '24', 34, 2, '09fb7d06e46116bd5aac6e0f0235d18d', 'default.png'),
(190, 178471, 'AGENT VOICE', 'ADITYO KUSUMA PUTRA', 'adityo@gmail.com', 0, 2, '08fe406b5f77a812f573fc52cec56cf4', 'default.png'),
(191, 170647, 'AGENT e-MAIL', 'REIZA RAHMAAJI RAHARJA', '23', 34, 2, '58047a53f81ce96e22f0567b1f06dbae', 'default.png'),
(192, 177379, 'AGENT VOICE', 'AFDHAL ASNAWI', 'afdhal@gmail.com', 0, 2, '7148dce1923f61b55ce61a147f6a43f0', 'default.png'),
(193, 177380, 'AGENT VOICE', 'ALDI RIZKI FAUJI', 'aldi@gmail.com', 0, 2, '98642834333d95d58590a851d01a3a24', 'default.png'),
(194, 170648, 'AGENT NMS', 'LUQMAN NURFAJRI', '12', 12, 2, 'cd1051138d3748f7c5a2adbd85f09256', 'default.png'),
(195, 155260, 'AGENT VOICE', 'EGI RUSTIAMAN', 'egi@gmail.com', 0, 2, '2c9da386c759a99c08a32e32b9d11195', 'default.png'),
(196, 170649, 'AGENT OUTBOUND OMNI', 'RAYYAN MUCHLIS BHAKTI N', '23', 452, 2, '1283d5dd9217650dd36b6d8bd003b98f', 'default.png'),
(197, 155261, 'AGENT VOICE', 'FIRMAN NURDIANSYAH', 'firman@gmail.com', 0, 2, 'ed2513114f0efae322c456f18d76db49', 'default.png'),
(198, 170650, 'AGENT INDIHOME', 'AQSHA ASTARYAN PRATAMA', '45', 23, 2, 'b43e38dfa9776ebca17c39113188d568', 'default.png'),
(199, 161278, 'AGENT VOICE', 'GALIH JATI PERMANA', 'galih@gmail.com', 0, 2, '66e293ba4e57edc8060be67c02434fa4', 'default.png'),
(200, 170651, 'TL DATIN - OMNI', 'AGUSTIN AMANDA ZATALINI', '23', 45, 2, 'bed03077d6be79019635f7e484d427c2', 'default.png'),
(201, 170652, 'AGENT INDIHOME', 'HANA NIBROSA', '1234', 45, 2, '8a8648b4411791097a5542656f4c05ea', 'default.png'),
(202, 170653, 'AGENT e-MAIL', 'REGITA RATIH PRAMESTIWI', '23', 23, 2, 'f49f97814a16b7644039cd814374c285', 'default.png'),
(203, 170654, 'AGENT INDIHOME', 'ADE RIYANI', '23', 34, 2, 'b2b6d444040ca6fd38293f85959c5a09', 'default.png'),
(204, 170655, 'AGENT DATIN', 'ATMOJO', '12', 45, 2, '36a661aa57a00e0a6230d43fcc35e091', 'default.png'),
(205, 170657, 'AGENT IMES', 'BAGAS WAHYU WIJAYA', '23', 452, 2, 'ec131006befcd0d6ebc6bc615eb9414c', 'default.png'),
(206, 170658, 'QCO SDA', 'AHMAD CHANDRA KURNIAWAN', '23', 45, 2, 'e79fd677d8e8bfb14afd647dcd064ab9', 'default.png'),
(207, 171064, 'AGENT VOICE', 'FINTA INTAN PURBA', '67', 45, 2, '41981222134a23a60e49f6f87b1e3a56', 'default.png'),
(208, 172488, 'ADMIN OPS', 'IWAN SETIAWAN ABIDIN', '34', 5474, 2, '2e38b9cdd5971fb94b4070c3733eb050', 'default.png'),
(209, 172788, 'TRAINER', 'GALIH SUKMA DWI PUTRA', '474', 353, 1, '1cf3bd10c8e72941c56652e54b15e449', 'default.png'),
(210, 173430, 'AGENT INDIHOME', 'RINA SHAHFRYNAH', '13', 3445, 2, '0a2a8cbc25ba1b789da75702658e76b9', 'default.png'),
(211, 173432, 'AGENT OUTBOUND OMNI', 'ARUM SIH PANGESTU', '2R', 3463, 2, 'a3741b5dc7315347e85d0e8fc45512d3', 'default.png'),
(212, 173433, 'AGENT VOICE', 'RYSAWIJAYANTI PUTRI', '24', 34, 2, 'defe2f4c0e98e6e8858e92dbb4e4fa78', 'default.png'),
(213, 173434, 'AGENT VOICE', 'MAULIDA FADIAH', '58', 77, 2, '451042fcc11afc37ad349e8302ff68a1', 'default.png'),
(214, 173646, 'AGENT INDIHOME', 'MARGARET REVITA PRAMESTI', '78', 80, 2, 'e557ddde11e7e8360c7fd17a86a36a9f', 'default.png'),
(215, 173648, 'AGENT VOICE', 'DIAH AYU RIZKY KUSUMA RAMADHANI', '8', 9, 2, 'd0503f8b32d17c0529bfa6a5e50fe203', 'default.png'),
(216, 173650, 'AGENT OUTBOUND OMNI', 'GHUFRON ARI PUTRO', '78', 90, 2, 'aff8440a3a8712d31734d485dcbefd50', 'default.png'),
(217, 174180, 'AGENT DATIN', 'ANGELICA DESTA RUDITE AJITAMA', '57', 89, 2, 'c75f582340eef0ccbf340ba74d39a116', 'default.png'),
(218, 174182, 'AGENT NMS', 'DWI KURNIAWATI LESTARI', '79', 757, 2, '264925182485627ecfb2e605f6808e97', 'default.png'),
(219, 174183, 'AGENT INDIHOME', 'FIFI SEPTIVIA ALAYDA', '24', 36, 2, 'f4f17c4ce14b96aeed80e30aaca824be', 'default.png'),
(220, 174184, 'AGENT INDIHOME', 'NOORMALITA RETNO UTAMI', '45', 45, 2, '063fab099cf7ae15989b7270337edf68', 'default.png'),
(221, 174185, 'AGENT INDIHOME', 'ORRYZA DWI JUNI AYUNINGTYAS', '46', 78, 2, '68acf068222474b4742f0c6add7c2295', 'default.png'),
(222, 174186, 'AGENT INDIHOME', 'RIZKY DWI HERGIANTITUS', '57', 78, 2, 'af764248c0bbdf7adc791bb377049416', 'default.png'),
(223, 174187, 'AGENT INDIHOME', 'SINGGIH NUGROHO PUTRO', '6I', 69, 2, 'a2819d794b28f9dc4b23b88a6cd5d897', 'default.png'),
(224, 164170, 'AGENT VOICE', 'HILMAN NUR RIDHO', 'hilman@gmail.com', 0, 2, 'e4095f61062cff9adc3ba31d681f179f', 'default.png'),
(225, 174188, 'AGENT SOCMED', 'FAKIHUDIN', '25', 57, 2, '5ce755deedaa8ce7acd2f7d817c4cd4f', 'default.png'),
(226, 177383, 'AGENT VOICE', 'HILMY MAULANA', 'hilmy@gmail.com', 0, 2, '1d1dea82db76313cb81204e6c75ff134', 'default.png'),
(227, 177384, 'AGENT VOICE', 'KIKI ANJAYA', 'kiki@gmail.com', 0, 2, 'fcc8b8d6cb59159748cc6893378de195', 'default.png'),
(228, 174189, 'AGENT SOCMED', 'HOPIE NIMAJA DJ', '799', 567, 2, '571ff2a5f9482b10d8f14ced56cee2c9', 'default.png'),
(229, 158249, 'AGENT VOICE', 'M. NOOR FAHRUL AKBAR', 'noor@gmail.com', 0, 2, 'ae4fd14969d8f28655fb8fc8c932a597', 'default.png'),
(230, 174190, 'AGENT SOCMED', 'IFFA DHIA ARIZA', '889', 456, 2, '2d3a6033b27acda0127de8ac68c77f4d', 'default.png'),
(231, 166588, 'AGENT VOICE', 'MUHAMMAD FAISHAL ARSAWIJAYA', 'faisal@gmail.com', 0, 2, '05eaa0f5081ca92a059f739c2f15e9d8', 'default.png'),
(232, 174191, 'AGENT SOCMED', 'DANIEL RICARDO SOPATER', '67', 899, 2, 'cc0d1ea31ce9c97159bc601a0d2cbc8b', 'default.png'),
(233, 159963, 'AGENT INDIHOME', 'MAULANA LUQMAN', 'maulana@gmail.com', 0, 2, '96bc0dc9df1177e3ac809a5e25c34429', 'default.png'),
(234, 177385, 'AGENT VOICE', 'MOH. RESQI MAULUDIN', 'moh@gmail.com', 0, 2, '16c8e088690afe5f91adea0b80fcbd51', 'default.png'),
(235, 174192, 'AGENT SOCMED', 'DANIEL RICARDO SOPATER', '123', 46, 2, 'f72b4ea83573bb3a128574fe84b7d24a', 'default.png'),
(236, 161279, 'AGENT VOICE', 'MUHAMAD EKA NISWORO', 'eka@gmail.com', 0, 2, '4e624ea74ae93242c2d4e6624f7d283b', 'default.png'),
(237, 177388, 'AGENT VOICE', 'RAINALDI WIBAWA', 'rainaldi@gmail.com', 0, 2, 'b162be62913ff631352eae99362c3779', 'default.png'),
(238, 159965, 'AGENT VOICE', 'REGGY BAYU PRATAMA', 'reggy@gmail.com', 0, 2, 'e71899fd009b0088e84fc0d13699cc70', 'default.png'),
(239, 164171, 'AGENT VOICE', 'REZA FAHLEVI', 'reza@gmail.com', 0, 2, 'ba6d0e89ce633ab1130e000033dd8e33', 'default.png'),
(240, 177389, 'AGENT VOICE', 'SAMUEL SETYAJI', 'samuel@gmail.com', 0, 2, '0552487820a3895e902f17f55134f820', 'default.png'),
(241, 174193, 'AGENT SOCMED', 'REZA SETIAWAN', '6789', 8876, 2, 'b27460a0e7b2dc8a2180f07354acce53', 'default.png'),
(242, 176901, 'AGENT VOICE', 'SONY HARTO WIBOWO', 'sony@gmail.com', 0, 2, '43ad72525bdeb3d1756ee7f1c4281b14', 'default.png'),
(243, 177390, 'AGENT VOICE', 'YOGI TRIONO', 'yogi@gmail.com', 0, 2, '878f514da5d5602843ab86caa14ab687', 'default.png'),
(244, 174194, 'AGENT SOCMED', 'THOYIBAN ADI PUTRA', '567', 89, 2, '8c1b737db5c72865eb366e9d52ca168b', 'default.png'),
(245, 177391, 'AGENT VOICE', 'YUDDY DARMAWAN', 'yuddy@gmail.com', 0, 2, '1f44cc4cc2a5125d850143c49b32adae', 'default.png'),
(246, 177386, 'AGENT VOICE', 'ZAHLUL FADIL', 'zahlul@gmail.com', 0, 2, '782511420d8a7c20624d6b0607e7514c', 'default.png'),
(247, 174195, 'AGENT SOCMED', 'DENI ISMAWAN', '86', 688, 2, 'c74c65cb1cd5172b5d07d8e8f97025a8', 'default.png'),
(248, 98800, 'AGENT IP', 'AMY FITRI IRIANA', 'amy@gmail.com', 0, 2, '908b20f8bf8bd4af9818f013a8b5db12', 'default.png'),
(249, 91680, 'AGENT IP', 'ROMAULI TAMPUBOLON', 'romauli@gmail.com', 0, 2, '32812c372847c107fdcf66c587fd6551', 'default.png'),
(250, 177381, 'AGENT IP', 'AMRI HARTLAN', 'amri@gmail.com', 0, 2, 'c5871be1569b7400c11daceb979011b0', 'default.png'),
(251, 98301, 'AGENT IP', 'JAJANG SUPRIATNA', 'jajang@gmail.com', 0, 2, '939a51cc9202e76d90f03e7c47a67e16', 'default.png'),
(252, 174196, 'AGENT INDIHOME', 'ABDURRAHMAN RIDHWAN', '57', 89, 2, 'eb7f1ea6267e275c1dad18b44a0374aa', 'default.png'),
(253, 156525, 'AGENT INDIHOME', 'FENNY STEPHANI', 'feny@gmail.com', 0, 2, '4c60023ce7ee8edfacd2661f829dc9e8', 'default.png'),
(254, 104237, 'AGENT INDIHOME', 'FITRI MULYANI', 'fitri@gmail.com', 0, 2, 'aece43b6c47bb6b85c758848842afef1', 'default.png'),
(255, 174197, 'AGENT NMS', 'AFINI MAULANA', '9876', 689, 2, 'c2726f526bad48a3a6cdaed02a8cf912', 'default.png'),
(256, 156526, 'AGENT INDIHOME', 'PUTRI ANDARESTI', 'putri@gmail.com', 0, 2, '21aeddac04bc32942a744b23a153a2f7', 'default.png'),
(257, 174198, 'AGENT INDIHOME', 'ASNI FEBRIANTI', '68', 954, 2, '62d562b868db59688d073c38b42c871a', 'default.png'),
(258, 166589, 'AGENT INDIHOME', 'ERI JULIYANA', 'eri@gmail.com', 0, 2, 'fecabdc6b41e9df1b10280c3d73709b2', 'default.png'),
(259, 174199, 'AGENT INDIHOME', 'DWI NURNAENI', '6790', 975, 2, 'ef14222e24a1f480712ffebf6a7f9d31', 'default.png'),
(260, 158252, 'AGENT INDIHOME', 'BUDI WIRA BHAKTI', 'budi@gmail.com', 0, 2, 'bf77f4791d7faecf94b9f4c4d6cf721a', 'default.png'),
(261, 174200, 'AGENT INDIHOME', 'HENI ISMIYATI', '56788', 75645, 2, '938d678181fdfcf7a79362436b52d2f5', 'default.png'),
(262, 164164, 'AGENT INDIHOME', 'FAHMI IBRAHIM SAENI', 'fahmi@gmail.com', 0, 2, 'ebc43c0836f8c4c3c6a5994a407fea1d', 'default.png'),
(263, 158253, 'AGENT INDIHOME', 'HENDRA MAULANA', 'hendra@gmail.com', 0, 2, '18387a8e1bfd3f9963777e1447660ffa', 'default.png'),
(264, 174201, 'AGENT VOICE', 'NIMAS MAULIDA', '987', 889, 2, '71773c181b1a93f796709244d6ea1cff', 'default.png'),
(265, 164165, 'AGENT INDIHOME', 'MUHAMAD FAISAL KARTAKUSUMAH', 'faisal@gmail.com', 0, 2, '47b5de5858d7db3de3bc15d36a62c129', 'default.png'),
(266, 174202, 'AGENT INDIHOME', 'RANDY ADAM NASUTION', '6898', 7, 2, '1720c6f96becd564389a5a87f5e0b8c2', 'default.png'),
(267, 96317, 'AGENT INDIHOME', 'MUKTI MOCHAMMAD RAMDHAN', 'mukti@gmail.com', 0, 2, 'a9b82e44601c221e49ea56c982c955a6', 'default.png'),
(268, 174203, 'AGENT VOICE', 'RIFQI MAHFUZH', '9876', 678, 2, '7c16be15e5d2905815a3a30b444d0c7e', 'default.png'),
(269, 156528, 'AGENT INDIHOME', 'RAHMAT ADHI JUMARA', 'rahmat@gmail.com', 0, 2, '6b190edc850722a771710831442b276f', 'default.png'),
(270, 159967, 'AGENT INDIHOME', 'ROHIM RAMDANI', 'rohim@gmail.com', 0, 2, '30ccb9eab9acc7daad55762284dbb644', 'default.png'),
(271, 174204, 'AGENT INDIHOME', 'SAIFUL HIDAYAH', '908', 98, 2, 'c4e8063cdaa67abf64adaaefc16b06b9', 'default.png'),
(272, 156529, 'AGENT OMNI', 'SENDY FIRDAUS', 'sendy@gmail.com', 0, 2, '39cd90f3b1f750125314637825fdfe68', 'default.png'),
(273, 174205, 'AGENT DATIN', 'SASTRI JENDRA AYUNINGRAT', '875', 890, 2, 'e2742c0379695ccb9965710708ac4414', 'default.png'),
(274, 174206, 'AGENT INDIHOME', 'SHELLADITA FITRIYANI SUSILO', '9886', 986, 2, 'cdf6ce4c4d230f073f6fc62fde7f7009', 'default.png'),
(275, 174207, 'AGENT INDIHOME', 'TRI EKO SUSILO', '0988', 8877, 2, '15e4ad4765d8f5c22239cee26ed6ef7e', 'default.png'),
(276, 158248, 'AGENT INDIHOME', 'YASSER RISVANDI', 'yasser@gmail.com', 0, 2, '358c9114eb89265216f864e111f84742', 'default.png'),
(277, 174208, 'AGENT INDIHOME', 'WILDA SAFIRA', '07666', 9087, 2, 'c98e5aa6d6fe3b719e95067d64fc68bf', 'default.png'),
(278, 96313, 'AGENT INDIHOME VIOLET', 'DESI SAFITRI', 'desi@gmail.com', 0, 2, 'c29b8343f5ac2b8b783dba0b9968abaf', 'default.png'),
(279, 175904, 'AGENT VOICE', 'A.EKA SAKTI PRATIWI', '098', 987, 2, 'a40b88fd2469561b0a3d50d9b41f8665', 'default.png'),
(280, 91682, 'AGENT INDIHOME VIOLET', 'YANIS MULYANI', 'yanis@gmail.com', 0, 2, '4c7411034646c03b623184579895c1e5', 'default.png'),
(281, 175906, 'AGENT VOICE', 'AVISKA AVITA SARI', '098', 987, 2, '4fc83320a3c28c5d5df13398c40a6f38', 'default.png'),
(282, 155259, 'AGENT INDIHOME VIOLET', 'ARIE RIYADI PRASOJO', 'arie@gmail.com', 0, 2, 'd953d7662d394dc13637129e17c5a40a', 'default.png'),
(283, 175907, 'AGENT VOICE', 'FIKI EKA SETIA PUTRI', '789', 98, 2, 'e2c4d3b3e375dad67147a4cb75dd7e0f', 'default.png'),
(284, 158254, 'AGENT INDIHOME VIOLET', 'DIEN DARUL DIENNURILLAH', 'dien@gmail.com', 0, 2, '86f8aa10f9d9309800d703afec048a10', 'default.png'),
(285, 175908, 'AGENT VOICE', 'LENY LUTFIANA AZHARI', '78', 9, 2, '149f8d48008dd09bb63dc6466c402901', 'default.png'),
(286, 159960, 'AGENT INDIHOME VIOLET', 'GUNAWAN CHANDRO FEDRICSON', 'gunawan@gmail.com', 0, 2, 'f622f5a916709f5afe22256fd5d228d7', 'default.png'),
(287, 175909, 'AGENT VOICE', 'LUTFI EFA OKTAVIANI', '678', 98, 2, '3eae9a1424a2d92914c0599af5ff18fc', 'default.png'),
(288, 158250, 'AGENT INDIHOME VIOLET', 'HARRY KURNIAWAN HARTANTO KAWIDJAYA', 'harry@gmail.com', 0, 2, 'db1e031c27672fff49ded3344e5ffa9d', 'default.png'),
(289, 159964, 'AGENT INDIHOME VIOLET', 'RAI ADI KRISNA', 'rai@gmail.com', 0, 2, '55579db9e7c5767ee61ed975914eac5d', 'default.png'),
(290, 175910, 'AGENT VOICE', 'MEILANI RAHAYUNINGRUM', '978', 98099, 2, '4f7d09afb4851fa136c2b47a739290c0', 'default.png'),
(291, 164166, 'AGENT INDIHOME VIOLET', 'RAI DWI SEPTIAJI', 'rai@gmail.com', 0, 2, '074ace28526d834b79bac95893712d11', 'default.png'),
(292, 159966, 'AGENT INDIHOME VIOLET', 'RIZKI ILHAM NUGRAHA', 'rizki@gmail.com', 0, 2, '329d05208b4f3e67500f9980bccdcee2', 'default.png'),
(293, 175911, 'AGENT VOICE', 'MILLATUZZAHRINA', '0998', 8876, 2, 'b1b5a33d6aa027701b3481c33fee9f14', 'default.png'),
(294, 164168, 'AGENT SOCMED', 'NABILAH NARDIANI', 'nabila@gmail.com', 0, 2, '50e3e4f58d47f33da8b03d2f3bbc6567', 'default.png'),
(295, 175912, 'AGENT OUTBOUND OMNI', 'NI KADEK DIAH PARWATI', '98765', 99, 2, '9a289d4f41c5651c48ff38951b729017', 'default.png'),
(296, 166592, 'AGENT SOCMED', 'SELVI APRIANTHY', 'selvi@gmail.com', 0, 2, '4dddcc0d7665a3ced88f7bf81e51b088', 'default.png'),
(297, 175913, 'AGENT VOICE', 'RIZAL THIRAFI ZUL FAHMI', '098', 9876, 2, 'eaea214985d7401928c63dd647323eb4', 'default.png'),
(298, 175914, 'AGENT OUTBOUND OMNI', 'ZUHDI ALVIAN', '0987', 87766, 2, '1d99cbc0eacb41bd510c62b68ce27c4b', 'default.png'),
(299, 176898, 'AGENT VOICE', 'HENDRA REZA HAVILDA', '6890', 987, 2, '0cc99e212b24c39a24eae72c7c519a89', 'default.png'),
(300, 166587, 'AGENT SOCMED', 'ALAN KURNIAWAN', 'alan@gmail.com', 0, 2, 'db13e06f882af9bd1cf8c2e250f14432', 'default.png'),
(301, 166590, 'AGENT SOCMED', 'MUAMAR RAFIK', 'muamar@gmail.com', 0, 2, '83e384d64498eb33deafe23da5aba4e9', 'default.png'),
(302, 176902, 'AGENT VOICE', 'PUJI LESTARI', '0776456', 9666, 2, 'c51edfd95045122245b7d56da620bae0', 'default.png'),
(303, 91668, 'AGENT OMNI', 'DESI HANDAYANI', 'desi@gmail.com', 0, 2, 'dc577cf8a230dd203da516b1a0543dab', 'default.png'),
(304, 176903, 'AGENT VOICE', 'PANGKU RIZQI EKA SAPUTRA', '008989', 9876, 2, '2efb7d6dbd567780ace917e8d7ae9ddc', 'default.png'),
(305, 96315, 'AGENT OMNI', 'DWI NURKHOTIMAH', 'dwi@gmail.com', 0, 2, '8d3b916f70c85237778095c57f9b1e8f', 'default.png'),
(306, 176904, 'AGENT INDIHOME', 'RAIDATUL JANNAH', '98989', 5789, 2, '4ec41b25287863b0f33a9ef31bc6cb1f', 'default.png'),
(307, 91661, 'AGENT OMNI', 'ERNI NOVIANTI', 'erni@gmail.com', 0, 2, 'a859e615614e25744f9723035301a678', 'default.png'),
(308, 176905, 'AGENT VOICE', 'MOCH QADRI ARIE SYAFITRAH', '8987', 987, 2, 'dc1c7965a83902aa1fa671debc3e87de', 'default.png'),
(309, 91664, 'AGENT OMNI', 'RINI KUSMAWATI', 'rini@gmail.com', 0, 2, '9ca0d319de0d2bf8683695612bf6951b', 'default.png'),
(310, 96319, 'AGENT OMNI', 'SHINTA FEBBY FITRIYANTI', 'shinta@gmail.com', 0, 2, 'ab14a77862a757f41121be6e9c497aad', 'default.png'),
(311, 176906, 'AGENT VOICE', 'ADRIAN MUHAMMAD HUSEIN', '0998', 998, 2, 'a7dd3b3bf25efe0cae823d57d49fea8a', 'default.png'),
(312, 94174, 'AGENT OMNI', 'SILVIA MANELA', 'silvia@gmail.com', 0, 2, 'ecdd85bb8654289b53bf38bbef37cbb6', 'default.png'),
(313, 99752, 'AGENT OMNI', 'AL HADID', 'al@gmail.com', 0, 2, 'dbf50ca6b474d15193a6ce98255300aa', 'default.png'),
(314, 176908, 'AGENT VOICE', 'ANINDYA IFFA K', '5890', 986, 2, 'de22903ae44f11905fcfaa3dd28fa9ea', 'default.png'),
(315, 150667, 'AGENT OMNI', 'ALAM ADHITYA PUTRA', 'alam@gmail.com', 0, 2, '910c48d9fa754a0346a4729968138a7a', 'default.png'),
(316, 65301, 'AGENT OMNI', 'APRIL NALDI', 'april@gmail.com', 0, 2, 'cab102c062329f680e7461e56d09e55e', 'default.png'),
(317, 176909, 'AGENT VOICE', 'PUTERI TRIANA AUDINA', '90', 98, 2, 'ed3c4d28d5227b6f9aaf6477cb211b34', 'default.png'),
(318, 105372, 'AGENT OMNI', 'DANY WARDHANA', 'dany@gmail.com', 0, 2, 'b66ac815176449929b5113ed864cddb6', 'default.png'),
(319, 176911, 'AGENT VOICE', 'CHINDYANA FEBBY UTAMI', '888877777', 9887, 2, '6b005a877f29f33057e7199c35f63cee', 'default.png'),
(320, 150670, 'AGENT OMNI', 'FAJAR FAISAL SURYA', 'fajar@gmail.com', 0, 2, '5239b76b9eff98bffc4e315ea774339a', 'default.png'),
(321, 176912, 'AGENT VOICE', 'ADELA MURTI', '45', 899, 2, 'da929a0a089211350093261327765ce2', 'default.png'),
(322, 155262, 'AGENT OMNI', 'HADRIANA MARTAKUSUMAH', 'had@gmail.com', 0, 2, '399fd2f25b16b2a949b2ff226bcf5ece', 'default.png'),
(323, 156527, 'AGENT OMNI', 'IWAN GUNAWAN', 'iwan@gmail.com', 0, 2, '11eadc26aa42cf87af71e3a530f1c6c6', 'default.png'),
(324, 176913, 'AGENT VOICE', 'RUCHI WILUTAMA', '78888', 99888, 2, '3464b93c8c675bb460622edf7e5dc704', 'default.png'),
(325, 105378, 'AGENT DATIN', 'MALIK IBRAHIM', 'malik@gmail.com', 0, 2, 'e426f854157c50ccf9813edb283377ba', 'default.png'),
(326, 101523, 'AGENT GLOBAL', 'MUHAMMAD RHEZA FAUZAN', 'rheza@gmail.com', 0, 2, '699c492b7ff3953db94199a0104be8ee', 'default.png'),
(327, 176914, 'AGENT VOICE', 'HARIS FADILAH', '0876', 98, 2, '822ebdf99ebfa15fefb26682b3538446', 'default.png'),
(328, 105381, 'AGENT OMNI', 'RAMDAN SURYADI', 'ramdan@gmail.com', 0, 2, '3a67bfad4d1014a6613b1e974cf55363', 'default.png'),
(329, 176915, 'AGENT VOICE', 'NOVA SETYANINGRUM', '09888', 677777, 2, 'a657463b050e1055828c0354a1bd32c4', 'default.png'),
(330, 150672, 'AGENT OMNI', 'TAUFIK NURJAMAN', 'taufik@gmail.com', 0, 2, '38d7a17d8c0b461c72ae7b8c0e740773', 'default.png'),
(331, 176916, 'AGENT VOICE', 'LINA NUR LATIFAH', '89000', 998888, 2, 'f1db5d20c0d96b848ab83722d4cf6c35', 'default.png'),
(332, 96320, 'AGENT OMNI', 'YUDHA NUGRAHA', 'yudha@gmail.com', 0, 2, 'a1495be7dd78d80e1accaaea59989999', 'default.png'),
(333, 176917, 'AGENT Chat/ SPBU', 'NUR ATIKAH', '09999', 466666, 2, 'a3219c877bb52cdf416d9d49f415460d', 'default.png'),
(334, 166593, 'AGENT VOICE', 'RINI APRIANTI KADARUSMAN', 'rini@gmail.com', 0, 2, '80531c769cc6daffd15887542f6500ae', 'default.png'),
(335, 94178, 'AGENT SPBU', 'ARIEF RAHMAN IBRAHIM', 'arief@gmail.com', 0, 2, 'cf3d0ab06b047408766e27dd681cd656', 'default.png'),
(336, 176919, 'AGENT VOICE', 'ISNI DYAH K.A', '098888', 6788888, 2, '9f8e0d456a632bf4aea982fa3c58b0e7', 'default.png'),
(337, 80817, 'AGENT SPBU', 'MUHAMMAD NOOR HASSANY', 'noor@gmail.com', 0, 2, 'e97a52a8c674217e8d4b70bba9180970', 'default.png'),
(338, 94175, 'AGENT NMS', 'ADI MULYA PERMANA', 'adi@gmail.com', 0, 2, '29bb1395c8a2d286f6e41d49e85c4148', 'default.png'),
(339, 91797, 'AGENT NMS', 'DIMAS HARIANTO', 'dimas@gmail.com', 0, 2, '6d0e52faaf569a556d76b009153d10f0', 'default.png'),
(340, 176921, 'AGENT VOICE', 'DITA APRILIA', '8999', 99999, 2, '737912d3e3a2104fb99726b7463fb10a', 'default.png'),
(341, 75072, 'AGENT NMS', 'RAMDANI SEPTIAN HIDAYAT', 'ramdani@gmail.com', 0, 2, '19300c34b896a72856d7d0f3d8555a85', 'default.png'),
(342, 91676, 'AGENT NMS', 'RANDI SAEFUL FAJAR', 'randi@gmail.com', 0, 2, '2caaeb4c0a401e5846c823998883ee9f', 'default.png'),
(343, 176922, 'AGENT VOICE', 'ROBBY NANDA SURIYANDA', '2374645', 635445, 2, '69c9f1cd65af166d78b7ec9c106d9bdc', 'default.png'),
(344, 94191, 'AGENT NMS', 'RIRI ARIANSYAH', 'riri@gmail.com', 0, 2, 'bfcbac5b5850062a085f86c73792ea99', 'default.png'),
(345, 87931, 'AGENT IMES', 'ANIS SANITA', 'anis@gmail.com', 0, 2, '94e7c30d75095d8829a547888d8d1194', 'default.png'),
(346, 176923, 'AGENT Chat/ SPBU', 'MEY RIESTA SOARES', '7889', 98888, 2, '5ce1b47ac125232e437cba382c3f2bf0', 'default.png'),
(347, 35602, 'AGENT IMES', 'YUNIAWATI', 'yubi@gmail.com', 0, 2, '6541e19c5362ab94007afbe6908666c0', 'default.png'),
(348, 176924, 'AGENT VOICE', 'MARINDA IKA DEWI SAKARIANA', '345678', 98776, 2, 'e270e883b53e041a2cef60e30510a203', 'default.png'),
(349, 98799, 'AGENT IMES', 'ADNAN FAJAR NUGRAHA', 'adnan@gmail.com', 0, 2, 'b72d9fda7f5fc5740e2e5a7cfb96f934', 'default.png'),
(350, 80575, 'AGENT IMES', 'AHMAD DENDI RAMDANI', 'ahmad@gmail.com', 0, 2, '7b997ff4ca67b93de039bc53f11fddf0', 'default.png'),
(351, 94177, 'AGENT IMES', 'AMIN ROSYADI', 'amin@gmail.com', 0, 2, 'b231dfa74387d4b1aff52d1be3e66f3a', 'default.png'),
(352, 96305, 'AGENT IMES', 'ASEP FIRMAN GINANJAR', 'asep@gmail.com', 0, 2, '25fab45f15791799f460e5cdea26e7f5', 'default.png'),
(353, 72474, 'AGENT IMES', 'CECEP HERMAWAN', 'cecep@gmail.com', 0, 2, 'cc82db9968734cc3129a3b959f07bed4', 'default.png'),
(354, 91660, 'AGENT IMES', 'CUCUT ARIS WIDIYANTO', 'cucut@gmail.com', 0, 2, '86709b7f8b2fa1a6024bcff4ab458ca0', 'default.png'),
(355, 88247, 'AGENT SAP', 'M. IRFAN IBRAHIM', 'irfan@gmail.com', 0, 2, 'b4b9371dffb60afe9c5e0f4520aa4a58', 'default.png'),
(356, 101524, 'AGENT IMES', 'MUHAMMAD TAUFIK AKBAR', 'taufik@gmail.com', 0, 2, '53faf6b001e5f3e589a4c68bae79b8e7', 'default.png'),
(357, 87155, 'AGENT IMES', 'RAHMAT HIDAYAT', 'rahmat@gmail.com', 0, 2, '28c45e7c6eb91b675c6789da5b2ee703', 'default.png'),
(358, 94192, 'AGENT IMES', 'RIZKI MAULANA FIRDAUS', 'rizky@gmail.com', 0, 2, 'cde36080520cf53029d9851243d69400', 'default.png'),
(359, 96318, 'AGENT IMES', 'RIZKI RAMDHAN JUNAEDI', 'rizki@gmail.com', 0, 2, '15beaf52d3da984d1d8a2dc31eb335ec', 'default.png'),
(360, 92595, 'AGENT SAP', 'IRFAN HILMI', 'irfan@gmail.com', 0, 2, '106e9803051616919d7c86371cfa2046', 'default.png'),
(361, 26018, 'AGENT SPBU', 'BAHTIAR NUGRAHA', 'tiar@gmail.com', 0, 2, '7e22040b6f1ed8c61bdd4ff8468cf869', 'default.png'),
(362, 176918, 'AGENT SPBU', 'TIANSYAH FAJAR RAMDHANI', 'tian@gmail.com', 0, 2, 'f73a696acb6cef33a00fea3c818a1c1b', 'default.png'),
(363, 59153, 'INFRATEL', 'FAHMI ARDHI PRATAMA KOESBIANTORO', 'fahmi@gmail.com', 0, 2, '11fd7680c2d755ca00a9d87a64194965', 'default.png'),
(364, 92559, 'INFRATEL', 'AGUNG SETYO NUGROHO', 'agung@gmail.com', 0, 2, 'e1a4ab8ea4339d1ae03e42b3ff4f59c2', 'default.png'),
(365, 176925, 'AGENT VOICE', 'RAHMA ADISTA AMALIASANTI', 'rahma@gmail.com', 0, 2, 'ab83059d1ca05933040f21062ddcb6ac', 'default.png'),
(366, 176927, 'AGENT Chat/ SPBU', 'MOCHAMAD RIZKI DWI PUTRO', 'mochamad@gmail.com', 0, 2, '66054fa6cdca1d9ac0f7874e6794ae5b', 'default.png'),
(367, 176928, 'AGENT VOICE', 'SASQIA AYU LESTARI', 'sasqia@gmail.com', 0, 2, '7efb753fb89193b265d0baa908620cca', 'default.png'),
(368, 176929, 'AGENT VOICE', 'ANIDA FAZIA ZINI', 'anida@gmail.com', 0, 2, '8c05cdea0c4a99bf880a52d29ead47b6', 'default.png'),
(369, 176930, 'AGENT VOICE', 'AUGUST BUDIYANTO', 'augus@gmail.com', 0, 2, 'f0e31df6733af0284a99bb4af0af8cca', 'default.png'),
(370, 176931, 'AGENT Chat/ SPBU', 'SUHUD SUJUDI', 'suhud@gmail.com', 0, 2, '46ad5e6b059661b873de96ad37a3eb86', 'default.png'),
(371, 176933, 'AGENT Chat/ SPBU', 'OCHA BINAR ALIEFFI', 'ocha@gmail.com', 0, 2, '4368566dacea863b0da2000d1285c6b2', 'default.png'),
(372, 176934, 'AGENT Chat/ SPBU', 'ONY AKBAR MA\'RUF', 'ony@gmail.com', 0, 2, '4767697ac0a7ae52d3d561c9a498908b', 'default.png'),
(373, 177508, 'AGENT VOICE', 'FALAH IBRAHIM YAZIDULHAQ', 'falah@gmail.com', 0, 2, '7c12a4eacb497bf7719083adefa0e406', 'default.png'),
(374, 177509, 'AGENT VOICE', 'NOVITA SARI ARIFIN', 'novita@gmail.com', 0, 2, '9e6bc6dd516503fd557ae3af7eaf5859', 'default.png'),
(375, 177510, 'AGENT VOICE', 'ROBBY DHINI SETIAWAN', 'robby@gmail.com', 0, 2, '1cccd70ba7c00fb58db8a84c8a01cb02', 'default.png'),
(376, 177512, 'AGENT VOICE', 'WAHYU ROKHMANA', 'wahyu@gmail.com', 0, 2, '0d38ab895586432063acdbf83de41596', 'default.png'),
(377, 177513, 'AGENT VOICE', 'ALEXIUS YOGA PRIMADANA', 'alexius@gmail.com', 0, 2, '9af1cfc0d3959c275fa4570a40ba5d49', 'default.png'),
(378, 177514, 'AGENT VOICE', 'ANISA KHUSNUL MASTUTI', 'anisa@gmail.com', 0, 2, '5adf65d004b2a61ba120d95d3bbfdb06', 'default.png'),
(379, 177515, 'AGENT VOICE', 'DENI FITRIANI', 'deni@gmail.com', 0, 2, '82acbb9e0e5d1e67659dbef68b729894', 'default.png'),
(380, 177516, 'AGENT VOICE', 'INTAN PINILIH HANISTYA', 'intan@gmail.com', 0, 2, '595bd84b21a954a79031c0e7c36a5948', 'default.png'),
(381, 177517, 'AGENT VOICE', 'MANGGAR PRAWIRANINGPRANG', 'manggar@gmail.com', 0, 2, '14c0490f4adae76bfff441bda70a6829', 'default.png'),
(382, 177518, 'AGENT VOICE', 'SITI KOMARIYAH', 'siti@gmail.com', 0, 2, 'd37efebeb05014ba478192a330c0b865', 'default.png'),
(383, 177519, 'AGENT VOICE', 'WILDAN AUDINA', 'wildan@gmail.com', 0, 2, '20fe1151174094900d43b6d9390b003c', 'default.png'),
(384, 177520, 'AGENT VOICE', 'ACHMAD BAROJI', 'achmad@gmail.com', 0, 2, '123273fc705e0cb1ff98687ba81d6d9d', 'default.png'),
(385, 177521, 'AGENT VOICE', 'ADDAM IKHSAN ANJASMARA', 'addam@gmail.com', 0, 2, 'f8a6f3ad64ed657319ccf6e33a7093c9', 'default.png'),
(386, 177522, 'AGENT VOICE', 'MOHAMAD EKO MEIZENI W.S', 'eko@gmail.com', 0, 2, 'f0c2f49a3287fb8a5a6d3c26c28cf6ae', 'default.png'),
(387, 177523, 'AGENT VOICE', 'EVA FEBIYANI', 'eva@gmail.com', 0, 2, '45b22004cf1ef8725b01691e082b6c4e', 'default.png'),
(388, 177524, 'AGENT VOICE', 'JULIUS MARIO', 'julius@gmail.com', 0, 2, '85b52e59910d9f186a93e4ce48283867', 'default.png'),
(389, 177525, 'AGENT VOICE', 'M UMAR SHOLEH', 'umar@gmail.com', 0, 2, '89fdec80654ba07fb3bdc80b284b3a68', 'default.png'),
(390, 177526, 'AGENT VOICE', 'NOR RAHMA ASTRIYANI', 'nor@gmail.com', 0, 2, '8cdaa51ebae78695cab77620152663d1', 'default.png'),
(391, 177527, 'AGENT VOICE', 'RAHMAT AL HAFIZ', 'rahmat@gmail.com', 0, 2, 'adb27ff791d393dadf4f84bffb3a4c1e', 'default.png'),
(392, 177528, 'AGENT VOICE', 'WENY IRMA SYAFRIL', 'weny@gmail.com', 0, 2, '8937be020693da0834806e0e4e78e567', 'default.png'),
(393, 177529, 'AGENT VOICE', 'WIND SUDRAJAT', 'wind@gmail.com', 0, 2, '8905416a0fe35fff2ea135cd2e08937c', 'default.png'),
(394, 177530, 'AGENT VOICE', 'YOHANA KARTIKA WARDANI', 'yohana@gmail.com', 0, 2, '2c8193031de4c130a5312e18f9667426', 'default.png'),
(395, 177531, 'AGENT VOICE', 'FRIDANATA DEVI RATIKA', 'fridanata@gmail.com', 0, 2, '7a0ec8fa6739e1f2c4539ddd07e83982', 'default.png'),
(396, 177532, 'AGENT VOICE', 'LUTHFI GANI HAKIM', 'luthfi@gmail.com', 0, 2, '4e0693d0b17c8f06a1a0ed309fcc293f', 'default.png'),
(397, 177533, 'AGENT VOICE', 'MUHAMMAD FAISAL ABQORY', 'faisal@gmail.com', 0, 2, 'c62f13eb705cf9a4f0f5fba099119ce9', 'default.png'),
(398, 177534, 'AGENT VOICE', 'SYAH EMBO LANTANG', 'syah@gmail.com', 0, 2, 'f70a7eb1c52ca32a6a2d6667d5f1efd8', 'default.png'),
(399, 177536, 'AGENT VOICE', 'ANDHIKA BRAMANTYA', 'andhika@gmail.com', 0, 2, '0c2755380da7aa68fb884568dcf2cc87', 'default.png'),
(400, 177537, 'AGENT VOICE', 'MUHAMMAD ODI RACHMAWAN', 'odi@gmail.com', 0, 2, '3b5730a2929a46406d80ffeef06d21b8', 'default.png'),
(401, 177538, 'AGENT VOICE', 'SHAFIRA ARLINA', 'shafira@gmail.com', 0, 2, '5c2af7779170ba6d1ac818a8610e76ef', 'default.png'),
(402, 178472, 'AGENT VOICE', 'RADENTA NADIBUNDA JAYANTARA', 'radenta@gmail.com', 0, 2, '225dcad01db4e431d39b73db8e04a8e6', 'default.png'),
(403, 178473, 'AGENT VOICE', 'RIKY ANGGARA PUTRA', 'riky@gmail.com', 0, 2, 'af1f78ae268ab532f9c88975dbf6669b', 'default.png'),
(404, 180130, 'AGENT VOICE', 'ABDAUL MUQORROBIN', 'abdaul@gmail.com', 0, 2, 'f9b5d467074aef6317b17d5dcd92d387', 'default.png'),
(405, 180131, 'AGENT VOICE', 'AKHMAD ALAUL HIMAM', 'akhmad@gmail.com', 0, 2, '8cb724659a32859da117f46e1bcfc59e', 'default.png'),
(406, 180133, 'AGENT VOICE', 'DIKY KABUL RUSDIANTO', 'diky@gmail.com', 0, 2, 'fbb76d9625ce9d8d4ed39b6da58c5a38', 'default.png'),
(407, 180134, 'AGENT VOICE', 'FAHRUL ARIFIN', 'fahrul@gmail.com', 0, 2, '96b9533a6d41f3b72f54053974d87f0f', 'default.png'),
(408, 180135, 'AGENT VOICE', 'INDRA WIBOWO', 'indra@gmail.com', 0, 2, '72dc3ea1eaa6ea75e3748f7e854b7acc', 'default.png'),
(409, 180136, 'AGENT VOICE', 'VINI MEIFRISKA LESTARI', 'vini@gmail.com', 0, 2, '928b10b1009572a4e48caa2f26c01e63', 'default.png'),
(410, 183806, 'AGENT VOICE', 'ANGGA DWIYONO PUTRA', 'angga@gmail.com', 0, 2, 'c6273888ab5df41063f265b9dc24559f', 'default.png');
INSERT INTO `users` (`id_user`, `user_parner`, `jabatan`, `full_name`, `email`, `no_hp`, `level`, `password`, `image`) VALUES
(411, 183807, 'AGENT VOICE', 'ADITYA SANUBARI', 'aditya@gmail.com', 0, 2, '6dd52cac2f52f18ba46e75ac1e6a72ca', 'default.png'),
(412, 183808, 'AGENT VOICE', 'EFY ANA MUFLICHATI', 'efy@gmail.com', 0, 2, 'ed56b6e2a1e7b003cb2573d2632432f4', 'default.png'),
(413, 183809, 'AGENT VOICE', 'GREGORIUS FRANJAYA SETYA DEWA', 'grego@gmail.com', 0, 2, '686c2bb5602494607ae2dacf7d1d1dda', 'default.png'),
(414, 87345, 'AGENT SPBU', 'TITIS PURBO LARAS', 'titis@gmail.com', 0, 2, '1cf439f62b607a1c255582cd41dac79e', 'default.png'),
(415, 10001, 'AGENT VOICE', 'WANDA PRATAMA', 'wanda@gmail.com', 0, 2, 'e1cc599b326932b4c425835ac83e09c3', 'default.png'),
(416, 10002, 'AGENT VOICE', 'DICKY', 'dicky@gmail.com', 0, 2, 'd3cdbe3822c4b18a2918c70e60dda8f1', 'default.png'),
(417, 10003, 'AGENT VOICE', 'MUHAMMAD REZA RIFALDI', 'reza@gmail.com', 0, 2, 'ab4ed5f79e097adcd5902e30db47bbb4', 'default.png'),
(418, 10004, 'AGENT VOICE', 'IKHDA MULIANA AGUSTIN', 'ikhdan@gmail.com', 0, 2, 'afb53a62475964c3708b932e47887231', 'default.png'),
(419, 10005, 'AGENT VOICE', 'AHMAD YUSUF \'ULUMUDDIN', 'ahmad@gmail.com', 0, 2, 'f8faa83f812a6ccdbd5d05b1c1ee2f21', 'default.png'),
(420, 11223344, 'Trainer', 'Testing ', 'Testing@gmail.com', 9888, 2, 'd54d1702ad0f8326224b817c796763c9', 'default.png'),
(421, 94169, 'Agent Datin', 'Adisty Sukmawati', 'Adisty@gmail.com', 0, 2, 'cd86d3c63fad0e3b22d766fb7bbeef1b', 'default.png'),
(422, 105380, 'Agent Datin', 'NUR MUHAMMAD RIZQI FAUZI', 'Nur@gmail.com', 0, 2, '5f7696b81a30666c2dfddf92d0bb9b6d', 'default.png'),
(423, 92588, 'Agent Global', 'Aldi Riandi', 'aldi@gmail.com', 0, 2, '5b6056e7f53e311c0b6e3600bfbb087f', 'default.png'),
(424, 88233, 'Agent Email', 'GINANJAR SUTISNA R', 'ginanjar@gmail.com', 0, 2, '6de7b66a57a03893aef10953df28422e', 'default.png'),
(425, 177382, 'Agent Voice', 'GIN GIN GUNTARA', 'gin@gmail.com', 0, 2, '3f466a86226f8c1948d4b91fc896fd8e', 'default.png'),
(426, 166591, 'Agent IndiHome', 'DANA TRIWIBOWO', 'Dana@gamil.com', 0, 2, '71203d11d7be109b6a96150841c7dd6b', 'default.png'),
(427, 166586, 'Agent IndiHome', 'RAHMAT ADHI JUMARA', 'Rahmat@gmail.com', 0, 2, '3b15d8e87140f8eac37eef7a1c6753ee', 'default.png'),
(428, 164167, 'Agent IndiHome', 'SYAEFUL AKBAR NURROHIM', 'Syaeful@gmail.com', 0, 2, '91acc9880efee9fd20a1a638a8153d7a', 'default.png'),
(429, 152518, 'Agent Omni', 'TRISNAWAN HARTANTO', 'Trisnawan@gmail.com', 0, 2, '3ed53f1bd8f00ee18fa190e33b709bb6', 'default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_detail`
--

CREATE TABLE `users_detail` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` text NOT NULL,
  `user_active` datetime NOT NULL,
  `user_notactive` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users_detail`
--

INSERT INTO `users_detail` (`id`, `id_user`, `status`, `user_active`, `user_notactive`) VALUES
(10, 1, 'tidak_online', '2022-02-17 10:31:42', '2022-04-04 16:17:30'),
(11, 1, 'tidak_online', '2022-02-17 10:34:43', '2022-04-04 16:17:30'),
(12, 1, 'tidak_online', '0000-00-00 00:00:00', '2022-04-04 16:17:30'),
(13, 1, 'tidak_online', '0000-00-00 00:00:00', '2022-04-04 16:17:30'),
(14, 2, 'tidak_online', '2022-02-18 15:19:52', '2022-04-04 16:17:30'),
(15, 1, 'tidak_online', '2022-02-18 15:19:58', '2022-04-04 16:17:30'),
(16, 1, 'tidak_online', '2022-02-18 15:20:27', '2022-04-04 16:17:30'),
(17, 383, 'tidak_online', '2022-02-18 15:56:03', '2022-04-04 16:17:30'),
(18, 132, 'tidak_online', '2022-02-18 16:18:58', '2022-04-04 16:17:30'),
(19, 1, 'tidak_online', '2022-02-18 17:13:59', '2022-04-04 16:17:30'),
(20, 3, 'tidak_online', '2022-02-18 18:17:35', '2022-04-04 16:17:30'),
(21, 6, 'tidak_online', '2022-02-18 18:23:14', '2022-04-04 16:17:30'),
(22, 1, 'tidak_online', '2022-02-18 20:27:26', '2022-04-04 16:17:30'),
(23, 1, 'tidak_online', '2022-02-18 20:28:04', '2022-04-04 16:17:30'),
(24, 1, 'tidak_online', '2022-02-18 21:52:32', '2022-04-04 16:17:30'),
(25, 39, 'tidak_online', '2022-02-19 14:11:36', '2022-04-04 16:17:30'),
(26, 1, 'tidak_online', '2022-02-19 14:12:35', '2022-04-04 16:17:30'),
(27, 290, 'tidak_online', '2022-02-20 07:09:08', '2022-04-04 16:17:30'),
(28, 39, 'tidak_online', '2022-02-20 16:58:09', '2022-04-04 16:17:30'),
(29, 381, 'tidak_online', '2022-02-20 22:34:24', '2022-04-04 16:17:30'),
(30, 398, 'tidak_online', '2022-02-20 22:34:34', '2022-04-04 16:17:30'),
(31, 398, 'tidak_online', '2022-02-21 06:07:24', '2022-04-04 16:17:30'),
(32, 1, 'tidak_online', '2022-02-21 10:05:34', '2022-04-04 16:17:30'),
(33, 6, 'tidak_online', '2022-02-21 10:06:51', '2022-04-04 16:17:30'),
(34, 39, 'tidak_online', '2022-02-21 10:59:35', '2022-04-04 16:17:30'),
(35, 6, 'tidak_online', '2022-02-21 17:08:27', '2022-04-04 16:17:30'),
(36, 398, 'tidak_online', '2022-02-21 22:27:31', '2022-04-04 16:17:30'),
(37, 346, 'tidak_online', '2022-02-22 11:48:09', '2022-04-04 16:17:30'),
(38, 218, 'tidak_online', '2022-02-22 14:50:59', '2022-04-04 16:17:30'),
(39, 1, 'tidak_online', '2022-02-22 19:15:10', '2022-04-04 16:17:30'),
(40, 228, 'tidak_online', '2022-02-23 09:15:38', '2022-04-04 16:17:30'),
(41, 333, 'tidak_online', '2022-02-23 19:31:58', '2022-04-04 16:17:30'),
(42, 346, 'tidak_online', '2022-02-24 08:58:08', '2022-04-04 16:17:30'),
(43, 230, 'tidak_online', '2022-02-24 08:59:08', '2022-04-04 16:17:30'),
(44, 1, 'tidak_online', '2022-02-24 17:49:10', '2022-04-04 16:17:30'),
(45, 39, 'tidak_online', '2022-02-24 21:21:38', '2022-04-04 16:17:30'),
(46, 39, 'tidak_online', '2022-02-24 23:22:27', '2022-04-04 16:17:30'),
(47, 89, 'tidak_online', '2022-02-25 09:22:26', '2022-04-04 16:17:30'),
(48, 89, 'tidak_online', '2022-02-25 09:23:07', '2022-04-04 16:17:30'),
(49, 1, 'tidak_online', '2022-02-25 13:01:32', '2022-04-04 16:17:30'),
(50, 140, 'tidak_online', '2022-02-25 13:03:59', '2022-04-04 16:17:30'),
(51, 140, 'tidak_online', '2022-02-25 13:06:27', '2022-04-04 16:17:30'),
(52, 89, 'tidak_online', '2022-02-25 14:08:47', '2022-04-04 16:17:30'),
(53, 346, 'tidak_online', '2022-02-25 16:16:51', '2022-04-04 16:17:30'),
(54, 32, 'tidak_online', '2022-02-25 17:07:03', '2022-04-04 16:17:30'),
(55, 1, 'tidak_online', '2022-02-26 13:53:38', '2022-04-04 16:17:30'),
(56, 215, 'tidak_online', '2022-02-28 06:46:29', '2022-04-04 16:17:30'),
(57, 89, 'tidak_online', '2022-02-28 10:39:37', '2022-04-04 16:17:30'),
(58, 204, 'tidak_online', '2022-02-28 14:54:38', '2022-04-04 16:17:30'),
(59, 204, 'tidak_online', '2022-02-28 18:40:39', '2022-04-04 16:17:30'),
(60, 398, 'tidak_online', '2022-02-28 22:49:21', '2022-04-04 16:17:30'),
(61, 346, 'tidak_online', '2022-03-01 13:34:04', '2022-04-04 16:17:30'),
(62, 290, 'tidak_online', '2022-03-01 15:30:48', '2022-04-04 16:17:30'),
(63, 215, 'tidak_online', '2022-03-01 15:40:02', '2022-04-04 16:17:30'),
(64, 346, 'tidak_online', '2022-03-03 08:08:30', '2022-04-04 16:17:30'),
(65, 381, 'tidak_online', '2022-03-03 10:40:00', '2022-04-04 16:17:30'),
(66, 383, 'tidak_online', '2022-03-03 12:57:00', '2022-04-04 16:17:30'),
(67, 1, 'tidak_online', '2022-03-03 12:58:38', '2022-04-04 16:17:30'),
(68, 228, 'tidak_online', '2022-03-05 13:28:31', '2022-04-04 16:17:30'),
(69, 204, 'tidak_online', '2022-03-05 17:51:21', '2022-04-04 16:17:30'),
(70, 228, 'tidak_online', '2022-03-06 21:39:00', '2022-04-04 16:17:30'),
(71, 39, 'tidak_online', '2022-03-07 11:45:50', '2022-04-04 16:17:30'),
(72, 252, 'tidak_online', '2022-03-07 14:24:08', '2022-04-04 16:17:30'),
(73, 1, 'tidak_online', '2022-03-08 13:25:44', '2022-04-04 16:17:30'),
(74, 204, 'tidak_online', '2022-03-08 15:23:42', '2022-04-04 16:17:30'),
(75, 32, 'tidak_online', '2022-03-08 17:43:23', '2022-04-04 16:17:30'),
(76, 6, 'tidak_online', '2022-03-10 11:04:50', '2022-04-04 16:17:30'),
(77, 228, 'tidak_online', '2022-03-10 20:38:29', '2022-04-04 16:17:30'),
(78, 346, 'tidak_online', '2022-03-13 10:02:54', '2022-04-04 16:17:30'),
(79, 32, 'tidak_online', '2022-03-14 00:00:02', '2022-04-04 16:17:30'),
(80, 89, 'tidak_online', '2022-03-14 00:01:29', '2022-04-04 16:17:30'),
(81, 346, 'tidak_online', '2022-03-14 08:59:42', '2022-04-04 16:17:30'),
(82, 346, 'tidak_online', '2022-03-14 12:29:26', '2022-04-04 16:17:30'),
(83, 228, 'tidak_online', '2022-03-14 18:53:12', '2022-04-04 16:17:30'),
(84, 398, 'tidak_online', '2022-03-14 23:24:54', '2022-04-04 16:17:30'),
(85, 200, 'tidak_online', '2022-03-15 08:39:49', '2022-04-04 16:17:30'),
(86, 1, 'tidak_online', '2022-03-16 15:11:09', '2022-04-04 16:17:30'),
(87, 1, 'tidak_online', '2022-03-16 15:13:59', '2022-04-04 16:17:30'),
(88, 73, 'tidak_online', '2022-03-16 15:14:40', '2022-04-04 16:17:30'),
(89, 1, 'tidak_online', '2022-03-17 11:20:31', '2022-04-04 16:17:30'),
(90, 1, 'tidak_online', '2022-03-17 14:09:33', '2022-04-04 16:17:30'),
(91, 1, 'tidak_online', '2022-03-17 14:32:00', '2022-04-04 16:17:30'),
(92, 346, 'tidak_online', '2022-03-17 15:27:21', '2022-04-04 16:17:30'),
(93, 290, 'tidak_online', '2022-03-17 16:11:10', '2022-04-04 16:17:30'),
(94, 73, 'tidak_online', '2022-03-18 10:34:27', '2022-04-04 16:17:30'),
(95, 140, 'tidak_online', '2022-03-20 15:18:12', '2022-04-04 16:17:30'),
(96, 346, 'tidak_online', '2022-03-22 08:27:57', '2022-04-04 16:17:30'),
(97, 140, 'tidak_online', '2022-03-24 12:44:44', '2022-04-04 16:17:30'),
(98, 6, 'tidak_online', '2022-03-24 14:19:48', '2022-04-04 16:17:30'),
(99, 6, 'tidak_online', '2022-03-24 14:20:07', '2022-04-04 16:17:30'),
(100, 39, 'tidak_online', '2022-03-24 20:22:48', '2022-04-04 16:17:30'),
(101, 6, 'tidak_online', '2022-03-25 17:33:07', '2022-04-04 16:17:30'),
(102, 1, 'tidak_online', '2022-03-25 17:36:34', '2022-04-04 16:17:30'),
(103, 1, 'tidak_online', '2022-03-25 17:39:18', '2022-04-04 16:17:30'),
(104, 346, 'tidak_online', '2022-03-26 12:53:29', '2022-04-04 16:17:30'),
(105, 346, 'tidak_online', '2022-03-26 12:53:32', '2022-04-04 16:17:30'),
(106, 76, 'tidak_online', '2022-03-26 13:28:42', '2022-04-04 16:17:30'),
(107, 134, 'tidak_online', '2022-03-26 13:29:13', '2022-04-04 16:17:30'),
(108, 76, 'tidak_online', '2022-03-26 13:32:47', '2022-04-04 16:17:30'),
(109, 1, 'tidak_online', '2022-03-27 14:52:57', '2022-04-04 16:17:30'),
(110, 228, 'tidak_online', '2022-03-29 13:44:10', '2022-04-04 16:17:30'),
(111, 134, 'tidak_online', '2022-03-31 19:01:49', '2022-04-04 16:17:30'),
(112, 398, 'tidak_online', '2022-03-31 22:18:40', '2022-04-04 16:17:30'),
(113, 6, 'tidak_online', '2022-04-01 16:35:17', '2022-04-04 16:17:30'),
(114, 1, 'tidak_online', '2022-04-04 08:42:37', '2022-04-04 16:17:30'),
(115, 1, 'tidak_online', '2022-04-04 09:18:46', '2022-04-04 16:17:30'),
(116, 1, 'tidak_online', '2022-04-04 10:05:28', '2022-04-04 16:17:30'),
(117, 6, 'tidak_online', '2022-04-04 10:17:11', '2022-04-04 16:17:30'),
(118, 6, 'tidak_online', '2022-04-04 16:16:06', '2022-04-04 16:17:30'),
(119, 333, 'online', '2022-04-05 14:51:14', '0000-00-00 00:00:00'),
(120, 1, 'online', '2022-04-06 08:45:53', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `kat_katprod`
--
ALTER TABLE `kat_katprod`
  ADD PRIMARY KEY (`id_katprod`);
ALTER TABLE `kat_katprod` ADD FULLTEXT KEY `kategori_name` (`kategori_name`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indeks untuk tabel `roster`
--
ALTER TABLE `roster`
  ADD PRIMARY KEY (`id_roster`);

--
-- Indeks untuk tabel `sub_product`
--
ALTER TABLE `sub_product`
  ADD PRIMARY KEY (`id_subproduct`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `users_detail`
--
ALTER TABLE `users_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kat_katprod`
--
ALTER TABLE `kat_katprod`
  MODIFY `id_katprod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT untuk tabel `roster`
--
ALTER TABLE `roster`
  MODIFY `id_roster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `sub_product`
--
ALTER TABLE `sub_product`
  MODIFY `id_subproduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=430;

--
-- AUTO_INCREMENT untuk tabel `users_detail`
--
ALTER TABLE `users_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
