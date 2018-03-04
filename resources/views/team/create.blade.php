@extends('layouts.app')
@section('content')
<div class="container">
	<form class="center" action="{{route('storeMember')}}" method="POST" style="max-width:500px;">
		{{ csrf_field() }}
		<div class="row" style="padding-bottom:5px;">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">Name</span>
				</div>
				<input class="form-control" id="name" placeholder="Enter Name" type="text" name="name" value="{{old('name')}}">
			</div>
		</div>
		<div class="row" style="padding-bottom:5px;">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">Description</span>
				</div>
				<input class="form-control" id="description" placeholder="Job title, position..." type="text" name="description" value="{{old('description')}}">
			</div>
		</div>
		<div class="row" style="padding-bottom:5px;">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">Email</span>
				</div>
				<input class="form-control" id="email" placeholder="Enter email (optional)" type="email" name="email" value="{{old('email')}}">
			</div>
		</div>
		<div class="row" style="padding-bottom:5px;">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">Image (Url)</span>
				</div>
				<input class="form-control" id="image" placeholder="Upload the image somewhere else and paste the link here" type="text" name="image" value="{{old('image')}}">
			</div>
		</div>
		<div class="row">
			<div class="center"><label class="radio-inline" style="margin-right:10px; "><input type="radio" name="leader" value="1">  Leader</label>
			<label class="radio-inline"><input type="radio" name="leader" value="0" checked>  Member</label></div>
			
		</div>
		<div class="row">
			<button class="btn btn-block btn-primary">Add New Member</button>
		</div>
	</form>
</div>

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

