@extends('layouts.public')
@section('content')
<div class="container">
	<div class="row">
		<h1 class="center">{{$post->title}}</h1>
	</div>
		<div class="row">
		<div class="jumbotron" style="width:100%; height:300px;background-image: url('{{$post->image}}');background-size:cover;background-repeat: no-repeat;background-position: center center">
		</div>
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