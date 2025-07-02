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

<div class="modal fade" id="showModal<?php echo e($item->id); ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Jembatan Desa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">


<?php if($item->foto): ?>
    <div class="text-center mb-3">
        <img src="<?php echo e(asset('storage/foto_jembatan/' . $item->foto)); ?>"
             alt="Foto Jembatan"
             class="img-fluid rounded shadow-sm"
             style="max-height: 300px;">
    </div>
<?php endif; ?>


                <div class="mb-2"><strong>Desa:</strong> <?php echo e($item->desa->nama_desa ?? '-'); ?></div>
                <div class="mb-2"><strong>RT/RW:</strong> <?php echo e($item->rtRwDesa->rt ?? '-'); ?>/<?php echo e($item->rtRwDesa->rw ?? '-'); ?></div>
                <div class="mb-2"><strong>Nama Jembatan:</strong> <?php echo e($item->nama_jembatan); ?></div>
                <div class="mb-2"><strong>Panjang:</strong> <?php echo e($item->panjang); ?> m</div>
                <div class="mb-2"><strong>Lebar:</strong> <?php echo e($item->lebar); ?> m</div>
                <div class="mb-2"><strong>Kondisi:</strong> <?php echo e($item->kondisi); ?></div>
                <div class="mb-2"><strong>Lokasi:</strong> <?php echo e($item->lokasi); ?></div>
                <div class="mb-2"><strong>Created By:</strong> <?php echo e($item->created_by); ?></div>
                <div class="mb-2"><strong>Updated By:</strong> <?php echo e($item->updated_by ?? '-'); ?></div>
                <div class="mb-2"><strong>Status:</strong>
                    <span class="badge
                        <?php if($item->status === 'Approved'): ?> bg-success
                        <?php elseif($item->status === 'Pending'): ?> bg-warning text-dark
                        <?php elseif($item->status === 'Rejected'): ?> bg-danger
                        <?php else: ?> bg-secondary <?php endif; ?>">
                        <?php echo e($item->status); ?>

                    </span>
                </div>

                <?php if($item->status === 'Rejected' && $item->reject_reason): ?>
                    <div class="mb-2">
                        <strong>Alasan Penolakan:</strong>
                        <div class="alert alert-danger mt-1 mb-0">
                            <?php echo e($item->reject_reason); ?>

                        </div>
                    </div>
                <?php endif; ?>

                <div class="mb-2"><strong>Approved By:</strong> <?php echo e($item->approved_by ?? '-'); ?></div>
                <div class="mb-2"><strong>Approved At:</strong> <?php echo e($item->approved_at ?? '-'); ?></div>
                <div class="mb-2"><strong>Latitude:</strong> <?php echo e($item->latitude ?? '-'); ?></div>
                <div class="mb-2"><strong>Longitude:</strong> <?php echo e($item->longitude ?? '-'); ?></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Acer\Documents\PEMROGRAMMAN\DBS\BPS\desa-laravel-new\resources\views/components/jembatan-desa/modal-detail.blade.php ENDPATH**/ ?>