<?php $__env->startSection('template_title'); ?>
    <?php echo e(__('Create')); ?> Jembatan Desa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><?php echo e(__('Create')); ?> Jembatan Desa</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="<?php echo e(route('admin_desa.jembatan-desa.store')); ?>" role="form"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <?php echo $__env->make('admin_desa.jembatan-desa.form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Administrator\Documents\project\desa-laravel-new\resources\views/admin_desa/jembatan-desa/create.blade.php ENDPATH**/ ?>