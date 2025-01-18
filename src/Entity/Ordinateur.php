<?php

namespace App\Entity;

use App\Repository\OrdinateurRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
#[ApiResource]
#[ORM\Entity(repositoryClass: OrdinateurRepository::class)]
class Ordinateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 6)]
    private ?string $nom = null;

    #[ORM\Column(length: 16, nullable: true)]
    private ?string $os = null;

    #[ORM\Column(nullable: true)]
    private ?int $disk_space = null;

    #[ORM\Column(nullable: true)]
    private ?int $free_disk_space = null;

    #[ORM\Column(length: 16, nullable: true)]
    private ?string $ip_address = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $histo_mod = null;

    #[ORM\ManyToOne(inversedBy: 'ordinateurs')]
    private ?Utilisateur $utilisateur = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?DossierTaille $dossier_taille = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?DossierExecutable $dossier_executable = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Application $application = null;

    #[ORM\ManyToOne(inversedBy: 'ordinateur')]
    private ?Agence $agence = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getOs(): ?string
    {
        return $this->os;
    }

    public function setOs(?string $os): static
    {
        $this->os = $os;

        return $this;
    }

    public function getDiskSpace(): ?int
    {
        return $this->disk_space;
    }

    public function setDiskSpace(?int $disk_space): static
    {
        $this->disk_space = $disk_space;

        return $this;
    }

    public function getFreeDiskSpace(): ?int
    {
        return $this->free_disk_space;
    }

    public function setFreeDiskSpace(?int $free_disk_space): static
    {
        $this->free_disk_space = $free_disk_space;

        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ip_address;
    }

    public function setIpAddress(?string $ip_address): static
    {
        $this->ip_address = $ip_address;

        return $this;
    }

    public function getHistoMod(): ?array
    {
        return $this->histo_mod;
    }

    public function setHistoMod(?array $histo_mod): static
    {
        $this->histo_mod = $histo_mod;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getDossierTaille(): ?DossierTaille
    {
        return $this->dossier_taille;
    }

    public function setDossierTaille(?DossierTaille $dossier_taille): static
    {
        $this->dossier_taille = $dossier_taille;

        return $this;
    }

    public function getDossierExecutable(): ?DossierExecutable
    {
        return $this->dossier_executable;
    }

    public function setDossierExecutable(?DossierExecutable $dossier_executable): static
    {
        $this->dossier_executable = $dossier_executable;

        return $this;
    }

    public function getApplication(): ?Application
    {
        return $this->application;
    }

    public function setApplication(?Application $application): static
    {
        $this->application = $application;

        return $this;
    }

    public function getAgence(): ?Agence
    {
        return $this->agence;
    }

    public function setAgence(?Agence $agence): static
    {
        $this->agence = $agence;

        return $this;
    }
}
