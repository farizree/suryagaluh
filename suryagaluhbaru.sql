-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2016 at 03:00 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `suryagaluhbaru`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE IF NOT EXISTS `tbl_barang` (
`id_barang` int(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `nama_vendor` varchar(50) NOT NULL,
  `harga_barang` varchar(50) NOT NULL,
  `gambar_barang` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `nama_vendor`, `harga_barang`, `gambar_barang`) VALUES
(22, 'Rante Kit', 'Yamaha', 'Rp 150.000', 'img-41.jpg'),
(23, 'Bantalan Bola Honda', 'Honda', 'Rp 40.000', 'img-17.jpg'),
(24, 'Kampas Rem Tromol', 'Honda', 'Rp 45.000', 'img-38.jpg'),
(25, 'Gear Set', 'Honda', 'Rp 150.000', 'imgn.jpg'),
(26, 'Kaca Spion', 'Honda', 'Rp 50.000', 'img-36.jpg'),
(28, 'Switch RR Stop', 'Honda', 'Rp 50.000', 'img-29.jpg'),
(30, 'Bohlam Lampu', 'Honda', 'Rp 25.000', 'img-43.jpg'),
(31, 'Shock Absorder', 'Yamaha', 'Rp 130.000', 'img-37.jpg'),
(32, 'Step Belakang Jupiter', 'Yamaha', 'Rp 45.000', 'img-28.jpg'),
(33, 'Filter Udara', 'Yamaha', 'Rp 160.000', 'imgn-7.jpg'),
(34, 'Tali Rem Yamaha', 'Yamaha', 'Rp 50.000', 'img-5.jpg'),
(35, 'Race Ball Kit', 'Yamaha', 'Rp 35.000', 'img-45.jpg'),
(36, 'afafa', 'Suzuki', 'rp 145555', 'img-60.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE IF NOT EXISTS `tbl_komentar` (
  `id_konten` int(4) NOT NULL,
`id_komentar` int(4) NOT NULL,
  `nama_komentar` varchar(50) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_konten`, `id_komentar`, `nama_komentar`, `komentar`) VALUES
(1, 41, 'farizree@gmail.com', 'asooyyy geboy'),
(1, 50, 'gunadarma@gunadarma.ac.id', 'mantep akan saya acc langsung!!!!!'),
(1, 52, 'bunovita@gunadarma.ac.id', 'cepat kelar yah PInya fariz xxiixxixi'),
(1, 68, 'farizree@gmail.com', 'bissmillah'),
(1, 69, 'farizree@gmail.com', 'test coy'),
(4, 70, 'farizree@gmail.com', 'mantep coooyyyy'),
(5, 71, 'Nyoba@yahoo.co.id', 'bissmillah\r\n'),
(2, 72, 'farizree@gmail.com', 'manteppppp artikelnya kaka');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konten`
--

CREATE TABLE IF NOT EXISTS `tbl_konten` (
`id_konten` int(4) NOT NULL,
  `judul_konten` varchar(50) NOT NULL,
  `isi_konten` text NOT NULL,
  `gambar_konten` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_konten`
--

INSERT INTO `tbl_konten` (`id_konten`, `judul_konten`, `isi_konten`, `gambar_konten`) VALUES
(1, 'Tips perawatan motor', ' Motor yang baik adalah motor yang terawat dan enak dikendarai, motor yang terawat juga akan memiliki harga jual yang tinggi ketika hendak kita perjualkan. Namun banyak yang tidak tahu bagaimana merawat motor agar awet, banyak yang tanpa sadar sering melakukan hal- hal yang dapat mengurangi kualitas kendaraan mereka. Saya memiliki sebuah motor yang sudah berumur 8 tahun namun karena perawatan yang baik hingga saat ini kuaitas mesin motor tersebut masih tinggi dan memiliki harga jual yang tinggi.&nbsp; Kali ini kami akan memberikan beberapa cara merawat motor agar tetap awet meski telah digunakan bertahun-tahun.</p>\r\n\r\n<p>Cara merawat motor</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1. Perawatan di pagi hari</p>\r\n\r\n<p>Saat hendak menggunakan motor anda sebaiknya dipanaskan dahulu mesinnya, hal ini berguna untuk membuat mesin menjadi awet. Cara memanaskan mesin motor juga jangan langsung menggunakan starter listriknya, melainkan gunakan dahulu starter kaki dalam keadaan kontak mati, setelah itu starter motor dalam kontak hidup, panaskan mesin motor selama 5- 10 menit dahulu sebelum digunakan. Jangan menggunakan starter listrik ketika memanaskan motor di pagi hari, hal tersebut dapat membuat suara mesin motor menjadi lebih keras dan tidak awet.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>2. Pergantian oli berkala.</p>\r\n\r\n<p>Banyak orang yang menyepelekan mengganti oli&nbsp; motor dengan teratur, oli motor memiliki peran yang sangat penting bagi proses pembakaran pada mesin motor. Sebaiknya ganti secara rutin oli motor anda bila telah mencapai 1000KM - 1300KM.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>3. Menggunakan bensin berkualitas</p>\r\n\r\n<p>Kualitas bensin mempengaruhi kualitas mesin motor anda, sebaiknya dalam mengisi bensin motor sebaiknya di tempat pengisian bensin yang dikelola oleh pemerintah. Selain memiliki kualitas baik, juga aman bagi kendaraan bermotor anda.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>4. Selalu melakukan pengecekan</p>\r\n\r\n<p>Pengecekan kendaraan bermotor harus selalu rutin buat kalian yang suka berpergian jauh menggunakan kendaraan bermotor. lalukanlah pengecekan seperti rante, kampas rem, tali kopling, karet teromol, ban, busi. apabila kondisinya sudah tidak bagus segera lakukan penggantian.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>5. Gunakan onderdil asli</p>\r\n\r\n<p>Bagi pecinta motor biasanya sangat menyukai mengganti onderdil motornya biar terlihat keren. Jika anda pun juga demikian sebaiknya gunakanlah onderdil yang asli , jangan gunakan onderdil imitasi. Motor yang baru pada onderdilnya adalaha yang paling baik, jadi buat apa mengganti onderdil bila tidak terlalu penting.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Itulah beberapa tips merawat motor yang paling mendasar dan sangat efektif terutama merawat mesin motor yang sangat berhaga, agar saat kita berkendara dijalan tidak terjadi hal-hal yang kita tidak inginkan. Melakukan perawatan motor seperti diatas setidaknya dapat membuat harga jual motor anda nantinya tidak terlalu jauh turun harganya saat ingin dijual kembali</p>\r\n', 'new-3.jpg'),
(2, 'Tips perawatan motor injeksi', ' Zaman yang semakin modern ini hampir seluruh produksi kendaraan bermotor telah menggunakan sistem injeksi, jadi sudah tidak menggunakan karburator lagi, sepeda motor yang menggunakan teknologi injeksi ini sedah semestinya memerlukan perawatan harian berbeda dari sepedah motor yang masih karburator. Kenapa kendaraan injeksi lebih mudah terkena gangguan dalam system pembakaran dari pada kendaraan yang masih menggunakan karburator?</p>\r\n\r\n<p>Dalam pengertian sederhana supaya lebih mudah kita fahami yaitu cara masuknya bahan bakar ke dalam ruang pembakaran pada kendaraan injeksi yaitu melalui system dorongan udara (diinjekkan kedalam ruang pembakaran), sedangkan system karburator yaitu melalui lubang hisap kemudian bahan bakar masuk ke dalam ruang pembakaran, hal ini yang kemudian memberikan perbedaan dalam komponen pendukungnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Berkikut tips cara merawat motor injeksi yang mudah:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1. Disarankan sebelum pergi mengendarai Motor matic Injeksi panaskan dahulu mesinnya, sekitar 1 sampai 5 menit, waktu sebentar itu sudah cukup untuk memanaskan mesin dan membuat pembakaran jadi sempurna.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>2. Sebaiknya gunakan bahan bakar dengan RON (Reseach Octane Number) diatas 90 misalnya saja pertamax dan sejenisnya bukan seperti BBM bersubsidi. Hal itu dimaksudkan supaya kualitas mesin tetap terjaga dan bisa awet dalam waktu cukup lama.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>3. Lakukan secara rutin melihat kondisi aki karena motor injeksi sudah menggunakan kontrol elektrik sehingga apabila ada arus listrik yang tidak stabil mak bisa mempengaruhi motor anda.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>4. Jangan memperberat kinerja listrik seperti penambahan aksesori lampu maupun klakson, jika anda tetap memaksakan maka ECU (Electronic Control Unit) motor injeksi anda akan cepat drop.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>5. Selalu cek kondisi tanki bensin, jangan membiarkan kondisi tangki bensin dalam keadaan kosong. Mengisi bensin tak perlu menunggu bensin hingga jarum menunjuk arah huruf E atau Empty. Mesin injeksi tidak boleh kehabisan bensi</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>6. Selalu periksa kondisi busi dan aki. Sebab, kedua perangkat tersebut membuat motor Injeksi bertenaga dan melaju kencang. Apabila aki atau busi sudah tidak berfungsi gantilah dengan yang baru dan orisinil.</p>\r\n', 'new.jpg'),
(4, 'Tips perawatan motor supaya tetap bersih', ' Merawat sepeda motor bisa dibilang gampang-gampang susah. Untuk perawatan mesin sudah menjadi tanggungan dealer atau bengkel yang ada. Perawatan lainnya misalnya mencuci dan membersihkan motor. Mencuci motor pun juga ada yang memberikan jasa cuci motor. Namun tidak ada salahnya jika anda mencuci sendiri motor tersebut biar lebih hemat. Sebab mencuci motor sendiri akan memberikan gambaran mengenai kondisi motor anda sendiri. Tingkat kebersihan sepeda motor tidak tergantung terhadap cuaca, baik cuaca kemarau maupun cuaca hujan, sepeda motor pasti memerlukan sentuhan agar selalu bersih dan mengkilap. Mencuci dan membersihkan motor anda dapat dilakukan secara rutin, untuk mencuci dilakukan rutin misalnya tiga hari sekali, tapi untuk membersihkan sekedar mengelap motor agar bersih dari debu dapat dilakukan setiap hari. Berikut tips saat membersihkan motor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1. Pegas peredam guncangan (shock breaker) dan cakram rem bisa dibersihkan dengan sikat. Jika mungkin gunakan sikat khusus untuk membersihkan motor atau sikat biasa yang berbulu tidak terlalu kaku. Anda bisa memanfaatkan sikat gigi tua, sikat cuci piring, sikat cucian, atau kuas cat.</p>\r\n\r\n<p>2. Sikat juga sesuai untuk membersihkan mesin motor dan knalpot. Tunggu hingga kedua bagian ini menjadi sepenuhnya dingin sebelum menyentuh atau menyikatnya. Kotoran pada kedua bagian ini mungkin lebih sulit dibersihkan karena panas membuat kotoran cepat kering dan menempel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>3. Gunakan sikat untuk membersihkan rantai motor dan mengoleskan pembersih rantai motor hingga menjangkau kaitan-kaitan rantai.</p>\r\n\r\n<p>4. Jangan lupa bersihkan juga sepatbor, pelat nomor, jeruji roda, ban, standar, dan pijakan kaki. Berhati-hatilah menyikat bagian segel karet agar tidak lepas atau koyak.</p>\r\n\r\n<p>5. Gunakan cairan pembersih motor atau sabun seperti Kit, Nosy atau Sunlight yang dicampurkan kedalem bak. Fungsi cairan ini untuk membuat bodi motor anda terlihat kinclong.</p>\r\n\r\n<p>Selain untuk menjaga kebersihan dan penampilan, mencuci sepeda motor juga bertujuan untuk mempertahankannya agar selalu berjalan lancar dan mencegah kerusakan. Cara mencuci motor yang benar secara berkala dengan menangani bagian-bagiannya sedikit demi sedikit lebih mudah dan hemat waktu daripada membersihkan lumpur yang sudah mengering di bodi motor selama berbulan-bulan.</p>\r\n\r\n<p>&gt;</p>\r\n\r\n<p>&gt;</p>\r\n\r\n<p>&gt;</p>\r\n', 'new-7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `nama_web` varchar(50) NOT NULL,
  `email_web` varchar(50) NOT NULL,
  `password_web` varchar(50) NOT NULL,
  `jabatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`nama_web`, `email_web`, `password_web`, `jabatan`) VALUES
('admin', 'admin@admin', 'admin', 'admin'),
('Aku', 'akuaku@aku.com', 'aku', 'user'),
('angga', 'anggahasnal@gmail.com', 'angga', 'user'),
('bissmillah', 'bissmillah@yahoo.com', 'bissmillah', 'user'),
('bissmillah', 'bissmillahoke@yahoo.com', 'bis', 'user'),
('farizree', 'farizree@gmail.com', 'f', 'user'),
('fariz', 'farizreee@gmail.com', 'f', 'user'),
('fariz', 'farizreeee@gmail.com', 'f', 'user'),
('Bissillah', 'kocak@kocak.com', 'kocak', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendor`
--

CREATE TABLE IF NOT EXISTS `tbl_vendor` (
`id_vendor` int(4) NOT NULL,
  `id_barang` int(4) NOT NULL,
  `nama_vendor` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_vendor`
--

INSERT INTO `tbl_vendor` (`id_vendor`, `id_barang`, `nama_vendor`) VALUES
(1, 0, 'Yamaha'),
(2, 0, 'Honda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
 ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
 ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tbl_konten`
--
ALTER TABLE `tbl_konten`
 ADD PRIMARY KEY (`id_konten`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
 ADD PRIMARY KEY (`email_web`);

--
-- Indexes for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
 ADD PRIMARY KEY (`id_vendor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
MODIFY `id_komentar` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `tbl_konten`
--
ALTER TABLE `tbl_konten`
MODIFY `id_konten` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
MODIFY `id_vendor` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
