@extends('layout.main')

@section('title', 'Daftar Students - Arief Web')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="mt-3">Daftar Students</h1>
				@if(session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
				@endif
				<a href="/students/create" class="btn btn-primary mb-3">Tambah</a>
				<ul class="list-group">
					@foreach($students as $student)
					<li class="list-group-item d-flex justify-content-between align-items-center">
						{{ $student->nama }}
						<a href="/students/{{$student->id}}" class="badge badge-info">Detail</a>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection