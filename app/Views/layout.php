<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="/styles/acceuil.css">
    <link rel="stylesheet" href="/styles/catalogue.css">
    <title><?= isset($title) ? htmlspecialchars($title) : 'App' ?></title>
</head>
<body>
    <header>
        <section id="top-header">
            <p>Service client - 0756841236 </p>
            <div>
                <p><img src="/img/location-icon.svg" alt=""> Notre magasin</p>
                <p><img src="/img/camion-icon.svg" alt=""> Suivez votre colis</p>
            </div>
        </section>
        <section id="main-header">
            <div id="logo-search">
                <img src="/img/logo.svg" width="140px" alt="">
                <div>
                    <input type="text" placeholder="Rechercher">
                    <button>Rechercher</button>
                </div>
            </div>
            <div>
                <article>
                    <img src="img/logo-user.svg" alt="">
                    <p>Connection</p>
                </article>
                <article>
                    <img src="img/logo-heart.svg" alt="">
                    <p>Inscription</p>
                </article>
                <article>
                    <img src="img/shopping-cart.svg" alt="">
                    <p>Panier</p>
                </article>
            </div>
        </section>
        <section id="bottom-header">
            <nav>
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/catalogue">Catalogue</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/users">A propos</a></li>
                </ul>
                
            </nav>
            <p>30 Jour pour le remboursement</p>
        </section>
    </header>
    <main>
        <!-- Insère le contenu rendu de la vue -->
        <?= $content ?>
        
    </main>

    <footer>
        <section>
            <h2>Abonnez-vous à la newlestter</h2>
            <div>
                <p>Adresse mail</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M7.39999 6.31991L15.89 3.48991C19.7 2.21991 21.77 4.29991 20.51 8.10991L17.68 16.5999C15.78 22.3099 12.66 22.3099 10.76 16.5999L9.91999 14.0799L7.39999 13.2399C1.68999 11.3399 1.68999 8.22991 7.39999 6.31991Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.11 13.6501L13.69 10.0601" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                <path d="M10.2375 34.6688V29.1937C10.2375 27.375 11.6625 25.7437 13.6875 25.7437C15.5063 25.7437 17.1375 27.1687 17.1375 29.1937V34.4625C17.1375 38.1187 14.1 41.1563 10.4438 41.1563C6.78753 41.1563 3.75003 38.1 3.75003 34.4625V22.9125C3.54378 12.375 11.8688 3.84375 22.4063 3.84375C32.9438 3.84375 41.25 12.375 41.25 22.7062V34.2563C41.25 37.9125 38.2125 40.95 34.5563 40.95C30.9 40.95 27.8625 37.9125 27.8625 34.2563V28.9875C27.8625 27.1687 29.2875 25.5375 31.3125 25.5375C33.1313 25.5375 34.7625 26.9625 34.7625 28.9875V34.6688" stroke="#EDA415" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>Contactez-nous 24h/7 :<br>(+33)769661315 </p>
        </section>
        <section>
            <div>
                <img src="img/logo-1 1.png" alt="" style="margin-bottom: 30px; width: 140px;">
                <p>64 st james boulevard<br>wick , ze2 7zj</p>
                <hr>
                <div>
                    <img src="img/google.svg" alt="">
                    <img src="img/whatsapp.svg" alt="">
                    <img src="img/facebook.svg" alt="">
                </div>
            </div>
            <article>
                <h3>Informations</h3>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
  <circle cx="5" cy="5" r="5" fill="#D9D9D9"/>
</svg> Mentions légales</p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
  <circle cx="5" cy="5" r="5" fill="#D9D9D9"/>
</svg> Conditions générales de vente</p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
  <circle cx="5" cy="5" r="5" fill="#D9D9D9"/>
</svg> Politique de confidentialité</p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
  <circle cx="5" cy="5" r="5" fill="#D9D9D9"/>
</svg> Cookies</p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
  <circle cx="5" cy="5" r="5" fill="#D9D9D9"/>
</svg> Presse</p>
            </article>
            <article>
                <h3>Service Client</h3>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
  <circle cx="5" cy="5" r="5" fill="#D9D9D9"/>
</svg> Contactez-nous</p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
  <circle cx="5" cy="5" r="5" fill="#D9D9D9"/>
</svg> Retours & échanges</p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
  <circle cx="5" cy="5" r="5" fill="#D9D9D9"/>
</svg> Livraison</p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
  <circle cx="5" cy="5" r="5" fill="#D9D9D9"/>
</svg> FAQ</p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
  <circle cx="5" cy="5" r="5" fill="#D9D9D9"/>
</svg> Suivi de commande</p>
            </article>
            <article>
                <h3>Mon Compte</h3>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
  <circle cx="5" cy="5" r="5" fill="#D9D9D9"/>
</svg> Connexion</p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
  <circle cx="5" cy="5" r="5" fill="#D9D9D9"/>
</svg> Inscription</p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
  <circle cx="5" cy="5" r="5" fill="#D9D9D9"/>
</svg> Mes commandes</p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
  <circle cx="5" cy="5" r="5" fill="#D9D9D9"/>
</svg> Suivi de commande</p>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
  <circle cx="5" cy="5" r="5" fill="#D9D9D9"/>
</svg> Mes adresses</p>
            </article>
        </section>
    </footer>
</body>
</html>

