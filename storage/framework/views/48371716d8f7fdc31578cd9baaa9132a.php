<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['item', 'table', 'statusField' => 'status']));

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

foreach (array_filter((['item', 'table', 'statusField' => 'status']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php if($item->{$statusField} === 'Pending'): ?>
    <div class="d-flex align-items-center gap-1 flex-wrap">
        <!-- Tombol Approve -->
        <form action="<?php echo e(route('admin_kabupaten.approval', ['table' => $table, 'id' => $item->id])); ?>" method="POST" class="d-inline">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <input type="hidden" name="status" value="Approved">
            <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Yakin ingin menyetujui data ini?')">
                ✅ Approve
            </button>
        </form>

        <!-- Tombol Reject -->
        <button type="button" class="btn btn-danger btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#rejectModal<?php echo e($item->id); ?>">
            ❌ Reject
        </button>

        <!-- Modal Reject -->
        <div class="modal fade" id="rejectModal<?php echo e($item->id); ?>" tabindex="-1" aria-labelledby="rejectModalLabel<?php echo e($item->id); ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="rejectModalLabel<?php echo e($item->id); ?>">Alasan Penolakan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <form action="<?php echo e(route('admin_kabupaten.approval', ['table' => $table, 'id' => $item->id])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <input type="hidden" name="status" value="Rejected">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="reject_reason">Tuliskan alasan penolakan:</label>
                                <textarea name="reject_reason" class="form-control" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Kirim Penolakan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php elseif($item->{$statusField} === 'Approved'): ?>
    <span class="badge bg-success px-3 py-1 fs-6">✔ Disetujui</span>
<?php elseif($item->{$statusField} === 'Rejected'): ?>
    <span class="badge bg-danger px-3 py-1 fs-6" data-bs-toggle="tooltip" title="Alasan: <?php echo e($item->reject_reason); ?>">
        ✖ Ditolak
    </span>
<?php else: ?>
    <span class="badge bg-secondary px-3 py-1 fs-6"><?php echo e($item->{$statusField}); ?></span>
<?php endif; ?>
<?php /**PATH C:\Users\Administrator\Documents\project\desa-laravel-new\resources\views/components/approve-reject-buttons.blade.php ENDPATH**/ ?>