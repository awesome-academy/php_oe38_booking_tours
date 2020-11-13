<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="{{ mix('css/client.css' )}}" rel="stylesheet">
    <link href="{{ mix('fonts/font-awe.css' )}}" rel="stylesheet">
    <base href="{{ asset('') }}">
	<script type="text/javascript" src="{{ mix('js/client.js') }}"></script>
</head>
<body>
    <h1>tets</h1>
    <div class="row container" style="text-align: center;">
				<table class="table table-hover ">
					<thead style="text-align: center;">
						<tr class="table table-bordered table-danger">
							<th>STT</th>
							<th>Name</th>
							<th>Usename</th>
							<th colspan="3">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($user as $key => $value)
					
						<tr class="table table-bordered ">
							<td class="">{{ ++$key }}</td>
							<td class="">{{ $value->name }}</td>
							<td class="">{{ $value->username }}</td>
							<td class="">
								
							<a href="{{ route('user.edit', $value)}}" >
									<i class="fas fa-edit btn btn-primary"></i>
								</a>
								
							
							</td>
						</tr>
					@endforeach()
					</tbody>	
				</table>
		</div>
</body>
</html>