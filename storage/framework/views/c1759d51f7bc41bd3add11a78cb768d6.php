<?php $__env->startSection('content'); ?>
<div class="text-center">
    <h1>Bienvenido a Sistemas de Encuestas Online</h1>
    <p class="lead">Gestiona y responde encuestas de manera fácil y rápida.</p>
    <a href="<?php echo e(route('encuestas.create')); ?>" class="btn btn-primary btn-lg mt-3">Crear Nueva Encuesta</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema-online\resources\views/welcome.blade.php ENDPATH**/ ?>