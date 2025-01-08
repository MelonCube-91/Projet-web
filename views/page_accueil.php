<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez l'hôtel La Flèche d’Argent à Bordeaux, un établissement haut de gamme avec des chambres luxueuses, un restaurant étoilé et des services de relaxation.">
    <meta name="keywords" content="Hôtel, Bordeaux, Luxe, Restaurant étoilé, Relaxation, Piscine, Massages">
    <meta name="author" content="VotreNom">
    <title>Accueil - Hôtel La Flèche d’Argent</title>
    <link rel="stylesheet" href="../views/style/page_accueil.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <h1>La Flèche d’Argent</h1>
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="accueil.php">Accueil</a></li>
                    <li><a href="chambres.php">Chambres</a></li>
                    <li><a href="restaurant.php">Restaurant</a></li>
                    <li><a href="relaxation.php">Relaxation</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="../controllers/C_inscription.php">Inscription</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h2>Bienvenue à l'Hôtel La Flèche d’Argent</h2>
                <p>Un séjour d'exception au cœur de Bordeaux</p>
                <a href="chambres.php" class="btn-primary">Découvrez nos chambres</a>
            </div>
        </section>

        <section class="services">
            <div class="container">
                <h3>Nos Services</h3>
                <div class="services-grid">
                    <div class="service-item">
                        <img src="images/chambres.jpg" alt="Chambres de luxe">
                        <h4>Chambres de luxe</h4>
                        <p>Des chambres élégantes et confortables pour un séjour inoubliable.</p>
                    </div>
                    <div class="service-item">
                        <img src="images/restaurant.jpg" alt="Restaurant étoilé">
                        <h4>Restaurant étoilé</h4>
                        <p>Découvrez une gastronomie raffinée orchestrée par un chef renommé.</p>
                    </div>
                    <div class="service-item">
                        <img src="images/relaxation.jpg" alt="Relaxation et Bien-être">
                        <h4>Relaxation & Bien-être</h4>
                        <p>Profitez de nos bains chauds, massages, et espaces de détente.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="avis">
            <div class="container">
                <h3>Ce que disent nos clients</h3>
                <div class="avis-grid">
                    <div class="avis-item">
                        <p>"Un séjour parfait. Les chambres sont somptueuses et le restaurant exceptionnel !" - Clara M.</p>
                    </div>
                    <div class="avis-item">
                        <p>"Un véritable havre de paix. Je recommande les massages aux pierres chaudes." - Julien D.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 La Flèche d’Argent. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>
