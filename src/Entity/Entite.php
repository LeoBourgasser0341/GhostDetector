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

    #[ORM\Column]
    private ?array $tips = null;

    #[ORM\Column]
    private ?array $clues = null;

    #[ORM\Column]
    private ?array $sanities = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return array|null
     */
    public function getSanities(): ?array
    {
        return $this->sanities;
    }

    /**
     * @param array|null $sanities
     */
    public function setSanities(?array $sanities): void
    {
        $this->sanities = $sanities;
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

    public function getTips(): ?array
    {
        return $this->tips;
    }

    public function setTips(?array $tips): static
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
