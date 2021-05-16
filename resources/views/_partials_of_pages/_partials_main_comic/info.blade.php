<div class="info">
	<div class="container w_80">
		<div class="talent">
			<h2>Talent</h2>
			<div class="art">
				<h3>Art by:</h3>
				<div class="content">
					@foreach ($comic['artists'] as $artist)
					<span>
						{{$artist}}
						@if ($loop->last)
						@else echo ,
						@endif
					</span>
					@endforeach
				</div>
			</div>
			<div class="written">
				<h3>Write by:</h3>
				<div class="content">
					@foreach ($comic['writers'] as $writers)
					<span>
						{{$writers}}
						@if ($loop->last)
						@else echo ,
						@endif
					</span>
					@endforeach
				</div>
			</div>
		</div>
		<div class="specs">
			<h2>Specs</h2>
			<div class="series">
				<h3>Series:</h3>
				<div class="content">
					{{$comic['series']}}
				</div>
			</div>
			<div class="price">
				<h3>U.S. Price:</h3>
				<div class="content">
					{{$comic['price']}}
				</div>
			</div>
			<div class="sale_date">
				<h3>On Sale Date:</h3>
				<div class="content">
					{{$comic['sale_date']}}
				</div>
			</div>

		</div>
	</div>
</div>