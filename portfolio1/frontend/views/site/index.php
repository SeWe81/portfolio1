<?php
/** @var yii\web\View $this */
$this->title = 'Startseite';

?>

<!-- Navigationsleiste -->
<nav class="navbar navbar-dark bg-dark navbar-expand-lg" id="topMenu">
    <a class="navbar-brand" href="#"> J. Reißverschluß Design</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
            aria-controls="navbarMain" aria-expanded="false" aria-label="navigation ausklappen">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarMain">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
                <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#service">Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#kontakt">Kontakt</a>
            </li>
        </ul>
    </div>
</nav>
<!-- Header carousel -->
<div id="headerCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#headerCarousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#headerCarousel" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#headerCarousel" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/forest-9685700_1280.jpg" class="d-block w-100" alt="Wald">
            <div class="carousel-caption d-block">
                <h1>Momentfesthalter</h1>
                <p>Ich halte fest, was sonst verloren ginge: echte Augenblicke, flüchtige Emotionen, stille Geschichten.
                    Als Fotograf bin ich nicht nur Beobachter, sondern Bewahrer des Vergänglichen.
                    Mit Empathie, Timing und einem Blick für das Unsichtbare fange ich Momente ein, die berühren –
                    ehrlich, zeitlos und voller Leben.
                </p>
                <p><a href="#portfolio" class="btn btn-light" role="button">Momente ansehen</a></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/grass-9702166_1280.jpg" class="d-block w-100" alt="Strauch">
            <div class="carousel-caption d-block">
                <h1>Wirklichkeitsveränderer</h1>
                <p>Ich sehe nicht nur, was ist – ich zeige, was sein könnte.
                    Mit jedem Bild erschaffe ich eine neue Perspektive.
                </p>
                <p><a href="#kontakt" class="btn btn-light" role="button">Veränderung herbeiführen</a></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/rusty-tailed-9674318_1280.jpg" class="d-block w-100" alt="ein Vogel">
            <
            <div class="carousel-caption d-block">
                <h1>Netzgestalter</h1>
                <p>Ich forme digitale Räume, die verbinden, begeistern und bewegen.
                    Code wird zur Sprache, Design zur Erfahrung.
                </p>
                <p><a href="#sevice" class="btn btn-light" role="button">Service verstehen</a></p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#headerCarousel"
            data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Vorheriges</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#headerCarousel"
            data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Nächstes</span>
    </button>
</div>
<!-- Service Abschnitt -->
<div class="container">
    <div class="row seitenAbschnitt text-center align-items-center" id="service">
        <div class="col-sm-4">
            <i class="fa-solid fa-camera fa-5x mb-3"></i>
            <h4>Fotografie</h4>
            <a data-bs-toggle="collapse" href="#detailsFotografie" role="button"
               aria-expanded="false" aria-controls="collapseExample">
                Mehr erfahren...
            </a>
            <div class="collapse my-2" id="detailsFotografie">
                Meine Fotografie ist Erinnerung mit Seele.
                Ich fange das Unsichtbare ein – damit es nie verloren geht.
            </div>
        </div>
        <div class="col-sm-4">
            <i class="fa-solid fa-pen-ruler fa-5x mb-3"></i>
            <h4>Grafikbearbeitung</h4>
            <a data-bs-toggle="collapse" href="#detailsGrafikbearbeitung" role="button"
               aria-expanded="false" aria-controls="collapseExample">
                Mehr erfahren...
            </a>
            <div class="collapse my-2" id="detailsGrafikbearbeitung">
                Grafikbearbeitung ist Feinarbeit mit Gefühl.
                Ich verleihe Bildern Tiefe, Klarheit und Charakter.

            </div>
        </div>
        <div class="col-sm-4">
            <i class="fa-solid fa-object-group fa-5x mb-3"></i>
            <h4>Webdesign</h4>
            <a data-bs-toggle="collapse" href="#detailsWebdesign" role="button"
               aria-expanded="false" aria-controls="collapseExample">
                Mehr erfahren...
            </a>
            <div class="collapse my-2" id="detailsWebdesign">
                Grafikdesign ist sichtbare Sprache.
                Ich forme Ideen zu Bildern, die wirken und bleiben.
            </div>
        </div>
    </div>

</div>
