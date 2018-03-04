@extends('layouts.app')
@section('content')
<div class="container">
	<table class="table table-inverse">
		<thead>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($members as $member)
			<tr>
				<td> {{$member->name}}</td>
				<td> {{$member->description}}</td>
				<td> <a href="{{route('editMember',['member' => $member->id])}}" class="btn btn-success">Edit</a></td>
			</tr>

			@endforeach
		</tbody>
	</table>
</div>
@endsection