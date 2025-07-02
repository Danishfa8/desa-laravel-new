<div id="showModal<?php echo e($pendidikanDesa->id); ?>" class="modal fade" tabindex="-1"
    aria-labelledby="showModalLabel<?php echo e($pendidikanDesa->id); ?>" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showModalLabel<?php echo e($pendidikanDesa->id); ?>">
                    Detail Pendidikan Desa <?php echo e($pendidikanDesa->desa->nama_desa ?? '-'); ?>

                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Nama Desa</strong></div>
                    <div class="col-sm-8"><?php echo e($pendidikanDesa->desa->nama_desa ?? '-'); ?></div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>RT/RW</strong></div>
                    <div class="col-sm-8">
                        <?php echo e(optional($pendidikanDesa->rtRwDesa)->rt ?? '-'); ?>/<?php echo e(optional($pendidikanDesa->rtRwDesa)->rw ?? '-'); ?>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Tahun</strong></div>
                    <div class="col-sm-8"><?php echo e($pendidikanDesa->tahun); ?></div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Jenis Pendidikan</strong></div>
                    <div class="col-sm-8"><?php echo e($pendidikanDesa->jenis_pendidikan); ?></div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Status Pendidikan</strong></div>
                    <div class="col-sm-8"><?php echo e($pendidikanDesa->status_pendidikan); ?></div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Foto</strong></div>
                    <div class="col-sm-8">
                        <?php if($pendidikanDesa->foto): ?>
                            <img src="<?php echo e(asset('storage/foto_pendidikan/' . $pendidikanDesa->foto)); ?>"
                                 alt="Foto Pendidikan"
                                 style="max-width: 100%; height: auto; border: 1px solid #ccc;">
                        <?php else: ?>
                            <span class="text-muted">Tidak ada foto</span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Latitude</strong></div>
                    <div class="col-sm-8"><?php echo e($pendidikanDesa->latitude); ?></div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Longitude</strong></div>
                    <div class="col-sm-8"><?php echo e($pendidikanDesa->longitude); ?></div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"><strong>Dibuat Oleh</strong></div>
                    <div class="col-sm-8"><?php echo e($pendidikanDesa->created_by); ?></div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Administrator\Documents\project\desa-laravel-new\resources\views/layouts/partials/modal/modal_pendidikan.blade.php ENDPATH**/ ?>