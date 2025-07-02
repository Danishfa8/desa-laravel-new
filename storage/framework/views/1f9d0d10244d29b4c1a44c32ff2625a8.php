
<?php $__env->startSection('content'); ?>
<div class="max-w-5xl mx-auto px-4 py-10">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Desa Dalam Buku</h1>

    <!-- FORM -->
    <form id="filterForm" class="flex flex-col sm:flex-row sm:items-end sm:gap-4 gap-6" action="<?php echo e(route('desa-dalam-buku')); ?>" method="GET">
        <!-- Tahun -->
        <select name="tahun" class="border border-gray-300 rounded-xl px-4 py-2 text-sm text-gray-700 focus:ring-2 focus:ring-green-500 focus:outline-none shadow-sm w-full sm:w-auto">
            <?php $__currentLoopData = range(2020, 2025); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($tahun); ?>" <?php echo e(request('tahun') == $tahun ? 'selected' : ''); ?>><?php echo e($tahun); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <!-- Kecamatan -->
        <select id="kecamatan" name="kecamatan" class="border border-gray-300 rounded-xl px-4 py-2 text-sm text-gray-700 focus:ring-2 focus:ring-green-500 focus:outline-none shadow-sm">
            <option value="" disabled <?php echo e(request('kecamatan') ? '' : 'selected'); ?>>Pilih Kecamatan</option>
            <?php $__currentLoopData = $kecamatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kecamatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($kecamatan->id); ?>" <?php echo e(request('kecamatan') == $kecamatan->id ? 'selected' : ''); ?>><?php echo e($kecamatan->nama_kecamatan); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <!-- Desa -->
        <select id="desa" name="desa" class="border border-gray-300 rounded-xl px-4 py-2 text-sm text-gray-700 focus:ring-2 focus:ring-green-500 focus:outline-none shadow-sm">
            <option value="">Pilih Desa</option>
            <?php $__currentLoopData = $desas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($desa->id); ?>" data-kecamatan="<?php echo e($desa->kecamatan_id); ?>" <?php echo e(request('desa') == $desa->id ? 'selected' : ''); ?>>
                <?php echo e($desa->nama_desa); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <!-- Tombol Tampilkan -->
        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-xl shadow font-semibold text-sm transition-all duration-200 w-full sm:w-auto">
            Tampilkan Data
        </button>
    </form>

    <!-- Tombol Generate PDF -->
    <?php if(request('tahun') && request('kecamatan') && request('desa')): ?>
    <div class="mt-6 flex gap-4">
        <a href="<?php echo e(route('desa-dalam-buku.pdf', request()->only(['tahun', 'kecamatan', 'desa']))); ?>" target="_blank"
            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-xl shadow font-semibold text-sm inline-block transition-all duration-200">
            <i class="fas fa-eye mr-2"></i> Lihat PDF
        </a>
        <a href="<?php echo e(route('desa-dalam-buku.download', request()->only(['tahun', 'kecamatan', 'desa']))); ?>" 
            class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-xl shadow font-semibold text-sm inline-block transition-all duration-200">
            <i class="fas fa-download mr-2"></i> Download PDF
        </a>
    </div>
    <?php endif; ?>

    <!-- SAMPUL -->
    <div class="mt-10 flex justify-center">
        <div class="relative w-full max-w-xs sm:max-w-sm md:max-w-md aspect-[4/5] rounded shadow overflow-hidden">
            <img src="<?php echo e(asset('assets/images/sampul-buku.png')); ?>" alt="Sampul Buku" class="w-full h-full object-cover">

            <!-- Overlay -->
            <!-- <div class="absolute inset-0 bg-black bg-opacity-30">
                <div class="absolute left-0 top-0 w-full h-full rotate-[-25deg] origin-top-left bg-[#132736] opacity-90" style="transform: skewY(-20deg); z-index: 10;"></div>
            </div> -->

            <!-- Konten -->
            <div class="absolute inset-0 z-20 flex flex-col justify-start px-6 py-8 text-white font-sans">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-white rounded p-1">
                        <img src="<?php echo e(asset('assets/images/Logo-brebes.png')); ?>" alt="Logo" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <h1 class="text-lg font-bold leading-tight">Desa Cantik</h1>
                        <p class="text-xs">Aplikasi Kelurahan dan Desa</p>
                    </div>
                </div>

                <!-- Titik Kotak -->
                <div class="mt-6 grid grid-cols-5 gap-1 w-20">
                    <?php for($i = 0; $i < 25; $i++): ?>
                        <div class="w-1 h-1 bg-white rounded-full"></div>
                    <?php endfor; ?>
                </div>

                <!-- Informasi Buku -->
                <div class="mt-10 text-left leading-relaxed">
                    <h3 class="text-white text-xl font-semibold mt-2">Buku Desa</h3>
                    <?php if(request('tahun')): ?>
                    <h2 class="text-white text-2xl font-bold">Tahun <?php echo e(request('tahun')); ?></h2>
                    <?php endif; ?>
                    <p class="mt-4 text-sm">
                        <?php if(request('kecamatan') && request('desa')): ?>
                        <?php
                            $selectedDesa = $desas->where('id', request('desa'))->first();
                            $selectedKecamatan = $kecamatans->where('id', request('kecamatan'))->first();
                        ?>
                        Desa <?php echo e($selectedDesa ? Str::title(Str::lower($selectedDesa->nama_desa)) : ''); ?> <br>
                        Kecamatan <?php echo e($selectedKecamatan ? Str::title(Str::lower($selectedKecamatan->nama_kecamatan)) : ''); ?>

                        <?php endif; ?>
                    </p>
                    <p class="mt-4 text-sm">Kabupaten Brebes</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const kecamatanSelect = document.getElementById('kecamatan');
        const desaSelect = document.getElementById('desa');
        const desaOptions = Array.from(desaSelect.options);

        // Filter desa berdasarkan kecamatan yang dipilih
        function filterDesa() {
            const selectedKecamatan = kecamatanSelect.value;
            
            // Reset desa select
            desaSelect.innerHTML = '<option value="">Pilih Desa</option>';
            
            // Filter dan tambahkan opsi desa yang sesuai
            desaOptions.forEach(option => {
                if (option.dataset.kecamatan === selectedKecamatan || option.value === '') {
                    desaSelect.appendChild(option.cloneNode(true));
                }
            });
        }

        // Panggil filter saat halaman dimuat
        if (kecamatanSelect.value) {
            filterDesa();
        }

        // Tambahkan event listener untuk perubahan kecamatan
        kecamatanSelect.addEventListener('change', filterDesa);
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appweb2', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Administrator\Documents\project\desa-laravel-new\resources\views/web/buku-desa.blade.php ENDPATH**/ ?>