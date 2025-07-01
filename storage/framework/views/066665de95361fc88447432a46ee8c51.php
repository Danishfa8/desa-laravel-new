<?php $__env->startSection('template_title'); ?>
    Pendidikan Desa
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
                                <?php echo e(__('Pendidikan Desa')); ?>

                            </span>

                            <div class="float-right">
                                <a href="<?php echo e(route('admin_desa.pendidikan-desa.create')); ?>"
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
                                        <th>Jenis Pendidikan</th>
                                        <th>Status Pendidikan</th>
                                        <th>Foto</th>
                                        <th>Created By</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $pendidikanDesas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pendidikanDesa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>

                                            <td><?php echo e($pendidikanDesa->desa->nama_desa); ?></td>
                                            <td><?php echo e($pendidikanDesa->rtRwDesa->rt); ?>/<?php echo e($pendidikanDesa->rtRwDesa->rw); ?></td>
                                            <td><?php echo e($pendidikanDesa->tahun); ?></td>
                                            <td><?php echo e($pendidikanDesa->jenis_pendidikan); ?></td>
                                            <td><?php echo e($pendidikanDesa->status_pendidikan); ?></td>
                                            <td><img src="<?php echo e(asset('storage/' . $pendidikanDesa->foto)); ?>"
                                                    alt="Pendidikan Desa"
                                                    style="width: 100px; height: 100px; object-fit: cover;"></td>
                                            <td><?php echo e($pendidikanDesa->created_by); ?></td>
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

                                        </tr>
                                        <?php echo $__env->make('layouts.partials.modal.modal_pendidikan', [
                                            'pendidikanDesa' => $pendidikanDesa,
                                        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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