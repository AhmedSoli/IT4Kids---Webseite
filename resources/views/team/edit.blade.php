@extends('layouts.app')
@section('content')
<form class="text-center mb-5" action="{{route('destroyMember',['member' => $member->id])}}" method="POST">
	{{ csrf_field() }}
	<button class="btn btn-danger center"><i class="fa fa-trash" aria-hidden="true"></i>
	</button>
</form>
<form class="center" action="{{route('updateMember',['member' => $member->id])}}" method="POST" style="max-width:500px;">
	{{ csrf_field() }}
	<div class="row" style="padding-bottom:5px;">
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">Name</span>
			</div>
			<input class="form-control" id="name" placeholder="Enter Name" type="text" name="name" value="{{$member->name}}">
		</div>
	</div>
	<div class="row" style="padding-bottom:5px;">
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">Description</span>
			</div>
			<input class="form-control" id="description" placeholder="Job title, position..." type="text" name="description" value="{{$member->description}}">
		</div>
	</div>
	<div class="row" style="padding-bottom:5px;">
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">Email</span>
			</div>
			<input class="form-control" id="email" placeholder="Enter email (optional)" type="email" name="email" value="{{$member->email}}">
		</div>
	</div>
	<div class="row" style="padding-bottom:5px;">
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">Image (Url)</span>
			</div>
			<input class="form-control" id="image" placeholder="Upload the image somewhere else and paste the link here" type="text" name="image" value="{{$member->image}}">
		</div>
	</div>
	<div class="row">
		<div class="center">
			<label class="radio-inline" style="margin-right:10px; "><input type="radio" name="leader" value="1" @if($member->leader) checked @endif>  Leader</label>
			<label class="radio-inline"><input type="radio" name="leader" value="0" @if(!$member->leader) checked @endif>  Member</label>
		</div>
		
	</div>
	<div class="row">
		<button class="btn btn-block btn-primary">Save</button>
	</div>
</form>
@if ($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
@endsection