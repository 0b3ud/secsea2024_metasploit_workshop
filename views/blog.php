<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Cicada Symphony</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/views/static/styles.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="/">Cicada Symphony</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php?url=home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?url=blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?url=contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container my-5">
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h1>Cicada Symphony Blog</h1>
            </div>
            <div class="col-md-6">
                <form class="d-flex" id="searchForm">
                    <input class="form-control me-2" type="search" placeholder="Search blog posts" aria-label="Search" id="searchInput">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                <div id="searchResult" class="mt-2"></div>
            </div>
        </div>
        <p>Stay up-to-date with the latest cicada news, research, and fascinating discoveries.</p>
        
        <!-- Blog Posts -->
        <div class="row mt-4">
            <!-- Blog Post 1 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="https://example.com/cicada-emergence.jpg" class="card-img-top" alt="Cicada Emergence">
                    <div class="card-body">
                        <h2 class="card-title h5">The Great Emergence: Brood X Cicadas in 2021</h2>
                        <p class="card-text">Explore the incredible phenomenon of the Brood X cicada emergence that occurred across the eastern United States in 2021.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on May 15, 2023
                    </div>
                </div>
            </div>
            
            <!-- Blog Post 2 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="https://example.com/cicada-species.jpg" class="card-img-top" alt="Cicada Species">
                    <div class="card-body">
                        <h2 class="card-title h5">Discovering New Cicada Species in Southeast Asia</h2>
                        <p class="card-text">Learn about the recent discovery of three new cicada species in the rainforests of Malaysia and Indonesia.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on June 2, 2023
                    </div>
                </div>
            </div>
            
            <!-- Blog Post 3 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="https://example.com/cicada-sound.jpg" class="card-img-top" alt="Cicada Sound">
                    <div class="card-body">
                        <h2 class="card-title h5">The Science Behind Cicada Songs</h2>
                        <p class="card-text">Dive into the fascinating world of cicada acoustics and learn how these insects produce their distinctive sounds.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on June 20, 2023
                    </div>
                </div>
            </div>
            
            <!-- Blog Post 4 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="https://example.com/cicada-ecology.jpg" class="card-img-top" alt="Cicada Ecology">
                    <div class="card-body">
                        <h2 class="card-title h5">Cicadas and Climate Change: Shifting Patterns</h2>
                        <p class="card-text">Examine how climate change is affecting cicada populations and emergence patterns around the world.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on July 5, 2023
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container text-center">
            <p>&copy; 2023 Cicada Symphony. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="/views/static/search.js"></script>
</body>
</html>