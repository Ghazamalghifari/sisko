<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
    				<h3 class="card-header primary-color white-text">Siswa Peminjam Buku Perpustakaan (<?php echo e($nama_buku); ?>)</h3>
   					 <div class="card-block">
<?php if ($stok == 0): ?>
	
		<?php else: ?>
						<p> <a class="btn btn-primary" href="<?php echo e(url('/pinjams/create')); ?>/<?php echo e($id); ?>">Tambah</a> </p>	
						<div class="table-responsive" >
<?php endif ?>
							<?php echo $html->table(['class'=>'table table-striped']); ?>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<?php echo $html->scripts(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>