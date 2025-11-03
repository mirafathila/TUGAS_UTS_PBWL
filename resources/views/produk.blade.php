<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #fcfbf8f7;
        }

        .form-control, .form-select {
            background-color: #ffffe9; /* warna biru muda */
            border: 1px solid #fff7b3;
            transition: 0.3s;
        }

        .form-control:focus, .form-select:focus {
            background-color: #ffead6;
            border-color: #ffc466;
            box-shadow: 0 0 0 0.2rem rgba(255, 204, 102, 0.25);
            border-color: #ffba66;
            box-shadow: 0 0 0 0.2rem rgba(102,179,255,0.25);
        }

        .card {