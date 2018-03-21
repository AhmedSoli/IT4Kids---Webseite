@extends('layouts.app')
@section('content')
<div class="card">
	<div class="card-header">Edit Blog Post</div>
	<div class="card-body">
		<form class="text-center mb-5" action="{{route('destroyPost',['post' => $post->id])}}" method="POST">
			{{ csrf_field() }}
			<button class="btn btn-danger center"><i class="fa fa-trash" aria-hidden="true"></i>
			</button>
		</form>
		<form action="{{route('updatePost',['post' => $post->id])}}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="title">Title</label>
				<input class="form-control" id="title" placeholder="Enter the post title." type="text" name="title" value="{{$post->title}}">
			</div>
			<div class="form-group">
				<label for="image">Image URL</label>
				<input class="form-control" style="background-color:transparent;" id="image" type="text" name="image" value="{{$post->image}}">
			</div>
			
			<div class="row" style="overflow-y: scroll; height:300px;">
				<div class="col-6">
					<div class="form-group">
						<label for="body">Body</label>
						<textarea class="form-control" rows="10" id="body" name="body">{{$post->body}}</textarea>
					</div>
				</div>
				<div class="col-6">
					<i class="fa fa-eye" aria-hidden="true"></i>
					<div id="preview">
					</div>
				</div>
			</div>
			<div class="form-group pt-3">
				<button class="btn-block btn-success btn btn-lg">Update</button>
			</div>
		</form>
	</div>
	@if ($errors->any())
	<div class="alert alert-danger m-5">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
</div>
@endsection
@section('script')
<script src="{{ asset('js/markdown.js') }}"></script>
<script>
	$(document).ready(function(){
		$('#preview').html(markdown.toHTML($('#body').val()));
		$('#body').keypress(function(){
			$('#preview').html(markdown.toHTML($('#body').val()));
		})
	})
</script>
@endsection