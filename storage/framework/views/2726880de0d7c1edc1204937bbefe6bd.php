

<?php $__env->startSection('title', 'Listado de Postres '); ?>

<?php $__env->startSection('content'); ?>

<article class="intro">
    <header>
        <h2>Bienvenida al Dashboard de Postres</h2>
        <p>Gestiona tus postres favoritos </p>
    </header>
</article>

<section class="section-postres">
    <header>
        <h3>Lista de Postres</h3>
    </header>

    <div class="postres-grid">

        <?php $__empty_1 = true; $__currentLoopData = $postres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <article class="card-postre">

                <div class="card-body">
                    <h4><?php echo e($postre->nombre); ?></h4>

                    <p class="desc"><?php echo e(Str::limit($postre->descripcion, 80)); ?></p>

                    <p class="price">
                        Precio: $<?php echo e(number_format($postre->precio, 2)); ?>

                    </p>

                    <p class="date">
                        Creado:
                        <time>
                            <?php echo e($postre->fecha_creacion?->format('d-m-Y') ?? '—'); ?>

                        </time>
                    </p>

                    <div class="card-actions">
                        <a href="<?php echo e(route('postres.show', $postre)); ?>" class="btn view">Ver </a>
                        <a href="<?php echo e(route('postres.edit', $postre)); ?>" class="btn edit">Editar </a>

                        <form action="<?php echo e(route('postres.destroy', $postre)); ?>" method="POST" class="inline-form">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn delete">Eliminar </button>
                        </form>
                    </div>
                </div>

            </article>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>No hay postres aún. ¡Crea uno! </p>
        <?php endif; ?>

    </div>

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\JAMESCRUD\vale\resources\views/postres/index.blade.php ENDPATH**/ ?>