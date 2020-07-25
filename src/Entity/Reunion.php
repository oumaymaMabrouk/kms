<?php

namespace App\Entity;

use App\Repository\ReunionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReunionRepository::class)
 */
class Reunion
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $RtldTypeReunion;

    /**
     * @ORM\Column(type="integer")
     */
    private $ReldEtatReunion;

   /**
     * @ORM\Column(type="string", length=255)
     */
    private $RpldParticipentReunion;

    /**
     * @ORM\Column(type="text")
     */
    private $Rcommentaire;

    /**
      * @var string A "Y-m-d" formatted value
     */
    private $RDatePrevue;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $RHeureRrevu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $RDureePrevu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Rlieux;

    /**
     * @ORM\Column(type="date")
     */
    private $RDateRealisation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $RDureeRealisation;

    /**
     * @ORM\Column(type="time")
     */
    private $RHeureDebut;

    /**
     * @ORM\Column(type="time")
     */
    private $RHeureFin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $RResReunion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $RResVerif;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $RResPv;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $RTitreReunion;

    /**
     * @ORM\Column(type="text")
     */
    private $RCauseAnnul;

    /**
     * @ORM\Column(type="text")
     */
    private $RCauseReport;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRtldTypeReunion(): ?int
    {
        return $this->RtldTypeReunion;
    }

    public function setRtldTypeReunion(int $RtldTypeReunion): self
    {
        $this->RtldTypeReunion = $RtldTypeReunion;

        return $this;
    }

    public function getReldEtatReunion(): ?int
    {
        return $this->ReldEtatReunion;
    }

    public function setReldEtatReunion(int $ReldEtatReunion): self
    {
        $this->ReldEtatReunion = $ReldEtatReunion;

        return $this;
    }

    public function getRpldParticipentReunion(): ?string
    {
        return $this->RpldParticipentReunion;
    }

    public function setRpldParticipentReunion(string $RpldParticipentReunion): self
    {
        $this->RpldParticipentReunion = $RpldParticipentReunion;

        return $this;
    }

    public function getRcommentaire(): ?string
    {
        return $this->Rcommentaire;
    }

    public function setRcommentaire(string $Rcommentaire): self
    {
        $this->Rcommentaire = $Rcommentaire;

        return $this;
    }

    public function getRDatePrevue(): ?\DateTimeInterface
    {
        return $this->RDatePrevue;
    }

    public function setRDatePrevue(string  $RDatePrevue): self
    {
        $this->RDatePrevue = $RDatePrevue;

        return $this;
    }

    public function getRHeureRrevu(): ?string
    {
        return $this->RHeureRrevu;
    }

    public function setRHeureRrevu(string $RHeureRrevu): self
    {
        $this->RHeureRrevu = $RHeureRrevu;

        return $this;
    }

    public function getRDureePrevu(): ?string
    {
        return $this->RDureePrevu;
    }

    public function setRDureePrevu(string $RDureePrevu): self
    {
        $this->RDureePrevu = $RDureePrevu;

        return $this;
    }

    public function getRlieux(): ?string
    {
        return $this->Rlieux;
    }

    public function setRlieux(string $Rlieux): self
    {
        $this->Rlieux = $Rlieux;

        return $this;
    }

    public function getRDateRealisation(): ?\DateTimeInterface
    {
        return $this->RDateRealisation;
    }

    public function setRDateRealisation(\DateTimeInterface $RDateRealisation): self
    {
        $this->RDateRealisation = $RDateRealisation;

        return $this;
    }

    public function getRDureeRealisation(): ?string
    {
        return $this->RDureeRealisation;
    }

    public function setRDureeRealisation(string $RDureeRealisation): self
    {
        $this->RDureeRealisation = $RDureeRealisation;

        return $this;
    }

    public function getRHeureDebut(): ?\DateTimeInterface
    {
        return $this->RHeureDebut;
    }

    public function setRHeureDebut(\DateTimeInterface $RHeureDebut): self
    {
        $this->RHeureDebut = $RHeureDebut;

        return $this;
    }

    public function getRHeureFin(): ?\DateTimeInterface
    {
        return $this->RHeureFin;
    }

    public function setRHeureFin(\DateTimeInterface $RHeureFin): self
    {
        $this->RHeureFin = $RHeureFin;

        return $this;
    }

    public function getRResReunion(): ?string
    {
        return $this->RResReunion;
    }

    public function setRResReunion(string $RResReunion): self
    {
        $this->RResReunion = $RResReunion;

        return $this;
    }

    public function getRResVerif(): ?string
    {
        return $this->RResVerif;
    }

    public function setRResVerif(string $RResVerif): self
    {
        $this->RResVerif = $RResVerif;

        return $this;
    }

    public function getRResPv(): ?string
    {
        return $this->RResPv;
    }

    public function setRResPv(string $RResPv): self
    {
        $this->RResPv = $RResPv;

        return $this;
    }

    public function getRTitreReunion(): ?string
    {
        return $this->RTitreReunion;
    }

    public function setRTitreReunion(string $RTitreReunion): self
    {
        $this->RTitreReunion = $RTitreReunion;

        return $this;
    }

    public function getRCauseAnnul(): ?string
    {
        return $this->RCauseAnnul;
    }

    public function setRCauseAnnul(string $RCauseAnnul): self
    {
        $this->RCauseAnnul = $RCauseAnnul;

        return $this;
    }

    public function getRCauseReport(): ?string
    {
        return $this->RCauseReport;
    }

    public function setRCauseReport(string $RCauseReport): self
    {
        $this->RCauseReport = $RCauseReport;

        return $this;
    }
}
