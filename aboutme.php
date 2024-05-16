<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Devan's Portfolio</title>

    <!-- CSS & Boostrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- Rubik Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent text-uppercase font-weight-bold fixed-top ">
        <a class="navbar-brand text-white" href="homepage.php">DJ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item ml-5">
                    <a class="nav-link text-white" href="project1.php" id="projectLink">About Me</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/Portfolio/projects.php">Projects</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Learning Outcomes
                    </a>
                    <div class="dropdown-menu text-uppercase" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-uppercase" href="/Portfolio/outcomes/outcome1.php">Interactive Media Products</a>
                        <a class="dropdown-item text-uppercase" href="/Portfolio/outcomes/outcome2.php">Development And Version Control</a>
                        <a class="dropdown-item text-uppercase" href="/Portfolio/outcomes/outcome3.php">Iterative Design</a>
                        <a class="dropdown-item text-uppercase" href="/Portfolio/outcomes/outcome4.php">Professional Standard</a>
                        <a class="dropdown-item text-uppercase" href="/Portfolio/outcomes/outcome5.php">Personal Leadership</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="aboutme.php">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" id="carousel-item1">
                <img src="img/vissen/vis1.jpeg" class="d-block w-100" alt="Slide 1" />
            </div>
            <div class="carousel-item" id="carousel-item2">
                <img src="img/vissen/vis2.jpeg" class="d-block w-100" alt="Slide 2" />
            </div>
            <div class="carousel-item" id="carousel-item3">
                <img src="img/vissen/vis3.jpeg" class="d-block w-100" alt="Slide 3" />
            </div>
            <div class="carousel-item" id="carousel-item3">
                <img src="img/vissen/vis4.jpeg" class="d-block w-100" alt="Slide 4" />
            </div>
        </div>
    </div>

    <div class="outcome-body">
        <!-- Vibe Vault -->
        <div class="container text-dark" name="outcome-1-vibevault" id="outcome-1-vibevault">
            <div class="py-4"></div>
            <div class="row">
                <div class="col">
                    <h1 class="text-uppercase font-weight-bold">Devan Janssen</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Hallo, ik ben Devan Janssen ik ben geboren en getogen in Helmond. In
                    mijn vrije tijd doe ik veel vissen en ben ik altijd omringt met
                    vrienden. Ik studeer momenteel aan het Fontys ICT College in
                    Eindhoven. Ik heb voor deze opleiding gekozen, omdat ik al een
                    mbo-opleiding heb gedaan in dezelfde sector en deze opleiding leuk
                    vond.
                </div>
            </div>
        </div>
        <div class="py-4"></div>
        <!-- Vibe Vault -->
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>