<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text"><center>Tambah Siswa</center></h3><br>

						<?php echo Form::open(['url' => route('siswas.store'), 'method' => 'post', 'class' => 'form-horizontal']); ?>

						<?php echo $__env->make('siswas._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php echo Form::close(); ?>

			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>