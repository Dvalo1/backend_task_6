<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<form action="{{ route('adminupdate') }}" method="POST">
			@csrf
			@if(auth()->user()->id == $product->user_id)
            	<input type="hidden" name="id" value="{{ $product->id }}">
				<input type="text" class="form-control" name="title" placeholder="{{ $product->title }}">
				<input type="text" class="form-control" name="short_desc" placeholder="{{ $product->description }}">

				<button class="btn btn-primary">Update</button>
            @else
    			<input type="hidden" name="id" value="{{ $product->id }}">
				<input type="text" class="form-control" name="title" placeholder="{{ $product->title }}" disabled>
				<input type="text" class="form-control" name="short_desc" placeholder="{{ $product->description }}" disabled>

				<button class="btn btn-danger" disabled>No permission to update this product</button>
            @endif
		</form>
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>