<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Devan's Portfolio</title>

    <!-- CSS & Boostrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css" />

    <!-- Rubik Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" />
</head>

<body class="outcome-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent text-uppercase font-weight-bold fixed-top">
        <a class="navbar-brand text-white" href="../homepage.php">DJ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item ml-5">
                    <a class="nav-link text-white" href="" id="projectLink">Learning Outcome 2</a>
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

    <div class="outcome-header outcome-2">
        <h1 class="outcome-header-text text-white text-uppercase">
            Development And Version Control
        </h1>
        <div class="container pt-4 buttons-container">
            <div class="row">
                <div class="col">
                    <!-- <button type="button" class="btn btn-outline-secondary">
                        <a class="btn text-secondary" href="#outcome-2-vibevault" role="button">Vibe Vault</a>
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                        <a class="btn text-secondary" href="#outcome-2-mediacampaign" role="button">Media Campaign</a>
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                        <a class="btn text-secondary" href="#outcome-2-vibevault" role="button">Coding Fontys</a>
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                        <a class="btn text-secondary" href="#outcome-2-vibevault" role="button">Sprint X</a>
                    </button> -->
                    <button type="button" class="btn btn-outline-secondary">
                        <a class="btn text-secondary" href="#outcome-2-portfolio" role="button">Portfolio</a>
                    </button>
                    <!--
                    <button type="button" class="btn btn-outline-secondary">
                        <a class="btn text-secondary" href="#outcome-2-vibevault" role="button">General</a>
                    </button> -->
                </div>
            </div>
        </div>
    </div>

    <div class="outcome-body">
        <!-- Portfolio -->
        <div class="container text-dark pt-4" name="outcome-2-portfolio" id="outcome-2-portfolio">
            <div class="row">
                <div class="col">
                    <h1 class="text-uppercase font-weight-bold">Portfolio</h1>
                </div>
            </div>
            <!-- Github -->
            <div class="row">
                <div class="col">
                    <h2>Github</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="text-justify">
                        Natuurlijk gebruikt bijna elke ICTer GitHub. GitHub is een
                        platform waar je je bestanden op kan uploaden en beheren. dit heb
                        ik ook gedaan voor mijn portfolio. ik heb eerst een nieuwe bestand
                        aangemaakt, elke keer als er grote aanpassingen worden gedaan in
                        mijn portfolio kan ik deze 'commiten' naar github zodat deze
                        nieuwe aanpassingen altijd online verkrijgbaar zijn. denk een
                        beetje aan een backup. Ook kan ik gemakkelijk aanpassingen
                        terugdraaien.
                    </p>
                </div>

                <div class="col-6">
                    <img src="../img/projects/portfolio/github.png" class="img-fluid" />
                </div>
            </div>
            <!-- Github -->

            <!-- Development -->
            <div class="row">
                <div class="col-6">
                    <h2>Development</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="text-justify">
                        Door gebruik te maken van mijn figma bestand ben ik te werk gegaan
                        om mijn portfolio te developen. ik heb gebruik gemaakt van HTMl,
                        CSS, JS en Bootstrap. Vooral bootstrap vind ik heel fijn omdat je
                        met bootstrap gemakkelijk een grid en huisstijl kan gebruiken die
                        op elke pagina terug komt. in Figma heb ik een paar templates
                        gemaakt voor de achtegrond foto's van de projecten en
                        leeruitkomsten. deze heb ik dan als background-image toegevoegd
                        aan de bijbehorende pagina's
                    </p>
                    <p class="text-justify">
                        De tekst op de splashpagina wordt gevuld met water, dit heb ik
                        gedaan door gebruik te maken van deze
                        <a href="https://www.youtube.com/watch?v=Y0wwJrhVJcU&t=11s">YouTube</a>
                        tutorial. Ik heb zelf een foto bijgewerkt met photoshop zodat ik
                        deze kan gebruiken als water. Ook heb ik een custom cursor
                        gemaakt. ik heb op de website pixilart.com een vishaak gemaakt van
                        30 bij 30 pixels. deze gebruik ik dan als foto in mijn CSS. zo
                        krijg je een custom cursor die je overal op de website kan
                        gebruiken.
                    </p>
                </div>

                <div class="col">
                    <img src="../img/projects/portfolio/figma.png" class="img-fluid" />
                </div>
            </div>
            <!-- Development -->
        </div>
        <!-- Portfolio -->
        <div class="py-4"></div>
    </div>

    <script src=" js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>