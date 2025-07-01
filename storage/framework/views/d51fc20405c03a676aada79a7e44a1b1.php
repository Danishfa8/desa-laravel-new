<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'item',
    'routePrefix',
    'showRoute' => true,
    'editRoute' => true,
    'deleteRoute' => true,
    'ajukanRoute' => false,
    'statusField' => 'status',
]));

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

foreach (array_filter(([
    'item',
    'routePrefix',
    'showRoute' => true,
    'editRoute' => true,
    'deleteRoute' => true,
    'ajukanRoute' => false,
    'statusField' => 'status',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
    $resource = explode('.', $routePrefix)[1];
    $status = $item->{$statusField};
?>

<td>
    
    <?php if($showRoute): ?>
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
            data-bs-target="#showModal<?php echo e($item->id); ?>">
            <i class="las la-eye"></i> <?php echo e(__('Show')); ?>

        </button>
    <?php endif; ?>

    
    <?php if($editRoute && in_array($status, ['Arsip', 'Rejected'])): ?>
        <a class="btn btn-sm btn-success" href="<?php echo e(route($routePrefix . '.edit', $item->id)); ?>">
            <i class="las la-edit"></i> <?php echo e(__('Edit')); ?>

        </a>
    <?php endif; ?>

    
    <?php if($deleteRoute && in_array($status, ['Arsip', 'Rejected'])): ?>
        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
            data-bs-target="#deleteModal<?php echo e($item->id); ?>">
            <i class="las la-trash"></i> <?php echo e(__('Delete')); ?>

        </button>
    <?php endif; ?>

    
    <?php if($ajukanRoute && in_array($status, ['Arsip', 'Rejected'])): ?>
        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
            data-bs-target="#ajukanModal<?php echo e($item->id); ?>">
            <i class="las la-paper-plane"></i> <?php echo e(__('Ajukan')); ?>

        </button>
    <?php endif; ?>
</td>


<?php if($deleteRoute && in_array($status, ['Arsip', 'Rejected'])): ?>
    <div class="modal fade" id="deleteModal<?php echo e($item->id); ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form action="<?php echo e(route($routePrefix . '.destroy', $item->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi Hapus</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin menghapus data ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php endif; ?>


<?php if($ajukanRoute && in_array($status, ['Arsip', 'Rejected'])): ?>
    <div class="modal fade" id="ajukanModal<?php echo e($item->id); ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" action="<?php echo e(route('admin_desa.universal.ajukan', ['resource' => $resource, 'id' => $item->id])); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi Pengajuan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        Yakin ingin mengajukan data ini ke Admin Kabupaten?<br>
                        Setelah diajukan, data tidak dapat diedit atau dihapus.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-warning">Ajukan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Administrator\Documents\project\desa-laravel-new\resources\views/components/action-buttons.blade.php ENDPATH**/ ?>