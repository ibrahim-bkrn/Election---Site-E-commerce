<section id="firstSection">
    <div>
        <h1>Caméra<br> Canon</h1>
        <div>
            <button>Ajouter au panier</button><button>Voir plus</button>
        </div>
    </div>
    <div>
        <img src="/img/canon-avec-ombre.png" alt="photo d'un caméra canon">
        <h2>89€</h2>
    </div>
</section>

<section id="carrouselDeProduit">
    <div>
        <img src="/img/Manette-Sony-DualSense-V2-pour-PS5-et-PC-Noir.jpg" alt="photo d'un casque wireless" width="100px">
        <div>
            <p>Casque Wireless</p>
            <h3>59,99€</h3>
        </div>
    </div>
    <div>
        <img src="/img/Apple-MacBook-Air-13-256-Go-D-16-Go-RAM-Puce-M4-CPU-10-coeurs-GPU-8-coeurs-Argent.jpg" alt="photo d'un iphone 13 pro" width="120px">
        <div>
            <p>Ordinateur Portable</p>
            <h3>899,99€</h3>
        </div>
    </div>
    <div>
        <img src="/img/Appareil-Photo-numerique-EKANS-4K-Camera-video-Camescope-56MP-Vlogging-Camera-16X-Zoom-numerique-Carte-SD-32G-deux-Batterie-Noir.jpg" alt="photo d'un macbook pro" width="100px"> 
        <div>
            <p>Caméra 4K</p>
            <h3>129,99€</h3>
        </div>
    </div>
</section>

<section id="popularProduct">
    <h2>Les produits populaires</h2>
    <section>
        <?php foreach ($tabProduits as $productPopular) : ?>
            <article>
                <img src="/img/<?= $productPopular['photo']?>" alt="" > 
                <div>
                    <h3><?= $productPopular['nom'] ?></h3>
                    <span><?= $productPopular['prix'] ?>€</span>
                </div>
            </article>
        <?php endforeach; ?>
    </section>
</section>

<section id="NewOrdinateur">
    <div>
        <button>Nouveauté Apple</button>
        <h3>Jusqu'à -50%</h3>
        <p>Nouvelle puce M4</p>
        <button>Voir tout les produits</button>
    </div>
    
</section>

<section id="servicesHome">
    <article>
        <img src="/img/box-tick.svg" alt="">
        <div>
            <h4>Free delivery</h4>
            <p>on order above 50,00€</p>
        </div>
    </article>
    <article>
        <img src="/img/crown.svg" alt="">
        <div>
            <h4>Best quality</h4>
            <p>best quality in low price</p>
        </div>
    </article>
    <article>
        <img src="/img/shield-security.svg" alt="">
        <div>
            <h4>1 year warranty</h4>
            <p>Avaliable warranty</p>
        </div>
    </article>
</section>

<section id="avisClient">
    <article>
        <div>
            <img src="/img/Ellipse 4.png" alt="photo d'un client" width="86px">
            <p>Savannah Nguyen</p>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur. Nec sit enim tellus faucibus bibendum ullamcorper. Phasellus tristique aenean at lorem sed scelerisque.</p>
    </article>

    <article>
        <div>
            <img src="/img/Ellipse 4-1.png" alt="photo d'un client" width="86px">
            <p>Esther Howard</p>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur. Nec sit enim tellus faucibus bibendum ullamcorper. Phasellus tristique aenean at lorem sed scelerisque.</p>
    </article>

    <article>
        <div>
            <img src="/img/Ellipse 4.png" alt="photo d'un client" width="86px">
            <p>Esther Howard</p>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur. Nec sit enim tellus faucibus bibendum ullamcorper. Phasellus tristique aenean at lorem sed scelerisque.</p>
    </article>
</section>

<section id="marquePartenaire">
    <img src="/img/brand-4.svg" alt="">
    <img src="/img/brand-5.svg" alt="">
    <img src="/img/brand-6.svg" alt="">
    <img src="/img/brand-7.svg" alt="">
    <img src="/img/brand-8.svg" alt="">
</section>
