<?php

class Personnage
{
    private string $nom;
    private string $profession;
    private int $pv;
    private int $atk;

    /**
     * @param string $nom
     * @param string $profession
     * @param int $pv
     * @param int $atk
     */
    public function __construct
    (
        string $nom,
        string $profession,
        int $pv,
        int $atk
    )
    {
        //$this->nom = $nom;
        $this->setNom($nom);
        $this->setProfession($profession);
        $this->pv = $pv;
        $this->setAtk($atk);
        //$this->atk = $atk;

        //$this->presentation();
    }

    public function presentation() :void
    {
        echo 'Bonjour, je suis '.$this->nom. ' mon métier est '
            .$this->profession.
        " j'ai ".$this->pv. " de pv et ".$this->atk." d'attaque";
    }

    public function getProfession()
    {
        return $this->profession;
    }



    /**
     * @param string $profession
     */
    public function setProfession(string $profession): void
    {
        $professionDisponible = ['roi','chevalier','druide','reine'];
        if(!in_array(strtolower($profession), $professionDisponible))
        {
           throw new Exception("Cette profession n'existe pas");
        }

        $this->profession  = strtolower($profession);

    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = ucfirst(strtolower($nom));
    }


    public function getPv(int $pv): bool
    {
        if ($pv > 0)
        {
           echo "ok";
        }
        else
        {
            echo "T'as pas de vie mec!";
        }
        return $this->pv =$pv;
    }

    /**
     * @return int
     */
    public function getAtk(): int
    {
        return $this->atk;
    }

    /**
     * @param int $atk
     */
    public function setAtk(int $atk): void
    {
        $this->atk = abs($atk);
    }



};