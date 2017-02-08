    <table class="table table-striped table-border" style="width: 100%;">
    <!-- table panel -->
        <tr><td>Nik</td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td>{{ $karyawan->nik }}</td></tr>

        <tr><td>Nama Karyawan </td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td>{{ $karyawan->nama_karyawan }}</td></tr>

        <tr><td>Pekerjaan </td><td> &nbsp;<b>:</b></td><td>&nbsp;</td><td> {{ $karyawan->pekerjaan->nama_pekerjaan }}</td></tr>

        <tr><td>Tugas </td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td> {{ $karyawan->tugas }}</td></tr>
          
        <tr><td>Nomor Telepone </td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td> {{ $karyawan->no_telp }}</td></tr>

        <tr><td>Alamat </td><td>&nbsp;<b>:</b></td><td>&nbsp;</td><td> {{ $karyawan->alamat }}</td></tr>

    </table>


		<div class="form-group">
				<a href="{{ route('karyawans.index') }}">{!! Form::submit('Kembali', ['class'=>'btn btn-primary btn-block']) !!}</a>
		</div>