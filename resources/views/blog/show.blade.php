@extends('layouts.public')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 col-12">
			<div class="row">
				<h1 style="font-weight: 400;font-size:45px">{{$post->title}}</h1>
			</div>
			<div class="row text-muted" style="font-size:20px">{{$post->created_at->diffForHumans()}}, {{$post->created_at}}</div>
			<div class="row "><span> - {{$post->user->name}}</span></div>
		</div>
		<div class="col-md-8 col-12">
			<div class="jumbotron" style="width:100%; height:200px;background-image: url('{{$post->image}}');background-size:cover;background-repeat: no-repeat;background-position: center center">
			</div>
		</div>
	</div>
	
	<textarea hidden class="form-control" rows="10" id="body" name="body">{{$post->body}}</textarea>
	<div id="preview">
	</div>
</div>
@endsection
@section('script')
<script src="{{ asset('js/markdown.js') }}"></script>
<script>
$(document).ready(function(){
	$('#preview').html(markdown.toHTML($('#body').val()));
})
</script>
@endsection