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
                        <?php echo e(old('desa_id', $jembatanDesa?->desa_id) == $item->id ? 'selected' : ''); ?>>
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
            <label for="nama_jembatan" class="form-label"><?php echo e(__('Nama Jembatan')); ?></label>
            <input type="text" name="nama_jembatan" class="form-control <?php $__errorArgs = ['nama_jembatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('nama_jembatan', $jembatanDesa?->nama_jembatan)); ?>" id="nama_jembatan"
                placeholder="Nama Jembatan">
            <?php echo $errors->first(
                'nama_jembatan',
                '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
            ); ?>

        </div>
        <div class="form-group mb-2 mb20">
            <label for="panjang" class="form-label"><?php echo e(__('Panjang')); ?></label>
            <input type="number" name="panjang" class="form-control <?php $__errorArgs = ['panjang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('panjang', $jembatanDesa?->panjang)); ?>" id="panjang" placeholder="Panjang (Meter)">
            <?php echo $errors->first('panjang', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>
        <div class="form-group mb-2 mb20">
            <label for="lebar" class="form-label"><?php echo e(__('Lebar')); ?></label>
            <input type="number" name="lebar" class="form-control <?php $__errorArgs = ['lebar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('lebar', $jembatanDesa?->lebar)); ?>" id="lebar" placeholder="Lebar (Meter)">
            <?php echo $errors->first('lebar', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>
        <div class="form-group mb-2 mb20">
            <label for="kondisi" class="form-label"><?php echo e(__('Kondisi')); ?></label>
            <select name="kondisi" class="form-control <?php $__errorArgs = ['kondisi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="kondisi">
                <option value="">-- Pilih Kondisi --</option>
                <option value="Baik" <?php echo e(old('kondisi', $jembatanDesa?->kondisi) == 'Baik' ? 'selected' : ''); ?>>Baik
                </option>
                <option value="Rusak Ringan"
                    <?php echo e(old('kondisi', $jembatanDesa?->kondisi) == 'Rusak Ringan' ? 'selected' : ''); ?>>Rusak Ringan
                </option>
                <option value="Rusak Berat"
                    <?php echo e(old('kondisi', $jembatanDesa?->kondisi) == 'Rusak Berat' ? 'selected' : ''); ?>>Rusak Berat
                </option>
            </select>
            <?php echo $errors->first('kondisi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>
        <div class="form-group mb-2 mb20">
            <label for="lokasi" class="form-label"><?php echo e(__('Lokasi')); ?></label>
            <input type="text" name="lokasi" class="form-control <?php $__errorArgs = ['lokasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('lokasi', $jembatanDesa?->lokasi)); ?>" id="lokasi" placeholder="Lokasi">
            <?php echo $errors->first('lokasi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>
        <input type="hidden" name="created_by" value="<?php echo e(Auth::user()->name); ?>">
        <input type="hidden" name="updated_by" class="form-control" value="<?php echo e($kelembagaanDesa->updated_by ?? '-'); ?>">
        <input type="hidden" name="status" class="form-control" value="Approved" id="status" placeholder="Status">
        <input type="hidden" name="approved_by" value="<?php echo e(Auth::user()->name); ?>">
        <input type="hidden" name="approved_at" value="<?php echo e(now()->format('Y-m-d H:i:s')); ?>">
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
                value="<?php echo e(old('latitude', $jembatanDesa?->latitude)); ?>" id="latitude" placeholder="Latitude">
            <?php echo $errors->first('latitude', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

            <small class="text-danger">*Opsional</small>
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
                value="<?php echo e(old('longitude', $jembatanDesa?->longitude)); ?>" id="longitude" placeholder="Longitude">
            <?php echo $errors->first('longitude', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

            <small class="text-danger">*Opsional</small>
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
</div>
<?php /**PATH C:\Users\Administrator\Documents\project\desa-laravel-new\resources\views/superadmin/jembatan-desa/form.blade.php ENDPATH**/ ?>