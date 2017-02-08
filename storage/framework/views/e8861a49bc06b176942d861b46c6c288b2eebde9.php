    <table class="table table-striped table-border" style="width: 100%;">
    <!-- table panel -->
        <tr><td>NIP</td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td><?php echo e($guru->nip); ?></td></tr>

        <tr><td>Nama Guru</td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td><?php echo e($guru->nama_guru); ?></td></tr>
          
        <tr><td>Jenis Kelamin</td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td><?php echo e($guru->jenis_kelamin); ?></td></tr>

        <tr><td>Tempat Tanggal Lahir</td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td><?php echo e($guru->ttl); ?></td></tr>

        <tr><td>Pendidikan Terakhir</td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td><?php echo e($guru->pendidikan); ?></td></tr>

        <tr><td>Tahun Lulus</td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td><?php echo e($guru->tahun_lulus); ?></td></tr>

        <tr><td>Agama</td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td><?php echo e($guru->agama); ?></td></tr>

        <tr><td>Status Pernikahan</td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td><?php echo e($guru->status); ?></td></tr>

        <tr><td>Jabatan</td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td><?php echo e($guru->jabatan); ?></td></tr>
    </table>

            <div class="form-group">
                <a href="<?php echo e(route('gurus.index')); ?>"><?php echo Form::submit('Kembali', ['class'=>'btn btn-primary btn-block']); ?></a>
        </div>