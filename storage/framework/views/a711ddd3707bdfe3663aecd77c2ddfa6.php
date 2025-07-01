<div id="map" style="width: 100%; height: 100%; min-height: 600px; z-index: 0;"></div>

<?php if($jembatanMarkers->isEmpty()): ?>
    <div class="absolute inset-0 flex items-center justify-center bg-white bg-opacity-80 text-gray-700 font-semibold text-sm z-[999]">
        Tidak ada data jembatan untuk ditampilkan di desa ini.
    </div>
<?php endif; ?>


<?php $__currentLoopData = $jembatanMarkers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jembatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $__env->make('layouts.partials.modal.modal_jembatan', ['jembatanDesa' => $jembatan], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script>
    const map = L.map('map').setView([
        <?php echo e($desaLat ?? '-6.9514'); ?>,
        <?php echo e($desaLng ?? '109.4275'); ?>

    ], 14);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    const markers = L.markerClusterGroup();

    const jembatanIcon = L.icon({
        iconUrl: '<?php echo e(asset("assets/icons/jembatan.png")); ?>',
        iconSize: [32, 37],
        iconAnchor: [16, 37],
        popupAnchor: [0, -30]
    });

    <?php $__currentLoopData = $jembatanMarkers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jembatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        {
            let marker = L.marker(
                [<?php echo e($jembatan->latitude); ?>, <?php echo e($jembatan->longitude); ?>],
                { icon: jembatanIcon }
            );

            marker.on('click', () => {
                openModal('<?php echo e($jembatan->id); ?>');
            });

            markers.addLayer(marker);
        }
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    map.addLayer(markers);

    if (markers.getLayers().length > 0) {
        map.fitBounds(markers.getBounds(), { padding: [20, 20] });
    }

    function openModal(id) {
        const modal = document.getElementById('showModal' + id);
        if (modal) {
            modal.classList.remove('hidden');
        }
    }

    function closeModal(id) {
        const modal = document.getElementById('showModal' + id);
        if (modal) {
            modal.classList.add('hidden');
        }
    }

    function handleOutsideClick(event, id) {
        const modalContent = event.currentTarget.querySelector('.bg-white');
        if (!modalContent.contains(event.target)) {
            closeModal(id);
        }
    }
</script>


<!-- <div id="map" style="width: 100%; height: 100%; z-index: 0;"></div>

<?php if($jembatanMarkers->isEmpty()): ?>
    <div class="absolute inset-0 flex items-center justify-center bg-white bg-opacity-80 text-gray-700 font-semibold text-sm z-[999]">
        Tidak ada data jembatan untuk ditampilkan di desa ini.
    </div>
<?php endif; ?>


<?php $__currentLoopData = $jembatanMarkers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jembatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $__env->make('layouts.partials.modal.modal_jembatan', ['jembatanDesa' => $jembatan], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script>
    const map = L.map('map').setView([
        <?php echo e($desaLat ?? '-6.9514'); ?>,
        <?php echo e($desaLng ?? '109.4275'); ?>

    ], 14);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    const markers = L.markerClusterGroup();

    const jembatanIcon = L.icon({
        iconUrl: '<?php echo e(asset("assets/icons/jembatan.png")); ?>',
        iconSize: [32, 37],
        iconAnchor: [16, 37],
        popupAnchor: [0, -30]
    });

    <?php $__currentLoopData = $jembatanMarkers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jembatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        const marker = L.marker(
            [<?php echo e($jembatan->latitude); ?>, <?php echo e($jembatan->longitude); ?>],
            { icon: jembatanIcon }
        );

        marker.on('click', () => {
            openModal('<?php echo e($jembatan->id); ?>');
        });

        markers.addLayer(marker);
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    map.addLayer(markers);

    if (markers.getLayers().length > 0) {
        map.fitBounds(markers.getBounds(), { padding: [20, 20] });
    }

    function openModal(id) {
        const modal = document.getElementById('showModal' + id);
        if (modal) {
            modal.classList.remove('hidden');
        }
    }

    function closeModal(id) {
        const modal = document.getElementById('showModal' + id);
        if (modal) {
            modal.classList.add('hidden');
        }
    }

    function handleOutsideClick(event, id) {
        const modalContent = event.currentTarget.querySelector('.bg-white');
        if (!modalContent.contains(event.target)) {
            closeModal(id);
        }
    }
</script> -->
<?php /**PATH C:\Users\Administrator\Documents\project\desa-laravel-new\resources\views/web/partials/peta-jembatan.blade.php ENDPATH**/ ?>