<?php $__env->startSection('template_title'); ?>
    Pendidikan Desa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <?php echo $__env->make('layouts.messages', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span id="card_title"><?php echo e(__('Pendidikan Desa')); ?></span>
                    <a href="<?php echo e(route('admin_desa.pendidikan-desa.create')); ?>" class="btn btn-primary btn-sm">
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
                                    <th>Tahun</th>
                                    <th>Jenis</th>
                                    <th>Status</th>
                                    <th>Foto</th>
                                    <th>Created By</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $pendidikanDesas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pendidikanDesa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$i); ?></td>
                                        <td><?php echo e($pendidikanDesa->desa->nama_desa ?? '-'); ?></td>
                                        <td><?php echo e(optional($pendidikanDesa->rtRwDesa)->rt ?? '-'); ?>/<?php echo e(optional($pendidikanDesa->rtRwDesa)->rw ?? '-'); ?></td>
                                        <td><?php echo e($pendidikanDesa->tahun); ?></td>
                                        <td><?php echo e($pendidikanDesa->jenis_pendidikan); ?></td>
                                        <td><?php echo e($pendidikanDesa->status_pendidikan); ?></td>
                                        <td>
                                            <?php if($pendidikanDesa->foto): ?>
                                                <img src="<?php echo e(asset('storage/foto_pendidikan/' . $pendidikanDesa->foto)); ?>"
                                                    alt="Foto Pendidikan"
                                                    style="max-height: 60px; border-radius: 4px;">
                                            <?php else: ?>
                                                <span class="text-muted">Tidak ada</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($pendidikanDesa->created_by); ?></td>
                                        <td>
                                            <span class="badge
                                                <?php if($pendidikanDesa->status === 'Approved'): ?> bg-success
                                                <?php elseif($pendidikanDesa->status === 'Pending'): ?> bg-warning text-dark
                                                <?php elseif($pendidikanDesa->status === 'Arsip'): ?> bg-secondary
                                                <?php elseif($pendidikanDesa->status === 'Rejected'): ?> bg-danger
                                                <?php else: ?> bg-light text-dark <?php endif; ?>">
                                                <?php echo e($pendidikanDesa->status); ?>

                                            </span>
                                        </td>

                                        
                                        <?php if (isset($component)) { $__componentOriginalf9332b595ad3d3a806f9da4dda8769dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9332b595ad3d3a806f9da4dda8769dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.action-buttons','data' => ['item' => $pendidikanDesa,'routePrefix' => 'admin_desa.pendidikan-desa','ajukanRoute' => true,'statusField' => 'status']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('action-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($pendidikanDesa),'route-prefix' => 'admin_desa.pendidikan-desa','ajukan-route' => true,'status-field' => 'status']); ?>
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
                                        
                                        
                                        <?php if (isset($component)) { $__componentOriginal43e44c2161a8130b35a1a535f0b420a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43e44c2161a8130b35a1a535f0b420a0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pendidikan-desa.modal-detail','data' => ['item' => $pendidikanDesa]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('pendidikan-desa.modal-detail'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($pendidikanDesa)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal43e44c2161a8130b35a1a535f0b420a0)): ?>
<?php $attributes = $__attributesOriginal43e44c2161a8130b35a1a535f0b420a0; ?>
<?php unset($__attributesOriginal43e44c2161a8130b35a1a535f0b420a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal43e44c2161a8130b35a1a535f0b420a0)): ?>
<?php $component = $__componentOriginal43e44c2161a8130b35a1a535f0b420a0; ?>
<?php unset($__componentOriginal43e44c2161a8130b35a1a535f0b420a0); ?>
<?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <?php echo $__env->make('layouts.pagination', ['paginator' => $pendidikanDesas], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Administrator\Documents\project\desa-laravel-new\resources\views/admin_desa/pendidikan-desa/index.blade.php ENDPATH**/ ?>