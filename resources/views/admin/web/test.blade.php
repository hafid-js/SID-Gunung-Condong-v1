<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="imageInput">Pilih Gambar:</label>
    <input type="file" id="imageInput" name="image" accept="image/*">
    <div id="filePath" style="margin-top: 10px;"></div> <!-- Tempat untuk menampilkan path -->
    <div id="imagePreview" style="margin-top: 10px; max-width: 200px; height: auto;">
        <img id="previewImage" src="#" alt="Image preview" style="display:none; max-width: 100%; height: auto;">
    </div>
    <button type="submit">Upload Image</button>
</form>

<script>
    // JavaScript untuk menampilkan path file dan preview gambar
    document.getElementById('imageInput').addEventListener('change', function(event) {
        var file = event.target.files[0];
        if (file) {
            // Menampilkan path file
            var filePath = document.getElementById('filePath');
            filePath.textContent = 'Path file: ' + file.name; // Hanya menampilkan nama file

            var reader = new FileReader();
            reader.onload = function(e) {
                var img = document.createElement('img');
                img.src = e.target.result;

                // Menunggu gambar dimuat dan mengubah ukuran gambar
                img.onload = function() {
                    var previewImage = document.getElementById('previewImage');
                    previewImage.src = img.src;
                    previewImage.style.display = 'block';
                };
            };
            reader.readAsDataURL(file);
        }
    });
</script>
