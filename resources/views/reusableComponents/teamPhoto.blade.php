<section id="team" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center pb-5">
                <div class="heading" style="
                    font-family: &quot;Montserrat&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;
                    text-transform: uppercase;
                    font-weight: 700;
                    font-size: xx-large;
                ">Unser Team</div>
                <div class="section-subheading text-muted">Diese Leute ermöglichen IT4Kids.</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-7 col-xs-12">
                <a href="{{route('team')}}">
                <img src="{{ URL::to('/') }}/images/team.jpg" class="img-fluid" alt="Responsive image" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);">
                </a>
            </div>
            <div class="col-sm-5 col-xs-12">
                <div class="team-text">
                    <p style="margin-top:25%; font-size: medium;">
                        IT4Kids ist ein Team aus Studierenden der Initiative <a href="http://aachen.enactus.de/">Enactus Aachen e.V.</a>.
                        Wir sind aus unterschiedlichen Fachrichtungen und Disziplinen, aber haben alle dasselbe Ziel:
                        Informatikbildung für Kinder. Erfahre <a href="{{route('team')}}">hier</a> mehr über uns.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>