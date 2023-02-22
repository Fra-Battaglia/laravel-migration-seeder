<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Laravel Migration Seeder</title>

	@vite('resources/js/app.js')
</head>
	<body class="bg-black" data-bs-theme="dark">
		<div class="container">
			<div class="row">
				<h1 class="mt-3 text-center text-uppercase fw-bold text-white">Prossimi treni</h1>

				<div class="p-4 bg-dark rounded">
					<div class="trains-table bg-black p-3 w-100">
						<table class="text-warning w-100">
							<thead class="text-white">
								<tr>
									<th><h5 class="text-uppercase fw-bold">Compagnia</h5></th>
									<th><h5 class="text-uppercase fw-bold">Partenza</h5></th>
									<th><h5 class="text-uppercase fw-bold">Ore</h5></th>
									<th><h5 class="text-uppercase fw-bold">Arrivo</h5></th>
									<th><h5 class="text-uppercase fw-bold">Ore</h5></th>
									<th><h5 class="text-uppercase fw-bold">N.treno</h5></th>
									<th><h5 class="text-uppercase fw-bold">Carrozze</h5></th>
									<th><h5 class="text-uppercase fw-bold">Stato</h5></th>
								</tr>
							</thead>
							<tbody>
								@foreach ($trains as $item)
									<tr>
										<td>{{ $item['azienda'] }}</td>
										<td class="text-capitalize">{{ $item['stazione_di_partenza'] }}</td>
										<td>{{ $item['orario_di_partenza'] }}</td>
										<td class="text-capitalize">{{ $item['stazione_di_arrivo'] }}</td>
										<td>{{ $item['orario_di_arrivo'] }}</td>
										<td>{{ $item['codice_treno'] }}</td>
										<td>{{ $item['numero_carrozze'] }}</td>
										<td> 
											<span>
												@if ($item['cancellato'])
													soppresso
												@else
													@if ($item['in_orario'])
														in orario
													@else
														in ritardo
													@endif
												@endif
											</span>
										</td>
										
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>