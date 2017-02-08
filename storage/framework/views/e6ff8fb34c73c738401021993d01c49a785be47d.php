
    <div class="container" style="padding-top: 5%;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header primary-color white-text">Data Siswa</h3>
                     <div class="card-block">
                    <div class="panel-body">


                        <table class="table table-striped table-border" style="width: 100%;">
                        <!-- table panel -->
                            <tr><td>NIP</td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td><?php echo e($nis->nomor_induk); ?></td></tr>

                            <tr><td>Nama Siswa </td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td><?php echo e($nis->nama_siswa); ?></td></tr>

                            <tr><td>Tanggal Lahir </td><td> &nbsp;<b>:</b></td><td>&nbsp;</td><td> <?php echo e($nis->tanggal_lahir); ?></td></tr>

                            <tr><td>Tempat Lahir </td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td> <?php echo e($nis->tempat_lahir); ?></td></tr>
                              
                            <tr><td>Jenis Kelamin</td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td> <?php echo e($nis->jenis_kelamin); ?></td></tr>

                            <tr><td>Agama </td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td> <?php echo e($nis->agama); ?></td></tr>

                        </table>

                    </div>
                </div>
            </div>

             <div class="card">
                    <h3 class="card-header primary-color white-text">Data Orang Tua</h3>
                     <div class="card-block">
                    <div class="panel-body">


                        <table class="table table-striped table-border" style="width: 100%;">
                        <!-- table panel -->
                            <tr><td>Nama Ayah</td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td><?php echo e($nis->nama_ayah); ?></td></tr>

                            <tr><td>Nama Ibu </td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td><?php echo e($nis->nama_ibu); ?></td></tr>

                            <tr><td>Pekerjaan Ayah </td><td> &nbsp;<b>:</b></td><td>&nbsp;</td><td> <?php echo e($nis->pekerjaan_ayah); ?></td></tr>

                            <tr><td>Pekerjaan Ibu</td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td> <?php echo e($nis->pekerjaan_ibu); ?></td></tr>
                              
                            <tr><td>Alamat Ayah</td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td> <?php echo e($nis->alamat_ayah); ?></td></tr>

                            <tr><td>Alamat Ibu </td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td> <?php echo e($nis->alamat_ibu); ?></td></tr>

                        </table>

                    </div>
                </div>
            </div>

             <div class="card">
                    <h3 class="card-header primary-color white-text">Keterangan</h3>
                     <div class="card-block">
                    <div class="panel-body">


                        <table class="table table-striped table-border" style="width: 100%;">
                        <!-- table panel -->
                            <tr><td>Angkatan</td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td><?php echo e($nis->alumni->angkatan); ?></td></tr>

                            <tr><td>Kelas</td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td><?php echo e($nis->kelas->kelas); ?> <?php echo e($nis->kelas->nama_kelas); ?></td></tr>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="form-group">
                <a href="<?php echo e(route('niss.index')); ?>"><?php echo Form::submit('Kembali', ['class'=>'btn btn-primary btn-block']); ?></a>
        </div>