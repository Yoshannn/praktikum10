@extends('layouts.app')

@section('content')

 <div class="container">

 	<h3>Tambah Data Mahasiswa</h3>
	 <form action="{{ url('/mahasiswa') }}" method="POST">
		 @csrf
	 	<table>
 			<tr>
 				<td>NIM</td>
 				<td><input type="text" name="mhsw_nim"></td>
	 		</tr>
 			<tr>
 				<td>NAMA</td>
 				<td><input type="text" name="mhsw_nama"></td>
 			</tr>
 			<tr>
 				<td>JURUSAN</td>
 				<td>
					<select name="mhsw_jurusan" class="form-control">
						<option value="">--Pilih Jurusan--</option>
						<option value="Sistem Informasi">Sistem Informasi</option>
						<option value="Sistem Komputer">Sistem Komputer</option>
						<option value="Teknik Informatika">Sistem Informatika</option>
					</select>
				</td>
 			</tr>
 			<tr>
 				<td>ALAMAT</td>
 				<td><input type="text" name="mhsw_alamat"></td>
 			</tr>
 			<tr>
 				<td></td>

 				<td><input type="submit" value="SIMPAN"></td>
 			</tr>
 		</table>
 	</form>
 </div>

 @endsection