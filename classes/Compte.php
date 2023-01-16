<?php 
/**
 * Objet Compte banquaire
 */
class Compte
{
    // Propriétés

    /**
     * Titulaire du compte
     *
     * @var string
     */
    public $titulaire;

    /**
     * Solde du compte
     *
     * @var float
     */
    public $solde;

    // Méthodes
    /**
     * Constructeur du compte bancaire
     *
     * @param string $nom Nom du titulaire
     * @param float $montant Montant du solde
     */
    public function __construct(string $nom, float $montant = 100)
    {
        //On attribue le nom à la propiété tutilaire de l'instance créée
        $this->titulaire = $nom;

        //On va attribuer le montant au propriété sold
        $this->solde = $montant;
    }

    /**
     * Déposer de l'argent sur le compte
     *
     * @param float $montant Montant dépossé
     * @return void
     */
    public function deposer(float $montant) 
    {
        // on vérifie si le montant est positif
        if($montant > 0) {
            $this->solde += $montant;
        }
    }

    /**
     * Retourner une chaine de caractères affichant le solde
     *
     * @return string
     */
    public function voirSolde() {
        return " Le solde du compte est de $this->solde €";
    }

    /**
     * Retirer un montant du solde du compte
     *
     * @param float $montant Montant à retirer
     * @return void
     */
    public function retirer(float $montant)
    {
        //on verifie le montant et le solde
        if ($montant > 0 && $this->solde >= $montant) {
            $this->solde -= $montant;
        }else{
            echo "Montant invalide ou solde insuffisant";
        }
    }
}