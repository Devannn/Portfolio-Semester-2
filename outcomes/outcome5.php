<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devan's Portfolio</title>

    <!-- CSS & Boostrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Portfolio/css/style.css">

    <!-- Rubik Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap">
</head>

<body class="outcome-5">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase font-weight-bold fixed-top main-navbar">
        <a class="navbar-brand text-white" href="/Portfolio/homepage.php">DJ</a>
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
                <li class="nav-item active">
                    <a class="nav-link text-white" href="/Portfolio/aboutme.php">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/Portfolio/contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="outcome-header outcome-5">
        <h1 class="outcome-header-text text-white text-uppercase">Personal <br> Leadership</h1>
    </div>
    <button><a href="#outcome-5-vibevault">1</a></button>
    <button><a href="#outcome-5-mediacampaign">2</a></button>
    <button><a href="#outcome-5-vibevault">3</a></button>


    <div class="outcome-body">
        <!-- Vibe Vault -->
        <div class="container text-dark" name="outcome-5-vibevault" id="outcome-5-vibevault">
            <div class="py-4"></div>
            <div class="row">
                <div class="col">
                    <h1 class="text-uppercase font-weight-bold">Vibe Vault</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Information about what i did for this learning outcome.
                </div>
            </div>
        </div>
        <div style="height:1000px;"></div>
        <!-- Vibe Vault -->

        <!-- Media Campaign -->
        <div class="container text-dark" name="outcome-5-mediacampaign" id="outcome-5-mediacampaign">
            <div class="py-4"></div>
            <div class="row">
                <div class="col">
                    <h1 class="text-uppercase font-weight-bold">Media Campaign</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Information about what i did for this learning outcome.
                </div>
            </div>
        </div>
        <div style="height:1000px;"></div>
        <!-- Media Campaign -->
        <div class="py-4"></div>
    </div>

    <script src=" js/main.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>