<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SpecsPhones API - Information Phones Specification for Public</title>

	<!--Fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
	<!-- BS5 CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<!--Custom CSS-->
	<link rel="stylesheet" href="{{asset('css/home.css')}}">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container-fluid">
		<a class="navbar-brand fw-bold text-white" href="#"><h4 class="fs-4 fw-bolder">SpecsPhones</h4></a>
		</div>
	</div>
</nav>

<!--Header-->
<div class="container-fluid">
	<div class="row mb-3 text-center" id="header">
		<div class="col-12 px-3 py-5">
			<h1 class="fw-1 text-white">
				SpecsPhones - API Phones Specification FREE
			</h1>
			<br>
			<p class="text-white">
				An API that can be used to display cellphone data, detailed cellphone specification data, data list brands and search for cellphone data according to the brand name	
			</p>
			<br>
			<a href="#access" class="btn btn-lg btn-light mb-3 mr-2">
				<i class="fas fa-info-circle"></i> Explore More
			</a>
			<a class="btn btn-lg btn-light mb-3 ml-2" href="https://github.com/ihzarizkyk/specsphones" target="_blank">
				<i class="fab fa-github"></i> Github Repo
			</a>
		</div>
	</div>
</div>

<div class="container text-center">

	<h2 class="fs-2 fw-bolder mt-5" id="access">
		Endpoints Access
	</h2>

	<div class="row px-3 py-5 mb-2">
		<div class="col-12 px-2 py-4">
			<div class="card">
				<div class="card-body">
					<h3 class="fs-3 fw-bolder text-white">
						[GET] All Products Data
					</h3>
					<p class="text-secondary text-white">
						specsphones.rf.gd/api/products/all
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row px-3 py-5 mb-2">
		<div class="col-12 px-2 py-4">
			<div class="card">
				<div class="card-body">
					<h3 class="fs-3 fw-bolder text-white">
						[GET] Detail Products Data
					</h3>
					<p class="text-secondary text-white">
						specsphones.rf.gd/api/products/detail/{id}
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row px-3 py-5 mb-2">
		<div class="col-12 px-2 py-4">
			<div class="card">
				<div class="card-body">
					<h3 class="fs-3 fw-bolder text-white">
						[POST] Search Products Data by Brands name with key parameter
					</h3>
					<p class="text-secondary text-white">
						specsphones.rf.gd/api/products/search?search=Key
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row px-3 py-5 mb-2">
		<div class="col-12 px-2 py-4">
			<div class="card">
				<div class="card-body">
					<h3 class="fs-3 fw-bolder text-white">
						[GET] All Brands Data
					</h3>
					<p class="text-secondary text-white">
						specsphones.rf.gd/api/brands/all
					</p>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>	
</body>
<footer class="footer px-2 py-3">
	<p class="text-center text-white">Copyright &copy; 2022</p>
	<p class="text-center text-white mb-3"><i class="fas fa-heart" style="color: red;"></i> Created by ihzarizky</p>
</footer>
</html>