<?php

namespace App\Entity;

use App\Repository\WinePairingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WinePairingRepository::class)
 */
class WinePairing
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $wine;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $wine_description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cheese;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cheese_description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pairing_notes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWine(): ?string
    {
        return $this->wine;
    }

    public function setWine(string $wine): self
    {
        $this->wine = $wine;

        return $this;
    }

    public function getWineDescription(): ?string
    {
        return $this->wine_description;
    }

    public function setWineDescription(string $wine_description): self
    {
        $this->wine_description = $wine_description;

        return $this;
    }

    public function getCheese(): ?string
    {
        return $this->cheese;
    }

    public function setCheese(string $cheese): self
    {
        $this->cheese = $cheese;

        return $this;
    }

    public function getCheeseDescription(): ?string
    {
        return $this->cheese_description;
    }

    public function setCheeseDescription(string $cheese_description): self
    {
        $this->cheese_description = $cheese_description;

        return $this;
    }

    public function getPairingNotes(): ?string
    {
        return $this->pairing_notes;
    }

    public function setPairingNotes(string $pairing_notes): self
    {
        $this->pairing_notes = $pairing_notes;

        return $this;
    }
}
