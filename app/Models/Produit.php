<?php

namespace Mini\Models;

use Mini\Core\Database;
use PDO;

class Produit
{
    // =====================
    // Getters / Setters
    // =====================
    private $id;
    private $nom;
    private $description;
    private $prix;
    private $photo;
    private $stock;
    private $categorie;
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    // =====================
    // Méthodes CRUD
    // =====================

    /**
     * Récupère tous les produits
     * @return array
     */

    public static function getAll(){
        $pdo = Database::getPDO();
        $stmt = $pdo->query("SELECT * FROM produits");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getByCategorie($categorie){
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare("SELECT * FROM produits WHERE categorie = :categorie");
        $stmt->execute(['categorie' => $categorie]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById($id)
    {
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare("SELECT * FROM produits WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function selectAuHasardavecLimite($limite)
    {
        $pdo = Database::getPDO();
        $stmt = $pdo->prepare("SELECT * FROM produits ORDER BY RAND() LIMIT ?");
        $stmt->bindValue(1, (int)$limite, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}