<?php

namespace App\Entity;

use App\Repository\BlocRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BlocRepository::class)
 */
class Bloc
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    // /**
    //  * @ORM\Column(type="integer")
    //  */
    // private $id_bloc;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $nom_bloc;

    public function getId(): ?int
    {
        return $this->id;
    }

    // public function getIdBloc(): ?int
    // {
    //     return $this->id_bloc;
    // }

    // public function setIdBloc(int $id_bloc): self
    // {
    //     $this->id_bloc = $id_bloc;

    //     return $this;
    // }

    public function getNomBloc(): ?string
    {
        return $this->nom_bloc;
    }

    public function setNomBloc(string $nom_bloc): self
    {
        $this->nom_bloc = $nom_bloc;

        return $this;
    }
}
