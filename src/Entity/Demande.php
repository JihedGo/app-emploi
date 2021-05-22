<?php

namespace App\Entity;

use App\Repository\DemandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DemandeRepository::class)
 */
class Demande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Emploi::class, inversedBy="demandes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $emploi;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="demandes")
     */
    private $employer;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isTerminated;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmploi(): ?Emploi
    {
        return $this->emploi;
    }

    public function setEmploi(?Emploi $emploi): self
    {
        $this->emploi = $emploi;

        return $this;
    }

    public function getEmployer(): ?User
    {
        return $this->employer;
    }

    public function setEmployer(?User $employer): self
    {
        $this->employer = $employer;

        return $this;
    }

    public function getIsTerminated(): ?bool
    {
        return $this->isTerminated;
    }

    public function setIsTerminated(bool $isTerminated): self
    {
        $this->isTerminated = $isTerminated;

        return $this;
    }
}
