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
		<div class="row g-4">
			@foreach($comics as $comic)
			<div class="col-3">
				<div class="card" style="width: 18rem;">
					<img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
					{{-- <div class="card-body">
						<h5 class="card-title">{{$comic->title}}</h5>
						<p class="card-text">{{$comic->description}}</p>
						<p>Series: {{$comic->series}}</p>
						<p>Type: {{$comic->type}}</p>
						<p>Price: {{$comic->price}}</p>
						<p>Sale Date: {{$comic->sale_date}}</p>
					</div> --}}
					<a href="{{route('comics.show', $loop->iteration)}}" class="btn btn-primary">See more</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</body>

</html>