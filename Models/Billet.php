<?php
class Billet {
    private $bdd;

    public function __construct(PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function getBillets() {
        $query = $this->bdd->query('SELECT * FROM T_BILLET ORDER BY BIL_ID DESC');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    
}
?>
