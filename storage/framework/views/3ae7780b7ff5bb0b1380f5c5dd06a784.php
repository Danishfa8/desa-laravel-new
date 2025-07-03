<div id="showModal<?php echo e($lansiaDesa->id); ?>" class="modal flip" tabindex="-1"
    aria-labelledby="showModalLabel<?php echo e($lansiaDesa->id); ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showModalLabel<?php echo e($lansiaDesa->id); ?>">
                    Detail Lansia Desa <?php echo e($lansiaDesa->desa->nama_desa); ?>

                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Nama Desa</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($lansiaDesa->desa->nama_desa); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>RT/RW</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($lansiaDesa->rtRwDesa->rt); ?>/<?php echo e($lansiaDesa->rtRwDesa->rw); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Jenis Lansia</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($lansiaDesa->jenis_lansia); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Status</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php if($lansiaDesa->status == 'Arsip'): ?>
                            <span class="badge bg-primary"><?php echo e($lansiaDesa->status); ?></span>
                        <?php elseif($lansiaDesa->status == 'Pending'): ?>
                            <span class="badge bg-warning"><?php echo e($lansiaDesa->status); ?></span>
                        <?php elseif($lansiaDesa->status == 'Approved'): ?>
                            <span class="badge bg-success"><?php echo e($lansiaDesa->status); ?></span>
                        <?php elseif($lansiaDesa->status == 'Rejected'): ?>
                            <span class="badge bg-danger"><?php echo e($lansiaDesa->status); ?></span>
                        <?php else: ?>
                            <span class="badge bg-secondary"><?php echo e($lansiaDesa->status); ?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>created By</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($lansiaDesa->created_by); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Reject Reason</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($lansiaDesa->reject_reason ?? 'Tidak ada keterangan'); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Approved By</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($lansiaDesa->approved_by ?? 'Belum Di Approved'); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Approved At:</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($lansiaDesa->approved_at ?? 'Belum Di Approved'); ?>

                    </div>
                </div>
                
                
            </div>

            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php /**PATH C:\Users\Acer\Documents\PEMROGRAMMAN\DBS\BPS\desa-laravel-new\resources\views/layouts/partials/modal/modal_lansia.blade.php ENDPATH**/ ?>