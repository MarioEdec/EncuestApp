

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Lista de Encuestas</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Título</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $encuestas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $encuesta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($encuesta->titulo); ?></td>
                    <td>
                        <a href="<?php echo e(route('encuestas.show', $encuesta->id)); ?>" class="btn btn-info btn-sm">Ver</a>
                        <a href="<?php echo e(route('encuestas.edit', $encuesta->id)); ?>" class="btn btn-primary btn-sm">Editar</a>
                        <form action="<?php echo e(route('encuestas.destroy', $encuesta->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                     
                        <a href="<?php echo e(route('respuestas.create', $encuesta->id)); ?>" class="btn btn-sm" style="background: linear-gradient(45deg, #ffa500, #ff8c00); border: none; color: #fff; padding: 10px 20px; font-size: 1rem; border-radius: 25px; transition: all 0.3s ease; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">Responder</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistema-online\resources\views/encuestas/index.blade.php ENDPATH**/ ?>