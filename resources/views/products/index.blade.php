<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<table class="table">
        <tr>
            <td>#</td>
            <td>Product title</td>
            <td>Product Description</td>
            <td>Created By</td>
        </tr>
		@foreach ($products as $product)
		<tr>
		    <td>{{ ++$loop->index }}</td>
		    <td>{{ $product->title }}</td>
		    <td>{{ $product->description }}</td>
		    <td>{{ $product->user_id }}</td>
		</tr>
		@endforeach
	</table>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>