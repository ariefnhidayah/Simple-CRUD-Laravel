@extends('layout.main')

@section('title', 'Form Ubah Data Students - Arief Web')


@section('container')
<div class="container">
	<div class="row">
		<div class="col-12">
			<h1 class="mt-3">Ubah Data Students</h1>
			<form method="post" action="/students/{{ $student->id }}">
				@csrf
				@method('PUT')
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" value="{{ $student->nama }}">
					@error('nama')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="nim">NIM</label>
					<input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan NIM" value="{{ $student->nim }}">
					@error('nim')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" value="{{ $student->email }}">
					@error('email')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="jurusan">Jurusan</label>
					<input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" value="{{ $student->jurusan }}">
				</div>
				<button class="btn btn-primary" type="submit">Ubah</button>
				<a href="/students/{{ $student->id }}" class="btn btn-secondary">Kembali</a>
			</form>
		</div>
	</div>
</div>
@endsection