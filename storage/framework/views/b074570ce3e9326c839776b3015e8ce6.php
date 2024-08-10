

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Responder Encuesta: <?php echo e($encuesta->titulo); ?></h1>

    <!-- Mostrar mensaje de éxito -->
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('respuestas.store', $encuesta->id)); ?>" method="POST">
        <?php echo csrf_field(); ?> <!-- Protección CSRF aquí -->
        <?php $__currentLoopData = $preguntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pregunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-group">
                <label for="respuesta_<?php echo e($pregunta->id); ?>"><?php echo e($pregunta->pregunta); ?></label>
                <input type="text" name="respuestas[<?php echo e($pregunta->id); ?>]" id="respuesta_<?php echo e($pregunta->id); ?>" class="form-control" required>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <button type="submit" class="btn btn-primary" style="background-color: orange; border-color: orange; color: white;">Enviar Respuestas</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema-online\resources\views/respuestas/create.blade.php ENDPATH**/ ?>