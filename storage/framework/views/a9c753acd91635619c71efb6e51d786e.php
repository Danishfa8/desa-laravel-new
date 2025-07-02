<?php $__env->startSection('template_title'); ?>
    Sarana Lainya Desa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php echo $__env->make('layouts.messages', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Sarana Lainya Desa')); ?>

                            </span>

                            <div class="float-right">
                                <a href="<?php echo e(route('superadmin.sarana-lainya-desa.create')); ?>"
                                    class="btn btn-primary btn-sm float-right" data-placement="left">
                                    <?php echo e(__('Create New')); ?>

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Desa</th>
                                        <th>RT/RW</th>
                                        <th>Tahun</th>
                                        <th>Jenis Sarana Lainnya</th>
                                        <th>Nama Sarana Lainnya</th>
                                        <th>Created By</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $saranaLainyaDesas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $saranaLainyaDesa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>

                                            <td><?php echo e($saranaLainyaDesa->desa->nama_desa); ?></td>
                                            <td><?php echo e($saranaLainyaDesa->rtRwDesa->rt); ?>/<?php echo e($saranaLainyaDesa->rtRwDesa->rw); ?>

                                            </td>
                                            <td><?php echo e($saranaLainyaDesa->tahun); ?></td>
                                            <td><?php echo e($saranaLainyaDesa->jenis_sarana_lainnya); ?></td>
                                            <td><?php echo e($saranaLainyaDesa->nama_sarana_lainnya); ?></td>
                                            <td><?php echo e($saranaLainyaDesa->created_by); ?></td>

                                            <td>
                                                <form
                                                    action="<?php echo e(route('superadmin.sarana-lainya-desa.destroy', $saranaLainyaDesa->id)); ?>"
                                                    method="POST">
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#showModal<?php echo e($saranaLainyaDesa->id); ?>">
                                                        <i class="las la-eye"></i> <?php echo e(__('Show')); ?>

                                                    </button>
                                                    <a class="btn btn-sm btn-success"
                                                        href="<?php echo e(route('superadmin.sarana-lainya-desa.edit', $saranaLainyaDesa->id)); ?>"><i
                                                            class="las la-edit"></i> <?php echo e(__('Edit')); ?></a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i
                                                            class="las la-trash"></i> <?php echo e(__('Delete')); ?></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php echo $__env->make('layouts.partials.modal.modal_sarana_lainnya', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <?php echo $__env->make('layouts.pagination', ['paginator' => $saranaLainyaDesas], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Acer\Documents\PEMROGRAMMAN\DBS\BPS\desa-laravel-new\resources\views/superadmin/sarana-lainya-desa/index.blade.php ENDPATH**/ ?>