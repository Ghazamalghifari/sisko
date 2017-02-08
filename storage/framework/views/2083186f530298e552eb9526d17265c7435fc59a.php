<?php $__env->startSection('content'); ?>
	<div class="container">
						<?php echo Form::open(['url' => route('niss.store'), 'method' => 'post', 'class' => 'form-horizontal']); ?>

						<?php echo $__env->make('niss._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php echo Form::close(); ?>

	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>