<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Desa {{ $desa->nama_desa }} - {{ $tahun }}</title>
    <style>
        @page {
            margin: 0;
        }
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
    <!-- Sampul -->
    <div class="sampul-section">
        @include('pdf.sampul-pdf')
    </div>

    <div class="page-break"></div>
    @include('pdf.kata-pengantar')

    <div class="page-break"></div>
    @include('pdf.daftar-isi')

    <div class="page-break"></div>
    @include('pdf.bab1-profile')
    
    <!-- Tambahkan halaman lain sesuai kebutuhan -->
</body>
</html>