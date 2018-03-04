@extends('layouts.public')
@section('content')
<div class="container" style="max-width: 800px;">
    <div class="row mb-4">
        <h3 class="center">Wer steckt eigentlich hinter IT4Kids? </h3>
    </div>
    <div class="row">
        <p>Wir sind Studenten der RWTH Aachen, die seit einigen Jahren das Ziel verfolgen Kindern Informatik nahezubringen. Wir sind in drei Projektteilen organisiert, die sich um unsere Software (Hyperlink), Lehrmaterial (Hyperlink) und die Organisation unseres Projektes und der Kurse kümmern. Für Informationen zu einzelnen Mitgliedern einfach auf das Portrait klicken.
        </p>
    </div>
    <div class="row" id="leitung">
        @foreach($leaders as $leader)
        @endforeach
    </div>
    <div class="row" id="members">
        @foreach($members as $members)
        @endforeach
    </div>
</div>
@endsection
@section('script')
@endsection