<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devan's Portfolio</title>

    <!-- CSS & Boostrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

    <!-- Rubik Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent text-uppercase font-weight-bold fixed-top">
        <a class="navbar-brand text-white" href="../homepage.php">DJ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item ml-5">
                    <a class="nav-link text-white" href="" id="projectLink">Easter Egg Fontys</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="../projects.php">Projects</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Learning Outcomes
                    </a>
                    <div class="dropdown-menu text-uppercase" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-uppercase" href="../outcomes/outcome1.php">Interactive Media Products</a>
                        <a class="dropdown-item text-uppercase" href="../outcomes/outcome2.php">Development And Version Control</a>
                        <a class="dropdown-item text-uppercase" href="../outcomes/outcome3.php">Iterative Design</a>
                        <a class="dropdown-item text-uppercase" href="../outcomes/outcome4.php">Professional Standard</a>
                        <a class="dropdown-item text-uppercase" href="../outcomes/outcome5.php">Personal Leadership</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../aboutme.php">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="project-3-header">
        <h1 class="outcome-header-text text-uppercase">Easter Egg <br> Fontys</h1>
    </div>

    <div class="outcome-body">
        <div class="container text-dark pt-4">
            <!-- Vooraf -->
            <div class="row pt-4">
                <div class="col">
                    <h2>Vooraf</h2>
                </div>
                <div class="col text-right">
                    <h2>LO4 & LO5</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="text-justify">In het vorige project (Media Campaign Fontys) hebben wij de fontys ict website opnieuw geredesignt. In deze opdracht gaan we dit design realiseren in HTML, CSS en JavaScript en gaan we een easter egg hier aan toevoegen. In het begin van de opdracht moesten wij een groepje van twee of drie man maken. Ik had ervoor gekozen om samen met Travis aan dit project te beginnen, alleen in de eerste week van dit project was Travis gestopt met de opleing daarom heb ik mezelf bij het groepje van Enes en Hakan aangesloten.</p>
                </div>
            </div>
            <!-- Vooraf -->

            <!-- Taakverdeling -->
            <div class="row pt-4">
                <div class="col">
                    <h2>Taakverdeling</h2>
                </div>
                <div class="col text-right">
                    <h2>LO4 & LO5</h2>
                </div>

                <div class="col-4">
                    <h2>Version Control</h2>
                </div>
                <div class="col-2 text-right">
                    <h2>LO2</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="text-justify">In de eerste week hebben we als groep gekeken hoe we het beste de taakverdeling kunnen doen. Wij hebben ervoor gekozen om een <a href="https://trello.com/b/PbCF3nrZ/easter-egg-development">Trello</a> te maken. Hierin zijn alle taken verdeeld met deadlines. We hebben de taken gesorteerd van boven naar beneden. Bovenaan staan de belangrijkste taken en onderaan de wat minder belangrijke taken. Hieronder kan je zien dat ik eigenlijk bijna alle sections heb gerealiseerd.</p>
                </div>

                <div class="col">
                    <p class="text-justify">Om onze code te delen en onze version control te doen hebben wij gebruik gemaakt van <a href="https://git.fhict.nl/I498421/fontys-easter-egg">GitLab</a>. Hakan wilde graag onze Git Master worden dit betekend dat hij alle commits zal pushen naar de main branch. Hoe werkt GitLab nu eigenlijk? nou heel simpel. In de Wiki van onze GitLab staat een bestand met informatie over hoe je een eigen branch kan maken en hoe deze code kan 'pushen' naar de gemaakte branch.</p>
                </div>
            </div>
            <div class="row">
                <div class="col"><img src="../img/projects/easteregg/trello.png" class="img-fluid" /></div>
                <div class="col"><img src="../img/projects/easteregg/gitlab.png" class="img-fluid" /></div>
            </div>
            <!-- Taakverdeling -->

            <!-- Figma Design -->
            <div class="row pt-4">
                <div class="col">
                    <h2>Figma Design <span>LO1</span></h2>
                    <p class="text-justify">Om onze website te realiseren hebben we natuurlijk eerst een design nodig. We hebben als groepje ervoor gekozen om het <a href="https://www.figma.com/file/jdArPtxVmNnaexkxPJuOo8/Media-campaign-website-redesign-(Copy)?type=design&node-id=0%3A1&mode=design&t=Qk9IXwFQFD04Ms7x-1">Figma</a> design van Enes te gebruiken omdat deze heel compleet en netjes eruit ziet. Er moesten nog wel een paar kleine aanpassingen gedaan worden, denk hierbij aan tekskgrootes en centreren van teksten en foto's.</p>
                    <p class="text-justify">Ook hebben we gekeken naar de structuur van onze website. We hebben de website verdeeld in verschillende kopjes (sections). In deze sections zitten articles. In deze articles komen dan de titles en paragrafen te staan.</p>
                </div>

                <div class="col">
                    <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="590" height="300" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fdesign%2FjdArPtxVmNnaexkxPJuOo8%2FMedia-campaign-website-redesign-(Copy)%3Fnode-id%3D0-1%26t%3DkhTil8cy0coidWRV-1" allowfullscreen></iframe>
                </div>
            </div>
            <!-- Figma Design -->

            <!-- Development -->
            <div class="row pt-4">
                <div class="col">
                    <h2>Development<span>LO3</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="text-justify">Vooraf hebben we een paar regels vastgesteld. Hieruit is gekomen dat ik (Devan) begin met de opbouw maken van de website. Uit ons design was gebleken dat we met sections en articles gaan werken, daarom heb ik deze classes een custom css gegeven zodat elk onderdeel van de pagina de zelfde spacing heeft en dat bijvoorbeeld alle headers en paragrafen de zelfde grotes hebben.</p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p class="text-justify">Hieronder zie je de 'Leerwijze' sectie. Elke sectie begint met een lijn die de sectie aantoont. Vaak komt hieronder titels en teksten te staan.</p>
                </div>
                <div class="col">
                    <p class="text-justify">Hieronder zie je HTML van de 'Leerwijze' sectie. Ik ben begonnen met een section met daarin een article voor de streep en daaronder verschillende articles voor all titels en teksten. </p>
                </div>
                <div class="col">
                    <p class="text-justify">Hieronder zie je CSS van de 'Leerwijze' sectie. Zoals je kan zien heb ik alle sections, articles, headers en paragrafen een stijl gegeven.</p>
                </div>
            </div>

            <div class="row">
                <div class="col"><img src="../img/projects/easteregg/leerwijze1.jpeg" class="img-fluid" /></div>
                <div class="col"><img src="../img/projects/easteregg/leerwijze2.png" class="img-fluid" /></div>
                <div class="col"><img src="../img/projects/easteregg/leerwijze3.png" class="img-fluid" /></div>
            </div>
            <!-- Development -->

            <!-- Easter Egg -->
            <div class="row pt-4">
                <div class="col">
                    <h2>Easter Egg<span>LO3</span></h2>
                    <p class="text-justify">Wij kregen de opdracht om natuurlijk een easter egg toe te voegen in ons project. Eerst wilde we een handje toevoegen die om de x minuten aan de zijkant van de pagina tevoorschijn zal komen, als je dan op dit kandje klikt zal het poppetje zichzelf uitrekken. Het poppetje zal dan een bord vasthebben met de vraag of de gebruiker zich al heeft aangemeld. Dit vonden wij een leuk idee maar moeilijk om te realiseren, doordat de website zelf extra tijd nodig had om af te maken hadden we ervoor gekozen om een andere easter egg toe te voegen. We hebben ervoor gekozen om verschillende lightsabers op de pagina toe te voegen die tevoorschijn komen als de gebruiker door de pagina scrollt. </p>
                </div>

                <div class="col">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video autoplay loop class="embed-responsive-item">
                            <source src="../vid/easteregg.mp4" type="video/mp4">
                        </video>
                        <video class="w-100" autoplay loop muted>
                            <source src="../vid/easteregg.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>
            </div>
            <!-- Easter Egg -->

            <!-- Usertests -->
            <div class="row pt-4">
                <div class="col">
                    <h2>Usertests<span>LO1</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="text-justify"></p>
                </div>
            </div>
            <!-- Usertests -->

            <!-- Feedback Stakeholder - Zelfreflectie -->
            <div class="row pt-4">
                <div class="col">
                    <h2>Feedback Stakeholder<span>LO4 & LO5</span></h2>
                </div>
                <div class="col">
                    <h2>Zelfreflectie<span>LO4 & LO5</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="text-justify"></p>
                </div>
                <div class="col">
                    <p class="text-justify"></p>
                </div>
            </div>
            <!-- Feedback Stakeholder - Zelfreflectie -->
        </div>
        <div class="py-4"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>