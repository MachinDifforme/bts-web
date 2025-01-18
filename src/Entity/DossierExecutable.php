<?php

namespace App\Entity;

use App\Repository\DossierExecutableRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
#[ApiResource]
#[ORM\Entity(repositoryClass: DossierExecutableRepository::class)]
class DossierExecutable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $bureau = null;

    #[ORM\Column(nullable: true)]
    private ?int $telechargement = null;

    #[ORM\Column(nullable: true)]
    private ?int $documents = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBureau(): ?int
    {
        return $this->bureau;
    }

    public function setBureau(?int $bureau): static
    {
        $this->bureau = $bureau;

        return $this;
    }

    public function getTelechargement(): ?int
    {
        return $this->telechargement;
    }

    public function setTelechargement(?int $telechargement): static
    {
        $this->telechargement = $telechargement;

        return $this;
    }

    public function getDocuments(): ?int
    {
        return $this->documents;
    }

    public function setDocuments(?int $documents): static
    {
        $this->documents = $documents;

        return $this;
    }
}
