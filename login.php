<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaFleur - Connexion</title>
    <!-- Intégration de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <!-- Formes décoratives d'arrière-plan -->
    <div class="bg-shape bg-shape-1"></div>
    <div class="bg-shape bg-shape-2"></div>
    <div class="bg-shape bg-shape-3"></div>

    <!-- Container principal avec classes Bootstrap -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7 col-sm-10 col-11">
                <div class="login-container">
                    <!-- Logo et titre -->
                    <div class="text-center mb-4">
                        <a class="navbar-brand" href="/Lafleur/index.php">
                            <i class="fas fa-seedling text-success me-2"></i>
                            <span class="fw-bold">LaFleur</span>
                        </a>
                    </div>

                    <!-- Message de bienvenue -->
                    <div class="welcome-message text-center mb-4">
                        <p class="mb-0">Faites éclore vos envies florales.</p>
                    </div>

                    <!-- Formulaire de connexion -->
                    <form>
                        <!-- Champ email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse e-mail</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="email" placeholder="Votre adresse e-mail" required>
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <!-- Champ mot de passe -->
                        <div class="mb-4">
                            <label for="password" class="form-label">Mot de passe</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" placeholder="Votre mot de passe" required>
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <!-- Bouton de connexion -->
                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" class="btn btn-login">Se connecter</button>
                        </div>

                        <!-- Liens secondaires -->
                        <div class="secondary-links text-center">
                            <a href="#">Mot de passe oublié ?</a> · <a href="#">Créer un compte</a>
                        </div>
                    </form>

                    <!-- Illustration de fleur qui éclot -->
                    <svg class="flower-bloom d-none d-md-block" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <!-- Tige -->
                        <path d="M100 190C100 190 100 140 100 110" stroke="#5b8c5a" stroke-width="4" fill="none"/>
                        
                        <!-- Feuilles -->
                        <path d="M100 150C100 150 80 140 70 150C60 160 80 170 100 160" fill="#a4c3a2" stroke="#5b8c5a" stroke-width="1"/>
                        <path d="M100 130C100 130 120 120 130 130C140 140 120 150 100 140" fill="#a4c3a2" stroke="#5b8c5a" stroke-width="1"/>
                        
                        <!-- Pétales -->
                        <path d="M100 100C90 80 70 75 65 85C60 95 75 110 100 100" fill="#e8f4e8" stroke="#a4c3a2" stroke-width="1"/>
                        <path d="M100 100C110 80 130 75 135 85C140 95 125 110 100 100" fill="#e8f4e8" stroke="#a4c3a2" stroke-width="1"/>
                        <path d="M100 100C120 100 135 85 130 75C125 65 105 75 100 100" fill="#e8f4e8" stroke="#a4c3a2" stroke-width="1"/>
                        <path d="M100 100C80 100 65 85 70 75C75 65 95 75 100 100" fill="#e8f4e8" stroke="#a4c3a2" stroke-width="1"/>
                        <path d="M100 100C90 120 75 135 85 140C95 145 110 125 100 100" fill="#e8f4e8" stroke="#a4c3a2" stroke-width="1"/>
                        <path d="M100 100C110 120 125 135 115 140C105 145 90 125 100 100" fill="#e8f4e8" stroke="#a4c3a2" stroke-width="1"/>
                        
                        <!-- Centre de la fleur -->
                        <circle cx="100" cy="100" r="15" fill="#ffd580" stroke="#ffb347" stroke-width="1"/>
                        <circle cx="100" cy="100" r="10" fill="#ffb347"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Intégration de Bootstrap JS avec Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>