<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'routePrefix',
    'id',
    'status',
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
    'routePrefix',
    'id',
    'status',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php if($status === 'Pending'): ?>
    <form action="<?php echo e(route($routePrefix . '.edit', $id)); ?>" method="GET" class="d-inline">
        <button type="submit" class="btn btn-sm btn-success">
            <i class="las la-edit"></i> Edit
        </button>
    </form>
<?php endif; ?>
<?php /**PATH C:\Users\Administrator\Documents\project\desa-laravel-new\resources\views/components/button-edit.blade.php ENDPATH**/ ?>