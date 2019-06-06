<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visitantes
 *
 * @ORM\Table(name="visitantes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VisitantesRepository")
 */
class Visitantes
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="procedencia", type="string", length=255)
     */
    private $procedencia;

    /**
     * @var string
     *
     * @ORM\Column(name="origen", type="string", length=255)
     */
    private $origen;

    /**
     * @var string
     *
     * @ORM\Column(name="visitado", type="string", length=255)
     */
    private $visitado;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo", type="text")
     */
    private $motivo;

    /**
     * @var string
     *
     * @ORM\Column(name="evento", type="text")
     */
    private $evento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="date", nullable=true)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFin", type="date", nullable=true)
     */
    private $fechaFin;

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
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return Visitantes
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set procedencia.
     *
     * @param string $procedencia
     *
     * @return Visitantes
     */
    public function setProcedencia($procedencia)
    {
        $this->procedencia = $procedencia;

        return $this;
    }

    /**
     * Get procedencia.
     *
     * @return string
     */
    public function getProcedencia()
    {
        return $this->procedencia;
    }

    /**
     * Set origen.
     *
     * @param string $origen
     *
     * @return Visitantes
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;

        return $this;
    }

    /**
     * Get origen.
     *
     * @return string
     */
    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * Set visitado.
     *
     * @param string $visitado
     *
     * @return Visitantes
     */
    public function setVisitado($visitado)
    {
        $this->visitado = $visitado;

        return $this;
    }

    /**
     * Get visitado.
     *
     * @return string
     */
    public function getVisitado()
    {
        return $this->visitado;
    }

    /**
     * Set motivo.
     *
     * @param string $motivo
     *
     * @return Visitantes
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

    /**
     * Set evento.
     *
     * @param string $evento
     *
     * @return Visitantes
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
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * @param \DateTime $fechaInicio
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;
    }

    /**
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * @param \DateTime $fechaFin
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;
    }



}
