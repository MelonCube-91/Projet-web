<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon de Massage - Luxe et Relaxation</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        /* Reset de base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Styles généraux */
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            background-color: #f8f6f1;
            color: #333;
            margin: 0;
        }

        header {
            background-image: url('header-bg.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 60px 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            font-weight: bold;
        }

        header p {
            font-size: 1.3rem;
            margin-top: 15px;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .service {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .service img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            filter: brightness(0.9);
            transition: filter 0.3s ease;
        }

        .service:hover img {
            filter: brightness(1);
        }

        .service-details {
            padding: 20px;
            text-align: center;
        }

        .service-details h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: #3e2c41;
            margin-bottom: 10px;
        }

        .service-details p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 15px;
        }

        .service-details a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #3e2c41;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .service-details a:hover {
            background-color: #5a3d5c;
        }

        footer {
            background-color: #3e2c41;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }

        footer p {
            font-size: 1rem;
        }

        /* Animation au défilement */
        .service {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .service.visible {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 2.5rem;
            }

            header p {
                font-size: 1rem;
            }

            .service-details p {
                font-size: 0.9rem;
            }

            .service-details a {
                padding: 8px 16px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Salon de Massage Luxe et Relaxation</h1>
        <p>Offrez-vous une expérience unique de bien-être et de sérénité</p>
    </header>

    <div class="container">
        <!-- Service 1 -->
        <div class="service">
            <img src="assets/gommage corps.jpg" alt="Photo illustrant le service de gommage corps en cabine">
            <div class="service-details">
                <h2>Gommage corps en cabine</h2>
                <p>Offrez à votre peau une douceur inégalée grâce à notre gommage en cabine. Nos experts utilisent des produits naturels pour un soin profond et relaxant.</p>
                <a href="#">En savoir plus</a>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="service">
            <img src="assets/message relaxant aux huiles essentielles.jpg" alt="Photo illustrant le massage relaxant aux huiles essentielles">
            <div class="service-details">
                <h2>Massage relaxant aux huiles essentielles</h2>
                <p>Plongez dans une détente absolue avec notre massage aux huiles essentielles. Idéal pour libérer le stress et retrouver un équilibre intérieur.</p>
                <a href="#">En savoir plus</a>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="service">
            <img src="assets/Massage tonique.jpg" alt="Photo illustrant le massage tonique">
            <div class="service-details">
                <h2>Massage tonique</h2>
                <p>Stimulez votre énergie et revitalisez votre corps grâce à notre massage tonique, parfait pour relâcher les tensions musculaires.</p>
                <a href="#">En savoir plus</a>
            </div>
        </div>

        <!-- Service 4 -->
        <div class="service">
            <img src="assets/Massage balinais.png" alt="Photo illustrant le massage balinais">
            <div class="service-details">
                <h2>Massage balinais</h2>
                <p>Voyagez à travers les traditions de Bali avec notre massage balinais, une expérience unique qui combine relaxation et évasion.</p>
                <a href="#">En savoir plus</a>
            </div>
        </div>

        <!-- Service 5 -->
        <div class="service">
            <img src="assets/Massage aux pierres chaudes.jpg" alt="Photo illustrant le massage aux pierres chaudes">
            <div class="service-details">
                <h2>Massage aux pierres chaudes</h2>
                <p>Profitez d'une chaleur apaisante pour détendre vos muscles en profondeur et favoriser une relaxation totale avec notre massage aux pierres chaudes.</p>
                <a href="#">En savoir plus</a>
            </div>
        </div>

        <!-- Service 6 -->
        <div class="service">
            <img src="assets/spa.jpg" alt="Photo illustrant le spa de luxe">
            <div class="service-details">
                <h2>Spa de luxe</h2>
                <p>Découvrez notre espace spa de luxe, conçu pour vous offrir des moments de relaxation inoubliables. Jacuzzi, sauna et bien plus encore pour votre bien-être.</p>
                <a href="#">En savoir plus</a>
            </div>
        </div>
    </div>

   
    <script>
        // Animation au défilement
        const services = document.querySelectorAll('.service');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.2 });

        services.forEach(service => {
            observer.observe(service);
        });
    </script>
</body>
</html>
