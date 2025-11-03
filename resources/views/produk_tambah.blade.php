<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #fcfaf8;
        }

        .form-control, .form-select {
            background-color: #fffee9; /* warna biru muda */
            border: 1px solid #ffe1b3;
            transition: 0.3s;
        }

        .form-control:focus, .form-select:focus {
            background-color: #fff0d6;
            border-color: #ffcf66;
            box-shadow: 0 0 0 0.2rem rgba(196, 178, 145, 0.81);
        }

        .card {
            border-radius: 12px;
        }

        .btn-success {
            background-color: #6d8719ff;
            border-radius: 8px;
        }

        .btn-success:hover {
            background-color: #287315b3;
        }

        label {
            font-weight: 600;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="#">UTS Laravel</a>
        </div>
    </nav>

    <!-- Form Section -->
    <div class="container my-5">
        <h2 class="text-center fw-bold mb-4">Form Tambah Produk</h2>

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <form action="#" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Kode Produk</label>
                            <input type="text" name="kode_produk" class="form-control" placeholder="Masukkan kode produk">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" placeholder="Masukkan nama produk">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Jenis Produk</label>
                            <select name="jenis_produk" class="form-select">
                                <option selected disabled>Pilih Produk</option>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                                <option value="Elektronik">Elektronik</option>
                                <option value="Pakaian">Pakaian</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Harga</label>
                            <input type="number" name="harga" class="form-control" placeholder="Masukkan harga">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success px-5">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>