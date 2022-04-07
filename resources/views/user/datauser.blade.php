@extends('layout.app')
@section('content')
<html>
<head>
	<title>Data User Peduli Diri</title>
	
</head>
<body>
<div class="container">
		<a href="/datauser/cetak" class="btn btn-primary" target="_blank">CETAK PDF</a>
		<table class="col-md-12 table table-responsive">
	<thead>
		<tr>
			<th>Nik</th>
			<th>Name</th>
            <th>Username</th>
			<th>Email</th>
			<th>Telp</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $p)
		<tr>
			<td>{{ $p->nik }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->username }}</td>
			<td>{{ $p->email }}</td>
			<td>{{ $p->telp }}</td>
			<td>{{ $p->alamat }}</td>
			<td>
        <button type="submit" class="btn btn-primary "><a href="/datauser/delete/{{$p->id}}">Delete</a></button>
        </td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</body>
</html>
@stop

