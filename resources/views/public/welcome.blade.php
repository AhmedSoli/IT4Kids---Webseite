@extends('layouts.public')
@section('content')
<section id="main">
    <div class="container">
        <div class="row">
            <div class="center">
                <div class="row">
                    <a href="https://impactchallenge.withgoogle.com/deutschland/charity/IT4Kids" data-toggle="tooltip"
                        title="Erfahre mehr über Google Impact Challenge">
                        Winners of <img src="{{ URL::to('/') }}/images/medal.png" alt="Medal" style="height:60px;">
                    </a>
                    <a onclick="toggle_celebration()" data-toggle="tooltip" title="Klicke hier für eine Überrashung">
                        <img id="celebrate" src="{{ URL::to('/') }}/images/celebrate.png" alt="Celebration"
                        style="height:20px; margin-bottom:-25px!important;">
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 text-center" style="padding-top: 100px;">
                <img src="{{ URL::to('/') }}/images/robot.gif" style="height:200px;" id="robot">
            </div>
            <div class="col-sm-6">
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


<section id="cards" style="background-color:#3A3A3C; margin-top:200px;">
    <div class="container">
        <div class="row pb-3" >
            <div class="col-md-6">
                <div class="card text-center" id="lehrmaterial" style="height:250px;margin-top: -50px;">
                    <div>
                        <span class="box red fl"></span>
                        <span class="box blue fl"></span>
                        <span>
                            <span class="box blue fr"></span>
                            <span class="box red fr"></span>
                        </span>
                        
                    </div>
                    <div>
                        <span class="box blue fl"></span>
                        <span class="box red fr"></span>
                    </div>
                    <h3 class="heading" style="font-size: xx-large;padding-top:10%" id="lehrmaterialHeading">Lehrmaterial</h3>
                    <p id="lehrmaterialText" style="padding-top:5%;">
                        Wir haben aus unseren Erfahrungen der letzten Jahre bereits Vorlagen und Empfehlungen abgeleitet, wie Informatikkurse und –AGs durchgeführt werden können. Jetzt kümmern wir uns darum dies in ein ganzheitliches Konzept zu gießen, mit dem Kurse unkompliziert an jeder Schule durchgeführt werden können.
                    </p>
                    <div style="position: absolute;bottom: 25px;right: 25px;">
                        <a href="/lehrmaterial">Mehr Erfahren <i class="fa fa-external-link" aria-hidden="true"></i></a>
                    </div>
                    <div style="position:absolute;bottom:10px;width:100%;">
                        <span class="box blue fr"></span>
                        <span class="box red fl"></span>
                    </div>
                    <span style="width:100%;position:absolute;bottom:0px;">
                        <span>
                            <span class="box blue fl"></span>
                            <span class="box red fl"></span>
                        </span>
                        <span>
                            <span class="box red fr"></span>
                        <span class="box blue fr"></span>
                        </span>
                    </span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card2 text-center" id="software" style="height:250px;margin-top: -50px">
                    <div>
                        <span class="box red fl"></span>
                        <span class="box blue fl"></span>
                        <span>
                            <span class="box blue fr"></span>
                            <span class="box red fr"></span>
                        </span>
                        
                    </div>
                    <div>
                        <span class="box blue fl"></span>
                        <span class="box red fr"></span>
                    </div>
                    <h3 class="heading" style="font-size: xx-large;padding-top:10%" id="softwareHeading">Software</h3>
                    <p  id="softwareText" style="padding-top:5%">Unsere momentan laufenden Kurse arbeiten mit <a href="https://scratch.mit.edu/" style="color:red;">Scratch</a>, doch wir wollen die einfache Bedienung noch um einige Features wie integrierte Lernhilfen, Fortschritts-Tracking und Vorlagen in unserer eigenen <a href="https://github.com/IT4Kids/easypie" style="color:red">Software</a> erweitern.
                </p>
                <div style="position: absolute;bottom: 25px;right: 25px;">
                    <a href="/software">Mehr Erfahren <i class="fa fa-external-link" aria-hidden="true"></i></a>
                </div>
                <div style="position:absolute;bottom:10px;width:100%;">
                        <span class="box blue fr"></span>
                        <span class="box red fl"></span>
                    </div>
                    <span style="width:100%;position:absolute;bottom:0px;">
                        <span>
                            <span class="box blue fl"></span>
                            <span class="box red fl"></span>
                        </span>
                        <span>
                            <span class="box red fr"></span>
                        <span class="box blue fr"></span>
                        </span>
                    </span>
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
@media (max-width: 768px) {
.card2 {
margin-top:15px !important;
margin-bottom: -50px;
}
}
@media (min-width: 769px) {
.card p {
padding-left:5%;
padding-right: 5%;
}
}
@media (max-width: 991px) and (min-width: 769px) {
#cards .card {
height:300px !important;
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