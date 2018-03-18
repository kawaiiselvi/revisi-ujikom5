@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/perusahaan/pers') }}">Kembali</a></li>
				<li class="active">Detail Perusahaan</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Detail Perusahaan</h2>
				</div>

				<div class="panel-body">
					
					<div class="col-md-6">
						Nama Perusahaan
					</div>
					<div class="col-md-6">
						{{$lowongan->nama}}
					</div>
					
					<div class="col-md-6">
						Lokasi
					</div>
					<div class="col-md-6">
						{{$lowongan->lokasi}}
					</div>
					
					<div class="col-md-6">
						Deskripsi Pekerjaan
					</div>
					<div class="col-md-6">
						{{$lowongan->deskripsi}}
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection