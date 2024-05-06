<!DOCTYPE html>
<html>

<head>
    <title>Preferensi Makanan</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to bottom right, #ff9933, #ffcc66); /* Gradasi warna yang lebih menarik */
            font-family: Arial, sans-serif; /* Memperbarui font */
        }

        .form-container {
            text-align: center;
            margin-top: 50px;
        }

        .food-image {
            width: 100px;
            margin: 10px;
            cursor: pointer;
            position: relative;
            transition: transform 0.3s ease; /* Efek hover */
        }

        .food-image:hover {
            transform: scale(1.1); /* Memperbesar gambar saat dihover */
        }

        .food-image.selected {
            border: 2px solid green;
        }

        .food-category {
            font-size: 12px;
            position: absolute;
            bottom: -20px;
            left: 0;
            right: 0;
        }

        .food-container {
            display: inline-block;
            position: relative;
            margin: 0 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
            border-radius: 10px; /* Memperhalus sudut */
            overflow: hidden; /* Menghindari overflow */
        }

        .header {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
            z-index: 1; /* Membuat header di atas konten */
        }

        .logo {
            width: 70px; /* Menyesuaikan ukuran logo */
            margin-right: 10px;
            transition: transform 0.3s ease; /* Efek hover */
        }

        .logo:hover {
            transform: rotate(360deg); /* Memutar logo saat dihover */
        }

        .logo-text {
            font-size: 32px;
            font-weight: bold;
            color: white;
            margin: 0;
        }

        button {
            background-color: #4CAF50; /* Warna hijau yang mencolok */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease; /* Animasi saat dihover */
        }

        button:hover {
            background-color: #45a049; /* Warna hijau yang lebih gelap saat dihover */
        }
        .food-description {
            font-size: 14px;
            margin-top: 5px;
            color: #555; /* Warna abu-abu untuk deskripsi */
        }
    </style>
</head>

<body>

    @if(session('success'))
    <div>{{ session('success') }}</div>
    @endif

    <div class="header">
        <img src="/images/logo.png" alt="Cookpad Logo" class="logo">
        <h1 class="logo-text">Dapurku</h1>
    </div>

    <div class="form-container">
        <h2>Pilih Makanan Favorit Anda</h2>

        @if(session('success'))
        <div>{{ session('success') }}</div>
        @endif

        <form method="POST" action="/preferences/add">
            @csrf

            <div class="food-container">
                <label for="food_indonesia">
                    <img class="food-image" src="/images/nasi_goreng.png" alt="Indonesia" onclick="toggleSelection(this)">
                    <span class="food-category">Makanan Indonesia</span>
                    <input type="checkbox" id="food_indonesia" name="indonesian_food_id" value="True" hidden>
                </label>
                <p class="food-description">Makanan indonesia</p>
            </div>

            <div class="food-container">
                <label for="food_italian">
                    <img class="food-image" src="/images/pizza.png" alt="Italia" onclick="toggleSelection(this)">
                    <span class="food-category">Makanan Italia</span>
                    <input type="checkbox" id="food_italian" name="italian_food_id" value="True" hidden>
                </label>
                <p class="food-description">Makanan Italia</p>
            </div>

            <div class="food-container">
                <label for="food_japanese">
                    <img class="food-image" src="/images/sushi.png" alt="Jepang" onclick="toggleSelection(this)">
                    <span class="food-category">Makanan Jepang</span>
                    <input type="checkbox" id="food_japanese" name="japanese_food_id" value="True" hidden>
                </label>
                <p class="food-description">Makanan Jepang</p>
            </div>

            <div class="food-container">
                <label for="food_western">
                    <img class="food-image" src="/images/burger.png" alt="Western" onclick="toggleSelection(this)">
                    <span class="food-category">Makanan Western</span>
                    <input type="checkbox" id="food_western" name="western_food_id" value="Truer" hidden>
                </label>
                <p class="food-description">Makanan Barat</p>
            </div>

            <br><br>
            <button type="submit">Simpan</button>
        </form>
    </div>


    <script>
        // Menangkap form submission
        document.querySelector('form').addEventListener('submit', function(event) {
            // Menghentikan perilaku default dari form submission
            event.preventDefault();

            // Menampilkan pesan "Data berhasil disimpan"
            alert("Data berhasil disimpan");

            // Mengirimkan form setelah menampilkan pesan (opsional)
            this.submit();
        });
    </script>

    <script>
        var maxSelection = 3; // Batasan jumlah makanan yang dapat dipilih
        var selectedCount = 0; // Variabel untuk melacak jumlah makanan yang dipilih

        function toggleSelection(image) {
            if (selectedCount >= maxSelection && !image.classList.contains('selected')) {
                alert("Anda sudah memilih maksimal 3 makanan.");
            return;
        }

        image.classList.toggle('selected');

        var checkbox = image.nextElementSibling;
        checkbox.checked = !checkbox.checked;

        // Update jumlah makanan yang dipilih
        if (image.classList.contains('selected')) {
            selectedCount++;
        } else {
            selectedCount--;
        }
    }
</script>


</body>
</html>
