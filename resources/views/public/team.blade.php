@extends('layouts.public')
@section('content')
<div class="container" style="max-width: 800px;">
    <div class="row mb-4">
        <h3 class="center">Wer steckt eigentlich hinter IT4Kids? </h3>
    </div>
    <div class="row">
        <p>Wir sind Studenten der RWTH Aachen, die seit einigen Jahren das Ziel verfolgen Kindern Informatik nahezubringen. Wir sind in drei Projektteilen organisiert, die sich um unsere <a href="route('software')" class="link">Software</a>,  <a  class="link" href="route('lehrmaterial')">Lehrmaterial</a> und die Organisation unseres Projektes und der Kurse kümmern. Für Informationen zu einzelnen Mitgliedern einfach auf das Portrait klicken.
        </p>
    </div>
    <div class="row">
        <h3 class="center">Leitung</h3>
    </div>
    <div class="row">
        @foreach($leaders as $leader)
        <div class="card col-md-3">
            <img class="card-img-top img-fluid" src="{{$leader->image}}" alt="Card image">
            <div class="card-body text-center">
                <h4 class="card-title center">{{$leader->name}}</h4>
                <p class="card-text">{{$leader->description}}</p>
                <span data-toggle="tooltip" title={{$leader->email}}>
                    <i class="fa fa-envelope" style="color:gray;" aria-hidden="true"></i>
                </span>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <h3 class="center">Members</h3>
    </div>
    <div class="row">
        @foreach($members as $member)
        <div class="card col-md-3">
            <img class="card-img-top img-fluid" src="{{$member->image}}" alt="Card image">
            <div class="card-body text-center">
                <h4 class="card-title center">{{$member->name}}</h4>
                <p class="card-text">{{$member->description}}</p>
                <span data-toggle="tooltip" title={{$member->email}}>
                    <i class="fa fa-envelope" style="color:gray;" aria-hidden="true"></i>
                </span>
            </div>
            @endforeach
        </div>
    </div>
</div>
    @endsection
    @section('script')
    <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
    @endsection