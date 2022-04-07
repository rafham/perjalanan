<html>
<head>
	<title>Data User Pedli Diri</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
            
		}
	</style>
	<center>
		<h5>Data User Pedli Diri</h4>
	</center>
 
	<table border='1' cellpadding="3" cellspacing="0">
		<thead>
			<tr>
				<th>Nik</th>
				<th>Name</th>
                <th>Userame</th>
				<th>Email</th>
				<th>Telp</th>
				<th>Alamat</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $p)
			<tr>
                    <td>{{ $p->nik ?? "Data Kosong" }}</td>
                    <td>{{ $p->name ?? "Data Kosong" }}</td>
                    <td>{{ $p->username ?? "Data Kosong" }}</td>
					<td>{{ $p->email ?? "Data Kosong" }}</td>
					<td>{{ $p->telp ?? "Data Kosong" }}</td>
					<td>{{ $p->alamat ?? "Data Kosong" }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>