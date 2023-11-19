<?php

namespace App\Entity;

use App\Repository\EntiteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntiteRepository::class)]
class Entite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tips = null;

    #[ORM\Column]
    private ?array $clues = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getTips(): ?string
    {
        return $this->tips;
    }

    public function setTips(?string $tips): static
    {
        $this->tips = $tips;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getClues(): ?array
    {
        return $this->clues;
    }

    /**
     * @param array|null $clues
     */
    public function setClues(?array $clues): void
    {
        $this->clues = $clues;
    }

}
