<div id="showModal<?php echo e($pendidikanDesa->id); ?>" class="modal fade" tabindex="-1"
    aria-labelledby="showModalLabel<?php echo e($pendidikanDesa->id); ?>" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showModalLabel<?php echo e($pendidikanDesa->id); ?>">
                    Detail Pendidikan Desa <?php echo e($pendidikanDesa->desa->nama_desa); ?>

                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Nama Desa</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($pendidikanDesa->desa->nama_desa); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>RT/RW</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($pendidikanDesa->rtRwDesa->rt); ?>/<?php echo e($pendidikanDesa->rtRwDesa->rw); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Tahun</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($pendidikanDesa->tahun); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Tahun</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($pendidikanDesa->jenis_pendidikan); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Status Pendidikan</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($pendidikanDesa->status_pendidikan); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Foto</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($pendidikanDesa->foto); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Latitude</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($pendidikanDesa->latitude); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Longitude</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($pendidikanDesa->longitude); ?>

                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Status</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php if($pendidikanDesa->status == 'Arsip'): ?>
                            <span class="badge bg-primary"><?php echo e($pendidikanDesa->status); ?></span>
                        <?php elseif($pendidikanDesa->status == 'Pending'): ?>
                            <span class="badge bg-warning"><?php echo e($pendidikanDesa->status); ?></span>
                        <?php elseif($pendidikanDesa->status == 'Approved'): ?>
                            <span class="badge bg-success"><?php echo e($pendidikanDesa->status); ?></span>
                        <?php elseif($pendidikanDesa->status == 'Rejected'): ?>
                            <span class="badge bg-danger"><?php echo e($pendidikanDesa->status); ?></span>
                        <?php else: ?>
                            <span class="badge bg-secondary"><?php echo e($pendidikanDesa->status); ?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>created By</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($pendidikanDesa->created_by); ?>

                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Reject Reason</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($pendidikanDesa->reject_reason ?? 'Tidak ada keterangan'); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Approved By</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($pendidikanDesa->approved_by ?? 'Belum Di Approved'); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Approved At:</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($pendidikanDesa->approved_at ?? 'Belum Di Approved'); ?>

                    </div>
                </div>
                
                <?php if(
                    (auth()->user()->hasRole('admin_kabupaten') || auth()->user()->hasRole('superadmin')) &&
                        $pendidikanDesa->status == 'Pending'): ?>
                    <hr>

                    <div class="card-body">
                        
                        <form
                            action="<?php echo e(route('approval', ['table' => 'pendidikan_desas', 'id' => $pendidikanDesa->id])); ?>"
                            method="POST" id="approvalForm<?php echo e($pendidikanDesa->id); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="mb-3">
                                <label for="approval_status<?php echo e($pendidikanDesa->id); ?>" class="form-label">
                                    <strong>Status Approval <span class="text-danger">*</span></strong>
                                </label>
                                <select class="form-select" id="approval_status<?php echo e($pendidikanDesa->id); ?>"
                                    name="status" required>
                                    <option value="">-- Pilih Status --</option>
                                    <option value="Approved">Approve</option>
                                    <option value="Rejected">Reject</option>
                                </select>
                            </div>

                            <div class="mb-3" id="reject_reason_container<?php echo e($pendidikanDesa->id); ?>"
                                style="display: none;">
                                <label for="reject_reason<?php echo e($pendidikanDesa->id); ?>" class="form-label">
                                    <strong>Alasan Penolakan <span class="text-danger">*</span></strong>
                                </label>
                                <textarea class="form-control" id="reject_reason<?php echo e($pendidikanDesa->id); ?>" name="reject_reason" rows="3"
                                    placeholder="Masukkan alasan penolakan..."></textarea>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success"
                                    onclick="return confirmApproval<?php echo e($pendidikanDesa->id); ?>()">
                                    <i class="fa fa-save"></i> Proses Approval
                                </button>
                            </div>
                        </form>
                    </div>
                <?php endif; ?>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php /**PATH C:\Users\Acer\Documents\PEMROGRAMMAN\DBS\BPS\desa-laravel-new\resources\views/layouts/partials/modal/modal_pendidikan.blade.php ENDPATH**/ ?>