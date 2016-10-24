<?php $__env->startSection('conteudo'); ?>

<h1>Listagem de produtos</h1>
  <table class="table">
   <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
  	<tr class="<?php echo e($p->quantidade <= 1 ? 'danger' : ''); ?>"  >
  	<td><?php echo e($p->nome); ?></td>
  	<td><?php echo e($p->valor); ?></td>
  	<td><?php echo e($p->descricao); ?></td>
  	<td><?php echo e($p->quantidade); ?></td>
  	<td> <a href="/produtos/mostra/<?= $p->id; ?>" >
  	    <span class="glyphicon glyphicon-search"></span>
  	     </a>

  	 </td>
     <td> <a href="/produtos/remove/<?php echo e($p->id); ?>" >
        <span class="glyphicon glyphicon-trash"></span>
         </a>

     </td>
  	</tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
  </table>

<?php if(old('nome')): ?>
<div class="alert alert-success">
 Produto <?php echo e(old('nome')); ?> adicionado com sucesso!
 </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>