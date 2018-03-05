@extends('layouts.public')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-4">
			<div class="row text-center">
				<img src="https://it-for-kids.org/sites/default/files/styles/profil/public/ProfilLucas.jpg?itok=saD_jPvO"  style="max-height:150px;" class="img rounded-circle" alt="">
			</div>
			<div class="row">
				
			</div>
		</div>
		<div class="col-8">
			<div class="jumbotron" style="width:100%; height:300px;background-image: url('{{$post->image}}');background-size:cover;background-repeat: no-repeat;background-position: center center">
			</div>
		</div>
	</div>
	<div class="row">
		<h1 class="center">{{$post->title}}</h1>
	</div>
	<div hidden id="body">{{$post->body}}</div>
	<div class="row" id="preview">
	</div>
</div>
@endsection
@section('script')
<script src="{{ asset('js/markdown.js') }}"></script>
<script>
$(document).ready(function(){
			$('#preview').html(markdown.toHTML($('#body').html()));
})
</script>
@endsection