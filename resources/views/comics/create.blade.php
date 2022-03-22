<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<title>Document</title>
</head>

<body>
	<div class="container p-3">
		<a href="{{route('comics.index')}}" class="btn btn-big btn-primary mb-5">Back to comics</a>
		<form action="{{route('comics.store')}}" method="POST">
			@csrf
			<div class="row">
				<div class="col-6">
					<div class="mb-3">
						<label for="title" class="form-label">Title</label>
						<input type="text" class="form-control" id="title" name="title">
					</div>
				</div>
				<div class="col-6">
					<div class="mb-3">
						<label for="thumb" class="form-label">Thumbnail</label>
						<input type="url" class="form-control" id="thumb" name="thumb">
					</div>
				</div>
				<div class="col-6">
					<div class="mb-3">
						<label for="price" class="form-label">Price</label>
						<input type="number" step="any" class="form-control" id="price" name="price">
					</div>
				</div>
				<div class="col-6">
					<div class="mb-3">
						<label for="series" class="form-label">Series</label>
						<input type="text" class="form-control" id="series" name="series">
					</div>
				</div>
				<div class="col-6">
					<div class="mb-3">
						<label for="sale_date" class="form-label">Sale Date</label>
						<input type="date" class="form-control" id="sale_date" name="sale_date">
					</div>
				</div>
				<div class="col-6">
					<div class="mb-3">
						<label for="type" class="form-label">Type</label>
						<br>
						<select name="type" id="type">
							<option value="comic book">Comic Book</option>
							<option value="graphic novel">Graphic Novel</option>
						</select>
					</div>
				</div>
				<div class="col-12">
					<div class="mb-3">
						<label for="description" class="form-label">Description</label>
						<textarea type="text" class="form-control" id="description" name="description" cols="30" rows="3"></textarea>
					</div>
				</div>
				<div class="col-12 text-center">
					<button type="reset" class="btn btn-danger">Clear</button>
					<button type="submit" class="btn btn-success ms-3">Submit</button>
				</div>
			</div>
		</form>
	</div>
</body>

</html>