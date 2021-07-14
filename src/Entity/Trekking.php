<?php

namespace App\Entity;

use App\Repository\TrekkingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TrekkingRepository::class)
 */
class Trekking
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
    private $title;

    /**
     * @ORM\Column(type="time")
     */
    private $duration;

    /**
     * @ORM\Column(type="decimal", precision=6, scale=3)
     */
    private $distance;

    /**
     * @ORM\Column(type="integer")
     */
    private $positive_elevation;

    /**
     * @ORM\Column(type="integer")
     */
    private $high_point;

    /**
     * @ORM\Column(type="integer")
     */
    private $low_point;

    /**
     * @ORM\Column(type="boolean")
     */
    private $return_start_point;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="blob")
     */
    private $photo;

    /**
     * @ORM\ManyToOne(targetEntity=Admin::class, inversedBy="trekkings")
     * @ORM\JoinColumn(nullable=false)
     */
    private $creator;

    /**
     * @ORM\ManyToOne(targetEntity=Difficulty::class, inversedBy="trekkings")
     * @ORM\JoinColumn(nullable=false)
     */
    private $difficulty;

    /**
     * @ORM\ManyToOne(targetEntity=Type::class, inversedBy="trekkings")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity=District::class, inversedBy="trekkings")
     * @ORM\JoinColumn(nullable=false)
     */
    private $district;

    /**
     * @ORM\ManyToOne(targetEntity=Town::class, inversedBy="trekkings")
     * @ORM\JoinColumn(nullable=false)
     */
    private $town;

    /**
     * @ORM\ManyToOne(targetEntity=Start::class, inversedBy="trekkings")
     * @ORM\JoinColumn(nullable=false)
     */
    private $start;

    /**
     * @ORM\ManyToMany(targetEntity=CrossingPoints::class, inversedBy="trekkings")
     */
    private $crossing_points;

    public function __construct()
    {
        $this->crossing_points = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDuration(): ?\DateTimeInterface
    {
        return $this->duration;
    }

    public function setDuration(\DateTimeInterface $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getDistance(): ?string
    {
        return $this->distance;
    }

    public function setDistance(string $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    public function getPositiveElevation(): ?int
    {
        return $this->positive_elevation;
    }

    public function setPositiveElevation(int $positive_elevation): self
    {
        $this->positive_elevation = $positive_elevation;

        return $this;
    }

    public function getHighPoint(): ?int
    {
        return $this->high_point;
    }

    public function setHighPoint(int $high_point): self
    {
        $this->high_point = $high_point;

        return $this;
    }

    public function getLowPoint(): ?int
    {
        return $this->low_point;
    }

    public function setLowPoint(int $low_point): self
    {
        $this->low_point = $low_point;

        return $this;
    }

    public function getReturnStartPoint(): ?bool
    {
        return $this->return_start_point;
    }

    public function setReturnStartPoint(bool $return_start_point): self
    {
        $this->return_start_point = $return_start_point;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getCreator(): ?Admin
    {
        return $this->creator;
    }

    public function setCreator(?Admin $creator): self
    {
        $this->creator = $creator;

        return $this;
    }

    public function getDifficulty(): ?Difficulty
    {
        return $this->difficulty;
    }

    public function setDifficulty(?Difficulty $difficulty): self
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(?Type $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDistrict(): ?District
    {
        return $this->district;
    }

    public function setDistrict(?District $district): self
    {
        $this->district = $district;

        return $this;
    }

    public function getTown(): ?Town
    {
        return $this->town;
    }

    public function setTown(?Town $town): self
    {
        $this->town = $town;

        return $this;
    }

    public function getStart(): ?Start
    {
        return $this->start;
    }

    public function setStart(?Start $start): self
    {
        $this->start = $start;

        return $this;
    }

    /**
     * @return Collection|CrossingPoints[]
     */
    public function getCrossingPoints(): Collection
    {
        return $this->crossing_points;
    }

    public function addCrossingPoint(CrossingPoints $crossingPoint): self
    {
        if (!$this->crossing_points->contains($crossingPoint)) {
            $this->crossing_points[] = $crossingPoint;
        }

        return $this;
    }

    public function removeCrossingPoint(CrossingPoints $crossingPoint): self
    {
        $this->crossing_points->removeElement($crossingPoint);

        return $this;
    }
}
