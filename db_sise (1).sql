-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2017 at 03:34 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sise`
--

-- --------------------------------------------------------

--
-- Table structure for table `sinonim`
--

CREATE TABLE `sinonim` (
  `kata1` varchar(20) NOT NULL,
  `kata2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sinonim`
--

INSERT INTO `sinonim` (`kata1`, `kata2`) VALUES
('tombru', ''),
('hardware', 'perangkat keras'),
('aturan', 'perintah'),
('layanan', 'perihal'),
('pemberitahuan', 'informasi'),
('menyediakan', 'menyiapkan'),
('memberikan', 'menyerahkan'),
('meminta', 'memohon'),
('berbagi', 'sharing'),
('jaringan', 'susunan'),
('network', 'jaringan'),
('memakai', 'menggunakan'),
('menggunakan', 'memakai'),
('client', 'pelanggan'),
('merancang', 'mendesain'),
('mendesain', 'merancang'),
('perubahan', 'pergantian'),
('pergantian', 'perubahan'),
('memengaruhi', 'mengakibatkan'),
('mengakibatkan', 'memengaruhi'),
('keterangan', 'data'),
('kegunaan', 'fungsi'),
('perangkat keras', 'hardware'),
('elektronika multimed', 'komputer'),
('transport', 'angkut'),
('session', 'sesi'),
('presentation', 'presentasi'),
('tidak banyak', 'beberapa'),
('mengenakan', 'pakai'),
('pelanggan', 'client'),
('hubungan', 'komunikasi'),
('lapisan', 'tingkata1n'),
('tingkata1n', 'lapisan'),
('datalink', 'penghubung informasi'),
('penghubung informasi', 'datalink'),
('terapan', 'aplikasi'),
('susunan', 'jaringan'),
('tata aturan', 'protokol'),
('menyiapkan', 'menyediakan');

-- --------------------------------------------------------

--
-- Table structure for table `stopword`
--

CREATE TABLE `stopword` (
  `stopword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `stopword`
--

INSERT INTO `stopword` (`stopword`) VALUES
('yang'),
('di'),
('akan'),
('dan'),
('itu'),
('dengan'),
('adalah'),
('ini'),
('dari'),
('dalam'),
('kalau'),
('lain'),
('telah'),
('pada'),
('juga'),
('tentu'),
('yaitu'),
('yakni'),
('atau'),
('dulu'),
('inikah'),
('itukah'),
('inilah'),
('itulah'),
('jadi'),
('jadilah'),
('jadinya'),
('akankah'),
('bukankah'),
('supaya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_courses`
--

CREATE TABLE `tb_courses` (
  `idmk` int(11) NOT NULL,
  `courses` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_courses`
--

INSERT INTO `tb_courses` (`idmk`, `courses`, `username`) VALUES
(1, 'Advanced Programming', 'putri.ratna'),
(2, 'jaringan komputer', 'putri.ratna');

-- --------------------------------------------------------

--
-- Table structure for table `tb_exam`
--

CREATE TABLE `tb_exam` (
  `idmk` int(11) NOT NULL COMMENT 'kode matakuliah (id) dari ujian tersebut',
  `idtest` int(20) NOT NULL COMMENT 'kode dari ujian',
  `exam` varchar(20) NOT NULL COMMENT 'nama ujian',
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel nama ujian';

--
-- Dumping data for table `tb_exam`
--

INSERT INTO `tb_exam` (`idmk`, `idtest`, `exam`, `username`) VALUES
(1, 1, 'Midterm Test', 'putri.ratna'),
(1, 2, 'UAS', 'putri.ratna');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `idjawaban` int(11) NOT NULL,
  `idmk` int(11) NOT NULL,
  `idtest` int(11) NOT NULL,
  `idsoal` int(11) NOT NULL,
  `nama` text NOT NULL,
  `npm` text NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`idjawaban`, `idmk`, `idtest`, `idsoal`, `nama`, `npm`, `jawaban`) VALUES
(1, 1, 1, 1, 'yussanti', '', 'OSI (Open Systems Interconnections) atau OSI Reference Model adalah suatu deskripsi abstrak mengenai desain lapisan-lapisan komunikasi dan protokol jaringan komputer yang dikembangkan sebagai bagian dari inisiatif OSI itu sendiri. OSI memiliki tujuh buah lapisan dalam modelnya.'),
(2, 1, 1, 2, 'yussanti', '', 'Memiliki program yang sudah tertanamkan pada komputer Pada komputer ini main memory menyimpan seluruh data dan program Pengoperasian Algorithm and Logic Unit (ALU) dalam data biner Control Unit (CU) menginterpretasikan instruksi dari memory dan eksekusi peralatan Input dan output dioperasikan oleh CU Struktur dari komputer model von Neumann adalah mainÂ memory ALU CU input dan ouput'),
(3, 1, 1, 1, 'pandu.wicaksono', '', 'OSI Model adalahÂ Â sebuah model arsitektural jaringan yang dikembangkan oleh sebuah badan internasionalÂ (ISO) di Eropa sanaÂ pada tahun 1977. OSI adalah singkatan dariÂ Open System Interconnection atau sering disebut juga model tujuh lapis. berfungsi sebagai alat koneksi, transfer data, dan mengatur fungsionalitass jaringan.'),
(4, 1, 1, 2, 'pandu.wicaksono', '', 'Komputer model von Neumann adalah model arsitektur komputer yang menggambarkan korelasi antara input, output, dan sebuah sistem. Pada model ini, output diperoleh dengan memasukkan sebuah input dalam sebuah sistem. Sistem itu sendiri terdiri dari Control Processing Unit yang terdiri atas Control Unit dan Arithmetic Unit dan sebuah Memory Unit. Control Processing Unit dan Memory Unit bekerja secara bersamaan. Hal itu melambangkan interaksi CPU pada komputer dengan memori pada komputer seperti RAM ataupun Storage.'),
(5, 1, 1, 1, 'yohanes.lomi', '', 'OSI Model merupakan suatu deskripsi abstrak mengenai desain lapisan - lapisan komunikasi dan protokol jaringan komputer yang dikembangkan sebagai bagian dari inisiatif Open Systems Interconnection (OSI).'),
(6, 1, 1, 2, 'yohanes.lomi', '', 'model van neumann menggambarkan bahwa komputer itu dibagi 4 bagian utama dan keempat bagian ini dihubungkan dengan kawat bus ALU (arithmatic logic unit Control Memory Input outpu\r\n'),
(7, 1, 1, 1, 'tomi', '', 'OSI model adalah standard internasional untuk protokol jaringan. memberikan kerangka yang berstruktur bagaimana proses komunikasi dan interaksi melalui sebuah jaringan. memiliki 7 lapisan yang memiliki fungsinya masing masing di setiap layernya\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
(8, 1, 1, 2, 'tomi', '', 'Model von Neumann adalah sebuah disain arsitektur yang terdiri dari 3 komponen utama, yaitu Memory, dan Control Unit & Arithmetic Logic Unit (CPU Section) . Untuk mendapatkan output pada model ini, kita harus terlebih dahulu memasukkan input yang akan melalui 3 komponen secara berurut (CPU - Memory - ALU) .\r\n'),
(9, 1, 1, 1, 'abdurohman', '', '\"OSI model merupakan protocol dalam pengiriman data. OSI memiliki 7 layer. \r\n\r\n-Layer pertama merupakan layer aplikasi, layer aplikasi merupakan interface komputer dengan user. \r\n\r\n-Layer kedua merupakan layer presentasi. pada layer presentasi dilakukan kompresi data. merubah data menjadi format yang dapat dimengerti oleh 2 sisi. \r\n\r\n-Layer ketiga merupakan layer session, dilayer ini dipastikan bahwa data yang terkirim tidak tercampur dari berbagai aplikasi. \r\n\r\n-Layer keempat merupakan transport layer, pada layer ini dilakukan error correction pada segmentasi data, dan dilakukan port addressing (contoh: internet 8080). pada layer ini data berbentuk segmen \r\n\r\n-layer kelima merupakan layer network. data yang terkirim dalam bentuk packet.pada layer network dilakukan prosesmengetahui network tujuannya seperti IP address atau dengan kata lain logical addressing.Â  \r\n\r\n-Layer keenam adalah data link, pada layer ini dilakukan physical addressing, seperti menentukan alamat router/switch. pada layer ini data di frame. \r\n\r\n-layer ketujuh adalah layer physical, pada layer ini data sudah dalam bentuk bits \r\n\r\n*proses dari layer 1 ke layer 7 merupakan enkapsulasiÂ \"\r\n'),
(10, 1, 1, 2, 'abdurohman', '', 'Model ini menggambarkan komputer dalam empat bagian utama Aritmatika Logic Unit (ALU) Unit Control Memory Input Output Keempat unit tersebut akan dihubungkan oleh rangkaian kawat bus\r\n'),
(11, 1, 1, 1, 'aldwin.akbar', '', '\"OSI Model adalah sebuah model konsep dari proses komunikasi pada sebuah komputer. OSI Model terdiri dari 7 layer, yaitu :\r\n(dari atas ke bawah)Â \r\nApplication\r\nPresentation\r\nSession\r\nTransport\r\nNetwork\r\nData Link\r\nPhysical\"\r\n'),
(12, 1, 1, 2, 'aldwin.akbar', '', 'komputer model von neumann adalah komputer yang memiliki arsitektur dimana letak RAM dan ROM berada pada memori yang sama. model komputer ini memiliki address dan data bus tunggal untuk mengalamatkan program. bagian dari komputer ini terdiri atas CPU, memory, dan input/output. komponen-komponen tersebut terhubung dengan bus.\r\n'),
(13, 1, 1, 1, 'alvin.tamin', '', '\"osi model adalah singkatan dari open system interrconnection, 1997 ditemukan oleh ISO \r\n\r\nada 7 layer \r\n\r\n1. physical layer: transmisi nya \r\n\r\n2. datalink: jaringan fisik seperti frame \r\n\r\n3. network: jaringan logika seperti paket \r\n\r\n4. transport: jembatan antara device dengan jaringannya seprti segment \r\n\r\n5. session: membuka jalur komunikasi utk application layer \r\n\r\n6. presentation: representasi data seperti enkripsi dll \r\n\r\n7. application: interface manusia dengan jaringan\"\r\n'),
(14, 1, 1, 2, 'alvin.tamin', '', 'Komputer model Von Neumann adalah sebuah arsitektur komputer yang didasari pada tahun 1945 oleh seorang matematikawan dan fisikawan John Von Neumann.\r\n'),
(15, 1, 1, 1, 'dito.augusta', '', '\"Osi model adalah model yang digunakan untuk menjelaskan tingkatan pengaplikasian transfer data dan pengidentifikasian komputer \r\n\r\nosi model terdapat 7 layer \r\n\r\nApplication \r\n\r\nPresentation \r\n\r\nSession \r\n\r\nTransport \r\n\r\nNetwork \r\n\r\nData link \r\n\r\nPhysical\"\r\n'),
(16, 1, 1, 2, 'dito.augusta', '', 'Pada 1940an, Von Neuman membuat mesin penghitung berukuran besar menggunakan tabung-tabung vakum yang dapat mengolah suatu input menjadi output. Nantinya mesin Von Neumann akan disebut sebagai salah satu komputer generasi pertama.'),
(17, 1, 1, 1, 'ilham.muharma', '', 'OSI model adalah salah satu pemodelan jaringan selain TCP/IP. OSI diciptakan oleh ISO. OSI terdiri atas 7 layer berbeda diantaranya adalah physical, data link, network, dan application dimana ditiap-tiap layernya terdapat device yang berbeda-beda karena tiap layernya memiliki fungsi yang berbeda-beda\r\n'),
(18, 1, 1, 2, 'ilham.muharma', '', 'komputer model von Neumann merupakan jenis komputer yang memiliki dasar semua sistem komputer.komputer tersebut telah terdiri dari sistem ALU, sistem output/input, Operating System dan bahasa pemrograman dimana semuanya itu terhubung satu dengan yang lainnya membentuk suatu grafik yang dinamakan grafik model von Neumann. Komputer model Neumann ini merupakan jenis komputer yang paling digunakan sampai sekarang ini dibandingkan dengan model-model komputer yang sebelumnya.Â '),
(19, 1, 1, 1, 'randy.sanjaya', '', 'OSI model merupakan bagan/model yang digunakan untuk mempermudah dalam penggambaran jaringan komputer secara keseluruhan. Terdapat tujuh lapisan OSI layer yaitu physical, data link, network, transportation, session, presentation dan application. Masing-masing lapisan ini memiliki fungsi masing masing dan saling terhubung. Pada lapisan pertama (physical) disitu terdapat perangkat yang dapat dilihat fisiknya seperti kabel, NIC, gelombang radio dan lainnya. Kemudian pada data link terdapat perangkat keras yang menghubungkan antar client seperti hub dan router. Network merupakan jaringan yang lebih besar lagi dan dapat mengirim data ke tujuan. Transportation merupakan lapisan dimana terjadi pengiriman data dari asal ke tujuan dan pada layer yang terakhir (application) akan terjadi kegiatan/hubungan antara manusia dan perangkat keras (seperti menggunakan software, aplikasi dan lainnya). Proses tersebut akan berjalan dari layer yang paling rendah (physical) sampai yang paling tinggi (application) dan akan berjalan kembali dari yang paling tinggi ke yang paling rendah.\r\n'),
(20, 1, 1, 2, 'randy.sanjaya', '', 'Komputer model von Neumann merupakan model yang menjelaskan komputer secara sederhana. Model ini dibagi menjadi tiga bagian yaitu input, proses, output. Input merupakan bagian dimana terjadi pemasukkan data yang ingin diproses sehingga menghasilkan ouput. Proses merupakan bagian dimana data yang dimasukkan tersebut akan diproses sehingga menghasilkan output yang diinginkan. Terakhir adalah ouput dimana hasil data akan ditampilkan setelah diproses.Â '),
(21, 1, 1, 1, 'Budi', '', 'OSI open Systems Interconnections atau OSI Reference model adalah suatu deskripsi abstrak mengenai desain lapisan lapisan komunikasi dan protokol jaringan komputer yang dikembangkan sebagai bagian dari inisiatif OSI itu sendiri OSI Memiliki tujuh buah lapisan dalam modelnya\r\n'),
(22, 1, 1, 2, 'Budi', '', 'Komputer model von Neumann merupakan model yang menjelaskan komputer secara sederhana. Model ini dibagi menjadi tiga bagian yaitu input, proses, output. Input merupakan bagian dimana terjadi pemasukkan data yang ingin diproses sehingga menghasilkan ouput. Proses merupakan bagian dimana data yang dimasukkan tersebut akan diproses sehingga menghasilkan output yang diinginkan. Terakhir adalah ouput dimana hasil data akan ditampilkan setelah diproses.Â \r\n'),
(23, 1, 1, 1, 'harist.refian', '', 'Sebelum adanya OSI model perangkat komunikasi yang berbeda Vendor tidak dapat saling berkomunikasi OSI model Merupakan standard komunikasi yang diterapkan pada jaringan komputer dengan adanya OSI model semua alat komunikasi dapat saling berkomunikasi OSI model ini terdiri dari 7 lapisan yang dibagi menjadi Upper Layer dan Lower Layer Upper Layer terdiri dari session presentation dan application sedangkan Lower Layer terdiri dari physical data link network dan transport biasanya anak teknik elektro dan teknik komputer banyak berurusan dengan Lower Layer karena lebih mengurusi dari fisiknya sampai jaringan sedangkan yang sudah memasuki aplikasi urusan ahli di bidang software'),
(24, 1, 1, 2, 'harist.refian', '', 'komputer model von Neumann merupakan jenis komputer yang memiliki dasar semua sistem komputer.komputer tersebut telah terdiri dari sistem ALU, sistem output/input, Operating System dan bahasa pemrograman dimana semuanya itu terhubung satu dengan yang lainnya membentuk suatu grafik yang dinamakan grafik model von Neumann. Komputer model Neumann ini merupakan jenis komputer yang paling digunakan sampai sekarang ini dibandingkan dengan model-model komputer yang sebelumnya.Â \r\n'),
(25, 1, 1, 1, 'fransiska.dyah', '', 'OSI model adalah suatu model yang menggambarkan bagaimana informasi dari suatu software pada komputer dapat berpindah melewati sebuah Media jaringan ke suatu software pada komputer lainnya OSI model terdiri dari 7 lapisan atau Layer 0 application Layer adalah lapisan paling atas atau Layer ke 7 yang menjelaskan bagaimana aplikasi jaringan berkomunikasi dengan layanan jaringan 2 presentation Layer adalah lapisan ke 6 yang berfungsi Untuk mentranslasikan data yang akan ditransmisi melalui jaringan 3 session Layer adalah Layer ke 5 yang berfungsi Untuk menjelaskan bagaimana koneksi dapat terbentuk 4 transport Layer adalah Layer ke 4 yang berfungsi Untuk memecah data kedalam paket paket Untuk dikirim paket paket data diberikan nomor urut agar pada sisi penerima paket paket data tersebut dapat disusun kembali menjadi data 5 network Layer adalah Layer ke 3 yang berfungsi Untuk mengidentifiaksi jaringan atau internetworking 6 Data link Layer adalah Layer ke 2 yang berfungsi Untuk menentukan bit bit data dikelompokkan menjadi frame 7 physical Layer adalah Layer ke 0 yang berfungsi sebagai penghubung aplikasi dengan jaringan'),
(26, 1, 1, 2, 'fransiska.dyah', '', 'Komputer model von Neuman merupakan komputer yang memiliki address dan data bus tunggal. Pada model komputer ini susunan ROM dan RAM berada dalam memori yang sama. seperti komputer pada umumnya, komputer ini juga terdiri atas memory, CPU, dan Input/Output device.'),
(27, 1, 1, 1, 'Andira', '', 'OSI model adalah suatu model yang menggambarkan bagaimana informasi dari suatu software pada komputer dapat berpindah melewati sebuah Media jaringan ke suatu software pada komputer lainnya OSI model terdiri dari 7 lapisan atau Layer 0 application Layer adalah lapisan paling atas atau Layer ke 7 yang menjelaskan bagaimana aplikasi jaringan berkomunikasi dengan layanan jaringan 2 presentation Layer adalah lapisan ke 6 yang berfungsi Untuk mentranslasikan data yang akan ditransmisi melalui jaringan 3 session Layer adalah Layer ke 5 yang berfungsi Untuk menjelaskan bagaimana koneksi dapat terbentuk 4 transport Layer adalah Layer ke 4 yang berfungsi Untuk memecah data kedalam paket paket Untuk dikirim paket paket data diberikan nomor urut agar pada sisi penerima paket paket data tersebut dapat disusun kembali menjadi data 5 network Layer adalah Layer ke 3 yang berfungsi Untuk mengidentifiaksi jaringan atau internetworking 6 Data link Layer adalah Layer ke 2 yang berfungsi Untuk menentukan bit bit data dikelompokkan menjadi frame 7 physical Layer adalah Layer ke 0 yang berfungsi sebagai penghubung aplikasi dengan jaringan'),
(28, 1, 1, 2, 'Andira', '', 'Von Neumann menggambarkan komputer dengan empat bagian utama Unit Aritmatika dan Logis (ALU) unit kontrol memori alat masukan dan hasil (secara kolektif dinamakan I/O).\r\n'),
(29, 1, 1, 1, 'Mahasena', '', 'Sebelum adanya OSI model perangkat komunikasi yang berbeda Vendor tidak dapat saling berkomunikasi OSI model Merupakan standard komunikasi yang diterapkan pada jaringan komputer dengan adanya OSI model semua alat komunikasi dapat saling berkomunikasi OSI model ini terdiri dari 7 lapisan yang dibagi menjadi Upper Layer dan Lower Layer Upper Layer terdiri dari session presentation dan application sedangkan Lower Layer terdiri dari physical data link network dan transport biasanya anak teknik elektro dan teknik komputer banyak berurusan dengan Lower Layer karena lebih mengurusi dari fisiknya sampai jaringan sedangkan yang sudah memasuki aplikasi urusan ahli di bidang software\r\n'),
(30, 1, 1, 2, 'Mahasena', '', 'Pada 1940an, Von Neuman membuat mesin penghitung berukuran besar menggunakan tabung-tabung vakum yang dapat mengolah suatu input menjadi output. Nantinya mesin Von Neumann akan disebut sebagai salah satu komputer generasi pertama.\r\n'),
(31, 1, 1, 1, 'ilma.dewayani', '', 'Sebelum adanya OSI model perangkat komunikasi yang berbeda Vendor tidak dapat saling berkomunikasi OSI model Merupakan standard komunikasi yang diterapkan pada jaringan komputer dengan adanya OSI model semua alat komunikasi dapat saling berkomunikasi OSI model ini terdiri dari 7 lapisan yang dibagi menjadi Upper Layer dan Lower Layer Upper Layer terdiri dari session presentation dan application sedangkan Lower Layer terdiri dari physical data link network dan transport biasanya anak teknik elektro dan teknik komputer banyak berurusan dengan Lower Layer karena lebih mengurusi dari fisiknya sampai jaringan sedangkan yang sudah memasuki aplikasi urusan ahli di bidang software\r\n'),
(32, 1, 1, 2, 'ilma.dewayani', '', 'Komputer model von Neuman merupakan komputer yang memiliki address dan data bus tunggal. Pada model komputer ini susunan ROM dan RAM berada dalam memori yang sama. seperti komputer pada umumnya, komputer ini juga terdiri atas memory, CPU, dan Input/Output device.\r\n'),
(33, 1, 1, 1, 'Ivan', '', 'Sebelum adanya OSI model perangkat komunikasi yang berbeda Vendor tidak dapat saling berkomunikasi OSI model Merupakan standard komunikasi yang diterapkan pada jaringan komputer dengan adanya OSI model semua alat komunikasi dapat saling berkomunikasi OSI model ini terdiri dari 7 lapisan yang dibagi menjadi Upper Layer dan Lower Layer Upper Layer terdiri dari session presentation dan application sedangkan Lower Layer terdiri dari physical data link network dan transport biasanya anak teknik elektro dan teknik komputer banyak berurusan dengan Lower Layer karena lebih mengurusi dari fisiknya sampai jaringan sedangkan yang sudah memasuki aplikasi urusan ahli di bidang software\r\n'),
(34, 1, 1, 2, 'Ivan', '', 'komputer model von Neumann merupakan jenis komputer yang memiliki dasar semua sistem komputer.komputer tersebut telah terdiri dari sistem ALU, sistem output/input, Operating System dan bahasa pemrograman dimana semuanya itu terhubung satu dengan yang lainnya membentuk suatu grafik yang dinamakan grafik model von Neumann. Komputer model Neumann ini merupakan jenis komputer yang paling digunakan sampai sekarang ini dibandingkan dengan model-model komputer yang sebelumnya.Â \r\n'),
(35, 1, 1, 1, 'Suci', '', ''),
(36, 1, 1, 2, 'Suci', '', 'model von newman adalah model komputer yang menggambarkan kolerasi antara input dan output pada sebuah sistem. model ini juga menggambarkan proses yang terjadi pada sistem/kkomputer itu.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `idmk` int(11) NOT NULL,
  `idtest` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `idsoal` int(11) NOT NULL,
  `idjawaban` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`idmk`, `idtest`, `username`, `idsoal`, `idjawaban`, `nilai`) VALUES
(1, 1, 'yussanti', 1, 1, 95),
(1, 1, 'yussanti', 2, 2, 100),
(1, 1, 'pandu.wicaksono', 1, 3, 89),
(1, 1, 'pandu.wicaksono', 2, 4, 92),
(1, 1, 'yohanes.lomi', 1, 5, 94),
(1, 1, 'yohanes.lomi', 2, 6, 99),
(1, 1, 'tomi', 1, 7, 91),
(1, 1, 'tomi', 2, 8, 100),
(1, 1, 'abdurohman', 1, 9, 86),
(1, 1, 'abdurohman', 2, 10, 100),
(1, 1, 'aldwin.akbar', 1, 11, 100),
(1, 1, 'aldwin.akbar', 2, 12, 100),
(1, 1, 'alvin.tamin', 1, 13, 100),
(1, 1, 'alvin.tamin', 2, 14, 100),
(1, 1, 'dito.augusta', 1, 15, 100),
(1, 1, 'dito.augusta', 2, 16, 87),
(1, 1, 'ilham.muharma', 1, 17, 100),
(1, 1, 'ilham.muharma', 2, 18, 94),
(1, 1, 'randy.sanjaya', 1, 19, 89),
(1, 1, 'randy.sanjaya', 2, 20, 84),
(1, 1, 'Budi', 1, 21, 100),
(1, 1, 'Budi', 2, 22, 84),
(1, 1, 'harist.refian', 1, 23, 98),
(1, 1, 'harist.refian', 2, 24, 94),
(1, 1, 'fransiska.dyah', 1, 25, 86),
(1, 1, 'fransiska.dyah', 2, 26, 100),
(1, 1, 'Andira', 1, 27, 86),
(1, 1, 'Andira', 2, 28, 100),
(1, 1, 'Mahasena', 1, 29, 98),
(1, 1, 'Mahasena', 2, 30, 87),
(1, 1, 'ilma.dewayani', 1, 31, 98),
(1, 1, 'ilma.dewayani', 2, 32, 100),
(1, 1, 'Ivan', 1, 33, 98),
(1, 1, 'Ivan', 2, 34, 94),
(1, 1, 'Suci', 1, 35, 0),
(1, 1, 'Suci', 2, 36, 99);

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `idmk` int(11) NOT NULL,
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peserta`
--

INSERT INTO `tb_peserta` (`idmk`, `username`) VALUES
(1, 'yussanti'),
(1, 'pandu.wicaksono'),
(1, 'yohanes.lomi'),
(1, 'tomi'),
(1, 'abdurohman'),
(1, 'aldwin.akbar'),
(1, 'alvin.tamin'),
(1, 'Andira'),
(1, 'Budi'),
(1, 'dito.augusta'),
(1, 'fransiska.dyah'),
(1, 'harist.refian'),
(1, 'ilham.muharma'),
(1, 'randy.sanjaya'),
(1, 'Mahasena'),
(1, 'ilma.dewayani'),
(1, 'Ivan'),
(1, 'untuk.demo1'),
(1, 'untuk.demo2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_soaljawab`
--

CREATE TABLE `tb_soaljawab` (
  `idmk` int(11) NOT NULL,
  `idtest` int(11) NOT NULL,
  `idsoal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `jawabankunci` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_soaljawab`
--

INSERT INTO `tb_soaljawab` (`idmk`, `idtest`, `idsoal`, `soal`, `jawabankunci`) VALUES
(1, 1, 1, 'Jelaskan apa yang anda ketahui mengenai OSI Model!', 'Merupakan model untuk membangun sebuah jaringan komputer mulai dari user interface dengan pengguna sampai dengan pengiriman data melalui kabel. \nOSI model terdiri dari 7 layer yaitu  \nApplication layer : Merupakan layer dimana user berinteraksi dengan sistem. Melalui sebuah aplikasi user dapat memberikan perintah kepada sebuah sistem yang kemudian nanti diolah. \nPresentation Layer : mentransmisikan data yang hendak ditransmisikan oleh aplkasi ke dalam format yang dapat ditransmisikan melalui jaringan. \nSession Layer : Mendefinisikan bagaimana koneksi dapat dibuat, dipelihara atau dihancurkan. \nTransport Layer : Berfungsi untuk memecah data ke dalam paket paket data serta memberikan nomer urut \nNetwork Layer : Mendefinisikan alamt IP, serta membuat header untuk paket paket data dan melakukan routing. \nData Link Layer : menentukan abgaimana bit bit data dikelompokan menjadi frame. serta dilakukan puola level kesalahan \nPhysical Layer : Menentukan media transmisi jaringan yang tepat.'),
(1, 1, 2, 'Jelaskan apa yang anda ketahui mengenai komputer model von neuuman!', 'komputer model von Neumann adalah komputer yang menggunakan pembacaan proses yang diberikan dari input sampai menjadi suatu output berupa penempatan ram dan rom dalam satu memori yang sama. Model yang digunakan oleh komputer saat ini berasal dari komputer yang  menggunakan model komputer Von Neumann. Komputer tersebut mempunyai komponen-komponen antara lain antara lain :\n1. Memory : tempat penyimpanan dan mengakses data\n2. Control Unit (CU) : tempat pengkontrolan dalam memproses data\n3. Aritmethic Logic Unit (ALU) : Bagian unit yang berfungsi untuk memproses data menggunakan logika dan aritmatika (perhitungan) yang telah disetting atau diberikan sebelumnya.\n4. I/O ports : tempat memberikan input dan pengeluaran ouput data');

-- --------------------------------------------------------

--
-- Table structure for table `tb_totalnilai`
--

CREATE TABLE `tb_totalnilai` (
  `idmk` int(11) NOT NULL,
  `idtest` int(11) NOT NULL,
  `mahasiswa` varchar(40) NOT NULL,
  `total_nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_totalnilai`
--

INSERT INTO `tb_totalnilai` (`idmk`, `idtest`, `mahasiswa`, `total_nilai`) VALUES
(1, 1, 'yussanti', 98),
(1, 1, 'pandu.wicaksono', 91),
(1, 1, 'yohanes.lomi', 97),
(1, 1, 'tomi', 96),
(1, 1, 'abdurohman', 93),
(1, 1, 'aldwin.akbar', 100),
(1, 1, 'alvin.tamin', 100),
(1, 1, 'dito.augusta', 94),
(1, 1, 'ilham.muharma', 97),
(1, 1, 'randy.sanjaya', 87),
(1, 1, 'Budi', 92),
(1, 1, 'harist.refian', 96),
(1, 1, 'fransiska.dyah', 93),
(1, 1, 'Andira', 93),
(1, 1, 'Mahasena', 93),
(1, 1, 'ilma.dewayani', 99),
(1, 1, 'Ivan', 96),
(1, 1, 'Suci', 50);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(40) NOT NULL,
  `npm` int(11) NOT NULL,
  `major` varchar(40) NOT NULL,
  `level` varchar(20) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `email`, `password`, `name`, `npm`, `major`, `level`, `img`) VALUES
('abdurohman', 'abdurohman@ui.ac.id', 'abdurohman', 'Abdurohman', 1388282828, 'computer engineering', 'Mahasiswa', ''),
('admin', 'administrator@gmail.com', 'admin', 'Administrator', 129282882, 'computer engineering', 'Administrator', ''),
('admin4', 'admin4@gmail.com', 'admin4', 'admin4', 2147483647, 'computer engineering', 'Administrator', ''),
('aldwin.akbar', 'aldwin.akbar@ui.ac.id', 'aldwinakbar', 'Aldwin Akbar', 139727272, 'computer engineering', 'Mahasiswa', ''),
('alvin.tamin', 'alvin.tamin@ui.ac.id', 'alvintamin', 'Alvin Tamin', 1392272772, 'computer engineering', 'Mahasiswa', ''),
('Andira', 'andira.rozawati@ui.ac.id', 'andira', 'Andira Rozawati', 1307278292, 'computer engineering', 'Mahasiswa', ''),
('Budi', 'budi.selamet@ui.ac.id', 'budi', 'Budi Selamet', 1309282722, 'computer engineering', 'Mahasiswa', ''),
('dito.augusta', 'dito.augusta@ui.ac.id', 'ditoaugusta', 'Dito Augusta', 1382727222, 'computer engineering', 'Mahasiswa', ''),
('dosen', 'dosen', 'dosen', 'Dosen', 1282727722, 'computer engineering', 'Dosen', ''),
('dosen2', 'dosen2@gmail.com', 'dosen2', 'dosen2', 2147483647, 'computer engineering', 'Dosen', ''),
('dosen3', 'dosen3@gmail.com', 'dosen3', 'dosen3', 2147483647, 'computer engineering', 'Dosen', ''),
('dosen5', 'dosen5@gmail.com', 'dosen5', 'dosen5', 2147483647, 'computer engineering', 'Dosen', ''),
('fransiska.dyah', 'fransiska.dyah@ui.ac.id', 'fransiska', 'Fransiska Dyah', 1392828282, 'computer engineering', 'Mahasiswa', ''),
('harist.refian', 'harist.refian@ui.ac.id', 'haristrefian', 'Harist Refian', 1302828282, 'computer engineering', 'Mahasiswa', ''),
('ilham.muharma', 'ilham.muharma@ui.ac.id', 'ilhammuharma', 'Ilham Muharma', 1397272722, 'computer engineering', 'Mahasiswa', ''),
('ilma.dewayani', 'ilma.dewayani@gmail.com', 'ilma.dewayani', 'ilma dewayani', 2147483647, 'computer engineering', 'Mahasiswa', ''),
('ilmudetil', 'ilmudetil@ui.ac.id', 'ilmudetil', 'ilmu detil', 138920292, 'computer engineering', 'Administrator', ''),
('Ivan', 'ivan.raditya@ui.ac.id', 'ivan', 'Ivan Raditya', 1309282827, 'computer engineering', 'Mahasiswa', ''),
('Mahasena', 'mahasena.alfafa@ui.ac.id', 'mahasena', 'Mahasena Alfafa', 1392727282, 'computer engineering', 'Mahasiswa', ''),
('mahasiswa', 'administrator@gmail.com', 'mahasiswa', 'Mahasiswa', 129282882, 'computer engineering', 'Mahasiswa', ''),
('mahasiswa2', 'mahasiswa2@gmail.com', 'mahasiswa2', 'Mahasiswa', 1282727722, 'computer engineering', 'Mahasiswa', ''),
('pandu.wicaksono', 'pandu.wicaksono@ui.ac.id', 'panduwicaksono', 'Pandu Wicaksono', 1306368442, 'computer engineering', 'Mahasiswa', ''),
('putri.ratna', 'putri.ratna@ui.ac.id', 'putriratna', 'Putri Ratna Agung', 219829202, 'computer engineering', 'Dosen', ''),
('randy.sanjaya', 'randy.sanjaya@ui.ac.id', 'randy', 'Randy Sanjaya', 1392727272, 'computer engineering', 'Mahasiswa', ''),
('sasa', 'sasa@gmail.com', 'sasa', 'sasa', 12033232, 'comp', 'Mahasiswa', ''),
('serli.sessanti', 'serli.sessanti@ui.ac.id', 'serli', 'Serli Sessanti', 1302929822, 'computer engineering', 'Mahasiswa', ''),
('Suci', 'suci.salimah@ui.ac.id', 'suci', 'Suci Salimah Giani', 1239828282, 'computer engineering', 'Mahasiswa', ''),
('taufiq', 'taufiq.bahruddin@ui.ac.id', 'taufiq', 'Taufiq Bahruddin', 1397272727, 'computer engineering', 'Mahasiswa', ''),
('tomi', 'tomi@gmail.com', 'tomi', 'tomi', 1306368441, 'computer engineering', 'Mahasiswa', ''),
('untuk.demo1', 'untuk.demo1@gmail.com', 'untuk.demo1', 'untuk demo1', 1302727727, 'computer engineering', 'Mahasiswa', ''),
('untuk.demo2', 'untuk.demo2@gmail.com', 'untuk.demo2', 'untuk demo2', 1302828822, 'computer engineering', 'Mahasiswa', ''),
('yohanes.lomi', 'yohanes.lomi@gmail.com', 'yohaneslomi', 'yohanes lomi', 1302882828, 'computer engineering', 'Mahasiswa', ''),
('yussanti', 'yussantinf@gmail.com', 'yussanti', 'yussanti nur fajrina', 1306368450, 'computer engineering', 'Mahasiswa', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_courses`
--
ALTER TABLE `tb_courses`
  ADD PRIMARY KEY (`idmk`);

--
-- Indexes for table `tb_exam`
--
ALTER TABLE `tb_exam`
  ADD PRIMARY KEY (`idtest`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`idjawaban`);

--
-- Indexes for table `tb_soaljawab`
--
ALTER TABLE `tb_soaljawab`
  ADD PRIMARY KEY (`idsoal`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_courses`
--
ALTER TABLE `tb_courses`
  MODIFY `idmk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_exam`
--
ALTER TABLE `tb_exam`
  MODIFY `idtest` int(20) NOT NULL AUTO_INCREMENT COMMENT 'kode dari ujian', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `idjawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tb_soaljawab`
--
ALTER TABLE `tb_soaljawab`
  MODIFY `idsoal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
