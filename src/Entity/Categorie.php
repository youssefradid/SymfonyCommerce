<?php

namespace App\Entity;



class Continent
{
    private $id;

    private $nom;



    public function getId(): ?string
    {
        return $this->id;
    }


    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

}