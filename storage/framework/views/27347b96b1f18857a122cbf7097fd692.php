<?php $__env->startSection('template_title'); ?>
    Jembatan Desa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <?php echo $__env->make('layouts.messages', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span id="card_title"><?php echo e(__('Jembatan Desa')); ?></span>
                    <a href="<?php echo e(route('admin_desa.jembatan-desa.create')); ?>" class="btn btn-primary btn-sm">
                        <?php echo e(__('Create New')); ?>

                    </a>
                </div>

                <div class="card-body bg-white">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Desa</th>
                                    <th>RT/RW</th>
                                    <th>Nama Jembatan</th>
                                    <th>Panjang</th>
                                    <th>Lebar</th>
                                    <th>Kondisi</th>
                                    <th>Lokasi</th>
                                    <th>Foto</th> 
                                    <th>Created By</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $jembatanDesas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jembatanDesa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$i); ?></td>
                                        <td><?php echo e($jembatanDesa->desa->nama_desa ?? '-'); ?></td>
                                        <td><?php echo e($jembatanDesa->rtRwDesa->rt ?? '-'); ?>/<?php echo e($jembatanDesa->rtRwDesa->rw ?? '-'); ?></td>
                                        <td><?php echo e($jembatanDesa->nama_jembatan); ?></td>
                                        <td><?php echo e($jembatanDesa->panjang); ?> M</td>
                                        <td><?php echo e($jembatanDesa->lebar); ?> M</td>
                                        <td>
                                            <span class="badge
                                                <?php if($jembatanDesa->kondisi == 'Baik'): ?> bg-success
                                                <?php elseif($jembatanDesa->kondisi == 'Rusak Ringan'): ?> bg-warning text-dark
                                                <?php elseif($jembatanDesa->kondisi == 'Rusak Berat'): ?> bg-danger
                                                <?php else: ?> bg-secondary <?php endif; ?>">
                                                <?php echo e($jembatanDesa->kondisi); ?>

                                            </span>
                                        </td>
                                        <td><?php echo e($jembatanDesa->lokasi); ?></td>
                                        <td>
    <?php if($jembatanDesa->foto): ?>
        <img src="<?php echo e(asset('storage/foto_jembatan/' . $jembatanDesa->foto)); ?>"
             alt="Foto Jembatan"
             style="max-height: 60px; border-radius: 4px;">
    <?php else: ?>
        <span class="text-muted">Tidak ada</span>
    <?php endif; ?>
</td>


                                        <td><?php echo e($jembatanDesa->created_by); ?></td>
                                        <td>
                                            <span class="badge
                                                <?php if($jembatanDesa->status === 'Approved'): ?> bg-success
                                                <?php elseif($jembatanDesa->status === 'Pending'): ?> bg-warning text-dark
                                                <?php elseif($jembatanDesa->status === 'Arsip'): ?> bg-secondary
                                                <?php elseif($jembatanDesa->status === 'Rejected'): ?> bg-danger
                                                <?php else: ?> bg-light text-dark <?php endif; ?>">
                                                <?php echo e($jembatanDesa->status); ?>

                                            </span>
                                        </td>

                                        
                                        <?php if (isset($component)) { $__componentOriginalf9332b595ad3d3a806f9da4dda8769dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9332b595ad3d3a806f9da4dda8769dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.action-buttons','data' => ['item' => $jembatanDesa,'routePrefix' => 'admin_desa.jembatan-desa','ajukanRoute' => true,'statusField' => 'status']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('action-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($jembatanDesa),'route-prefix' => 'admin_desa.jembatan-desa','ajukan-route' => true,'status-field' => 'status']); ?>
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
                                        <?php if (isset($component)) { $__componentOriginal38ad11554905c4932e89225c76d73c0b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38ad11554905c4932e89225c76d73c0b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.jembatan-desa.modal-detail','data' => ['item' => $jembatanDesa]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('jembatan-desa.modal-detail'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($jembatanDesa)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38ad11554905c4932e89225c76d73c0b)): ?>
<?php $attributes = $__attributesOriginal38ad11554905c4932e89225c76d73c0b; ?>
<?php unset($__attributesOriginal38ad11554905c4932e89225c76d73c0b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38ad11554905c4932e89225c76d73c0b)): ?>
<?php $component = $__componentOriginal38ad11554905c4932e89225c76d73c0b; ?>
<?php unset($__componentOriginal38ad11554905c4932e89225c76d73c0b); ?>
<?php endif; ?>
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

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Acer\Documents\PEMROGRAMMAN\DBS\BPS\desa-laravel-new\resources\views/admin_desa/jembatan-desa/index.blade.php ENDPATH**/ ?>