<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FleurMarché - Votre boutique en ligne de fleurs</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    <?php
    // Simulation de données utilisateur et panier
    $loggedIn = false; // À remplacer par votre logique d'authentification
    $cartItems = 3; // À remplacer par le nombre réel d'articles dans le panier
    
    // Catégories de fleurs (à connecter à votre base de données)
    $categories = [
        "Roses" => ["Roses rouges", "Roses blanches", "Roses roses"],
        "Bouquets" => ["Bouquets d'anniversaire", "Bouquets de mariage", "Bouquets de félicitations"],
        "Plantes" => ["Plantes d'intérieur", "Plantes grasses", "Bonsaïs"],
        "Occasions" => ["Saint-Valentin", "Fête des Mères", "Anniversaire"]
    ];
    ?>

    <header>
        <!-- Top bar avec infos de livraison et contact -->
        
        <!-- Navbar principale -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <i class="fas fa-seedling flower-icon me-2"></i>
                    <span class="logo-text">FleurMarché</span>
                </a>
                
                <!-- Bouton toggle pour mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- Contenu navbar -->
                <div class="collapse navbar-collapse" id="navbarContent">
                    <!-- Barre de recherche -->
                    <form class="d-flex mx-auto search-bar" action="search.php" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Rechercher des fleurs, bouquets..." name="q" required>
                            <button class="btn btn-success search-btn" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                    
                    <!-- Actions utilisateur -->
                    <ul class="navbar-nav ms-auto user-actions">
                        <?php if ($loggedIn): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-user-circle"></i>
                                    <span class="d-none d-lg-inline ms-1">Mon compte</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="profile.php">Mon profil</a></li>
                                    <li><a class="dropdown-item" href="orders.php">Mes commandes</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="logout.php">Se déconnecter</a></li>
                                </ul>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">
                                    <i class="fas fa-sign-in-alt"></i>
                                    <span class="d-none d-lg-inline ms-1">Connexion</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item position-relative">
                            <a class="nav-link" href="cart.php">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="d-none d-lg-inline ms-1">Panier</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Menu catégories -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light py-1 border-bottom">
            <div class="container">
                <div class="collapse navbar-collapse" id="categoryMenu">
                    <ul class="navbar-nav mx-auto">
                        <?php foreach ($categories as $category => $subcategories): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <?php echo $category; ?>
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach ($subcategories as $subcategory): ?>
                                <li><a class="dropdown-item" href="category.php?cat=<?php echo urlencode($subcategory); ?>"><?php echo $subcategory; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <?php endforeach; ?>
                        <li class="nav-item">
                            <a class="nav-link" href="promotions.php">Promotions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="new-arrivals.php">Nouveautés</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Contenu principal du site irait ici -->

    <!-- Scripts Bootstrap et FontAwesome -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>