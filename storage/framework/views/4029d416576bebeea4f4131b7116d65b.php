<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Desa <?php echo e($desa->nama_desa); ?> - <?php echo e($tahun); ?></title>
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
        <?php echo $__env->make('pdf.sampul-pdf', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>

    <div class="page-break"></div>
    <?php echo $__env->make('pdf.kata-pengantar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="page-break"></div>
    <?php echo $__env->make('pdf.daftar-isi', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="page-break"></div>
    <?php echo $__env->make('pdf.bab1-profile', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
    <!-- Tambahkan halaman lain sesuai kebutuhan -->
</body>
</html><?php /**PATH C:\Users\Administrator\Documents\project\desa-laravel-new\resources\views/pdf/buku-master.blade.php ENDPATH**/ ?>