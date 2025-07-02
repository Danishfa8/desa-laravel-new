<?php $__env->startSection('template_title'); ?>
    <?php echo e($pendidikanDesa->name ?? __('Show') . " " . __('Pendidikan Desa')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title"><?php echo e(__('Show')); ?> Pendidikan Desa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('pendidikan-desas.index')); ?>"> <?php echo e(__('Back')); ?></a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Desa Id:</strong>
                                    <?php echo e($pendidikanDesa->desa_id); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Rt Rw Desa Id:</strong>
                                    <?php echo e($pendidikanDesa->rt_rw_desa_id); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tahun:</strong>
                                    <?php echo e($pendidikanDesa->tahun); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Jenis Pendidikan:</strong>
                                    <?php echo e($pendidikanDesa->jenis_pendidikan); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Status Pendidikan:</strong>
                                    <?php echo e($pendidikanDesa->status_pendidikan); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Foto:</strong>
                                    <?php echo e($pendidikanDesa->foto); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Latitude:</strong>
                                    <?php echo e($pendidikanDesa->latitude); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Longitude:</strong>
                                    <?php echo e($pendidikanDesa->longitude); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Created By:</strong>
                                    <?php echo e($pendidikanDesa->created_by); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Updated By:</strong>
                                    <?php echo e($pendidikanDesa->updated_by); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Status:</strong>
                                    <?php echo e($pendidikanDesa->status); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Reject Reason:</strong>
                                    <?php echo e($pendidikanDesa->reject_reason); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Approved By:</strong>
                                    <?php echo e($pendidikanDesa->approved_by); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Approved At:</strong>
                                    <?php echo e($pendidikanDesa->approved_at); ?>

                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Acer\Documents\PEMROGRAMMAN\DBS\BPS\desa-laravel-new\resources\views/admin_desa/pendidikan-desa/show.blade.php ENDPATH**/ ?>