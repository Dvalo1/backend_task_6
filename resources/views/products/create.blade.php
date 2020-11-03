<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="{{ route('storeproducts') }}" method="POST">
			@csrf
			<input type="text" class="form-control" name="title" placeholder="Product TItle">
			<input type="text" class="form-control" name="short_desc" placeholder="Product description">
			<button class="btn btn-primary">Submit</button>
		</form>
	</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>