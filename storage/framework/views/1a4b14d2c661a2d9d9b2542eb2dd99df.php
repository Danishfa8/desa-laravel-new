<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sampul Buku Desa</title>
    <style>
        .sampul-body {
            margin: 0;
            padding: 0;
            color: white;
            font-family: sans-serif;
        }

        .sampul-wrapper {
            position: relative;
            width: 100%;
            height: 100vh;
        }

        .sampul-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .sampul-bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .sampul-content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            padding: 60px 40px;
            box-sizing: border-box;
        }

        .sampul-logo-box {
            width: 40px;
            height: 40px;
            background-color: white;
            border-radius: 8px;
            padding: 4px;
        }

        .sampul-logo-img {
            width: 40px;
            height: 40px;
        }

        .sampul-divider {
            width: 1px;
            height: 40px;
            background-color: white;
        }

        .sampul-title {
            font-size: 18px;
            font-weight: bold;
            color: white;
        }

        .sampul-subtitle {
            font-size: 10px;
            color: white;
        }

        .sampul-dots td {
            width: 4px;
            height: 4px;
            background-color: white;
            border-radius: 50%;
        }

        .sampul-info {
            margin-top: 60px;
            text-align: left;
        }

        .sampul-info-title {
            font-size: 22px;
            margin: 10px 0 5px;
            font-weight: bold;
            color: white;
        }

        .sampul-info-year {
            font-size: 26px;
            margin: 5px 0;
            font-weight: bold;
            color: white;
        }

        .sampul-info-location {
            font-size: 14px;
            margin-top: 12px;
            line-height: 1.6;
            color: white;
        }
    </style>
</head>

<body class="sampul-body">
    <div class="sampul-wrapper">
        <!-- Gambar Sampul -->
        <div class="sampul-bg">
            <img src="<?php echo e(public_path('assets/images/sampul-buku.png')); ?>" alt="Sampul Buku">
        </div>

        <!-- Konten -->
        <div class="sampul-content">
            <!-- Logo dan Judul -->
            <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td style="vertical-align: middle;">
                        <div class="sampul-logo-box">
                            <img src="<?php echo e(public_path('assets/images/Logo-brebes.png')); ?>" class="sampul-logo-img" alt="Logo">
                        </div>
                    </td>
                    <td style="vertical-align: middle; padding: 0 12px;">
                        <div class="sampul-divider"></div>
                    </td>
                    <td style="vertical-align: middle;">
                        <div>
                            <div class="sampul-title">Desa Cantik</div>
                            <div class="sampul-subtitle">Aplikasi Kelurahan Dan Desa</div>
                        </div>
                    </td>
                </tr>
            </table>

            <!-- Titik-titik -->
            <div style="margin-top: 30px;">
                <table class="sampul-dots" cellpadding="2" cellspacing="2" border="0" style="border-collapse: separate;">
                    <?php for($j = 0; $j < 5; $j++): ?>
                        <tr>
                            <?php for($i = 0; $i < 5; $i++): ?>
                                <td></td>
                            <?php endfor; ?>
                        </tr>
                    <?php endfor; ?>
                </table>
            </div>

            <!-- Info Buku -->
            <div class="sampul-info">
                <div class="sampul-info-title">Buku Desa</div>

                <?php if(isset($tahun)): ?>
                    <div class="sampul-info-year">Tahun <?php echo e($tahun); ?></div>
                <?php endif; ?>

                <?php if(isset($desa) && isset($kecamatan)): ?>
                    <div class="sampul-info-location">
                        Desa <?php echo e(Str::title(Str::lower($desa->nama_desa))); ?><br>
                        Kecamatan <?php echo e(Str::title(Str::lower($kecamatan->nama_kecamatan))); ?>

                    </div>
                <?php endif; ?>

                <div class="sampul-info-location">Kabupaten Brebes</div>
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\Users\Administrator\Documents\project\desa-laravel-new\resources\views/pdf/sampul-pdf.blade.php ENDPATH**/ ?>