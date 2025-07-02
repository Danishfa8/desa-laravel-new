<?php $__env->startSection('content'); ?>
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<!-- MarkerCluster CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster/dist/MarkerCluster.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster/dist/MarkerCluster.Default.css" />

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<!-- MarkerCluster JS -->
<script src="https://unpkg.com/leaflet.markercluster/dist/leaflet.markercluster.js"></script>



<div class="bg-white rounded-2xl shadow-xl p-6 mt-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Desa Dalam Peta</h2>

    <form method="GET" action="<?php echo e(route('peta.dinamik')); ?>" class="flex flex-wrap gap-4 items-end">
        <!-- KECAMATAN -->
        <select id="kecamatan" name="kecamatan" class="border rounded px-3 py-2">
            <option value="">Pilih Kecamatan</option>
            <?php $__currentLoopData = $kecamatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kecamatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($kecamatan->id); ?>" <?php echo e($selectedKecamatan == $kecamatan->id ? 'selected' : ''); ?>>
                    <?php echo e($kecamatan->nama_kecamatan); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <!-- DESA -->
        <select id="desa" name="desa" class="border rounded px-3 py-2">
            <option value="">Pilih Desa</option>
            <?php $__currentLoopData = $desas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($desa->id); ?>"
                        data-kecamatan-id="<?php echo e($desa->kecamatan_id); ?>"
                        <?php echo e($selectedDesa == $desa->id ? 'selected' : ''); ?>>
                    <?php echo e($desa->nama_desa); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <!-- KATEGORI -->
        <select id="kategori" name="kategori" class="border rounded px-3 py-2">
            <option value="" disabled <?php echo e(!$selectedKategori ? 'selected' : ''); ?>>Pilih Kategori</option>
            <?php $__currentLoopData = $kategoriPeta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($kategori->id); ?>" <?php echo e($selectedKategori == $kategori->id ? 'selected' : ''); ?>>
                    <?php echo e($kategori->nama); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <!-- SUBMIT -->
        <button type="submit"
                class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded shadow text-sm">
            Tampilkan Data
        </button>
    </form>

    <!-- Peta -->
    <?php if(request('kecamatan') && request('kategori')): ?>
        <div class="relative w-full h-[600px] rounded-xl overflow-hidden border border-gray-200 shadow-inner mt-5">
            <?php if($viewPeta): ?>
                <?php echo $__env->make($viewPeta, array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endif; ?>
        </div>
    <?php else: ?>
        <div class="mt-6 text-gray-500 text-sm italic">
            Silakan pilih Kecamatan, Desa dan Kategori terlebih dahulu untuk menampilkan peta.
        </div>
    <?php endif; ?>
</div>

<!-- Script untuk filter desa berdasarkan kecamatan (tanpa AJAX) -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const kecamatanSelect = document.getElementById('kecamatan');
        const desaSelect = document.getElementById('desa');

        function filterDesa() {
            const selectedKecamatanId = kecamatanSelect.value;

            // Sembunyikan semua option desa dulu
            Array.from(desaSelect.options).forEach(option => {
                const kecamatanId = option.getAttribute('data-kecamatan-id');
                if (!kecamatanId || kecamatanId === selectedKecamatanId || option.value === '') {
                    option.hidden = false;
                } else {
                    option.hidden = true;
                }
            });

            // Reset pilihan desa jika tidak sesuai kecamatan
            if (desaSelect.selectedOptions.length > 0) {
                const selectedDesaOption = desaSelect.selectedOptions[0];
                if (selectedDesaOption.getAttribute('data-kecamatan-id') !== selectedKecamatanId) {
                    desaSelect.value = '';
                }
            }
        }

        kecamatanSelect.addEventListener('change', filterDesa);

        // Jalankan filter saat pertama kali load
        filterDesa();
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appweb2', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Acer\Documents\PEMROGRAMMAN\DBS\BPS\desa-laravel-new\resources\views/web/data-peta.blade.php ENDPATH**/ ?>