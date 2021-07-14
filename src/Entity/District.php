<?php

namespace App\Entity;

use App\Repository\DistrictRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DistrictRepository::class)
 */
class District
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
    private $name_district;

    /**
     * @ORM\OneToMany(targetEntity=Trekking::class, mappedBy="district", orphanRemoval=true)
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

    public function getNameDistrict(): ?string
    {
        return $this->name_district;
    }

    public function setNameDistrict(string $name_district): self
    {
        $this->name_district = $name_district;

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
            $trekking->setDistrict($this);
        }

        return $this;
    }

    public function removeTrekking(Trekking $trekking): self
    {
        if ($this->trekkings->removeElement($trekking)) {
            // set the owning side to null (unless already changed)
            if ($trekking->getDistrict() === $this) {
                $trekking->setDistrict(null);
            }
        }

        return $this;
    }
}
