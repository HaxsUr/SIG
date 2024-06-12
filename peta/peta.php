<html>
    <?php 
   include '../koneksi.php';
   $data_komoditas = [];
   $sql = "SELECT * FROM tanda";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $data_komoditas[] = $row;
       }
   }?>
	<head>
		<title> WebGIS GeoJSON Kalimantan Selatan </title>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
		<link rel="shortcut icon" href="assets/image/WKalSelLogo.png" type="image/x-icon">
		<link rel='stylesheet' href='../halaman.css'>


		<style type="text/css">
			#map { height: 500px;
			}
		</style>
		</head>

	<body>
	<div class='container'>
        <div class='sidebar'>
            <div class='header'>
                    <div class='list-item'>
                            <img src='../assets/iconUtama.png' alt='' class='iconUtama'>
                            <span class='description-header'>WEB GIS</span>
                    </div>
            </div>
            
            <div class='main'>
                <div class='list-item'>
                    <a href='../halaman.php'>
                        <img src='../assets/iconBeranda.png' alt='' class='icon'>
                        <span class='description'>BERANDA</span>
                    </a>
                </div>
                <div class='list-item'>
                    <a href='#'>
                        <img src='../assets/iconUser.png' alt='' class='icon'>
                        <span class='description'>PENGGUNA</span>
                    </a>
                </div>
                
                <div class='list-item'>
                    <a href='#'>
                        <img src='../assets/iconKab.png' alt='' class='icon'>
                        <span class='description'>KABUPATEN</span>
                    </a>
                </div>
                <div class='list-item'>
                    <a href='../peta/peta.php'>
                        <img src='../assets/iconPeta.png' alt='' class='icon'>
                        <span class='description'>PETA</span>
                    </a>
                </div>
                <div class='list-item'>
                    <a href='#'>
                        <img src='../assets/iconTanda.png' alt='' class='icon'>
                        <span class='description'>TANDA</span>
                    </a>
                </div>
                <div class='list-item'>
                    <a href='#'>
                        <img src='../assets/iconKantor.png' alt='' class='icon'>
                        <span class='description'>KANTOR</span>
                    </a>
                </div>
                <div class='list-item'>
                    <a href='../report.php'>
                        <img src='../assets/iconReport.png' alt='' class='icon'>
                        <span class='description'>REPORT</span>
                    </a>
                </div>
                <div class='list-item'>
                    <a href='../logout.php'>
                        <img src='../assets/iconLogout.png' alt='' class='icon'>
                        <span class='description'>LOGOUT</span>
                    </a>
                </div>
            </div>
        </div>

        <div class='main-content'>
            <div id='menu-button'>
                <input type='checkbox' id='menu-checkbox'>
                <label for='menu-checkbox' id='menu-label'>
                    <div id='garis-3'></div>
                </label>
            </div> <br>
			<table class="map"><tr><td width="1800"><div id="map"></div></td></tr></table>
        </div>
    </div>
    <script src='../script2.js'></script>

		

	</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>

	<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
	<script src="assets/js/leaflet.ajax.js"> </script>
	<script src="assets/js/leaflet-panel-layers/src/leaflet-panel-layers.js"></script>
	<script src="assets/js/leaflet.ajax.js"></script>
	<script src="assets/js/leaflet-easyPrint-gh-pages/dist/bundle.js"></script>

	<script>
    var mymap = L.map('map').setView ([-2.965,115.356], 7);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(mymap);

// Tambahkan GeoJSON dari file eksternal
fetch('assets/geojson/63.04 Kabupaten Barito Kuala - Marabahan.geojson')
    .then(response => response.json())
    .then(data => {
        L.geoJSON(data).addTo(mymap);
    });

    // Data dari PHP
    var dataKomoditas = <?php echo json_encode($data_komoditas); ?>;


    // Fungsi untuk menentukan warna marker
    function getColor(jumlah) {
        return jumlah > 100 ? 'red' :
               jumlah > 50  ? 'orange' :
               jumlah > 20  ? 'yellow' :
                              'green';
    }        

    // Tambahkan marker ke peta
    dataKomoditas.forEach(function(komoditas) {
        var marker = L.marker([komoditas.latitude, komoditas.longitude]).addTo(mymap);
        marker.bindPopup("<b>Nama Tempat:</b> " + komoditas.nama + "<br><b>Jenis:</b> " + komoditas.jenis + "<br><b>Alamat:</b> " + komoditas.alamat);
    });

</script>

</html>
