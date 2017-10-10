<?php
@include('header.html');
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="img d-block w-100" src="image/avans1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Dit is het hoofdgebouw van Avans</h3>
                <p>Hier zul je tevens niet zo veel les hebben als Informatica student.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="img d-block w-100" src="image/avans2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Dit is het LA gebouw van Avans</h3>
                <p>Dit is het gebouw waar je het meest komt als je student bent van Avans en je doet informatica.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="img d-block w-100" src="image/avans3.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Dit is het LD gebouw van Avans</h3>
                <p>Dit is een gebouw waar je niet veel maar ook niet weinig komt als je Informatica studeert op Avans.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



<div class="container">

    <h1>Home</h1>
    <p>
        Dit is de informatie website over de opleiding informatica gemaakt door Teun Aarts en Joey van de Burgt. Hier kan je alles vinden over de opleiding informatica. Omdat wij in het eerste jaar zitten weten wij al best veel van de opleiding en willen we u juist meer informatie geven zodat u een goede keuze kan maken voor de opleiding. Op de pagina informatie vind u alle informatie die u nodig heeft om een goed oordeel te krijgen over de opleiding informatica.
        Hieronder vind u al een klein beetje informatie over de opleiding en ook wat wij vinden van de opleiding.
    </p>

    <p>
        <button class="btn toggle_btn" data-toggle="collapse" href="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">Informatie over informatica</button>
        <button class="btn toggle_btn" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample1">Kenmerkend voor deze opleiding</button>
        <button class="btn toggle_btn" type="button" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample1">Wat vinden de websitemakers van de opleiding?</button>
    </p>
    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                    <p>
                        Je leert alles over de verschillende aspecten van softwareontwikkeling en automatiseringsprojecten. Je leert onderzoeken aan welke eisen de software moet voldoen, hoe je die eisen vertaalt naar een ontwerp en dat omzet in een computerprogramma. Natuurlijk vergeet je niet te testen of de software ook werkt.
                        Na de opleiding Informatica ben je Bachelor of Science. Je vindt snel een baan, want de arbeidsmarkt zit te springen om goede softwareontwikkelaars.
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body">
                    <p>
                        De software die je ontwikkelt, staat nooit op zichzelf, maar is onderdeel van een totaaloplossing: ter ondersteuning van bedrijfsprocessen, gecombineerd met andere ICT-applicaties en duurzaamheid. Bij Informatica leer je hoe je jouw software in deze context ontwikkelt. We leiden je op tot een developer die snel met nieuwe technologieën kan werken. We leren je de technologie en belichten achterliggende concepten. Het motto van onze opleiding is creating consumer & enterprise software solutions.
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample3">
                <div class="card card-body">
                    <p>
                        Teun en Joey vinden dat het een hele leuk opleiding is als je echt dingen wilt gaan ontwikkelen en producten wilt gaan maken. Want als je deze opleiding wilt gaan doen moet je wel echt inzet hebben en moet er heel veel tijd in hebben zitten.
                        Daarom moet je het programmeren en ontwikkelen van programma's ook echt als hobby zien en je moet deze opleiding eigenlijk niet echt als school zien.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>


<?php
@include('footer.html');
?>
