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
                        <?php echo e(old('desa_id', $saranaIbadahDesa?->desa_id) == $item->id ? 'selected' : ''); ?>>
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
            <input type="number" min="1900" max="2099" name="tahun"
                class="form-control <?php $__errorArgs = ['tahun'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('tahun', $saranaIbadahDesa?->tahun)); ?>" id="tahun" placeholder="Tahun">
            <?php echo $errors->first('tahun', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>
        <div class="form-group mb-2 mb20">
            <label for="jenis_sarana_ibadah" class="form-label"><?php echo e(__('Jenis Sarana Ibadah')); ?></label>
            <select name="jenis_sarana_ibadah" class="form-control <?php $__errorArgs = ['jenis_sarana_ibadah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                id="jenis_sarana_ibadah">
                <option value="">-- Pilih Jenis Sarana Ibadah --</option>
                <option value="Masjid"
                    <?php echo e(old('jenis_sarana_ibadah', $saranaIbadahDesa?->jenis_sarana_ibadah) == 'Masjid' ? 'selected' : ''); ?>>
                    Masjid
                </option>
                <option value="Mushola"
                    <?php echo e(old('jenis_sarana_ibadah', $saranaIbadahDesa?->jenis_sarana_ibadah) == 'Mushola' ? 'selected' : ''); ?>>
                    Mushola
                </option>
                <option value="Gereja"
                    <?php echo e(old('jenis_sarana_ibadah', $saranaIbadahDesa?->jenis_sarana_ibadah) == 'Gereja' ? 'selected' : ''); ?>>
                    Gereja
                </option>
                <option value="Pura"
                    <?php echo e(old('jenis_sarana_ibadah', $saranaIbadahDesa?->jenis_sarana_ibadah) == 'Pura' ? 'selected' : ''); ?>>
                    Pura
                </option>
                <option value="Vihara"
                    <?php echo e(old('jenis_sarana_ibadah', $saranaIbadahDesa?->jenis_sarana_ibadah) == 'Vihara' ? 'selected' : ''); ?>>
                    Vihara
                </option>
                <option value="Kelenteng"
                    <?php echo e(old('jenis_sarana_ibadah', $saranaIbadahDesa?->jenis_sarana_ibadah) == 'Kelenteng' ? 'selected' : ''); ?>>
                    Kelenteng
                </option>
                <option value="Kantor Lembaga Keagamaan"
                    <?php echo e(old('jenis_sarana_ibadah', $saranaIbadahDesa?->jenis_sarana_ibadah) == 'Kantor Lembaga Keagamaan' ? 'selected' : ''); ?>>
                    Kantor Lembaga Keagamaan
                </option>
            </select>
            <?php echo $errors->first(
                'jenis_sarana_ibadah',
                '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
            ); ?>

        </div>
        <div class="form-group mb-2 mb20">
            <label for="nama_sarana_ibadah" class="form-label"><?php echo e(__('Nama Sarana Ibadah')); ?></label>
            <input type="text" name="nama_sarana_ibadah"
                class="form-control <?php $__errorArgs = ['nama_sarana_ibadah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('nama_sarana_ibadah', $saranaIbadahDesa?->nama_sarana_ibadah)); ?>" id="nama_sarana_ibadah"
                placeholder="Nama Sarana Ibadah">
            <?php echo $errors->first(
                'nama_sarana_ibadah',
                '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>',
            ); ?>

        </div>
        <div class="form-group mb-2 mb20">
            <label for="foto" class="form-label"><?php echo e(__('Foto')); ?></label>
            <input type="file" name="foto" class="form-control <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('foto', $saranaIbadahDesa?->foto)); ?>" id="foto" placeholder="Foto" required>
            <?php echo $errors->first('foto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

            <?php if(isset($saranaIbadahDesa->foto)): ?>
                            <div class="mt-2">
                                <img src="<?php echo e(asset('storage/sarana-ibadah-desa/' . $saranaIbadahDesa->foto)); ?>" alt="Foto Sarana Ibadah"
                                    style="max-height: 150px; border: 1px solid #ccc;">
                            </div>
                      <?php endif; ?>

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
                value="<?php echo e(old('latitude', $saranaIbadahDesa?->latitude)); ?>" id="latitude" placeholder="Latitude"
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
                value="<?php echo e(old('longitude', $saranaIbadahDesa?->longitude)); ?>" id="longitude" placeholder="Longitude"
                required>
            <?php echo $errors->first('longitude', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>
        <input type="hidden" name="created_by" value="<?php echo e(Auth::user()->name); ?>">
        <input type="hidden" name="updated_by" class="form-control" value="<?php echo e($kelembagaanDesa->updated_by ?? '-'); ?>">
        <input type="hidden" name="status" class="form-control" value="Arsip" id="status" placeholder="Status">

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
</div>
<?php /**PATH C:\Users\Acer\Documents\PEMROGRAMMAN\DBS\BPS\desa-laravel-new\resources\views/admin_desa/sarana-ibadah-desa/form.blade.php ENDPATH**/ ?>