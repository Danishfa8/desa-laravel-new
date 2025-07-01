<?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible alert-label-icon rounded-label fade show material-shadow"
        role="alert">
        <i class="ri-check-double-line label-icon"></i>
        <strong>Success</strong> - <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger alert-dismissible alert-label-icon rounded-label fade show material-shadow"
        role="alert">
        <i class="ri-error-warning-line label-icon"></i>
        <strong>Error</strong> - <?php echo e(session('error')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<script>
    setTimeout(() => {
        const successAlert = document.querySelector('.alert.alert-success');
        if (successAlert) {
            successAlert.classList.remove('show');
            successAlert.classList.add('hide');
        }

        const errorAlert = document.querySelector('.alert.alert-danger');
        if (errorAlert) {
            errorAlert.classList.remove('show');
            errorAlert.classList.add('hide');
        }
    }, 5000); // 5 detik
</script>
<?php /**PATH C:\Users\Administrator\Documents\project\desa-laravel-new\resources\views/layouts/messages.blade.php ENDPATH**/ ?>