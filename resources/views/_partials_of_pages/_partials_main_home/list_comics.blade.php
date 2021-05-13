<div class="container w_80">
	<div class="title">
		current series
	</div>
	<div class="comics">
	@foreach ($dati as $index => $comic)
		<a href="{{route('comic', ['id' => $index])}}" class="comic">
			<div class="thumbnail">
	
				<div class="img">
					<img src="{{$comic['thumb']}}" alt="">
				</div>
				<h4>{{$comic['series']}}</h4>
			</div>
		</a>
	@endforeach
	</div>

</div>