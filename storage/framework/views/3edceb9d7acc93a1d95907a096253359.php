

<?php $__env->startSection('title', 'Editar Postre '); ?>

<?php $__env->startSection('content'); ?>
<section class="form-section" aria-labelledby="edit-title">
    <header>
        <h2 id="edit-title">Editar: <?php echo e($postre->nombre); ?></h2>
    </header>

    <?php if($errors->any()): ?>
        <div class="flash error" role="alert">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li> <?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('postres.update', $postre)); ?>" method="POST" class="postre-form" novalidate>
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <?php echo $__env->make('postres._form', [
            'postre' => $postre,
            'buttonText' => 'Actualizar Postre '
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </form>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\JAMESCRUD\vale\resources\views/postres/edit.blade.php ENDPATH**/ ?>