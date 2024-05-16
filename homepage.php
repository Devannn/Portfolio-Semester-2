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
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent text-uppercase font-weight-bold fixed-top">
        <a class="navbar-brand text-white" href="homepage.php">DJ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item ml-5">
                    <a class="nav-link text-white" href="projects/project1.php" id="projectLink">Brand Guidelines - Vibe Vault</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="projects.php">Projects</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Learning Outcomes
                    </a>
                    <div class="dropdown-menu text-uppercase" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-uppercase" href="outcomes/outcome1.php">Interactive Media Products</a>
                        <a class="dropdown-item text-uppercase" href="outcomes/outcome2.php">Development And Version Control</a>
                        <a class="dropdown-item text-uppercase" href="outcomes/outcome3.php">Iterative Design</a>
                        <a class="dropdown-item text-uppercase" href="outcomes/outcome4.php">Professional Standard</a>
                        <a class="dropdown-item text-uppercase" href="outcomes/outcome5.php">Personal Leadership</a>
                    </div>
                </li>
                <li class="nav-item active">
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
                <a href="projects.php">
                    <img src="img/projects/vibevault/vibevault-image.png" class="d-block w-100" alt="Slide 1" />
                </a>
            </div>
            <div class="carousel-item" id="carousel-item2">
                <a href="projects.php">
                    <img src="img/projects/mediacampaign/fontys.jpg" class="d-block w-100" alt="Slide 2" />
                </a>
            </div>
            <div class="carousel-item" id="carousel-item3">
                <a href="projects.php">
                    <img src="img/projects/mediacampaign/fontys.jpg" class="d-block w-100" alt="Slide 3" />
                </a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {
            // Define mapping of carousel item IDs to href links
            var projectLinks = {
                "carousel-item1": "projects/project1.php",
                "carousel-item2": "projects/project2.php",
                "carousel-item3": "projects/project3.php",
            };

            $("#carousel").on("slid.bs.carousel", function() {
                var activeItemId = $(".carousel-item.active").attr("id");
                var projectName = getProjectName(activeItemId);
                var projectLink = projectLinks[activeItemId];
                $("#projectLink").text(projectName).attr("href", projectLink);
            });

            function getProjectName(itemId) {
                switch (itemId) {
                    case "carousel-item1":
                        return "Brand Guidelines - Vibe Vault";
                    case "carousel-item2":
                        return "Media Campaign - Fontys";
                    case "carousel-item3":
                        return "Website Redesign - Fontys";
                    default:
                        return "Default Project Name";
                }
            }
        });
    </script>
</body>

</html>