<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="desa_id" class="form-label"><?php echo e(__('Desa')); ?></label>
            <select name="desa_id" id="desa_id" class="form-control select2 <?php $__errorArgs = ['desa_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <option value="">-- Pilih Desa --</option>
                <?php $__currentLoopData = $desas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>"
                        <?php echo e(old('desa_id', $pendidikanDesa?->desa_id) == $item->id ? 'selected' : ''); ?>>
                        <?php echo e($item->nama_desa); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php echo $errors->first('desa_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>
        <div class="form-group mb-2 mb20">
            <label for="rt_rw_desa_id">RT/RW</label>
            <select name="rt_rw_desa_id" id="rt_rw_desa_id" class="form-control" required>
                <option value="">-- Pilih RT/RW --</option>
            </select>
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tahun" class="form-label"><?php echo e(__('Tahun')); ?></label>
            <input type="number" name="tahun" class="form-control <?php $__errorArgs = ['tahun'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('tahun', $pendidikanDesa?->tahun)); ?>" id="tahun" placeholder="Tahun">
            <?php echo $errors->first('tahun', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>
        <div class="form-group mb-2 mb20">
            <label for="jenis_pendidikan" class="form-label"><?php echo e(__('Jenis Pendidikan')); ?></label>
            <select name="jenis_pendidikan" class="form-control <?php $__errorArgs = ['jenis_pendidikan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                id="jenis_pendidikan">
                <option value="">-- Pilih Jenis Pendidikan --</option>
                <option value="Perpustakaan"
                    <?php echo e(old('jenis_pendidikan', $pendidikanDesa?->jenis_pendidikan) == 'Perpustakaan' ? 'selected' : ''); ?>>
                    Perpustakaan
                </option>
                <option value="SD"
                    <?php echo e(old('jenis_pendidikan', $pendidikanDesa?->jenis_pendidikan) == 'SD' ? 'selected' : ''); ?>>
                    SD
                </option>
                <option value="SMP/MTS"
                    <?php echo e(old('jenis_pendidikan', $pendidikanDesa?->jenis_pendidikan) == 'SMP/MTS' ? 'selected' : ''); ?>>
                    SMP/MTS
                </option>
                <option value="SMA/SMK/MA"
                    <?php echo e(old('jenis_pendidikan', $pendidikanDesa?->jenis_pendidikan) == 'SMA/SMK/MA' ? 'selected' : ''); ?>>
                    SMA/SMK/MA
                </option>
                <option value="Perguruan Tinggi"
                    <?php echo e(old('jenis_pendidikan', $pendidikanDesa?->jenis_pendidikan) == 'Perguruan Tinggi' ? 'selected' : ''); ?>>
                    Perguruan Tinggi
                </option>
                <option value="Pendidikan Non Formal"
                    <?php echo e(old('jenis_pendidikan', $pendidikanDesa?->jenis_pendidikan) == 'Pendidikan Non Formal' ? 'selected' : ''); ?>>
                    Pendidikan Non Formal
                </option>
            </select>
            <?php echo $errors->first(
                'jenis_pendidikan',
                '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
            ); ?>

        </div>
        <div class="form-group mb-2 mb20">
            <label for="status_pendidikan" class="form-label"><?php echo e(__('Status Pendidikan')); ?></label>
            <select name="status_pendidikan" class="form-control <?php $__errorArgs = ['status_pendidikan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                id="status_pendidikan">
                <option value="">-- Pilih Status Pendidikan --</option>
                <option value="Negeri"
                    <?php echo e(old('status_pendidikan', $pendidikanDesa?->status_pendidikan) == 'Negeri' ? 'selected' : ''); ?>>
                    Negeri
                </option>
                <option value="Swasta"
                    <?php echo e(old('status_pendidikan', $pendidikanDesa?->status_pendidikan) == 'Swasta' ? 'selected' : ''); ?>>
                    Swasta
                </option>

            </select>
            <?php echo $errors->first(
                'status_pendidikan',
                '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
            ); ?>

        </div>
        <div class="form-group mb-2 mb20">
            <label for="latitude" class="form-label"><?php echo e(__('Latitude')); ?></label>
            <input type="text" name="latitude" class="form-control <?php $__errorArgs = ['latitude'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('latitude', $pendidikanDesa?->latitude)); ?>" id="latitude" placeholder="Latitude"
                required>
            <?php echo $errors->first('latitude', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

            
        </div>
        <div class="form-group mb-2 mb20">
            <label for="longitude" class="form-label"><?php echo e(__('Longitude')); ?></label>
            <input type="text" name="longitude" class="form-control <?php $__errorArgs = ['longitude'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('longitude', $pendidikanDesa?->longitude)); ?>" id="longitude" placeholder="Longitude"
                required>
            <?php echo $errors->first('longitude', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

            
        </div>
        <div class="form-group mb-2 mb20">
    <label for="foto" class="form-label"><?php echo e(__('Foto')); ?></label>
    <input type="file" name="foto" id="foto" accept="image/*"
        class="form-control <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
        <?php echo e(request()->routeIs('admin_desa.pendidikan-desa.create') ? 'required' : ''); ?>>
    <small class="text-muted">Format: jpg, jpeg, png. Maksimal 2MB.</small>
    <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="invalid-feedback"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <?php if(!empty($pendidikanDesa?->foto)): ?>
        <div class="mt-2">
            <img src="<?php echo e(asset('storage/foto_pendidikan/' . $pendidikanDesa->foto)); ?>" alt="Foto Pendidikan"
                style="max-height: 150px; border: 1px solid #ccc;">
        </div>
    <?php endif; ?>
</div>

        <input type="hidden" name="created_by" value="<?php echo e(Auth::user()->name); ?>">
        <input type="hidden" name="updated_by" class="form-control" value="<?php echo e($kelembagaanDesa->updated_by ?? '-'); ?>">
        <input type="hidden" name="status" class="form-control" value="Arsip" id="status" placeholder="Status">

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
</div>
<?php /**PATH C:\Users\Administrator\Documents\project\desa-laravel-new\resources\views/admin_desa/pendidikan-desa/form.blade.php ENDPATH**/ ?>