	<!-- ########################our blog card######################## -->
	<div class="blogCard" id="blog">
		<div class="container">
			<br><br><br>
			<h1 class="text-vilot text-center text-height">Our Blog</h1>
			<br><br>
			<div class="row">
				@if(count($blogs)>0)
				@foreach($blogs as $key=>$value)
				<div class="col-1"></div>
				<div class="col-md-5">
					<img src="/images/{{ $value->image }}" style="width: 100%; height: 60%;">
					<h3 class="text-vilot">{{ $value->title }}</h3>
					<small class="text-secondary">{{ $value->created_at}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  by <span class="font-weight-bold" style="font-size: 1.2em;">{{ $value->name }} </span></small><br>
					<small class="text-secondary">{!! $value->description !!}</small>
				</div>
				@endforeach
				@endif
			</div>
		</div>
		<br><br><br><br>
	</div>