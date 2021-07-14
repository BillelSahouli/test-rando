<?php

namespace App\Entity;

use App\Repository\DifficultyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DifficultyRepository::class)
 */
class Difficulty
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $level;

    /**
     * @ORM\OneToMany(targetEntity=Trekking::class, mappedBy="difficulty", orphanRemoval=true)
     */
    private $trekkings;

    public function __construct()
    {
        $this->trekkings = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    /**
     * @return Collection|Trekking[]
     */
    public function getTrekkings(): Collection
    {
        return $this->trekkings;
    }

    public function addTrekking(Trekking $trekking): self
    {
        if (!$this->trekkings->contains($trekking)) {
            $this->trekkings[] = $trekking;
            $trekking->setDifficulty($this);
        }

        return $this;
    }

    public function removeTrekking(Trekking $trekking): self
    {
        if ($this->trekkings->removeElement($trekking)) {
            // set the owning side to null (unless already changed)
            if ($trekking->getDifficulty() === $this) {
                $trekking->setDifficulty(null);
            }
        }

        return $this;
    }
}
