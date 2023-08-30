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

            .row {
                margin-bottom: 10px;
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
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div>
            <h2 class="text-white bg-secondary">{{ $category->cat_name }}</h2>
        </div>
        
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php foreach ($bookCategory as $bc) : ?>
                    <?php if ($category->cat_id == $bc->category_id) : ?>
                        <?php foreach ($book as $b) : ?>
                            <?php if ($b->book_id == $bc->book_id) : ?>
                                <div class="col">
                                    <div class="card">
                                        <img src="{{ $b->image }}" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $b->title }}</h5>
                                            <p class="card-text">by</p>
                                            <h6 class="card-text">{{ $b->author }}</h6>
                                            <a href="/book/{{ $b->book_id }}" class="btn btn-primary">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="footer">
            <p class="text-center">&copy; Happy Book Store 2022</p>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>