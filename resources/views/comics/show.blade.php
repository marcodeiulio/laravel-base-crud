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
	<a href="{{route('comics.index')}}" class="btn btn-big btn-primary">Back to comics</a>
	<div class="container p-3">
		<div class="row justify-content-center">
			<div class="col-6 d-flex justify-content-center">
				<div class="card" style="width: 18rem;">
					<img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
					<div class="card-body">
						<h5 class="card-title">{{$comic->title}}</h5>
						<p class="card-text">{{$comic->description}}</p>
						<p>Series: {{$comic->series}}</p>
						<p>Type: {{$comic->type}}</p>
						<p>Price: {{$comic->price}}</p>
						<p>Sale Date: {{$comic->sale_date}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>