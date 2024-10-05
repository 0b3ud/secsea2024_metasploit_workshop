<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - CigaleBuster Pro</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/views/static/styles.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="/">CigaleBuster Pro</a>
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
                <h1>Blog CigaleBuster Pro</h1>
            </div>
            <div class="col-md-6">
                <form class="d-flex" id="searchForm">
                    <input class="form-control me-2" type="search" placeholder="Rechercher des articles" aria-label="Rechercher" id="searchInput">
                    <button class="btn btn-outline-primary" type="submit">Rechercher</button>
                </form>
                <div id="searchResult" class="mt-2"></div>
            </div>
        </div>
        <p>Restez informé des dernières techniques de contrôle des cigales et de nos innovations.</p>
        
        <!-- Blog Posts -->
        <div class="row mt-4">
            <!-- Blog Post 1 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="https://example.com/cicada-control.jpg" class="card-img-top" alt="Contrôle des cigales">
                    <div class="card-body">
                        <h2 class="card-title h5">Nouvelles méthodes de contrôle des cigales en 2023</h2>
                        <p class="card-text">Découvrez les dernières innovations en matière de contrôle des populations de cigales.</p>
                        <a href="#" class="btn btn-primary">Lire la suite</a>
                    </div>
                    <div class="card-footer text-muted">
                        Publié le 15 mai 2067
                    </div>
                </div>
            </div>
            
            <!-- Blog Post 2 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="https://example.com/eco-friendly.jpg" class="card-img-top" alt="Méthodes écologiques">
                    <div class="card-body">
                        <h2 class="card-title h5">Contrôle écologique des cigales : notre approche durable</h2>
                        <p class="card-text">Comment nous réduisons les populations de cigales tout en préservant l'environnement.</p>
                        <a href="#" class="btn btn-primary">Lire la suite</a>
                    </div>
                    <div class="card-footer text-muted">
                        Publié le 2 juin 2016
                    </div>
                </div>
            </div>
            
            <!-- Blog Post 3 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="https://example.com/cicada-lifecycle.jpg" class="card-img-top" alt="Cycle de vie des cigales">
                    <div class="card-body">
                        <h2 class="card-title h5">Comprendre le cycle de vie des cigales pour mieux les contrôler</h2>
                        <p class="card-text">Plongez dans la biologie fascinante des cigales et apprenez comment cette connaissance guide nos méthodes.</p>
                        <a href="#" class="btn btn-primary">Lire la suite</a>
                    </div>
                    <div class="card-footer text-muted">
                        Publié le 20 juin 2022
                    </div>
                </div>
            </div>
            
            <!-- Blog Post 4 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="https://example.com/client-success.jpg" class="card-img-top" alt="Témoignage client">
                    <div class="card-body">
                        <h2 class="card-title h5">Témoignages clients : des jardins libérés des cigales</h2>
                        <p class="card-text">Découvrez comment nos clients ont retrouvé la tranquillité grâce à nos services de contrôle des cigales.</p>
                        <a href="#" class="btn btn-primary">Lire la suite</a>
                    </div>
                    <div class="card-footer text-muted">
                        Publié le 5 juillet 2024
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container text-center">
            <p>&copy; 2023 CigaleBuster Pro. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="/views/static/search.js"></script>
</body>
</html>