<?php
// Active le mode strict pour la vérification des types
declare(strict_types=1);
// Déclare l'espace de noms pour ce contrôleur
namespace Mini\Controllers;
// Importe la classe de base Controller du noyau
use Mini\Core\Controller;
use Mini\Models\User;
use Mini\Models\Produit;

// Déclare la classe finale HomeController qui hérite de Controller
final class HomeController extends Controller
{
    // Déclare la méthode d'action par défaut qui ne retourne rien
    public function index(): void
    {
        // Appelle le moteur de rendu avec la vue et ses paramètres
        $this->render('home/index', params: [
            // Définit le titre transmis à la vue
            'title' => 'Mini MVC',
            'prenom' => 'Toto',
            'prenom2' => 'Tata',
            'tabProduits' => $tabProduits = Produit::selectAuHasardavecLimite(8),
        ]);
    }

    public function users(): void
    {
        // Appelle le moteur de rendu avec la vue et ses paramètres
        $this->render('home/users', params: [
            // Définit le titre transmis à la vue
            'users' => $users = User::getAll(),
        ]);
    }

    public function catalogue(): void
    {
        $this->render('home/catalogue', params: [
            'title' => 'Tout les produits du catalogue',
            'AllProduits' => $AllProduits = Produit::getAll(),
            'ToutLesCasques' => $ToutLesCasques = Produit::getByCategorie('Casques'),
        ]);
    }

    public function about(): void
    {
        $this->render('home/apropos', params: [
            'title' => 'À propos de Mini MVC',
        ]);
    }

    public function contact(): void
    {
        $this->render('home/contact', params: [
            'title' => 'Contactez-nous',
        ]);
    }
}