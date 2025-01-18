<?php

namespace App\Entity;

use App\Repository\ApplicationRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
#[ApiResource]
#[ORM\Entity(repositoryClass: ApplicationRepository::class)]
class Application
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $forticlient = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $kaspersky = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $parallels = null;

    #[ORM\Column(length: 12, nullable: true)]
    private ?string $rustdesk = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getForticlient(): ?string
    {
        return $this->forticlient;
    }

    public function setForticlient(?string $forticlient): static
    {
        $this->forticlient = $forticlient;

        return $this;
    }

    public function getKaspersky(): ?string
    {
        return $this->kaspersky;
    }

    public function setKaspersky(?string $kaspersky): static
    {
        $this->kaspersky = $kaspersky;

        return $this;
    }

    public function getParallels(): ?string
    {
        return $this->parallels;
    }

    public function setParallels(?string $parallels): static
    {
        $this->parallels = $parallels;

        return $this;
    }

    public function getRustdesk(): ?string
    {
        return $this->rustdesk;
    }

    public function setRustdesk(?string $rustdesk): static
    {
        $this->rustdesk = $rustdesk;

        return $this;
    }
}
