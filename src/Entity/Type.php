<?php

namespace App\Entity;

use App\Repository\TypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeRepository::class)
 */
class Type
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
    private $shifting;

    /**
     * @ORM\OneToMany(targetEntity=Trekking::class, mappedBy="type", orphanRemoval=true)
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

    public function getShifting(): ?string
    {
        return $this->shifting;
    }

    public function setShifting(string $shifting): self
    {
        $this->shifting = $shifting;

        return $this;
    }

    /**
     * @return Collection|Trekking[]
     */
    public function getTrekkings(): Collection
    {
        return $this->trekkings;
    }
    public function __toString()
    {
        return $this->shifting;
    }

    public function addTrekking(Trekking $trekking): self
    {
        if (!$this->trekkings->contains($trekking)) {
            $this->trekkings[] = $trekking;
            $trekking->setType($this);
        }

        return $this;
    }

    public function removeTrekking(Trekking $trekking): self
    {
        if ($this->trekkings->removeElement($trekking)) {
            // set the owning side to null (unless already changed)
            if ($trekking->getType() === $this) {
                $trekking->setType(null);
            }
        }

        return $this;
    }
}
