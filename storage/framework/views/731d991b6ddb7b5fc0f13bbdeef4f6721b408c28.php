    <table class="table table-striped table-border" style="width: 100%;">
    <!-- table panel -->
        <tr><td>Nik</td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td><?php echo e($karyawan->nik); ?></td></tr>

        <tr><td>Nama Karyawan </td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td><?php echo e($karyawan->nama_karyawan); ?></td></tr>

        <tr><td>Pekerjaan </td><td> &nbsp;<b>:</b></td><td>&nbsp;</td><td> <?php echo e($karyawan->pekerjaan->nama_pekerjaan); ?></td></tr>

        <tr><td>Tugas </td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td> <?php echo e($karyawan->tugas); ?></td></tr>
          
        <tr><td>Nomor Telepone </td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td> <?php echo e($karyawan->no_telp); ?></td></tr>

        <tr><td>Alamat </td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td> <?php echo e($karyawan->alamat); ?></td></tr>

    </table>


		<div class="form-group">
				<a href="<?php echo e(route('karyawans.index')); ?>"><?php echo Form::submit('Kembali', ['class'=>'btn btn-primary btn-block']); ?></a>
		</div>