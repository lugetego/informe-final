<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visitas
 *
 * @ORM\Table(name="visitas")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VisitasRepository")
 */
class Visitas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="academico", type="string", length=255)
     */
    private $academico;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="text")
     */
    private $lugar;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=255)
     */
    private $pais;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="date")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFin", type="date")
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="evento", type="text")
     */
    private $evento;

    /**
     * @var string
     *
     * @ORM\Column(name="actividad", type="string", length=255)
     */
    private $actividad;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo", type="string", length=255)
     */
    private $motivo;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set academico.
     *
     * @param string $academico
     *
     * @return Visitas
     */
    public function setAcademico($academico)
    {
        $this->academico = $academico;

        return $this;
    }

    /**
     * Get academico.
     *
     * @return string
     */
    public function getAcademico()
    {
        return $this->academico;
    }

    /**
     * Set lugar.
     *
     * @param string $lugar
     *
     * @return Visitas
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar.
     *
     * @return string
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set pais.
     *
     * @param string $pais
     *
     * @return Visitas
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais.
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set fechaInicio.
     *
     * @param \DateTime $fechaInicio
     *
     * @return Visitas
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio.
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin.
     *
     * @param \DateTime $fechaFin
     *
     * @return Visitas
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin.
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set evento.
     *
     * @param string $evento
     *
     * @return Visitas
     */
    public function setEvento($evento)
    {
        $this->evento = $evento;

        return $this;
    }

    /**
     * Get evento.
     *
     * @return string
     */
    public function getEvento()
    {
        return $this->evento;
    }

    /**
     * Set actividad.
     *
     * @param string $actividad
     *
     * @return Visitas
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;

        return $this;
    }

    /**
     * Get actividad.
     *
     * @return string
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * Set motivo.
     *
     * @param string $motivo
     *
     * @return Visitas
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Get motivo.
     *
     * @return string
     */
    public function getMotivo()
    {
        return $this->motivo;
    }
}
