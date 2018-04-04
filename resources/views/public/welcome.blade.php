@extends('layouts.public')
@section('content')
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-12 text-center" >
                <div class="row pb-3">
                    <div class="center">
                        <div class="row" >
                            <a href="https://impactchallenge.withgoogle.com/deutschland/charity/IT4Kids" data-toggle="tooltip"
                                title="Erfahre mehr über Google Impact Challenge" class="winners">
                                Winners of <img src="{{ URL::to('/') }}/images/medal.png" alt="Medal" style="height:60px;">
                            </a>
                            <a onclick="toggle_celebration()" data-toggle="tooltip" title="Klicke hier für eine Überrashung" class="winners">
                                <img id="celebrate" src="{{ URL::to('/') }}/images/celebrate.png" alt="Celebration"
                                style="height:20px; margin-bottom:-25px!important;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <img src="{{ URL::to('/') }}/images/robot.gif" style="height:150px;margin-left:auto;margin-right:auto;" id="robot">
                </div>
            </div>
            <div class="col-sm-8 col-12">
                <div>
                    <span style="font-size: 50px;line-height: 200%;opacity: 0.2;">❝</span>
                    <p  style="margin-top:-40px;color:gray">
                        <i>Everybody should learn how to  <strong style="color:black">code</strong>, because it teaches you how to  <strong style="color:black">think</strong>.
                        <br>
                        <span style="color:black;font-size: small;">- Steve Jobs</span>
                        </i>
                    </p>
                </div>
                @include('reusableComponents.console')
            </div>
        </div>
    </div>
</section>
<section id="cards" style="margin-top:200px;background:url('/images/hypnotize.png');">
    <div class="container">
        <div class="row pb-3" >
            <div class="col-6">
                <div class="card text-center" id="lehrmaterial" style="height:250px;margin-top: -50px;">
                    <h3 class="heading" style="font-size: xx-large;padding-top:10%" id="lehrmaterialHeading">Lehrmaterial</h3>
                    <p id="lehrmaterialText" style="padding-top:5%;background-color:rgba(255, 255, 255, 0.67);">
                        Wir haben aus unseren Erfahrungen der letzten Jahre bereits Vorlagen und Empfehlungen abgeleitet, wie Informatikkurse und –AGs durchgeführt werden können. Jetzt kümmern wir uns darum dies in ein ganzheitliches Konzept zu gießen, mit dem Kurse unkompliziert an jeder Schule durchgeführt werden können.
                    </p>
                    <div style="position: absolute;bottom: 25px;right: 25px;">
                        <a href="/lehrmaterial">Mehr Erfahren <i class="fa fa-external-link" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card card2 text-center" id="software" style="height:250px;margin-top: -50px">
                    <h3 class="heading" style="font-size: xx-large;padding-top:10%" id="softwareHeading">Software</h3>
                    <p  id="softwareText" style="padding-top:5%;background-color:rgba(255, 255, 255, 0.67);">Unsere momentan laufenden Kurse arbeiten mit <a href="https://scratch.mit.edu/" style="color:red;">Scratch</a>, doch wir wollen die einfache Bedienung noch um einige Features wie integrierte Lernhilfen, Fortschritts-Tracking und Vorlagen in unserer eigenen <a href="https://github.com/IT4Kids/easypie" style="color:red">Software</a> erweitern.
                    </p>
                </div>
                <div style="position: absolute;bottom: 25px;right: 25px;">
                    <a href="/software">Mehr Erfahren <i class="fa fa-external-link" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@include('reusableComponents.blog')
@include('reusableComponents.teamPhoto')
@include('reusableComponents.contactUs')
@endsection
@section('script')
<script>
$('#lehrmaterialText').hide();
$('#lehrmaterial').mouseover(function(){
$('#lehrmaterialText').show();
$('#lehrmaterialHeading').hide();
});
$('#lehrmaterial').mouseout(function(){
$('#lehrmaterialText').hide();
$('#lehrmaterialHeading').show();
});
$('#softwareText').hide();
$('#software').mouseover(function(){
$('#softwareText').show();
$('#softwareHeading').hide();
});
$('#software').mouseout(function(){
$('#softwareText').hide();
$('#softwareHeading').show();
});
</script>
<script src="{{asset('js/fireworks.js')}}"></script>
<script src="{{asset('js/typed.js')}}"></script>
<script src="{{asset('js/welcome.js')}}"></script>
@endsection
@section('style')
<style>
@media (min-width:576px) {
    .winners {
        padding-top:50px;
    }
}
@media (min-width: 769px) {
.card p {
padding-left:5%;
padding-right: 5%;
}
}
@media (max-width: 991px) {
#cards .card {
height:350px !important;
}
#cards .card h3 {
padding-top:25% !important;
}
}
.box {
height: 10px;
width: 10px;
}
.fl {
float:left;
}
.fr {
float:right;
}
.blue {
opacity:0.75;
}
.red {
opacity:0.75;
}
</style>
@endsection