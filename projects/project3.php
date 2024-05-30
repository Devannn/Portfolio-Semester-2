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
                    <p class="text-justify">In het vorige project (Media Campaign Fontys) hebben wij de fontys ict website opnieuw geredesignt. In deze opdracht gaan we dit design realiseren in HTMl, CSS en JavaScript. In het begin van de opdracht moesten wij een groepje van twee of drie man maken. Ik had ervoor gekozen om samen met Travis aan dit project te beginnen, alleen in de eerste week van dit project was Travis gestopt met de opleing daarom heb ik mezelf bij het groepje van Enes en Hakan aangesloten.</p>
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
                    <p class="text-justify">In de eerste week hebben we als groep gekeken hoe we het beste de taakverdeling kunnen doen. Wij hebben ervoor gekozen om een <a href="https://trello.com/b/PbCF3nrZ/easter-egg-development">Trello</a> te maken. Hierin zijn alle taken verdeeld met deadlines. We hebben de taken gesorteerd van boven naar beneden. Bovenaan staan de belangrijkste taken en onderaan de wat minder belangrijke taken.</p>

                    <img src="../img/projects/easteregg/trello.png" class="img-fluid" />
                </div>

                <div class="col">
                    <p class="text-justify">Om onze code te delen en onze version control te doen hebben wij gebruik gemaakt van <a href="https://git.fhict.nl/I498421/fontys-easter-egg">GitLab</a>. Hakan wilde graag onze Git Master worden dit betekend dat hij alle commits zal pushen naar de main branche. Hoe werkt GitLab nu eigenlijk? nou heel simpel. In de Wiki van onze GitLab staat een bestand met informatie over hoe je een eigen branch kan maken en hoe deze code kan 'pushen' naar de gemaakte branch.</p>

                    <img src="../img/projects/easteregg/gitlab.png" class="img-fluid" />
                </div>
            </div>
            <!-- Taakverdeling -->

            <!-- Figma Design -->
            <div class="row pt-4">
                <div class="col">
                    <h2>Figma Design</h2>
                </div>
                <div class="col text-right">
                    <h2>LO1</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="text-justify">Om onze website te realiseren hebben we natuurlijk eerst een design nodig. We hebben als groepje ervoor gekozen om het design van Enes te gebruiken omdat deze heel compleet en netjes eruit ziet. Er moesten nog wel een paar kleine aanpassingen gedaan worden, denk hierbij aan tekskgrootes en centreren van teksten en foto's</p>
                </div>
                <div class="col">
                    <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="590" height="450" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fdesign%2FjdArPtxVmNnaexkxPJuOo8%2FMedia-campaign-website-redesign-(Copy)%3Fnode-id%3D0-1%26t%3DkhTil8cy0coidWRV-1" allowfullscreen></iframe>
                </div>
            </div>
            <!-- Figma Design -->

        </div>
        <div class="py-4"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>