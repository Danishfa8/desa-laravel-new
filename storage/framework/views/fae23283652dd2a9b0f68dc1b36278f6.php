<?php $__env->startSection('template_title'); ?>
    Data Desa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php echo $__env->make('layouts.messages', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <div class="card card-animate">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Data Desa')); ?>

                            </span>

                            <div class="float-right">
                                <a href="<?php echo e(route('admin_desa.desas.create')); ?>" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
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

                                        <th>Kecamatan</th>
                                        <th>Nama Desa</th>
                                        <th>Klas</th>
                                        <th>Stat Pem</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $desas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>

                                            <td><?php echo e($desa->kecamatan->nama_kecamatan); ?></td>
                                            <td><?php echo e($desa->nama_desa); ?></td>
                                            <td><?php echo e($desa->klas); ?></td>
                                            <td><?php echo e($desa->stat_pem); ?></td>
                                            <td><?php echo e($desa->latitude); ?></td>
                                            <td><?php echo e($desa->longitude); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('admin_desa.desas.destroy', $desa->id)); ?>"
                                                    method="POST">
                                                    <a href="<?php echo e(route('admin_desa.profile-desas.create', $desa->id)); ?>"
                                                        class="btn btn-sm btn-primary"><i
                                                            class="las la-users"></i><?php echo e(__('Create Profile')); ?></a>
                                                    <a class="btn btn-sm btn-warning"
                                                        href="<?php echo e(route('admin_desa.desas.show', $desa->id)); ?>"><i
                                                            class="las la-edit"></i> <?php echo e(__('Show')); ?></a>
                                                    
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <?php echo $__env->make('layouts.pagination', ['paginator' => $desas], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Acer\Documents\PEMROGRAMMAN\DBS\BPS\desa-laravel-new\resources\views/admin_desa/desa/index.blade.php ENDPATH**/ ?>