<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tesis
 *
 * @ORM\Table(name="tesis")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TesisRepository")
 */
class Tesis
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
     * @ORM\Column(name="titulo", type="string", length=500)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="text")
     */
    private $autor;

    /**
     * @var string
     *
     * @ORM\Column(name="institucion", type="string", length=500)
     */
    private $institucion;

    /**
     * @var string
     *
     * @ORM\Column(name="grado", type="string", length=255)
     */
    private $grado;

    /**
     * @var string
     *
     * @ORM\Column(name="anio", type="string", length=10)
     */
    private $anio;

    /**
     * @var string
     *
     * @ORM\Column(name="asesor", type="string", length=255)
     */
    private $asesor;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;


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
     * Set titulo.
     *
     * @param string $titulo
     *
     * @return Tesis
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo.
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set autor.
     *
     * @param string $autor
     *
     * @return Tesis
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor.
     *
     * @return string
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set institucion.
     *
     * @param string $institucion
     *
     * @return Tesis
     */
    public function setInstitucion($institucion)
    {
        $this->institucion = $institucion;

        return $this;
    }

    /**
     * Get institucion.
     *
     * @return string
     */
    public function getInstitucion()
    {
        return $this->institucion;
    }

    /**
     * Set grado.
     *
     * @param string $grado
     *
     * @return Tesis
     */
    public function setGrado($grado)
    {
        $this->grado = $grado;

        return $this;
    }

    /**
     * Get grado.
     *
     * @return string
     */
    public function getGrado()
    {
        return $this->grado;
    }

    /**
     * Set anio.
     *
     * @param string $anio
     *
     * @return Tesis
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio.
     *
     * @return string
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set asesor.
     *
     * @param string $asesor
     *
     * @return Tesis
     */
    public function setAsesor($asesor)
    {
        $this->asesor = $asesor;

        return $this;
    }

    /**
     * Get asesor.
     *
     * @return string
     */
    public function getAsesor()
    {
        return $this->asesor;
    }

    /**
     * Set url.
     *
     * @param string $url
     *
     * @return Tesis
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
