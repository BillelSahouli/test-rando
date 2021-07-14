<?php

namespace App\Entity;

use App\Repository\TownRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TownRepository::class)
 */
class Town
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
    private $name_town;

    /**
     * @ORM\OneToMany(targetEntity=Trekking::class, mappedBy="town", orphanRemoval=true)
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

    public function getNameTown(): ?string
    {
        return $this->name_town;
    }

    public function setNameTown(string $name_town): self
    {
        $this->name_town = $name_town;

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
            $trekking->setTown($this);
        }

        return $this;
    }

    public function removeTrekking(Trekking $trekking): self
    {
        if ($this->trekkings->removeElement($trekking)) {
            // set the owning side to null (unless already changed)
            if ($trekking->getTown() === $this) {
                $trekking->setTown(null);
            }
        }

        return $this;
    }
}
