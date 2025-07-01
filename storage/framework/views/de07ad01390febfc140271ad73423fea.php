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
                    <span id="card_title"><?php echo e(__('Jembatan Desa (Admin Kabupaten)')); ?></span>
                </div>

                <div class="card-body bg-white">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle">
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
                                                <?php else: ?> bg-secondary
                                                <?php endif; ?>">
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
                                                <?php elseif($jembatanDesa->status === 'Rejected'): ?> bg-danger
                                                <?php else: ?> bg-secondary <?php endif; ?>">
                                                <?php echo e($jembatanDesa->status); ?>

                                            </span>
                                        </td>
                                        <td class="d-flex gap-1 flex-wrap">
                                            
                                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#showModal<?php echo e($jembatanDesa->id); ?>">
                                                <i class="las la-eye"></i> Lihat
                                            </button>

                                            <?php if (isset($component)) { $__componentOriginal9c9c2e19806ec22f625804e04fc2ccfd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9c9c2e19806ec22f625804e04fc2ccfd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button-edit','data' => ['routePrefix' => 'admin_kabupaten.jembatan-desa','id' => $jembatanDesa->id,'status' => $jembatanDesa->status]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button-edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['routePrefix' => 'admin_kabupaten.jembatan-desa','id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($jembatanDesa->id),'status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($jembatanDesa->status)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9c9c2e19806ec22f625804e04fc2ccfd)): ?>
<?php $attributes = $__attributesOriginal9c9c2e19806ec22f625804e04fc2ccfd; ?>
<?php unset($__attributesOriginal9c9c2e19806ec22f625804e04fc2ccfd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9c9c2e19806ec22f625804e04fc2ccfd)): ?>
<?php $component = $__componentOriginal9c9c2e19806ec22f625804e04fc2ccfd; ?>
<?php unset($__componentOriginal9c9c2e19806ec22f625804e04fc2ccfd); ?>
<?php endif; ?>

                                            
                                            <?php if (isset($component)) { $__componentOriginal9fd32c824925bf04543417b9ac28eb7a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9fd32c824925bf04543417b9ac28eb7a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.approve-reject-buttons','data' => ['item' => $jembatanDesa,'table' => 'jembatan_desas']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('approve-reject-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($jembatanDesa),'table' => 'jembatan_desas']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9fd32c824925bf04543417b9ac28eb7a)): ?>
<?php $attributes = $__attributesOriginal9fd32c824925bf04543417b9ac28eb7a; ?>
<?php unset($__attributesOriginal9fd32c824925bf04543417b9ac28eb7a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9fd32c824925bf04543417b9ac28eb7a)): ?>
<?php $component = $__componentOriginal9fd32c824925bf04543417b9ac28eb7a; ?>
<?php unset($__componentOriginal9fd32c824925bf04543417b9ac28eb7a); ?>
<?php endif; ?>
                                        </td>
                                    </tr>

                                    
                                    <div class="modal fade" id="showModal<?php echo e($jembatanDesa->id); ?>" tabindex="-1" aria-labelledby="showModalLabel<?php echo e($jembatanDesa->id); ?>" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="showModalLabel<?php echo e($jembatanDesa->id); ?>">Detail Jembatan Desa</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <ul class="list-group list-group-flush">
                                                    <?php if($jembatanDesa->foto): ?>
    <div class="text-center mb-3">
        <img src="<?php echo e(asset('storage/foto_jembatan/' . $jembatanDesa->foto)); ?>"
             alt="Foto Jembatan"
             class="img-fluid rounded shadow-sm"
             style="max-height: 300px;">
    </div>
<?php endif; ?>

                                                        <li class="list-group-item"><strong>Desa:</strong> <?php echo e($jembatanDesa->desa->nama_desa ?? '-'); ?></li>
                                                        <li class="list-group-item"><strong>RT/RW:</strong> <?php echo e($jembatanDesa->rtRwDesa->rt ?? '-'); ?>/<?php echo e($jembatanDesa->rtRwDesa->rw ?? '-'); ?></li>
                                                        <li class="list-group-item"><strong>Nama Jembatan:</strong> <?php echo e($jembatanDesa->nama_jembatan); ?></li>
                                                        <li class="list-group-item"><strong>Panjang:</strong> <?php echo e($jembatanDesa->panjang); ?> meter</li>
                                                        <li class="list-group-item"><strong>Lebar:</strong> <?php echo e($jembatanDesa->lebar); ?> meter</li>
                                                        <li class="list-group-item"><strong>Kondisi:</strong> <?php echo e($jembatanDesa->kondisi); ?></li>
                                                        <li class="list-group-item"><strong>Lokasi:</strong> <?php echo e($jembatanDesa->lokasi); ?></li>
                                                        <li class="list-group-item"><strong>Created By:</strong> <?php echo e($jembatanDesa->created_by); ?></li>
                                                        <li class="list-group-item"><strong>Status:</strong> <?php echo e($jembatanDesa->status); ?></li>
                                                        <?php if($jembatanDesa->status === 'Approved'): ?>
                                                            <li class="list-group-item"><strong>Approved By:</strong> <?php echo e($jembatanDesa->approved_by); ?></li>
                                                            <li class="list-group-item"><strong>Approved At:</strong> <?php echo e($jembatanDesa->approved_at); ?></li>
                                                        <?php endif; ?>
                                                        <li class="list-group-item"><strong>Latitude:</strong> <?php echo e($jembatanDesa->latitude ?? '-'); ?></li>
                                                        <li class="list-group-item"><strong>Longitude:</strong> <?php echo e($jembatanDesa->longitude ?? '-'); ?></li>
                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Administrator\Documents\project\desa-laravel-new\resources\views/admin_kabupaten/jembatan-desa/index.blade.php ENDPATH**/ ?>