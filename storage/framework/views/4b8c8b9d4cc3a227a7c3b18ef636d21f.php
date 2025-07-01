<?php $__env->startSection('template_title'); ?>
    <?php echo e($jembatanDesa->name ?? __('Show') . " " . __('Jembatan Desa')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title"><?php echo e(__('Show')); ?> Jembatan Desa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('jembatan-desas.index')); ?>"> <?php echo e(__('Back')); ?></a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Desa Id:</strong>
                                    <?php echo e($jembatanDesa->desa_id); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Rt Rw Desa Id:</strong>
                                    <?php echo e($jembatanDesa->rt_rw_desa_id); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nama Jembatan:</strong>
                                    <?php echo e($jembatanDesa->nama_jembatan); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Panjang:</strong>
                                    <?php echo e($jembatanDesa->panjang); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lebar:</strong>
                                    <?php echo e($jembatanDesa->lebar); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Kondisi:</strong>
                                    <?php echo e($jembatanDesa->kondisi); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lokasi:</strong>
                                    <?php echo e($jembatanDesa->lokasi); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Created By:</strong>
                                    <?php echo e($jembatanDesa->created_by); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Updated By:</strong>
                                    <?php echo e($jembatanDesa->updated_by); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Status:</strong>
                                    <?php echo e($jembatanDesa->status); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Reject Reason:</strong>
                                    <?php echo e($jembatanDesa->reject_reason); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Approved By:</strong>
                                    <?php echo e($jembatanDesa->approved_by); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Approved At:</strong>
                                    <?php echo e($jembatanDesa->approved_at); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Latitude:</strong>
                                    <?php echo e($jembatanDesa->latitude); ?>

                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Longitude:</strong>
                                    <?php echo e($jembatanDesa->longitude); ?>

                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Administrator\Documents\project\desa-laravel-new\resources\views/superadmin/jembatan-desa/show.blade.php ENDPATH**/ ?>