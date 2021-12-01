<html>

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="./slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link rel="stylesheet" type="text/css" href="./css/prism.css" />
    <link rel="stylesheet" href="./css/simple.css">
    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>


    <!-- Custom styles for this template -->

</head>
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-secondary">Home</a>
                </li>
                <li><a href="#" class="nav-link px-2 text-white">Features</a>
                </li>
                <li><a href="#" class="nav-link px-2 text-white">Pricing</a>
                </li>
                <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                <li><a href="#" class="nav-link px-2 text-white">About</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">Login
                </button>
                <button type="button" class="btn btn-warning">Sign-up</button>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="slider single-item">
        <div><img src="./images/Girl-with-a-Pearl-Earring-canvas-Johannes-1665.jpg" alt=""></div>
        <div><img src="./images/300px-Johannes_Vermeer_-_Het_melkmeisje_-_Google_Art_Project.jpg" alt=""></div>
        <div><img src="./images/Screen-Shot-2021-08-24-at-11.33.06-AM.png" alt=""></div>
    </div>
</div>
<?php include 'layouts/footer.php'?>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- Slick slider scripts -->
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/prism.js"></script>
<script>
$(document).ready(function() {
    $(".single-item").slick({
        "setting-name": "setting-value",
    });
});
</script>
</body>

</html>
<?php
echo "Hello visitor <br>";
echo "it's our git project";