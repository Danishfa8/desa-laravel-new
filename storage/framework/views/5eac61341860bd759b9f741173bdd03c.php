<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['item']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['item']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div id="showModal<?php echo e($item->id); ?>" class="modal fade" tabindex="-1"
    aria-labelledby="showModalLabel<?php echo e($item->id); ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showModalLabel<?php echo e($item->id); ?>">
                    Detail Pendidikan Desa <?php echo e($item->desa->nama_desa ?? '-'); ?>

                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Nama Desa</strong></div>
                    <div class="col-sm-8"><?php echo e($item->desa->nama_desa ?? '-'); ?></div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>RT/RW</strong></div>
                    <div class="col-sm-8">
                        <?php echo e(optional($item->rtRwDesa)->rt ?? '-'); ?>/<?php echo e(optional($item->rtRwDesa)->rw ?? '-'); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Tahun</strong></div>
                    <div class="col-sm-8"><?php echo e($item->tahun); ?></div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Jenis Pendidikan</strong></div>
                    <div class="col-sm-8"><?php echo e($item->jenis_pendidikan); ?></div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Status Pendidikan</strong></div>
                    <div class="col-sm-8"><?php echo e($item->status_pendidikan); ?></div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Foto</strong></div>
                    <div class="col-sm-8">
                        <?php if($item->foto): ?>
                            <img src="<?php echo e(asset('storage/foto_pendidikan/' . $item->foto)); ?>"
                                alt="Foto Pendidikan"
                                style="max-width: 100%; height: auto; border: 1px solid #ccc;">
                        <?php else: ?>
                            <span class="text-muted">Tidak ada foto</span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Latitude</strong></div>
                    <div class="col-sm-8"><?php echo e($item->latitude); ?></div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Longitude</strong></div>
                    <div class="col-sm-8"><?php echo e($item->longitude); ?></div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Dibuat Oleh</strong></div>
                    <div class="col-sm-8"><?php echo e($item->created_by); ?></div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Administrator\Documents\project\desa-laravel-new\resources\views/components/pendidikan-desa/modal-detail.blade.php ENDPATH**/ ?>