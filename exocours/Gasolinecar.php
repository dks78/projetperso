<?php
class Gasolinecar {
    public string $marque = "Toyota";
    public int $roue = 4;
    public int $place = 5;
    public float $essence = 50;
    public const CAPACITE_RESERVOIR = 100;
 
    

    
    public function getPlace()
    {
        return $this->place;
    }
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }
    public function getMarque()
    {
        return $this->marque;
    }
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }
    public function getRoue()
    {
        return $this->roue;
    }
    public function setRoue($roue)
    {
        $this->roue = $roue;

        return $this;
    }
    public function rouler($distance) {
        // ... (le reste du code pour la méthode rouler)
    }

    public function freiner() {
        echo "Le véhicule freine.\n";
    }

    public function ajouterEssence($quantite) {
        // Ajouter la quantité d'essence spécifiée
        $this->essence += $quantite;

        // Vérifier si le niveau d'essence dépasse la capacité maximale
        if ($this->essence > self::CAPACITE_RESERVOIR) {
            $this->essence = self::CAPACITE_RESERVOIR; // Limiter à la capacité maximale
        }

        echo "Le réservoir a été rempli avec {$quantite} litres d'essence. Niveau d'essence actuel : {$this->essence} litres.\n";
    }

    public function remplirReservoir() {
        // Remplir le réservoir jusqu'à sa capacité maximale
        $quantiteAjoutee = self::CAPACITE_RESERVOIR - $this->essence;
        $this->ajouterEssence($quantiteAjoutee);
    }


}

// Exemple d'utilisation
$car = new Gasolinecar();
$car->remplirReservoir(); // Remplir le réservoir
$car->rouler(150); // Tester la méthode rouler après avoir rempli le réservoir
?>