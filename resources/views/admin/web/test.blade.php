<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Lokasi Real-time</title>
    <!-- Sertakan CSS Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        /* Tentukan ukuran peta */
        #map {
            height: 500px;
            width: 100%;
        }
        /* Agar input form lebih teratur */
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <h1>Lokasi Pengguna dalam Form Input</h1>

    <!-- Form untuk menampilkan Latitude dan Longitude -->
    <div class="form-group">
        <label for="latitude">Latitude</label>
        <input type="text" id="latitude" class="form-control" readonly>
    </div>

    <div class="form-group">
        <label for="longitude">Longitude</label>
        <input type="text" id="longitude" class="form-control" readonly>
    </div>

    <!-- Peta Leaflet -->
    <div id="map"></div>

    <!-- Sertakan JS Leaflet -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        // Inisialisasi peta
        var map = L.map('map').setView([51.505, -0.09], 13); // Set posisi awal dan zoom level

        // Menambahkan tile layer (peta dasar dari OpenStreetMap)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Cek apakah geolocation tersedia di browser
        if (navigator.geolocation) {
            // Dapatkan posisi lokasi saat ini
            navigator.geolocation.watchPosition(function(position) {
                var lat = position.coords.latitude;  // Latitude
                var lon = position.coords.longitude; // Longitude

                // Update posisi peta ke koordinat lokasi pengguna
                map.setView(new L.LatLng(lat, lon), 13); // Atur posisi peta

                // Tambahkan marker di lokasi pengguna
                var marker = L.marker([lat, lon]).addTo(map);
                marker.bindPopup("Lokasi Saya: " + lat.toFixed(4) + ", " + lon.toFixed(4));

                // Update nilai input form dengan nilai latitude dan longitude
                document.getElementById("latitude").value = lat.toFixed(4);
                document.getElementById("longitude").value = lon.toFixed(4);
            }, function(error) {
                alert("Gagal mendapatkan lokasi: " + error.message);
            });
        } else {
            alert("Geolocation tidak didukung di browser ini.");
        }
    </script>

</body>
</html>
