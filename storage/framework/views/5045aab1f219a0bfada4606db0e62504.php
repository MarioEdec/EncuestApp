

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Crear Nueva Encuesta</h1>
    <form action="<?php echo e(route('encuestas.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="titulo">Título de la Encuesta</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear Encuesta</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema-online\resources\views/encuestas/create.blade.php ENDPATH**/ ?>