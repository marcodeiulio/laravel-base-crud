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
		<a href="{{route('comics.create')}}" class="btn btn-big btn-primary mb-5">Add comic</a>
		<div class="row g-4">
			@foreach($comics as $comic)
			<div class="col-3">
				<div class="card" style="width: 18rem;">
					<img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
					<div class="card-body">
						<h5 class="card-title">{{$comic->title}}</h5>
						{{-- <p class="card-text">{{$comic->description}}</p>
						<p>Type: {{$comic->type}}</p>
						<p>Series: {{$comic->series}}</p>
						<p>Price: {{$comic->price}}</p>
						<p>Sale Date: {{$comic->sale_date}}</p> --}}
					</div>
					<a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">See more</a>
					<a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning">Edit</a>
					<form action="{{route('comics.destroy', $comic->id)}}" method="POST">
						@method('DELETE')
						@csrf
						<button class="btn btn-danger d-block w-100" type="submit">Delete</button>
					</form>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</body>

</html>