<?php $__env->startSection('conteudo'); ?>


    Produto <?php echo e($nome); ?> adicionado com sucesso!
<?php $__env->stopSection(); ?>


<?php echo $__env->make('principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>