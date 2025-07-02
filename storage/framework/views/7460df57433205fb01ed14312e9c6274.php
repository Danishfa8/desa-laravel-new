<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kata Pengantar</title>
    <style>
        @page {
            margin: 60px;
        }
        .scoped-kata-pengantar {
            font-family: sans-serif;
            font-size: 14px;
            color: #000;
            line-height: 1.6;
        }
        .scoped-kata-pengantar h1 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 30px;
        }
        .scoped-kata-pengantar .content {
            text-align: justify;
        }
        .scoped-kata-pengantar .content p {
            color: #000;
            margin-bottom: 15px;
        }
        .scoped-kata-pengantar .signature {
            margin-top: 60px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="scoped-kata-pengantar">
        <h1>Kata Pengantar</h1>
        <div class="content">
            <p>Puji syukur kami panjatkan ke hadirat Tuhan Yang Maha Esa atas tersusunnya Buku Desa ini. Buku ini disusun sebagai upaya pendokumentasian data dan informasi desa yang akurat dan relevan, yang diharapkan dapat menjadi rujukan dalam perencanaan pembangunan desa secara berkelanjutan.</p>

            <p>Buku ini memuat informasi penting terkait kondisi geografis, demografi, serta potensi dan permasalahan yang ada di desa. Diharapkan dapat menjadi dasar pengambilan kebijakan yang tepat sasaran di masa mendatang.</p>

            <p>Ucapan terima kasih kami sampaikan kepada semua pihak yang telah berkontribusi dalam penyusunan buku ini, baik dari unsur pemerintah desa, kecamatan, hingga kabupaten.</p>

            <p>Semoga buku ini memberikan manfaat dan menjadi inspirasi bagi semua pihak dalam membangun desa yang lebih baik.</p>
        </div>

        <div class="signature">
            <p>Brebes, <?php echo e(now()->format('d F Y')); ?></p>
            <?php if(isset($desa)): ?>
                <p><strong>Kepala Desa <?php echo e(Str::title(Str::lower($desa->nama_desa))); ?></strong></p>
            <?php endif; ?>
            <br><br>
            <p>(_____________________)</p>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\Administrator\Documents\project\desa-laravel-new\resources\views/pdf/kata-pengantar.blade.php ENDPATH**/ ?>