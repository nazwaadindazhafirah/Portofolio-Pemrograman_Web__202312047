<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f2f2f2;
            padding: 30px;
        }

        .container {
            width: 50%;
            margin: auto;
            background: #fff;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007BFF;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Form Tambah Produk</h2>
        <form action="proses_tambah.php" method="post">
            <label>Nama Produk:</label>
            <input type="text" name="nama_produk" required>

            <label>Harga:</label>
            <input type="number" name="harga" required>

            <label>Stok:</label>
            <input type="number" name="stok" required>

            <input type="submit" value="Simpan">
        </form>
        <a href="index.php">← Kembali ke Daftar Produk</a>
    </div>

</body>
</html>
