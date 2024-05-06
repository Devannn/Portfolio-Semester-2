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

<body class="outcome-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase font-weight-bold fixed-top main-navbar">
        <a class="navbar-brand text-white" href="../homepage.php">DJ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item ml-5">
                    <a class="nav-link text-white" href="" id="projectLink">Learning Outcome 4</a>
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
                <li class="nav-item active">
                    <a class="nav-link text-white" href="../aboutme.php">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="outcome-header outcome-4">
        <h1 class="outcome-header-text text-white text-uppercase">Professional <br> Standard</h1>
        <div class="container pt-4 buttons-container">
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-outline-secondary">
                        <a class="btn text-secondary" href="#outcome-4-trello" role="button">Trello</a>
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                        <a class="btn text-secondary" href="#outcome-4-presentations" role="button">Presentaties</a>
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                        <a class="btn text-secondary" href="#outcome-4-feedback" role="button">Feedback</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="outcome-body">
        <!-- Trello -->
        <div class="container text-dark pt-4" name="outcome-4-trello" id="outcome-4-trello">
            <div class="row">
                <div class="col">
                    <h2>Trello</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="text-justify">
                        Omdat wij in een groepje van 5 werken hebben wij er voor gekozen om met Trello te gaan werken. Met Trello kan je verschillende borden maken dit is eigenlijk een grote to-do lijst. Iedereen kan zijn of haar taken toevoegen met een deadline. Als te taken dan zijn afgerond worden die in de Review lijst gezet. Zo kunnen andere teamleden het werk meteen controlleren.
                    </p>
                </div>
                <div class="col">
                    <img src="../img/projects/vibevault/trello.png" class="img-fluid">
                </div>
                <div class="col">
                    <img src="../img/projects/mediacampaign/trello.png" class="img-fluid">
                </div>
            </div>
        </div>
        <!-- Trello -->

        <!-- Presentations -->
        <div class="container text-dark pt-4" name="outcome-4-presentations" id="outcome-4-presentations">
            <div class="row">
                <div class="col">
                    <h2>Presentaties</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="text-justify">
                        Voor de brandguide en media campaign opdrachten hebben wij verschillende presentaties gegeven. Bij elke sprintoplevering hebben wij een presentatie gemaakt. In deze presentatie is vermeld wat wij gedaan hebben en wat wij gaan doen bij de volgende sprintoplevering.

                        Om onze vooruitgang aan te tonen hebben wij verschillende presentaties gemaakt. In deze presentaties is vermeld wat we gedaan hebben en wat we nog willen doen voor de volgende sprint. Natuurlijk geven wij ook een eindpresentatie, deze presentaties geven wij aan de stakeholders en docenten.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="../img/projects/vibevault/presentation.png" class="img-fluid">
                </div>
                <div class="col">
                    <img src="../img/projects/mediacampaign/presentation.png" class="img-fluid">
                </div>
            </div>
        </div>
        <!-- Presentations -->
        <div class="py-4"></div>
    </div>

    <script src=" js/main.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>