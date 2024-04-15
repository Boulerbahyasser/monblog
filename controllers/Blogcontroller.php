
<?php
require_once 'models/Billet.php';

class BlogController {
    private $billetModel;

    public function __construct(PDO $bdd) {
        $this->billetModel = new Billet($bdd);
    }

    public function index() {
        $billets = $this->billetModel->getBillets();
        include 'views/accueil.php';
    }

    // Ajoutez d'autres méthodes pour gérer les différentes actions du blog
}
?>

