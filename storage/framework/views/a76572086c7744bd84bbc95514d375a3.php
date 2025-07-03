<?php $__env->startSection('template_title'); ?>
    Ekonomis
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
                                <?php echo e(__('Ekonomis')); ?>

                            </span>

                            <div class="float-right">
                                <a href="<?php echo e(route('admin_desa.ekonomi.create')); ?>" class="btn btn-primary btn-sm float-right"
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

                                        <th>Desa</th>
                                        <th>Tahun</th>
                                        <th>Jenis</th>
                                        <th>Nama</th>
                                        <th>Pemilik</th>
                                        <th>Created By</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $ekonomis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ekonomi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>

                                            <td><?php echo e($ekonomi->desa_id); ?></td>
                                            <td><?php echo e($ekonomi->tahun); ?></td>
                                            <td><?php echo e($ekonomi->jenis); ?></td>
                                            <td><?php echo e($ekonomi->nama); ?></td>
                                            <td><?php echo e($ekonomi->pemilik); ?></td>
                                            <td><?php echo e($ekonomi->created_by); ?></td>
                                            <td>
                                                <?php if($ekonomi->status == 'Arsip'): ?>
                                                    <span class="badge bg-primary"><?php echo e($ekonomi->status); ?></span>
                                                <?php elseif($ekonomi->status == 'Pending'): ?>
                                                    <span class="badge bg-warning"><?php echo e($ekonomi->status); ?></span>
                                                <?php elseif($ekonomi->status == 'Approved'): ?>
                                                    <span class="badge bg-success"><?php echo e($ekonomi->status); ?></span>
                                                <?php elseif($ekonomi->status == 'Rejected'): ?>
                                                    <span class="badge bg-danger"><?php echo e($ekonomi->status); ?></span>
                                                <?php else: ?>
                                                    <span class="badge bg-secondary"><?php echo e($ekonomi->status); ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <?php if (isset($component)) { $__componentOriginalf9332b595ad3d3a806f9da4dda8769dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9332b595ad3d3a806f9da4dda8769dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.action-buttons','data' => ['item' => $ekonomi,'routePrefix' => 'admin_desa.bumdes','ajukanRoute' => true,'statusField' => 'status']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('action-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ekonomi),'route-prefix' => 'admin_desa.bumdes','ajukan-route' => true,'status-field' => 'status']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf9332b595ad3d3a806f9da4dda8769dd)): ?>
<?php $attributes = $__attributesOriginalf9332b595ad3d3a806f9da4dda8769dd; ?>
<?php unset($__attributesOriginalf9332b595ad3d3a806f9da4dda8769dd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf9332b595ad3d3a806f9da4dda8769dd)): ?>
<?php $component = $__componentOriginalf9332b595ad3d3a806f9da4dda8769dd; ?>
<?php unset($__componentOriginalf9332b595ad3d3a806f9da4dda8769dd); ?>
<?php endif; ?>

                                        </tr>
                                        <?php echo $__env->make('layouts.partials.modal.modal_ekonomi', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <?php echo $__env->make('layouts.pagination', ['paginator' => $ekonomis], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Acer\Documents\PEMROGRAMMAN\DBS\BPS\desa-laravel-new\resources\views/admin_desa/ekonomi/index.blade.php ENDPATH**/ ?>