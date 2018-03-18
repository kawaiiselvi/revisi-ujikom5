@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li class="active">Daftar Pelamar</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Daftar Pelamar</h2>
				</div>
				<div class="panel-body">
					<form action="{{route('pers.store')}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
					</form>
					<div class="table-responsive">
						<table class="table">
				<thead>
					<tr>
						<th>Tanggal Rilis</th>
						<th>Nama Pelamar</th>
						<th>Profil</th>
						<th>No Telepon</th>
						<th>Kewarganegaraan</th>
						<th>Email</th>
						<th>SD</th>
						<th>SMP</th>
						<th>SMK</th>
						<th>Perguruan Tinggi</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pegawai as $data)
					<tr> 
						<td>{{$data->created_at}}</td>
						<td><a href="{{route('pegawais.show', $data->id)}}">{{$data->nama}}</a></td>
						<td><img src="{{asset('img/'.$data->cover)}}" height="50px"></td>
						<td>{{$data->notlp}}</td>
						<td>{{$data->kewarganegaraan}}</td>
						<td>{{$data->email}}</td>
						<td>{{$data->sd}}</td>
						<td>{{$data->smp}}</td>
						<td>{{$data->sma}}</td>
						<td>{{$data->pt}}</td>
						<td><a class="btn btn-warning" href="{{ url('',$data->id) }}">Terima</a></td>
						<td><a class="btn btn-warning" href="{{ url('',$data->id) }}">Tolak</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection