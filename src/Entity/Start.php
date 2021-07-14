<?php

namespace App\Entity;

use App\Repository\StartRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StartRepository::class)
 */
class Start
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=8)
     */
    private $first_position;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=8)
     */
    private $sec_position;

    /**
     * @ORM\OneToMany(targetEntity=Trekking::class, mappedBy="start", orphanRemoval=true)
     */
    private $trekkings;

    public function __construct()
    {
        $this->trekkings = new ArrayCollection();
    }

    public function ar()
    {
        return array($this->first_position, $this->sec_position);
    }

    public function __toString()
    {
        foreach ($this->ar() as $dd)
            return $dd;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstPosition(): ?string
    {
        return $this->first_position;
    }

    public function setFirstPosition(string $first_position): self
    {
        $this->first_position = $first_position;

        return $this;
    }

    public function getSecPosition(): ?string
    {
        return $this->sec_position;
    }

    public function setSecPosition(string $sec_position): self
    {
        $this->sec_position = $sec_position;

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
            $trekking->setStart($this);
        }

        return $this;
    }

    public function removeTrekking(Trekking $trekking): self
    {
        if ($this->trekkings->removeElement($trekking)) {
            // set the owning side to null (unless already changed)
            if ($trekking->getStart() === $this) {
                $trekking->setStart(null);
            }
        }

        return $this;
    }
}
