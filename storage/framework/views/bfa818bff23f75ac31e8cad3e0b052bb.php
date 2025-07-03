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
                        <?php echo e(old('desa_id', $balitaDesa?->desa_id) == $item->id ? 'selected' : ''); ?>>
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
            <input type="text" name="tahun" class="form-control <?php $__errorArgs = ['tahun'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('tahun', $balitaDesa?->tahun)); ?>" id="tahun" placeholder="Tahun">
            <?php echo $errors->first('tahun', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>
        <label for="jenis_balita" class="form-label"><?php echo e(__('Jenis Balita')); ?></label>
        <input type="number" name="jumlah_balita" class="form-control <?php $__errorArgs = ['jumlah_balita'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('jumlah_balita', $balitaDesa?->jumlah_balita)); ?>" id="jumlah_balita" placeholder="Jumlah Balita">
            <?php echo $errors->first('jumlah_balita', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        <?php echo $errors->first('jenis_balita', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

    </div>
    <input type="hidden" name="created_by" value="<?php echo e(Auth::user()->name); ?>">
    <input type="hidden" name="updated_by" class="form-control" value="<?php echo e($kelembagaanDesa->updated_by ?? '-'); ?>">
    <input type="hidden" name="status" class="form-control" value="Arsip" id="status" placeholder="Status">

</div>
<div class="col-md-12 mt20 mt-2">
    <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
</div>
</div>
<?php /**PATH C:\Users\Acer\Documents\PEMROGRAMMAN\DBS\BPS\desa-laravel-new\resources\views/admin_desa/balita-desa/form.blade.php ENDPATH**/ ?>