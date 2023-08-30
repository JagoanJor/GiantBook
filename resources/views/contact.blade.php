<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">

        <title>Home</title>
        <style>
            .navbar a{
                color: blue;
            }
            .footer{
                background-color: #0047AB;
                color: white;
                padding: 1px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/category/1">Comedy</a></li>
                                <li><a class="dropdown-item" href="/category/2">Romance</a></li>
                                <li><a class="dropdown-item" href="/category/3">Horror</a></li>
                                <li><a class="dropdown-item" href="/category/4">Fantasy</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/publisher">Publisher</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div>
            <h2 class="text-white bg-secondary">Contact</h2>
        </div>
        
        <div class="container">
            <h1>Store address :</h1>
            <p>Jalan Pembangunan Baru Raya,</p>
            <p>Kompleks Pertokoan Emerald Blok III/12</p>
            <p>Bintaro, Tangerang Selatan</p>
            <p>Indonesia</p>
            <h1>Open Daily :</h1>
            <p>08.00 - 20.00</p>
            <h1>Contact :</h1>
            <p>Phone : 021-08899776655</p>
            <p>Email : happybookstore@gmail.com</p>
        </div>

        <div class="footer fixed-bottom">
            <p class="text-center">&copy; Happy Book Store 2022</p>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>