<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
			crossorigin="anonymous"></script>
	<title>Mon site de recette</title>

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
</head>
<body>
<main>
	<div class="container py-4">

		<div class="row">
			<div class="col-3">
				@include('admin.includes.sidebar')
			</div>
			<div class="col-9">
				<h1>Ajouter recette</h1>
				<hr>

				<form action="{{ route('admin.recette.sauvegarder') }}" method="POST" class="needs-validation" novalidate="">
					@csrf
					<div class="row g-3">
						<div class="col-sm-6">
							<label for="firstName" class="form-label">Titre</label>
							<input type="text" class="form-control" id="firstName" name="titre" placeholder="" value="" required="">
							<div class="invalid-feedback">
								Valid first name is required.
							</div>
						</div>

						<div class="col-sm-6">
							<label for="lastName" class="form-label">Description</label>
							<input type="text" class="form-control" id="lastName" name="description" placeholder="" value="" required="">
							<div class="invalid-feedback">
								Valid last name is required.
							</div>
						</div>

						<div class="col-12">
							<label for="username" class="form-label">URL Photo</label>
							<div class="input-group has-validation">
								<input type="text" class="form-control" id="username" name="url_image" required="">
								<div class="invalid-feedback">
									Your username is required.
								</div>
							</div>
						</div>

						<div class="col-12">
							@foreach($ingredients as $ingredient)
								<div class="form-check">
									<input type="checkbox" class="form-check-input"
										   name="ingredients[]" value="{{ $ingredient->id }}" id="same-address{{ $ingredient->id }}">
									<label class="form-check-label" for="same-address{{ $ingredient->id }}">{{ $ingredient->nom }}</label>
								</div>
							@endforeach
						</div>

					<button class="w-100 btn btn-primary btn-lg" type="submit">Enregistrer ma recette</button>
				</form>
			</div>
		</div>


		<footer class="pt-3 mt-4 text-muted border-top">
			&copy; 2021
		</footer>
	</div>
</main>
</body>
</html>