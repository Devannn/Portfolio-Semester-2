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
                    <a class="nav-link text-white" href="" id="projectLink">Learning Outcome 5</a>
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

    <div class="outcome-header outcome-5">
        <h1 class="outcome-header-text text-white text-uppercase">Personal <br> Leadership</h1>
        <div class="container pt-4 buttons-container">
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-outline-secondary">
                        <a class="btn text-secondary" href="#outcome-5-afspraken" role="button">Afspraken & Deadlines</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="outcome-body">
        <!-- Afspraken & Deadlines -->
        <div class="container text-dark pt-4" name="outcome-5-afspraken" id="outcome-5-afspraken">
            <div class="row">
                <div class="col-6">
                    <h2>Afspraken & Deadlines</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="text-justify">
                        Bij elk project hebben wij in het beginnen een Trellobord gemaakt. in dit bord hebben wij de taken verdeeld en deadlines toegevoegd. Ik heb er voor gezorgd dat iedereen zijn werk op tijd afmaakten. Ik vond het zelf ook belangrijk om mezelf te beinvloeden in de taken van mijn medestudenten, ik ben vaak langs geweest om te kijken of ik kon helpen. Na de taken klaar waren hebben we met het hele groepje gekeken of de taken voldoende afgerond waren. Zo wist iedereen wat er gedaan was en wat er nog gedaan moest worden.
                    </p>
                    <p class="text-justify">
                        Elke keer dat ik zelf veel vooruitgang zag of hulp nodig had ben ik direct naar docenten geweest om te vragen hoe ik mezelf kan verbeteren.
                    </p>
                </div>
            </div>
        </div>
        <!-- Afspraken & Deadlines -->

        <!-- Feedback & Feedpulse -->
        <div class="container text-dark pt-4" name="outcome-4-feedback" id="outcome-4-feedback">
            <div class="row">
                <div class="col">
                    <h2>Feedback & Feedpulse</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="text-justify">
                        Als ik goede vooruitgang maakte ging ik vaak langs docenten en medestudenten om mijn werkt aan te tonen. Ik heb nuttige informatie uit deze gespreken gehaald en veel vooruitgang kunnen boeken. Met ons groepje hebben wij ook veel feedbackmomenten gehad. Vaak konden we zo ook onze vooruitgang documenteren.
                    </p>
                    <img src="../img/feedback.png" class="img-fluid" style="margin-top:15px;">
                </div>
                <div class="col">
                    <img src="../img/feedpulse.png" class="img-fluid">
                </div>
            </div>
        </div>
        <!-- Feedback & Feedpulse -->
        <div class="py-4"></div>
    </div>

    <script src=" js/main.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>