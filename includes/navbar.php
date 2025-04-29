<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/Lafleur/index.php">
            <i class="fas fa-seedling text-success me-2"></i>
            <span class="fw-bold">LaFleur</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_URL ?>?category=all">Toutes les catégories</a>
                </li>
                <?php foreach($categories as $category => $items): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>?category=<?= urlencode($category) ?>">
                            <?= htmlspecialchars($category) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="d-flex align-items-center">
                <a href="/cart.php" class="btn btn-outline-success me-2">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="badge bg-danger"><?= $cartItems ?></span>
                </a>
                
                <?php if($loggedIn): ?>
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fas fa-user"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="/profile.php">Profil</a></li>
                            <li><a class="dropdown-item" href="/logout.php">Déconnexion</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <a href="/login.php" class="btn btn-success">
                        <i class="fas fa-sign-in-alt"></i> Connexion
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>