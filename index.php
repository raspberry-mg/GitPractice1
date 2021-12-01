<html>
    <title>
    <?php
    echo "Hello visitor";?>
    </title>
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
        <?php require_once "layouts/header/header.html"; ?>
    </head>
    <body>
        <div class="container">
            <div class="slider single-item">
                <div><img src="./images/Girl-with-a-Pearl-Earring-canvas-Johannes-1665.jpg" alt=""></div>
                <div><img src="./images/300px-Johannes_Vermeer_-_Het_melkmeisje_-_Google_Art_Project.jpg" alt=""></div>
                <div><img src="./images/Screen-Shot-2021-08-24-at-11.33.06-AM.png" alt=""></div>
            </div>
        </div>
        <?php
        require_once 'layouts/footer/footer.html' ?>
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

