@extends('layouts.public')
@section('content')
<div class="container" style="max-width: 800px;">
    <div class="row mb-4">
        <h3 class="center">Was für Software entwickelt IT4Kids? </h3>
    </div>
    <div class="row">
        <p>Wir entwickeln derzeit eine eigene Software, da wir mit den bestehenden Alternativen nicht zufrieden waren. Gerade im Bereich grafischer Programmierung gibt es sehr gute Angebote <a href="https://scratch.mit.edu/" class="link">Scratch</a>, wir haben aber drei Punkte, mit denen wir unsere Software auf unsere Bedürfnisse im Unterricht anpassen wollen:
    </p>
</div>
<div class="row pb-5 pt-5">
    <div class="col-6 text-center">
        <h3 class=" center">Integration von Lerninhalten</h3>
        <img src="http://via.placeholder.com/250x150/0062bb" alt="" class="img img-fluid center">
    </div>
    <div class="col-6">
        <p>Wir planen die Lerninhalte der Stunden so eng wie möglich mit der Software zu verzahnen. So können die Aufgabenstellungen direkt in der Programmieroberfläche eingebettet werden und Hilfestellungen sind auch immer nur einen Klick entfernt. Des Weiteren planen wir eine fähigkeitsbasierte Progression (mehr dazu auf der Seite <a href="{{route('lehrmaterial')}}" class="link">Lehrmaterial</a>), welche es erfordert, dass Inhalte automatisch in einer spezifischen Sequenz aufeinander folgen.
    </p>
</div>
</div>

<div class="row pb-5 pt-5">
<div class="col-6">
    <p>Um die Lerninhalte gezielt und für alle Schulen anpassen zu können planen wir eine zentrale Speicherung. Auf diese Weise kann einerseits das Curriculum jederzeit angepasst werden, und andererseits für jedes Kind ein individueller Speicherstand angelegt werden. Dieser ist dann auch unabhängig von der Schulinfrastruktur und kann von überall angerufen werden.
    </p>
</div>
<div class="col-6 text-center">
    <h3 class=" center">Cloudlösung und zentrale Inhaltssteuerung</h3>
    <img src="http://via.placeholder.com/250x150/0062bb" alt="" class="img img-fluid center">
</div>
</div>
<div class="row pb-5 pt-5">
<div class="col-6 text-center">
    <h3 class=" center">Learning analytics</h3>
    <img src="http://via.placeholder.com/250x150/0062bb" alt="" class="img img-fluid center">
</div>
<div class="col-6">
    <p>Sobald alle der obigen Funktionen implementiert sind planen wir ein umfangreiches Logging einzurichten. Das erlaubt es uns einerseits der Lehrperson individuelles Feedback zu geben, welcher Schüler derzeit Hilfe bei der vorliegenden Lektion benötigt, sowie größere (und anonymisierte) Datenanalyse, um einerseits unser Material zu verbessern und andererseits auf lange Sicht auch eine Empfehlung für die Leistungsbewertung abgeben zu können.
    </p>
</div>
</div>
@endsection
@section('script')
@endsection