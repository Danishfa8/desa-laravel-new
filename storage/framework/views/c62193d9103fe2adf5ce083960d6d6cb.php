

<?php $__env->startSection('template_title'); ?>
    Edit Jembatan Desa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Edit Jembatan Desa (Admin Kabupaten)</span>
                </div>
                <div class="card-body bg-white">
                    <form method="POST" action="<?php echo e(route('admin_kabupaten.jembatan-desa.update', $jembatanDesa->id)); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>

                        <?php echo $__env->make('admin_kabupaten.jembatan-desa.form', ['jembatanDesa' => $jembatanDesa, 'desas' => $desas], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Administrator\Documents\project\desa-laravel-new\resources\views/admin_kabupaten/jembatan-desa/edit.blade.php ENDPATH**/ ?>