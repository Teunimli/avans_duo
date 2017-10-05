<?php
@include('header.html');
?>

<div class="container contactpage">
    <h1>Wie zijn wij?</h1>
    <div class="row">
        <div class="col-md-6 contact_item">
            <img src="image/teun.jpg" alt="Teun Aarts" class="rounded-circle contact_image1">
            <ul >
                <li>Teun Aarts</li>
                <li>23IVT1A1</li>
                <li>2127071</li>
                <li>taarts1@student.avans.nl</li>
            </ul>
        </div>
        
        <div class="col-md-6 contact_item">
            <img src="image/wood.jpg" alt="Teun Aarts" class="rounded-circle contact_image">
            <ul>
                <li>Joey van de burgt</li>
                <li>23IVT1A1</li>
                <li>2129669</li>
                <li>jjburgt@student.avans.nl</li>

            </ul>
        </div>
    </div>

    <div id="accordion" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
                    <a class="card_item" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Voor welke eindopdracht is deze site gemaakt?
                    </a>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    Deze site is gemaakt omdat Teun en Joey die moesten maken voorde eindopdracht van Webdesign. Maak eigenlijk moet deze website meer informatie geven over het vak Informatica op Avans zodat andere mensen er nog iets aan hebben.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
                <h5 class="mb-0">
                    <a  class="collapsed card_item" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Waarom is deze opdracht gemaakt?
                    </a>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    Deze site is gemaakt om meer te weten te komen over het vak iInformatica. Hierdoor hopen we dat toekomstige studenten een beter beeld krijgen bij het vak Informatica op Avnas. Dit is zoals wat je allemaal krijg in de komende jaren en wat het betkend om nou echt les te krijgen op Avans.
                </div>
            </div>
        </div>
    </div>

</div>

<div id="map"></div>




<?php
@include('footer.html');
?>