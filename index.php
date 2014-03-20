<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>ICT Bisnis</title>

  <meta name="description" content="A jQuery library for modern HTML presentations">
  <meta name="author" content="Caleb Troughton">
  <meta name="viewport" content="width=1024, user-scalable=no">

  <!-- Core and extension CSS files -->
  <link rel="stylesheet" media="screen" href="core/deck.core.css">
  <link rel="stylesheet" media="screen" href="extensions/goto/deck.goto.css">
  <link rel="stylesheet" media="screen" href="extensions/menu/deck.menu.css">
  <link rel="stylesheet" media="screen" href="extensions/navigation/deck.navigation.css">
  <link rel="stylesheet" media="screen" href="extensions/status/deck.status.css">
  <link rel="stylesheet" media="screen" href="extensions/scale/deck.scale.css">

  <!-- Style theme. More available in /themes/style/ or create your own. -->
  <link rel="stylesheet" media="screen" href="themes/style/web-2.0.css">

  <!-- Transition theme. More available in /themes/transition/ or create your own. -->
  <link rel="stylesheet" media="screen" href="themes/transition/horizontal-slide.css">

  <!-- Basic black and white print styles -->
  <link rel="stylesheet" media="print" href="core/print.css">

  <script src="modernizr.custom.js"></script>
</head>

<body>
  <div class="deck-container">

    <!-- Begin slides -->
    <section class="slide" id="title-slide">
      <h1>Internet dan Bisnis IF-37-04</h1>
    </section>

    <section class="slide" id="how-to-overview">
      <h2>Nama Kelompok :</h2>
      <ol>
        <li>
          <h3>Muh Agung Adi Saputra (1103134357)</h3>
        </li>
        <li>
          <h3>Luke Manuel Daely (1103134355)</h3>
        </li>
        <li>
          <h3>Gerry Noor Maulana (1103130084)</h3>
        </li>
		<li>
          <h3>Andi Ahmad Irfa (1103134358)</h3>
        </li>
		<li>
          <h3>Abdurahman Ridwan (1103130262)</h3>
        </li>
		<li>
          <h3>Galih Citta S Prasetya (1103134361)</h3>
        </li>
      </ol>
    </section>
	
	<section class="slide" id="elements-images">
      <h2>Arsitektur SSH</h2>
      <img src="images/ssh.png" alt="Kitties">
	  <p>Arsitektur pada SSH :</p>
      <pre>
		Lapisan Transportasi.
		Lapisan Otentikasi Pengguna.
		Lapisan Koneksi.
		SSHFP DNS Record. 
	  </pre>
    </section>

    <section class="slide" id="quick-start">
      <h2>Cara Kerja SSH</h2>
      <p>
		SSH menggunakan kriptografi kunci publik untuk mengotentikasi komputer remote dan biarkan komputer remote untuk mengotentikasi pengguna, jika perlu. SSH biasanya digunakan untuk login ke mesin remote dan mengeksekusi berbagai perintah, tetapi juga mendukung tunneling, forwarding TCP port dan X11 connections; itu dapat mentransfer file menggunakan terkait SFTP atau SCP protocols. SSH menggunakan klien-server model. Yang standar TCP port 22 telah ditetapkan untuk menghubungi server SSH. 
		Sebuah klien program SSH ini biasanya digunakan untuk membangun koneksi ke SSH daemon untuk dapat diremote
	  </p>
    </section>

    <section class="slide" id="elements-images">
      <h2>Arsitektur LDAP</h2>
      <img src="images/ldap.gif" alt="Kitties">
	  <p>Arsitektur pada LDAP :</p>
      <pre>
		Lapisan Pengguna.
		Lapisan Server.
		Lapisan TCP/IP.
		Internet Directory. 
	  </pre>
    </section>

    <section class="slide" id="quick-start">
      <h2>Cara Kerja LDAP</h2>
      <p>
		Lightweight Directory Access Protocol atau LDAP adalah TCP / IP berbasis protokol internet yang digunakan oleh program email dan beberapa aplikasi lain untuk mencari dan mengambil informasi dari sebuah direktori disimpan pada sebuah server. Direktori adalah repositori menyimpan data potongan identik dari informasi dalam urutan hirarkis dan logis.
Sebagai contoh, sebuah direktori telepon yang memiliki berbagai nama pelanggan diindeks secara alfabetis dengan nomor telepon dan alamat yang terkait adalah contoh dari sebuah direktori. Struktur semacam ini dengan mudah dapat diimplementasikan menggunakan LDAP. Namun, protokol ini tidak terbatas hanya untuk mengakses informasi kontak tentang orang-orang. Hal ini dapat menemukan sumber daya berbagi pada jaringan seperti printer dan scanner, dan memungkinkan orang untuk menggunakan sumber daya dan layanan bersama lainnya menggunakan password tunggal.

	  </p>
    </section>
	
	<section class="slide" id="elements-images">
      <h2>Arsitektur DHCP</h2>
      <img src="images/dhcp.gif" alt="Kitties">
	  <p>Arsitektur pada DHCP :</p>
      <pre>
		Lapisan Pengguna/Client.
		Lapisan Server. 
	  </pre>
    </section>
	
	<section class="slide" id="quick-start">
      <h2>Cara Kerja DHCP</h2>
      <p>
		DHCP menggunakan 4 tahapan proses untuk memberikan konfigurasi nomor IP. (Jika Client memiliki NIC lebih dari satu dan perlu no IP lebih dari satu maka proses DHCP dijalankan untuk setiap adaptor secara sendiri-sendiri),yaitu :
	 </p>
	  <ul>
        <li class="slide" id="extensions-goto">
          <strong>IP Least Request</strong>:Client meminta nomor IP ke server (Broadcast mencari DHCP server).
        </li>

        <li class="slide" id="extensions-menu">
          <strong>IP Least Offer</strong>:DHCP server (bisa satu atau lebih server jika memang ada 2 atau lebih DHCP server) yang mempunyai nomor IP, memberikan penawaran ke client
tersebut.
        </li>

        <li class="slide" id="extensions-navigation">
          <strong>IP Lease Selection</strong>:Client memilih penawaran DHCP Server yang pertama diterima dan kembali melakukan broadcast dengan message menyetujui peminjaman tersebut kepada DHCP Server
        </li>
		
		<li class="slide" id="extensions-navigation">
          <strong>IP Lease Acknowledge</strong>:DHCP Server yang menang memberikan jawaban atas pesan tersebut berupa konfirmasi nomor IP dan informasi lain kepada Client dengan sebuah ACKnowledgment. Kemudian client melakukan inisialisasi dengan mengikat (binding) nomor IP tersebut dan client dapat bekerja pada jaringan tersebut. Sedangkan DHCP Server yang lain menarik tawarannya kembali.
        </li>
	</ul>	
    </section>
	
	<section class="slide" id="elements-images">
      <h2>Arsitektur HTTP</h2>
      <img src="images/http.gif" alt="Kitties">
	  <p>Arsitektur pada HTTP :</p>
      <pre>
		HTTP.
		HTTPS. 
		Tunnel.
	  </pre>
    </section>
	
	<section class="slide" id="quick-start">
      <h2>Cara Kerja HTTP</h2>
      <p>
		Bila kita mengklik link hypertext atau kita mengetikkan suatu alamat atau URL pada internet browser, maka Anda sedang mentransfer URL ke browser, dan Dari URL ini browser Anda tahu server mana yang akan dihubungi dan file apa yang diminta kemudian  web browser akan mengirimkan perintah HTTP ke web server. Web server selanjutnya akan menerima perintah ini dan melakukan aktivitas sesuai dengan perintah yang diminta oleh web browser. Hasil aktivitas tadi akan dikirimkan kembali ke web browser untuk ditampilkan kepada kita.
	  </p>
    </section>

	
	<section class="slide" id="elements-images">
      <h2>Arsitektur NTP</h2>
      <img src="images/ntp.gif" alt="Kitties">
	  <p>Arsitektur pada NTP :</p>
      <pre>
		Flat peer structure.
		Hierarchical structure. 
		Star structure.
	  </pre>
    </section>
	
	<section class="slide" id="quick-start">
      <h2>Cara Kerja NTP</h2>
      <p>
		NTP bekerja dengan menggunakan algoritma Marzullo dengan menggunakan referensi skala waktu UTC. Sebuah jaringan NTP biasanya mendapatkan perhitungan waktunya dari sumber waktu yang terpercaya seperti misalnya radio clock atau atomic clock yang terhubung dengan sebuah time server. Kemudian jaringan NTP ini akan mendistribusikan perhitungan waktu akurat ini ke dalam jaringan lain. Sebuah NTP client akan melakukan sinkronisasi dengan NTP server dalam sebuah interval pooling yang biasanya berkisar antara 64 sampai 1024 detik. Namun, waktu sinkronisasi ini bisa berubah secara dramatis bergantung kepada kondisi dan keadaan jaringan yang akan digunakannya. NTP menggunakan sistem hirarki dalam bekerja dan melakukan sinkronisasinya. Sistem hirarki ini menggunakan istilah Clock stratum atau strata untuk menggambarkan tingkatan-tingkatannya. Di mana clock strata tingkat pertama merupakan perangkat komputer yang melakukan sinkronisasi dengan penghitung waktu eksternal seperti misalnya GPS clock, atomic clock atau radio clock yang sangat akurat. Perangkat berstatus stratum 2 merupakan perangkat yang dikirimi perhitungan waktu oleh stratum 1 secara langsung dengan menggunakan protokol NTP. Begitu seterusnya sistem hirarki berjalan. Sebuah perangkat NTP akan secara otomatis memilih perangkat dengan nilai stratum yang paling kecil untuk mendapatkan update pencatatan waktunya. Dengan demikian, maka tidak perlu melakukan mekanisme pemilihan rumit untuk mendapatkan tree dari NTP yang teratur dalam sebuah jaringan besar.
	  </p>
    </section>
	
	<section class="slide" id="elements-images">
      <h2>Arsitektur Radius</h2>
      <img src="images/radius.gif" alt="Kitties">
	  <p>Arsitektur pada Radius :</p>
      <pre>
		Client(Local Server).
		Radius Server. 
		Application API.
	  </pre>
    </section>

	<section class="slide" id="quick-start">
      <h2>Cara Kerja Radius</h2>
      <p>
		Ketika RADIUS bekerja,server akan menerima Request Akses dari server NAS.kemudian RADIUS akan mencari data yang bersangkutan pada database,jika username tidak ditemukan dengan segera Radius akan mengirim balik Status Tolak(Reject).Pada Radius proses authentikasi dan autorasi digabungkan.
	  </p>
    </section>
	
	<section class="slide" id="elements-images">
      <h2>Arsitektur SOAP</h2>
      <img src="images/soap.gif" alt="Kitties">
	  <p>Arsitektur pada SOAP :</p>
      <pre>
		Envelope.
		Header. 
		Block.
		Message.
	  </pre>
    </section>
	
	<section class="slide" id="quick-start">
      <h2>Cara Kerja SOAP</h2>
      <p>
		SOAP menspesifikan secara jelas bagaimana cara untuk meng-encode header HTTP dan file XML sehingga program pada suatu komputer dapat memanggil program pada pada komputer lain dan mengirimkan informasi, dan bagaimana program yang dipanggil memberikan tanggapan.
SOAP adalah protokol ringan yang ditujukan untuk pertukaran informasi struktur pada lingkup desentralisasi, dan terdistribusi. SOAP menggunakan teknologi XML utuk mendefinisikan rangka kerja pemesanan terekstrensi di mana menyediakan konstruksi pesan yang dapat dipertukarkan pada protokol berbeda. Rangka kerja dirancang bebas dari model pemrograman dan spesifikasi implementasi semantik.
	  </p>
    </section>
	
	<section class="slide" id="elements-images">
      <h2>Arsitektur Web Service</h2>
      <img src="images/service.gif" alt="Kitties">
	  <p>Arsitektur pada Web Service :</p>
      <pre>
		SOAP(Simple and Object Access Protocol ).
		WSDL( Web Services Description Language ). 
		UDDI(Universal Description Discovery and Integration ).
	  </pre>
    </section>
	
	<section class="slide" id="quick-start">
      <h2>Cara Kerja Web Service</h2>
      <p>
			Arsitektur Website adalah suatu pendekatan terhadap desain dan perencanaan situs yang, seperti arsitektur itu sendiri, melibatkan teknis, kriteria estetis dan fungsional. Seperti dalam arsitektur tradisional, fokusnya adalah benar pada pengguna dan kebutuhan pengguna. Hal ini memerlukan perhatian khusus pada konten web, rencana bisnis, kegunaan, desain interaksi, informasi dan desain arsitektur web. Untuk optimasi mesin pencari yang efektif perlu memiliki apresiasi tentang bagaimana sebuah situs Web terkait dengan World Wide Web.
Sejak web perencanaan isi, desain dan manajemen datang dalam lingkup metode desain, Vitruvian tradisional tujuan komoditas, keteguhan dan kesenangan dapat memandu arsitektur situs, seperti yang mereka lakukan arsitektur fisik dan disiplin desain lainnya. Website arsitektur akan datang dalam ruang lingkup estetika dan teori kritis dan kecenderungan ini dapat mempercepat dengan munculnya web semantik dan web 2.0. Kedua ide menekankan aspek struktur informasi. Strukturalisme adalah sebuah pendekatan untuk pengetahuan yang telah dipengaruhi sejumlah disiplin akademis termasuk estetika, teori kritis dan postmodernisme. Web 2.0, karena melibatkan user-generated content, mengarahkan perhatian arsitek website untuk aspek-aspek struktur informasi.

	 </p>
    </section>
	
	<section class="slide" id="elements-images">
      <h2>Arsitektur DNS</h2>
      <img src="images/dns.png" alt="Kitties">
	  <p>Arsitektur pada DNS :</p>
      <pre>
			Server.
			Local Host.
			Root.
	  </pre>
    </section>
	
	<section class="slide" id="quick-start">
      <h2>Cara Kerja DNS</h2>
      <p>
		Fungsi dari DNS adalah menerjemahkan nama komputer ke IP address (memetakan). Client DNS disebut dengan resolvers dan DNS server disebut dengan name servers. Resolvers atau client mengirimkan permintaan ke name server berupa queries. Name server akan memproses dengan cara mencek ke local database DNS, menghubungi name server lainnya atau akan mengirimkan message failure jika ternyata permintaan dari client tidak ditemukan.

Proses tersebut disebut dengan Forward Lookup Query, yaitu permintaan dari client dengan cara memetakan nama komputer (host) ke IP address.
	 </p>
    </section>

    <section class="slide" id="digging-deeper">
      <h1>Terima Kasih </h1>
    </section>

    <!-- deck.navigation snippet -->
    <div aria-role="navigation">
      <a href="#" class="deck-prev-link" title="Previous">&#8592;</a>
      <a href="#" class="deck-next-link" title="Next">&#8594;</a>
    </div>

    <!-- deck.status snippet -->
    <p class="deck-status" aria-role="status">
      <span class="deck-status-current"></span>
     
      <span class="deck-status-total"></span>
    </p>

    <!-- deck.goto snippet -->
    <form action="." method="get" class="goto-form">
      <label for="goto-slide">Go to slide:</label>
      <input type="text" name="slidenum" id="goto-slide" list="goto-datalist">
      <datalist id="goto-datalist"></datalist>
      <input type="submit" value="Go">
    </form>
  </div>

<script src="jquery.min.js"></script>

<!-- Deck Core and extensions -->
<script src="core/deck.core.js"></script>
<script src="extensions/menu/deck.menu.js"></script>
<script src="extensions/goto/deck.goto.js"></script>
<script src="extensions/status/deck.status.js"></script>
<script src="extensions/navigation/deck.navigation.js"></script>
<script src="extensions/scale/deck.scale.js"></script>

<!-- Initialize the deck -->
<script>
$(function() {
  $.deck('.slide');
});
</script>

</body>
</html>
