@extends('layouts.public')
@section('content')
<div class="container text-center">
	<div class="row">
		<h3 class="center">Blog</h3>
	</div>
	<div class="row">
		<p class="text-muted center">In unserem Blog können Sie unsere aktuellen Beiträge zum Thema Digitalbildung und Sozialunternehmertum in der Bildungsbranche lesen.</p>
	</div>
	<div class="row">
		@foreach($posts as $post)
		<div class="col-md-3 col-sm-4 col-6 m-2">
			<div class="card">
				<img class="card-img-top" src="{{$post->image}}" style="height:150px" alt="Post Image">
				<div class="card-body">
					<h4 class="card-title"  style="height:75px;overflow-y: scroll;">{{$post->title}}</h4>
					<p class="card-text">{{substr($post->body,0,100)}}</p>
					<a href="{{route('showPost',['post' => $post->id])}}" class="btn btn-primary">Read More</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection