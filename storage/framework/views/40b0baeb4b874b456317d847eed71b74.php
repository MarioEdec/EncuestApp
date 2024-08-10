

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Editar Encuesta: <?php echo e($encuesta->titulo); ?></h1>

    <form action="<?php echo e(route('encuestas.update', $encuesta->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="titulo">Título de la Encuesta</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="<?php echo e($encuesta->titulo); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Encuesta</button>
    </form>

    <h2>Preguntas</h2>
    <ul>
        <?php $__currentLoopData = $preguntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pregunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($pregunta->pregunta); ?>

                <form action="<?php echo e(route('preguntas.destroy', $pregunta->id)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Añadir Pregunta</h2>
    <form action="<?php echo e(route('preguntas.store', $encuesta->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="encuesta_id" value="<?php echo e($encuesta->id); ?>">
        <div class="form-group">
            <label for="pregunta">Texto de la Pregunta</label>
            <input type="text" name="pregunta" id="pregunta" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Añadir Pregunta</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema-online\resources\views/encuestas/edit.blade.php ENDPATH**/ ?>