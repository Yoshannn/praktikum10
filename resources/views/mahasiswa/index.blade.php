@extends('layouts.app')
@section('content')

 <div class="container">


<form class="form" method="get" action="{{ route('search') }}">
		<div class = "form-group w-50 mb-3">
			<label for="search" class="d-block mr-2">Pencarian</label>
			<input type="text"name="search" class="form-control w-75 d-inline" id="search" placeholder="cari berdasarkan nama">
			<button type="submit" class="btn btn-primary mb-1">Cari</button>
		</div>
</form>
<h3>Daftar Mahasiswa <a href="{{ url('mahasiswa/create') }}">Tambah Data</a></h3>

 <table>
 	<tr>
 		<td>NIM</td>
 		<td>NAMA</td>
 		<td>JURUSAN</td>
 		<td>ALAMAT</td>
 	</tr>

 @foreach($rows as $row)
 <tr>
 	<td>{{ $row->mhsw_nim }}</td>
 	<td>{{ $row->mhsw_nama }}</td>
 	<td>{{ $row->mhsw_jurusan }}</td>
 	<td>{{ $row->mhsw_alamat }}</td>
    <td><a href="{{ url('mahasiswa/' . $row->mhsw_id . '/edit') }}">Edit</a></td>
    <td> <form action="{{ url('mahasiswa/' . $row->mhsw_id) }}" method="POST">
        <input name="_method" type="hidden" value="DELETE">
        @csrf
        <button>Hapus</button>
        </form></td>
 </tr>
 @endforeach
 </table>
 </div>

 @endsection