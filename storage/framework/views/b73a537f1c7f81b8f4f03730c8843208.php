

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Detalles de la Encuesta: <?php echo e($encuesta->titulo); ?></h1>

 
    <?php if(session('success')): ?>
        <div class="alert alert-success custom-alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <h2>Preguntas</h2>
    <ul>
        <?php $__currentLoopData = $preguntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pregunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($pregunta->pregunta); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <a href="<?php echo e(route('encuestas.edit', $encuesta->id)); ?>" class="btn btn-primary">Editar Encuesta</a>
    <form action="<?php echo e(route('encuestas.destroy', $encuesta->id)); ?>" method="POST" style="display:inline;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger">Eliminar Encuesta</button>
    </form>

   
    <a href="<?php echo e(route('respuestas.create', $encuesta->id)); ?>" class="btn btn-primary" style="background-color: orange; border-color: orange; color: white;">Responder Encuesta</a>
</div>


<style>
    .custom-alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
        font-weight: bold;
    }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema-online\resources\views/encuestas/show.blade.php ENDPATH**/ ?>