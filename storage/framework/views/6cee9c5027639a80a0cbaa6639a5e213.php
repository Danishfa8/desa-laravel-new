<?php $__env->startSection('template_title'); ?>
    Jembatan Desa
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
                                <?php echo e(__('Jembatan Desa')); ?>

                            </span>

                            <div class="float-right">
                                <a href="<?php echo e(route('superadmin.jembatan-desa.create')); ?>"
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
                                        <th>Nama Jembatan</th>
                                        <th>Panjang</th>
                                        <th>Lebar</th>
                                        <th>Kondisi</th>
                                        <th>Lokasi</th>
                                        <th>Created By</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $jembatanDesas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jembatanDesa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>

                                            <td><?php echo e($jembatanDesa->desa->nama_desa); ?></td>
                                            <td><?php echo e($jembatanDesa->rtRwDesa->rt); ?>/<?php echo e($jembatanDesa->rtRwDesa->rw); ?></td>
                                            <td><?php echo e($jembatanDesa->nama_jembatan); ?></td>
                                            <td><?php echo e($jembatanDesa->panjang); ?> M</td>
                                            <td><?php echo e($jembatanDesa->lebar); ?> M</td>
                                            <td>
                                                <?php if($jembatanDesa->kondisi == 'Baik'): ?>
                                                    <span class="badge bg-success"><?php echo e($jembatanDesa->kondisi); ?></span>
                                                <?php elseif($jembatanDesa->kondisi == 'Rusak Ringan'): ?>
                                                    <span
                                                        class="badge bg-warning text-dark"><?php echo e($jembatanDesa->kondisi); ?></span>
                                                <?php elseif($jembatanDesa->kondisi == 'Rusak Berat'): ?>
                                                    <span class="badge bg-danger"><?php echo e($jembatanDesa->kondisi); ?></span>
                                                <?php else: ?>
                                                    <span class="badge bg-secondary"><?php echo e($jembatanDesa->kondisi); ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e($jembatanDesa->lokasi); ?></td>
                                            <td><?php echo e($jembatanDesa->created_by); ?></td>

                                            <td>
                                                <form
                                                    action="<?php echo e(route('superadmin.jembatan-desa.destroy', $jembatanDesa->id)); ?>"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="<?php echo e(route('superadmin.jembatan-desa.show', $jembatanDesa->id)); ?>"><i
                                                            class="fa fa-fw fa-eye"></i> <?php echo e(__('Show')); ?></a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="<?php echo e(route('superadmin.jembatan-desa.edit', $jembatanDesa->id)); ?>"><i
                                                            class="fa fa-fw fa-edit"></i> <?php echo e(__('Edit')); ?></a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i
                                                            class="fa fa-fw fa-trash"></i> <?php echo e(__('Delete')); ?></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <?php echo $__env->make('layouts.pagination', ['paginator' => $jembatanDesas], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Administrator\Documents\project\desa-laravel-new\resources\views/superadmin/jembatan-desa/index.blade.php ENDPATH**/ ?>