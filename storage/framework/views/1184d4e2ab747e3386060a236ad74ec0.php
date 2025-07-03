<div id="showModal<?php echo e($balitaDesa->id); ?>" class="modal flip" tabindex="-1"
    aria-labelledby="showModalLabel<?php echo e($balitaDesa->id); ?>" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showModalLabel<?php echo e($balitaDesa->id); ?>">
                    Detail Balita Desa <?php echo e($balitaDesa->desa->nama_desa); ?>

                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Nama Desa</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($balitaDesa->desa->nama_desa); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>RT/RW</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($balitaDesa->rtRwDesa->rt); ?>/<?php echo e($balitaDesa->rtRwDesa->rw); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Jenis Balita</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($balitaDesa->jumlah_balita); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Status</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php if($balitaDesa->status == 'Arsip'): ?>
                            <span class="badge bg-primary"><?php echo e($balitaDesa->status); ?></span>
                        <?php elseif($balitaDesa->status == 'Pending'): ?>
                            <span class="badge bg-warning"><?php echo e($balitaDesa->status); ?></span>
                        <?php elseif($balitaDesa->status == 'Approved'): ?>
                            <span class="badge bg-success"><?php echo e($balitaDesa->status); ?></span>
                        <?php elseif($balitaDesa->status == 'Rejected'): ?>
                            <span class="badge bg-danger"><?php echo e($balitaDesa->status); ?></span>
                        <?php else: ?>
                            <span class="badge bg-secondary"><?php echo e($balitaDesa->status); ?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>created By</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($balitaDesa->created_by); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Reject Reason</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($balitaDesa->reject_reason ?? 'Tidak ada keterangan'); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Approved By</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($balitaDesa->approved_by ?? 'Belum Di Approved'); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <strong>Approved At:</strong>
                    </div>
                    <div class="col-sm-8">
                        <?php echo e($balitaDesa->approved_at ?? 'Belum Di Approved'); ?>

                    </div>
                </div>
                
                <?php if(
                    (auth()->user()->hasRole('admin_kabupaten') || auth()->user()->hasRole('superadmin')) &&
                        $balitaDesa->status == 'Pending'): ?>
                    <hr>

                    <div class="card-body">
                        
                        <form action="<?php echo e(route('approval', ['table' => 'balita_desas', 'id' => $balitaDesa->id])); ?>"
                            method="POST" id="approvalForm<?php echo e($balitaDesa->id); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="mb-3">
                                <label for="approval_status<?php echo e($balitaDesa->id); ?>" class="form-label">
                                    <strong>Status Approval <span class="text-danger">*</span></strong>
                                </label>
                                <select class="form-select" id="approval_status<?php echo e($balitaDesa->id); ?>" name="status"
                                    required>
                                    <option value="">-- Pilih Status --</option>
                                    <option value="Approved">Approve</option>
                                    <option value="Rejected">Reject</option>
                                </select>
                            </div>

                            <div class="mb-3" id="reject_reason_container<?php echo e($balitaDesa->id); ?>"
                                style="display: none;">
                                <label for="reject_reason<?php echo e($balitaDesa->id); ?>" class="form-label">
                                    <strong>Alasan Penolakan <span class="text-danger">*</span></strong>
                                </label>
                                <textarea class="form-control" id="reject_reason<?php echo e($balitaDesa->id); ?>" name="reject_reason" rows="3"
                                    placeholder="Masukkan alasan penolakan..."></textarea>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success"
                                    onclick="return confirmApproval<?php echo e($balitaDesa->id); ?>()">
                                    <i class="fa fa-save"></i> Proses Approval
                                </button>
                            </div>
                        </form>
                    </div>


                    <script>
                        document.getElementById('approval_status<?php echo e($balitaDesa->id); ?>').addEventListener('change', function() {
                            const rejectContainer = document.getElementById('reject_reason_container<?php echo e($balitaDesa->id); ?>');
                            const rejectTextarea = document.getElementById('reject_reason<?php echo e($balitaDesa->id); ?>');

                            if (this.value === 'Rejected') {
                                rejectContainer.style.display = 'block';
                                rejectTextarea.required = true;
                            } else {
                                rejectContainer.style.display = 'none';
                                rejectTextarea.required = false;
                                rejectTextarea.value = '';
                            }
                        });

                        function confirmApproval<?php echo e($balitaDesa->id); ?>() {
                            const status = document.getElementById('approval_status<?php echo e($balitaDesa->id); ?>').value;
                            const message = status === 'Approved' ?
                                'Apakah Anda yakin ingin menyetujui data ini?' :
                                'Apakah Anda yakin ingin menolak data ini?';

                            return confirm(message);
                        }
                    </script>
                <?php endif; ?>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php /**PATH C:\Users\Acer\Documents\PEMROGRAMMAN\DBS\BPS\desa-laravel-new\resources\views/layouts/partials/modal/modal_balita.blade.php ENDPATH**/ ?>