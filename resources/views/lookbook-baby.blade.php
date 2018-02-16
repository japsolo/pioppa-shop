@extends('layouts.main')

@section('title', 'Loook Book Baby')


@section('mainContent')
	<!-- Main-Banner -->
	<figure class="inside-main-banner">
		<a href="#">
			<img src="/images/img-look-book-baby-main.jpg" alt="main banner look book">
		</a>
	</figure>
	<!-- /Main-Banner -->

	<!-- Row -->
	<div class="row">
		@for ($i = 0; $i <= 12; $i++)
			@if ($i < 10)
				<div class="col-xs-12">
					<figure class="img-banner"><a href="#"><img src="/images/img-look-book-baby_0{!! $i !!}.jpg" alt=""></a></figure>
				</div>
			@else
				<div class="col-xs-12">
					<figure class="img-banner"><a href="#"><img src="/images/img-look-book-baby_{!! $i !!}.jpg" alt=""></a></figure>
				</div>
			@endif
		@endfor
	</div>
	<!-- /Row -->
@stop
