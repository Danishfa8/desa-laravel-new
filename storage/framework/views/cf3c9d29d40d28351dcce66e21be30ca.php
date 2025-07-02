<div class="align-items-center mt-2 row g-3 text-center text-sm-start">
    <div class="col-sm">
        <div class="text-muted">
            Showing <span class="fw-semibold"><?php echo e($paginator->firstItem()); ?></span> to
            <span class="fw-semibold"><?php echo e($paginator->lastItem()); ?></span> of
            <span class="fw-semibold"><?php echo e($paginator->total()); ?></span> Results
        </div>
    </div>
    <div class="col-sm-auto">
        <ul class="pagination pagination-separated pagination-sm justify-content-center justify-content-sm-start mb-0">
            
            <?php if($paginator->onFirstPage()): ?>
                <li class="page-item disabled">
                    <span class="page-link">←</span>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <a href="<?php echo e($paginator->previousPageUrl()); ?>" class="page-link">←</a>
                </li>
            <?php endif; ?>

            
            <?php $__currentLoopData = $paginator->getUrlRange(1, $paginator->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="page-item <?php echo e($page == $paginator->currentPage() ? 'active' : ''); ?>">
                    <a href="<?php echo e($url); ?>" class="page-link"><?php echo e($page); ?></a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($paginator->hasMorePages()): ?>
                <li class="page-item">
                    <a href="<?php echo e($paginator->nextPageUrl()); ?>" class="page-link">→</a>
                </li>
            <?php else: ?>
                <li class="page-item disabled">
                    <span class="page-link">→</span>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<?php /**PATH C:\Users\Acer\Documents\PEMROGRAMMAN\DBS\BPS\desa-laravel-new\resources\views/layouts/pagination.blade.php ENDPATH**/ ?>